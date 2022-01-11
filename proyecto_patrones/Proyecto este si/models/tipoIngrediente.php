<?php

namespace Proyecto;

class tipoIngrediente {

    public static function setTipoIngrediente($ingrediente) {
        if ($ingrediente == 'Carne' || $ingrediente == 'carne') {
            return 'Carne';
        }
        if ($ingrediente == 'Verdura' || $ingrediente == 'verdura') {
            return 'Verdura';
        }
        if ($ingrediente == 'Fruta' || $ingrediente == 'fruta') {
            return 'Fruta';
        }
        if ($ingrediente == 'Legumbre' || $ingrediente == 'legumbre') {
            return 'Legumbre';
        }
        if ($ingrediente == 'Lacteo' || $ingrediente == 'lacteo') {
            return 'Lacteo';
        }
        if ($ingrediente == 'Bebestible' || $ingrediente == 'bebestible') {
            return 'Bebestible';
        }
    }
}
