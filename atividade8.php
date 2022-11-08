<?php
$tempo = $_GET['temp'];
$velocidade = $_GET['velo'];
$distancia = $tempo * $velocidade;
$litUsados = $distancia/12;

echo "Velocidade: $velocidade <br>
        Tempo: $tempo <br>
        Distância: $distancia <br>
        Litros Usados: $litUsados"
?>