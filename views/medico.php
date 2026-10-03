<!-- Link do css -->
<link rel="stylesheet" href="assets/css/medico.css">

<section>
    <div class="col-md-6 mx-auto">
        <h2> Cadastro de médicos </h2>

        <!-- Formulário -->
        <form id="formMedico">

            <div class="mb-3">
                <label for="nome"> Nome </label>
                <input type="text" id="nome" name="nome" class="form-control">
            </div>

            <div class="mb-3">
                <label for="cpf"> CPF </label>
                <input type="number" id="cpf" name="cpf" class="form-control">
            </div>

            <div class="mb-3">
                <label for="e-mail"> E-mail </label>
                <input type="text" id="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for=telefone> Telefone </label>
                <input type="text" id="telefone" name="telefone" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary w-100"> Cadastrar</button>

        </form>

        <div id="mensagem" class="alert d-none mt-3"></div>
    </div>
</section>

<!-- Script -->
 <script src="assets/js/medico.js"></script>