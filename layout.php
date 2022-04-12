<!doctype html>
<html>
    <head>
    <title><?= $title?></title>
    </head>
    <body>
        <?= $description?>
       <div>
        <header>
            <?php include 'elems/header.php';?>
        </header>
        <main>
            <?= $content?>
        </main>
        <footer>
            footer
        </footer>
       </div>
    </body>
</html>



