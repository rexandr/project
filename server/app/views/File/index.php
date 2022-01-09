<!--<a href="/">HOME</a>-->
<!--<h1>File - Index</h1>-->

<form action="/file" method="post">
    <input type="text" name="name" value="Petruk">
    <input type="text" name="secondname" value="Pyatochkin">
    <input type="submit" value="Send">
</form>

<?php echo '<pre>';
foreach ($fileContent as $line)
{
    echo htmlspecialchars($line).'<br>';
}
echo '</pre>';?>
