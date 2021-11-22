<?php

class M_job extends CI_Model
{
    public function data_job()
    {
        $query = $this->db->query("SELECT * From Job WHERE Company='MDH' AND TipeJob='Project' AND StatusJob='Pelaksanaan' Or StatusJob='Pemeliharaan' ORDER BY JobNo DESC");
        return $query;
    }

	public function SimpanData($table, $data)
	{
		$this->db->insert($table, $data);
	}

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function backsub($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }

    //Cluster DATA PROYEK 

    public function dataproyek($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }

    public function UpdateDataProyek($table, $data, $where)
    {
         $this->db->update($table, $data, $where);
    }

    //end Data Proyek

    public function datakontrak($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();        
        return $query;
    }

	public function UpdateDataKontrak($JobNo=null)
	{
		$this->db->query("select CeklistLapangan from CeklistDok where JobNo = $JobNo and id = (select max(id) from CeklistDok where JobNo = $JobNo)");
		// $this->db->update($table, $data, $where);
	}

	public function dataAddendum($JobNo = null)
	{
		$query = $this->db->query("SELECT TOP 1 * FROM Job WHERE JobNo='$JobNo'")->result_object();
		return $query;
	}

	public function ceklistDoc($JobNo = null)
	{
		return $this->db->select('*')
				->from('CeklistDok')
				->where('JobNo', $JobNo)
				->get()->row_array();
	}

	public function addendum($JobNo=null)
	{
		$query = $this->db->get_where('Job', array('JobNo' => $JobNo))->result();
        return $query;
	}

	public function updateDRP($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}

    public function JaminanKontrak($JobNo = null)
    {
        $query = $this->db->get_where('JaminanKontrak', array('JobNo' => $JobNo))->result_object();
        return $query;
    }

    public function JaminanPelaksanaan($JobNo = null, $NamaJaminan = null)
    {
        $query = $this->db->query("SELECT * FROM JaminanKontrak WHERE JobNo=$JobNo AND NamaJaminan ='Jaminan Pelaksanaan'")->result_object();
        return $query;
    }

    public function JaminanUangMuka($JobNo = null, $NamaJaminan = null)
    {
        $query = $this->db->query("SELECT * FROM JaminanKontrak WHERE JobNo=$JobNo AND NamaJaminan ='Jaminan Uang Muka'")->result_object();
        return $query;
    }

    public function JaminanSisPel($JobNo = null, $NamaJaminan = null)
    {
        $query = $this->db->query("SELECT * FROM JaminanKontrak WHERE JobNo=$JobNo AND NamaJaminan ='Jaminan Sisa Pelaksanaan'")->result_object();
        return $query;
    }

    public function JaminanPemeliharaan($JobNo = null, $NamaJaminan = null)
    {
        $query = $this->db->query("SELECT * FROM JaminanKontrak WHERE JobNo=$JobNo AND NamaJaminan ='Jaminan Pemeliharaan'")->result_object();
        return $query;
    }

    public function simpan_JaminanKontrak($table, $data)
    {
        $this->db->insert($table,$data);
    }

    public function updateFHO($where,$table,$data)
    {
        $this->db->update($table, $data, $where);
         //return $this->db->get_where($table,$where);
    }

	//CLuster DIPA TERMIN

