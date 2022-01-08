<a href="/">HOME</a>
<h1>Csv - Index</h1>

<form action="/csv" method="post">
    <input type="text" name="name" value="Petruk">
    <input type="text" name="secondname" value="Pyatochkin">
    <input type="submit" value="Send">
</form>

<?php echo '<pre>';

echo '<pre>';
print_r($_POST);
echo '</pre>';
foreach ($fileContent as $line)
{
    echo htmlspecialchars($line).'<br>';
}
echo '</pre>';?>
