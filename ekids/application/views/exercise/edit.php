<div id="container" class="container">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Edit Exercise</h2>
            <br><br>
    <?php
      if(isset($edit_data) && is_array($edit_data) && count($edit_data)): $i=1;
      foreach ($edit_data as $key => $data) { 
    ?>
    <form method="post" action="<?php echo site_url('Exercise/update_data/'.$data['id'].''); ?>" name="data_register">
        <label for="Title">Enter Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $data['title']; ?>" required >
        <br>
        <label for="Level">Enter Level</label>
        <input type="text" class="form-control" name="level" value="<?php echo $data['level']; ?>" required>
        <br>
        <label for="Description">Enter Description</label><br>
        <input type="text" class="form-control" name="description" value="<?php echo $data['description']; ?>">
        <label for="Subject">Select Subject</label><br>
        <input type="radio" name="subject" <?php if($data['subject'] == 'Math' ) { echo 'checked'; } ?> value="Math" required > Math 
        &nbsp;  <input required type="radio" name="subject" <?php if($data['subject'] == 'English' ) { echo 'checked'; } ?> value="English" > English
        <br><br>
        <label for="Content">Content</label>
        <textarea name="content" class="form-control" rows="6" required ><?php echo $data['content']; ?></textarea>
        <br><br>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
        <br><br>
    </form>
     <?php
        }endif;
     ?>
    <br><br>
 </div>
</div>
  