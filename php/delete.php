<?php
include("functions.php");

//1. GETデータ取得
$id   = $_GET["id"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  errorMsg($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: ../../public/admin.php");
  exit;
}
?>
