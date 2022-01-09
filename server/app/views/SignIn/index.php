<!--<a href="/">HOME</a><br>-->
<!--<a href="/register">Registration.</a><br>-->
<!--<h1>SignIn - Index</h1>-->

<?php
if (isset($msg)) {
    echo '<h1>' . $msg . '</h1>';
}
?>


<form action="/sign-in/" method="post">

    <div class="mb-3">
        <label for="name" class="form-label">User name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" required>
        <div id="nameHelp" class="form-text">Enter your user's name.</div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="forgot" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Forgot password?</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!---->
<!--<form action="/sign-in/" method="post">-->
<!--    <input type="text" name="name" placeholder="User Name"><br>-->
<!--    <input type="password" name="password" placeholder="Password"><br>-->
<!--    <input type="text" name="email" placeholder="E-mail"><br>-->
<!--    <input type="checkbox" name="forgot" id="forgot">-->
<!--    <label for="forgot">Forgot password?</label><br>-->
<!--    <input type="submit" value="Sign In">-->
<!--</form>-->