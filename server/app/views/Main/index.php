<!--<h1>Main - Index</h1>-->
<!--<a href="/file">Work with txt.</a><br>-->
<!--<a href="/csv">Work with csv.</a><br>-->
<!--<a href="/db">Work with DB.</a><br>-->
<!--<a href="/configs">CONFIGS.</a><br>-->
<!--<a href="/register">Registration.</a><br>-->
<!--<a href="/sign-in">SignIn</a><br>-->
<!--<a href="/log-out">Log Out</a><br>-->
<form action="/configs" method="post">
    <select name="select">
        <option value="/db">Data Base</option>
        <option value="/file" selected>Txt File</option>
        <option value="/csv">Csv File</option>
    </select>
    <input type="submit" value="OK">
</form>


<?php foreach($all as $line):?>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p><?=$line?>></p>
        </blockquote>
    </figure>
<?php endforeach; ?>

<?php

//foreach ($all as $line)
//{
//    echo htmlspecialchars($line).'<br>';
//}


//if (isset($msg))
//{
//    echo '<h1>'.$msg.'</h1>';
//}
?>