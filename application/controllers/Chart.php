<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	/**
	 * Controller class constructor
	 *
	 */
	public function __construct()
	{
		parent::__construct();

		if(!$this->session->username && $this->uri->segment(2)!='login' && $this->uri->segment(2)!='gologin') {
			redirect('/home/login', 'refresh');
		}
	}

	/**
	 * Method to output complete page with header and footer
	 *
	 */
	protected function __output($nview,$data=null)
	{
		$data['set'] = $this->crud->get('pengaturan',array('id_pengaturan' => '1'))->row();
		$this->load->view('header',$data);
		$this->load->view($nview,$data);
		$this->load->view('footer',$data);
	}

	/**
	 * Method to sanitize input data
	 *
	 * @return String
	 *
	 */
	protected function __sanitizeString($str)
	{
		// return filter_var($this->__sanitizeString( $str),FILTER_SANITIZE_STRING);
		//return $this->db->escape($this->__sanitizeString( $str));
		//return $this->db->escape(filter_var($str,FILTER_SANITIZE_STRING));
		return html_purify($str);
	}

	/**
	 * Default route for Home controller
	 * internal instance redirect to 'search' method
	 *
	 */
	public function index()
	{
		$data["title"] = "Grafik Chart";
		//Mulai Chart.js
		if ($this->session->tipe == "admin" || $this->session->tipe == "operator") {
			$query_chart1 =  $this->db->query("SELECT MONTH(tanggal) AS bulan, COUNT(*) AS count FROM data_arsip GROUP BY MONTH(tanggal) "); 
		} else {
			$query_chart1 =  $this->db->query("SELECT MONTH(tanggal) AS bulan, COUNT(*) AS count  FROM data_arsip  WHERE username='".$_SESSION['username']."' GROUP BY MONTH(tanggal)"); 
		}
   
        $result1 = $query_chart1->result();
        $chart1 = [];
    
        foreach($result1 as $row) {
              $chart1['label'][] = $row->bulan;
              $chart1['data'][] = (int) $row->count;
        }
        $data['chart1_data'] = json_encode($chart1);

		if ($this->session->tipe == "admin" || $this->session->tipe == "operator") {
			$query_chart2 =  $this->db->query("SELECT COUNT(d.lokasi) as count,l.nama_lokasi as lokasi FROM master_lokasi l left outer join data_arsip d on d.lokasi=l.id group by l.nama_lokasi"); 
		} else {	
			$query_chart2 =  $this->db->query("SELECT COUNT(d.lokasi) as count,l.nama_lokasi as lokasi FROM master_lokasi l left outer join data_arsip d on d.lokasi=l.id where d.username='".$_SESSION['username']."' group by l.nama_lokasi"); 
		}
   
        $result2 = $query_chart2->result();
        $chart2 = [];
   
        foreach($result2 as $row) {
              $chart2['label'][] = $row->lokasi;
              $chart2['data'][] = (int) $row->count;
        }
        $data['chart2_data'] = json_encode($chart2);


		if ($this->session->tipe == "admin" || $this->session->tipe == "operator") {
			$query_chart3 =  $this->db->query("SELECT COUNT(d.kode) as count,l.nama as nama FROM master_kode l left outer join data_arsip d on d.kode=l.id group by l.kode"); 
		} else {	
			$query_chart3 =  $this->db->query("SELECT COUNT(d.kode) as count,l.nama as nama FROM master_kode l left outer join data_arsip d on d.kode=l.id where d.username='".$_SESSION['username']."' group by l.kode"); 
		}
        $result3 = $query_chart3->result();
        $chart3 = [];
   
        foreach($result3 as $row) {
              $chart3['label'][] = $row->nama;
              $chart3['data'][] = (int) $row->count;
        }
        $data['chart3_data'] = json_encode($chart3);
		//akhir Chart.js

		$this->__output('chart',$data);
	}

}






