<h3 style="text-align: center; color: #dae0e5;">Add New Staff Member</h3>
<form method="post" class="container">
    <label>First Name</label>
    <input class="form-control" type="text" name="firstname"/>
    <label>Last Name</label>
    <input class="form-control" type="text" name="lastname"/>
    <label>Email</label>
    <input class="form-control" type="text" name="email"/>
    <label>Date of Birth (yyyy-mm-dd(</label>
    <input class="form-control" type="text" name="dob"/>
    <label>Password</label>
    <input class="form-control" type="password" name="password"/>
    <label>Confirm Password</label>
    <input class="form-control" type="password" name="confirm_password"/>
    <input class="btn-primary" type="submit" name="addAdmin"/>
</form>

<!-- add staff to the database php logic -->

<?php if (isset($_POST['addAdmin'])) {
    $record = "";
    $new_staff = new Admin();
    $record =
        [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'email' => $_POST['email'],
            'dob' => $_POST['dob'],
            'password' => $_POST['password']
        ];

    $new_staff->addAdmin($record);

}