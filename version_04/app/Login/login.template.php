<!-- View -->


<div class="row">
    <div class="col">
        <h1>Login</h1>

        <?php if ($this->status === 0 OR $this->status === 1): ?>
        <?php if ($this->status === 1): ?>
            <div class="alert alert-warning">Falsche Eingabe.</div>
        <?php endif; ?>
        <form method="POST" action="<?= $_SERVER['PHP_SELF']?>">

            <div class="form-group row">
                <label for="user" class="col-sm-2 col-form-label">Benutzername</label>
                <div class="col-sm-10">
                    <input type="text" name="user" class="form-control" id="user" >
                </div>
            </div>

            <div class="form-group row">
                <label for="pwd" class="col-sm-2 col-form-label">Passwort</label>
                <div class="col-sm-10">
                    <input type="text" name="pwd" class="form-control" id="pwd">
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Login</button>

        </form>
        <?php endif; ?>
        <?php if ($this->status === 2): ?>
        <p>Sie sind nun eingeloggt.</p>
        <?php endif; ?>

    </div>
</div>