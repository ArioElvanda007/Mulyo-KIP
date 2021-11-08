<?php
class dashboardmod extends CI_Model{
    
    public function get_data($table)
    {
        return $this->db->get($table);
    }

	public function pelaksanaan($StatusJob = 'Pelaksanaan', $Company = 'MDH')
	{
		$this->db->select('*');
		$this->db->from('Job');
		$this->db->where('StatusJob',$StatusJob);
		$this->db->where('Company', $Company);
		return $this->db->get()->num_rows();
	}

	public function Proposal($StatusJob = 'Proposal')
	{
		$this->db->select('*');
		$this->db->from('Job');
		$this->db->where('StatusJob', $StatusJob);
		return $this->db->get()->num_rows();
	}

	public function Gagal($StatusJob = 'Gagal')
	{
		$this->db->select('*');
		$this->db->from('Job');
		$this->db->where('StatusJob', $StatusJob);
		return $this->db->get()->num_rows();
	}

	public function Pemeliharaan($StatusJob = 'Pemeliharaan', $Company = 'MDH')
	{
		$this->db->select('*');
		$this->db->from('Job');
		$this->db->where('StatusJob', $StatusJob);
		$this->db->where('Company', $Company);
		return $this->db->get()->num_rows();
	}
}
