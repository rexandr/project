
<form action="/csv" method="post">

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" required>
        <div id="nameHelp" class="form-text">Name</div>
    </div>

    <div class="mb-3">
        <label for="secondname" class="form-label">Secondname</label>
        <input type="secondname" name="secondname" class="form-control" id="secondname" aria-describedby="nameHelp" required>
        <div id="nameHelp" class="form-text">Secondname</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php foreach($fileContent as $line):?>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p><?=$line?>></p>
        </blockquote>
    </figure>
<?php endforeach; ?>

