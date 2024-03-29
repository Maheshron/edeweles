<?php include("main.php"); 
if (isset($_REQUEST['journal_id'])) {
        extract($_REQUEST);
	    $user->get_journaldetails($journal_id);
}
if(isset($_REQUEST['submit'])){
  extract($_REQUEST);
  $id = $_GET['journal_id'];
  $j_image = $_FILES['journal_image']['name'];
  $temp_j_image = $_FILES['journal_image']['tmp_name'];
  $j_logo = $_FILES['journal_logo']['name'];
  $temp_j_logo = $_FILES['journal_logo']['tmp_name'];
  if(empty($j_image)){

    $j_image = $user->journal_img;
    
    }
    if(empty($j_logo)){

      $j_logo =$user->journal_header_img;
      
      }
  
             move_uploaded_file($temp_j_image,"../edelweiss/upload/journal_logos/$j_image");
             move_uploaded_file($temp_j_logo,"../edelweiss/upload/journal_logos/$j_logo");
         
    $result = $user->update_journal($id,$j_image,$j_logo,$journal_title,$journal_s_name,$journal_issn_no,$journal_email,$journal_url,$menuscript_url,$guidelines_url,$paper_url,$youtube_link,$journal_short_desc,$journal_home_page,$journal_aim_scope,$instruction_author,$journal_menuscript,$special_issue_guidelines,$submit_menuscript,$meta_keywords,$meta_desc);
    if($result){
        header('Location:view_journals.php');
    }
    else{
        header('Location:view_journals.php');
            } 
        
}

?>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/forms/file-uploads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 06:10:01 GMT -->
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
<!--  <link rel="stylesheet" href="global/vendor/animsition/animsition.min599c.css?v4.0.2">-->
  <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/switchery/switchery.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/intro-js/introjs.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="global/vendor/blueimp-file-upload/jquery.fileupload.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/dropify/dropify.min599c.css?v4.0.2">
     <link rel="stylesheet" href="global/vendor/summernote/summernote.min599c.css?v4.0.2">


  <!-- Fonts -->
  <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

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
</head>
<body class="animsition ">
  
<?php include("inner_sidebar.php"); ?>
  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">About Journal</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Journals</a></li>
        <li class="breadcrumb-item active">About Journal</li>
      </ol>
    </div>

    <div class="page-content">
      <!-- Panel Dropify -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
              <div class="col-xl-2 col-md-1"></div>
            <div class="col-xl-4 col-md-5">
            <form method="post" action="" enctype="multipart/form-data" >
              <!-- Example Default -->
              <div class="example-wrap">
                  <h4 class="example-title text-center">Journal Logo</h4>
                <div class="example">
                  <input type="file" name="journal_logo"  id="input-file-now" data-plugin="dropify" data-default-file="../edelweiss/upload/journal_logos/<?php echo $user->journal_header_img; ?>"/>
                </div>
                  <h6 class="text-center">Note: Photo must be less than 3 kilobytes and dimensions 100X100.</h6>
              </div>
              <!-- End Example Default -->
            </div>
            <div class="col-xl-4 col-md-5">
              <!-- Example Default Value -->
              <div class="example-wrap">
                  <h4 class="example-title text-center">Journal Image</h4>
                <div class="example">
                  <input type="file" name="journal_image"  id="input-file-now-custom-1" data-plugin="dropify" data-default-file="../edelweiss/upload/journal_logos/<?php echo $user->journal_img; ?>"/>
                </div>
                  <h6 class="text-center">Note: Photo must be less than 3 kilobytes and dimensions 100X100.</h6>
              </div>
              <!-- End Example Default Value -->
            </div>
          </div>
            <div class="row">
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Journal Title</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="journal_title" autocomplete="off" value="<?php echo $user->journal_title; ?>">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Short Name</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="journal_s_name" autocomplete="off" value="<?php echo $user->journal_short_name; ?>">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Enter ISSN number</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="journal_issn_no" autocomplete="off" value="<?php echo $user->issn_number; ?>">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Journal E-mailid </label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="journal_email" autocomplete="off" value="<?php echo $user->journal_emailid; ?>">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Journal URL</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="journal_url" autocomplete="off" value="<?php echo $user->journal_url; ?>">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Submit Manuscript link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="menuscript_url" autocomplete="off" value="<?php echo $user->journal_manuscript_link; ?>">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Guidelines url</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="guidelines_url" autocomplete="off" value="<?php echo $user->journal_guidelines_url; ?>">
                </div>
                <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Track your paper url</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="paper_url" autocomplete="off" value="<?php echo $user->journal_page_url; ?>">
                </div>
                 <div class="form-group col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Youtube Link</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="youtube_link" autocomplete="off" value="<?php echo $user->journal_youtube_url; ?>">
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Journal Short Description</label>
                       <textarea id="summernote" name="journal_short_desc" data-plugin="summernote"><?php echo $user->journal_short_description; ?></textarea>
                </div>
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Home Page</label>
                       <textarea id="summernote"  name="journal_home_page" data-plugin="summernote"><?php echo $user->journal_home_page; ?></textarea>
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Aims And Scope Page</label>
                       <textarea id="summernote"  name="aims_scope_page"  data-plugin="summernote"><?php echo $user->journal_aim_scope; ?></textarea>
                </div>
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Instructions For Author</label>
                       <textarea id="summernote" name="instruction_author" data-plugin="summernote"><?php echo $user->author; ?></textarea>
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Submit Manuscript</label>
                       <textarea id="summernote"  name="submit_menuscript" data-plugin="summernote"><?php echo $user->journal_menuscript; ?></textarea>
                </div>
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Journal Special Issue Guidelines</label>
                       <textarea id="summernote" name="special_issue_guidelines" data-plugin="summernote"><?php echo $user->journal_special_issue_guide_lines; ?></textarea>
                </div>
                 <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Meta Keywords</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="meta_keywords" autocomplete="off" value="<?php echo $user->journal_meta_key; ?>">
                </div>
                <div class="form-group col-md-12">
                        <label class="form-control-label" for="inputBasicFirstName">Enter Meta Description</label>
                        <input type="text" class="form-control" id="inputBasicFirstName" name="meta_desc" autocomplete="off" value="<?php echo $user->journal_meta_desc; ?>">
                </div>
                    
                <div class="form-group col-md-12 text-center">
                      <button type="submit" name="submit" class="btn btn-primary">Save Journal</button>
                </div>
                </form>
            </div>
        </div>
      </div>
      
      <!-- End Panel Dropify -->
      
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
  <script src="global/vendor/jquery-ui/jquery-ui.min599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-tmpl/tmpl.min599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-canvas-to-blob/canvas-to-blob.min599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-load-image/load-image.all.min599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-process599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-image599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-audio599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-video599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-validate599c.js?v4.0.2"></script>
  <script src="global/vendor/blueimp-file-upload/jquery.fileupload-ui599c.js?v4.0.2"></script>
  <script src="global/vendor/dropify/dropify.min599c.js?v4.0.2"></script>
    <script src="global/vendor/summernote/summernote.min599c.js?v4.0.2"></script>

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
  <script src="global/js/Plugin/dropify.min599c.js?v4.0.2"></script>


  <script src="assets/examples/js/forms/uploads.min599c.js?v4.0.2"></script>


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


<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/forms/file-uploads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 06:10:02 GMT -->
</html>