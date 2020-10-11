<?php
namespace glossariodeinformatica;
/**
 * Description of Letra
 *
 * @author Benedito Braimo
 */
class Letra {
    private $caractere;
    public function __construct($caractere) {
        $this->caractere = $caractere;
    }
    
    public function getCaractere() {
        return $this->caractere;
    }

    public function setCaractere($caractere) {
        $this->caractere = $caractere;
        return $this;
    }

    public function mostrarCaractere() {
        return $letra = $this->caractere;
        }
}
