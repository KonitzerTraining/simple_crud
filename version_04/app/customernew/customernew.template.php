<!-- View -->
<div class="row">
    <div class="col">
        <h1>Neuer Kunde</h1>

        <?php if ($this->status === 0 OR $this->status === 1): ?>
            <?php if ($this->status === 1): ?>
                <div class="alert alert-info">Es sind Fehler im Formular. Bitte überprüfen.</div>
            <?php endif; ?>
            <form method="POST">

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="plz" class="col-sm-2 col-form-label">PLZ</label>
                    <div class="col-sm-10">
                        <input type="text" name="plz" class="form-control" id="plz">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        <?php endif; ?>

        <?php if ($this->status === 2): ?>

        <div class="alert alert-info">Kunde wurde angelegt.</div>

        Sie werden weiter geleitet auf die Kundenliste.

        <script>
                window.setTimeout(function () {
                    document.location.href = 'index.php?page=customer';
                }, 2500);
        </script>

        <?php endif; ?>
    </div>
</div>


