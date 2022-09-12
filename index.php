<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript" src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>

    <style type="text/css">
        .grafo {
            width: 600px;
            height: 400px;
            border: 1px solid lightgray;
        }
    </style>
</head>

<h1>Pruebas del proyecto grafo</h1>
<body>

<main>
<?php

include("grafo.php");

$n = new Grafo();

$n->agregarVertice(new Vertice("A"));
$n->agregarVertice(new Vertice("B"));
$n->agregarVertice(new Vertice("C"));
$n->agregarVertice(new Vertice("D"));
$n->agregarVertice(new Vertice("H"));

$n->agregarArista("A","B",3);
$n->agregarArista("A","C",5);
$n->agregarArista("C","D",10);
$n->agregarArista("D","A",3);
$n->agregarArista("B","H",9);

echo "<b>Matriz Adyacencia:</b><br>";
print_r($n->getMatrizA());
echo "<hr>";

echo "<b>Vector Vertices:</b><br>";
print_r($n->getVectorV());
echo "<hr>";

//visualizar matriz adyacencia
echo "<b>Recorrido Matriz Adyacencia:</b><br>";
foreach ($n->getMatrizA() as $vp => $adya) {
    echo "<br>".$vp." ->";
    if ($adya != null) {
        foreach ($adya as $de => $pe) {
            echo " | ".$de." | ".$pe." | -- ";
        }
    }
}
echo "<hr>";



/*
//Probar GetVertice
echo "<b>GetVertice A:</b><br>";
print_r($n->getVertice("A"));
echo "<hr>";

//Probar getAdyacentes
echo "<b>Adyacentes de A:</b><br>";
print_r($n->getAdyacentes("A"));
echo "<hr>";

//Probar grado
echo "<b>Grado de A:</b><br>";
print_r($n->grado("A"));
echo "<hr>";

//Probar Eliminar Arista A-C
echo "<b>Eliminar Arista A-C:</b><br>";
if ($n->eliminarArista("A","C")) {
    echo "Arista eliminada";
} else {
    echo "ARista no Existe";
}
echo "<hr>";

//visualizar matriz adyacencia
echo "<b>Recorrido Matriz Adyacencia:</b><br>";
foreach ($n->getMatrizA() as $vp => $adya) {
    echo "<br>".$vp." ->";
    if ($adya != null) {
        foreach ($adya as $de => $pe) {
            echo " | ".$de." | ".$pe." | -- ";
        }
    }
}
echo "<hr>";

//Probar Eliminar vertice B
echo "<b>Eliminar Vertice B:</b><br>";
if ($n->eliminarVertice("B")) {
    echo "Vertice eliminado";
} else {
    echo "Vertice no Existe";
}
echo "<hr>";

//visualizar matriz adyacencia
echo "<b>Recorrido Matriz Adyacencia:</b><br>";
foreach ($n->getMatrizA() as $vp => $adya) {
    echo "<br>".$vp." ->";
    if ($adya != null) {
        foreach ($adya as $de => $pe) {
            echo " | ".$de." | ".$pe." | -- ";
        }
    }
}
echo "<hr>";

*/

$adyacencias = $n->getMatrizA();

/* foreach ($adyacencias as $vertice => $aristas) {
    echo "Vertice: $vertice, Aristas: <br>";
    if (!empty($aristas)) {

        foreach ($aristas as $destino => $peso) {
            echo "$vertice -> $destino, peso: $peso <br>";
        }

    } else {
        echo "Sin aristas!";
    }
    echo "<br><hr>";
} */

?>
</main>

<aside>
    <div class="grafo" id="grafo"></div>

    <script type="text/javascript">
        // create an array with nodes
        var nodes = new vis.DataSet([
            <?php foreach ($adyacencias as $vertice => $aristas): ?>
                {id: "<?= $vertice ?>", label: "<?= $vertice ?>"},
            <?php endforeach; ?>
        ]);

        // create an array with edges
        var edges = new vis.DataSet([
            <?php foreach ($adyacencias as $vertice => $aristas): ?>
                <?php if (!empty($aristas)): ?>
                    <?php foreach ($aristas as $destino => $peso): ?>
                        {from: "<?= $vertice ?>", to: "<?= $destino ?>", label: "<?= $peso ?>"},
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        ]); 

        // create a network
        var container = document.getElementById('grafo');

        // provide the data in the vis format
        var data = {
            nodes: nodes,
            edges: edges
        };
        var options = {
            edges: {
                arrows: 'to',
            },
            configure: {
                enabled: true,
            }

        };

        // initialize your network!
        var network = new vis.Network(container, data, options);
    </script>
</aside>
</body>

</html>