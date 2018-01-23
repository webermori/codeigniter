<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('option_model', 'option');
	}

	public function index()
	{
		if ($this->option->get_option('setup_executado') == 1):
			//setup ok, mostrar tela para editar dados de setup
			redirect('setup/alterar','refresh');
		else:
			//não instalado, mostrar tela de setup
			redirect('setup/instalar','refresh');
		endif;
	}

	public function instalar() 
	{
		if($this->option->get_option('setup_executado') == 1):
			//setup ok, mostrar tela para editar dados do setup
			redirect('setup/alterar','refresh');
		endif;

		//Regras de Validação
		$this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email');
		$this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|min_length[6]|matches[senha]');

		//Verifica validação
		if ($this->form_validation->run() == FALSE) {
			if (validation_errors()):
				set_msg(validation_errors());
			endif;
		} else {
			set_msg('<p>Validação OK!</p>');
		}

		//carrega view
		$dados['titulo'] = 'Setup do sistema';
		$dados['h2'] = 'Setup do sistema';
		$this->load->view('painel/setup', $dados);
	}
}
