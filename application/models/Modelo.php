<?php
class Modelo extends CI_Model{
    function obtenerPosts(){
        $sql = "select * from post";
        //$this->db->select('*');
        //$this->db->from('post');
        //$query = $this->db->get();
        //return $query->result_array();
        //return $this->db->query($sql);
        

        $this->db->select("*");
        return $this->db->get("post")->result();
    }

    function obtenerPostArray(){
        $sql = "select * from post";
        //$this->db->select('*');
        //$this->db->from('post');
        //$query = $this->db->get();
        //return $query->result_array();
        //return $this->db->query($sql);
        

        $this->db->select("*");
        return $this->db->get("post")->result_array();
    }

    function verPost($id){
        $this->db->select("*");
        $this->db->where("id",$id);
        return $this->db->get("post")->result();
    }
}
?>