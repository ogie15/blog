<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function connect(){
		$conn = $this->load->database("", true);
		return $conn;
	}

	function select_all(){
		$conn= $this->connect();
		// $values= $conn->query("SELECT * FROM `post_stuff`");
		$values= $conn->query("SELECT * FROM `post_stuff`");
		return $values;
	}

	function select_comm(){
		$conn= $this->connect();
		// $values= $conn->query("SELECT * FROM `post_stuff`");
		$values= $conn->query("SELECT * FROM `comments`");
		return $values;
	}

	function get_post_at($id){
		$conn= $this->connect();
		// $values= $conn->query("SELECT * FROM `post_stuff`");
		$values= $conn->query("SELECT * FROM `post_stuff` where `id` = $id");
		return $values;
	}

	function delete($id){
		$conn= $this->connect();
		// $values= $conn->query("SELECT * FROM `post_stuff`");
		$values= $conn->query("DELETE FROM `post_stuff` WHERE `post_stuff`.`id` = $id");
		return $values;
	}

	function deletecomm($id){
		$conn= $this->connect();
		// $values= $conn->query("SELECT * FROM `post_stuff`");
		$values= $conn->query("DELETE FROM `comments` WHERE `comments`.`id` = $id");
		return $values;
	}

	function addpostdb($mainpost, $post_title, $who, $date, $file, $comm_id, $comm_num, $mvp){
		$conn= $this->connect();
		$values = $conn->query("INSERT INTO `post_stuff` (`id`, `main_post`, `post_title`, `who_made_post`, `date_post`, `pic`, `comment_id`, `comment_num`, `mvp`) VALUES (NULL, '$mainpost', '$post_title', '$who', '$date', '$file', '$comm_id', '$comm_num', '$mvp')");
		return $values;
	}

	function get_num_comments($comment_id){
		$conn= $this->connect();
		$values= $conn->query("SELECT `comment_num` FROM `post_stuff` WHERE `comment_id` LIKE '%$comment_id%'");
		return $values;
	}

	// function selepostdb($comm_id){
	// 	$conn= $this->connect();
	// 	$values = $conn->query("SELECT `id` FROM `post_stuff` WHERE 'comment_id` = $comm_id");
	// 	return $values;
	// }

	// function addcommdb($who, $date, $maincomm ){
	// 	$conn= $this->connect();
	// 	$values = $conn->query("INSERT INTO `comments` (`id`, `made_by_who`, `date_made`, `main_comm`, `comment_id`) VALUES (NULL, '$who', '$date', '$maincomm', '1')");
	// 	return $values;

	// }

	function commview($id){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `comments` WHERE id = $id");
		return $values;
	}

	function allcompost($comment_id){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `comments` WHERE `comment_id` LIKE '%$comment_id%'");
		return $values;
	}

	function cBd($date){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `comments` WHERE `date_made` LIKE '%$date%'");
		return $values;
	}

	function cBn($name){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `comments` WHERE `made_by_who` LIKE '%$name%'");
		return $values;
	}

	function cBp($post){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `comments` WHERE `comm_post_be` LIKE '%$post%'");
		return $values;
	}

	function cBc($comment){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `comments` WHERE `main_comm` LIKE '%$comment%'");
		return $values;
	}

	function cBid($id){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `comments`  WHERE `id` LIKE '%$id%'");
		return $values;
	}

	function pinfull($id){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `post_stuff` WHERE id = $id");
		return $values;
	}

	function pBd($date){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `post_stuff` WHERE `date_post` LIKE '%$date%'");
		return $values;
	}

	function pBid($id){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `post_stuff` WHERE `id` LIKE '%$id%'");
		return $values;
	}

	function pBp($post){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `post_stuff` WHERE `main_post` LIKE '%$post%'");
		return $values;
	}

	function delacomm($comment_id){
		$conn= $this->connect();
		// $values= $conn->query("SELECT * FROM `post_stuff`");
		$values= $conn->query("DELETE FROM `comments` WHERE `comment_id` LIKE '%$comment_id%'");
		return $values;
	}

	function update_comm_num($new_val, $comment_id){
		$conn= $this->connect();
		$values= $conn->query("UPDATE `post_stuff` SET `comment_num` = '$new_val' WHERE `post_stuff`.`comment_id` LIKE '%$comment_id%'");
		return $values;
	}

	function smvp(){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `post_stuff` ORDER BY `post_stuff`.`mvp` DESC");
		return $values;
	}

	function admin(){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `login`");
		return $values;
	}

	function admindate($date, $username, $ntime){
		$conn= $this->connect();
		$values= $conn->query("UPDATE `login` SET `date` = '$date' WHERE `login`.`username` = '$username'");
		$values1= $conn->query("UPDATE `login` SET `time_sec` = '$ntime' WHERE `login`.`username` = '$username'");
		return $values1;
	}

	function recentcomm($oldd, $newd){
		$conn= $this->connect();
		$values = $conn->query("SELECT * FROM `comments` WHERE `time_sec` BETWEEN '$oldd' AND '$newd' ORDER BY `date_made` ASC");
		return $values;
	}


	function logdates($username){
		$conn= $this->connect();
		$values = $conn->query("SELECT `time_sec` FROM `login` WHERE `username` = '$username'");
		return $values;
	}

	function editpost($main, $post_title, $who, $date, $file, $comment_id){
		$conn=$this->connect();
		$values = $conn->query("UPDATE `post_stuff` SET `main_post` ='$main', `post_title` ='$post_title', `who_made_post` ='$who', `date_post` ='$date', `pic` ='$file' WHERE `comment_id` LIKE '$comment_id'");
		return $values;
	}

	function allpost($comment_id){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `post_stuff` WHERE `comment_id` ='$comment_id'");
		return $values;
	}
}

?>