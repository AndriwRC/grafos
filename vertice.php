<?php

class Vertice // Punto Turistico
{

    // Atributos por defecto
    public $id;
    public $visitado;

    // Atributos: Punto Turistico
    public $nombre;
    public $descripcion;
    public $calificacion;
    public $precio;
    public $categoria;
    public $duracionVisita;

    public function __construct($i, $nombreLugar, $costo, $tipo, $infoLugar, $puntuacion, $tiempoVisita)
    {

        $this->id = $i;
        $this->visitado = false;

        $this->nombre = $nombreLugar;
        $this->precio = $costo;
        $this->categoria = $tipo;
        $this->descripcion = $infoLugar;
        $this->calificacion = $puntuacion;
        $this->duracionVisita = $tiempoVisita;
    }


    public function getId()
    {
        return $this->id;
    }
    public function setId($i)
    {
        $this->id = $i;
    }


    public function getVisitado()
    {
        return $this->visitado;
    }
    public function setVisitado($v)
    {
        $this->visitado = $v;
    }


    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($lugar)
    {
        $this->nombre = $lugar;
    }


    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($infoLugar)
    {
        $this->descripcion = $infoLugar;
    }


    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($costo)
    {
        $this->precio = $costo;
    }


    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria($tipo)
    {
        $this->categoria = $tipo;
    }


    public function getCalificacion()
    {
        return $this->calificacion;
    }
    public function setCalificacion($puntuacion)
    {
        $this->calificacion = $puntuacion;
    }


    public function getDuracionVisita()
    {
        return $this->duracionVisita;
    }
    public function setDuracionVisita($tiempoVisita)
    {
        $this->duracionVisita = $tiempoVisita;
    }


    public function __toString()
    {
        return "<b>Id:</b> $this->id,<br> <b>Nombre:</b> $this->nombre,<br> <b>Descripcion:</b> $this->descripcion,<br> <b>Calificacion:</b> $this->calificacion,<br> <b>Precio:</b> $this->precio,<br> <b>Categoria:</b> $this->categoria,<br> <b>Duracion:</b> $this->duracionVisita";
    }
}
