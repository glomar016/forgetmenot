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
        WHEN taskStatus = '2' THEN '4'
        WHEN DATEDIFF(taskDueDate, NOW()) <= 0 THEN '1' 
        WHEN DATEDIFF(taskDueDate, NOW()) >= 1 AND DATEDIFF(taskDueDate, NOW()) <= 3 THEN '2'
        WHEN DATEDIFF(taskDueDate, NOW()) >= 4 AND DATEDIFF(taskDueDate, NOW()) <= 7 THEN '3'
        WHEN DATEDIFF(taskDueDate, NOW()) >= 8 THEN '3' 
        END AS `priority`
        FROM t_task
        WHERE taskStatus != '0'
        AND taskUser = $userId
        ORDER BY priority, taskDueDate");

        $data = $query->result();
        return $data;
    }
}