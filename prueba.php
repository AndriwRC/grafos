<?php

include("./grafo.php");

$grafo = new Grafo();

$grafo->agregarVertice(new Vertice("A", "Barranquilla", 120000, "Turistico", "Es bacano", 5, 120));
$grafo->agregarVertice(new Vertice("B", "Barranquilla", 120000, "Turistico", "Es bacano", 5, 120));
$grafo->agregarVertice(new Vertice("C", "Barranquilla", 120000, "Turistico", "Es bacano", 5, 120));
$grafo->agregarVertice(new Vertice("D", "Barranquilla", 120000, "Turistico", "Es bacano", 5, 120));
$grafo->agregarVertice(new Vertice("E", "Barranquilla", 120000, "Turistico", "Es bacano", 5, 120));
$grafo->agregarVertice(new Vertice("F", "Barranquilla", 120000, "Turistico", "Es bacano", 5, 120));
$grafo->agregarVertice(new Vertice("G", "Barranquilla", 120000, "Turistico", "Es bacano", 5, 120));

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

// $resultado = $grafo->getAdyacentes("B");
// $new_result = array();


// $resultado = $grafo->caminoMasCorto("A", "F");
// var_dump($new_result);

// $aristas = $grafo->mostrarAristasRecorrido($new_result);
// var_dump($aristas);

// echo $grafo->getVertice("A");
