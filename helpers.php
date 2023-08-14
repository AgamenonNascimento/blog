<?php
function saudacao()
{
  return ('Bom dia');
}

function formatarValor(float $valor = null): string
{
  return number_format(($valor ? $valor : 0), 2, ',', '.');
}

function formatarNumero(int $numero = null): string
{
  return number_format(($numero ? $numero : 0), 0, ',', '.');
}
