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

------
## Campeonatos

| Campeonato                  |  ID  |
| ------------------------    | ---  |
|  Campeonato Brasileiro      |  30  |
|  Campeonato Alemão          |  12  |
|  Amistosos                  |  13  |
|  Campeonato Baiano          |  28  |
|  Campeonato Carioca         |  34  |
|  Campeonato Cearense        |  36  |
|  Copa América               |  39  |
|  Copa da Alemanha           |  41  |
|  Copa da França             |  42  |
|  Copa da Inglaterra         |  43  |
|  Copa da Itália             |  44  |
|  Copa do Brasil             |  48  |
|  Copa do Nordeste           |  55  |
|  Copa do Rei                |  56  |
|  Copa São Paulo de Jr       |  58  |
|  Copa Sul-Americana         |  59  |
|  Eliminatória Sul-Americana |  68  |
|  Campeonato Espanhol        |  72  |
|  Eurocopa                   |  74  | 
|  Campeonato Francês         |  76  |
|  Campeonato Gaúcho          |  77  |
|  Campeonato Inglês          |  79  | 
|  Campeonato Italiano        |  81  |
|  Copa Libertadores          |  82  |
|  Liga dos Campeões da UEFA  |  83  |
|  Liga Europa                |  84  |
|  Campeonato Mineiro         |  86  | 
|  Mundial de Clubes          |  87  |
|  Campeonato Paranaense      |  103 |
|  Campeonato Paulista        |  104 |
|  Camp. Paulista Série A-2   |  105 |
|  Campeonato Pernambucano    |  107 |
|  Recopa Sul-Americana       |  110 |
|  Camp. Brasileiro - Série B |  112 | 
|  Camp. Brasileiro - Série C |  113 |
|  Camp. Brasileiro - Série D |  114 |
|  Supercopa da Espanha       |  117 |
|  Supercopa da Europa        |  118 |
|  Supercopa da Inglaterra    |  119 |
|  Supercopa da Itália        |  120 |
 
