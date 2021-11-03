<html>
    <head>
        <meta chartset="UTF-8">
        
        <title> praticando PHP</title>
    </head>
    <body>
        <?php
            $nome = "Ney";  //string
            $idade = 30;    //int
            $peso = 60.5;   //float
            $fumante = false;   //boolean

        ?>

        <h1> ficha </h1>
        <p>Nome: <?=$nome ?> </p>
        <p>idade: <?=$idade ?> </p>
        <p>Peso: <?=$peso ?> </p>
        <p>Fumante: <?=$fumante ?> </p>

        echo 'Meu nome é' . $nome . 'e tenho ' . $idade;

        echo '<br/>';

        echo "Me chamo $nome, minha idadei é $idade e peso $peso";

        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario');
        define('BD_SENHA', 'senha');

        echo BD_URL . '<br/>';
        echo BD_USUARIO . '<br/>';
        echo BD_SENHA . '<br/>';



        define('BD_ESCOLA', 'aluno');

        echo BD_ESCOLA . '<br/>';
        



        
    </body>

</html>