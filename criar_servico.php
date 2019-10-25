<?php require_once('header.php'); ?>

<main>
    <div class="container mt-5">
        <div class="row">
            <div class="col mb-4">
                <h1>Novo serviço</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-5">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="">Descrição</label>
                        <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Imagem</label>
                        <input type="file" class="form-control" name="imagem" id="imagem">
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-primary" name="cadastrar_servico">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-6 mb-5 d-flex justify-content-center">
                <img src="photos/undraw_imagination_ok71.svg" class="img-criar-servico" alt="ilustra">
            </div>
        </div>
    </div>
</main>











<?php require_once('footer.php'); ?>