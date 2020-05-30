<?php

$allSpecies = new Species();
$spec = $allSpecies->loadSpecies();
;?>

<!-- Unique page content -->

<h3 style="text-align: center; color: #dae0e5;">Add New Animal</h3>
    <div class="tm-edit-product-form container">
    <form class="form-group " method="post" enctype="multipart/form-data">
    <label>Name of Animal</label>
    <input class="form-control" type="text" name="name"/>
    <label>Description of Animal</label>
    <textarea class="form-control" name="description"></textarea>
    <label>Age</label>
    <input class="form-control"  type="text" name="age"/>
    <label>Origin of Animal </label>
    <input class="form-control" type="text" name="origin"/>
        <label>Location Code</label>
        <input class="form-control" name="location"/>
        <label>Weight</label>
        <input class="form-control" name="weight" />
        <label>Height</label>
        <input class="form-control" name="height"/>
        <label>Deceased</label>
        <input class="form-control" name="deceased" value="N/A"/>
    <label>Species of Animal</label>
    <select class="custom-select" name="species">
        <?php foreach ($spec as $row) { ?>
            <option value="<?= $row['name'] ?>"><?= $row['name'] ?>
            </option>

        <?php  } ?>
    </select>
        <input type="hidden" value="<?= $spec[0]['species_id']?>" name="id"/>
    <label>Photo of Animal</label>
    <input class="btn-primary" type="file" name="image[]" multiple=""/><br>
    <input class="btn-primary" type="submit" name="submit" value="Add Animal"/>
</form>
    </div>

<!-- Submits furniture to database php logic -->

<?php if (isset($_POST['submit'])) {
    $record =
        [
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'age' => $_POST['age'],
            'species_name' => $_POST['species'],
            'origin' => $_POST['origin'],
            'hidden' => 'false',
            'height' => $_POST['height'],
            'weight' => $_POST['weight'],
            'location_code' => $_POST['location'],
            'deceased' => $_POST['deceased']
        ];

    $addAnimal = new Animals();
    $addAnimal->addAnimals($record);
    $fileName = $addAnimal->load->lastInsertId();

    if (!file_exists('images/animal/' . $fileName)) {
        mkdir('images/animal/' . $fileName, '0777', true);
    }

    for ($count = 0; $count < count($_FILES['image']['tmp_name']); $count++) {
        move_uploaded_file($_FILES['image']['tmp_name'][$count], 'images/animal/' . $fileName . '/' . $count . '.jpg');
    }
}