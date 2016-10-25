<!DOCTYPE html>
<head>
<meta charset="utf-8">
    <link href="<?=$this->config->item('base_url');?>ekids/css/bootstrap.css" rel="stylesheet">
	<link href="<?=$this->config->item('base_url');?>ekids/css/bootstrap-theme.css" rel="stylesheet">
</head>
<body>

<div id="container" class="container">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
		<h2 class="text-center">User Details</h2>
		<br><br>
<table class="table table-bordered table-hover table-striped" >
	<thead>
            <tr>
                <th>ID</th>
		        <th>Username</th>
            </tr>
    </thead>
	<tbody><?php foreach ($users_item as $users_item): ?>
		<tr>
			<td> <?php echo $users_item['id']; ?> </td>
			<td> <?php echo $users_item['username'];?> </td>
			
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>
</body>




