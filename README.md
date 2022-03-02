# Objetivo
Criado para facilitar a manipulação de data e hora

# Requisitos
PHP: Versão 7 ou acima | oizumi-junho/data-e-hora-php: Qualquer versão

# Configuração do arquivo composer.json

```

    "require": {
        "oizumi-junho/data-e-hora-php": "dev-master",
        "php": ">=7.0"
    }

```

# Exemplo de uso

```

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

echo DataEHora::GerarUltimoDiaDoMes(4);

```