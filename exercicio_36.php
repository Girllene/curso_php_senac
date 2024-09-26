<!-- ususario digita um número
computador escolhe um $numero1
Se a soma dos 2 numeros foresm par o usuario ganha
Se for impar o computador ganha -->

<?php

function ehParOuimpar ($usuario, $computador){
    $soma = $usuario + $computador;
    if ($soma%2 == 0){
        echo "Usuario Ganhou!\n";

    }
    else {
        echo "Computador Ganhou!\n";
    }
}
$usuario = (readline("Digite seu número ): "));

$computador = rand(1,100);
echo $computador;

ehParOuimpar($usuario, $computador);







?>