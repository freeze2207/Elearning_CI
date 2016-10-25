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
		<h2 class="text-center">User Browser</h2>
		<br><br>
<table class="table table-bordered table-hover table-striped" >
	<thead>
            <tr>
                <th>ID</th>
		        <th>Username</th>
		        <th>Type</th>
            </tr>
    </thead>
	<tbody><?php foreach ($users as $users_item): ?>
		<tr>
			<td> <?php echo $users_item['id']; ?> </td>
			<td> <?php echo $users_item['username'];?> </td>
			<td> <a href="<?php echo site_url('users/'.$users_item['id']); ?>" class="btn btn-primary " role="button"><?php echo $users_item['type'] ?></a> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>
</body>




