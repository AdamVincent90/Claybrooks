<div class=" tm-mt-big tm-mb-big">
    <nav class=" navbar-expand-xl">
        <div class="container h-100">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item align-content-between"><a class="nav-link" href="/admin/addanimal"> Add New Animal</a></li>
                    <li class="nav-item align-content-between"><a class="nav-link" href="/admin/hiddenanimals">Hidden Animals</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<h3 style="text-align: center; color: #dae0e5;">Animal List</h3>

<table class="container table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Origin</th>
        <th>Description</th>
        <th>Species</th>
        <th>Location Code</th>
        <th>Weight</th>
        <th>Height</th>
        <th>Deceased</th>
        <th>Amend</th>
        <th>Delete</th>
        <th style="width: 15%;">Medical Records</th>
    </tr>


    <?php $animal = new Animals();
    $allAnimals = $animal->loadAnimals();

    foreach ($allAnimals as $row) {
        if ($row['hidden'] === 'false') { ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['age'] ?></td>
                <td><?= $row['origin'] ?></td>
                <td style="font-size: 10px"><?= $row['description'] ?></td>
                <td><?= $row['species_name'] ?></td>
                <td><?= $row['location_code'] ?></td>
                <td><?= $row['weight'] ?></td>
                <td><?= $row['height'] ?></td>
                <td><?= $row['deceased'] ?></td>
                <td><a class="btn-primary" style="float: right" href="/admin/editanimal/<?= $row['animal_id'] ?>">Edit/Hide</a></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="id" value="<?= $row['animal_id'] ?>"/>
                            <input class="btn-primary" type="submit" name="delete" value="Delete"/>
                        </form>
                </td>
                <td><a class="btn-info" href="/admin/records/<?= $row['animal_id'] ?>">Medical Records</a></td>
            </tr>
        <?php }
    } ?>

    </thead>
</table>


<?php if (isset($_POST['delete'])) {
    $removeAnimal = new Animals();
    $removeAnimal->deleteAnimal($_POST['id']);
}