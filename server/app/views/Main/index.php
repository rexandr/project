<h1>Main - Index</h1>
<a href="/file">Work with file.</a><br>
<a href="/db">Work with DB.</a><br>
<a href="/configs">CONFIGS.</a><br>
<a href="/register">Registration.</a><br>
<a href="/sign-in">SignIn</a><br>
<a href="/log-out">Log Out</a><br>
<form action="" method="post">
    <select name="select">
        <option value="db">Data Base</option>
        <option value="file" selected>Txt File</option>
        <option value="csv">Csv File</option>
    </select>
    <input type="submit" value="OK">
</form>

<?php
if (isset($_POST['txt']))
{
    $_SESSION['config'] = $_POST;
}
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
//if (isset($_POST['select']))
//{
//    $r = $_POST['select'];
//    header("$r");
//}
//var_dump($_POST['select']);

foreach ($all as $line)
{
    echo htmlspecialchars($line).'<br>';
}


if (isset($msg))
{
    echo '<h1>'.$msg.'</h1>';
}
?>