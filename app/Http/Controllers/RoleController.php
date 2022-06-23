<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index()
    {
        $data['roles'] = Role::latest()->get();

        return view('backend.role.index', $data);
    }

    public function permission($role_id)
    {
        try {
            $role                = Role::with('permissions')->findOrFail($role_id);
            $role_permission_ids = $role->permissions()->get()->pluck('permission_id')->toArray();
            $permissions         = Permission::all()->chunk(2);

            return view('backend.role.permissions', compact('role', 'permissions', 'role_permission_ids'));
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function update_permission(Request $request, $role_id)
    {
        DB::beginTransaction();
        try {
            PermissionRole::where('role_id', $role_id)->delete();
            if (!empty($request->permissions)) {
                foreach ($request->permissions as $permission) {
                    $permission_role                = new PermissionRole();
                    $permission_role->role_id       = $role_id;
                    $permission_role->permission_id = $permission;
                    $permission_role->save();
                }
            }

            DB::commit();
            toastr()->success(__('Role permission updated successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            DB::rollBack();
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $role = Role::findOrFail($id);
            $role->delete();

            toastr()->success(__('Role deleted successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }
}
