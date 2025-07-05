<!-- URL: http://localhost/php03/ -->

<?php
require_once('config/status_codes.php');

// ランダム抽出
$random_numbers = array_rand($status_codes, 4);
// 抽出されたステータスコードを新しい配列に代入
foreach ($random_numbers as $index) {
    $options[] = $status_codes[$index];
    }
// 再代入された配列(選択肢)からランダムで１つ正解を抽出
// mt_rand() :乱数生成 (min,max)   (array_rand関数の使用も可能)
$question = $options[mt_rand(0, 3)];

// デバッグコード
// echo('<pre>');
// var_dump($random_numbers);   // code1
// var_dump($options);          // code2
// var_dump($question);         // code3
// echo('</pre>');
// ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css連携 -->
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Status Code Quiz</title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                <?php echo $question['description'] ?>
                </p>
            </div>
            <form class="quiz-form" action="result.php" method="post">
            <!-- 配列を利用した長いデータの為、今回はmethod属性:post -->
                <input type="hidden" name="answer_code"
                value="<?php echo $question['code'] ?>">
                <!-- ブラウザに表示させず、データの送信を行う -->
                <div class="quiz-form__item">
                    <?php foreach ($options as $option): ?>
                    <div class="quiz-form__group">
                        <input class="quiz-form__radio"
                        id="<?php echo $option['code'] ?>"
                        type="radio" name="option"
                        value="<?php echo $option['code'] ?>">
                        <label class="quiz-form__label"
                        for="<?php echo $option['code'] ?>">
                        <?php echo $option['code'] ?>
                        </label>
                        <!-- inputタグのid属性とlabelタグのfor属性に同じものを指定すると、inputタグと紐づけできる -->
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>