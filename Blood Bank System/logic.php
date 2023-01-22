<?php


    session_start();
    $conn = mysqli_connect("localhost", "root", "","blood bank system");



if (isset($_REQUEST['register_hosp'])) {

    $hospName = $_REQUEST['hospName'];
    $hospPassword = $_REQUEST['hospPassword'];


    $sql_register_hosp = "INSERT INTO hospitals(hospName, hospPassword) VALUES ('$hospName','$hospPassword') ";
    mysqli_query($conn, $sql_register_hosp);
    $_SESSION['hospitalName'] = $hospName;
    header("Location:login.php");
    exit();
    
}



if (isset($_REQUEST['register_recv'])) {

    $userName = $_REQUEST['userName'];
    $userPassword = $_REQUEST['userPassword'];
    $userBloodGroup = $_REQUEST['userBloodGroup'];


    $sql_register_recv = "INSERT INTO receivers(userName, userPassword,userBloodGroup) VALUES ('$userName','$userPassword','$userBloodGroup') ";
    mysqli_query($conn, $sql_register_recv);
    header("Location:login.php");
    exit();
    
}



if (isset($_REQUEST['login_enter'])) {

    $usertype = $_REQUEST['login_Usertype'];
    $user_login_name=$_REQUEST['login_UserName'];
    $loginID = $_REQUEST['loginID'];
    $loginPassword = $_REQUEST['loginPassword'];

    if($usertype==='hospitals'){
        $sql_login = "SELECT * FROM hospitals WHERE hospID='$loginID' AND hospName='$user_login_name' AND hospPassword='$loginPassword'";
        $result = mysqli_query($conn, $sql_login);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION["user"] = $user_login_name;
            header("Location:homepage_hospital.php");
            exit();
          }
        
    }elseif($usertype=='receivers'){
        $sql_login = "SELECT * FROM receivers WHERE userID='$loginID' AND userName='$user_login_name' AND userPassword='$loginPassword'";
        $result = mysqli_query($conn, $sql_login);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION["user"] = $user_login_name;
            header("Location:homepage_receiver.php");
            exit();
        }
    }
    
    
}

if (isset($_REQUEST['Upload'])) {

    $available_bloodGroup = $_REQUEST['available_bloodGroup'];

    $sql_bloodGroup_update = "INSERT INTO blood_samples(sample_provider,blood_sample) VALUES ('{$_SESSION['user']}','$available_bloodGroup') ";
    mysqli_query($conn, $sql_bloodGroup_update);
    header("Location:homepage_hospital.php");
    exit();

    
}


if(isset($_REQUEST['get_reqList'])){
    header("Location:req_list.php");
    exit();
}


$sql_sample = "SELECT * FROM blood_samples";
$query_sample = mysqli_query($conn, $sql_sample);



if (isset($_REQUEST['provider_list_ID'])) {

    $ID = $_REQUEST['provider_list_ID'];
    $sql = "SELECT * FROM blood_samples WHERE ID='$ID'";
    $query = mysqli_query($conn, $sql);
    foreach ($query as $q) {
        $request_provider = $q['sample_provider'];
        $request_bloodGroup = $q['blood_sample'];
        $sql_request_bloodGroup = "INSERT INTO requests(requester,hosp_provider,blood_group) VALUES('{$_SESSION['user']}','$request_provider','$request_bloodGroup')";
        mysqli_query($conn, $sql_request_bloodGroup);
        header("Location:logout.php");
        exit();
    }

}


$sql_request = "SELECT * FROM requests WHERE hosp_provider='{$_SESSION['user']}'";
$query_request = mysqli_query($conn, $sql_request);



if(isset($_REQUEST['logout'])){
    session_abort();
    header('login.php');
    exit();
}


?>