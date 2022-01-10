
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
