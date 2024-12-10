<?php 
    class Connection{
        var $conn;

        function __construct()
        {
            //Thong so ket noi CSDL
            $severname ="localhost:81"; 
            $username ="root";
            $password =""; 
            $db_name ="shopdt";

            //Tao ket noi CSDL
            $this->conn = new mysqli($severname,$username,$password,$db_name);
            $this->conn->set_charset("utf8");

            //check connection
            if ($this->conn->connect_error) {
		        die("Connection failed: " . $this->conn->connect_error);
		    }
        }
    }

?>