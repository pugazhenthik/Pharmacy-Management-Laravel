<script src="{{asset('Backend_assets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('Backend_assets/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('Backend_assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Backend_assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('Backend_assets/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{asset('Backend_assets/assets/js/custom.js')}}"></script>
<script src="{{asset('Backend_assets/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('Backend_assets/assets/js/dashboard/dash_1.js')}}"></script>

    
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 --><script type="text/javascript" src="{{asset('Backend_assets/js/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Backend_assets/js/toastr.min.js')}}"></script>
<script type="text/javascript">
	toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
<script type="text/javascript">
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#previmage')
        .attr('src', e.target.result)
        .width(400)
        .height(150);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
@yield('js')