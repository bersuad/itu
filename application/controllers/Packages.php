<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages extends CI_Controller 
{
    public function add_new()
    {
		$p_name 	    = $this->input->post('p_name');
		$p_amharic_name = $this->input->post('p_amharic_name');
		$p_amount 		= $this->input->post('p_amount');

        $value_list = array(
            "package_name"				=> $p_name,
            "package_name_amharic"	 	=> $p_amharic_name,
            "package_amount" 			=> $p_amount,
        );

        $this->PackagesModel->newItem($value_list);
		
		$this->session->set_flashdata('message', 'Package Registred');
		echo $this->session->flashdata('message');
		redirect('packages');
    }

    public function edit($id)
    {
        $p_name 	    = $this->input->post('p_name');
		$p_amharic_name = $this->input->post('p_amharic_name');
		$p_amount 		= $this->input->post('p_amount');

        $data = array(
            "package_name"				=> $p_name,
            "package_name_amharic"	 	=> $p_amharic_name,
            "package_amount" 			=> $p_amount,
        );

        $this->PackagesModel->updatePackages($id, $data);
		
		$this->session->set_flashdata('message', 'Package Updated');
		echo $this->session->flashdata('message');
		redirect('/packages');
    }

    public function delete_package($id)
    {
        $p_name= $this->input->post('p_name');
        $this->PackagesModel->delete_package($id);

		$this->session->set_flashdata('error', $p_name.' Deleted');
		echo $this->session->flashdata('error');
		redirect("/packages");
    }

    public function changeStatus()
	{
		$id = $this->input->post('id');
		$this->PackagesModel->changeStatus($id);
		return true;
	}
}