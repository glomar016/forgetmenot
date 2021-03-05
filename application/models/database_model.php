<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database_model extends CI_Model
{

    // -- CRUD --
    // CREATING 
    function create($data, $tableName)
    {
        // inserting assoc array to db
        return $this->db->insert($tableName, $data);
    }

    // GET ALL COLUMN
    function view($statusColumn, $tableName, $orderByColumn)
    {
        $this->db->select("*");
        $this->db->from($tableName);
        $this->db->where($statusColumn . '!=', "0");
        $this->db->order_by($orderByColumn, "DESC");
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    // UPDATE
    function update($id, $data, $tableName)
    {
        $this->db->where("id", $id);
        return $this->db->update($tableName, $data);
    }

    // DISABLE
    function delete($id, $statusColumn, $tableName)
    {
        $this->db->set($statusColumn, '0');
        $this->db->where("id", $id);
        $this->db->update($tableName);
    }

    // DISABLE
    function delete_files($id, $statusColumn, $tableName)
    {
        $this->db->set($statusColumn, '');
        $this->db->where("id", $id);
        $this->db->update($tableName);
    }


    // GET SPECIFIC COLUMN
    function get($id, $tableName)
    {
        $this->db->select("*");
        $this->db->from($tableName);
        $this->db->where("id", $id);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    // -- END OF CRUD --

    function get_subtask($id, $tableName)
    {
        $this->db->select("*");
        $this->db->from($tableName);
        $this->db->where("subtaskTask", $id);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    // COMPLETE TASK
    function complete_task($id, $statusColumn, $tableName)
    {
        $this->db->set($statusColumn, '2');
        $this->db->where("id", $id);
        $this->db->update($tableName);
    }

    // UNCOMPLETE TASK
    function uncomplete_task($id, $statusColumn, $tableName)
    {
        $this->db->set($statusColumn, '1');
        $this->db->where("id", $id);
        $this->db->update($tableName);
    }

    // GET EDUCATION COLUMN
    function view_education($statusColumn, $tableName, $orderByColumn, $category)
    {
        $this->db->select("*");
        $this->db->from($tableName);
        $this->db->where($statusColumn . '!=', "0");
        $this->db->where('taskCategory', $category);
        $this->db->order_by($orderByColumn, "DESC");
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    // GET PERSONAL COLUMN
    function view_personal($statusColumn, $tableName, $orderByColumn, $category)
    {
        $this->db->select("*");
        $this->db->from($tableName);
        $this->db->where($statusColumn . '!=', "0");
        $this->db->where('taskCategory', $category);
        $this->db->order_by($orderByColumn, "DESC");
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    // GET WORK COLUMN
    function view_work($statusColumn, $tableName, $orderByColumn, $category)
    {
        $this->db->select("*");
        $this->db->from($tableName);
        $this->db->where($statusColumn . '!=', "0");
        $this->db->where('taskCategory', $category);
        $this->db->order_by($orderByColumn, "DESC");
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    //GET TASK LIST
    function view_task_list($userId)
    {
        $query = $this->db->query("SELECT 
        id
        , taskTitle
        , taskDescription
        , taskDueDate
		, DATE_FORMAT(taskDueDate,'%b %d, %Y %l:%i %p') AS `taskDueDateFormatted`
        , taskStatus
        , taskCategory
        , taskFiles
        , CASE 
        WHEN DATEDIFF(taskDueDate, NOW()) <= 0 THEN '1' 
        WHEN DATEDIFF(taskDueDate, NOW()) >= 1 AND DATEDIFF(taskDueDate, NOW()) <= 3 THEN '2'
        WHEN DATEDIFF(taskDueDate, NOW()) >= 4 AND DATEDIFF(taskDueDate, NOW()) <= 7 THEN '3'
        WHEN DATEDIFF(taskDueDate, NOW()) >= 8 THEN '3' 
        END AS `priority`
        FROM t_task
        WHERE taskStatus = '1'
        AND taskUser = $userId
        ORDER BY priority, taskDueDate");

        $data = $query->result();
        return $data;
    }

    function view_upcoming_task($userId)
    {
        $query = $this->db->query("SELECT 
        id
        , taskTitle
        , taskDueDate
		, DATE_FORMAT(taskDueDate,'%b %d, %Y %l:%i %p') AS `taskDueDateFormatted`
        , taskStatus
        , taskCategory
        FROM t_task
        WHERE taskStatus = '1'
        AND `taskDueDate` BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY)
        AND taskUser = $userId
        ORDER BY taskDueDate");

        $data = $query->result();
        return $data;

    }

    function view_complete_list($userId)
    {
        $query = $this->db->query("SELECT 
        id
        , taskTitle
        , taskDescription
        , taskDueDate
		, DATE_FORMAT(taskDueDate,'%b %d, %Y %l:%i %p') AS `taskDueDateFormatted`
        , taskStatus
        , taskCategory
        , taskFiles
        FROM t_task
        WHERE taskStatus = '2'
        AND taskUser = $userId
        ORDER BY taskDueDate");

        $data = $query->result();
        return $data;
    }

    function get_completed_task($userId){
        $this->db->select("COUNT(*) AS completed");
        $this->db->from('t_task');
        $this->db->where("taskUser", $userId);
        $this->db->where("taskStatus", '2');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    function get_active_task($userId){
        $this->db->select("COUNT(*) AS active");
        $this->db->from('t_task');
        $this->db->where("taskUser", $userId);
        $this->db->where("taskStatus", '1');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    // COMPLETE SUBTASK
    function complete_subtask($id, $statusColumn, $tableName)
    {
        $this->db->set($statusColumn, '2');
        $this->db->where("id", $id);
        $this->db->update($tableName);
    }

    // UNCOMPLETE SUBTASK
    function uncomplete_subtask($id, $statusColumn, $tableName)
    {
        $this->db->set($statusColumn, '1');
        $this->db->where("id", $id);
        $this->db->update($tableName);
    }

    function check_task_list(){
        $this->db->select("*, t_task.id as taskId");
        $this->db->from('t_task');
        $this->db->join('t_user', 't_user.id = t_task.taskUser', 'left');
        $this->db->where('taskDueDate >= CURDATE()');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    function get_this_week($userId, $dateRange){
        $query = $this->db->query("SELECT COUNT(*) AS count FROM t_task
        WHERE taskDueDate >= '$dateRange'
        AND taskDueDate < DATE_ADD('$dateRange', INTERVAL 1 DAY)
        AND taskUser = $userId
        AND taskStatus != 1");

        $data = $query->result();
        return $data;
    }

    function get_month($userId){
        $this->db->select("MONTH(taskDueDate) as month, COUNT(*) as count");
        $this->db->from("t_task");
        $this->db->where('YEAR(taskDueDate)', date("Y"));
        $this->db->where('taskStatus != 1');
        $this->db->where('taskUser', $userId);
        $this->db->group_by('MONTH(taskDueDate)');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }


}