// duas notas escolares. Caso a média seja abaixo de 4, o programa escreverá “Aluno Reprovado”. 
// Caso a nota seja maior que 7, escreverá: “Aluno Aprovado Direto”. ]
// E, no caso em que a nota for maior que 4 e menor que 7 escreverá: “Aluno em Recuperação”. 
// No último caso, o programa deve solicitar a nota de recuperação. 
// Caso ela seja menor que 5, escrever: “Reprovado na
// Recuperação” ou, 
// caso contrário, escrever “Aprovado na Recuperação”.

nota1 = 5
nota2 = 9
nota_recuperacao = 7
media = (nota1 + nota2)/2

if (media < 4){
    console.log ('Média = ' +  media  + ' - Aluno Reprovado')
}
else if (media >7){
    console.log ('Média = ' +  media  + ' - Aluno em Aprovado Direto');
}
else if (media >= 4 && media <= 7){
    console.log ('Média = ' +  media  + ' - Aluno em Recuperação');
 

    // Verifica a nota de recuperação
if (nota_recuperacao < 5){
    console.log ('Nota de Recuperação = ' + nota_recuperacao + ' Reprovado na Recuperação');
    }   
else {
    console.log('Nota de Recuperação = '  + nota_recuperacao +  ' - Aprovado na Recuperação')
    }
}