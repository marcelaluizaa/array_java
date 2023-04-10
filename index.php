<?php 
   
$b1 = array ();


$b1 [0][0] ="Marcela";
$b1 [0][1] = "15";
$b1 [0][2] ="feminino";
$b1 [0][3] = "solteiro";
$b1 [0][4] = "não tem";



$b1 [1][0] ="Solange";
$b1 [1][1] = "75";
$b1 [1][2] ="feminino";
$b1 [1][3] = "viúva";
$b1 [1][4] = "aposentada";


$b1 [2][0] ="Maria";
$b1 [2][1] = "60";
$b1 [2][2] ="feminino";
$b1 [2][3] = "viuva";
$b1 [2][4] = "aposentada";


$b1 [3][0] ="joao";
$b1 [3][1] = "20";
$b1 [3][2] ="masculino";
$b1 [3][3] = "solteiro";
$b1 [3][4] = "cursando";


$b1 [4][0] ="henrique";
$b1 [4][1] = "34";
$b1 [4][2] ="masculino";
$b1 [4][3] = "casado";
$b1 [4][4] = "engenheiro";


$b1 [5][0] ="raquel";
$b1 [5][1] = "40";
$b1 [5][2] ="feminino";
$b1 [5][3] = "casada";
$b1 [5][4] = "advogada";


$b1 [6][0] ="luiza";
$b1 [6][1] = "10";
$b1 [6][2] ="feminino";
$b1 [6][3] = "solteiro";
$b1 [6][4] = "estudante";


$b1 [7][0] ="Marcos";
$b1 [7][1] = "40";
$b1 [7][2] ="masculino";
$b1 [7][3] = "casado";
$b1 [7][4] = "pedagogo";


$b1 [8][0] ="Ellen";
$b1 [8][1] = "50";
$b1 [8][2] ="feminino";
$b1 [8][3] = "casada";
$b1 [8][4] = "professora";


$b1 [9][0] ="Beatriz";
$b1 [9][1] = "15";
$b1 [9][2] ="feminino";
$b1 [9][3] = "solteiro";
$b1 [9][4] = "estudante";




foreach ($b1 as $valor){
    foreach ($valor as $valor_1){
        echo "$valor_1 <br/><br/>";
    }
}


?>