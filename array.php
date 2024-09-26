<?php
$lista = ["Café", "Açucar", "Manteiga", "Pão"];
// imprimindo a lista toda

// for ($i=0; $i<=3; $i++){
//     echo "$lista[$i]\n";

// adiciona elemento ao fim da lista

array_push($lista, "Queijo");
// contar qtos elementos tem na array
for ($i=0; $i<count($lista); $i++){
    echo "$lista[$i]\n";
}
// remove e guarda o elemento da lista
$ultimo = array_pop($lista);

// outra forma de usar o for para imprimir a lista 
foreach ($lista as $item){
    echo "$item\n";}

// imprimindo apenas elementos da lista
// echo "$lista[2]";

// conta qtos elementos tem no array
echo count($lista);

?>