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

if (isset($_POST["ejemplo"])) {
    $_SESSION["grafo"]->agregarVertice(new Vertice("A", "BARRANQUILLA", 120000, "Turístico", "Es la capital del departamento Atlántico y es un desbordante puerto marino, bordeado por el río Magdalena.", 5, 120));
    $_SESSION["grafo"]->agregarVertice(new Vertice("B", "CARTAGENA", 120000, "Histórico", "Es una ciudad portuaria en la costa caribeña de Colombia", 5, 10));
    $_SESSION["grafo"]->agregarVertice(new Vertice("C", "SANTA MARTA", 120000, "Turístico", "Es una ciudad ubicada en el mar Caribe, en el departamento de Magdalena en el norte de Colombia.", 5, 60));
    $_SESSION["grafo"]->agregarVertice(new Vertice("D", "TAGANGA", 120000, "Turístico", "Es la mejor opción para alojarse en Santa Marta si lo que buscas es disfrutar de la playa.", 5, 80));
    $_SESSION["grafo"]->agregarVertice(new Vertice("E", "PALOMINO", 120000, "Cultural", "Es uno de los cinco corregimientos del municipio de Dibulla, perteneciente a La Guajira", 5, 70));
    $_SESSION["grafo"]->agregarVertice(new Vertice("F", "COVEÑAS", 120000, "Turístico", "Es una ciudad turística del Golfo de Morrosquillo en el norte de Colombia.", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("G", "TOLÚ", 120000, "Turístico", "Es una ciudad turística del golfo de Morrosquillo, a lo largo de la costa del Caribe en el norte de Colombia.", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("H", "RIOHACHA", 120000, "Turístico", "Es una ciudad del norte de Colombia, donde el río Ranchería se une al mar Caribe. ", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("I", "CIÉNAGA", 120000, "Cultural", "Se encuentra a orillas del Mar Caribe, junto a la Sierra Nevada de Santa Marta.", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("J", "SINCELEJO", 120000, "Cultural", "Es una ciudad del norte de Colombia conocida por su festival de corridas de toros Corralejas y su patrimonio musical.", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("K", "VALLEDUPAR", 120000, "Cultural", "Es una ciudad del norte de Colombia, conocida como la capital de la música vallenato.", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("L", "TURBO", 120000, "Turístico", "Es un distrito de Colombia localizado en la subregión de Urabá en el departamento de Antioquia.", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("M", "USIACURÍ", 120000, "Turístico", "Es conocido como El Pesebre del Atlántico ya que sus viviendas pintorescas están montada sobre una irregular topografía.", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("N", "ARACATACA", 120000, "Cultural", "Es un municipio colombiano del departamento del Magdalena. Allí nacieron el Premio Nobel de Literatura Gabriel García Márquez.", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("O", "SABANALARGA", 120000, "Histórico", "La fertilidad de sus suelos la ha convertido en una despensa del departamento con el suministro de vacunos y los cultivos de azúcar, algodón, maíz y plátano.", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("P", "MOMPOX", 120000, "Histórico", "Esta fue la primera población del Nuevo Reino de Granada en proclamar la independencia absoluta de España el 6 de agosto de 1810.", 5, 45));
    $_SESSION["grafo"]->agregarVertice(new Vertice("Q", "FUNDACIÓN", 120000, "Cultural", "Es un municipio de Colombia perteneciente al departamento del Magdalena, está localizado cerca de la Sierra Nevada de Santa Marta.", 5, 45));

    // Conexion Barranquilla
    $_SESSION["grafo"]->agregarArista("A", "B", 124);
    $_SESSION["grafo"]->agregarArista("B", "A", 124);
    $_SESSION["grafo"]->agregarArista("A", "I", 44);
    $_SESSION["grafo"]->agregarArista("I", "A", 44);
    $_SESSION["grafo"]->agregarArista("A", "O", 49);
    $_SESSION["grafo"]->agregarArista("O", "A", 49);
    $_SESSION["grafo"]->agregarArista("A", "M", 44);
    $_SESSION["grafo"]->agregarArista("M", "A", 44);
    $_SESSION["grafo"]->agregarArista("A", "Q", 136);
    $_SESSION["grafo"]->agregarArista("Q", "A", 136);

    // Conexion Cartagena
    $_SESSION["grafo"]->agregarArista("B", "M", 84);
    $_SESSION["grafo"]->agregarArista("M", "B", 84);
    $_SESSION["grafo"]->agregarArista("B", "J", 200);
    $_SESSION["grafo"]->agregarArista("J", "B", 200);
    $_SESSION["grafo"]->agregarArista("B", "G", 307);
    $_SESSION["grafo"]->agregarArista("G", "B", 307);
    $_SESSION["grafo"]->agregarArista("B", "K", 432);
    $_SESSION["grafo"]->agregarArista("K", "B", 432);
    $_SESSION["grafo"]->agregarArista("B", "O", 89);
    $_SESSION["grafo"]->agregarArista("O", "B", 89);

    // Conexion Santa Marta
    $_SESSION["grafo"]->agregarArista("C", "I", 30);
    $_SESSION["grafo"]->agregarArista("I", "C", 30);
    $_SESSION["grafo"]->agregarArista("C", "D", 4);
    $_SESSION["grafo"]->agregarArista("D", "C", 4);
    $_SESSION["grafo"]->agregarArista("C", "E", 71);
    $_SESSION["grafo"]->agregarArista("E", "C", 71);

    // Conexion Palomino
    $_SESSION["grafo"]->agregarArista("E", "H", 487);
    $_SESSION["grafo"]->agregarArista("H", "E", 71);

    // Conexion Convenhas
    $_SESSION["grafo"]->agregarArista("F", "G", 28);
    $_SESSION["grafo"]->agregarArista("G", "F", 28);
    $_SESSION["grafo"]->agregarArista("F", "L", 544);
    $_SESSION["grafo"]->agregarArista("L", "F", 544);

    // Conexion Tolu
    $_SESSION["grafo"]->agregarArista("G", "J", 40);
    $_SESSION["grafo"]->agregarArista("J", "G", 40);

    // Conexion Riohacha
    $_SESSION["grafo"]->agregarArista("H", "K", 225);
    $_SESSION["grafo"]->agregarArista("K", "H", 225);

    // Conexion Cienaga
    $_SESSION["grafo"]->agregarArista("I", "N", 143);
    $_SESSION["grafo"]->agregarArista("N", "I", 143);
    $_SESSION["grafo"]->agregarArista("I", "K", 340);
    $_SESSION["grafo"]->agregarArista("K", "I", 340);
    $_SESSION["grafo"]->agregarArista("I", "P", 332);
    $_SESSION["grafo"]->agregarArista("P", "I", 332);

    // Conexion Sincelejo
    $_SESSION["grafo"]->agregarArista("J", "K", 244);
    $_SESSION["grafo"]->agregarArista("K", "J", 244);
    $_SESSION["grafo"]->agregarArista("J", "P", 334);
    $_SESSION["grafo"]->agregarArista("P", "J", 334);
    $_SESSION["grafo"]->agregarArista("J", "L", 354);
    $_SESSION["grafo"]->agregarArista("L", "J", 354);

    // Conexion Valledupar
    $_SESSION["grafo"]->agregarArista("K", "N", 165);
    $_SESSION["grafo"]->agregarArista("N", "K", 165);
    $_SESSION["grafo"]->agregarArista("K", "P", 465);
    $_SESSION["grafo"]->agregarArista("P", "K", 465);

    // Conexion Ararcataca
    $_SESSION["grafo"]->agregarArista("N", "Q", 65);
    $_SESSION["grafo"]->agregarArista("Q", "N", 65);

    // Usiacuri
    $_SESSION["grafo"]->agregarArista("M", "O", 22);
    $_SESSION["grafo"]->agregarArista("O", "M", 22);
}

if (isset($_POST["agregarVertice"])) {
    if (!empty($_POST["idVertice"])) {
        $resultado = $_SESSION["grafo"]->AgregarVertice(new vertice(
            $_POST["idVertice"],
            $_POST["nombreVertice"],
            $_POST["descripcionVertice"],
            $_POST["calificacionVertice"],
            $_POST["precioVertice"],
            $_POST["categoriaVertice"],
            $_POST["duracionVertice"],
        ));
        if ($resultado) {
            $status = "success";
            $mensaje = "¡Se ha agregado un nuevo vertice!";
        } else {
            $status = "error";
            $mensaje = "El vertice " . $_POST["idVertice"] . " ya existe";
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
        $mensaje = "Adyacencias:<hr>";
        foreach ($resultado as $key => $value) {
            $info = $_SESSION["grafo"]->getVertice($key);
            $mensaje .= "$info<br> <b>Distancia:</b> $value km<hr>";
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

    <script src="./main.js" defer></script>

</head>

<body>
    <h1>Proyecto de Grafos</h1>

    <main>
        <section class="forms-container">
            <form action="index.php" method="post">
                <button type="submit" name="ejemplo">Cargar Ejemplo</button>
            </form>

            <form action="index.php" method="post">
                <label for="agregarVertice-id">Id:</label>
                <input type="text" name="idVertice" id="agregarVertice-id" required>

                <label for="agregarVertice-nombre">Nombre:</label>
                <input type="text" name="nombreVertice" id="agregarVertice-nombre" required>

                <label for="agregarVertice-descripcion">Descripcion:</label>
                <input type="text" name="descripcionVertice" id="agregarVertice-descripcion">

                <label for="agregarVertice-calificacion">Calificacion:</label>
                <input type="text" name="calificacionVertice" id="agregarVertice-calificacion">

                <label for="agregarVertice-precio">Precio:</label>
                <input type="text" name="precioVertice" id="agregarVertice-precio">

                <label for="agregarVertice-categoria">Categoría:</label>
                <input type="text" name="categoriaVertice" id="agregarVertice-categoria">

                <label for="agregarVertice-duracion">Duración:</label>
                <input type="text" name="duracionVertice" id="agregarVertice-duracion">

                <button type="submit" name="agregarVertice">Agregar Punto Turístico</button>
            </form>

            <form action="index.php" method="post">
                <label for="agregarArista-origen">Vertice Origen:</label>
                <input type="text" name="origen" id="agregarArista-origen" required>

                <label for="agregarArista-destino">Vertice Destino:</label>
                <input type="text" name="destino" id="agregarArista-destino" required>

                <label for="agregarArista-peso">Peso:</label>
                <input type="text" name="peso" id="agregarArista-peso" required>

                <button type="submit" name="agregarArista">Agregar Arista</button>
            </form>

            <form action="index.php" method="post">
                <button type="submit" name="verGrafo">Ver grafo</button>
            </form>

            <form action="index.php" method="post">
                <div id="nodesContainer">
                    <label for="caminoMasCorto-origen">Vertice Origen:</label>
                    <input type="text" name="caminoMasCortoData[]" id="caminoMasCorto-origen" required>

                    <label for="caminoMasCorto-destino">Vertice Destino:</label>
                    <input type="text" name="caminoMasCortoData[]" id="caminoMasCorto-destino" required>
                </div>
                <button onclick="addDestination()" type="button" id="addBtn">Agregar Destino...</button>
                <button type="submit" name="caminoMasCorto">Ver camino más corto</button>
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
            <div class="grafo" id="grafo"></div>

            <?php $adyacencias = $_SESSION["grafo"]->getMatrizA(); ?>
            <script type="text/javascript">
                // parse html function
                function htmlTitle(html) {
                    const container = document.createElement('div');
                    container.innerHTML = html;
                    return container;
                }

                // create an array with nodes
                let vertices = new vis.DataSet([
                    <?php
                    foreach ($adyacencias as $id => $aristas) {
                        $vertice = $_SESSION["grafo"]->getVertice($id);
                        $nombre = $vertice->getNombre();
                        $duracion = $vertice->getDuracionVisita();
                        echo "{font: {strokeWidth: 1, strokeColor: '#FFF3C6', vadjust: -43}, id: '$id', label: '$nombre', mass: 5, shape: 'dot', title: htmlTitle('" . $vertice->basicToString() . "')},";
                    }
                    ?>
                ]);

                // create an array with edges
                let aristas = new vis.DataSet([
                    <?php
                    foreach ($adyacencias as $vertice => $aristas) {
                        if (!empty($aristas)) {
                            foreach ($aristas as $destino => $peso) {
                                echo "{id: '$vertice$destino', from: '$vertice', to: '$destino', label: '$peso'},";
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
                    nodes: {
                        color: {
                            highlight: {
                                border: '#D21F3C',
                                background: '#D2E5FF'
                            },
                        },
                    },
                    edges: {
                        arrows: 'to',
                        color: {
                            highlight: '#D21F3C',
                        }
                    },
                    configure: {
                        enabled: false,
                    }
                };

                // initialize your network!
                let grafo = new vis.Network(contenedor, data, opciones);

                <?php if (isset($_POST["caminoMasCorto"])) : ?>
                    <?php $caminoCompleto = array(); ?>
                    <?php
                    $anterior = $_POST["caminoMasCortoData"][0];
                    foreach ($_POST["caminoMasCortoData"] as $key => $value) {
                        if ($anterior != $value) {
                            $camino = $_SESSION["grafo"]->caminoMasCorto($anterior, $value);
                            if ($key != 1) {
                                array_shift($camino);
                            }
                            array_push($caminoCompleto, ...$camino);
                        }
                        $anterior = $value;
                    }

                    ?>
                    <?php ?>
                    <?php $aristasCamino = $_SESSION["grafo"]->mostrarAristasRecorrido($caminoCompleto); ?>

                    grafo.setSelection({
                        nodes: <?= json_encode($caminoCompleto) ?>,
                        edges: <?= json_encode($aristasCamino) ?>
                    }, {
                        highlightEdges: false
                    })

                    <?php $status = "success"; ?>
                    <?php $mensaje = implode(' -> ', $caminoCompleto); ?>
                <?php endif; ?>

                <?php if (isset($_POST["verAdyacentes"]) || isset($_POST["verVertice"]) || isset($_POST["verGrado"])) : ?>

                    grafo.setSelection({
                        nodes: <?= json_encode($_POST["idVertice"]) ?>
                    }, {
                        highlightEdges: false
                    })
                <?php endif; ?>
            </script>

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

        </section>
    </main>

    <footer>
        <p>Hehco por: Andriw Rollo, David Silvera, Yesid Borrero</p>
    </footer>
</body>

</html>