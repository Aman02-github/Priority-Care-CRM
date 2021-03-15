<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Feedback</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">	
	<?php include("leftbar.php");?>
	<div class="clearfix"></div>
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
	</div>
  </div>
  <div class="page-content"> 
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">	
			<h2>Feedback Form</h2>	
	 <form id="login-form" class="login-form" action="admin/viewComment.php" method="post">
		 <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Organisation Name</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="text" name="Orgname" id="txtusername" class="form-control">                                 
				</div>
            </div>
          </div>
          </div>
	  <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label"><h4>Feedback type</h4></label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="radio" value="c" name="ftype" checked >Comments<br><br>
                                              <input type="radio" value="s" name="ftype" > Suggestions<br><br>
											   <input type="radio" value="q" name="ftype" > Questions<br><br>
                                
				</div>
            </div>
          </div>
          </div>
		   <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Describe your feedback</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<textarea name="feed" id="txtusername" class="form-control" required rows="8" cols="8">     </textarea>
					.
				</div>
            </div>
          </div>
          </div>
		
          </div>
          <div class="row">
            <div class="col-md-10">
              <button class="btn btn-primary btn-cons pull-right" name="login" type="submit">Submit</button>
            </div>
          </div>
		  </form>
            <div class="row 2col">
          <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
            <div class="tiles blue added-margin">

            
        </div>
  </div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<div>
 <footer style="height: 30px;">
 <center>Copyright © 2021 A3B. All Rights Reserved.</center>
 </footer>
	</div>
</div>
 
 </div>

<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 

</body>
</html>