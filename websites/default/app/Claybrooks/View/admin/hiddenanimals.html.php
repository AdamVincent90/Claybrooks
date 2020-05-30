<!-- Unique page content -->

<h3 style="text-align: center; color: #dae0e5;" >Hidden Animals</h3>
<table class="container table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Origin</th>
        <th>Action</th>
    </tr>

    <!-- PHP logic which loads all archived furniture to be displayed to the user -->

    <?php

    $hiddenAnimals = new Animals();
    $animals = $hiddenAnimals->loadSingleAnimal('hidden', 'true');

    if (!empty($animals)) {
        foreach ($animals as $row) { ?>

            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['age'] ?></td>
                <td><?= $row['origin'] ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="id" value="<?= $row['animal_id'] ?>"/>
                        <input class="btn-primary" type="submit" name="submit" value="display"/>
                    </form>
                </td>
            </tr>

        <?php }
    } ?>


    </thead>
</table>

<?php if (isset($_POST['submit'])) {
    $record =
        [
            'animal_id' => $_POST['id'],
            'hidden' => 'false'
        ];

    $displayAnimal = new Animals();
    $displayAnimal->editAnimal($record);
}