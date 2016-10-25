
<div id="container" class="container" >

<!--******************** START SESSION SETFLASH MESSAGES *****************************-->
       <?php if($this->session->flashdata('message')){?>
          <div class="alert alert-success">      
            <?php echo $this->session->flashdata('message')?>
          </div>
        <?php } ?>
<!--************************* END SESSION SETFLASH MESSAGES   ************************-->


        <br>
        <div align="center"> 
          <a href="<?php echo site_url('exercise/addNew'); ?>" class="btn btn-primary " role="button">Click to add new Record</a>
        </div>
        <br>


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
                <th>Edit</th>
                <th>Delete</th>
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
                    <td><a href="<?php echo site_url('exercise/edit_data/'. $data['id'].''); ?>">Edit</a></td>            
                    <td><a href="<?php echo site_url('exercise/delete_data/'. $data['id'].''); ?>">Delete</a></td>
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