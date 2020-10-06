@extends('Backend.layouts.app')
@section('title', ' Dashboard')
@section('head', 'Dashboard')
@section('content')
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">       
    <div class="widget widget-account-invoice-one">
        <div class="widget-content">
            <div class="invoice-box">
                <div class="acc-total-info ">
                    <h5 class="w-value" style="color: black">Company</h5>
                    <p class="acc-amount"></p>
                </div>
                <div class="inv-action">
                    <a href="#" class="btn btn-danger">More Info</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- <script src="{{asset('Backend_assets/js/company.js')}}"></script> -->
<script type="text/javascript">
    
</script>
@endsection
