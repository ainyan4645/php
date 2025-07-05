## PHPとは
PHPはWebサイトを動かすためのプログラミング言語。
ユーザーごとに内容が変わるページを作れる。
HTML・CSSでWebページの見た目は作れるが、ログイン機能やフォームなど、動きのあるページを作るにはPHPが必要。
「MySQL」との相性も良いため、WordPressなどでも使われている。

## プログラミングの基本構造
「順次進行」「条件分岐」「繰り返し」の3つの基本的な動きで構成されており、
すべての処理はこの3つの組み合わせによって成り立っている。
### 順次進行
上から下へ順番に処理を実行していく動きのこと。
### 条件分岐
ある条件によって処理の流れが分かれる動きのこと。状況に応じて異なる処理が実行される。
### 繰り返し
ある条件が満たされるまで処理を何度も実行する動きのこと。
![基本構造](https://coachtech-lms-bucket.s3.ap-northeast-1.amazonaws.com/question/20250423105737_Frame+7.png)

## 基本ルール
PHPのコードは、「;」で終わるのが基本。
```php
<?php
  echo "こんにちは";
?>
```
### 省略できる場合
ファイルの中にPHPコードしか書かれていない時は、最後の「?>」は省略してOK <br/>
実際、多くのPHPファイルでは下記のように省略されている。
```php
<?php
  echo "こんにちは";
```
### 注意点（HTMLと一緒に書く場合）
HTMLの中にPHPを差し込むときは、「」の形で必ず閉じタグ「?>」を使う必要がある。
```html
<!DOCTYPE html>
<html>
  <body>
    <p>
      <?php echo "こんにちは"; ?>
    </p>
  </body>
</html>
```

## セットアップ
### Dockerの設定
```console
$ docker compose up -d --build
```
Docker設定の詳細は省略

## 変数と定数
同リポジトリのsrc/php01ディレクトリ内にある「index03.php」ファイルを参照。

## 演算子
同リポジトリのsrc/php01ディレクトリ内にある「index04.php」ファイルを参照。

## 条件分岐
同リポジトリのsrc/php01ディレクトリ内にある「index05.php」ファイルを参照。

## 繰り返し
同リポジトリのsrc/php01ディレクトリ内にある「index06.php」ファイルを参照。

## 関数
同リポジトリのsrc/php01ディレクトリ内にある「index07.php」ファイルを参照。

## 配列と連想配列
同リポジトリのsrc/php01ディレクトリ内にある「index08.php」ファイルを参照。

## データの受け取り
### 準備
サイトページ用のphpファイルと同様の階層に「config」ディレクトリを作成。
その直下に以下のファイルを作成する。
- course.html
- course.php

### データ送信方法
Web ブラウザから PHP へのデータ送信方法のうち、代表的なものは以下の２種類。

| 送信方法 | 特徴 | 例 |
|:-:|:-:|:-:|
| POST | データがURLで引き渡されない | サーバーに情報を投稿する<br/>配列などの長いデータを送信する<br/>ファイルのアップロードを行う |
| GET | データがURLで引き渡される | サーバーから情報を取り出す |

#### POST
会社名を入力して送信するフォームを作る例↓<br/>
目標物：
![入力フォーム](https://coachtech-lms-bucket.s3.ap-northeast-1.amazonaws.com/curriculum/03_part/01_chapter/img/data.jpg)

**HTML**
- 入力フォーム作成
- 送信ボタンで画面遷移させる

```html
<!-- course.html -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="course.php" method="POST">
    <label>会社名：<input type="text" name="company"></label>
    <br />
    <input type="submit" name="submit" value="送信する" />
  </form>
</body>

</html>
```
- 遷移先ページのファイル名を、「action = "遷移するファイル名"」として指定
- POST で送信する時は、method 属性を「method="POST"」とする<br/>
  →<input>タグの name 属性で指定した名前が、受け取る時の $_POST の添字となる。

**PHP**
- データを受け取る

```php
// course.php

<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";
```
- htmlspecialchars :フォームを利用したセキリュティの攻撃を防ぐためにエスケープ処理をするための関数
- 入力欄に入力後、送信ボタンクリックでcourse.phpに遷移して、ブラウザ表示が切り替わる。

- POSTで送信する場合、Web ブラウザの入力データは Web サーバーへと送られる
- 「method="POST"」で送信したデータを PHP プログラムで受け取る場合に使う変数は $_POST

#### GET
上記POSTをGETに置き換える↓
```html
<!-- course.html -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<!-- <form action="course.php" method="POST"> -->
+ <form action="course.php" method="GET">
  <label>会社名：<input type="text" name="company"></label>
  <br />
  <input type="submit" name="submit" value="送信する" />
  </form>
</body>

</html>
```
```php
<!-- course.php -->

<?php
// $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
+ $company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";
```
- PHPでデータを受け取った時には「$_GET」という変数に格納される
- ブラウザの挙動は同じ。ただし、遷移した後の URL は以下のようになる
```
http://localhost/php01/course.php?company=株式会社estra&submit=送信する
正確には↓
http://localhost/php01/course.php?company=%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BEestra&submit=%E9%80%81%E4%BF%A1%E3%81%99%E3%82%8B
```
