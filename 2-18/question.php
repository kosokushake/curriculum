<link rel="stylesheet" href="style2.css?v=2">

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST["my_name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$numbers = [80,22,20,21];  
$languages = ["PHP","Python","JAVA","HTML"];
$comands = ["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
  $numbers_answer = $numbers[0];
  $languages_answer = $languages[3];
  $comands_answer = $comands[1];
?>
<div class="wrapper">

  <form action="answer.php" method="post">
    
    <p class="my_name">お疲れ様です<?php echo $my_name; ?><!--POST通信で送られてきた名前を出力-->さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <h2 class="h21">①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <div class="radio1">
        <?php foreach ($numbers as $value) { ?>
          <input type="radio" value="<?php echo $value; ?>" name="numbers"><?php echo $value; ?>
        <?php } ;?>    

    </div>
      
      <h2 class="h22">②Webページを作成するための言語は？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <div class="radio2">  
        <?php foreach ($languages as $value) { ?> 
        <input  type="radio" value="<?php echo $value; ?>" name="languages"><?php echo $value; ?>
        <?php } ;?>
    </div>    
        
        <h2 class="h23">③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <div class="radio3">
            <?php foreach ($comands as $value) { ?> 
            <input type="radio" value="<?php echo $value; ?>" name="comands"><?php echo $value; ?>
            <?php } ;?>
            
          </div>
          <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
          <input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
          <div class="submit" >
              <input class="submit" type="submit" value="回答する">
          </div>
        </form>
  </div>
        