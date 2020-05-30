<!-- Unique page content -->

<h3 style="text-align: center; color: #dae0e5;">Add Species</h3>

<div class="tm-edit-product-form container">
    <form class="form-group " method="post" enctype="multipart/form-data">
        <label>Name</label>
        <input class="form-control" type="text" name="name"/>
        <label>Average Lifespan (Number)</label>
        <input class="form-control" type="text" name="lifespan"/>
        <input class="btn-primary" type="submit" name="addSpecies">
    </form>
</div>


<!-- Add category to the database php logic -->

<?php if (isset($_POST['addSpecies'])) {
    $record =
        [
            'name' => $_POST['name'],
            'average_lifespan' => $_POST['lifespan']
        ];

    $new_category = new Species();
    $new_category->editSpecies($record);
    header('location', 'admin/home');
}
