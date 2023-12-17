<?php
    require_once('db.php');
    // session_start();
    // require_once('../controller/loginCheck.php');


    function login($username, $password){
        $con = getConnection();
        $sql = "select * from userinfo where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function signup($name, $email, $userName, $password, $phone, $dob, $role)
    {
        $con = getConnection();
    
        $sql = "INSERT INTO userinfo (Name, Email, UserName, Password, Phone, DOB, Role)
                VALUES ('$name', '$email', '$userName', '$password', '$phone', '$dob', '$role')";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }




    
    function getUserByUsernameAndPassword($username, $password) {
        $con = getConnection();
    
        $sql = "SELECT username FROM userinfo WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }

    function getUserRole($username) {
        $con = getConnection();
        $sql = "select role from userinfo WHERE username='$username'";
        
        $result = mysqli_query($con, $sql);
        
        
        if ($row = mysqli_fetch_assoc($result)) {
            $role = $row['role'];
        } else {
            $role = 'unknown';
        }
    
        mysqli_close($con);
    
        return $role;
    }

    

    function createAdmin($username, $password) {
        $con = getConnection();
        $sql = "INSERT INTO userinfo (UserName, Password) VALUES ('$username', '$password')";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    

    function getUser($username) {
      $con = getConnection();
      $sql = "select name,email,username,phone,dob from userinfo WHERE username = '$username'";
      $result = mysqli_query($con, $sql);
  
      if ($result && mysqli_num_rows($result) > 0) {
          return mysqli_fetch_assoc($result);
      } else {
          return null;
      }
    }

    

    function getAllUser(){
        $con = getConnection();
        $sql = "select  name,email,username,phone,dob,role from userinfo";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    } 

    function updateUser($name, $email,$username, $phone,$dob) {
      $con = getConnection(); 
      $sql = "UPDATE userinfo SET name='$name', email='$email', phone='$phone', dob='$dob' WHERE username='$username'";

          
      $result = mysqli_query($con, $sql);
          
      if ($result) {
          return true;
      } else {

          echo "Error: " . mysqli_error($con);
          return false;
      }
  }
  

    //     function deleteUser($username) {
    //         $con = getConnection();
    //         $sql = "DELETE FROM userinfo WHERE username='$username'";
    //         $result = mysqli_query($con, $sql);
        
    //         if ($result) {
    //             return true;
    //         } else {
    //             return false;
    //     }
    // }


    function getUserPassword($username) {
        $con = getConnection();
        $sql = "SELECT password FROM userinfo WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
    
        return $row['password'];
    }
    
    function updatePassword($username, $newPassword) {
        $con = getConnection();
        $sql = "UPDATE userinfo SET password = '$newPassword' WHERE username = '$username'";
        $result = mysqli_query($con, $sql);
    
        return $result;
    }
    






?>
