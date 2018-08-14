<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet">
  <link href="{{ asset('css/backend_css/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend_css/style.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
</head>

<body>
  <!-- container section start -->
  <!-- <section id="container" class=""> -->
    <div id="main-wrapper">

    @include('layouts.adminLayout.admin_header')

    @include('layouts.adminLayout.admin_sidebar')

    @yield('content')


  </div>
  <!-- </section> -->
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{ asset('js/back_js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/back_js/popper.min.js') }}"></script>
  <script src="{{ asset('js/back_js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/back_js/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ asset('js/back_js/sparkline.js') }}"></script>
  <script src="{{ asset('js/back_js/waves.js') }}"></script>
  <script src="{{ asset('js/back_js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('js/back_js/custom.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('js/back_js/datatables.min.js') }}"></script>

 <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
  </script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(function(){
    $("#expiry_date").datepicker({ 
        minDate: 0,
        dateFormat: 'yy-mm-dd' 
      });
  });
  </script>

</body>

</html>
