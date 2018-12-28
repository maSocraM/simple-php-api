# API PHP Simples

## O projeto
Este projeto tem como meta o de construir uma "API" REST simples em PHP puro, que recebe uma requisição HTTP e responde um JSON.
Você já sabe que  pode utilizar todo este material como bem entender, para fins profissionais ou de estudo, não há licenças envolvidas porém peço se caso ocorra de ganhar algum dinheiro utilizando este conteúdo, que não se esqueça de mim... ;)

## O Objetivo
O objetivo principal e na criação de uma API simplificada (endpoint fixo, sem sistema de segurança e outros pontos cruciais no desenvolvimento de uma API REST), utilizando conceitos básicos de orientação a objetos
- API simples em PHP;
- Opção de uso de framework ou código puro;
- Resultado em formato JSON. 
O conteúdo deste repositório se refere a um teste de emprego que consistiu na criação de 
O conteúdo dsete repositório se refere a um teste de emprego no qual o objetivo era o de criar uma API simples, 
Estes material resulta de um teste para uma oportunidade de emprego, no qual os requisitos foram informados e tive um prazo de 10 dias para entregar.
Possuo conhecimentos de front-end, mas maior inclinação para back-end, então alguns dos ítens do front-end não foram concluídos.
Você pode utilizar todo este material como bem entender, para fins profissionais ou de estudo, não há licenças envolvidas porém peço se caso ocorra de ganhar algum dinheiro utilizando este conteúdo, que não se esqueça de mim... ;)

## Pré-requisitos
- Servidor WEB Local;
- PHP versão igual à **5.6.30**;
- Módulo MongoDB para PHP (instalado e configurado);

##  Instalação
- Clone este repositório ou faça o download do respositório e descompacte;
- Conceder permissões de leitura e gravação para todos os usuários (ou somente para o usuário que executa o serviço do servidor WEB) nos diretórios _"storage"_ e _"bootstrap/cache"_, encontrados na raiz do projeto, em em todos seus arquivos e subdiretórios;
- Criar banco de dados com nome _"jobtest"_ no **MongoDB**;
- Executar comando _"php artisan migrate --database=mongodb"_ (sem aspas) na raiz no projeto, mesmo nível de onde se encontra o diretório __"public"__, isto criará a estrutura de armazenamento no MongoDB.

## Uso

## Referências
   1. **Simple PHP API** - <https://www.codeofaninja.com/2017/02/create-simple-rest-api-in-php.html>
   2. **MySQL select ramdon** - <https://stackoverflow.com/questions/1283640/selecting-random-rows-in-mysql>
