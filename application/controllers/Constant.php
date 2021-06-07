<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Constant extends CI_Controller 
{
    public function add_new()
    {
		$c_rate 	    = $this->input->post('c_rate');
		$c_percent = $this->input->post('c_percent');
		
        $data = array(
            "global_constant_exchange_rate"		=> $c_rate,
            "global_constant_percent"	 	    => $c_percent,
        );

        $this->ConstantModel->newConstant($data);
		
		$this->session->set_flashdata('message', 'Constant Registred');
		echo $this->session->flashdata('message');
		redirect('global-constant');
    }

    public function edit($id)
    {
        $c_rate 	    = $this->input->post('c_rate');
		$c_percent = $this->input->post('c_percent');

        $data = array(
            "global_constant_exchange_rate"		=> $c_rate,
            "global_constant_percent"	 	    => $c_percent,
        );

        $this->ConstantModel->updateConstant($id, $data);
		
		$this->session->set_flashdata('message', 'Constant Updated');
		echo $this->session->flashdata('message');
		redirect('/global-constant');
    }

    public function delete_constant($id)
    {

        $this->ConstantModel->delete_constant($id);

		$this->session->set_flashdata('error', 'Constant Deleted');
		echo $this->session->flashdata('error');
		redirect("/global-constant");
    }

    public function changeStatus()
	{
		$id = $this->input->post('id');
		$return = $this->ConstantModel->changeStatus($id);
		return true;
	}
}