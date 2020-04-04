<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>判定結果</title>
<link rel="stylesheet" href="../css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<link rel="icon" type="image/x-icon" href="../img/medica.ico">
</head>
<body>

<?php
include("functions.php");

// check the values
if(!isset($_POST["name"]) || $_POST["name"]==""||
  //  !isset($_POST["mail"]) || $_POST["mail"]==""||
   !isset($_POST["sex"])  || $_POST["sex"]=="" ||
   !isset($_POST["age"])  || $_POST["age"]=="" ||
   !isset($_POST["area"])  || $_POST["area"]=="")
{
  exit('未入力の項目があります。(ニックネーム or 年代 or 性別 or 地域)');
}

if(!isset($_POST["age_check"]) || $_POST["age_check"]=="")
{
  exit('未選択の項目があります。(Q1)');
}

if(!isset($_POST["year"]) && !isset($_POST["month"]) && !isset($_POST["day"])
&& !isset($_POST["date"]) && !isset($_POST["date_none"]))
{
  exit('未選択の項目があります。(Q2)');
}  

if(!isset($_POST["place_check"]) || $_POST["place_check"]=="")
{
  exit('未選択の項目があります。(Q3)');
}

if(!isset($_POST["comment_check"]) || $_POST["comment_check"]=="")
{
  exit('未選択の項目があります。(Q4)');
}

if(!isset($_POST["calc_check_a"]) && !isset($_POST["calc_check_b"]) && !isset($_POST["calc_none"]))
{
  exit('未選択の項目があります。(Q5)');
}
  
if(!isset($_POST["memory_check_a"]) && !isset($_POST["memory_check_b"]) && !isset($_POST["memory_none"]))
{
  exit('未選択の項目があります。(Q6)');
}

if(!isset($_POST["repeat_check_plant"]) && !isset($_POST["repeat_check_animal"]) && !isset($_POST["repeat_check_vehcle"])
&& !isset($_POST["repeat_check_plant_hint"]) && !isset($_POST["repeat_check_animal_hint"]) && !isset($_POST["repeat_check_vehcle_hint"])
&& !isset($_POST["repeat_none"]))
{
  exit('未選択の項目があります。(Q7)');
}

if(!isset($_POST["correct_check"]) || $_POST["correct_check"]=="")
{
  exit('未選択の項目があります。(Q8)');
}
  
if(!isset($_POST["fluent_check"]) || $_POST["fluent_check"]=="")
{
  exit('未選択の項目があります。(Q9)');
}

//1. POSTデータ取得
// personal data
$name  = h($_POST["name"]);
// $mail  = h($_POST["mail"]);
$sex   = h($_POST["sex"]);
$age   = h($_POST["age"]);
$area  = h($_POST["area"]);
// check result
$age_check    = h($_POST["age_check"]);
$date_check   = h($_POST["year"])+h($_POST["month"])+h($_POST["day"])+h($_POST["date"])+h($_POST["date_none"]);
$place_check  = h($_POST["place_check"]);
$comment_check= h($_POST["comment_check"]);
$calc_check   = h($_POST["calc_check_a"])+h($_POST["calc_check_b"])+h($_POST["calc_none"]);
$memory_check = h($_POST["memory_check_a"])+h($_POST["memory_check_b"])+h($_POST["memory_none"]);
$repeat_check = h($_POST["repeat_check_plant"])+h($_POST["repeat_check_animal"])+h($_POST["repeat_check_vehcle"])
                    +h($_POST["repeat_check_plant_hint"])+h($_POST["repeat_check_animal_hint"])+h($_POST["repeat_check_vehcle_hint"])+h($_POST["repeat_none"]);
$correct_check= h($_POST["correct_check"]);
$fluent_check = h($_POST["fluent_check"]);
$total_score  = $age_check+$date_check+$place_check+$comment_check+$calc_check+$memory_check+$repeat_check+$correct_check+$fluent_check;
// var_dump($_POST);

$name_json   = json_encode($name."様: 合計".$total_score."点");
// normalized array
$score_array = [$age_check/1, $date_check/4, $place_check/2, $comment_check/3, $calc_check/2, 
                $memory_check/2, $repeat_check/6, $correct_check/5, $fluent_check/5];
$score_json  = json_encode($score_array);

