<?php 
    require_once("../../seekerDB.php");
    $seeker_db = new SeekerDB();
    header("Content-Type: application/json; charset=utf-8");

    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        http_response_code(405);
        die(json_encode(array("status" => false, "error" => "This API only support POST method")));
    }

    $input = json_decode(file_get_contents("php://input"));
    
    if(is_null($input)){
        http_response_code(403);
        die(json_encode(array("status" => false, "error" => "JSON format only")));
    }
    if(!property_exists($input, "email") || !property_exists($input, "password")){
        http_response_code(400);
        die(json_encode(array("status" => false, "error" => "Insufficient input")));
    }

    $email = $input->email;
    $password = $input->password;

    if(empty($email) || empty($password)){
        http_response_code(400);
        die(json_encode(array("status" => false, "error" => "Insufficient input")));
    }

    $res = $seeker_db->login($email, $password);
    if($res['code'] != 0){
        http_response_code(500);
        die(json_encode(array("status" => false, "error" => $res['error'])));
    }
    else{
        $data = $res['data'];
        session_start();
        $_SESSION['accountType'] = 'seeker';
        $_SESSION['email'] = $data['SeekerEmail'];
        $_SESSION['name'] = $data['SeekerFirstName'].' '.$data['SeekerLastName'];
        $_SESSION['userId']= $data['SeekerId'];
        http_response_code(200);
        die(json_encode(array("status"=>true, "msg" => $res['msg'])));
    }
?>