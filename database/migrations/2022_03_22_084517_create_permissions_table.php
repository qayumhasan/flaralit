<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('name');
            $table->timestamps();
        });
        foreach (\App\Models\Permission::PERMISSION_LIST as $key => $permission) {
            DB::table('permissions')->insert([
                [
                    'id'         => $key,
                    'name'       => $permission,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
