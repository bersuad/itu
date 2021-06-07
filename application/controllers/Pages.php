<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller 
{
	public function index()
	{
		$this->load->view('included/header');
		$this->load->view('pages/index');
		$this->load->view('included/footer');
	}

    public function packages()
	{
        $data['packages'] = $this->PackagesModel->get_packages();
        
		$this->load->view('included/header', $data);
		$this->load->view('pages/packages');
		$this->load->view('included/footer');
	}

    public function account()
	{
		$data['account'] = $this->AccountModel->getAccount();
		$this->load->view('included/header', $data);
		$this->load->view('pages/account');
		$this->load->view('included/footer');
	}

    public function wallet()
	{
		$data['wallet'] = $this->WalletModel->getWallet();
		$this->load->view('included/header', $data);
		$this->load->view('pages/wallet');
		$this->load->view('included/footer');
	}

	public function server()
	{
		$data['wallet'] = $this->WalletModel->getWallet();
		$this->load->view('included/header', $data);
		$this->load->view('pages/server_side');
		$this->load->view('included/footer');
	}

    public function recharge()
	{
		$data['recharges'] = $this->RechargeModel->getRecharge();
		$this->load->view('included/header', $data);
		$this->load->view('pages/recharge');
		$this->load->view('included/footer');
	}

    public function global_constants()
	{
		$data['global_constants'] = $this->ConstantModel->getConstants();
		$this->load->view('included/header', $data);
		$this->load->view('pages/global_constant');
		$this->load->view('included/footer');
	}

    public function countries()
	{
		$data['countries'] = $this->CountryModel->getCountries();
		$this->load->view('included/header', $data);
		$this->load->view('pages/countries');
		$this->load->view('included/footer');
	}
}
