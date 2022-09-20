<?php

include("grafo.php");

session_start();
$status = "";
$mensaje = "";

if (!isset($_SESSION["grafo"])) {
    $_SESSION["grafo"] = new Grafo();
    $status = "success";
    $mensaje = "¡Nuevo Grafo Creado!";
}

if (isset($_POST["agregarVertice"])) {
    if (!empty($_POST["idVertice"])) {
        $resultado = $_SESSION["grafo"]->AgregarVertice(new vertice($_POST["idVertice"]));
        if ($resultado) {
            $status = "success";
            $mensaje = "¡Se ha agregado un nuevo vertice!";
        } else {
            $status = "error";
            $mensaje = "El vertice ". $_POST["idVertice"] ." ya existe";
        }
        
    } else {
        $status = "error";
        $mensaje = "¡Por favor ingrese los datos correctamente!";
    }
}

if (isset($_POST["agregarArista"])) {
    $resultado = $_SESSION["grafo"]->AgregarArista($_POST["origen"], $_POST["destino"], $_POST["peso"]);
    if ($resultado) {
        $status = "success";
        $mensaje = "¡Se ha agregado una nueva arista!";
    } else {
        $status = "error";
        $mensaje = "¡Uno o ambos vertices no existen!";
    }
}

if (isset($_POST["verVertice"])) {
    $resultado = $_SESSION["grafo"]->getVertice($_POST["idVertice"]);
    if ($resultado) {
        $status = "success";
        $mensaje = $resultado;
    } else {
        $status = "error";
        $mensaje = "¡Vertice no encontrado!";
    }
}

if (isset($_POST["verAdyacentes"])) {
    $resultado = $_SESSION["grafo"]->getAdyacentes($_POST["idVertice"]);
    if ($resultado) {
        $status = "success";
        $mensaje = "Adyacencias: <br>";
        foreach ($resultado as $key => $value) {
            $mensaje .= "$key -> $value <br>";
        }
    } else {
        $status = "error";
        $mensaje = "¡Vertice sin adyacencias!";
    } 
}

if (isset($_POST["verGrado"])) {
    $resultado = $_SESSION["grafo"]->grado($_POST["idVertice"]);
    if ($resultado) {
        $status = "success";
        $mensaje = "El grado es: $resultado";
    } else {
        $status = "error";
        $mensaje = "¡Vertice no encontrado o con grado 0!";
    }
}

if (isset($_POST["eliminarVertice"])) {
    $resultado = $_SESSION["grafo"]->eliminarVertice($_POST["idVertice"]);
    if ($resultado) {
        $status = "success";
        $mensaje = "¡Un vertice ha sido eliminado!";
    } else {
        $status = "error";
        $mensaje = "¡Por favor ingrese un dato correcto!";
    }
}

if (isset($_POST["eliminarArista"])) {
    $resultado = $_SESSION["grafo"]->eliminarArista($_POST["origen"], $_POST["destino"]);
    if ($resultado) {
        $status = "success";
        $mensaje = "¡Una arista ha sido eliminada!";
    } else {
        $status = "error";
        $mensaje = "¡Arista no existe!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script type="text/javascript" src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>

</head>

<body>
    <h1>Proyecto de Grafos</h1>

    <main>
        <section class="forms-container">
            <form action="index.php" method="post">
                <label for="agregarVertice-id">Id del Vertice:</label>
                <input type="text" name="idVertice" id="agregarVertice-id">

                <button type="submit" name="agregarVertice">Agregar Vertice</button>
            </form>

            <form action="index.php" method="post">
                <label for="agregarArista-origen">Vertice Origen:</label>
                <input type="text" name="origen" id="agregarArista-origen">

                <label for="agregarArista-destino">Vertice Destino:</label>
                <input type="text" name="destino" id="agregarArista-destino">

                <label for="agregarArista-peso">Peso:</label>
                <input type="text" name="peso" id="agregarArista-peso">

                <button type="submit" name="agregarArista">Agregar Arista</button>
            </form>

            <form action="index.php" method="post">
                <button type="submit" name="verGrafo">Ver grafo</button>
            </form>

            <form action="index.php" method="post">
                <label for="verVertice-id">Id del Vertice:</label>
                <input type="text" name="idVertice" id="verVertice-id">

                <button type="submit" name="verVertice">Ver Vertice</button>
            </form>

            <form action="index.php" method="post">
                <label for="verAdyacentes-id">Id del Vertice:</label>
                <input type="text" name="idVertice" id="verAdyacentes-id">

                <button type="submit" name="verAdyacentes">Ver Adyacentes</button>
            </form>

            <form action="index.php" method="post">
                <label for="verGrado-id">Id del Vertice:</label>
                <input type="text" name="idVertice" id="verGrado-id">

                <button type="submit" name="verGrado">Ver Grado</button>
            </form>

            <form action="index.php" method="post">
                <label for="eliminarVertice-id">Id del Vertice:</label>
                <input type="text" name="idVertice" id="eliminarVertice-id">

                <button type="submit" name="eliminarVertice">Eliminar Vertice</button>
            </form>

            <form action="index.php" method="post">
                <label for="eliminarArista-origen">Vertice Origen:</label>
                <input type="text" name="origen" id="eliminarArista-origen">

                <label for="eliminarArista-destino">Vertice Destino:</label>
                <input type="text" name="destino" id="eliminarArista-destino">

                <button type="submit" name="eliminarArista">Eliminar Arista</button>
            </form>
        </section>

        <section class="output-container">
            <?php if ($status == "error") : ?>
                <div class="output error">
                    <span><?= $mensaje ?></span>
                </div>
            <?php endif; ?>

            <?php if ($status == "success") : ?>
                <div class="output success">
                    <span><?= $mensaje ?></span>
                </div>
            <?php endif; ?>

            <?php if (isset($_POST["verGrafo"])): ?>

                <div class="grafo" id="grafo"></div>
                
                <?php $adyacencias = $_SESSION["grafo"]->getMatrizA(); ?>
                <script type="text/javascript">
                    // create an array with nodes
                    let vertices = new vis.DataSet([
                        <?php
                            foreach ($adyacencias as $vertice => $aristas) {
                                echo "{id: '$vertice', label: '$vertice'},";
                            }
                        ?>
                    ]);

                    // create an array with edges
                    let aristas = new vis.DataSet([
                        <?php
                            foreach ($adyacencias as $vertice => $aristas) {
                                if (!empty($aristas)) {
                                    foreach ($aristas as $destino => $peso) {
                                        echo "{from: '$vertice', to: '$destino', label: '$peso'},";
                                    }
                                }
                            }
                        ?>
                    ]); 

                    // create a network
                    let contenedor = document.getElementById('grafo');

                    // provide the data in the vis format
                    let data = {
                        nodes: vertices,
                        edges: aristas
                    };
                    let opciones = {
                        edges: {
                            arrows: 'to',
                        },
                        configure: {
                            enabled: true,
                        }

                    };

                    // initialize your network!
                    let grafo = new vis.Network(contenedor, data, opciones);
                </script>
            <?php endif; ?>

        </section>
    </main>

</body>

</html>