<h1>Main - Index</h1>
<?php foreach ($test as $val): ?>
    <h1><?=$val['name']?></h1>
    <h6><?=$val['age']?></h6>
<?php endforeach; ?>

<?= $findOne[0]['name']?>
