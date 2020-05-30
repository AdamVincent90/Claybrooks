<h3 style="text-align: center; color: #dae0e5">Add New Medical Record</h3>

<div class="tm-edit-product-form container">
    <form class="form-group " method="post" enctype="multipart/form-data">
        <label>Date of Examination (yyyy-mm-dd)</label>
        <input class="form-control" type="text" name="date"/>
        <label>Animal ID</label>
        <input class="form-control" type="text" name="aid"/>
        <label>Diagnosis</label>
        <input class="form-control" type="text" name="diag"/>
        <label>Notes</label>
        <input class="form-control" type="text" name="notes"/>
        <label>Cause of Death</label>
        <input class="form-control" type="text" name="cod"/>
        <input class="btn-primary" type="submit" name="addMed">
    </form>
</div>


<!-- Add category to the database php logic -->

<?php if (isset($_POST['addMed'])) {
    $record =
        [
            'date' => $_POST['date'],
            'animal_id' => $_POST['aid'],
            'diagnosis' => $_POST['diag'],
            'description' => $_POST['notes'],
            'cause_of_death' => $_POST['cod']
        ];

    $med = new MedicalRecord();
    $med->addMedRecord($record);
}