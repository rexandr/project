
<form action="register/reg" method="post">

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

    <div class="mb-3">
        <label for="password" class="form-label">Repeat password</label>
        <input type="password" name="repeat" class="form-control" id="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
