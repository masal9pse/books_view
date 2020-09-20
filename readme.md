# docker

```
mysql -u root -p

<!--使用するdbを指定する-->
use books_view_docker
```

# 問題点

- マウントしていないのでコンテナを停止すると db のデータが吹き飛ぶ
  - down ではなく、stop を使う
