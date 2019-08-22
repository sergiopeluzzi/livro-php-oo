<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Livros</h1>
    <div>
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";

        $p[0] = new Pessoa("Sergio", 33, "M");
        $p[1] = new Pessoa("Lauri", 28, "F");
        $p[2] = new Pessoa("Yasmin", 10, "F");

        $l[0] = new Livro("PHP Básico", "João Paulo", 300, $p[2]);
        $l[1] = new Livro("PHP Intermediário", "João Paulo", 500, $p[1]);
        $l[2] = new Livro("PHP Avançado", "João Pedro", 800, $p[0]);

        $l[0]->detalhes();
        
        $l[1]->folear(50);
        $l[1]->detalhes();

        $l[2]->folear(20);
        $l[2]->avancarPag();
        $l[2]->detalhes();
    ?>
    </div>
</body>
</html>