<?php
use Negotel\Response\JSON;
require __DIR__ ."/vendor/autoload.php";


// Crie uma resposta HTTP 200 OK com dados
JSON::ok(['message' => 'Operação bem-sucedida']);
