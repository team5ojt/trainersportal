<?php
class mainmodel extends CI_model
{
public function encpswd($pass)
{
return password_hash($pass, PASSWORD_BCRYPT);
}


	public function inreg($a,$b)
	{

$this->db->insert("login",$b);
$loginid=$this->db->insert_id();
$a['loginid']=$loginid;
  $this->db->insert("add_teacher",$a);
}
public function updateform($id)
  {
    $this->db->select('*');
    $qry=$this->db->where("add_teacher.id",$id);
    $qry=$this->db->get("add_teacher");
    return $qry;
  }


  public function updates($a,$id)
  {
        $this->db->select('*');
        $qry=$this->db->update("add_teacher",$a);
               return $qry;


	}
}
	?>