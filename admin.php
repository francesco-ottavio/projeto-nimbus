<?php require_once('header.php'); ?>

<main>
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h1>Painel Administrativo</h1>
            </div>
            <div class="col text-right">
                <a href="criar_servico.php" class="btn btn-primary">+ Novo serviço</a>
            </div>
        </div>
        <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Imagem</th>
                                <th class="coluna-acoes">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Consultoria UX</td>
                                <td>aqui vem a descrição</td>
                                <td> <img src="photos/undraw_conversation_h12g.svg" class="ilustra-admin" alt="ilustra"> </td>
                                <td>
                                    <a href="#" class="btn btn-info">Editar</a>
                                    <a href="#" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>                    
                </div>
            </div>
    </div>
</main>












<?php require_once('footer.php'); ?>