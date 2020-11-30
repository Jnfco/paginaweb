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

   

    function visitas($id,$visitas){
        $sql ="update post set visitas = '".$visitas."'  where id = '".$id."';";
        $res = $this->db->query($sql);
        return $res;
    }

    function valorar($id,$valoracion){
        //$data =array("valoracion",$valoracion);
        //$this->db->where("id",$id);
        //$this->db->update("post",$data);

        $sql ="update post set valoracion = '".$valoracion."'  where id = '".$id."';";
        $res = $this->db->query($sql);
        return $res;

    }

    function obtenerPopulares(){
        $this->db->select("*");
        $this->db->order_by("valoracion","desc");
        $this->db->limit(2);
        return $this->db->get("post")->result();


    }

    function obtenerRecientes(){
        $this->db->select("*");
        $this->db->order_by("modificado","desc");
        $this->db->limit(2);
        return $this->db->get("post")->result();

    }
}
?>