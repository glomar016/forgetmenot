<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('database_model');

		$data["data"] = $this->database_model->view('taskStatus', "t_task", 'taskDueDate');

		$this->load->view('user/home', $data);
	}
	
	public function add_task()
	{
		$this->load->model('database_model');

		$taskTitle = $this->input->post('taskTitle');
		$taskCategory = $this->input->post('taskCategory');
		$taskDescription = $this->input->post('taskDescription');
		$taskDueDate = $this->input->post('taskDueDate');

		// making data of assoc array to pass to model
		$data = array(
			"taskTitle" => $taskTitle, 
			"taskCategory" => $taskCategory,
			"taskDescription" =>$taskDescription,
			"taskDueDate" => $taskDueDate
		);

		$this->database_model->create($data, "t_task");
	}

	public function view_task()
	{
		// loading model that needed
		$this->load->helper('date');
				
		$this->load->model('database_model');

		$dateToday = mdate("%Y-%m-%d %h:%i:%s");

		$data["data"] = $this->database_model->view('taskStatus', "t_task", 'taskDueDate');

		echo json_encode($data);
	}

	public function get_task($id)
	{
		$this->load->model('database_model');
		$timeFormat = 'Y-m-d\TH:i';  

		$result = $this->database_model->get($id, 't_task');
		// print_r($result);

		$taskDueDate = new DateTime($result[0]->taskDueDate);
	
		$data[0] = array(
			"id" => $result[0]->id,
			"taskTitle" => $result[0]->taskTitle, 
			"taskCategory" => $result[0]->taskCategory,
			"taskDescription" => $result[0]->taskDescription, 
			"taskDueDate" => $taskDueDate->format($timeFormat)
		);

		// print_r($data);
		

		echo json_encode($data);
	}

	public function update_task()
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$taskTitle = $this->input->post('edittaskTitle');
		$taskCategory = $this->input->post('edittaskCategory');
		$taskDescription = $this->input->post('edittaskDescription');
		$taskDueDate = $this->input->post('edittaskDueDate');

				$insert_data = array(
					'taskTitle' => $taskTitle,
					'taskCategory' => $taskCategory,
					'taskDescription' => $taskDescription,
					'taskDueDate' => $taskDueDate
					 );
				
		$this->database_model->update($id, $insert_data, "t_task");
	}


	public function delete_task()
	{
		$this->load->model('database_model');

		$id = $this->input->get('id');

		$this->database_model->delete($id, "taskStatus", "t_task");

	}

	public function complete_task()
	{
		$this->load->model('database_model');

		$id = $this->input->get('id');

		$this->database_model->complete_task($id, "taskStatus", "t_task");

	}

	public function uncomplete_task()
	{
		$this->load->model('database_model');

		$id = $this->input->get('id');

		$this->database_model->uncomplete_task($id, "taskStatus", "t_task");

	}

}