//2. DB接続
try {
  $pdo = db_con();
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成
$sql = "INSERT INTO gs_bm_table(name, sex, age, area, 
                                age_check, date_check, place_check, comment_check, calc_check, memory_check, repeat_check, correct_check, fluent_check,
                                total_score, indate) VALUES(:p1, :p2, :p3, :p4, :c1, :c2, :c3, :c4, :c5, :c6, :c7, :c8, :c9, :c10, sysdate())";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':p1', $name, PDO::PARAM_STR); 
// $stmt->bindValue(':p2', $mail, PDO::PARAM_STR); 
$stmt->bindValue(':p2', $sex,  PDO::PARAM_STR); 
$stmt->bindValue(':p3', $age,  PDO::PARAM_STR); 
$stmt->bindValue(':p4', $area,  PDO::PARAM_STR); 
$stmt->bindValue(':c1', $age_check,    PDO::PARAM_STR);
$stmt->bindValue(':c2', $date_check,   PDO::PARAM_STR);
$stmt->bindValue(':c3', $place_check,  PDO::PARAM_STR);
$stmt->bindValue(':c4', $comment_check,PDO::PARAM_STR);
$stmt->bindValue(':c5', $calc_check,   PDO::PARAM_STR);
$stmt->bindValue(':c6', $memory_check, PDO::PARAM_STR);
$stmt->bindValue(':c7', $repeat_check, PDO::PARAM_STR);
$stmt->bindValue(':c8', $correct_check,PDO::PARAM_STR);
$stmt->bindValue(':c9', $fluent_check, PDO::PARAM_STR);
$stmt->bindValue(':c10',$total_score,  PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  echo "<div class=\"result\">";
  $high   = 10;
  $middle = 20;
  if($total_score <= $high){
    echo "<h1>あなたのスコアは".$total_score."点です。</h1>";
    echo "<p>認知機能の著しい低下(高度)が日常生活に影響を及ぼしている可能性があります。</p>
          <p>この結果だけで認知症と診断されるものではありませんが、お住まいの地域の医療携室へ相談してみてはいかがでしょうか？";
  }
  else if($total_score <= $middle){
    echo "<h1>あなたのスコアは".$total_score."点です。</h1>";
    echo "<p>認知機能の低下(中度)が日常生活に影響を及ぼしている可能性があります。</p>
          <p>この結果だけで認知症と診断されるものではありませんが、お住まいの地域の医療連携室へ相談してみてはいかがでしょうか？";
  }
  else{
    echo "<h1>あなたのスコアは".$total_score."点です。</h1>";
    echo "<p>認知機能の低下が日常生活に影響を及ぼしている可能性は低そうです。</p>
          <p>但し、テストの結果は21点以上でも、気になることがある場はお住まいの地域の医療連携室へ相談してみしょう。</p>";
  }
  echo "<br>";
  echo "<a href=\"https://google.co.jp/search?&q=医療連携室&q=".$area."\" target=\"_blank\">お住まいの地域の医療連携室を検索する。</p></a>";
 
  echo "<br>";
  echo "<a href=\"https://docs.google.com/forms/d/e/1FAIpQLSffmwWHBQS2b4M2369iAaVrrWosZs9ulBlmSFKhZ1Of2Cq1SQ/viewform?usp=sf_link".$area."\" target=\"_blank\">当サイトのアンケートを回答する。</p></a>";
  echo "</div>";
}
?>

<canvas id="chart"></canvas>
<script>
// Chart.js
let name  = JSON.parse('<?php echo $name_json; ?>');
let score = JSON.parse('<?php echo $score_json; ?>');
console.log(name);

let ctx = document.getElementById("chart");

Chart.defaults.global.defaultFontSize = 20;
let chart = new Chart(ctx, {
  type: 'radar',
  data: {
    labels: ['Q1:年齢確認(1点満点)','Q2:日時の見当識(4点満点)','Q3:場所の見当識(2点満点)','Q4:言葉の即時記銘(3点満点)','Q5:計算(2点満点)','Q6:数字の逆唱(2点満点)','Q7:遅延再生(6点満点)','Q8:物品記銘(5点満点)','Q9:流暢性(5点満点)'],
    datasets: [{
      label: name,
      backgroundColor: "rgba(242,222,222,0.4)",
      borderColor: "rgba(242,222,222,1)",
      data: score 
    }] 
  },
  options: {
    scale: {
      pointLabels: {
        fontSize: 20
      },
      ticks: { // http://www.chartjs.org/docs/#scales-radial-linear-scale
        display: false,
        beginAtZero: true
      }
    }
  }
});
</script>

</body>
</html>