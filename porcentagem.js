// calcular desconto 6% do salario do usuário

salario_bruto = 1205

por = 0.06

desconto = salario_bruto * por

salario_liquido = salario_bruto - desconto


console.log(desconto)

// força que o resultado tenha 2 casas decimas .toFixed (numero de cas decimais)
console.log("salario líquido "  +  "R$ " + salario_liquido.toFixed(2) )