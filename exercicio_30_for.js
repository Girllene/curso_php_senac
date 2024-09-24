let k= 5;
let j = 10;

for(i= 10; i>0; i--){
    // resto da divisão precisa ser 0 para entrar na condição
    if(j%2==0){
        // k precisa ser menor 1 para entrar na seegunda condição
        if(k>0){
            j--;
            console.log(j);

        }
    }
    j--;
    k--;
}