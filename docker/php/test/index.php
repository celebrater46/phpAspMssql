<?php
try {
//    https://qiita.com/fujitak/items/b56122e2ecd94022a7b6
    # hostには「docker-compose.yml」で指定したコンテナ名を記載
//    $dsn = "mysql:host=mysql_host;dbname=test_database;";
//    $db = new PDO($dsn, 'docker', 'docker');
//    $db = new PDO($dsn, 'root', 'root');
    $db= new PDO("sqlsrv:Server=phpaspmssql_mssql_1;Database=DEMO", "sa", "56CFUVzh");
    $sql = "SELECT * FROM test_table";
    $sql = "SHOW TABLES";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
