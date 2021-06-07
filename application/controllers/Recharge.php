<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Recharge extends CI_Controller 
    {
        public function getWalletDatatable()
        {
           $tableName = "wallet_histories";
           $primaryKey= "wallet_history_id"; 

           $columns = array(
                array()
           );
        }

        public function getRecharge()
        {
            
        }
    }