<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_notif extends CI_Controller {

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
		// loading model that needed
		$this->load->helper('date');
		$this->load->model('database_model');

		// $dateToday = mdate("%Y-%m-%d %h:%i:%s");

		$data = $this->database_model->check_task_list();
        
        date_default_timezone_set("Asia/Manila");
        $date1 = date("Y-m-d H:i:s");
        $curr_date = date_create($date1);

		foreach($data as $row){
            $task_date = date_create($row->taskDueDate);
            $diff = date_diff($task_date, $curr_date);
            $diff = $diff->format('%d');

            $filename = base_url().'resources/dist/img/ForgetMeNot.png';
            $this->email->attach($filename);
            $cid = $this->email->attachment_cid($filename);
        

            if(intval($diff) == 0){
                $htmlContent = ' 
                    <html> 
                        <head> 
                            <title>ForgetMeNot</title> 
                        </head> 
                        <body style="background-color:#46d4e0; max-width:500px; margin:auto"> 
                        <br>
                        <div style="text-align: center;">
                            <img src="cid:' .$cid.'">
                            <h2 style="color:red">Your task is Almost Due</h2> 
                        </div>
                        <div style="color:black">
                                <h4 style="text-align: center; margin:0px;">Title: '. $row->taskTitle. '</h4>
                                <h4 style="text-align: center; margin:0px; white-space: pre-wrap;">Description: '. $row->taskDescription .'</h4>
                                <h4 style="text-align: center; margin:0px;">Due Date: '. date("F j, Y, g:i a", strtotime($row->taskDueDate)) .'</h4>
                        </div>
                        <br><br><br>
                        </body> 
                    </html>';
                    

                    $this->email->from('researchforgetmenot@gmail.com', 'ForgetMeNot');
                    $this->email->to($row->userEmail);

                    $this->email->subject('Your tasks is almost due (ForgetMeNot)');
                    $this->email->message($htmlContent);

                    $this->email->send();
            }
            
        }

	
	}
}
