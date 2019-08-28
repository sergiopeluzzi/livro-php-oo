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
            require_once "Professor.php";
            require_once "Funcionario.php";
            require_once "Aluno.php";

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
    <h1>Acadêmico</h1>
    <div>
        <pre>
        <?php
            $p[3] = new Professor("Peluzzi", 33, "M");
            $p[3]->setEspecialidade(["Didática do Ensino Superior", "Desenvolvimento Web e Mobile"]);
            $p[3]->setSalario(4000.00);
            $p[3]->recebeAum(300.00);
            
            $p[4] = new Funcionario("Bruno", 30, "M");
            $p[4]->setSetor("Tecnologia da Informação - T.I.");

            $p[5] = new Aluno("Mirian", 25, "F");
            $p[5]->setCurso("Sistemas de Informação");
            
            echo '<hr>';
            print_r([$p[3], $p[4], $p[5]]);
            
        ?>
        <pre>
    </div>
</body>
</html>