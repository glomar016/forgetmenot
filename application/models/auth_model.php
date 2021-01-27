<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    function register($tableName, $data)
    {
        return $this->db->insert($tableName, $data);
    }

    function login($data)
    {
        $condition = "userEmail =" . "'" . $data['userEmail'] . "' AND " . "userPassword =" . "'" . $data['userPassword'] . "'";
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return TRUE;
        } 
        else {
            return FALSE;
        }
    }

    function check_exist($email)
    {
        $this->db->where('userEmail', $email);
        $this->db->from('t_user');
        $query = $this->db->get();
        if ($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    function read_user_information($userEmail) {

        $condition = "userEmail =" . "'" . $userEmail . "'";
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } 
        else {
            return false;
        }
    }

}