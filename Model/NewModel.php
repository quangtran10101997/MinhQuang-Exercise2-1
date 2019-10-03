<?php 
require_once('DbConnect.php');

class NewModel extends DbConnect {
	protected $conn;

	public function __construct() {
		$this->conn = $this->DbConnect();

	}

	function listNews() {
		$queryList  = "SELECT * FROM news";
		$arNews     = $this->conn->query($queryList);
		return $arNews;

	}

	function detailNews($id) {
		$queryDetail = "SELECT * FROM news WHERE id = '{$id}'";
		$arDetail    = $this->conn->query($queryDetail);
		return $arDetail;

	}
 
	function insert() {
		if(isset($_POST['submit'])){
			$name        = $_POST['name'];
			$detail      = $_POST['detail'];
			$image       = $_FILES['image']['name'];
			$tmp         = explode('.', $image);
			$endfile     = end($tmp);
			$newfile     = 'ST-' . time() . '.' . $endfile;
			$tmp_name    = $_FILES['image']['tmp_name'];
			$path_upload = 'public/img/' . $newfile;
			move_uploaded_file($tmp_name,$path_upload);
			$query       = " INSERT INTO news(title,description,image) VALUES('{$name}','{$detail}','{$newfile}') ";
			$resultadd   = $this->conn->query($query);
			if ($resultadd) {
				HEADER('location:index.php');
				die(); 
			} else {
				echo "Error";
			}
		}
	}

	function updateNew($id) {
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$detail = $_POST['detail'];
			$image  = $_FILES['image']['name'];
			if ($image == "") {
				$queryEdit = " UPDATE news SET title = '{$name}' , description = '{$detail}' WHERE id = '{$id}' "; 
				$resultEdit = $this->conn->query($queryEdit);
			} else {
				unlink('public/image/'. $image);
				$tmp = explode('.',$image);
				$endfile = end($tmp);
				$newfile = 'ST-'. time() . '.' . $endfile;
				$tmp_name = $_FILES['image']['tmp_name'];
				$path_upload = 'public/img/'. $newfile;
				move_uploaded_file($tmp_name,$path_upload);  
				$queryEdit = " UPDATE news SET title = '{$name}' , description = '{$detail}' , image = '{$newfile}' WHERE id = '{$id}' ";
				$resultEdit = $this->conn->query($queryEdit);
			} 
		}
	}	

	function delNew($id) {
		$queryDel  = "DELETE FROM news WHERE id = '{$id}'";
		$resultDel = $this->conn->query($queryDel);
	}
};
?>
