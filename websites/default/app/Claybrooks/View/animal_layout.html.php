



    <article id="main">

        <header class="">

            <h2><a href="/animal/main">All Animals</a></h2>
            <ul style="padding: 10px 10px 10px 10px; class="fa-ul">

                <?php

                $loadAnimals = new Species();
                $fetch = $loadAnimals->loadSpecies();
            ?>
                <table class="table" style="margin-right: 10px;">
                    <th>Animal By Species</th>
                <?php
                foreach ($fetch as $row) { ?>
                    <td><a href="/animal/species/<?= $row['name'] ?>">All <?= $row['name'] ?>'s</a></td>
                <?php } ?>
                </table>
            </ul>
            <p style="font-size: 12px">Take a look at our animals below, or select a species to look at our current animals of choice!, learn who you can see at our Zoo
            before visiting!</p>
        </header>

    </article>

        <?php
        foreach ($this->layout_data as $row)
        {
        if ($row['hidden'] == 'false')
        {
        if (file_exists('images/animal/' . $row['animal_id']))
        { ?>
        <div class="card" style="padding: 20px 20px 20px 20px; background-color: #1d2124; margin-top: -120px; margin-bottom: 100px">

        <div class="card-body">
            <h1 class="card-title" style="color: #dae0e5;">Name: <?= $row['name'] ?></h1>
            <?php for ($count = 0; $count < count(glob('images/animal/' . $row['animal_id'] . '/*.jpg')); $count++) { ?>

                <a href="/images/animal/<?= $row['animal_id'] ?>/<?= $count ?>.jpg">
                    <img class="card-img" style="width: 300px; height: 200px; margin: 20px 10px 20px 10px; opacity: 0.7"
                         src="/images/animal/<?= $row['animal_id'] ?>/<?= $count ?>.jpg"
                         alt="Image Coming Soon"/></a><br> <?php } ?>
        <h6>Age: <?= $row['age'] ?></h6><br>
                <h6>Origin: <?= $row['origin'];?></h6><br>
        <h6>About: <?= $row['description'] ?></h6><br>
                <?php
            }
            }
          ?>
            </div>
            </div>
         <?php }  ?>
