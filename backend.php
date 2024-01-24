<?php   
    $connect = "mysql:host=localhost;charset=utf8;dbname=web54j;";

    $pdo = new PDO($connect,"admin","1234");

    echo $_POST["first_name"];

    // $sql 為資料庫連線的快速寫法
    // $sql = "insert into tickets values('','{$_POST["first_name"]}',
    //  '{$_POST["last_name"]}','{$_POST["phone"]}','{$_POST["password"]}')";

    // $sql2 為資料庫連線的正規寫法
    $sql2 = "INSERT INTO `tickets` (`id`, `first_name`, `last_name`, `phone`, `password`)
     VALUES (NULL, '{$_POST["first_name"]}', '{$_POST["last_name"]}', '{$_POST["phone"]}', '{$_POST["password"]}')";

    if($_POST["ver"] == $_POST['answer']){ // 判斷驗證碼是否錯誤
        $pdo->exec($sql2);
        header("location:index.html"); //跳頁 location指位址
    }else{
        echo "
        <script>
        alert('驗證碼錯誤')
        location.href = 'index.html'
        </script>";
    }

    