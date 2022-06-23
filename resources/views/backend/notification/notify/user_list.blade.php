@php
    use App\Models\Role;
    use App\Models\User;
    use App\Models\NotificationTemplate;
@endphp
@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row align-items-center justify-content-between pb-3">
                <div class="col-lg-6 col-sm-6">
                    <h6 class="page-title">Notification Management</h6>
                </div>
                <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
                    <button class="btn btn-md btn-warning"
                            notificationType="{{ NotificationTemplate::NOTIFICATION_TYPE_EMAIL }}"
                            onclick="global_notification(this)">Send Email
                    </button>
                    <button class="btn btn-md btn-primary"
                            notificationType="{{ NotificationTemplate::NOTIFICATION_TYPE_SMS }}"
                            onclick="global_notification(this)">Send SMS
                    </button>
                    <button class="btn btn-md btn-secondary text-white"
                            notificationType="{{ NotificationTemplate::NOTIFICATION_TYPE_BOTH }}"
                            onclick="global_notification(this)">Send Email & SMS
                    </button>
                </div>
            </div>
            {{-- Datatable --}}
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">List of Users</h4>
                            <div class="table-responsive">
                                <table id="order-listing" class="table" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" id="check_all" value="select_all">
                                        </th>
                                        <th>Image</th>
                                        <th>Full Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>
                                                <input class="user_checkbox" type="checkbox" name="user_ids[]" value="{{ $user->id }}">
                                            </td>
                                            <td class="py-1">
                                                <img src="{{static_asset(($user->image != null) ? $user->image : get_default_user_image() )}}"/>
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ Role::ROLE_LIST[$user->role] }}</td>
                                            <td>
                                            <span class="badge {{ ($user->status == User::STATUS_ACTIVE) ? 'badge-success' : 'badge-danger' }}">
                                                {{ User::STATUS_TYPE_LIST[$user->status] }}
                                            </span>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <button class="btn btn-outline-warning" title="Send Email"
                                                            notificationType="{{ NotificationTemplate::NOTIFICATION_TYPE_EMAIL }}"
                                                            userId="{{ $user->id }}"
                                                            onclick="individual_notification(this)">
                                                        Email
                                                    </button>
                                                    <button
                                                            class="btn btn-outline-primary ml-1" title="Send SMS"
                                                            notificationType="{{ NotificationTemplate::NOTIFICATION_TYPE_SMS }}"
                                                            userId="{{ $user->id }}"
                                                            onclick="individual_notification(this)">
                                                        SMS
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="showTemplateModal" data-bs-backdrop="static" data-bs-keyboard="false"
                     tabindex="-1"
                     aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form action="{{ route('admin.notification.send') }}" method="POST" id="editForm">
                                @csrf
                                <input type="hidden" name="user_ids" value="" id="user_ids">
                                <input type="hidden" name="notification_type" value="" id="notification_type">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="template_id">Notification Template <span
                                                    class="text-danger">*</span></label>
                                        <select id="template_id" class="form-control" name="template_id">
                                            <option value="" class="selected">Select Template</option>
                                            @foreach($templates as $template)
                                                <option value="{{ $template->id }}">{{ $template->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('template_id')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $('#check_all').change(function() {
            if(this.checked) {
                $('.user_checkbox').prop('checked', true);
            } else {
                $('.user_checkbox').prop('checked', false);
            }
        });

        function show_template_modal(user_ids, notification_type) {
            $('#user_ids').val(JSON.stringify(user_ids));
            $('#notification_type').val(notification_type);
            $('#showTemplateModal').modal('show');
        };

        function individual_notification(el) {
            var user_ids = [$(el).attr('userId')];
            var notification_type = $(el).attr('notificationType');

            show_template_modal(user_ids, notification_type);
        }
        
        function global_notification(el) {
            if ($('.user_checkbox:checkbox:checked').length <= 0) {
                swal({
                    text: "Please select a user first!",
                    icon: "warning",
                    dangerMode: true,
                });
            } else {
                var notification_type = $(el).attr('notificationType');
                var user_ids = [];
                $('.user_checkbox:checked').each(function(){
                    user_ids.push($(this).val());
                });

                show_template_modal(user_ids, notification_type);
            }
        }
    </script>
@endpush
