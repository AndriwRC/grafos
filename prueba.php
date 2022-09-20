<?php

include("./grafo.php");

$grafo = new Grafo();

$grafo->agregarVertice(new Vertice("A"));
$grafo->agregarVertice(new Vertice("B"));
$grafo->agregarVertice(new Vertice("C"));

$grafo->agregarArista("A", "B", 20);
$grafo->agregarArista("A", "C", 10);
$grafo->agregarArista("A", "A", 5);
$grafo->agregarArista("B", "A", 5);
$resultado = $grafo->grado("C");

if ($resultado) {
    echo $resultado;
} else {
    var_dump($resultado);
}



?>