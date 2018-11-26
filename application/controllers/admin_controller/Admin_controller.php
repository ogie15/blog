<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
	
	// function index(){
	// 	$this->load->view('admin/loginpage');
	// }

	// function footer(){
	// 	$this->load->view('admin/footer');
	// }

	function __construct(){
		parent:: __construct();
		$_SESSION['pending_dir'] = base_url()."admin_controller/Admin_controller/dashboard";
	}

	function header(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$rlcomm = $this->Admin_model->recentcomm($_SESSION['oldd'], time());
				$numpost1 = array('rlcomm' => $rlcomm);
				$this->load->view('admin/aheader', $numpost1);
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}	
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}


	function dashboard(){
		if(isset($_SESSION['pending_dir'])){
			$_SESSION['pending_dir'] = current_url();
		}else{
			$_SESSION['pending_dir'] = current_url();
		}
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$numpost = $this->Admin_model->select_all();
				$numcomm = $this->Admin_model->select_comm();
				$mvp = $this->Admin_model->smvp();
				$rcomm = $this->Admin_model->recentcomm($_SESSION['oldd'], time());
				$_SESSION['rcomm'] = $rcomm;
				$numpost1 = array('numpost' => $numpost, 'numcomm' => $numcomm, 'mvp' => $mvp, 'rcomm' => $rcomm);
				$this->header();
				$this->load->view('admin/dashboard', $numpost1);
				$this->load->view('admin/base');
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}	
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}


	function logout(){
		$_SESSION['grass'] = "false";
		$_SESSION['oldd'] = "false";
		redirect(base_url().'admin_controller/Admin_controller/index');
	}


	function comment(){
		if(isset($_SESSION['pending_dir'])){
			$_SESSION['pending_dir'] = current_url();
		}else{
			$_SESSION['pending_dir'] = current_url();
		}
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->header();
				$this->load->view('admin/comment');
				$this->load->view('admin/base');
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}	
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}

	function comload(){
		$this->load->model('admin/Admin_model');
		$numcomm = $this->Admin_model->select_comm();
		
		// $sess = $this->session->userdata('comment_id');
		// $sess = $this->session->postid ;
		// $passcommt = array('numcomm' => $numcomm);
		$passcommt = $numcomm->result();
		$passcommtt = json_encode($passcommt);
		$yes = $this->output->set_content_type('application/json');
		$this->output->set_output($passcommtt);
				
	}

	// 	function comment(){
	// 	if(isset($_SESSION['pending_dir'])){
	// 		$_SESSION['pending_dir'] = current_url();
	// 	}else{
	// 		$_SESSION['pending_dir'] = current_url();
	// 	}
	// 	if(isset($_SESSION['grass'])){
	// 		if($_SESSION['grass'] == "true"){
	// 			$this->load->model('admin/Admin_model');
	// 			$numcomm = $this->Admin_model->select_comm();
				
	// 			// $sess = $this->session->userdata('comment_id');
	// 			// $sess = $this->session->postid ;
	// 			$passcommt = array('numcomm' => $numcomm);
	// 			$this->header();
	// 			$this->load->view('admin/comment', $passcommt);
	// 			$this->load->view('admin/base');
	// 		}else{
	// 			redirect(base_url().'admin_controller/Admin_controller/index');
	// 		}	
	// 	}else{
	// 		redirect(base_url().'admin_controller/Admin_controller/index');
	// 	}
	// }

	function post(){
		if(isset($_SESSION['pending_dir'])){
			$_SESSION['pending_dir'] = current_url();
		}else{
			$_SESSION['pending_dir'] = current_url();
		}
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->header();
				$this->load->view('admin/post');
				$this->load->view('admin/base');
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}	
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}

	function pingPost(){
		$this->load->model('admin/Admin_model');
		$numpost = $this->Admin_model->select_all();
		// $numpost1 = array('numpost' => $numpost );
		$passcommt = $numpost->result();
		$passcommtt = json_encode($passcommt);
		$yes = $this->output->set_content_type('application/json');
		$this->output->set_output($passcommtt);
	}


	// function post(){
	// 	if(isset($_SESSION['pending_dir'])){
	// 		$_SESSION['pending_dir'] = current_url();
	// 	}else{
	// 		$_SESSION['pending_dir'] = current_url();
	// 	}
	// 	if(isset($_SESSION['grass'])){
	// 		if($_SESSION['grass'] == "true"){
	// 			$this->load->model('admin/Admin_model');
	// 			$numpost = $this->Admin_model->select_all();
	// 			$numpost1 = array('numpost' => $numpost );
	// 			$this->header();
	// 			$this->load->view('admin/post', $numpost1);
	// 			$this->load->view('admin/base');
	// 		}else{
	// 			redirect(base_url().'admin_controller/Admin_controller/index');
	// 		}	
	// 	}else{
	// 		redirect(base_url().'admin_controller/Admin_controller/index');
	// 	}
	// }


	function addpost(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$this->header();
				$this->load->view('admin/addpost');
				$this->load->view('admin/base');
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}
		}else{
			redirect(base_url().'admin_controller/Admin_controller/admin');
		}
	}


	function addcomm(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$this->header();
				$this->load->view('admin/addcomm');
				$this->load->view('admin/base');
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}


	function addpostdb(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$this->load->helper('string');
				$mainpost = $_POST['message'];
				$post_title = $_POST['title'];
				$who = $_POST['admin_name'];
				$datestring = '%Y-%m-%d';
		        $time = time() ; 
		        $this->load->helper('date');
		        $date = mdate($datestring, $time);
				$comment_id =random_string('md5');
				$config['upload_path']          = './assets/images/uploads';
		        $config['allowed_types']        = 'gif|jpg|png';
		        $config['max_size']             = 2000;
		        $config['max_width']            = 1900;
		        $config['max_height']           = 1200;
		        $config['overwrite']            = true;
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('fileToUpload')){
		      		echo ($this->upload->display_errors());
		        }else{
		            $data = $this->upload->data("file_name");
		            $data1 = $this->upload->data("file_path");
		            $data2= $this->upload->data("full_path");
		            echo ($data.'<br>');
		            echo ($data1.'<br>');
		            echo ($data2.'<br>');
		            $addpost = $this->Admin_model->addpostdb($mainpost, $post_title, $who, $date, $data, $comment_id, 0, 1);
						if($addpost){
							redirect(base_url().'admin_controller/Admin_controller/post');
						}else{
							die("unable to upload pls try again");
						}
	        	}		
		    }else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
  		//$postid = $this->Admin_model->selepostdb($comment_id); 
		// parent::addpostdb();
		// $this->load->library('session');
		// $this->session->set_userdata('postid', $postid);
	}


	function addcommdb(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$who = $_POST['admin_name'];
				$date = $_POST['date'];
				$maincomm = $_POST['message'];
				// $comm_id = 1
				$addcomm = $this->Admin_model->addcommdb($who, $date, $maincomm);
				if($addcomm){
						redirect(base_url().'admin_controller/Admin_controller/comment');
				}else{
					die("unable to add comment please try again");
				}
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}	
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}


	function deletepost(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$id = $_GET['id'];
				$come = $_GET['comment_id'];
				$post_resultset = $this->Admin_model->get_post_at($id);
				$name = $post_resultset->result_array()[0]['pic'];
				$delete = $this->Admin_model->delete($id);
				$delacomm = $this->Admin_model->delacomm($come);
				if($delacomm && $delete){
					redirect(base_url().'admin_controller/Admin_controller/post');
				}else{
					die("unable to delete post please try again");
				}
				$out = unlink('assets/images/uploads/'.$name);
				if($out){
					
				}else{
					echo("error deleting file");
				}
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}


	function deletecomm(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$id = $_GET['id'];
				$comment_id = $_GET['comment_id'];
				$delete = $this->Admin_model->deletecomm($id);
				if($delete){
					$resultset = $this->Admin_model->get_num_comments($comment_id);
					$comment_number = $resultset->result_array()[0]['comment_num'];
					$this->Admin_model->update_comm_num($comment_number-1, $comment_id);
					redirect(base_url().'admin_controller/Admin_controller/comment');
				}else{
					die("unable to delete comment please try again");
				}
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}


	function profile(){
		if(isset($_SESSION['pending_dir'])){
			$_SESSION['pending_dir'] = current_url();
		}else{
			$_SESSION['pending_dir'] = current_url();
		}
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->header();
				$this->load->view('admin/profile');
				$this->load->view('admin/base');
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}	
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}	
	}


	function viewcomm(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$chai = $_GET['id'];
				$viewcomm = $this->Admin_model->commview($chai);
				$sendcomm = array('viewcomm' => $viewcomm );
				$this->header();
				$this->load->view('admin/viewcomm', $sendcomm);
				$this->load->view('admin/base');
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}


	function viewcompost(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$chai = $_GET['comment_id'];
				$viewcomm = $this->Admin_model->allcompost($chai);
				$sendcomm = array('viewcomm' => $viewcomm );
				$this->header();
				$this->load->view('admin/viewcompost', $sendcomm);
				$this->load->view('admin/base');
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}


	function pinfull(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$id = $_GET['id'];
				$pinfull = $this->Admin_model->pinfull($id);

				$mainpost = $pinfull->result_array()[0]["main_post"];
				$title = ($pinfull->result_array()[0]["post_title"]);
				$who = ($pinfull->result_array()[0]["who_made_post"]);
				$date = ($pinfull->result_array()[0]["date_post"]);
				$comment_num = ($pinfull->result_array()[0]["comment_num"]);
				$pic = ($pinfull->result_array()[0]["pic"]);

				$pfull = array("mainpost" => $mainpost, "title" =>$title , "who" => $who, "date" =>$date , "commentnum" => $comment_num, "pic" => $pic);
				$jparse = json_encode($pfull);
				$this->output->set_content_type("application/json");
				$this->output->set_output($jparse);



			// 	$this->header();
			// 	$this->load->view('admin/pinfull', $sendit);
			// 	$this->load->view('admin/base');
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}	
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}

	function test(){
		echo($_SESSION['testing']);
	}

	function index(){
		$this->load->model('admin/Admin_model');
		$this->load->helper('date');
		$datestring = '%Y-%m-%d';
        $time = time() ;
        $ntime = time() ;
        $date = mdate($datestring, $time);
        // $ndate = ($datestring, $ntime);
        if (isset($_POST['username']) && isset($_POST['password'])){
        	$inusername = $_POST['username'];
			$inpassword = $_POST['password'];
	        // username val
			$inusername = trim($inusername);
			$inusername = stripslashes($inusername);
			$inusername = htmlspecialchars($inusername);
			// // password val
			$inpassword = trim($inpassword);
			$inpassword = stripslashes($inpassword);
			$inpassword = htmlspecialchars($inpassword);
			// //check both
			$admin = $this->Admin_model->admin();
			foreach ($admin->result_array() as $row){
				if ($row['username']==$inusername && $row['password']==$inpassword){
					$_SESSION['grass'] = "true";
					$logdates = $this->Admin_model->logdates($inusername);
					$oldd = $logdates->result_array()[0]['time_sec'];
					$_SESSION['oldd'] =$oldd;
					$this->Admin_model->admindate($date, $inusername, $ntime);
					redirect($_SESSION['pending_dir']);
				}else{
					$this->load->view('admin/loginpage');
				}
			}
		}else{
			$this->load->view('admin/loginpage');		
		}	
	}


	function veditpost(){
		// $post_title = $_GET['title'];
		// $who = $_GET['who'];
		// $main= $_GET['main'];
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$comment_id = $_GET['comment_id'];
				$this->load->model('admin/Admin_model');
				$send = $this->Admin_model->allpost($comment_id);
				// $sendpost = array('send' => $send);
				$mainpost = trim($send->result_array()[0]["main_post"]);
				$title = trim($send->result_array()[0]["post_title"]);
				$who = trim($send->result_array()[0]["who_made_post"]);
				$cmd_id = trim($send->result_array()[0]["comment_id"]);

				$data_array = json_encode(array("content" => $mainpost, "title" => $title, "who" => $who, "cmd_id" => $cmd_id));
				$this->output->set_content_type("application/json");
				$this->output->set_output($data_array);

				// echo(trim($mainpost));
				// $this->header();
				// $this->load->view('admin/editpost', $sendpost);
				// $this->load->view('admin/base');
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}	
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}


	function editpostdb(){
		if(isset($_SESSION['grass'])){
			if($_SESSION['grass'] == "true"){
				$this->load->model('admin/Admin_model');
				$post_title = $_POST['title'];
				$who = $_POST['who'];
				$main= $_POST['main'];
				$comment_id = $_POST['comment_id'];
				$this->load->helper('date');
				$datestring = '%Y-%m-%d';
				$time= time();
				$date = mdate($datestring, $time);
				$config['upload_path']          = './assets/images/uploads';
		        $config['allowed_types']        = 'gif|jpg|png';
		        $config['max_size']             = 2000;
		        $config['max_width']            = 1900;
		        $config['max_height']           = 1200;
		        $config['overwrite']            = true;
		        $this->load->library('upload', $config);
		        if ( ! $this->upload->do_upload('fileToUpload')){
		      		echo ($this->upload->display_errors());
		        }else{
		            $data = $this->upload->data("file_name");
		            $data1 = $this->upload->data("file_path");
		            $data2= $this->upload->data("full_path");
		            echo ($data.'<br>');
		            echo ($data1.'<br>');
		            echo ($data2.'<br>');
		            $addpost1 =$this->Admin_model->editpost($main, $post_title, $who, $date, $data, $comment_id);
						if($addpost1){
							redirect(base_url().'admin_controller/Admin_controller/post');
						}else{
							die("unable to upload pls try again");
						}
				}
			}else{
				redirect(base_url().'admin_controller/Admin_controller/index');
			}	
		}else{
			redirect(base_url().'admin_controller/Admin_controller/index');
		}
	}

	function getPBid(){
		$id = $_POST['id'];
		$this->load->model('admin/Admin_model');
		$resultset = $this->Admin_model->pBid($id);
		$resultset = $resultset->result_array();
		$ans = json_encode($resultset);
		$this->output->set_content_type('application/json');
		$this->output->set_output($ans);
	}

	function getPBd(){
		$date = $_POST['date'];
		$this->load->model('admin/Admin_model');
		$resultset = $this->Admin_model->pBd($date);
		$resultset = $resultset->result_array();
		$ans = json_encode($resultset);
		$this->output->set_content_type('application/json');
		$this->output->set_output($ans);
	}

	function getPBp(){
		$post = $_POST['post'];
		$this->load->model('admin/Admin_model');
		$resultset = $this->Admin_model->pBp($post);
		$resultset = $resultset->result_array();
		$ans = json_encode($resultset);
		$this->output->set_content_type('application/json');
		$this->output->set_output($ans);
	}

	function getCBd(){
		$date= $_POST['date'];
		$this->load->model('admin/Admin_model');
		$resultset = $this->Admin_model->cBd($date);
		$resultset = $resultset->result_array();
		$ans = json_encode($resultset);
		$this->output->set_content_type('application/json');
		$this->output->set_output($ans);
	}

	function getCBn(){
		$name= $_POST['name'];
		$this->load->model('admin/Admin_model');
		$resultset = $this->Admin_model->cBn($name);
		$resultset = $resultset->result_array();
		$ans = json_encode($resultset);
		$this->output->set_content_type('application/json');
		$this->output->set_output($ans);
	}

	function getCBp(){
		$post= $_POST['post'];
		$this->load->model('admin/Admin_model');
		$resultset = $this->Admin_model->cBp($post);
		$resultset = $resultset->result_array();
		$ans = json_encode($resultset);
		$this->output->set_content_type('application/json');
		$this->output->set_output($ans);
	}

	function getCBc(){
		$comment= $_POST['comment'];
		$this->load->model('admin/Admin_model');
		$resultset = $this->Admin_model->cBc($comment);
		$resultset = $resultset->result_array();
		$ans = json_encode($resultset);
		$this->output->set_content_type('application/json');
		$this->output->set_output($ans);
	}

	function getCBid(){
		$id= $_POST['id'];
		$this->load->model('admin/Admin_model');
		$resultset = $this->Admin_model->cBid($id);
		$resultset = $resultset->result_array();
		$ans = json_encode($resultset);
		$this->output->set_content_type('application/json');
		$this->output->set_output($ans);
	}

}

