<?php

namespace Proyecto;

class TipoIngrediente {

    public static function setTipoIngrediente($tipoIngrediente) {
        if ($tipoIngrediente <= 1) {
            return 'Carne';
        }
        if ($tipoIngrediente == 2) {
            return 'Verdura';
        }
        if ($tipoIngrediente == 3) {
            return 'Fruta';
        }
        if ($tipoIngrediente == 4) {
            return 'Legumbre';
        }
        if ($tipoIngrediente == 5) {
            return 'Lácteo';
        }
        if ($tipoIngrediente >= 6) {
            return 'Bebestible';
        }
    }
}
