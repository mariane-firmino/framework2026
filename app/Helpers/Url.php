<?php
class Url {
    public static function redirecionar($url){
        header("Location:".URL.DIRECTOTY_SEPARATOR.$url);
    } // fim da função redirecionar
} // fim da classe Url