<?php include 'inc/header.php'; ?>
    <h2 class="page-header"> Edit Job Listing </h2>

    
    <form 
        action="edit.php?id=<?php echo $job->id; ?>"
        method="POST"
    >
        <div class="form-group">
            <label for="company"> Company </label>
            <input type="text" class="form-control" id="company" name="company" value="<?php echo $job->company; ?>">
        </div>
        <div class="form-group">
            <label for="category"> Select </label>
            <select class="form-control" id="category" name="category">
                <option value="<?php echo $job->category_id; ?>">Choose Category</option>
                    <?php foreach($categories as $category): ?>
                        <?php if ( $job->category_id == $category->id ) { ?>
                            <option value="<?php echo $category->id;?>" selected>
                        <?php } else { ?>
                            <option value="<?php echo $category->id;?>">
                        <?php } ?>
                            <?php echo $category->name;?>
                        </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="job_title"> Job Title </label>
            <input type="text" class="form-control" id="job_title" name="job_title" value="<?php echo $job->job_title; ?>">
        </div>
        <div class="form-group">
            <label for="description"> Description </label>
            <textarea type="text" class="form-control" id="description" name="description" > <?php echo $job->description; ?> </textarea>
        </div>
        <div class="form-group">
            <label for="location"> Location </label>
            <input type="text" class="form-control" id="location" name="location" value="<?php echo $job->location; ?>">
        </div>
        <div class="form-group">
            <label for="salary"> Salary </label>
            <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $job->salary; ?>">
        </div>
        <div class="form-group">
            <label for="contact_user"> Contact User </label>
            <input type="text" class="form-control" id="contact_user" name="contact_user" value="<?php echo $job->contact_user; ?>">
        </div>
        <div class="form-group">
            <label for="contact_email"> Contact Email </label>
            <input type="text" class="form-control" id="contact_email" name="contact_email" value="<?php echo $job->contact_email; ?>">
        </div>
        <br>
        <input type="submit" class="btn btn-default" value="Submit" name="submit">
    </form>

<?php include 'inc/footer.php'; ?>