<?php

namespace Proyecto;

class TipoVenta {

    public static function setTipoVenta($tipoVenta) {
        if ($tipoVenta <= 1) {
            return 'Para Llevar';
        }
        if ($tipoVenta >= 2) {
            return 'En local';
        }
    }
}
