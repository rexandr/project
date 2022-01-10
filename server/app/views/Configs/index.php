<div class="container">
    <form action="<?= $source ?>" method="post">

        <div class="mb-3">
            <label for="txt" class="form-label">Provide TXT:</label>
            <input type="text" name="txt" class="form-control" id="txt" value="/files/file.txt" required>

        </div>

        <div class="mb-3">
            <label for="csv" class="form-label">Provide CSV:</label>
            <input type="text" name="csv" class="form-control" id="csv" value="/files/file.csv" required>
        </div>

        <div class="mb-3">
            <label for="user" class="form-label">Provide DB's user:</label>
            <input type="text" name="user" class="form-control" id="user" value="root" required>

        </div>

        <div class="mb-3">
            <label for="host" class="form-label">Provide DB's host:</label>
            <input type="text" name="host" class="form-control" id="host" value="a_level_nix_mysql" required>

        </div>

        <div class="mb-3">
            <label for="port" class="form-label">Provide DB's port:</label>
            <input type="text" name="port" class="form-control" id="port" value="3306" required>

        </div>

        <div class="mb-3">
            <label for="db" class="form-label">Provide DB's name:</label>
            <input type="text" name="db" class="form-control" id="db" value="golovach" required>
        </div>

        <div class="mb-3">
            <label for="table" class="form-label">Provide DB's table:</label>
            <input type="text" name="table" class="form-control" id="table" value="test" required>
        </div>

        <div class="mb-3">
            <label for="pass" class="form-label">Provide DB user's pass:</label>
            <input type="text" name="pass" class="form-control" id="pass" value="cbece_gead-cebfa" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
