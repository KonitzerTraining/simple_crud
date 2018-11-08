<!-- View -->
<div class="row">
    <div class="col">
        <h1>Kundenliste</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">PLZ</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($this->customers as $value) { ?>
            <tr>
                <th scope="row"><?= $value['id'] ?></th>
                <td><?= $value['name'] ?></td>
                <td><?= $value['plz'] ?></td>
                <td><button class="btn btn-warning">Delete</button></td>
            </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</div>


