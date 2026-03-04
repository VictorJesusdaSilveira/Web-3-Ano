<?php

function fazerLinha($selecao){
    foreach ($selecao as $s) {
        $id = $s["id"];
        if ($id % 2 == 0) {
            $cor = "yellow";
        }else{
            $cor = "green";
        }

        print "<tr style='background-color: $cor;'>";
        print "<td>" . $s["numero"] . "</td>";
        print "<td>" . $s["nome"] . "</td>";
        print "</tr>";
        
    }
}



$jogador1 = array("numero" => 1,
                  "nome" => "Tafarel",
                  "id" => 1);

$jogador2 = array("numero" => 2,
                  "nome" => "Jorginho",
                  "id" => 2);

$jogador3 = array("numero" => 13,
                  "nome" => "Aldair",
                  "id" => 3);

$jogador4 = array("numero" => 15,
                  "nome" => "Márcio Santos",
                  "id" => 4);

$jogador5 = array("numero" => 6,
                  "nome" => "Branco",
                  "id" => 5);

$jogador6 = array("numero" => 5,
                  "nome" => "Mauro Silva",
                  "id" => 6);

$jogador7 = array("numero" => 8,
                  "nome" => "Dunga",
                  "id" => 7);

$jogador8 = array("numero" => 17,
                  "nome" => "Mazinho",
                  "id" => 8);

$jogador9 = array("numero" => 9,
                  "nome" => "Zinho",
                  "id" => 9);

$jogador10 = array("numero" => 11,
                  "nome" => "Romário",
                  "id" => 10);

$jogador11 = array("numero" => 7,
                  "nome" => "Bebeto",
                  "id" => 11);

$selecao = array($jogador1 , $jogador2 , $jogador3 , $jogador4, $jogador5 , $jogador6 , $jogador7 , $jogador8 , $jogador9 , $jogador10, $jogador11);




print "Tabela da Seleção";

print "<table border=1>";

print "<tr>";
print "<th>Número</th>";
print "<th>Nome</th>";

fazerLinha($selecao);

print "</tr>";

print "</table>";





?>
