# 初回

```
mkdir backend
make create-project
```

## よく使うコマンド集

データベースクリア

```
make fresh
```

テスト

```
make test
```

Larastan による静的解析

```
make stan
```

それ以降

```
make up
```

npm install

```
make npm-install
```

ide-helper

```
make ide-helper
```

Mysql 直打ち

```
make sql
```

## リンク

ローカルホスト  
http://127.0.0.1:2649/

PHPMyAdmin  
http://127.0.0.1:2650/

メール  
http://127.0.0.1:2651/

port 番号を変える時

nginx の conf,docker-compose をいじる

mysql も変えるべき(3306 はかぶるので)
