<?php

$string = '1984/06/23';
$date = strtotime(str_replace('/', '-', $string));

if ($date === FALSE):
    echo "Data no formato inválido";
else:
    var_dump($date);
    echo date('d/m/Y', $date);
endif;


/*
 * <?php

var_dump( date("d/m/Y", strtotime("20 August 2006")) ); // 20/08/2006

var_dump( date("d/m/Y", strtotime("+1 day")) ); // A data de amanhã

var_dump( date("d/m/Y", strtotime("+2 day")) ); // A data de depois de amanhã

var_dump( date("d/m/Y", strtotime("-2 day")) ); // A data de ontem

var_dump( date("d/m/Y", strtotime("+1 week")) ); // A data atual + semana

var_dump( date("d/m/Y H:i:s", strtotime("+2 week 3 days 4 hours 10 minutes 20 seconds")) ); // A data atual + 2 semanas, 3 dias, 4 horas 10 minutos e 20 segundos

var_dump( date("d/m/Y", strtotime("next Thursday")) ); // Próxima quinta-feira

var_dump( date("d/m/Y", strtotime("last Thursday")) ); // Última quinta-feira

var_dump( date("d/m/Y", strtotime("last day of june 2014")) ); // Último dia de junho de 2014

var_dump( date("d/m/Y", strtotime("last day of march")) ); // Último dia de março do ano atual

var_dump( date("d/m/Y", strtotime("first day of march")) ); // Primeiro dia de março deste ano.

var_dump( date("d/m/Y", strtotime("first day of +3 month")) ); // Primeiro dia do mês +3 (Se estiver em janeiro, vai retornar o primeiro dia de abril)

var_dump( date("d/m/Y", strtotime("today")) ); // Hoje.

var_dump( date("d/m/Y", strtotime("tomorrow")) ); // Amanhã

var_dump( date("d/m/Y", strtotime("2013-01-25 -5day")) ); // 20/01/2013
 */
