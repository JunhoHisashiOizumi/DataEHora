<?php

require __DIR__ . "/vendor/autoload.php";

use OizumiJunho\DataEHora\DataEHora;

echo DataEHora::GerarDataDDMMAAAAHHMMSS();

echo DataEHora::GerarDataDDMMAAAAHHMM();

echo DataEHora::GerarDataDDMMAAAA();

echo DataEHora::GerarDataDD();

echo DataEHora::GerarDataMM();

echo DataEHora::GerarDataAAAA();

echo DataEHora::GerarHoraHHMMSS();

echo DataEHora::GerarHoraHH();

echo DataEHora::GerarHoraMM();

echo DataEHora::GerarHoraSS();
