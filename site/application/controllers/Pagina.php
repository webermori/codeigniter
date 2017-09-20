<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$dados['titulo'] = "Weber Mori";
		$this->load->view('home', $dados);
	}

	public function clientes()
	{
		$dados['titulo'] = "Clientes - Weber Mori";
		$this->load->view('clientes', $dados);
	}

	public function servicos()
	{
		$dados['titulo'] = "Serviços - Weber Mori";
		$this->load->view('servicos', $dados);
	}

	public function sobre()
	{
		$dados['titulo'] = "Sobre - Weber Mori";
		$this->load->view('sobre', $dados);
	}

	public function contato()
	{
		$dados['titulo'] = "Contato - Weber Mori";
		$this->load->view('contato', $dados);
	}

}
