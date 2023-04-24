<?php
    require_once("connection.php");
    require_once("utils.php");
    class CompanyDB{
        private mysqli $conn;
        public function __construct(){
            $this->conn = get_connection();
        }

        public function register($company_name, $email, $description ,$create_date, $password, $country, $province, $companyType){
            $emailExist = $this->email_exist($email);
            if($emailExist){
                return array("code" => 2, "error" => "Email has already existed");
            }
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $token = md5($email.'+'.rand(0,100));
            $sql = "insert into company (CompanyName, CompanyEmail, CompanyDescription ,DateCreated, CompanyPassword, CompanyCountry, CompanyProvince, activateToken, CompanyTypeId) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt= $this->conn->prepare($sql);
            $stmt->bind_param("ssssssssi", $company_name, $email, $description ,$create_date, $hashed_password, $country, $province, $token, $companyType);
            if(!$stmt->execute()){
                return array("code" => 1, "error" => "Could not connect to database");
            }
            send_activation_email($email, $token);
            return array("code" => 0, "msg"=> "Company account created successfully");
        }

        public function activate_account($email, $token){
            $sql = "select * from company where CompanyEmail = ? AND activateToken = ? AND activated = 0";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ss", $email, $token);
            if(!$stmt->execute()){
                return array("code" => 1, "error" => "There has been an error occurred");
            }
            $res = $stmt->get_result();
            if($res->num_rows == 0){
                return array("code" => 2, "error"=> "Account is already activated or email or token does not exist");
            }
            $sql = "update company set activated = 1, activateToken = '' where CompanyEmail = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $email);
            if(!$stmt->execute()){
                return array("code" => 1, "error" => "There has been an error occurred");
            }
            return array("code" => 0, "msg" => "Account activated successfully");
        }

        public function login($email, $password){
            $sql = "select * from company where CompanyEmail = ? and activated = 1";
            $stmt =  $this->conn->prepare($sql);
            $stmt->bind_param("s", $email);
            if(!$stmt->execute()){
                return array("code" => 1, "error" => "There has been an error occurred");
            }
            $res = $stmt -> get_result();
            if($res->num_rows != 1){
                return array("code" => 2, "error" => "Email does not exist or is not activated");
            }
            $hashed_password = '';
            $data = null;
            while($row = $res->fetch_assoc()){
                $hashed_password = $row['CompanyPassword'];
                $data = $row;
            }
            if(!password_verify($password, $hashed_password)){
                return array("code" => 3, "error" => "Password is not correct");
            }
            return array("code" => 0, "msg" => "Login successfully", "data" => $data);
        }

        private function email_exist($email){
            $sql = "select * from seeker where SeekerEmail = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $email);
            if(!$stmt->execute()){
                return null;
            }
            $res = $stmt->get_result();
            if($res -> num_rows >=1 ){
                return true;
            }
            $sql = "select * from company where CompanyEmail = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $email);
            if(!$stmt->execute()){
                return null;
            }
            $res = $stmt->get_result();
            if($res -> num_rows >=1 ){
                return true;
            }
            return false;
        }
    }
?>