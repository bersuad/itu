<?php

	class PackagesModel extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function newItem($value_list)
		{
					
			return $this->db->insert('packages', $value_list);
		
		}

		public function get_packages()
		{
			$query ="SELECT
			    			*
			    		FROM
			    			packages 
			    		order by package_created_date desc";

			$result = $this->db->query($query);

			return $result->result_array();
		}

		public function updatePackages($id, $data)
		{
			$this->db->where('package_id', $id);
			return $this->db->update('packages',$data);
			
		}

		public function delete_package($id)
		{
			$this->db->where('package_id',$id);
			$this->db->delete('packages');

			return true;
		}

        public function changeStatus($id)
		{
			$query ="SELECT
			    			*
			    		FROM
			    			packages 
                        WHERE 
                            package_id = $id
			    	";

			$result = $this->db->query($query);
            $value = $result->result_array();
            
            if($value[0]['package_status'] == 1)
            {
                $query="
                UPDATE packages
                SET package_status = 0
                WHERE
                    package_id = $id;
                ";
            }else{
                $query="
                UPDATE packages
                SET package_status = 1
                WHERE
                    package_id = $id;
                ";
            }
            $this->db->query($query);

			return true;
		}
	}