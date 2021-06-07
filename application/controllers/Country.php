<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller 
{
    public function add_new()
    {
		$c_name = $this->input->post('c_name');
        $data = array(
            "country_name"		=> $c_name,
        );

        $this->CountryModel->newCountry($data);
		
		$this->session->set_flashdata('message', 'Country Registred');
		echo $this->session->flashdata('message');
		redirect('/countries');
    }

    public function editCountry($id)
    {
        $c_name = $this->input->post('c_name');

        $data = array(
            "country_name"		=> $c_name,
        );

        $this->CountryModel->updateCountry($id, $data);
		
		$this->session->set_flashdata('message', 'Country Updated');
		echo $this->session->flashdata('message');
		redirect('/countries');
    }

    public function delete_constant($id)
    {

        $this->CountryModel->delete_country($id);

		$this->session->set_flashdata('error', 'Constant Deleted');
		echo $this->session->flashdata('error');
		redirect("/countries");
    }

    public function changeStatus()
	{
		$id = $this->input->post('id');
		$return = $this->CountryModel->changeStatus($id);
		return true;
	}
}