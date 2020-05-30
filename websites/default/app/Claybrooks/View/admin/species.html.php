<div class=" tm-mt-big tm-mb-big">
    <nav class=" navbar-expand-xl">
        <div class="container h-100">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li style="margin-top: -50px" class="nav-item align-content-between"><a class="nav-link" href="/admin/addspecies">Add a Species</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>


<h3 style="text-align: center; margin-top: -50px; color: #dae0e5;">Species</h3>
<table class="container table">
    <thead>
    <tr>
        <th>Name of Species</th>
        <th>Edit Species Name</th>
        <th>Delete Species</th>
    </tr>

    <!-- PHP logic which is used to retrieve all categories from the database to be displayed to the user -->

    <?php

    $getSpecies = new Species();
    $speciesData = $getSpecies->loadSpecies();

    foreach ($speciesData as $row) { ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><button class="btn-primary"><a href="/admin/species/<?= $row['species_id'] ?>">Edit</a></button></td>
            <td>
                <form method="post">
                    <input type="hidden" name="id" value="<?= $row['species_id'] ?>"/>
                    <input class="btn-primary" type="submit" name="deleteSpecies" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php if (isset($_POST['deleteSpecies'])) {
            $delete_category = new Species();
            $delete_category->deleteSpecies($_POST['id']);
            header('location: /admin/home');
        }
    } ?>

    </thead>
</table>

<?php

if (!empty($this->layout_data)) {
    $loadSpecies = new Species();
    $spec = $loadSpecies->loadSingle($this->layout_data);

    foreach ($spec as $row) { ?>

        <h3 style="text-align: center; margin: 30px 30px 30px 30px;">Edit Species</h3>

        <div class="container">
            <form class="form-group" method="post" enctype="multipart/form-data">
                <input style="margin-bottom: 20px;" class="form-control" type="text" name="name" value="<?= $row['name'] ?>"/>
                <input class="btn-primary" type="submit" name="editSpecies" value="Edit Species Name"/>
            </form>
        </div>

    <?php }
} ?>

<?php if (isset($_POST['editSpecies'])) {
    $amend_category = new Species();
    $species = "";
    $species =
        [
            'species_id' => $this->layout_data,
            'name' => $_POST['name']
        ];

    $amend_category->editSpecies($species);

}
