// Construa uma página onde o usuário digitará quatro notas escolares e o programa irá
// calcular a média e, caso seja menor que 6, exibirá na tela: “Aluno Reprovado”. Caso
// seja maior ou igual a 6 exibirá na tela: “Aluno Aprovado”.

nota1 = 2
nota2 = 10
nota3 = 2
nota4 = 8

media = (nota1 + nota2 + nota3 + nota4) / 4

if (media < 6){
    console.log ('Média = ' +  media  + '- Aluno Reprovado');

}
else {
    console.log('Média = '  + media +  '- Aluno Aprovado')
}
