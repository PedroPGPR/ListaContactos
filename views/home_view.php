<main class="d-flex justify-content-center align-items-center">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tem a certeza?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Irá apagar o contacto X | Esta ação é permanente e não revertivel
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Apagar</button>
                </div>
            </div>
        </div>
    </div>
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
                            <td><?= $c['id'] ?></td>
                            <td><?= $c['name'] ?></td>
                            <td><?= $c['phone'] ?></td>
                            <td><?= $c['email'] ?></td>
                            <td>
                                <a href="#">
                                    <i class="fa-regular fa-eye m-1" style="color: #1eff00;"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-pen-to-square m-1" style="color: #004cff;"></i>
                                </a>
                                <a href="#">
                                    <!-- Button trigger modal -->
                                    <i class="fa-solid fa-trash-can m-1" style="color: #ff0000;" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

</main>