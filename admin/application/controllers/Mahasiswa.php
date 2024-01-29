<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set('display_errors', 1);
class Mahasiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();                                //Load Databse Class
                $this->load->library('session');
				$this->load->model('user_model');
				$this->load->model('Master_model', 'master');

		//$this->load->library('form_validation'); // Load Library Ignited-Datatables

		$this->form_validation->set_error_delimiters('', '');
	}

	function show_quiz_import($param1 = null, $param2 = null, $param3 = null)
   {
		$page_data['page_name']     = 'manage_quiz_question_import';
        $page_data['page_title']    = get_phrase('Question Import');
		// $is = DEFAULT_ACTIVE_MODE;
		// $query = "select * from quiz_details where is_active=$is order by quiz_id desc";

		$page_data['quiz_details']  = $this->db->get('quiz_details')->result_array();

		$this->load->view('backend/index', $page_data);

	//    $page_data['page_name']     = 'manage_quiz_question';
    //         $page_data['page_title']    = get_phrase('Manage Quiz Question');
    //         $page_data['quiz_details']  = $this->db->get('quiz_details')->result_array();
    //         $this->load->view('backend/index', $page_data);

   }
	public function import($import_data = null)
	{

		if ($import_data != null) $page_data['import'] = $import_data;
		$page_data['page_name']     = 'manage_quiz_question_import';

		$this->load->view('backend/index', $page_data);
		}
	public function preview()
	{
		$config['upload_path']		= './uploads/import/';
		$config['allowed_types']	= 'xls|xlsx|csv';
		$config['max_size']			= 2048;
		$config['encrypt_name']		= true;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('upload_file')) {
			$error = $this->upload->display_errors();
			echo $error;
			die;
		} else {
			$file = $this->upload->data('full_path');
			$ext = $this->upload->data('file_ext');

			switch ($ext) {
				case '.xlsx':
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
					break;
				case '.xls':
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
					break;
				case '.csv':
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
					break;
				default:
					echo "unknown file ext";
					die;
			}

			$spreadsheet = $reader->load($file);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			$data = [];
			for ($i = 1; $i < count($sheetData); $i++) {
				$data[] = [
					'question' => $sheetData[$i][0],
					'quiz_id' => $sheetData[$i][1],
					'option1' => $sheetData[$i][2],
					'option2' => $sheetData[$i][3],
					'option3' => $sheetData[$i][4],
					'option4' => $sheetData[$i][5],
					'answer' => $sheetData[$i][6],
				];
			}

			unlink($file);

			$this->import($data);
		}
	}

	public function do_import()
	{
		$input = json_decode($this->input->post('data', true));
		$data = [];
		foreach ($input as $d) {
			$data[] = [
				'question' => $d->question,
				'quiz_id' => $d->quiz_id,
				'option1' => $d->option1,
				'option2' => $d->option2,
				'option3' => $d->option3,
				'option4' => $d->option4,
				'answer' => $d->answer,
			];
		}
		//$this->db->insert('quiz_questions' , $data);
		//$this->User_model->insertRecord('quiz_questions', $data);
		$save = $this->master->create('quiz_questions', $data, true);
		redirect('mahasiswa/import');
		/* if ($save) {
			redirect('mahasiswa');
		} else {

		} */
	}
}
