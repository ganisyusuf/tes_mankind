<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Djalin | Sistem Inventory</title>
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>"  rel="stylesheet" />
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.js')?>"></script>
    <style type="text/css">
            body {
                 margin: 0;
                 padding: 0;
                 text-align: center;
            }
            .bg {
                 width: 100%;
                 height: 100%;
                 position: fixed;
                 z-index: 1;
                 float: left;
                 left: 0;
            }
            .content {
                 width: 80%;
                 height: auto;
                 margin: 0 auto;
                 position: relative;
                 z-index: 5;
                 padding: 30px;
                 text-align: left;
            }
        </style>
</head>
<body>

<img src="<?php echo base_url();?>/assets/img/download.png" alt="gambar" class="bg">

<br/><br/><br/><br /><br/><br/><br/><br /><br/><br/><br/><br />
	<div class="container">
        <div class="content">
			<div class="row ">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
    <div class="panel panel-default">
    <div class="panel-heading" align="center">
    <strong>LOGIN</strong>
    </div>
    <div class="panel-body">

    <form role="form" action="<?php echo site_url('Login_user/aksiLogin'); ?>" method="post">
     <div class="form-group input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" name="username" class="form-control" placeholder="Username" required/>
        </div>
         <div class="form-group input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" name="password" class="form-control"  placeholder="Password" required/>
        	</div>
    <div class="form-group">


        </div>

     	<input type="submit" name="submit" value="Log In" class="btn btn-primary col-md-12">
    </form>
    </div>
    </div>
    </div>
    </div>
		</div>
	</div>


</body>
</html>