<?php

include("vertice.php");
class Grafo{

    private $matrizA;
    private $vectorV;
    private $dirigido;

    public function __construct($dir = true)
    {
        $this->matrizA = null;
        $this->vectorV = null;
        $this->dirigido = $dir;
    }

    //recibe objeto tipo vertice, no pueden repetirse id
    public function agregarVertice($v) {
        if (!isset($this->vectorV[$v->getId()])) {
            $this->matrizA[$v->getId()] = null;
            $this->vectorV[$v->getId()] = $v;
        } else {
            return false;
        }
        return true;
    }

    public function getVertice($v) {
        if (isset($this->vectorV[$v])) {
            return $this->vectorV[$v];
        } else {
            return false;
        }
    }

    //recibe id de nodo origen, destino, y peso (opcional)
    public function agregarArista($o, $d, $p = null) {
        if (isset($this->vectorV[$o]) && isset($this->vectorV[$d])) {
            $this->matrizA[$o][$d] = $p;
        } else {
            return false;
        }

        return true;
    }

    //recibe id de nodo y retorna en un arreglo sus adyacentes
    public function getAdyacentes($v) {
        if (isset($this->matrizA[$v])) {
            return $this->matrizA[$v];
        } else {
            return false;
        }
    }

    public function getMatrizA() {
        return $this->matrizA;
    }

    public function getVectorV() {
        return $this->vectorV;
    }

    //recibe el id del vertice y retorna grado de salida del mismo
    public function gradoSalida($v) {
        if (isset($this->matrizA[$v])) {
            return count($this->matrizA[$v]);
        } else {
            return 0;
        }
    }

    public function gradoEntrada($v) {
        $gr = 0;
        if ($this->matrizA != null) {
            foreach ($this->matrizA as $vp => $adya) {
                if ($adya != null) {
                    foreach ($adya as $de => $pe) {
                        if ($de == $v) {
                            $gr++;
                        }
                    }
                }
            }
        }
        return $gr;
    }

    //recibe el id del vertice y retorna grado del mismo
    public function grado($v) {
        if (isset($this->vectorV[$v])) {
            return $this->gradoSalida($v) + $this->gradoEntrada($v);
        } else {
            return false;
        }
    }

    //recibe id de vertice origen y destino
    public function eliminarArista($o, $d) {
        if (isset($this->matrizA[$o][$d])) {
            unset($this->matrizA[$o][$d]);
        } else {
            return false;
        }

        return true;
    }

    //recibe id de vertice a eliminar, elimina aristas relacionadas
    public function eliminarVertice($v) {
        if (isset($this->vectorV[$v])) {
            foreach ($this->matrizA as $vp => $adya) {
                if ($adya != null) {
                    foreach ($adya as $de => $pe) {
                        if ($de == $v) {
                            unset($this->matrizA[$vp][$de]);
                        }
                    }
                }
            }
            unset($this->matrizA[$v]);
            unset($this->vectorV[$v]);
        } else {
            return false;
        }
        return true;
    }

    public function caminoMasCorto($a,$b){

        $S = array();

        $Q = array();

        foreach(array_keys($this->matrizA) as $val) $Q[$val] = 99999;

        $Q[$a] = 0;

        //inicio calculo
        while(!empty($Q)){

            $min = array_search(min($Q), $Q);

            if($min == $b) break;

            if (is_array($this->matrizA[$min]) || is_object($this->matrizA[$min])) {

                foreach($this->matrizA[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {

                    $Q[$key] = $Q[$min] + $val;

                    $S[$key] = array($min, $Q[$key]);

                }

            }
            unset($Q[$min]);

        }

        $path = array();

        $pos = $b;

        while($pos != $a){

            $path[] = $pos;

            $pos = $S[$pos][0];

        }

        $path[] = $a;

        $path = array_reverse($path);

        return $path;

    }

    public function mostrarAristasRecorrido($camino) {
        $anterior = $camino[0];
        $aristas = array();
        for ($i=1; $i < count($camino); $i++) { 
            $actual = $camino[$i];
            $arista = $anterior . $actual;
            array_push($aristas, $arista);
            $anterior = $actual;
        }
        return $aristas;
    }

}

?>