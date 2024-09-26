<!-- Construa um programa/página onde o usuário digitará o seu nome e a saída dele será: -->
<!-- “Seja Bem-vindo(a), Nome do usuário“ com o nome do usuário (utilizar função). -->


<?php

$nome = (readline("Qual sua nome? ): "));

function bemVindo($nome){
    echo "Seja Bem-vindo(a) $nome";
}
bemVindo($nome)

?>