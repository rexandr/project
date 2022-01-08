<form action="<?=$source?>" method="post">
<!--<form action="/" method="post">-->
    <label for="txt">Provide TXT:</label>
    <input type="text" name="txt" value="/files/file.txt" id="txt">
    <br>
    <label for="csv">Provide CSV:</label>
    <input type="text" name="csv" value="/files/file.csv" id="csv">
    <br>
    <label for="user">DB User:</label>
    <input type="text" name="user" value="root" id="user">
    <br>
    <label for="host">DB Host:</label>
    <input type="text" name="host" value="a_level_nix_mysql" id="host">
    <br>
    <label for="port">DB Port:</label>
    <input type="text" name="port" value="3306" id="port">
    <br>
    <label for="db">DB Name:</label>
    <input type="text" name="db" value="golovach" id="db">
    <br>
    <label for="table">Table:</label>
    <input type="text" name="table" value="test" id="table">
    <br>
    <label for="pass">Table:</label>
    <input type="password" name="pass" value="cbece_gead-cebfa" id="pass">
    <br>
    <input type="submit" value="Save">
</form>
