<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

	function connect(){
		$conn = $this->load->database("", true);
		return $conn;
	}

	function insert(){
		$conn= $this->connect();
		$result= $conn->query(" INSERT INTO `post_stuff` (`id`, `main_post`, `post_title`, `who_made_post`, `date_post`, `pic`, `comment_id`) VALUES (NULL, 'james is a bad boy', 'bad', 'james', 'fe', 'fef', '1')");
		echo ($result);
	}
	

	function select($from, $to){
		$conn= $this->connect();
		// $values= $conn->query("SELECT * FROM `post_stuff`");
		$values= $conn->query("SELECT * FROM `post_stuff` ORDER BY `date_post` ASC"); //WHERE `comment_id` BETWEEN $from AND $to"
		return $values;
	}

	
	function select_allid(){
		$conn= $this->connect();
		$values= $conn->query("SELECT id FROM `post_stuff` ORDER BY `date_post` DESC");
		return $values;
	}

	function spcomid($id){
		$conn= $this->connect();
		$values= $conn->query("SELECT comment_id FROM `post_stuff` WHERE `id` = $id");
		return $values;
	}

	function select_all(){
		$conn= $this->connect();
		// $values= $conn->query("SELECT * FROM `post_stuff`");
		$values= $conn->query("SELECT * FROM `post_stuff` ORDER BY `date_post` DESC");
		return $values;
	}

	function select_id($id){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `post_stuff` WHERE `id` = $id");
		return $values;
	}

	function commentid($commentid){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `comments` WHERE `comment_id` like '%$commentid%'");
		return $values;
	}
	
	
	function commentsender($made_by_who, $date ,$main_comm, $comment_id, $comm_post_be, $time_sec){
		$conn= $this->connect();
		$values= $conn->query("INSERT INTO `comments` (`id`, `made_by_who`, `date_made`, `main_comm`, `comment_id`, `comm_post_be`, `time_sec`) VALUES (NULL, '$made_by_who', '$date', '$main_comm', '$comment_id', '$comm_post_be', '$time_sec')"); 
		return $values;
	}

	function commentfshower($sha){
		$conn= $this->connect();
		$values= $conn->query("SELECT * FROM `post_stuff` WHERE `comment_num` = $sha");
	}

	function get_num_comments($id){
		$conn= $this->connect();
		$values= $conn->query("SELECT `comment_num` FROM `post_stuff` WHERE `id` = $id");
		return $values;
	}

	function update_comm_num($id, $new_val){
		$conn= $this->connect();
		$values= $conn->query("UPDATE `post_stuff` SET `comment_num` = '$new_val' WHERE `post_stuff`.`id` = $id;");
		return $values;
	}

	function mvp($mvp, $id){
		$conn= $this->connect();
		$values= $conn->query("UPDATE `post_stuff` SET `mvp` = '$mvp' WHERE `post_stuff`.`id` = $id;");
		return $values;
	}

	
	function ip($ip, $useragent){
		$conn= $this->connect();
		$values= $conn->query("INSERT INTO `iptable` (`id`, `ipadd`, `useragent`) VALUES  (NULL, '$ip', '$useragent') ");
		return $values;
	}
}


?>