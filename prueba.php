<?php

include("./grafo.php");

$grafo = new Grafo();

$grafo->agregarVertice(new Vertice("A"));
$grafo->agregarVertice(new Vertice("B"));
$grafo->agregarVertice(new Vertice("C"));
$grafo->agregarVertice(new Vertice("D"));
$grafo->agregarVertice(new Vertice("E"));
$grafo->agregarVertice(new Vertice("F"));
$grafo->agregarVertice(new Vertice("G"));

$grafo->agregarArista("A", "B", 20);
$grafo->agregarArista("B", "C", 19);
$grafo->agregarArista("C", "D", 18);
$grafo->agregarArista("D", "E", 17);
$grafo->agregarArista("E", "F", 16);
$grafo->agregarArista("F", "G", 15);
$grafo->agregarArista("A", "C", 14);
$grafo->agregarArista("B", "D", 13);
$grafo->agregarArista("C", "E", 12);
$grafo->agregarArista("D", "F", 11);
$grafo->agregarArista("E", "G", 10);

$resultado = $grafo->caminoMasCorto("A", "F");
var_dump($resultado);

$aristas = $grafo->mostrarAristasRecorrido($resultado);
var_dump($aristas);


?>