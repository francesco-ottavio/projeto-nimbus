<?php

session_start();

// $servicos = [
//     [
//         "nome" => "Desenvolvimento Web",
//         "imagem" => "photos/undraw_social_thinking_7ule.svg",
//         "descricao" => "Alcance um público maior, venda mais rápido!"
//     ],
//     [
//         "nome" => "Marketing Digital",
//         "imagem" => "photos/undraw_conversation_h12g.svg",
//         "descricao" => "Sites dinamicos, otimizados para motores de busca."
//     ],
//     [
//         "nome" => "Consultoria de UX",
//         "imagem" => "photos/undraw_healthy_lifestyle_6tyl.svg",
//         "descricao" => "Ofereça a melhor experiência para seus usuários!"
//     ],
//     [
//         "nome" => "Suporte técnico",
//         "imagem" => "photos/undraw_conversation_h12g.svg",
//         "descricao" => "Suporte técnico 24/7 para o seu negócio"
//     ],
//     [
//         "nome" => "Design Thinking",
//         "imagem" => "photos/undraw_conversation_h12g.svg",
//         "descricao" => "O caminho para a inovação!"
//     ],
//     [
//         "nome" => "Design Sprint",
//         "imagem" => "photos/undraw_conversation_h12g.svg",
//         "descricao" => "Suporte técnico 24/7 para o seu negócio"
//     ]
// ];


// function listarServicos()
// {

//     global $servicos;

//     foreach ($servicos as $index => $servico) {

//         echo "<div class='col-md-4'>
//         <div class='card'>
//             <img class='card-img-top' src=$servico[imagem] alt='destaque-1'>
//             <div class='card-body'>
//                 <p class='card-text text-center'><a href='servico.php?id=$index'>$servico[nome]</a></p>
//             </div>
//         </div>
//     </div>";
//     }
// }

function getNome($id)
{
    global $servicos;
    return $servicos[$id]["nome"];
}

function getDescricao($id)
{
    global $servicos;
    return $servicos[$id]["descricao"];
}
function getImagem($id)
{
    global $servicos;
    return $servicos[$id]["imagem"];
}

if (isset($_POST['cadastrar_servico'])) {
    // echo "<pre>";
    // var_dump($_POST);
    $arquivoServicos = 'servicos.json';
    $imagemServico = '';    

    if($_FILES){
        $nome = $_FILES['imagem']['name'];
        $nomeTemp = $_FILES['imagem']['tmp_name'];
        $erro = $_FILES['imagem']['error'];
        $pastaRaiz = dirname(__FILE__);
        $pasta = "servicos/";
        $caminhoCompleto = $pastaRaiz . '/' . $pasta . $nome;

        if($erro == UPLOAD_ERR_OK){
            move_uploaded_file($nomeTemp, $caminhoCompleto);
            $imagemServico = $pasta . $nome;
        }
    }

    if (file_exists($arquivoServicos)) {
        $jsonServicos = file_get_contents($arquivoServicos);
        $arrayServicos = json_decode($jsonServicos, true);
        $infoServico = $_POST;
        $infoServico['imagem'] = $imagemServico;
        $arrayServicos['servicos'][] = $infoServico;
        $jsonServicos = json_encode($arrayServicos, true);
        file_put_contents($arquivoServicos, $jsonServicos);
    } else {
        $arquivo = fopen($arquivoServicos, 'w'); //abre ou cria o arquivo
        $arrayServicos = ["servicos" => []]; // cria array pra guardar serviços
        $infoServico = $_POST; // pega informações do formulário de cadastro
        $infoServico['imagem'] = $imagemServico;
        $arrayServicos["servicos"][] = $infoServico; //adiciona o novo serviço na
        $jsonServicos = json_encode($arrayServicos, true); // converte array em json
        file_put_contents($arquivoServicos, $jsonServicos); //adiciona info no arquivo
    }
}


function listarServicos(){
    //trazer infos do jason
    $arquivoJson = 'servicos.json';
    $servicos = [];
    if(file_exists($arquivoJson)){
        $jsonServicos = file_get_contents($arquivoJson); //conteudo do arquivo
        $arrayServicos = json_decode($jsonServicos, true); //json para array

        $servicos = $arrayServicos['servicos'];
    }
    return $servicos;
}

// echo "<pre>";
// var_dump(listarServicos());

if(isset($_POST['login'])){
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    if($email == "" || $senha == ""){
        $erro = "Preencha os campos corretamente";
    }else{
        unset($erro);
        $_SESSION['logado'] = true;
        if(isset($_POST['manter_logado'])){
            setcookie("email", $email, time()+3600, '/');
            setcookie("senha", $senha, time()+3600, '/');
        }
        header('Location: index.php');
    }
}

if (isset($_GET['logout'])){
    session_destroy();
}
