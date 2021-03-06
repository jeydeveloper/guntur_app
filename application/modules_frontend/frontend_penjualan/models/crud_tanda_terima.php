<?php

class Crud_tanda_terima extends CI_Model {
	//--------base---------------
	function where($where = '') {
		if($where != '') $this->db->where($where);
		return $this;
	}

	function where_in($fieldname = '', $where = '') {
		if($where != '' AND $fieldname != '') $this->db->where_in($fieldname, $where);
		return $this;
	}

	function where_not_in($fieldname = '', $where = '') {
		if($where != '' AND $fieldname != '') $this->db->where_not_in($fieldname, $where);
		return $this;
	}

	function set_limit($limit, $start = 0) {
    	$this->db->limit($limit, $start);
        return $this;
    }

	function order_by($field, $direction = 'asc') {
		$this->db->order_by($field, $direction);
		return $this;
	}

	function like($field, $keyword, $pattern = 'both') {
		$this->db->like($field, $keyword, $pattern);
		return $this;
	}

	function or_like($field, $keyword = '', $pattern = 'both'){
		if($keyword != '') $this->db->or_like($field, $keyword, $pattern);
		else  $this->db->or_like($field);
		return $this;
	}

	function group_by($group_by = ''){
		$this->db->group_by($group_by);
		return $this;
	}
	//--------------end---------------

	function get_row(){
		return $this->db->get('penjualan_tandaterima')->row_array();
	}

	function get_all(){
		return $this->db->join('penjualan_beritaacara', 'pbcr_id = pttr_pbcr_id')->get('penjualan_tandaterima')->result_array();
	}

	function posts($data){
		return $this->db->insert('penjualan_tandaterima', $data);
	}

	function puts($data){
		return $this->db->update('penjualan_tandaterima', $data);
	}

	function delete($data){
		return $this->db->delete('penjualan_tandaterima', $data);
	}

	function get_option_info_detail($id='') {
		if(!empty($id)) $this->db->where('pttr_id = "'.$id.'"');
		
        $res = $this->db->get('penjualan_tandaterima')->result_array();
        $data = array();
        foreach ($res as $key => $value) {
            $data[$value['pttr_id']] = $value;
        }
        return $data;
    }

    function update_relation_referensi($id_1, $id_2, $id_3, $id_4, $id_5, $id_6) {
		$data = array(
    		'pbktp_pbcr_id' => $id_2,
    		'pbktp_pjkw_id' => $id_3,
    		'pbktp_pjinv_id' => $id_4,
    		'pbktp_ppmt_id' => $id_5,
    		'pbktp_ppnw_id' => $id_6,
    	);
		$this->db->where('pbktp_pttr_id = "'.$id_1.'"')->update('penjualan_bukti_pembayaran', $data);
    }
}