# Documentação de Instalação do Projeto Response

Esta documentação descreve como instalar e usar a classe `Response` em seu projeto PHP. A classe `Response` oferece métodos para gerar respostas JSON comuns com diferentes códigos de status HTTP.

## Instalação

Você pode instalar o projeto Response via Composer, que é uma das maneiras mais populares de gerenciar dependências em projetos PHP. Certifique-se de que você já tenha o Composer instalado em seu sistema. Se não tiver, você pode baixá-lo em [getcomposer.org](https://getcomposer.org/).

Agora, siga os passos abaixo para instalar o projeto Response:

1. Abra um terminal e navegue até o diretório raiz do seu projeto.

2. Execute o seguinte comando para adicionar o projeto Response como uma dependência:

   ```bash
   composer require seu-nome-de-usuario/response
   ```

   Certifique-se de substituir `seu-nome-de-usuario` pelo seu nome de usuário no Packagist ou pelo nome da organização, se aplicável.

3. O Composer baixará e instalará automaticamente o projeto Response e suas dependências no diretório `vendor` do seu projeto.

## Uso Básico

Após a instalação bem-sucedida, você pode começar a usar a classe `Response` para gerar respostas JSON com diferentes códigos de status HTTP. Aqui está um exemplo de uso básico:

```php
use Negotel\Response\JSON;
require __DIR__ ."/vendor/autoload.php";


// Crie uma resposta HTTP 200 OK com dados
JSON::ok(['message' => 'Operação bem-sucedida']);
```
