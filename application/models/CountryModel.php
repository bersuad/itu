<?php

	class CountryModel extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function newCountry($data)
		{
					
			return $this->db->insert('countries', $data);
		
		}

		public function getCountries()
		{
			$query ="SELECT
			    			*
			    		FROM
                            countries 
			    		order by country_id desc";

			$result = $this->db->query($query);

			return $result->result_array();
		}

		public function updateCountry($id, $data)
		{
			$this->db->where('country_id', $id);
			return $this->db->update('countries',$data);
			
		}

		public function delete_country($id)
		{
			$this->db->where('country_id',$id);
			$this->db->delete('countries');

			return true;
		}

        public function changeStatus($id)
		{
			$query ="SELECT
			    			*
			    		FROM
                            countries 
                        WHERE 
                            country_id = $id
			    	";

			$result = $this->db->query($query);
            $value = $result->result_array();
            
            if($value[0]['country_status'] == 1)
            {
                $query="
                UPDATE countries
                SET country_status = 0
                WHERE
                    country_id = $id;
                ";
            }else{
                $query="
                UPDATE countries
                SET country_status = 1
                WHERE
                    country_id = $id;
                ";
            }
            $this->db->query($query);

			return true;
		}
	}