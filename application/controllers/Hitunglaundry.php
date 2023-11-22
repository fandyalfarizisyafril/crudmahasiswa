<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitunglaundry extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->load->library('laundry');
	}
    function index()
	{
        $this->laundry->beli('setrika','6.5',false,false);
        echo"<br/>"; 
        $this->laundry->beli('cuset','8',true,false);
        echo"<br/>";
        $this->laundry->beli('cuset','3.5',false,true);
    }
}
