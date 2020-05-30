<!-- Unique page content -->

<?php $news = new News();

$getUpdates = $news->loadNews();

?>

<h1>Welcome to Claybrook's Zoo</h1>
<h2>Catch up with the latest News at Claybrook's</h2>

<?php

foreach ($getUpdates as $row) {
    $date = date('d-m-Y', strtotime($row['date'])); ?>

<section class="spotlight">

    <div class="image">
        <?php if (file_exists('images/news/' . $row['news_id'] . '.jpg')) { ?>
        <img class="shadow" style="padding: 20px 20px 20px 20px; opacity: 0.7;" src="images/news/<?=$row['news_id'] ?>.jpg" alt="Image Goes Here" /></div>
    <?php } else { ?>
    <img src="images/news/<?=$row['news_id'] ?>.jpg" alt="Image Goes Here" /></div>
    <?php } ?>
    <div class="content">
        <h2><?=$row['headline']?></h2>
        <h5><?=$row['description']?></h5>
        <p style="font-style: italic">By <?=$row['admin_name']?></p>
        <p><?=$date ?></p>
    </div>
</section>

    <?php } ?>

