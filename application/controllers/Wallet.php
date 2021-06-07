<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Wallet extends CI_Controller 
    {
        public function dataFetch(){

            $fetch_data = $this->WalletModel->make_datatables();  
            $data = array();  
            foreach($fetch_data as $key=>$list)  
            {  
                 $sub_array = array();  
                 $sub_array[] = $key +1;;  
                 $sub_array[] = $list['wallet_history_amount'];  
                 $sub_array[] = date("d-M-y", strtotime($list['wallet_history_created_date']));
                 $sub_array[] = $list['wallet_history_note'];  
                 $sub_array[] = $list['wallet_histories_recharged_amount_etb'];  
                 $sub_array[] = date("d-M-y H:m", strtotime($list['wallet_history_auth_date_time']));  
                 $sub_array[] = '<button type="button" class="btn btn-outline-primary waves-effect waves-light btn-sm" onclick="test('.$list['wallet_history_id'].')"><i class="fa fa-eye"></i></button>';  
                 $data[] = $sub_array;  
            }  
            $output = array(  
                 "recordsTotal"          =>     $this->WalletModel->get_all_data(),  
                 "recordsFiltered"       =>     $this->WalletModel->get_filtered_data(),  
                 "data"                  =>     $data  
            );  
            echo json_encode($output);  

        }
    }