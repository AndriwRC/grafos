<?php 

    /* include("grafo.php");

    session_start();
    $estado = "";
    $mensaje = "";

    if ( !isset($_SESSION["grafo"]) ) {
        $_SESSION["grafo"] = new Grafo();
        $estado = "success";
        $mensaje = "¡Nuevo Grafo Creado!";
    } */

?>

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
<body>

<main>
    <h1>Proyecto de Grafos</h1>
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

    </section>
</main>

</body>
</html>