<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_controller extends CI_Controller {

	function index($pos=1){
		$this->load->model('Blog_model');
		$from = 5*($pos-1) + 1;
		$to = $from + 4;

		$result_set = $this->Blog_model->select($from, $to);
		$all_result_set = $this->Blog_model->select_all();

		// $sending_data = array("result"=> $result_set, "all_result"=> $all_result_set, "pos"=>$pos);

		$this->load->view('header');
		$this->load->view('newfront_page');
		$this->load->view('footer');
	}

	// function index($pos=1){
	// 	$this->load->model('Blog_model');
	// 	$from = 5*($pos-1) + 1;
	// 	$to = $from + 4;

	// 	$result_set = $this->Blog_model->select($from, $to);
	// 	$all_result_set = $this->Blog_model->select_all();

	// 	$sending_data = array("result"=> $result_set, "all_result"=> $all_result_set, "pos"=>$pos);

	// 	$this->load->view('header');
	// 	$this->load->view('front_page', $sending_data);
	// 	$this->load->view('footer');
	// }

	function pingFpage(){
		$this->load->model('Blog_model');
		$all_result_set = $this->Blog_model->select_all();
		$ans = $all_result_set->result_array();
		$yes = json_encode($ans);
		echo $yes;
	}

	function newIndex(){
		$this->load->view('header');
		$this->load->view('newfront_page');
		$this->load->view('footer');
	}

	function about_us(){
		$this->load->model('Blog_model');
		// $result_set = $this->Blog_model->selectab();
		// $sending_data = array("result"=> $result_set);
		$this->load->view('header');
		$this->load->view('about_us');
		$this->load->view('footer');
	}

	function read_more(){
		$this->load->model('Blog_model');
		
		$chai = $_GET['id'];
		$james = $this->input->ip_address();
		$james1 = $this->input->user_agent();
		$this->Blog_model->ip($james, $james1);

		if(isset($_GET['mvp'])){
			$mvp = $_GET['mvp'];
			if ($mvp) {
				$vmp = ++$mvp;
				$mvp1= $this->Blog_model->mvp($vmp, $chai);
			}
		}
	
		$kai = $_GET['comment_id'];
		$result_set = $this->Blog_model->select_id($chai);
		$result_set1 = $this->Blog_model->commentid($kai);
		$sending_data = array("result" => $result_set, "result1" => $result_set1);
		$this->load->view('header');
		$this->load->view('read_more', $sending_data);
		$this->load->view('footer');
	}


	function newReadmore(){
		$this->load->model('Blog_model');

		$james = $this->input->ip_address();
		$james1 = $this->input->user_agent();
		$this->Blog_model->ip($james, $james1);
		

		if(isset($_GET['mvp'])){
			$mvp = $_GET['mvp']; 
			$chai = $_GET['id'];
			if ($mvp) {
				$vmp = ++$mvp;
				$mvp1= $this->Blog_model->mvp($vmp, $chai);
			}
		}

		$this->load->view('header');
		$this->load->view('newread_more');
		$this->load->view('footer');
	}


	function allid(){
		$this->load->model('Blog_model');
		$rset = $this->Blog_model->select_allid();
		$sender = $rset->result();
		$yes = json_encode($sender);
		$this->output->set_content_type("application/json");
		$this->output->set_output($yes);
		// echo ($yes);
	}

	function allcid(){
		$this->load->model('Blog_model');
		$id = $_POST['id'];
		$rset = $this->Blog_model->spcomid($id);
		$send = $rset->result_array()[0]['comment_id'];
		// $sender = array('comment_id' => $send);
		$yes = json_encode($send);
		$this->output->set_content_type("application/json");
		$this->output->set_output($yes);
		// echo ($yes);
	}

	function selBid(){
		$this->load->model('Blog_model');
		$chai = $_GET['id'];
		$all_result_set = $this->Blog_model->select_id($chai);
		$ans = $all_result_set->result();
		// $jjp = array("mainm" => $ans );
		$yes = json_encode($ans);
		echo $yes;
	}

	function comBcid(){
		$this->load->model('Blog_model');
		$kai = $_GET['comment_id'];
		$all_result_set = $this->Blog_model->commentid($kai);
		$ans = $all_result_set->result();
		// $jjp = array("main" => $ans);
		$yes = json_encode($ans);
		echo $yes;
	}

	function header(){
		$this->load->view('header');
	}

	function footer(){
		$this->load->view('footer');
	}

	function connect(){
		$this->load->model('Blog_model');
		$this->Blog_model->connect();
		
	}

	function comment(){
		$this->load->model('Blog_model');
		$this->load->helper('date');
		if(isset($_POST['name']) && isset($_POST['comment_id']) ){
			$name = $_POST['name'];
			$comment = $_POST['text'];
			$comment_id = $_POST['comment_id'];
			$id = $_POST['id'];
			$comm_post_be = $_POST['post_title'];
			$datestring = '%Y-%m-%d';
            $time = time() ; 
            $date = mdate($datestring, $time);
			$saver = $this->Blog_model->commentsender($name, $date, $comment, $comment_id, $comm_post_be, $time);
			if($saver){
				$resultset = $this->Blog_model->get_num_comments($id);
				$comment_number = $resultset->result_array()[0]['comment_num'];
				$this->Blog_model->update_comm_num($id, $comment_number+1);

				redirect(base_url().'blog_controller/read_more?id='.$id.'&comment_id='.$comment_id);
			}else{
				die("unable to add comment please try again");
			}
		}else{
		echo('<br><br>!(.-.): Error no name or comment');
		}
	}	


	function newcomment(){
		$this->load->model('Blog_model');
		$this->load->helper('date');
		if(isset($_POST['name']) && isset($_POST['comment_id'])){
			$name = $_POST['name'];
			$comment = $_POST['text'];
			if($name!="" && $comment!= ""){
				$name = $_POST['name'];
				$comment = $_POST['text'];
				$comment_id = $_POST['comment_id'];
				$id = $_POST['id'];
				$comm_post_be = $_POST['post_title'];
				$datestring = '%Y-%m-%d';
	            $time = time() ; 
	            $date = mdate($datestring, $time);
				$saver = $this->Blog_model->commentsender($name, $date, $comment, $comment_id, $comm_post_be, $time);
				if($saver){
					$resultset = $this->Blog_model->get_num_comments($id);
					$comment_number = $resultset->result_array()[0]['comment_num'];
					$this->Blog_model->update_comm_num($id, $comment_number+1);

					// redirect(base_url().'blog_controller/read_more?id='.$id.'&comment_id='.$comment_id);
				}else{
					die("unable to add comment please try again");
				}	
			}else{
			$ans = array("err"=>"Error no name or comment");
			$error = json_encode($ans);
			echo ($error);
			}
		}else{
		$ans = array("err"=>"Error no name or comment");
		$error = json_encode($ans);
		echo ($error);
		}
	}	


	function ip_test(){
		$ip = $this->input->ip_address();
		echo("ip address: $ip");
	}

	function load_xhr(){
		echo("<br>was loaded from xhr<br>");
	}

	
}

?>