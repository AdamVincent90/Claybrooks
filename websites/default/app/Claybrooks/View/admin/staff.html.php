<div class=" tm-mt-big tm-mb-big">
    <nav class=" navbar-expand-xl">
            <div class="container h-100">
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
        <li class="nav-item align-content-between"><a class="nav-link" href="/admin/editstaff"> Amend Staff Member</a></li>
        <li class="nav-item align-content-between"><a class="nav-link" href="/admin/addstaff"> Add Staff Member</a></li>
        <li class="nav-item align-content-between"><a class="nav-link" href="/admin/createadmin"> Add Admin</a></li>
    </ul>
                 </div>
            </div>
    </nav>
</div>
<h3 style="text-align: center; font-weight: bold; color: #dae0e5">All staff members</h3>
  <table class="container table" style="color: white; font-weight: bold">
    <th>First Name</th>
      <th>Last Name</th>
      <th>Role</th>
      <th>Email Address</th>
      <th>Date of Birth</th>
    <?php $load_all_staff_details = new Staff();
    $all_staff = $load_all_staff_details->loadStaff();

    foreach ($all_staff as $row) { ?>

        <tr>
            <td><?= $row['firstname'] ?></td>
            <td><?= $row['lastname'] ?></td>
            <td><?= $row['role'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['dob'] ?></td>
        </tr>

    <?php } ?>

</table>
<h3 style="text-align: center; margin-top: 20px; font-weight: bold; color: #dae0e5">Admin Staff</h3>
<table class="container table" style="color: white; font-weight: bold"">
<th>Log In ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email Address</th>
<th>Date of Birth</th>

    <?php $load_all_admin_details = new Admin();
    $all_admin = $load_all_admin_details->loadAdmin();

    foreach ($all_admin as $row) { ?>

        <tr>
            <td><?= $row['admin_id'] ?></td>
            <td><?= $row['firstname'] ?></td>
            <td><?= $row['lastname'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['dob'] ?></td>
        </tr>

    <?php } ?>

</table>
