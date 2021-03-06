<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{asset('/js/app.js')}}" type="text/javascript"></script>

@stack('scripts')

<script type="text/javascript">
    $(document).ready(function () {
        window.setTimeout(function() {
            $(".callout").fadeTo(1000, 0).slideUp(1000, function(){
                $(this).remove();
            });
        }, 1500);
    });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
