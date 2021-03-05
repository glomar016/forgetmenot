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

	public function get_subtask($id)
	{
		$this->load->model('database_model');

		$result = $this->database_model->get_subtask($id, 't_subtask');
		// print_r($result);


		echo json_encode($result);
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

	public function get_dataset($userId)
	{
		$this->load->model('database_model');

		$completed = $this->database_model->get_completed_task($userId);

		$active = $this->database_model->get_active_task($userId);

		$data['completed'] = $completed[0]->completed;
		$data['active'] = $active[0]->active;

		echo json_encode($data);
	}
	
	public function view_upcoming_task($userId)
	{
		// loading model that needed
		$this->load->helper('date');
		$this->load->model('database_model');

		// $dateToday = mdate("%Y-%m-%d %h:%i:%s");

		$data = $this->database_model->view_upcoming_task($userId);

		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function add_sub_task()
	{
		// loading model that needed
		$this->load->model('database_model');

		$data = $this->input->post();
		echo $data['subTaskName'];
		
		$insert_data = array(
			'subtaskTitle' => $data['subTaskName'],
			'subtaskTask' => $data['id']
			 );

		$this->database_model->create($insert_data, "t_subtask");

	}

	public function complete_subtask()
	{
		$this->load->model('database_model');

		$id = $this->input->get('id');
		echo $id;

		$this->database_model->complete_subtask($id, "subtaskStatus", "t_subtask");
	}

	public function uncomplete_subtask()
	{
		$this->load->model('database_model');

		$id = $this->input->get('id');

		$this->database_model->uncomplete_subtask($id, "subtaskStatus", "t_subtask");
	}

	public function get_this_week($userId)
	{
		$this->load->model('database_model');

		$currDate = date('Y-m-d');
		$j = 0;

		for($i = 6; $i >= 0; $i--){
			$dateToGet = date("Y-m-d H:i:s", strtotime('-'.$i.'day', strtotime($currDate)));
			$dayOfDate = date("D", strtotime($dateToGet));
			$data['week'][$j] = $this->database_model->get_this_week($userId, $dateToGet);
			array_push($data['week'][$j], $dayOfDate. ' - '.date('F j', strtotime($dateToGet)));
			$j++;
		}
		// echo '<pre>';
		// print_r($data['week']);
		// echo '</pre>';

		echo json_encode($data);
	}

	public function get_month($userId)
	{
		$this->load->model('database_model');

		$data['taskCount'] = $this->database_model->get_month($userId);

		echo json_encode($data);

	}
}