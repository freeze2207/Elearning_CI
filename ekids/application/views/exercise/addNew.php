<div id="container" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Add New Exercise</h2>
            <br><br>
          <form method="post" action="<?php echo site_url('Exercise/submit_data'); ?>" name="data_register">
            <label for="Title">Enter Title</label>
              <input type="text" class="form-control" name="title" required >
            <br>
            <label for="Level">Enter Level</label>
              <input type="text" class="form-control" name="level" required>
            <br>
            <label for="Description">Enter Description</label>
              <input type="text" class="form-control" name="description">
            <br>
            <label for="Subject">Select Subject</label><br>
              <input type="radio" name="subject" checked value="Math" required > Math &nbsp;  
              <input required type="radio" name="subject" value="English" > English
            <br><br>
            <label for="Content">Content</label>
              <textarea name="content" class="form-control" rows="6" required ></textarea>
            <br><br>
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
            <br><br>
          </form>
        </div>
    </div>
</div>