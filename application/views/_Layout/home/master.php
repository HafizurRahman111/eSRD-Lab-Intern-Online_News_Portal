<?php

	//Get userinfo for session
	$user = array(
					'ipaddress' => $this->input->ip_address(),
					'os' => $this->agent->platform(),
					'session_id'=>session_id(),
					'user_id'=>$this->session->userid,
					'browser' => $this->agent->browser(),
					'version' => $this->agent->version(),
	            );

$id = $this->sesMod->add_session($user);

//user_activity for passing to DB
$page_url = current_url();
$this->session->page_url = $page_url;
$this->session->ses_id = $id;

$activity_data = [
	'title' => $page_title, 'pageurl' => $page_url, 'id' => $id
];
$this->db->where('id', $id);
$this->db->where('pageurl', $page_url);
$query1 = $this->db->get('user_activity');
if ($query1->num_rows() == 0) {
	$this->db->insert('user_activity', $activity_data);
} else {
	if ($page_title != $this->session->previous_page) {
		$this->db->set('number_times', '`number_times`+ 1', FALSE);
		$this->db->where('id', $id);
		$this->db->where('pageurl', $page_url);
		$success = $this->db->update('user_activity');
	}
}
$this->session->previous_page = $page_title;
//Load Master view

$this->load->view("_Layout/home/header_esrd.php");
$this->load->view($page);
$this->load->view("_Layout/home/footer_esrd.php");
$this->load->library('user_agent');
