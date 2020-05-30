
<!-- Unique page content -->

<!-- PHP logic loads all uncompleted queries and displays them to the user in table format -->

<?php

$req = new SponsorRequest();
$pendingreqs = $req->loadRequest(); ?>

<div class=" tm-mt-big tm-mb-big">
    <nav class=" navbar-expand-xl">
        <div class="container h-100">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <a  class="nav-link" href="/admin/archive"> Responded Requests</a>
                </ul>
            </div>
        </div>
    </nav>
</div>

<h3 style="text-align: center; color: #dae0e5;">Business Sponsor Requests</h3>

 <table class="container table">
                <tr>
                    <th>Sponsor Name</th>
                    <th>Sponsor Contact</th>
                    <th>Date Of Request</th>
                    <th>Description</th>
                    <th>Signage Size</th>
                    <th>Signage Requested Date</th>
                    <th>Respond</th>
                </tr>



    <?php

    if (!empty($pendingreqs)) {
        foreach ($pendingreqs as $row) {
            $formatted_date = date('d-m-Y', strtotime($row['date'])); ?>
            <tr>
                <form method="post">
                <td><?= $row['sponsorname'] ?></td>
                <td><?= $row['contact'] ?></td>
                <td><?= $formatted_date ?></td>
                <td><?= $row['description'] ?></td>
                <td><?= $row['size'] ?></td>
                <td><?= $row['request_date'] ?></td>
                <input type="hidden" name="id" value="<?= $row['sponsor_id'] ?>"/>
                <td><input class="btn-primary" type="submit" name="rejected" value="Reject"/>
                <input class="btn-primary" type="submit" name="accepted" value="Accept"/></td>
                </form>
            </tr>

            <?php if (isset($_POST['rejected'])) {
                $editReq =
                    [
                        'sponsor_id' => $_POST['id'],
                        'status' => 'rejected',
                        'admin_name' => $_SESSION['admin']
                    ];

                $editSponsor = new SponsorRequest();
                $editSponsor->editRequest($editReq);
            }

            if (isset($_POST['accepted'])) {
                $editReq =
                    [
                        'sponsor_id' => $_POST['id'],
                        'status' => 'accepted',
                        'admin_name' => $_SESSION['admin']
                    ];

                $editSponsor = new SponsorRequest();
                $editSponsor->editRequest($editReq);
            }

        }
    } ?>

 </table>