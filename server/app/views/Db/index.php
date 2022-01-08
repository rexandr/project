<a href="/">HOME</a>
<h1>Db - Index</h1>

<form action="/db" method="post">
    <input type="text" name="name" value="Petruk"><br>
    <input type="text" name="age" value="25"><br>
    <input type="submit" value="Send"><br>
</form>

<?php
echo '<pre>';
foreach ($fileContent as $line)
{
    $line = implode('_', $line);
    echo htmlspecialchars($line) . '<br>';
}
echo '</pre>'; ?>


