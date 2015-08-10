<?php
/**
 * Created by PhpStorm.
 * User: anderson
 * Date: 08/08/15
 * Time: 03:42
 */

function selectValues(\Illuminate\Database\Eloquent\Collection $collection, $strField, $idField = 'id'){
    $retorno = [];
    foreach($collection as $col) $retorno[$col->$idField] = $col->$strField;
    return $retorno;
}

function dayOfWeek($num)
{
    return ['Domingo', 'Segunda', 'Terça', 'Quarta','Quinta','Sexta','Sábado'][$num];
}