<?php

	class WalletModel extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function getWallet()
		{
					
			$query ="SELECT
			    			*
			    		FROM
                            wallet_histories
                        Inner Join  accounts
                        on accounts.account_id = wallet_histories.wallet_history_by
			    		order by wallet_histories.wallet_history_created_date desc";

			$result = $this->db->query($query);

			return $result->result_array();
		
		}

		var $table = "wallet_histories";  
		var $select_column = array("wallet_history_id", "wallet_history_created_date", "wallet_history_note", "wallet_histories_recharged_amount_etb", "wallet_history_auth_date_time", "wallet_history_amount", "wallet_history_message");  
		var $order_column = array(null, "wallet_history_amount", "wallet_history_created_date", "wallet_history_note","wallet_histories_recharged_amount_etb","wallet_history_auth_date_time", null);  

		function make_query()  
		{  
			$this->db->select($this->select_column);  
			$this->db->from($this->table);  
			if(isset($_POST["search"]["value"]))  
			{  
				$this->db->like("wallet_history_amount", $_POST["search"]["value"]);  
				$this->db->or_like("wallet_history_note", $_POST["search"]["value"]);  
				$this->db->or_like("wallet_histories_recharged_amount_etb", $_POST["search"]["value"]);  
								 
			}  
			if(isset($_POST["order"]))  
			{  
				$this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
			}  
			else  
			{  
				$this->db->order_by('wallet_history_id', 'DESC');  
			}  
		}  
		function make_datatables(){  
			$this->make_query();  
			if(10 != -1)  
			{  
				$this->db->limit(10, 1);  
			}  
			$result = $this->db->get();  
			
			return $result->result_array();
		}  
		function get_filtered_data(){  
			$this->make_query();  
			$query = $this->db->get();  
			return $query->num_rows();  
		}       
		function get_all_data()  
		{  
			$this->db->select(" * ");  
			$this->db->from($this->table);  
			return $this->db->count_all_results();  
		} 
    }