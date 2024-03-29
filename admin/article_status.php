<?php include "main.php";
$id = $_GET['journal_id'];
if(isset($_REQUEST['journal_id'])){
  extract($_REQUEST);
  
}
if(isset($_POST['ArticleInPress'])){
  $status = $_POST['ArticleInPress'];
  $user->update_issue($id,$status);
}
if(isset($_POST['PreviousIssue'])){
  $pre = $_POST['PreviousIssue'];
  $user->update_issue($id,$pre);
}
if(isset($_POST['SpecialIssue'])){
  $spe = $_POST['SpecialIssue'];
  $user->update_issue($id,$spe);
}
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/tables/datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2014 06:10:12 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Edelweiss Dashboard</title>

  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="global/css/bootstrap.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/css/bootstrap-extend.min599c.css?v4.0.2">
  <link rel="stylesheet" href="assets/css/site.min599c.css?v4.0.2">


  <!-- Plugins -->
  <link rel="stylesheet" href="global/vendor/animsition/animsition.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/switchery/switchery.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/intro-js/introjs.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="global/vendor/datatables.net-bs4/dataTables.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.min599c.css?v4.0.2">

  <!-- Page -->
  <link rel="stylesheet" href="assets/examples/css/tables/datatable.min599c.css?v4.0.2">

  <!-- Fonts -->
  <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
  <link rel="stylesheet" href="global/fonts/font-awesome/font-awesome.min599c.css?v4.0.2">

  <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
  <script>
    Breakpoints();
  </script>
    <style>
        .fixbtn{
            width: 200px;
        }
        /* Navbar container */
        .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}


    </style>
