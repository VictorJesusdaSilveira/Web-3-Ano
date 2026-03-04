<?php

require_once("model/Presidente.php");

$dutra = new Presidente(16 , "Eurico Gaspar Dutra" , 1946 , 1951);
$getulio = new Presidente(17 , "Getúlio Vargas" , 1951 , 1954);
$cafe = new Presidente(18 , "Café Filho" , 1954 , 1955);
$carlos = new Presidente(19 , "Carlos Luz" , 1955 , 1955);
$juscelino = new Presidente(20 , "Juscelino Kubitschek" , 1956 , 1961);

$presidentes = array($dutra , $getulio , $cafe , $carlos , $juscelino);

print "Tabela de Presidentes"

print "<table border=1>";

print "<tr>";
print "<th>Número</th>"
print "<th>Nome</th>"
print "<th>Início</th>"
print "<th>Fim</th>"

print "</table>"

foreach ($presidentes as $p) {
    print "<tr>>";
    print "<td>" . $p->getNumero() "</td>";
    print "<td>" . $p->getNome() "</td>";
    print "<td>" . $p->getInicio() "</td>";
    print "<td>" . $p->getFim() "</td>";
    print "</tr>";
}
