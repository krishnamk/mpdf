<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Mpdf extends CI_Controller {
	public function index(){
		$html = $this->load->view('ewaybill',$data,true);
		//echo "<pre>";print_r($html);exit;
		$this->load->library('pdf');
		$pdf =$this->pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output($invoice['invoice_details']->invoice_no,'I');
	}
} 