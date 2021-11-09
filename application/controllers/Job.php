<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Job extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array("M_job"));
    }

    public function uploadImgConf($dir = null) {
        $configImg['upload_path'] = './assets/files/'.$dir;
        $configImg['allowed_types'] = 'gif|jpg|png|jpeg';
        $configImg['max_size']  = '3000';
        $configImg['overwrite']  = TRUE;
        $configImg['encrypt_name']  = TRUE;
        return $this->load->library('upload', $configImg);
    }
    public function uploadFileConf($dir = null, $specialCondition = false) {
        $configFile['upload_path'] = './assets/filejaminan/'.$dir;
        if ($specialCondition) {
            $configFile['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        } else {
            $configFile['allowed_types'] = 'pdf';
        }
        $configFile['max_size']  = '10000';
        $configFile['overwrite']  = TRUE;
        $configFile['encrypt_name']  = TRUE;
        return $this->load->library('upload', $configFile);
    }
    public function removeDecimal($value) {
        $arr = explode('.', $value);
        $callback = 0;
        if (isset($arr[0])) {
            $callback = $arr[0];
        }
        return $callback;
    }



    public function index()
    {
        $data['judul'] = 'List Data Job';
        $data['Job'] = $this->M_job->data_job()->result();
		$data['judul'] = 'DASHBOARD';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/job", $data);
        $this->load->view('templates/footer');
    }

    public function sub_job($jobNo = null)
    {
        $where = array('JobNo' => $jobNo);
        $data['job'] = $this->M_job->edit_data($where, 'Job')->result();
        $data['judul'] = 'Action For Job';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('content/sub_job', $data);
        $this->load->view('templates/footer');
    }

    public function dataproyek($JobNo)
    {
        $this->load->model('m_job');
        $dataproyek = $this->m_job->dataproyek($JobNo);
        $data['dataproyek'] = $dataproyek;
		$data['judul'] = 'Data Proyek';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/dataproyek", $data);
        $this->load->view('templates/footer');
    }

    public function UpdateDataProyek()
    {
        $JobNo                   =$this->input->post('JobNo');
        $JobNm                   =$this->input->post('JobNm');
        $Lokasi                  =$this->input->post('Lokasi');
        $StatusJob               =$this->input->post('StatusJob');
        $CompanyId               =$this->input->post('CompanyId');
        $Deskripsi               =$this->input->post('Deskripsi');
        $Instansi                =$this->input->post('Instansi');
        $Kategori                =$this->input->post('Kategori');
        $RekPengeluaranPusat     =$this->input->post('RekPengeluaranPusat');
        $BankPengeluaranPusat    =$this->input->post('BankPengeluaranPusat');
        $RekPengeluaranProyek    =$this->input->post('RekPengeluaranProyek');
        $BankPengeluaranProyek   =$this->input->post('BankPengeluaranProyek');

		$Logo					 =$_FILES['Logo']['name'];
		if ($Logo=''){}else{
			$config['upload_path'] = './assets/doc';
			$config['allowed_types'] = 'png';
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('Logo')) {
				print_r($this->upload->display_errors());
				die;
			}else {
				$Logo=$this->upload->data('file_name');
			}
		}

        $data = array(
            'JobNm'                         => $JobNm,
            'Lokasi'                        => $Lokasi,
            'StatusJob'                     => $StatusJob,
            'CompanyId'                     => $CompanyId,
            'Deskripsi'                     => $Deskripsi,
            'Instansi'                      => $Instansi,
            'Kategori'                      => $Kategori,
            'RekPengeluaranPusat'           => $RekPengeluaranPusat,
            'BankPengeluaranPusat'          => $BankPengeluaranPusat,
            'RekPengeluaranProyek'          => $RekPengeluaranProyek,
            'BankPengeluaranProyek'         => $BankPengeluaranProyek,
			'Logo'							=> $Logo,
        );

        $where = array(
            'JobNo' => $JobNo
        );
        
        $this->M_job->UpdateDataProyek('Job',$data, $where);
        redirect('Job/dataproyek/'.($JobNo));
    }

    public function datakontrak($JobNo)
    {
        $this->load->model('m_job');
        $datakontrak = $this->m_job->datakontrak($JobNo);        
        $data['datakontrak'] = $datakontrak;

		$addendum = $this->m_job->addendum($JobNo);
		$data['addendum'] = $addendum;

        $JaminanPelaksanaan = $this->m_job->JaminanPelaksanaan($JobNo);
        $data['JaminanPelaksanaan'] = $JaminanPelaksanaan;

        $JaminanUangMuka = $this->m_job->JaminanUangMuka($JobNo);
        $data['JaminanUangMuka'] = $JaminanUangMuka;

        $JaminanSisPel = $this->m_job->JaminanSisPel($JobNo);
        $data['JaminanSisPel'] = $JaminanSisPel;

        $JaminanPemeliharaan = $this->m_job->JaminanPemeliharaan($JobNo);
        $data['JaminanPemeliharaan'] = $JaminanPemeliharaan;

		// $where = array('JobNo' => $JobNo);
		// $data['FHO'] = $this->M_job->updateFHO($where,'Job')->result();
		$dataAddendum = $this->m_job->dataAddendum($JobNo);
		$data['dataAddendum'] = $dataAddendum;

		$checkProjectFieldTeam =  $this->m_job->checkProjectFieldTeam($JobNo);
		// print_r($checkProject);
		$data['checkProjectFieldTeam'] = $checkProjectFieldTeam;

		$checkProjectPCTeam = $this->m_job->checkProjectPCTeam($JobNo);
		$data['checkProjectPCTeam'] = $checkProjectPCTeam;

		$checkPHO1 = $this->m_job->checkPHO1($JobNo);
		$data['checkPHO1'] = $checkPHO1;

		$checkPHO2 = $this->m_job->checkPHO2($JobNo);
		$data['checkPHO2'] = $checkPHO2;

        $data['judul'] = 'Data Kontrak / Addendum';
		// $db = $this->m_job->ceklistDoc['$JobNo'];
		// $db = 'Kontrak';
		// $checked = explode(',', $db);
		// $data['checked'] = $checked;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/datakontrak", $data);
        $this->load->view('templates/footer');
    }

	public function updateDataKontrak()
	{
		$JobNo 				= $this->input->post('JobNo');
		$NoKontrak			= $this->input->post('NoKontrak');
		$MasaPelaksanaan 	= $this->input->post('MasaPelaksanaan');
		$MasaPemeliharaan	= $this->input->post('MasaPemeliharaan');
		$RemarkAddendum		= $this->input->post('KeteranganAdd');
		$PrdAwal			= $this->input->post('TglAddendum1');
		$PrdAkhir			= $this->input->post('TglAddendum2');
		$PenawaranNetto		= $this->input->post('PenawaranNetto');
		$RingkasanPekerjaan	= $this->input->post('RingPek');
		$NamaPPK			= $this->input->post('NamaPPK');
		$AlamatPPK			= $this->input->post('AlamatPPK');

		$data = array(
			'NoKontrak'			=> $NoKontrak,
			'MasaPelaksanaan'	=> $MasaPelaksanaan,
			'MasaPemeliharaan'	=> $MasaPemeliharaan,
			'RemarkAddendum'	=> $RemarkAddendum,
			'PrdAwal'			=> $PrdAwal,
			'PrdAkhir'			=> $PrdAkhir,
			'PenawaranNetto'	=> $PenawaranNetto,
			'RingkasanPekerjaan'=> $RingkasanPekerjaan,
			'NamaPPK'			=> $NamaPPK,
			'AlamatPPK'			=> $AlamatPPK,
		);
		$where = array(
			'JobNo'		=> $JobNo
		);

		$this->M_job->UpdateDataProyek('Job',$data,$where);
		redirect('Job/datakontrak/'.($JobNo));
	}

	public function tambahAddendum($JobNo)
	{
		// $JobNo 			= $this->input->post('JobNo');
		// $NoKontrak			= $this->input->post('NoKontrak');
		// $TahunAnggaran		= $this->input->post('TA');
		// $HPS				= $this->input->post('HPS');
		// $Bruto				= $this->input->post('NilaiKontrak');
		// $AddendumKe		= $this->input->post('AddendumKe');
		// $TglKontrak		= $this->input->post('TglKontrak');		
		// $MasaPelaksanaan 	= $this->input->post('MasaPelaksanaan');
		// $MasaPemeliharaan	= $this->input->post('MasaPemeliharaan');
		// $RemarkAddendum	= $this->input->post('KeteranganAdd');
		// $PrdAwal			= $this->input->post('TglAddendum1');
		// $PrdAkhir			= $this->input->post('TglAddendum2');
		// $PenawaranNetto	= $this->input->post('PenawaranNetto');
		// $RingkasanPekerjaan = $this->input->post('RingPek');
		// $NamaPPK			= $this->input->post('NamaPPK');
		// $AlamatPPK			= $this->input->post('AlamatPPK');

		$data = array(
		'JobNo' 			=> $this->input->post('JobNo'),
		'NoKontrak'			=> $this->input->post('NoKontrak'),
		'TahunAnggaran'		=> $this->input->post('TA'),
		'HPS'				=> $this->input->post('HPS'),
		'Bruto'				=> $this->input->post('NilaiKontrak'),
		'AddendumKe'		=> $this->input->post('AddendumKe'),
		'TglKontrak'		=> $this->input->post('TglKontrak'),		
		'MasaPelaksanaan' 	=> $this->input->post('MasaPelaksanaan'),
		'MasaPemeliharaan'	=> $this->input->post('MasaPemeliharaan'),
		'RemarkAddendum'	=> $this->input->post('KeteranganAdd'),
		'PrdAwal'			=> $this->input->post('TglAddendum1'),
		'PrdAkhir'			=> $this->input->post('TglAddendum2'),
		'PenawaranNetto'	=> $this->input->post('PenawaranNetto'),
		'RingkasanPekerjaan'=> $this->input->post('RingPek'),
		'NamaPPK'			=> $this->input->post('NamaPPK'),
		'AlamatPPK'			=> $this->input->post('AlamatPPK'),
		);

		$this->M_job->SimpanData('Job',$data);
		redirect('Job/datakontrak/'. $JobNo);
	}


	public function checklistAction()
	{
		// echo "<pre>";
		// print_r($this->input->post());

		$JobNo 		= $this->input->post('JobNo');
		$UserEntry 	= $this->session->userdata('MIS_LOGGED_NAME');
		$TimeEntry	= date("Y-m-d H:i:s");

		$data = array(
			'JobNo'		=>$JobNo,
			'CeklistLapangan'	=>implode(',',$this->input->post('Cekfield',TRUE)),
			'CeklistPC'	=>implode(',',$this->input->post('Cekpc',TRUE)),
			'UserEntry'	=>$UserEntry,
			'TimeEntry' =>$TimeEntry,
		);

		// print_r($cekbox);

		$this->M_job->SimpanData('CeklistDok',$data);
		redirect('Job/datakontrak/'.$JobNo);

		// foreach($this->input->post('Ceklist') as $row => $value) {
		// 	// print_r($value);
		// }
	}

	public function SimpanPHO($JobNo = null)
	{
		$JobNo		= $this->input->post('JobNo');
		$NoPHO 		= $this->input->post('NoPHO');
		$TglPHO		= $this->input->post('TglPHO');

		$config['upload_path']   = './assets/FilePHO/';
		$config['allowed_types'] = 'pdf';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('FilePHO')) {
			print_r($this->upload->display_errors());
			die;
		} else {
			$FilePHO = $this->upload->data('file_name');
		}

		// $this->upload->do_upload('FilePHO');
		// $FilePHO = $this->upload->data('file_name');

		$data = array(
			'NoPHO' 		=>$NoPHO,
			'TglPHO'		=>$TglPHO,
			'PHOFile'		=>$FilePHO,
			'ChkDokPHO1'	=>implode(',',$this->input->post('CeklistPHO1',TRUE)),
			'ChkDokPHO2'	=>implode(',',$this->input->post('CeklistPHO2',TRUE)),
		);
		$where = array(
			'JobNo' => $JobNo
		);
		// print_r($data);
		// die();

		$this->M_job->UpdateDataProyek('Job', $data, $where);
		redirect('Job/datakontrak/' .($JobNo));
	}

    public function UpdateFHO()
    {
        $JobNo      =$this->input->post('JobNo');
        $NoFHO      =$this->input->post('NoFHO');
        $TglFHO     =$this->input->post('TglFHO');
		$EndNotification =$this->input->post('NotifLanjutTender');
		$config['upload_path']   = './assets/FileFHO/';
		$config['allowed_types'] = 'pdf';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('FileFHO')) {
			print_r($this->upload->display_errors());
			die;
		} else {
			$FileFHO = $this->upload->data('file_name');
		}

        $data = array(
            'NoFHO'     => $NoFHO,
            'TglFHO'    => $TglFHO,
			'FHOFile'	=> $FileFHO,
			'EndNotification' =>$EndNotification,
        );
        $where = array(
            'JobNo' => $JobNo
        );
        
        $this->M_job->UpdateDataProyek('Job',$data, $where);
        redirect('Job/datakontrak/'.($JobNo));
    }


	public function TambahRekNPWP()
	{
		$JobNo 			=$this->input->post('JobNo');
		$JobNm         	=$this->input->post('JobNm');
		$NPWPName       =$this->input->post('NPWPName');
		$NPWPCompany    =$this->input->post('NPWPCompany');
		$RekeningProyek =$this->input->post('RekeningProyek');
		$NPWPAddress    =$this->input->post('NPWPAddress');
        $BankProyek     =$this->input->post('BankProyek');

		$data = array(
			'JobNm'				=> $JobNm,
			'NPWPName'			=> $NPWPName,
			'NPWPCompany'		=> $NPWPCompany,
			'RekeningProyek'	=> $RekeningProyek,
			'NPWPAddress'		=> $NPWPAddress,
            'BankProyek'        => $BankProyek,
		);
		$where = array(
			'JobNo' => $JobNo
		);

		$this->M_job->updateDRP('Job',$data, $where);
		redirect('job/datakontrak/'.($JobNo));
	}

    public function JaminanKontrak($JobNo, $NamaJaminan)
    {
         $this->load->model('m_job');
        $JaminanKontrak = $this->m_job->JaminanKontrak($JobNo, $NamaJaminan);
        $data['JaminanKontrak'] = $JaminanKontrak;

    }

     public function JaminanPelaksanaan($JobNo, $NamaJaminan)
    {
         $this->load->model('m_job');
        $JaminanPelaksanaan = $this->m_job->JaminanPelaksanaan($JobNo, $NamaJaminan);
        $data['JaminanPelaksanaan'] = $JaminanPelaksanaan;

    }

    public function JaminanUangMuka($JobNo, $NamaJaminan)
    {
         $this->load->model('m_job');
        $JaminanUangMuka = $this->m_job->JaminanUangMuka($JobNo, $NamaJaminan);
        $data['JaminanUangMuka'] = $JaminanUangMuka;
    }

    public function JaminanSisPel($JobNo, $NamaJaminan)
    {
        $this->load->model('M_job');
        $JaminanSisPel = $this->m_job->JaminanSisPel($JobNo, $NamaJaminan);
        $data['JaminanSisPel'] = $JaminanSisPel;
    }

    public function JaminanPemeliharaan($JobNo, $NamaJaminan)
    {
        $this->load->model('M_job');
        $JaminanPemeliharaan = $this->m_job->JaminanPemeliharaan($JobNo, $NamaJaminan);
        $data['JaminanPemeliharaan'] = $JaminanPemeliharaan;
    }

    public function simpan_JaminanKontrak()
    {
        $JobNo              =$this->input->post('JobNo');
        $NamaJaminan        =$this->input->post('NamaJaminan');
        $NoJaminan          =$this->input->post('NoJaminan');
        $NilaiJaminan       =$this->input->post('NilaiJaminan');
        $MasaBerlaku        =$this->input->post('MasaBerlaku');
        $Filejaminan        =$this->input->post('FileJaminan');
        $UserEntry         =$this->session->userdata('MIS_LOGGED_NAME');
        $TimeEntry           =date("Y-m-d H:i:s");

        $Filejaminan        =$_FILES['Filejaminan']['name'];
        if ($Filejaminan=''){}else{
            $config['upload_path']          ='./asset/filejaminan';
            $config['allowed_types']        ='pdf';
            $config['max_size']             = 2000;

            $this->load->library('upload',$config);
			$this->upload->initialize($config);
            if(!$this->upload->do_upload('Filejaminan')){
				print_r($this->upload->display_errors());
				die;            
            }else{
                $Filejaminan=$this->upload->data('file_name');
            }
        }

        $data = array(
            'JobNo'         =>$JobNo,
            'NamaJaminan'   =>$NamaJaminan,
            'NoJaminan'     =>$NoJaminan,
            'NilaiJaminan'  =>$NilaiJaminan,
            'MasaBerlaku'   =>$MasaBerlaku,
            'UserEntry'     =>$UserEntry,
            'TimeEntry'     =>$TimeEntry,
            'Filejaminan'   =>$Filejaminan,
        );

        $this->M_job->simpan_JaminanKontrak('JaminanKontrak',$data);
        redirect('Job/datakontrak/'.($JobNo));
    }       

    public function dipa($JobNo)
    {
        $this->load->model('m_job');
        $datadipa = $this->m_job->dipa($JobNo);
        $data['dipa'] = $datadipa;

        $tbldipa = $this->m_job->tbldipa($JobNo);
        $data['tbldipa'] = $tbldipa;

		$TblRencanaTermin = $this->m_job->getRtermin($JobNo);
		$data['tblRtermin'] = $TblRencanaTermin;

		$getBruto = $this->m_job->GetBruto($JobNo);
		$data['GetBruto'] = $getBruto;


		$data['judul'] = 'Dipa';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/dipa", $data);
        $this->load->view('templates/footer');
    }

    public function TambahDipa()
    {
        $JobNo      = $this->input->post('JobNo');
        $Tahun      = $this->input->post('Tahun');
        $Budget     = str_replace(',', '',$this->input->post('Dipa'));
        $PaguBruto  = str_replace(',', '',$this->input->post('PaguBudget'));
        $UserEntry  = $this->session->userdata('MIS_LOGGED_NAME');
        $TimeEntry  =date("Y-m-d H:i:s");

        $data = array(
            'JobNo'     =>$JobNo,
            'Tahun'     =>$Tahun,
            'Budget'    =>$Budget,
            'PaguBudget'=>$PaguBruto,
            'UserEntry' =>$UserEntry,
            'TimeEntry' =>$TimeEntry,
        );
        $this->M_job->TambahDipa('DIPA', $data);
        redirect('Job/dipa/'.($JobNo));
    }

    public function editDipa()
    {
        $id_Dipa 	= $this->input->post('id_Dipa');
		$JobNo		= $this->input->post('JobNo');
		$Dipa 		= str_replace(',', '', $this->input->post('Dipa'));
		$Tahun		= $this->input->post('Tahun');
		$PaguBudget	= str_replace(',', '', $this->input->post('PaguBudget'));

		$data = array(
			'JobNo'			=> $JobNo,
			'Budget'		=> $Dipa,
			'Tahun'			=> $Tahun,
			'PaguBudget'	=>$PaguBudget,
		);
		$where = array(
			'id_Dipa'	=>$id_Dipa,
		);
		$this->M_job->UpdateDataProyek('DIPA', $data, $where);
		redirect('Job/dipa/'.($JobNo));
    }

     function DeleteDipa($JobNo,$id_Dipa)
    {	
        // $this->m_job->DeleteDipa($id_Dipa);
        $where = array('id_Dipa' => $id_Dipa);
        $this->M_job->DeleteDipa($where, 'DIPA');
        redirect('job/dipa/'.($JobNo));
    } 

	function addDPtermin()
	{
		$JobNo 		= $this->input->post('JobNo');
		$Jenis		= $this->input->post('JenisTermin');
		$TglRencana	= $this->input->post('tglRencanaTermin');
		$Uraian		= $this->input->post('UraianTermin');
		$Persentase	= $this->input->post('TxtPersentase');
		$Bruto		= $this->input->post('TxtA');
		

		

	}

	
    public function tatakelola($JobNo)
    {
        $this->load->model('m_job');
        $tatakelola = $this->m_job->tatakelola($JobNo);
        $data['tatakelola'] = $tatakelola;

        $data['judul'] = 'TaTa Kelola';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/tatakelola", $data);
        $this->load->view('templates/footer');
    }

    public function rap($JobNo)
    {
        $this->load->model('m_job');
        $rap = $this->m_job->rap($JobNo);
        $data['rap'] = $rap;

        $data['judul'] = 'RAP';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/rap", $data);
        $this->load->view('templates/footer');
    }

    public function pdpj($JobNo)
    {
        $this->load->model('m_job');
        $pdpj = $this->m_job->pdpj($JobNo);
        $data['pdpj'] = $pdpj;

        $data['judul'] = 'PD & PJ';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/pdpj", $data);
        $this->load->view('templates/footer');
    }

    public function rppm($JobNo)
    {
        // $config['base_url']     = site_url('Job/rppm');
        // $config['total_rows']   = $this->db->count_all('AbsenHarian');
        // $config['per_page']     = 10;
        // $config['uri_segment']  = 3;
        // $choice                 = $config["total_rows"] / $config['per_page'];
        // $config["num_links"]    = floor($choice);
        // $config['first_link']   = 'First';
        // $config['last_link']    = 'Last';
        // $config['next_link']    = 'Next';
        // $config['prev_link']    = 'Prev';
        // $config['full_tag_open']= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        // $config['full_tag_close']= '</ul><nav></div>';
        // $config['num_tag_open']  = '<li class="page-item"><span class="page-link">';
        // $config['num_tag_close'] = '</span></li>';
        // $config['cur_tag_open']  = '<li class="page-item active"><span class="page-link">';
        // $config['cur_tag_close']  = '</span></li>';
        // $config['next_tag_open']  = '<li class="page-item"><span class="page-link">';
        // $config['next_tagl_close']  = '<span aria-hidden="true">&raquo</span></li>';
        // $config['prev_tag_open']  = '<li class="page-item"><span class="page-link">';
        // $config['prev_tagl_close']  = '<span>Next</span></li>';
        // $config['first_tag_open']  = '<li class="page-item"><span class="page-link">';
        // $config['first_tagl_close']  = '<span></span></li>';
        // $config['last_tag_open']  = '<li class="page-item "><span class="page-link">';
        // $config['last_tagl_close']  = '<span></span></li>';




        // $this->pagination->initialize($config);
        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


        $this->load->model('m_job');
        $rppm = $this->m_job->rppm($JobNo);
        $data['rppm'] = $rppm;
        // $data['listrppm'] = $this->M_job->getlist_rppm($config["per_page"], $data['page'])->result();

        $data['judul'] = 'RPPM';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/rppm", $data);
        $this->load->view('templates/footer');
    }

    public function mos($JobNo)
    {
        $this->load->model('m_job');
        $mos = $this->m_job->mos($JobNo);
        $data['mos'] = $mos;

        $data['judul'] = 'Data MOS ( Material On Site )';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/mos", $data);
        $this->load->view('templates/footer');
    }

    public function spr($JobNo)
    {
        $this->load->model('m_job');
        $spr = $this->m_job->spr($JobNo);
        $data['spr'] = $spr;

        $data['judul'] = 'Daftar Surat Permintaan Material / Alat';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/spr", $data);
        $this->load->view('templates/footer');
    }

    public function Leaflet($JobNo)
    {
        $this->load->model('m_job');
        $leaflet = $this->m_job->leaflet($JobNo);
        $data['leaflet'] = $leaflet;

        $data['judul'] = 'Input leaflet Proyek';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/leaflet", $data);
        $this->load->view('templates/footer');
    }

    public function ProgressFisik($JobNo)
    {
        $this->load->model('m_job');
        $ProgressFisik = $this->m_job->ProgressFisik($JobNo);
        $data['ProgressFisik'] = $ProgressFisik;

        $data['judul'] = 'PROGRESS FISIK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view("content/jobentry/progressfisik", $data);
        $this->load->view('templates/footer');
    }    

    
}
