<link rel="stylesheet" href="style3.css?v=2">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST["my_name"];
$numbers = $_POST["numbers"];
$languages = $_POST["languages"];
$comands = $_POST["comands"];

$numbers_answer = 80;
$languages_answer = "HTML";
$comands_answer = "select";

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
  function judge($reply,$answer) {
    if ($reply == $answer) {
      echo "正解!";
    }else {
      echo "残念・・・";
    }
  }
?>

    <div class="my_name">
        <p><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>  
    </div>
      <p class="answer">①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <div class="result">
        <?php judge($numbers,$numbers_answer); ?>
    </div>
    <p class="answer">②の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <div class="result">
        <?php judge($languages,$languages_answer); ?>
    </div>
    <p class="answer">③の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <div class="result">
        <?php judge($comands,$comands_answer); ?>
    </div>

