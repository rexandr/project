<h1>File - Index</h1>

<form action="/file" method="post">
    <input type="text" name="name" value="Petruk">
    <input type="text" name="secondname" value="Pyatochkin">
    <input type="submit" value="Send">
</form>

<?php echo '<pre>';
var_dump($fileContent);
echo '</pre>';?>

<?php //foreach ($file as $k=>$f): ?>
<!--<h1>--><?//= print_r($f); ?><!--</h1>-->
<?php //endforeach; ?>