<h5 style="text-align: center; color: #dae0e5;">Add New Staff Member</h5>


<div class="container tm-mt-big tm-mb-big">
    <form method="post" class="tm-edit-product-form">
        <div class="form-group mb-3">
            <label for="firstname">First Name</label>
            <input style="margin-bottom: 10px" class="form-control" type="text" name="firstname"/>
            <label for="lastname">Last Name</label>
            <input style="margin-bottom: 10px" class="form-control" type="text" name="lastname"/>
            <label for="role">Role</label>
            <select style="margin-bottom: 10px" class="custom-select" name="role">
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
            </select>
            <label for="email">Email Address</label>
            <input class="form-control"  type="text" name="email">
            <label for="dob">Date of Birth (yyyy-mm-dd)</label>
            <input class="form-control" type="text" name="dob"/>
            <input class="btn-primary" type="submit" name="add_staff" value="Add staff"/>
        </div>
    </form>
</div>

<!-- add staff to the database php logic -->

<?php if (isset($_POST['add_staff'])) {
    $record =
        [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'role' => $_POST['role'],
            'email' => $_POST['email'],
            'dob' => $_POST['dob']
        ];

    $new_staff = new Staff();
    $new_staff->addstaff($record);
    header('location: /admin/staff');
}