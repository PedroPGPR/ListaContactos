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
                                <a href="<?= $url_base ?>ver\<?= $c['id']; ?>">
                                    <i class="fa-regular fa-eye m-1" style="color: #1eff00;"></i>
                                </a>
                                <a href="<?= $url_base ?>editar\<?= $c['id']; ?>">
                                    <i class="fa-regular fa-pen-to-square m-1" style="color: #004cff;"></i>
                                </a>
                                <i data-bs-toggle="modal" data-bs-target="#exampleModal<?= $c['id']; ?>" class="fa-solid fa-trash-can m-1" style="color: #ff0000;"></i>
                                <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="exampleModal<?= $c['id']; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tem a certeza?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Está prestes a apagar o contacto <span style="font-weight: bold;">[<?= $c['name']; ?>]</span></p>
                                                <p>Esta ação não é revertivel.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <a href="<?= $url_base; ?>apagar/<?= $c['id']; ?>" type="button" class="btn btn-danger">Confirmar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

</main>