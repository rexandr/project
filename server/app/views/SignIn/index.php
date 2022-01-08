<a href="/">HOME</a><br>
<a href="/register">Registration.</a><br>
<h1>SignIn - Index</h1>

<?php
if (isset($msg))
{
    echo '<h1>'.$msg.'</h1>';
}
?>

<form action="/sign-in/" method="post">
    <input type="text" name="name" placeholder="User Name"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="text" name="email" placeholder="E-mail"><br>
    <input type="checkbox" name="forgot" id="forgot">
    <label for="forgot">Forgot password?</label><br>
    <input type="submit" value="Sign In">
</form>