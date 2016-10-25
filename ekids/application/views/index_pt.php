<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kids eLearning System</title>
		<link type="text/css" rel="stylesheet" href="<?=$this->config->item('base_url');?>ekids/css/bootstrap.css" rel="stylesheet"/>
	    <link type="text/css" rel="stylesheet" href="<?=$this->config->item('base_url');?>ekids/css/bootstrap-theme.css" rel="stylesheet"/>
   
    <style type="text/css">
      .logo2 { padding-top:40px; padding-bottom: 40px; background-image:url("<?=$this->config->item('base_url');?>/ekids/css/bg1.gif");
	}
	  .logo1 { padding-top:40px; padding-bottom: 40px; background-image:url("<?=$this->config->item('base_url');?>/ekids/css/bg.jpg");
	}
      a { color: #15c; text-decoration: none; }
      a:hover { color: #15c; text-decoration: underline; }
      form,
      label,
      input[type=text],
      input[type=checkbox],
      input[type=password] {
      margin: 0;
      }
	 
      }
    </style>
  </head>
   <body background="<?=$this->config->item('base_url');?>/ekids/css/bg.jpg">
   <h1>Kid E-learning System</h1>
   <h2>Welcome <?php echo $type . " " . $username; ?>!</h2>
   
    <div class="navbar-fixed">
         <nav class="nav-wrapper" style="padding-left: 10">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="/ekids/index.php" class="flow-text">Home</a></li>
                    <li><a href = "/ekids/index.php/about" class="flow-text">About</a></li>
                    <li><a href = "/ekids/index.php/users/view/<?php echo $id;?>" class="flow-text">My Personal Info</a></li>
                    <li><a href = "/ekids/index.php/exercise/" class="flow-text">Exercise</a></li>
					<li><a href = "/ekids/index.php/welcome/logout" class="flow-text">Logout</a></li>
                </ul>
			</div>
	</div>
	<div>
	<img src="<?=$this->config->item('base_url');?>ekids/css/bg1.gif">
	<li>jlkkl</li>
	</div>
  <em>&copy; 2016</em>
    </body>
</html>