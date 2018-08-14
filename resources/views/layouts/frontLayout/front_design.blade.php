<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Fashionpress an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href="{{ asset('css/frontend_css/main.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('css/frontend_css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{ asset('css/frontend_css/etalage.css') }}">
<link href="{{ asset('css/frontend_css/font-awesome.min.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('css/frontend_css/style.css') }}" rel='stylesheet' type='text/css' />

<script src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend_js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend_js/custom.js') }}"></script>
<script src="{{ asset('js/frontend_js/responsiveslides.min.js') }}"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script src="{{ asset('js/frontend_js/jquery.etalage.min.js') }}"></script>
    <script>
      jQuery(document).ready(function($){

        $('#etalage').etalage({
          thumb_image_width: 300,
          thumb_image_height: 400,
          source_image_width: 900,
          source_image_height: 1200,
          show_hint: true,
          click_callback: function(image_anchor, instance_id){
            alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
          }
        });

      });
    </script>
<script src="{{ asset('js/frontend_js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function () {
              $('#horizontalTab').easyResponsiveTabs({
                  type: 'default', //Types: default, vertical, accordion           
                  width: 'auto', //auto or any width like 600px
                  fit: true   // 100% fit in a container
              });
          });
            </script>
</head>
<body>

	@include('layouts.frontLayout.front_header')

	@yield('content')

	@include('layouts.frontLayout.front_footer')

</body>
</html>		