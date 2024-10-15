<?php
// verificação da sequência fibonacci

$primeiroTermo = 0;

$segundoTermo = 1;

$n=7;

$fazParte = false;// variável de verificação se pertence a sequência fibonacci

echo"$primeiroTermo, ";

for ($i = 1;$i < $n;$i ++){

$proximoTermo = $primeiroTermo + $segundoTermo;

//verificação booleana se a variavel pertence a sequência
if($proximoTermo == $n){

    $fazParte = true;
}

//atualização dos valores nas variáveis
$primeiroTermo = $segundoTermo;
    
$segundoTermo = $proximoTermo;

echo " $proximoTermo, ";

}

    if ($fazParte==true){
    
        echo"<br>$n faz parte da sequencia de fibonacci!<br> ";
    
    }else{
    
        echo "<br>$n não faz parte da sequência de fibonacci!<br>";
    }
?>