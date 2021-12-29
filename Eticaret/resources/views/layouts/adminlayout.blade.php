<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets') }}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('assets') }}/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--right slidebar-->
    <link href="{{ asset('assets') }}/admin/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{ asset('assets') }}/admin/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admin/css/style-responsive.css" rel="stylesheet" />

    <script language="javascript"> function confirmDel() { var agree=confirm("Bu içeriği silmek istediğinizden emin misiniz?\nBu işlem geri alınamaz!"); if (agree) { return true ; } else { return false ;} } </script> 


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      <section id="container">
          <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <i class="fa fa-bars"></i>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo">Admin<span>Dashboard</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                
            </div>
            
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="/product">
                          <i class="fa fa-book"></i>
                          <span>Product</span>
                      </a>
                  </li>
                  <li>
                      <a  href="/category">
                      <i class="fa fa-map-marker"></i>
                          <span>Category</span>
                      </a>
                  </li>
                  <li>
                      <a  href="/">
                      <i class="fa fa-home"></i>
                          <span> Return Home Page</span>
                      </a>
                  </li>
                                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <section id="main-content">
          <section class="wrapper">
      @yield('content')
</section>
</section>
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2021 &copy; The Book Store. All rights reserved.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
    </section>
      <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets') }}/admin/js/jquery.js"></script>
    <script src="{{ asset('assets') }}/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="{{ asset('assets') }}/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{ asset('assets') }}/admin/js/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('assets') }}/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="{{ asset('assets') }}/admin/js/owl.carousel.js" ></script>
    <script src="{{ asset('assets') }}/admin/js/jquery.customSelect.min.js" ></script>
    <script src="{{ asset('assets') }}/admin/js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="{{ asset('assets') }}/admin/js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="{{ asset('assets') }}/admin/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="{{ asset('assets') }}/admin/js/sparkline-chart.js"></script>
    <script src="{{ asset('assets') }}/admin/js/easy-pie-chart.js"></script>
    <script src="{{ asset('assets') }}/admin/js/count.js"></script>
    

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>
    <!--script for this page only-->
    <script src="{{ asset('assets') }}/admin/js/editable-table.js"></script>
                <script type="text/javascript" src="{{ asset('assets') }}/admin/assets/data-tables/jquery.dataTables.js"></script>
                <script type="text/javascript" src="{{ asset('assets') }}/admin/assets/data-tables/DT_bootstrap.js"></script>
                <script src="{{ asset('assets') }}/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
                <script src="{{ asset('assets') }}/admin/js/jquery-migrate-1.2.1.min.js"></script>

                <!-- END JAVASCRIPTS -->
                <script>
                    jQuery(document).ready(function() {
                        EditableTable.init();
                    });
                </script>
  </body>

</html>