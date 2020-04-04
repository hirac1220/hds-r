<?php
function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}

//DB接続関数（PDO）
function db_con(){
    $db = parse_url($_SERVER['CLEARDB_DATABASE_URL']);
    $db['dbname'] = ltrim($db['path'], '/');
    $dsn = "mysql:host={$db['host']};dbname={$db['dbname']};charset=utf8";
    $user = $db['user'];
    $password = $db['pass'];
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_USE_BUFFERED_QUERY =>true,
    );
    try {
        return new PDO($dsn,$user,$password,$options);
    } catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
    }
}

//SQL処理エラー
function errorMsg($stmt){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}
?>