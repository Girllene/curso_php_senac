<!-- Construa um programa onde o usuário digitará a sua idade. 
Se a idade for menor de 18 anos, o programa entrará em uma função listando nomes de programas infantis. -->
<!-- Caso seja maior de idade, entrará em uma outra função com lista de carros e seus respectivos preços. -->

<?php
function listaCrarros(){
    echo "Opala R$ 60.000\n", "Vectra R$ 15.000\n", "Gol R$ 75.000\n";
}

function listaProgramasInfantins(){
    echo "Tom & Jerrey\n", "Pica Pau\n", "Looney Tonnes\n";
}

$idade = (readline("Qual sua idade? ): "));

if ($idade>= 18){
    listaCrarros();
}
else { 
    listaProgramasInfantins();
}

?>