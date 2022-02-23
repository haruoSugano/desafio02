<?php

namespace Heliosugano\Desafio02\Regex;

use stdClass;

class PanelRegex
{
    public function getRegex($objetos)
    {
        try {
            $horarios = [$objetos->inicio, $objetos->saida, $objetos->volta, $objetos->final];
            $obj = new stdClass();
            for ($i = 0; $i < sizeof($horarios); $i++) {
                if($horarios[$i] != null){
                    preg_match('/\d{2}/', $horarios[$i], $hora);
                    $obj->horas = $hora;
                    preg_match('/:\d{2}/', $horarios[$i], $minuto);
                    $obj->minutos = preg_replace('/:/', '', $minuto);
                    preg_match('/:\d{2}\z/', $horarios[$i], $segundo);
                    $obj->segundos = preg_replace('/:/', '', $segundo);
                } else{
                    $obj->horas = 'X';
                    $obj->minutos = 'X';
                    $obj->segundos = 'X';
                }
            }
            return $obj;
        } catch (\Exception $e) {
            $this->error($e->getMessage());
            return 'Não marcado';
        }

    }

}