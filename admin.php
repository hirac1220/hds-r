<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>長谷川式認知症スケール</title>
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tablestyle.css">
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link rel="icon" type="image/x-icon" href="img/medica.ico">
</head>
<header>
	<div class="title">
        <p><i class="fas fa-file-medical fa-3x"></i></p>
		<h1>長谷川式認知症スケール</h1>
	</div>
</header>
<body>
<?php  

include("php/functions.php");
// include("php/check.php");

$items = ['ID','ニックネーム','性別','年代','地域', 
          '年齢確認','日時の見当識','場所の見当識','言葉の即時記銘','計算','数字の逆唱','遅延再生','物品記銘','流暢性',
          '日時','スコア'];

// table items
echo "<table class=\"highlight\">\n";
echo "<thead>\n";
for($i=0; $i<count($items); $i++){
    echo "\t<th style=\"font-size:14px\">{$items[$i]}</th>\n";
}
echo "</thead>\n";

// set each table value
echo "<tbody>\n";
$high   = 10;
$middle = 20;

//1.  DB接続します
try {
    $pdo = db_con();// 本番はpassword
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}
  
//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();
  
//３．データ表示
if($status==false) {
    errorMsg($stmt);
}
else{
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
        echo "\t<tr>\n";
        echo "\t\t<td>".$result["id"]."</td>\n";
        echo "\t\t<td>".$result["name"]."</td>\n";
        // echo "\t\t<td style=\"font-size:10px\">".$result["email"]."</td>\n";
        echo "\t\t<td>".$result["sex"]."</td>\n";
        echo "\t\t<td>".$result["age"]."</td>\n";
        echo "\t\t<td>".$result["area"]."</td>\n";
        echo "\t\t<td>".$result["age_check"]."</td>\n";
        echo "\t\t<td>".$result["date_check"]."</td>\n";
        echo "\t\t<td>".$result["place_check"]."</td>\n";
        echo "\t\t<td>".$result["comment_check"]."</td>\n";
        echo "\t\t<td>".$result["calc_check"]."</td>\n";
        echo "\t\t<td>".$result["memory_check"]."</td>\n";
        echo "\t\t<td>".$result["repeat_check"]."</td>\n";
        echo "\t\t<td>".$result["correct_check"]."</td>\n";
        echo "\t\t<td>".$result["fluent_check"]."</td>\n";
        echo "\t\t<td>".$result["indate"]."</td>\n";
        if($result["total_score"] <= $high){
            echo "\t<td class=\"danger\" bgcolor=\"#f2dede\">".$result["total_score"]."</td>\n";
        }
        else if($result["total_score"] <= $middle){
            echo "\t<td class=\"danger\" bgcolor=\"#fcf8e4\">".$result["total_score"]."</td>\n";
        }
        else{
            echo "\t<td class=\"info\" bgcolor=\"#daedf7\">".$result["total_score"]."</td>\n";
        }
        echo "\t\t<td><a href=\"php/delete.php?id=".$result["id"]."\">".'[削除]'."</td>\n";
        echo "\t</tr>\n";
    }
}
echo "</tbody>\n";
echo "</table>\n";

?> 
	<!-- <form action="php/message.php" method="POST">
        <div class="form-inline">	
            <div class="input-field">
                <input type="number" class="pid-form" name="pid" placeholder="No.">
                <button class="btn waves-effect waves-light" type="submit" id="button"><i class="far fa-envelope"></i> 連絡する</button>
            </div>
        </div>
    </form> -->
    <footer>
        <div>
            <p class="copyright">Copyright © 2018, hirac All rights reserved.&nbsp;</p>
        </div>
    </footer>
</body>
</html>