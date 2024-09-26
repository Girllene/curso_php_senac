<?php
// Jogo de pedra, papel e tesoura.

$jogador1 = strtolower(readline("Faça sua jogada (pedra, papel, tesoura): "));
$jogadas = ["pedra", "papel", "tesoura"];
$jogador2 = $jogadas[array_rand($jogadas)];
echo "Jogador 2 fez: $jogador2 \n";

if (($jogador1 === "pedra" && $jogador2 === "tesoura") ||
    ($jogador1 === "tesoura" && $jogador2 === "papel") ||
    ($jogador1 === "papel" && $jogador2 === "pedra")) {
    echo("Jogador 1 Ganhou! \n");
} elseif ($jogador1 === $jogador2) {
    echo("Empate\n");
} else {
    echo("Jogador 2 ganhou\n");
}
?>
