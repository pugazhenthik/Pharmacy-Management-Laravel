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


<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{{-- datatable cdn --}}
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
{{-- iziToast js script --}}

<script>
    @foreach ($errors->all() as $error)
    iziToast.warning({
        title: "Warning",
        message: "{{ $error }}",
        position: 'topRight',
    });
    @endforeach

    @if(Session::has('message'))
      var type = "{{ Session::get('alert-type') }}";
      switch(type){
          case 'info':
          iziToast.info({
            title: "{{ Session::get('title') }}",
            message: "{{ Session::get('message') }}",
            position: 'topRight',
        });
              break;

          case 'warning':
              iziToast.warning({
                title: "{{ Session::get('title') }}",
                message: "{{ Session::get('message') }}",
                position: 'topRight',
            });
              break;

          case 'success':
          iziToast.success({
                title: "{{ Session::get('title') }}",
                message: "{{ Session::get('message') }}",
                position: 'topRight',
                });
              break;

          case 'error':
              iziToast.error({
                title: "{{ Session::get('message') }}",
                message: "{{ Session::get('message') }}",
                position: 'topRight',
                });
              break;
      }
    @endif
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
@yield('script')