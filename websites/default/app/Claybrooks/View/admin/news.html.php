<!-- Unique page content -->

<h3 style="text-align: center; color: #dae0e5;">Add a notice to the home-page</h3>
<div class="tm-edit-product-form container">
<form class="form-group " method="post" enctype="multipart/form-data">
    <label>News Headline</label>
    <input class="form-control" type="text" name="headline"/>
    <label>News Description</label>
    <input class="form-control" name="desc" type="text" value="Enter Description"/>
    <label>Add a Image</label>
    <input class="form-control-file btn-primary" type="file" name="news_image" multiple/>
    <label>Confirm your Password</label>
    <input  class="form-control" type="password" name="confirm_password"/>
    <input class="btn-primary" type="submit" name="submit-banner"/>
</form>
</div>

<!-- PHP logic which allows the user to add a new banner to be displayed on the home-page of the website -->

<?php if (isset($_POST['submit-banner'])) {
    $datetime = date_create()->format('Y-m-d H:i:s');
    $banner_record = "";
    $add_notice = new News();

    $banner_record =
        [
            'headline' => $_POST['headline'],
            'description' => $_POST['desc'],
            'date' => $datetime,
            'admin_name' => $_SESSION['admin']
        ];

    $add_notice->addNews($banner_record);

    if ($_FILES['news_image']['error'] == 0) {
        $fileName = $add_notice->load->lastInsertId();
        move_uploaded_file($_FILES['news_image']['tmp_name'], 'images/news/' . $fileName . '.jpg');
    }


} ?>