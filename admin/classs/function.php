<?php
include('dbConn.php');
$db = new dbConn();
$conn = $db->getConnection();

class fun {


//admin

    function adminLogin($data) {

        global $conn;

        $adminName = $_POST['adminEmil'];
        $adminPassword = $_POST['adminPassword'];

        $query = "SELECT * FROM `admin` WHERE admin_email = '$adminName' AND admin_password = '$adminPassword'";

        if(mysqli_query($conn, $query)) {
            $rst = mysqli_query($conn, $query);
            $admin = mysqli_fetch_assoc($rst);

            if($admin) {
                header("Location: dashboard.php");
                session_start();
                $_SESSION['adminId'] = $admin['admin_id'];
                $_SESSION['adminEmail'] = $admin['admin_email'];
            } else {
                return $log_notg = 'Email or password wrong';
            }
        }
    }


    function adminLogout() {
        unset($_SESSION['adminId']);
        unset($_SESSION['adminEmail']);
        header("Location: index.php");
        session_destroy();
    }


//user

    function userLogin($data) {

        global $conn;

        $userName = $_POST['user_name'];
        $userPassword = $_POST['user_password'];

        $query = "SELECT * FROM `user` WHERE `user_name`='$userName' AND `user_password`='$userPassword'";


        if(mysqli_query($conn, $query)) {

            $result = mysqli_query($conn, $query);
            $user_info = mysqli_fetch_array($result);

            if($user_info) {
                header("Location: index.php");
                session_start();
                $_SESSION['userID'] = $user_info['user_id'];
                $_SESSION['userName'] = $user_info['user_name'];
                $_SESSION['userEmail'] = $user_info['user_email'];
                $_SESSION['loginOk'] = '<li class="logout"><a href="profile.php">logout</a></li>';
            } else {
                return $logMsgEmail = "username or password is incorrect";
            }
        }

    }


    function userLogout() {
        unset($_SESSION['userId']);
        unset($_SESSION['userName']);
        unset($_SESSION['userEmail']);
        header("Location: index.php");
        session_destroy();
    }


    function userRegister($data) {
        global $conn;

        $userName = $_POST['user_name'];
        $userEmail = $_POST['user_email'];
        $userPassword = $_POST['user_password'];

        $query = "INSERT INTO `user`(`user_name`, `user_email`, `user_password`) VALUES ('$userName', '$userEmail', '$userPassword')";

        if(mysqli_query($conn, $query)) {
            return $notg = 'Registration successful';
        } else {
            return $notg = 'Registration Error';
        }

    }



    function displayUser() {

        global $conn;

        $query = "SELECT * FROM `user`";
        if (mysqli_query($conn, $query)) {
            $user_info = mysqli_query($conn, $query);
            return $user_info;
        }
    }
    function displayAdminUser() {

        global $conn;

        $query_admin = "SELECT * FROM `admin`";
        if (mysqli_query($conn, $query_admin)) {
            $admin_user_info = mysqli_query($conn, $query_admin);
            return $admin_user_info;
        }
    }

    function addAdminUser($data) {

        global $conn;
        
        $admin_Email = $data['admin_email'];
        $admin_password = $data['admin_password'];

        $query = "INSERT INTO `admin`( `admin_email`, `admin_password`) VALUES ('$admin_Email','$admin_password')";

        if(mysqli_query($conn, $query)) {
            $msg = "{$admin_Email} Add successfully";
            return $msg;
        }
    }

    function deleteAdmin($id) {

        global $conn;

        $query = "DELETE FROM `admin` WHERE `admin_id`=$id";
        if (mysqli_query($conn, $query)) {
            $del_msg = "User Deleted Successfully";
            return $del_msg;
        }
    }

    function deleteUser($id) {

        global $conn;

        $query = "DELETE FROM `user` WHERE `user_id`=$id";
        if (mysqli_query($conn, $query)) {
            $del_msg = "User Deleted Successfully";
            return $del_msg;
        }
    }


    //category

    function displayCategory() {

        global $conn;

        $query = "SELECT * FROM `product_category` WHERE category_status=1";

        if (mysqli_query($conn, $query)) {
            $ctg_info = mysqli_query($conn, $query);
            return $ctg_info;
        }

    }


    // product 

    function displayProductUsingCategory($category_id) {

        global $conn;

        $query = "SELECT * FROM `products` WHERE pdt_ctg=$category_id AND pdt_status=1 AND `pdt_stock`>0";

        if ($result = mysqli_query($conn, $query)) {

            $pdt_info = mysqli_query($conn, $query);
            return $pdt_info;
        }
    }

    function displayProduct() {

        global $conn;

        $query = "SELECT * FROM `products`";

        if(mysqli_query($conn, $query)) {
            $products = mysqli_query($conn, $query);
            return $products;
        }
    }

    function addProducts($data) {


    }

    function deleteProduct($id) {

        global $conn;

        $query = "DELETE FROM `products` WHERE `pdt_id`=$id";
        if (mysqli_query($conn, $query)) {
            $del_msg = "Product Deleted Successfully";
            return $del_msg;
        }
    }
    
}


?>