 <script src="{{ asset('/public/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{ asset('/public/js/popper.min.js')}}"></script>
    <script src="{{ asset('/public/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/public/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('/public/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('/public/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('/public/js/jquery.animateNumber.min.js')}}"></script> 
    <script src="{{ asset('/public/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('/public/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>


    <script type="text/javascript">
    $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        format: 'yyyy/mm/dd'

  });
});
      ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector('#editor1' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector('#editor2' ) )
        .catch( error => {
            console.error( error );
        } );

</script>