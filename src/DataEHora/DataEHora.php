<?php

namespace OizumiJunho\DataEHora;

use DateTime;

class DataEHora
{

    public static function ValidarHoraHHMMSS($dados, $format = 'H:i:s')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarHoraHHMM($dados, $format = 'H:i')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarHoraMM($dados, $format = 'i')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarDataHH($dados, $format = 'H')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarDataDDMMAAAA($dados, $format = 'd/m/Y')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarDataAAAAMMDD($dados, $format = 'Y-m-d')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarDataAAAAMMDDHHMMSS($dados, $format = 'Y-m-d H:i:s')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function ValidarDataAAAAMMDDHHMM($dados, $format = 'Y-m-d H:i')
    {
        $d = DateTime::createFromFormat($format, $dados);
        $result = $d && $d->format($format) == $dados;

        if ($result == 1) :
            return "valido";
        else :
            return "invalido";
        endif;
    }

    public static function GerarHoraHHMMSS()
    {
        return date("H:i:s");
    }

    public static function GerarHoraHHMM()
    {
        return date("H:i");
    }

    public static function GerarHoraHH()
    {
        return date("H");
    }

    public static function GerarHoraMM()
    {
        return date("i");
    }

    public static function GerarHoraSS()
    {
        return date("s");
    }

    public static function GerarDataDDMMAAAAHHMMSS()
    {
        return date("d/m/Y H:i:s");
    }

    public static function GerarDataDDMMAAAAHHMM()
    {
        return date("d/m/Y H:i");
    }

    public static function GerarDataDDMMAAAA()
    {
        return date("d/m/Y");
    }

    public static function GerarDataAAAAMMDDHHMMSS()
    {
        return date("Y-m-d H:i:s");
    }

    public static function GerarDataAAAAMMDDHHMM()
    {
        return date("Y-m-d H:i");
    }

    public static function GerarDataAAAAMMDD()
    {
        return date("Y-m-d");
    }

    public static function GerarDataDD()
    {
        return date("d");
    }

    public static function GerarDataMM()
    {
        return date("m");
    }

    public static function GerarDataAAAA()
    {
        return date("Y");
    }

    public static function GerarDiaDaSemana()
    {
        return date("l");
    }

    public static function ConverterDDMMAAAAParaAAAAMMDD($dados)
    {
        $d = substr($dados, 0, 2);
        $m = substr($dados, 3, 2);
        $a = substr($dados, 6, 4);

        return $a . "-" . $m . "-" . $d;
    }

    public static function ConverterAAAAMMDDParaDDMMAAAA($dados)
    {
        $d = substr($dados, 8, 2);
        $m = substr($dados, 5, 2);
        $a = substr($dados, 0, 4);

        return $d . "/" . $m . "/" . $a;
    }

    public static function ConverterAAAAMMDDHHMMSSParaDDMMAAAAHHMMSS($dados)
    {
        $h = substr($dados, 11, 8);
        $d = substr($dados, 8, 2);
        $m = substr($dados, 5, 2);
        $a = substr($dados, 0, 4);

        return $d . "/" . $m . "/" . $a . " " . $h;
    }

    public static function ConverterDDMMAAAAHHMMSSParaAAAAMMDDHHMMSS($dados)
    {
        $d = substr($dados, 0, 2);
        $m = substr($dados, 3, 2);
        $a = substr($dados, 6, 4);
        $h = substr($dados, 11, 8);

        return $a . "-" . $m . "-" . $d . " " . $h;
    }

    public static function SomarOuSubitrairDataDDMMAAAHHMMSS($dados, $dias)
    {
        return date('Y-m-d H:i:s', strtotime($dias . ' days', strtotime($dados)));
    }

    public static function SomarOuSubitrairDataDDMMAAAHHMM($dados, $dias)
    {
        return date('Y-m-d H:i', strtotime($dias . ' days', strtotime($dados)));
    }

    public static function SomarOuSubitrairDataAAAMMDDHHMMSS($dados, $dias)
    {
        return date('d/m/Y H:i:s', strtotime($dias . ' days', strtotime($dados)));
    }

    public static function SomarOuSubitrairDataAAAMMDDHHMM($dados, $dias)
    {
        return date('d/m/Y H:i', strtotime($dias . ' days', strtotime($dados)));
    }
}
