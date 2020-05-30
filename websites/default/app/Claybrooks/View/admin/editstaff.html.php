<div class="container">
<h3 style="text-align: center; color: #dae0e5;">Select staff member</h3>
<form method="post">
    <select class="custom-select" name="staff_option">

        <?php $staff = new Staff();
        $staff_fetch = $staff->loadstaff(); ?>

        <?php foreach ($staff_fetch as $staff) { ?>

            <option class="form-check" value="<?= $staff['staff_id'] ?>">
                <?= $staff['firstname'] ?>
                <?= $staff['lastname'] ?>
            </option>

        <?php } ?>
    </select>
    <input style="margin-bottom: 50px;" class="btn-primary" type="submit" name="staff_select" value="Load Details"/>
</form>
</div>


<!-- PHP logic which allows the user to select a stored staff member and load the their contents to html code below -->

<?php if (isset($_POST['staff_select'])) {

    $single_staff = new Staff;
    $staff_result = $single_staff->loadSingleStaff($_POST['staff_option']);

    function invalid()
    {
        echo '<p>Invalid Username or Password</p>';
    }

    foreach ($staff_result as $row) { ?>

<div class="container tm-mt-big tm-mb-big">
    <form method="post" class="tm-edit-product-form">
        <div class="form-group mb-3" style="margin-top: -50px;">
            <label>First Name</label>
            <input class="form-control" type="text" name="firstname" value="<?= $row['firstname'] ?>"/>
            <label>Last Name</label>
            <input class="form-control" type="text" name="lastname" value="<?= $row['lastname'] ?>"/>
            <label>Email</label>
            <input class="form-control" type="text" name="email" value="<?= $row['email'] ?>"/>
            <label>Role</label>
            <select class="custom-select" name="role">
                <option value="secretary">
                    Secretary
                </option>
                <option value="zookeeper">
                    Zoo Keeper
                </option>
                <option value="cashier">
                    Cashier
                </option>
                <option value="chef">
                    Chef
                </option>
                <input class="btn-primary" type="submit" name="amend_staff" value="Amend Staff Member"/>
                <input class="btn-primary" type="submit" name="delete_staff" value="Delete Staff Member"/>
        </div>
        </form>
</div>

    <?php }
} ?>

<!-- php page logic which allows the deletion and amendment of staff -->

<?php if (isset($_POST['delete_staff'])) {
    $delete_user = new Staff();
    $delete_user->deleteStaff($this->layout_data);
}

if (isset($_POST['amend_staff'])) {
    $record =
        ['staff_id' => $this->layout_data,
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'role' => $_POST['role'],
            'email' => $_POST['email']
        ];
    $amend_user = new Staff();
    $amend_user->editStaff($record);

}
