<?php 
class M_kepegawaian extends CI_Model
{
	public function DataKaryawan($NIK = null)
	{
		$query=$this->db->query("SELECT * FROM Karyawan JOIN Login ON Karyawan.NIK = Login.NIK Where 'NIK' = $NIK")
		// query = $this->db->get_where('Karyawan', array('Username' => $$USername))->result_object();
  //       return $query;
	}
}
?>