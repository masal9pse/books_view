# 環境構築

```bash
docker -v
Docker version 19.03.8, build afacb8b

cd books_view-app

docker-compose -v
docker-compose version 1.25.5,

docker-compose up -d

docker-compose exec php bash

// テーブル作成
php db/create_users_table.php && php db/create_books_table.php

// データ投入
php seed/usersSeeder.php && php seed/booksSeeder.php

localhost:8080でアクセス

// またdbのマウントはしていないので、docker-compose stopをつかってください
```

# mysql の操作

```bash
docker-compose exec db bash

mysql -u root -p

// 使用するdbを指定する
use books_view_docker
```

# 問題点

- マウントしていないのでコンテナを停止すると db のデータが吹き飛ぶ
  - down ではなく、stop を使う
