<?php  
    class Login{

        //private $listOfUsers = array();
        //private $userId = 0;

        public function __construct($usernameData, $passwordData){
            $this->validate($usernameData) . "<br/>";
            $this->validate($passwordData) . "<br/>";
            $this->check($usernameData, $passwordData) . "<br/>";
        }

        function validate($data){
            if(isset($data) && is_string($data)){
                $data = strip_tags($data);
                $data = trim($data);
                $data = htmlentities($data);
                $data = htmlspecialchars($data);
                $data = stripslashes($data);
                return $data;
            }
            else{
                echo "Invalid data";
            }
        }

        function check($username, $password){
            if($username == "user1" && $password == "pass1"){
                echo '<script>alert("Access Allowed")</script><br/>';
                echo "Welcome back, " . $username;
            }
            else{
                echo '<script>alert("Access Denied")</script><br/>';
                echo "Invalid username and/or password<br/>";
                echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
            }
        }
    }
?>