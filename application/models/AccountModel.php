<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountModel extends CI_Model 
{
    public function getAccount()
    {
        $query ="SELECT
                        *
                    FROM
                        accounts 
                    order by account_id desc";

        $result = $this->db->query($query);

        return $result->result_array();
    }
}