<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

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

		$this->load->view('user/home');
	}

	public function add_task($userId)
	{
		// loading model that needed
		$this->load->model('database_model');

		$taskTitle = $this->input->post('taskTitle');
		$taskCategory = $this->input->post('taskCategory');
		$taskDescription = $this->input->post('taskDescription');
		$taskDueDate = $this->input->post('taskDueDate');
		$taskFiles = $this->input->post('taskFiles');

		if(($_FILES["taskFiles"]["name"]))
		{
			$config['upload_path'] = './resources/files';
			$config['allowed_types'] = 'pdf|doc|docx|xl|xlsx|word|txt|xml';
			
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('taskFiles'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$insert_data = array(
					'taskUser' => $userId,
					'taskTitle' => $taskTitle,
					'taskCategory' => $taskCategory,
					'taskDescription' => $taskDescription,
					'taskDueDate' => $taskDueDate,
                    'taskFiles' => $data['file_name']
                    // 'path' => $data['full_path']
					 );

				print_r($insert_data);

				$this->database_model->create($insert_data, "t_task");
			}
		}
		else{
			$insert_data = array(
				'taskUser' => $userId,
				'taskTitle' => $taskTitle,
				'taskCategory' => $taskCategory,
				'taskDescription' => $taskDescription,
				'taskDueDate' => $taskDueDate
				// 'path' => $data['full_path']
				 );
			$this->database_model->create($insert_data, "t_task");
		}
	}


	public function view_task($userId)
	{
		// loading model that needed
		$this->load->helper('date');
		$this->load->model('database_model');

		// $dateToday = mdate("%Y-%m-%d %h:%i:%s");

		$data = $this->database_model->view_task_list($userId);

		header('Content-Type: application/json');
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
			"taskFiles" => $result[0]->taskFiles,
			"taskDueDate" => $taskDueDate->format($timeFormat)
		);

		// print_r($data);


		echo json_encode($data);
	}

	public function update_task($userId)
	{
		// loading model that needed
		$this->load->model('database_model');

		// getting data from input
		$id = $this->input->post('id');
		$taskTitle = $this->input->post('edittaskTitle');
		$taskCategory = $this->input->post('edittaskCategory');
		$taskDescription = $this->input->post('edittaskDescription');
		$taskDueDate = $this->input->post('edittaskDueDate');
		$taskFiles = $this->input->post('edittaskFiles');

		if(($_FILES["edittaskFiles"]["name"]))
		{
			$config['upload_path'] = './resources/files';
			$config['allowed_types'] = 'pdf|doc|docx|xl|xlsx|word|txt|xml';
			
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('edittaskFiles'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$insert_data = array(
					'taskUser' => $userId,
					'taskTitle' => $taskTitle,
					'taskCategory' => $taskCategory,
					'taskDescription' => $taskDescription,
					'taskDueDate' => $taskDueDate,
                    'taskFiles' => $data['file_name']
                    // 'path' => $data['full_path']
					 );

				print_r($insert_data);

				$this->database_model->update($id, $insert_data, "t_task");
			}
		}
		else{
			$insert_data = array(
				'taskUser' => $userId,
				'taskTitle' => $taskTitle,
				'taskCategory' => $taskCategory,
				'taskDescription' => $taskDescription,
				'taskDueDate' => $taskDueDate
				// 'path' => $data['full_path']
				 );
			$this->database_model->update($id, $insert_data, "t_task");
		}
	}


	public function delete_task()
	{
		$this->load->model('database_model');

		$id = $this->input->get('id');

		$this->database_model->delete($id, "taskStatus", "t_task");
	}

	public function delete_files()
	{
		$this->load->model('database_model');

		$id = $this->input->get('id');

		$this->database_model->delete_files($id, "taskFiles", "t_task");
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