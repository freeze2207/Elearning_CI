<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Sign in &middot; Kids eLearning System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?=$this->config->item('base_url');?>ekids/css/bootstrap.css" rel="stylesheet">
	<link href="<?=$this->config->item('base_url');?>ekids/css/bootstrap-theme.css" rel="stylesheet">
	
	<style type="text/css">
      body { 
      	padding-top: 40px; padding-bottom: 40px; background-image:url("<?=$this->config->item('base_url');?>ekids/css/bg.jpg");
      }
      select {
      	font-size:20px;
      }
      option {
      	font-size:20px;
      }
	</style>
</head>
<body>
<div id="container" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Register</h2>
            <br><br>
          <?php echo validation_errors('<p class="error">'); ?>
 			<?php echo form_open("login/registration"); ?>
            <label for="Username">User Name</label>
              <input type="text" class="form-control" name="username" required >
              <p class="help-block">At least 3 characters, letters or numbers only</p>
            <br>
            <label for="Password">Password</label>
              <input type="password" class="form-control" name="password" required>
              <p class="help-block">At least 3 characters</p>
            <br>
            <label for="Confirm">Confirm Password</label>
              <input type="password" class="form-control" name="confirm" required>
              <p class="help-block">Must match your password</p>
            <br>
            <label for="Type">Register as</label>
            <br>
            <select name="type" id="type">
				<option selected value="student">Student</option>
				<option value="teacher">Teacher</option>
				<option value="parent">Parent</option>
			  </select>
            
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
            <br><br>
          </form>
        </div>
    </div>
</div>
</body>