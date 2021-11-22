<?php

class User_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('tbl_user')->result_array();
    }

    public function userEdit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function userUpdate($where, $table, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function getUserId($id)
    {
        return $this->db->get_where('tbl_user', ['id_user' => $id])->row();
    }

    public function getOleh($id)
    {
        return $this->db->get_where('tbl_user', ['id_user' => $id])->row();
    }
}