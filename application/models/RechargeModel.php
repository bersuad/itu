<?php

	class RechargeModel extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function getRecharge()
		{
					
			$query ="SELECT
			    			*
			    		FROM
                            recharges
                        Inner Join  accounts
                        on accounts.account_id = recharges.recharge_by
			    		order by recharges.recharge_id desc
                    ";

			$result = $this->db->query($query);

			return $result->result_array();
		
		}
    }