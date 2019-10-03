<?php 
	include('Model/NewModel.php');

	class NewController {

		public $show;

		public function __construct() {
			$this->show = new NewModel();
		}
		
		public function showdata() {
			$action = isset($_GET['action']) ? $_GET['action'] : '';
			$id     = isset($_GET['id']) ? $_GET['id'] : '';
			switch ($action) {
				case "":
					$this->index();
					break;
				case "detail":
					$this->detail($id);	
					break;	
				case "add":
					$this->add();
					break;	
				case "edit":
					$this->edit($id);
					break;
				case "update":
					$this->update($id);
					break;	
				case "delete":
					$this->delete($id);
					break;	
				default:
					echo "Không có kết quả";
					break;
			}
		}

		function index() {
			$ar_News = $this->show->listNews();
			include('View/index.php');
		}

		function detail($id) {
			$ar_Detail = $this->show->detailNews($id);
			include('View/detail.php');
		}

		function add() {
			$ar_Add = $this->show->insert();
			include('View/add.php');
		}

		function edit($id) {
			$ar_Edit = $this->show->detailNews($id);
			include('View/edit.php');
		}

		function update($id) {
			$ar_Update = $this->show->updateNew($id);
			HEADER('location:index.php');
		}

		function delete($id) {
			$ar_Del = $this->show->delNew($id);
			HEADER('location:index.php');
		}
	} 
?>
