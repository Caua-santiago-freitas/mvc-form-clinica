<?php
//definir url do  projeto
//http://localhost/Cau%C3%A3/mvc/a_projeto_mvc_funcoes/index.php?page=medico

//definir páginas válidas no projeto
$paginasValidas = [
    "medico" => __DIR__ . "/views/medico.php",
    "agenda" => __DIR__ . "/views/agenda.php",
];

// Capturar a página informada na url 
$page = $_GET["page"] ?? "medico"; //prod. ou cli. ou func.

//Verificar se a página existe
if (array_key_exists($page, $paginasValidas)) {
    require $paginasValidas[$page];
} else {
    http_response_code(404);
    require __DIR__ . "/views/404.php";
}
