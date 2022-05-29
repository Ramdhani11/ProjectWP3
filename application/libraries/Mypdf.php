<?php

defined('BASEPATH') or exit('No direct script access allowed');

require('vendor/autoload.php');
require_once('dompdf/autoload.inc.php');

use Dompdf\Dompdf;

class Mypdf
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
    }
    public function generate($view, $data = [], $filename = 'laporan', $paper = 'A4', $orientation = 'potrait')
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view . $data, TRUE);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        $dompdf->stream($filename . ".pdf", ['Attachment' => false]);
    }
}