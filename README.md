# php-query

Para testar localmente realize os seguintes passos:
+ Configurar o banco de dados no arquivo `search.php`
+ Rodar o script `create_table.sql` para criar a tabela utilizada pelo programa

O arquivo `index.php` contem o arquivo que mostra a tela de input da query.

O arquivo `search.php` le os parametros recebidos e realiza a query no banco de dados, retornando os valores no formato JSON.

O arquivo `helper.php` possui as funcoes responsaveis por esconder as informacoes desejadas.
