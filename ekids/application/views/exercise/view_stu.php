
<div id="container" class="container" >

<!--*************************  START  DISPLAY ALL THE RECODEDS *************************-->
        <table class="table table-bordered table-hover table-striped" >
            <thead>
            <tr>
                <th>#</th>
		        <th>Title</th>
		        <th>Subject</th>
		        <th>Content</th>
				<th>Description</th>
				<th>Date</th>
            </tr>
            </thead>

            <tbody>
              <?php
               if(isset($exercise_items) && is_array($exercise_items) && count($exercise_items)): $i=1;
                foreach ($exercise_items as $key => $data) { 
                ?>
                <tr <?php if($i%2==0){echo 'class="even"';}else{echo'class="odd"';}?>>
                    <td><?php echo $i; ?></td>
        			<th><?php echo $data['title'];?></th>
					<th><?php echo $data['subject'];?></th>
					<th><?php echo $data['content'];?></th>
					<th><?php echo $data['description'];?></th>
					<th><?php echo $data['date'];?></th>
                    
                </tr>
                <?php
                    $i++;
                      }
                    else:
                ?>
                <tr>
                    <td colspan="7" align="center" >No Records Found..</td>
                </tr>
                <?php
                    endif;
                ?>

            </tbody>                                
        </table>
<!--*********************  END  DISPLAY ALL THE RECODEDS ******************************-->
</div>