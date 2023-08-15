<?php

function formatarValor(float $valor = null): string
{
  return number_format(($valor ? $valor : 0), 2, ',', '.');
}

function formatarNumero(int $numero = null): string
{
  return number_format(($numero ? $numero : 0), 0, ',', '.');
}

function contarData(string $data)
{
  $agora = strtotime(date('Y-m-d H:i:s'));
  $tempo = strtotime($data);
  $diferanca = $agora - $tempo;
  $segundo = round($diferanca);
  $minuto = round($diferanca / 60);
  $hora = round($diferanca / 3600);
  $dia = round($diferanca / 86400);
  $semana = round($diferanca / 604800);
  $mes = round($diferanca / 2592000);
  $ano = round($diferanca / 31536000);
  if ($segundo <= 60) {
    return 'agora';
  } elseif ($minuto <= 60) {
    return $minuto == 1 ? 'há 1 minuto' : 'há ' . $minuto . ' minutos';
  } elseif ($hora <= 24) {
    return $hora == 1 ? 'há 1 hora' : 'há ' . $hora . 'horas';
  } elseif ($dia <= 7) {
    return $dia == 1 ? 'ontem ' : 'há ' . $dia . ' dias';
  } elseif ($mes) {; //
  }
}