</head>
<body class="animsition ">
  <?php include("inner_sidebar.php"); ?>

  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Article Status</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
        <li class="breadcrumb-item active">Article Status</li>
      </ol>
      
    </div>
     
    <div class="page-content">
    
      <!-- Panel Table Individual column searching -->
      <div class="panel">
      <div class="dropdown">
  <button class="dropbtn">January</button>
  <div class="dropdown-content">
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=January">January 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=January">January 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=January">January 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=January">January 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=January">January 2014</a>
  </div>
 </div>
 <div class="dropdown">
  <button class="dropbtn">February</button>
  <div class="dropdown-content">
  <a   href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=February">February 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=February">February 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=February">February 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=February">February 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=February">February 2014</a>
  </div>
 </div>
 <div class="dropdown">
  <button class="dropbtn">March</button>
  <div class="dropdown-content">
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=March">March 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=March">March 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=March">March 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=March">March 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=March">March 2014</a>
  </div>
 </div>
 <div class="dropdown">
  <button class="dropbtn">April</button>
  <div class="dropdown-content">
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=April">April 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=April">April 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=April">April 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=April">April 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=April">April 2014</a>
  </div>
 </div>
 <div class="dropdown">
  <button class="dropbtn">May</button>
  <div class="dropdown-content">
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=May">May 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=May">May 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=May">May 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=May">May 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=May">May 2014</a>
  </div>
 </div>
 <div class="dropdown">
  <button class="dropbtn">June</button>
  <div class="dropdown-content">
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=June">June 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=June">June 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=June">June 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=June">June 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=June">June 2014</a>
  </div>
 </div>
 
 <div class="dropdown">
  <button class="dropbtn">July</button>
  <div class="dropdown-content">
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=July">July 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=July">July 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=July">July 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=July">July 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=July">July 2014</a>
  </div>
 </div>
 <div class="dropdown">
  <button class="dropbtn">August</button>
  <div class="dropdown-content">
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=August">August 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=August">August 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=August">August 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=August">August 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=August">August 2014</a>
  </div>
 </div>
 <div class="dropdown">
  <button class="dropbtn">September</button>
  <div class="dropdown-content">
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=September">September 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=September">September 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=September">September 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=September">September 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=September">September 2014</a>
  </div>
 </div>
 <div class="dropdown">
  <button class="dropbtn">October</button>
  <div class="dropdown-content">
  <a   href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=October">October 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=October">October 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=October">October 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=October">October 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=October">October 2014</a>
  </div>
 </div>
 <div class="dropdown">
  <button class="dropbtn">November</button>
  <div class="dropdown-content">
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=November">November 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=November">November 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=November">November 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=November">November 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=November">November 2014</a>
  </div>
 </div>
 <div class="dropdown">
  <button class="dropbtn">December</button>
  <div class="dropdown-content">
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2010&month=December">December 2010</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2011&month=December">December 2011</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2012&month=December">December 2012</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2013&month=December">December 2013</a>
    <a href="article_status_year.php?journal_id=<?php echo $id; ?>&year=2014&month=December">December 2014</a>
  </div>
 </div>


        <header class="panel-heading mb-3">
          <h3 class="panel-title text-center">Article Status</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover table-bordered dataTable  w-full" id="exampleTableSearch">
            <thead>
              <tr>
                <th>Issues</th>
                <th width="10%">Action</th>
                
              </tr>
            </thead>
            <tbody>
               
              <?php $user->get_article_status($id); ?>
        
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Individual column searching -->

    </div>
  </div>
  <!-- End Page -->

  <!-- Core  -->
  <script src="global/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2"></script>
  <script src="global/vendor/jquery/jquery.min599c.js?v4.0.2"></script>
  <script src="global/vendor/popper-js/umd/popper.min599c.js?v4.0.2"></script>
  <script src="global/vendor/bootstrap/bootstrap.min599c.js?v4.0.2"></script>
  <script src="global/vendor/animsition/animsition.min599c.js?v4.0.2"></script>
  <script src="global/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2"></script>
  <script src="global/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2"></script>
  <script src="global/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2"></script>
  <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2"></script>

  <!-- Plugins -->
  <script src="global/vendor/switchery/switchery.min599c.js?v4.0.2"></script>
  <script src="global/vendor/intro-js/intro.min599c.js?v4.0.2"></script>
  <script src="global/vendor/screenfull/screenfull599c.js?v4.0.2"></script>
  <script src="global/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2"></script>

  <!-- Plugins For This Page -->
  <script src="global/vendor/datatables.net/jquery.dataTables599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-bs4/dataTables.bootstrap4599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-rowgroup/dataTables.rowGroup.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-scroller/dataTables.scroller.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-responsive/dataTables.responsive.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-buttons/dataTables.buttons.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-buttons/buttons.html5.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-buttons/buttons.flash.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-buttons/buttons.print.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-buttons/buttons.colVis.min599c.js?v4.0.2"></script>
  <script src="global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.min599c.js?v4.0.2"></script>
  <script src="global/vendor/asrange/jquery-asRange.min599c.js?v4.0.2"></script>
  <script src="global/vendor/bootbox/bootbox.min599c.js?v4.0.2"></script>

  <!-- Scripts -->
  <script src="global/js/Component.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin.min599c.js?v4.0.2"></script>
  <script src="global/js/Base.min599c.js?v4.0.2"></script>
  <script src="global/js/Config.min599c.js?v4.0.2"></script>

  <script src="assets/js/Section/Menubar.min599c.js?v4.0.2"></script>
  <script src="assets/js/Section/Sidebar.min599c.js?v4.0.2"></script>
  <script src="assets/js/Section/PageAside.min599c.js?v4.0.2"></script>
  <script src="assets/js/Plugin/menu.min599c.js?v4.0.2"></script>

  <!-- Config -->
  <script src="global/js/config/colors.min599c.js?v4.0.2"></script>
  <script src="assets/js/config/tour.min599c.js?v4.0.2"></script>
  <script>
    Config.set('assets', 'assets');
  </script>

  <!-- Page -->
  <script src="assets/js/Site.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/asscrollable.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/slidepanel.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/switchery.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/datatables.min599c.js?v4.0.2"></script>


  <script src="assets/examples/js/tables/datatable.min599c.js?v4.0.2"></script>


  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'www.google-analytics.com/analytics.js',
      'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>


<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/tables/datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2014 06:10:20 GMT -->
</html>