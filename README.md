# FUTAPI

#### Api para trazer informações da rodada do brasileirão  série A
#### Todas requisições são enviadas para ./api

------
#### Listar equipes
##### GET `/equipes`
```php
<?php
 
 $url = "http://localhost/apifut/equipes";
 $params = "?ano=2020&campeonato=30";
 ```
 
#### Jogos da rodada
##### GET `/rodada`
```php
<?php
 
 $url = "http://localhost/apifut/rodada";
 $params = "?ano=2020&campeonato=30&rodada=38";
 ```
 
#### Informações do campeonato
##### GET `/campeonato`
```php
<?php
 
 $url = "http://localhost/apifut/campeonato";
 $params = "?ano=2020&campeonato=30&rodada=38";
 ``` 
#### Lista da classificação
##### GET `/classificacao`
```php
<?php
 
 $url = "http://localhost/apifut/classificacao";
 $params = "?ano=2020&campeonato=30&rodada=38";
 ```
 
 #### Informações da equipe
##### GET `/equipe`
```php
<?php
 
 $url = "http://localhost/apifut/equipe";
 $params = "?ano=2020&campeonato=30&rodada=38&id=4";
 ```
