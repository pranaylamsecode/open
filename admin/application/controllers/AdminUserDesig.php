<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('Base_Controller.php');

class AdminUserDesig extends Base_Controller {
	//constructor
	function __construct() {
        parent::__construct();
        $this->load->model('Base_model');
        if(! $this->isAdminLogin()) {
	        redirect ('admin/User');
	    }
    }

	//default is login page
    public function index() {
    	//nothing else
    }



	public function del_admin_user() {
		$res_code = 0;
		$employee = intval( $this->input->post('req_dept_id', true) );
		if($employee > 0) {
			$this->Base_model->updateRecord( 'users', array('is_active' => DEFAULT_INACTIVE_MODE), array('user_id' => $employee) );
			$res_code = 1;

		}
		echo $res_code;
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}