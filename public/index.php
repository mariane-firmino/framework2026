<?php
include '../app/configuracao.php';
include '../app/Libraries/Rota.php';
include '../app/Libraries/Controller.php';
include '../app/Libraries/Database.php';
$db = new Database;

$id = 4;
$db->query("DELETE FROM post WHERE post_id = :id");
$db->bind(':id', $id);
$db->executa();
echo '<hr> Total Resultados: '.$db->totalResultados();
/*
date_default_timezone_set('America/Cuiaba');
$id = 2;
$usua_id = 100;
$post_titulo = 'Titulo Editado';
$post_texto = 'Texto Editado';
$post_criado_em = date('Y-m-d H:i:s');
$db->query("UPDATE post SET usua_id = :usua_id, post_titulo = :post_titulo, post_texto = :post_texto, post_criado_em = :post_criado_em WHERE post_id = :id");

$db->bind(':id', $id);
$db->bind(":usua_id", $usua_id);
$db->bind(":post_titulo", $post_titulo);
$db->bind(":post_texto", $post_texto);
$db->bind(":post_criado_em", $post_criado_em);

$db->executa();
echo '<hr> Total Resultados: '.$db->totalResultados();
*/
/*
$usuarioId = 50;
$titulo = 'Programação Web 2026';
$texto = 'Programação web 2026 com o 3 ano ti matutino é ofetado todas as segundas e quartas-feiras nos dois primeiros tempos';
$db->query("INSERT INTO post(usua_id, post_titulo, post_texto) VALUES(:usua_id, :post_titulo, :post_texto)");
$db->bind(":usua_id", $usuarioId);
$db->bind(":post_titulo", $titulo);
$db->bind(":post_texto", $texto);
*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>
    <link rel="stylesheet" href="<?=URL?>/public/css/estilo.css"/>
    <link rel="stylesheet" href="<?=URL?>/public/bootstrap/css/bootstrap.min.css"/>
    <script src="<?=URL?>/public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    include "../app/views/header.php";
    $rotas = new Rota();
    // $rotas->url();
    include "../app/views/footer.php";
    ?>
</body>
</html>