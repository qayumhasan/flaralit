@extends('backend.layouts.master')
@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="row align-items-center  justify-content-between pb-3">
      <div class="col-lg-6 col-sm-6">
        <h6 class="page-title">Testimonials</h6>
      </div>
      <div class="col-lg-6 col-sm-6 text-sm-right mt-sm-0 mt-3 right-part">
        <a href="{{ route('admin.testimonial.create') }}" class="btn btn-md btn-success">Add New</a>
      </div>
    </div>

    {{-- Datatable --}}
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">List of Testimonials</h4>
            <div class="table-responsive">
              <table id="order-listing" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th>Order #</th>
                    <th>Image</th>
                    <th>Full Name</th>
                    <th>Organization</th>
                    <th>Comment</th>
                    <th>Active</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @php $count = 1; @endphp
                  @foreach($testimonials as $testimonial)
                  <tr>
                    <td>{{ $count++ }}</td>
                    <td class="py-1">
                      <img src="{{static_asset($testimonial->image)}}" />
                    </td>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->organization }}</td>

                    <td>{{ Str::limit($testimonial->comment, 30) }}</td>
                    <td>
                      @if ($testimonial->status)
                      <span class="badge bg-primary">Published</span>
                      @else
                      <span class="badge rounded-pill bg-warning text-dark">Unpublish</span>
                      @endif
                    </td>
                    <td>
                      <div class="d-flex">
                        <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}"
                          class="btn btn-outline-warning" title="Edit"><i class="ti-pencil"></i></a>
                        <form class="ml-2" action="{{ route('admin.testimonial.destroy', $testimonial->id) }}"
                          method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-outline-danger show_confirm" title="Delete"><i
                              class="ti-trash"></i></button>
                        </form>
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
    </div>
  </div>

</div>
@endsection