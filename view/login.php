<!-- <?php
include_once "../model/pdo.php";
include_once "../model/taikhoan.php";
if(isset($_POST['ho_ten']) && isset($_POST['mat_khau']))
{
    
    function validate($data){
        $data= trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username= validate($_POST['ho_ten']);
    $password= validate($_POST['mat_khau']);


    if(empty($username)){

        header("location:index.php?error=User is required");
        exit;
    }else if(empty($password)){
        header("location:index.php?error=Pass is required");
        exit;
    }else{

        
        $sql="SELECT * FROM khach_hang where ho_ten='$username' AND mat_khau='$password'";
        
        $stmt=$connect->prepare($sql);
        var_dump($connect);
        $stmt->execute();
        $result = $stmt->fetch();

        if ($stmt->rowCount() === 1) {
            $rows=$stmt->fetch($result);
            if($rows['ho_ten']===$username && $rows['mat_khau']===$password){
                 echo"LOGIN";
            }else {
                header("location:index.php?error=Incorrect username or password");
                exit;
            }
        } else {
            header("location:index.php?error=Incorrect username or password");
            exit;

    }
    }
}else{
    header("location:index.php");
    exit;
}


?> -->