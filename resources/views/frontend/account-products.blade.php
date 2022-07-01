
@extends('frontend.layouts.master')
@push('style')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://appsumo2-cdn.appsumo.com/static/dist/css/base.89a21e9d3213.css" type="text/css">

<link rel="stylesheet" href="https://appsumo2-cdn.appsumo.com/static/dist/css/user_account_products.3aa6a23084c8.css"
    type="text/css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" type="text/css">
<!-- Latest compiled and minified CSS -->




<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->


<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>

.popup {
  background-color: #000000a6;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1000;
  /*  display: flex; */
  display: none;
  align-items: center;
  justify-content: center;
}
.popup-content {
  display: none;
  max-width: 800px;
  width: 100%;
  background: #fff;
  min-height: 400px;
  overflow: auto;
  position: relative;
  padding: 35px;
  margin: 0 15px;
  box-sizing: border-box;
  transition: 0.3s ease;
}
.popup-content .close {
  position: absolute;
  right: 5px;
  top: 5px;
  cursor: pointer;
}
body.showPopup .popup {
  display: flex;
}
body.showPopup .popup-content {
  display: block;
  animation: popup 0.3s forwards;
}
body.removePopup .popup-content {
  animation: popupclose 0.3s forwards !important;
}

@keyframes popup {
  0% {
    transform: scale(0.9);
    opacity: 0.5;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}
@keyframes popupclose {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(0.9);
    opacity: 0.5;
  }
}

/* button */
.open-btn {
  background-color: red;
  color: #fff;
  display: inline-block;
  padding: 12px 24px;
  border-radius: 24px;
  cursor: pointer;
}

</style>
@endpush
@section('content')


<div class="popup">
    <div class="popup-content">
      <img src="https://sudip-bhowmick.github.io/images/img/close.svg" alt="close" class="close">
      <div>Popup Content</div>
    </div>
  </div>
  

<section class="pt-20 pt-lg-50">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-md-end flex-column flex-md-row mb-20 mb-md-30">
                <h1 class="sumo-title mr-md-20 mb-20 mb-md-0">Products</h1>
                <a class="sumo-purchase-history" href="/account/history/">View purchase history</a>
            </div>
        </div>
    </div>
</section>
<section class="pb-50">
    <div class="container">
        <div class="row">
     
  
            <div class="col-lg-12 col-md-12">
                <table id="example_datatable" class="table table-striped table-bordered text-center" style="width:100%">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Status</th>
                            <th>Plan</th>
                            <th>Purchase date</th>
                            <th>Redeem By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach($orders as $row)

                        <tr>
                            <td>{{$row->product_name}}</td>
                            <td>Active</td>
                            <td>Edinburgh</td>
                            <td>{{$row->created_at->format('d M Y')}}</td>
                            <td> {{ \Carbon\Carbon::now()->addDays(5)->format('d M Y') }}</td>
                            <td>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Select
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                          <button onclick="openPopup()" class="dropdown-item" type="button"><i class="fa fa-undo" aria-hidden="true"></i> Refund</button>
                                          <button class="dropdown-item" type="button"><i class="fas fa-file-invoice"></i> View Invoice</button>
                                          <button class="dropdown-item" type="button"><i class="fa fa-comment" aria-hidden="true"></i> Leave a review</button>
                                        </div>
                                      </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot class="d-none">
                        <tr>
                            <th>Product</th>
                            <th>Status</th>
                            <th>Plan</th>
                            <th>Purchase</th>
                            <th>Redeem By</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
        </div>

 

    </div>



</section>






@endsection
@push('script')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example_datatable').DataTable();
});

function openPopup() {
  $("body").addClass("showPopup");
}
function closePopup() {
  $("body").removeClass("showPopup removePopup");
}
function closePopupScreen() {
  $("body").addClass("removePopup");
  setTimeout(closePopup, 200);
}

$(".popup .close").on("click", function () {
  closePopupScreen();
});

// auto open popup
// openPopup();
// setTimeout(openPopup, 1000);

// close popup
$(document).keyup(function (e) {
  if (e.key === "Escape") {
    closePopup();
  }
});
</script>
@endpush