<main class="container">
    <div class="row d-flex justify-content-center">
        <h1  class="text-center text-primary mb-4">Connsultar Contacto</h1>
        <div class="col-9">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="<?= $contacto['name']; ?>" required disabled>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telemóvel:</label>
                    <input type="tel" class="form-control" name="phone" value="<?= $contacto['phone']; ?>" required disabled>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" name="email" value="<?= $contacto['email']; ?>" required disabled>
                </div>
                <div class="mb-3">
                    <label for="observations" class="form-label">Observações:</label>
                    <textarea class="form-control" name="observations" rows="7" placeholder="Descrição / Observações" required disabled><?= $contacto['observations']; ?></textarea>
                </div>
                <a href="<?= $url_base; ?>">
                    <button type="button" class="btn btn-secondary">Voltar Ínicio</button>
                </a>
            </form>
        </div>
    </div>
</main>