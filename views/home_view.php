<main class="d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-9 mx-auto">
                <h1 class="text-center text-primary mb-4">A minha lista de contactos</h1>
                <table class="shadow mx-auto">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telemóvel</th>
                        <th>E-mail</th>
                        <th>Acções</th>
                    </tr>
                    <?php foreach($contactos as $c): ?>
                        <tr>
                            <td><?= $c['id']; ?></td>
                            <td><?= $c['name']; ?></td>
                            <td><?= $c['phone']; ?></td>
                            <td><?= $c['email']; ?></td>
                            <td>
                                <i class="fa-regular fa-eye m-1" style="color: #1eff00;"></i>
                                <i class="fa-regular fa-pen-to-square m-1" style="color: #004cff;"></i>
                                <i class="fa-solid fa-trash-can m-1" style="color: #ff0000;"></i>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

</main>