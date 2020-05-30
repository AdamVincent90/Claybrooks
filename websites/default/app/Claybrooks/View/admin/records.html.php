<div class=" tm-mt-big tm-mb-big">
    <nav class=" navbar-expand-xl">
        <div class="container h-100">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li style="margin-top: -50px" class="nav-item align-content-between"><a class="nav-link" href="/admin/addrecord">Add Record</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

    <?php
    $animal = new Animals();
    $animalData = $animal->loadSingleAnimal('animal_id', $this->layout_data);

    foreach ($animalData as $row) { ?>
        <h3 style="text-align: center; color: #dae0e5; margin-top: 20px;">Medical History</h3>
    <table class="container table" style="color: white; font-weight: bold">
        <th>Name of Animal</th>
        <th>Origin of Animal</th>
        <th>Age of Animal</th>
        <th>Animal ID</th>
        <th>Location Code</th>
        <th>Weight</th>
        <th>Height</th>
        <th>Deceased</th>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['origin'] ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['animal_id'] ?></td>
            <td><?= $row['location_code'] ?></td>
            <td><?= $row['weight'] ?></td>
            <td><?= $row['height'] ?></td>
            <td><?= $row['deceased'] ?></td>
        </tr>
    </table>
    <?php } ?>
    <table class="container table" style="color: white; font-weight: bold; margin-top: 20px;">
        <th>Date of Examination</th>
        <th>Name of Diagnosis</th>
        <th>Medical Notes</th>
        <th>Medical ID</th>
        <th>Cause of Death</th>
<?php
$load = new MedicalRecord();
$record = $load->loadMed($this->layout_data);
 foreach ($record as $row) { ?>
        <tr>
            <td><?= $row['date'] ?></td>
            <td><?= $row['diagnosis'] ?></td>
            <td><?= $row['description'] ?></td>
            <td><?= $row['med_id'] ?></td>
            <td><?= $row['cause_of_death']?></td>
        </tr>
    <?php } ?>

    </table>
