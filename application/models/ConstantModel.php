<?php

	class ConstantModel extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function newConstant($value_list)
		{
					
			return $this->db->insert('global_constants', $value_list);
		
		}

		public function getConstants()
		{
			$query ="SELECT
			    			*
			    		FROM
                            global_constants 
			    		order by global_constant_id desc";

			$result = $this->db->query($query);

			return $result->result_array();
		}

		public function updateConstant($id, $data)
		{
			$this->db->where('global_constant_id', $id);
			return $this->db->update('global_constants',$data);
			
		}

		public function delete_constant($id)
		{
			$this->db->where('global_constant_id',$id);
			$this->db->delete('global_constants');

			return true;
		}

        public function changeStatus($id)
		{
			$query ="SELECT
			    			*
			    		FROM
                            global_constants 
                        WHERE 
                            global_constant_id = $id
			    	";

			$result = $this->db->query($query);
            $value = $result->result_array();
            
            if($value[0]['global_constant_status'] == 1)
            {
                $query="
                UPDATE global_constants
                SET global_constant_status = 0
                WHERE
                    global_constant_id = $id;
                ";
            }else{
                $query="
                UPDATE global_constants
                SET global_constant_status = 1
                WHERE
                    global_constant_id = $id;
                ";
            }
            $this->db->query($query);

			return true;
		}
	}