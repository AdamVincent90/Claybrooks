



<?php

var_dump($this->layout_data);

$editAnimal = new Animals();
$loadAnimalToEdit = $editAnimal->loadSingleAnimal('animal_id', $this->layout_data);

foreach ($loadAnimalToEdit as $row) { ?>

<div class="container tm-mt-big tm-mb-big">
    <form method="post" class="tm-edit-product-form">
        <div class="form-group mb-3" style="margin-top: -50px;">
            <input type="hidden" name="id" value="<?php echo $row['animal_id']; ?>"/>
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>"/>
            <label>Origin</label>
            <input class="form-control" type="text" name="origin" value="<?php echo $row['origin']; ?>"/>
            <label>Age</label>
            <input class="form-control" type="text" name="age" value="<?php echo $row['age']; ?>"/>
            <label>Description</label>
            <input class="form-control" name="description" value="<?php echo $row['description']; ?>"/>
            <label>Location Code</label>
            <input class="form-control" name="location" value="<?php echo $row['location_code']; ?>"/>
            <label>Weight</label>
            <input class="form-control" name="weight" value="<?php echo $row['weight']; ?>"/>
            <label>Height</label>
            <input class="form-control" name="height" value="<?php echo $row['height']; ?>"/>
            <label>Deceased</label>
            <input class="form-control" name="deceased" value="<?php echo $row['deceased']; ?>"/>
            <input class="btn-primary" type="submit" name="editAnimal" value="Edit Animal Details">
            <input class="btn-primary" type="submit" name="hideAnimal" value="Hide Animal from public website">
        </form>
    </div>

    <?php
}
?>

<?php if (isset($_POST['editAnimal'])) {
    $record =
        [
            'animal_id' => $this->layout_data,
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'origin' => $_POST['origin'],
            'age' => $_POST['age'],
            'height' => $_POST['height'],
            'weight' => $_POST['weight'],
            'location_code' => $_POST['location'],
            'deceased' => $_POST['deceased']
        ];

    $editAnimalDetails = new Animals();
    $editAnimalDetails->editAnimal($record);
} ?>

<?php if (isset($_POST['hideAnimal'])) {
    $record =
        [
            'animal_id' => $this->layout_data,
            'hidden' => 'true'
        ];

    $editAnimals = new Animals();
    $editAnimals->editAnimal($record);
} ?>
