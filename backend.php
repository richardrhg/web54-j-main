<?php
    // mysql:host 表示連結的資料庫位置(localhost、127.0.0.1)
    // charset 表示連結中使用的編碼 (utf8)
    // dbname 表示連線的資料庫名稱
    $connect = "mysql:host=localhost;charset=utf8;dbname=web54j;";

    // PDO 裡面要放入三個參數， 1. 連線資訊，2. 連線的使用者 3. 連線的使用者密碼
    $pdo = new PDO($connect,"admin","1234");

    echo $_POST["first_name"];

    // $sql = "insert into tickets values('','{$_POST["first_name"]}',
    //  '{$_POST["last_name"]}','{$_POST["phone"]}','{$_POST["password"]}')";

    $sql2 = "INSERT INTO `tickets` (`id`, `first_name`, `last_name`, `phone`, `password`)
         VALUES (NULL, '{$_POST["first_name"]}', '{$_POST["last_name"]}', '{$_POST["phone"]}', '{$_POST["password"]}')";

    if($_POST["ver"] == $_POST['answer']){
        $pdo->exec($sql2);
        header("location:index.html"); //跳頁 location指位址
    }else{
        echo "
            <script>
            alert('驗證碼錯誤')
            location.href = 'index.html'
            </script>";
    }

