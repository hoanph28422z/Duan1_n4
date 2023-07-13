<?php


// Hàm kết nối CSDL
    function pdo_get_connect(){
    $hostname = "localhost";
    $dbname = "duan1";
    $username = "root";
    $password = "";

    try {
        $connect = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connect;
    } catch (PDOException $e) {
        echo "Lỗi kết nối: ".$e->getMessage();
    }
    }


// Hàm thực thi CSDL

    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);

        try {
           $connect = pdo_get_connect();
           $query = $connect->prepare($sql);
           $query->execute($sql_args);
        } catch (PDOException $e) {
           throw $e;
        } finally{
            unset($connect);
        }


    }

// Hàm trả về id bill


function pdo_execute_return_lastInsertId($sql){
    $sql_args = array_slice(func_get_args(), 1);

    try {
       $connect = pdo_get_connect();
       $query = $connect->prepare($sql);
       $query->execute($sql_args);
       return $connect -> lastInsertId();
    } catch (PDOException $e) {
       throw $e;
    } finally{
        unset($connect);
    }


}




// Hàm truy vấn nhiều dữ liệu


    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(), 1);

        try {
            $connect = pdo_get_connect();
            $query = $connect->prepare($sql);
            $query->execute($sql_args);
            $qmd = $query->fetchAll();
            return $qmd;
        } catch (PDOException $e) {
            throw $e;
         } finally{
             unset($connect);
         }
    }


// Hàm truy vấn một dữ liệu


function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);

    try {
        $connect = pdo_get_connect();
        $query = $connect->prepare($sql);
        $query->execute($sql_args);
        $qmd = $query->fetch(PDO::FETCH_ASSOC);
        return $qmd;
    } catch (PDOException $e) {
        throw $e;
     } finally{
         unset($connect);
     }
}

?>