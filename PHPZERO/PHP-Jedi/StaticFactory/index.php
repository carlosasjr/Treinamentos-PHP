<?php

interface FormatterInterface
{
    public function format($n);
}

class FormatNumber implements FormatterInterface
{
    public function format($n)
    {
        return 'Formatando o Número ' . $n;
    }
}

class FormatString implements FormatterInterface
{
    public function format($n)
    {
        return 'Formatando a String ' . $n;
    }
}

final class StaticFactory
{
    public static function make($type)
    {
        if ($type == 'String') {
            return new FormatString();
        }

        if ($type == 'Number') {
            return new FormatNumber();
        }
    }
}

$format = StaticFactory::make('Number');
echo $format->format(123);
