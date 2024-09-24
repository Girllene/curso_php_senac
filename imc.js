// Construa uma página onde o usuário digitará o seu peso e a sua altura e o programa
// irá calcular o IMC (peso/altura). Caso o IMC seja maior que 25 exibirá, na tela, “Acima
// do Peso Ideal”. Caso contrário, “Peso OK”.

peso = 65
altura = 1.85

imc = peso/altura

if (imc > 25){
    console.log ('IMC = ' + imc.toFixed(2) + ' Acima do Peso Ideal')
}

else (console.log ('IMC = ' + imc.toFixed(2)  + '  Peso Ok'))