<!--<a href="/">HOME</a>-->
<!--<h1>Db - Index</h1>-->

<form action="/db" method="post">

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" required>
        <div id="nameHelp" class="form-text">Name</div>
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="text" name="age" class="form-control" id="age" aria-describedby="nameHelp" required>
        <div id="nameHelp" class="form-text">Age</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!---->
<!---->
<!---->
<!--<form action="/db" method="post">-->
<!--    <input type="text" name="name" value="Petruk"><br>-->
<!--    <input type="text" name="age" value="25"><br>-->
<!--    <input type="submit" value="Send"><br>-->
<!--</form>-->

<?php
echo '<pre>';
foreach ($fileContent as $line)
{
    echo htmlspecialchars($line) . '<br>';
}
echo '</pre>'; ?>


