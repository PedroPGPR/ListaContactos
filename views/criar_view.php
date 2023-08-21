<main class="container">
    <div class="row d-flex justify-content-center">
        <h1  class="text-center text-primary mb-4">Adicionar Contacto</h1>
        <p class="<?= ($dblock==1) ? "d-block" : "d-none" ?> border border-success text-success text-center fw-bold p-3 w-50" style="background-color: lightgreen;">
            O Contacto foi adicionado com Sucesso!
        </p>
        <div class="col-9">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telemóvel:</label>
                    <input type="tel" class="form-control" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="observations" class="form-label">Observações:</label>
                    <textarea class="form-control" name="observations" rows="7" placeholder="Descrição / Observações" required></textarea>
                </div>
                <input type="submit" value="Adicionar Contacto" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">
                <a href="<?= $url_base; ?>">
                    <button type="button" class="btn btn-secondary">Voltar Ínicio</button>
                </a>
            </form>
        </div>
    </div>
</main>