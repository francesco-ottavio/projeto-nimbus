<?php

$servicos = [
    [
        "nome" => "Desenvolvimento Web",
        "imagem" => "photos/undraw_social_thinking_7ule.svg",
        "descricao" => "Alcance um público maior, venda mais rápido!"
    ],
    [
        "nome" => "Marketing Digital",
        "imagem" => "photos/undraw_conversation_h12g.svg",
        "descricao" => "Sites dinamicos, otimizados para motores de busca."
    ],
    [
        "nome" => "Consultoria de UX",
        "imagem" => "photos/undraw_healthy_lifestyle_6tyl.svg",
        "descricao" => "Ofereça a melhor experiência para seus usuários!"
    ],
    [
        "nome" => "Suporte técnico",
        "imagem" => "photos/undraw_conversation_h12g.svg",
        "descricao" => "Suporte técnico 24/7 para o seu negócio"
    ],
    [
        "nome" => "Design Thinking",
        "imagem" => "photos/undraw_conversation_h12g.svg",
        "descricao" => "O caminho para a inovação!"
    ],
    [
        "nome" => "Design Sprint",
        "imagem" => "photos/undraw_conversation_h12g.svg",
        "descricao" => "Suporte técnico 24/7 para o seu negócio"
    ]
];


function listarServicos()
{

    global $servicos;

    foreach ($servicos as $index => $servico) {

        echo "<div class='col-md-4'>
        <div class='card'>
            <img class='card-img-top' src=$servico[imagem] alt='destaque-1'>
            <div class='card-body'>
                <p class='card-text text-center'><a href='servico.php?id=$index'>$servico[nome]</a></p>
            </div>
        </div>
    </div>";
    }

}

function getNome($id)
{
    global $servicos;
    return $servicos[$id]["nome"];
}