<!-- Unique page content -->

<h3 style="text-align: center; margin-bottom: 30px; color: #dae0e5;">Completed Requests</h3>

<!-- PHP logic which allows to load all completed query and to display to the user in table format -->

<?php

$reqs = new SponsorRequest();
$responded = $reqs->loadResponded();

if (!empty($responded)) {
    foreach ($responded as $row) {
        $formatted_date = date('d-m-Y', strtotime($row['date'])); ?>

        <table class="container table" style="margin-bottom: 20px;">
            <tr>
                <th>Sponsor Name</th>
                <th>Contact</th>
                <th>Date</th>
                <th>Description</th>
                <th>Completed By</th>
                <th>Result</th>
            </tr>
            <td><?= $row['sponsorname']?></td>
            <td><?= $row['contact']?></td>
            <td><?= $formatted_date ?></td>
            <td><?= $row['description']?></td>
            <td><?= $row['admin_name']?></td>
            <td><?= $row['status'] ?></td>
        </table>

    <?php }
} ?>