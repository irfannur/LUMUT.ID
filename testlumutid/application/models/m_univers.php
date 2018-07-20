<?php

class M_univers extends CI_Model
{
	public function __construct()
	{
		date_default_timezone_set('Asia/Jakarta');
	}

	/**
	 * find()
	 * Fungsi untuk mengambil record data
	 * @return array
	 */

	public function find($table, $field, $value)
	{
		if($field !='' && $value !='')
		{
			$this->db->where($field, $value);
		}
		else
		{
			$this->db->where_in($field, $value);
		}
		return $this->db->get($table);	

	}

	public function update($field, $value, $table, $data)
	{
		return $this->db->where($field, $value)->update($table, $data);
	}




	public function dropdown($key, $value, $table, $is_null = FALSE)
	{
        $query = $this->db->get($table);

        if ($query->num_rows() > 0)
        {
        	if ($is_null != FALSE)
        	{
        		$data[NULL] = 'Pilih :';
        	}

			foreach ($query->result() as $row)
            {
				$data[$row->$key] = $row->$value;
			}
			return $data;
		}
        else
        {
            return array();
        }
	}

	

}