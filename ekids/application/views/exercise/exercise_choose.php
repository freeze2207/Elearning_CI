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
		<h2 class="text-center">Exercise Browser<br>Choose the grade</h2>
		<br><br>
<table class="table table-bordered table-hover table-striped" >
	<thead>
            <tr>
                <th>Level</th>
		        <th>Quantity</th>
		        <th>Operations</th>
            </tr>
    </thead>
	<tbody><?php foreach ($exercise as $row): ?>
		<tr>
			<td> <?php echo $row['level']; ?> </td>
			<td> <?php echo $row['g_count']; ?> </td>
			<td> <a href="<?php echo site_url('exercise/'.$row['level']); ?>" class="btn btn-primary " role="button">Go to details</a> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>
</body>
