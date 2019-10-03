<?php 
    class DbConnect {

		public function DbConnect() {
			$conn = new mysqli('localhost','root','','exercise2');
			$conn->set_charset('utf8');
			if(mysqli_connect_errno()){
				echo "Lỗi kết nối: " . mysqli_connect_error();
				die();
			}else{
				return $conn;
			}
		}	 
	}
?>