    public function dipa($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }
    public function TambahDipa($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function tbldipa($JobNo)
    {
        $query = "SELECT * FROM DIPA WHERE JobNo='$JobNo'";
        $eksekusi = $this->db->query($query);
        return $eksekusi->result();
    }

    public function DeleteDipa($where, $table)
    {
        // $this->db->where('id_Dipa', $id_Dipa);
        // $this->db->delete('DIPA');
        $this->db->where($where);
        $this->db->delete($table);
    }

	public function getRtermin ($JobNo = null)
	{
		$query = "SELECT * FROM RencanaTermin WHERE JobNo='$JobNo'";
		$eksekusi = $this->db->query($query);
		return $eksekusi->result();
	}

	public function getBrutoTermin($JobNo = null)
	{
		$query = "SELECT * FROM Job WHERE JobNo='$JobNo'";
		$eksekusi = $this->db->query($query);
		return $eksekusi->result();
	}


	public function hapus_data($where, $table)
	{;
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function GetBruto($JobNo)
	{
		$query = "SELECT TOP 1 Persentase FROM RencanaTermin WHERE JobNo='$JobNo'";
		$eksekusi = $this->db->query($query);
		return $eksekusi->result();
	}

	public function SumRTBruto($JobNo)
	{
		$this->db->select_sum('Bruto');
		$this->db->from('RencanaTermin');
		$this->db->where('JobNo', $JobNo);
		return $this->db->get('')->row();
	}
	public function SumRTNetto($JobNo)
	{
		$this->db->select_sum('Netto');
		$this->db->from('RencanaTermin');
		$this->db->where('JobNo', $JobNo);
		return $this->db->get('')->row();
	}

	public function getTblTerminInduk($JobNo = null)
	{
		$query = "SELECT * FROM TerminInduk WHERE JobNo='$JobNo' ORDER BY LedgerNo DESC  ";
		$eksekusi = $this->db->query($query);
		return $eksekusi->result();
	}

	public function getTblTerminMember($JobNo = null)
	{
		$query = "SELECT * FROM TerminMember WHERE JobNo='$JobNo' ORDER BY LedgerNo DESC  ";
		$eksekusi = $this->db->query($query);
		return $eksekusi->result();
	}

    public function tatakelola($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }

	public function GetTataKelola($JobNo=null)
	{
		$query = "SELECT * FROM Job WHERE JobNo='$JobNo'";
		$eksekusi = $this->db->query($query);
		return $eksekusi->result();
	}

	public function GetMpp($JobNo = null)
	{
		$query = "SELECT * FROM MPP WHERE JobNo='$JobNo'";
		$eksekusi = $this->db->query($query);
		return $eksekusi->result();
	}

    public function rap($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }


	function pencarian_rap($JobNo=null)
	{
		$query = "SELECT * FROM RAP WHERE JobNo='$JobNo'";
		$eksekusi = $this->db->query($query);
		return $eksekusi->result();
		// $this->db->where("Alokasi", $Alokasi);
		// $this->db->where("Versi", $Versi);
		// return $this->db->get("RAP");
	}


	public function GetAlokasi($UserID = null)
	{
	// 	$UserID = $this->session->userdata('MIS_LOGGED_ID');
	// 	$query = "select a.UserID, a.AksesAlokasi, b.Alokasi, b.Keterangan from
	// 			(select * from Login) as a
	// 			left outer join
	// 			(select * from Alokasi) as b
	// 			on b.Alokasi = a.AksesAlokasi
	// 			Where a.UserID = $UserID ";
		$query = "SELECT * FROM Alokasi";
		$eksekusi = $this->db->query($query);
		return $eksekusi->result();
	}

    public function pdpj($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }

    public function rppm($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }

    public function mos($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }

    public function spr($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }

    public function tambahspr($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }

    public function leaflet($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }

    public function ProgressFisik($JobNo = null)
    {
        $query = $this->db->get_where('Job', array('JobNo' => $JobNo))->row();
        return $query;
    }

	public function checkProjectFieldTeam($JobNo = null)
    {
		$query="select item from
		dbo.SplitString(
		(select CeklistLapangan from CeklistDok where JobNo = $JobNo and id = (select max(id) from CeklistDok where JobNo = $JobNo))
		, ',')";
		return $this->db->query($query)->result_object();		
	}

	public function checkProjectPCTeam($JobNo = null)
    {
		$query="select item  from
		dbo.SplitString(
		(select CeklistPC from CeklistDok where JobNo = $JobNo and id = (select max(id) from CeklistDok where JobNo = $JobNo))
		, ',')";
		return $this->db->query($query)->result_object();		
	}

	public function checkPHO1($JobNo = null)
    {
		$query="select item from
		dbo.SplitString(
		(select chkdokpho1 from job where JobNo = '$JobNo')
		, ',')";
		return $this->db->query($query)->result_object();		
	}

	public function checkPHO2($JobNo = null)
    {
		$query="select item from
		dbo.SplitString(
		(select chkdokpho2 from job where JobNo = '$JobNo')
		, ',')";
		return $this->db->query($query)->result_object();		
	}

}
