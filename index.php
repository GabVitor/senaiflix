<!DOCTYPE html>
<html lang="PT-BR">
<html>
    <head>
        <meta charset = "UTF-8">
        <title> Página Principal </title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid my-5">
        <?php
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';
        $pagePath = "pages/{$pagina}.php";

        if (file_exists($pagePath)) {
            include $pagePath;
        } else {
            echo "<div class='alert alert-danger'>Página não encontrada.</div>";
        }
        ?>
    </div>

        
    </body>
</html>