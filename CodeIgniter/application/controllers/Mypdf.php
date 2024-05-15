<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH. 'vendor/autoload.php';
class Mypdf extends CI_Controller {


	public function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
        $html= $this->load->view('Mypdf','',true);
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

}