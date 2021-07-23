<?php include 'inc/header.php'; ?>
    <h2 class="page-header"> Create Job Listing </h2>

    <form 
        action="create.php"
        method="POST"
    >
        <div class="form-group">
            <label for="company"> Company </label>
            <input type="text" class="form-control" id="company" name="company">
        </div>
        <div class="form-group">
            <label for="category"> Select </label>
            <select class="form-control" id="category" name="category">
                <option value="0">Choose Category</option>
                    <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id;?>">
                    <?php echo $category->name;?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="job_title"> Job Title </label>
            <input type="text" class="form-control" id="job_title" name="job_title">
        </div>
        <div class="form-group">
            <label for="description"> Description </label>
            <textarea type="text" class="form-control" id="description" name="description"> </textarea>
        </div>
        <div class="form-group">
            <label for="location"> Location </label>
            <input type="text" class="form-control" id="location" name="location">
        </div>
        <div class="form-group">
            <label for="salary"> Salary </label>
            <input type="text" class="form-control" id="salary" name="salary">
        </div>
        <div class="form-group">
            <label for="contact_user"> Contact User </label>
            <input type="text" class="form-control" id="contact_user" name="contact_user">
        </div>
        <div class="form-group">
            <label for="contact_email"> Contact Email </label>
            <input type="text" class="form-control" id="contact_email" name="contact_email">
        </div>
        <br>
        <input type="submit" class="btn btn-default" value="Submit" name="submit">
    </form>

<?php include 'inc/footer.php'; ?>