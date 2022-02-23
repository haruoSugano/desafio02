<?php

namespace Heliosugano\Desafio02\Regex;

use stdClass;

class PanelRegex
{
    public function getRegex($objetos)
    {
        $horarios = [$objetos->inicio, $objetos->saida, $objetos->volta, $objetos->final];
        $horas = [];
        $minutos = [];
        $segundos = [];
        $obj = new stdClass();
        for ($i = 0; $i < sizeof($horarios); $i++) {
            if ($horarios[$i] !== "Não marcado") {
                preg_match('/\d{2}/', $horarios[$i], $hora);
                $horas[] = $hora;
                preg_match('/:\d{2}/', $horarios[$i], $minuto);
                $minutos[] = preg_replace('/:/', '', $minuto);
                preg_match('/:\d{2}\z/', $horarios[$i], $segundo);
                $segundos[] = preg_replace('/:/', '', $segundo);
            } else {
              $hora[] = '00';
              $minutos [] = '00';
              $segundos [] = '00';
            }
        }
        $obj->horas = $horas;
        $obj->minutos = $minutos;
        $obj->segundos = $segundos;
        return $obj;
    }

}