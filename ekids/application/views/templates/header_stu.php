<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kids eLearning System</title>
		<link type="text/css" rel="stylesheet" href="<?=$this->config->item('base_url');?>ekids/css/bootstrap.css" rel="stylesheet"/>
	    <link type="text/css" rel="stylesheet" href="<?=$this->config->item('base_url');?>ekids/css/bootstrap-theme.css" rel="stylesheet"/>
    </head>
   <body background="<?=$this->config->item('base_url');?>ekids/css/bg.jpg">
    <div class="navbar-fixed">
         <nav class="nav-wrapper" style="padding-left: 0">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="/ekids/index.php" class="flow-text">Home</a></li>
                    <li><a href = "/ekids/index.php/about" class="flow-text">About</a></li>
                    <li><a href = "/ekids/index.php/users/view/<?php echo $id;?>" class="flow-text">My Personal Info</a></li>
                    <li><a href = "/ekids/index.php/exercise/choose" class="flow-text">My Exercise</a></li>   