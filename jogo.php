//jogo de pedra, papel e tesoura.

$jogador1 = "papel" 
// ou pedra ou tesoura
$jogador2 = "tesoura" 
// ou papel ou tesoura


if (jogador1 === jogador2){
    echo('Empate')
}
else if (jogador1 ===  'papel' && jogador2 === 'pedra') {
    echo('Jogador 1 ganhou')
}
else if (jogador1 === 'pedra' && jogador2 === 'tesoura') {
    echo('Jogador 1 ganhou');
} 
else if (jogador1 ===  'tesoura' && jogador2 === 'papel') {
    echo('Jogador 1 ganhou');
} 
else 
    echo('Jogador 2 ganhou')