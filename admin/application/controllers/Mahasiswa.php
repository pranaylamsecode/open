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

	public function importexam($import_data = null)
	{

		if ($import_data != null) $page_data['import'] = $import_data;
		$page_data['page_name']     = 'manage_exam_quiz_question_import';

		$this->load->view('backend/index', $page_data);
	}

	public function import2($import_data = null){

			if ($import_data != null) $page_data['import'] = $import_data;
			$page_data['page_name']     = 'manage_quiz_question_import2';

			$this->load->view('backend/index', $page_data);
	}
	public function preview()
	{

		 $quiz_id = $this->input->post('quiz_id', true);

		// $exam_type = $this->input->post('exam_type', true);
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
				$file = '';
				$file_a = '';
				$file_b = '';
				$file_c = '';
				$file_d = '';

				// Check if there's an image in the 'file' cell
				if ($spreadsheet->getActiveSheet()->getDrawingCollection()[$i - 1] ?? null) {
					// Extract the image data
					$drawing = $spreadsheet->getActiveSheet()->getDrawingCollection()[$i - 1];
					if ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing) {
						ob_start();
						call_user_func($drawing->getRenderingFunction(), $drawing->getImageResource());
						$imageData = base64_encode(ob_get_clean());
						$file = $imageData; // Add image data to the row data
					} elseif ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\Drawing) {
						$imagePath = $drawing->getPath();
						$imageData = base64_encode(file_get_contents($imagePath));
						$file = $imageData; // Add image data to the row data
					}
				}else{

					$file = $sheetData[$i][6];


				}


				// Check if there's an image in the 'file_a' cell
				if ($spreadsheet->getActiveSheet()->getDrawingCollection()[$i - 1] ?? null) {
					// Extract the image data
					$drawing = $spreadsheet->getActiveSheet()->getDrawingCollection()[$i - 1];
					if ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing) {
						ob_start();
						call_user_func($drawing->getRenderingFunction(), $drawing->getImageResource());
						$imageData = base64_encode(ob_get_clean());
						$file_a = $imageData; // Add image data to the row data
					} elseif ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\Drawing) {
						$imagePath = $drawing->getPath();
						$imageData = base64_encode(file_get_contents($imagePath));
						$file_a = $imageData; // Add image data to the row data
					}
				}else{

					$file_a = $sheetData[$i][7];


				}
				// Check if there's an image in the 'file_b' cell
				if ($spreadsheet->getActiveSheet()->getDrawingCollection()[$i - 1] ?? null) {
					// Extract the image data
					$drawing = $spreadsheet->getActiveSheet()->getDrawingCollection()[$i - 1];
					if ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing) {
						ob_start();
						call_user_func($drawing->getRenderingFunction(), $drawing->getImageResource());
						$imageData = base64_encode(ob_get_clean());
						$file_b = $imageData; // Add image data to the row data
					} elseif ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\Drawing) {
						$imagePath = $drawing->getPath();
						$imageData = base64_encode(file_get_contents($imagePath));
						$file_b = $imageData; // Add image data to the row data
					}
				}else{

					$file_b = $sheetData[$i][8];


				}

				// Check if there's an image in the 'file_c' cell
				if ($spreadsheet->getActiveSheet()->getDrawingCollection()[$i - 1] ?? null) {
					// Extract the image data
					$drawing = $spreadsheet->getActiveSheet()->getDrawingCollection()[$i - 1];
					if ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing) {
						ob_start();
						call_user_func($drawing->getRenderingFunction(), $drawing->getImageResource());
						$imageData = base64_encode(ob_get_clean());
						$file_c = $imageData; // Add image data to the row data
					} elseif ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\Drawing) {
						$imagePath = $drawing->getPath();
						$imageData = base64_encode(file_get_contents($imagePath));
						$file_c = $imageData; // Add image data to the row data
					}
				}else{

					$file_c = $sheetData[$i][9];


				}

				// Check if there's an image in the 'file_d' cell
				if ($spreadsheet->getActiveSheet()->getDrawingCollection()[$i - 1] ?? null) {
					// Extract the image data
					$drawing = $spreadsheet->getActiveSheet()->getDrawingCollection()[$i - 1];
					if ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\MemoryDrawing) {
						ob_start();
						call_user_func($drawing->getRenderingFunction(), $drawing->getImageResource());
						$imageData = base64_encode(ob_get_clean());
						$file_d = $imageData; // Add image data to the row data
					} elseif ($drawing instanceof \PhpOffice\PhpSpreadsheet\Worksheet\Drawing) {
						$imagePath = $drawing->getPath();
						$imageData = base64_encode(file_get_contents($imagePath));
						$file_d = $imageData; // Add image data to the row data
					}
				}else{

					$file_d = $sheetData[$i][10];


				}
				$data[] = [
					'question' => $sheetData[$i][0],
					'quiz_id' => $quiz_id,
					'option1' => $sheetData[$i][1],
					'option2' => $sheetData[$i][2],
					'option3' => $sheetData[$i][3],
					'option4' => $sheetData[$i][4],
					'answer' => $sheetData[$i][5],
					'file' => $file,
					'file_a' => $file_a,
					'file_b' => $file_b,
					'file_c' => $file_c,
					'file_d' => $file_d,

					/* 'exam_type' => $exam_type, */
				];




			}



			unlink($file);

			$this->import($data);
		}
	}



	public function previewexam()
	{

		 $quiz_id = $this->input->post('quiz_id', true);

		 $exam_type = $this->input->post('exam_type', true);
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
					'quiz_id' => $quiz_id,
					'option1' => $sheetData[$i][1],
					'option2' => $sheetData[$i][2],
					'option3' => $sheetData[$i][3],
					'option4' => $sheetData[$i][4],
					'answer' => $sheetData[$i][5],
					'file' => $sheetData[$i][6],
					'file_a' => $sheetData[$i][7],
					'file_b' => $sheetData[$i][8],
					'file_c' => $sheetData[$i][9],
					'file_d' => $sheetData[$i][10],

					'exam_type' => $exam_type,
				];



			}


			unlink($file);

			$this->importexam($data);
		}
	}

	public function preview2()
	{

		$student_id = $this->input->post('student_id', true);
		$subject_id = $this->input->post('subject_id', true);
		$exam_id = $this->input->post('exam_id', true);
		$class_id = $this->input->post('class_id', true);





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
					'student_id' => $student_id,
					'subject_id' => $subject_id,
					'exam_id' => $exam_id,
					'class_id' => $class_id,
					'class_score1' => $sheetData[$i][0],
					'class_score2' => $sheetData[$i][1],
					'class_score3' => $sheetData[$i][2],
					'exam_score' => $sheetData[$i][3],
					'comment' => $sheetData[$i][4],
				];
			}

			unlink($file);

			$this->import2($data);
		}
	}

	public function do_import()
	{
		$input = json_decode($this->input->post('data', true));
		$data = [];





		foreach ($input as $d) {

			/* added export by image start  */
		// Assume $d->file contains the file paths or base64 encoded data for the images
			// Modify this part according to your data structure
			$file_path = $d->file; // Change this to the appropriate property containing the file path or base64 encoded data
			$file_path_file_a = $d->file_a;
			$file_path_file_b = $d->file_b;
			$file_path_file_c = $d->file_c;
			$file_path_file_d = $d->file_d;


			/* file upload start  */

			/* file_a upload  */

			// Get the base64-encoded image data from the request
            $fileData = $file_path; // Assuming 'file_a' contains the base64-encoded image data

            // Decode the base64 data
            $binaryData = base64_decode($fileData);

            // Define the upload directory
            $uploadDirectory = 'uploads/question_image/';

            // Generate a unique filename
            $fileName = uniqid() . '.jpg'; // Assuming the image is in JPEG format

            // Save the image to the server
            $filePath = $uploadDirectory . $fileName;
			if(!empty($binaryData))
			{
				write_file($filePath, $binaryData);
				$new_file_name = $fileName;
			}else{
				/* $new_file_name = */
			}
            // Write the file to the disk

			/* file_a upload end  */


			/* file upload end  */

			/* file_a upload  */

			// Get the base64-encoded image data from the request
            $fileData_a = $file_path_file_a; // Assuming 'file_a' contains the base64-encoded image data

            // Decode the base64 data
            $binaryData_a = base64_decode($fileData_a);

            // Define the upload directory
            $uploadDirectory = 'uploads/question_image/';

            // Generate a unique filename
            $fileName_a = uniqid() . '.jpg'; // Assuming the image is in JPEG format

            // Save the image to the server
            $filePath_a = $uploadDirectory . $fileName_a;

            // Write the file to the disk
            if(!empty($binaryData_a))
			{
				write_file($filePath_a, $binaryData_a);
				$new_file_name_file_a = $fileName_a;
			}else{


			}
			/* file_a upload end  */

						/* file_b upload  */

			// Get the base64-encoded image data from the request
            $fileData_b = $file_path_file_b; // Assuming 'file_a' contains the base64-encoded image data

            // Decode the base64 data
            $binaryData_b = base64_decode($fileData_b);

            // Define the upload directory
            $uploadDirectory = 'uploads/question_image/';

            // Generate a unique filename
            $fileName_b = uniqid() . '.jpg'; // Assuming the image is in JPEG format

            // Save the image to the server
            $filePath_b = $uploadDirectory . $fileName_b;

            // Write the file to the disk
            if(!empty($binaryData_b))
			{
				write_file($filePath_b, $binaryData_b);
				$new_file_name_file_b = $fileName_b;
			}else{


			}
			/* file_a upload end  */

						/* file_c upload  */

			// Get the base64-encoded image data from the request
            $fileData_c = $file_path_file_c; // Assuming 'file_a' contains the base64-encoded image data

            // Decode the base64 data
            $binaryData_c = base64_decode($fileData_c);

            // Define the upload directory
            $uploadDirectory = 'uploads/question_image/';

            // Generate a unique filename
            $fileName_c = uniqid() . '.jpg'; // Assuming the image is in JPEG format

            // Save the image to the server
            $filePath_c = $uploadDirectory . $fileName_c;

            // Write the file to the disk
            if(!empty($binaryData_c))
			{
				write_file($filePath_c, $binaryData_c);
				$new_file_name_file_c = $fileName_c;

			}else{

			}
			/* file_c upload end  */

						/* file_d upload  */

			// Get the base64-encoded image data from the request
            $fileData_d = $file_path_file_d; // Assuming 'file_a' contains the base64-encoded image data

            // Decode the base64 data
            $binaryData_d = base64_decode($fileData_d);

            // Define the upload directory
            $uploadDirectory = 'uploads/question_image/';

            // Generate a unique filename
            $fileName_d = uniqid() . '.jpg'; // Assuming the image is in JPEG format

            // Save the image to the server
            $filePath_d = $uploadDirectory . $fileName_d;

            // Write the file to the disk
            if(!empty($binaryData_d))
			{
				write_file($filePath_d, $binaryData_d);
				$new_file_name_file_d = $fileName_d;
			}else{



				$new_file_name_file_d = $fileName_d;

			}
			/* file_a upload end  */




			$data[] = [
				'question' => $d->question,
				'quiz_id' => $d->quiz_id,
				'option1' => $d->option1,
				'option2' => $d->option2,
				'option3' => $d->option3,
				'option4' => $d->option4,
				'answer' => $d->answer,
				'exam_type' => $d->exam_type,
				'is_active' => '1',
				'file' => $new_file_name,
				'file_a' => $new_file_name_file_a,
				'file_b' => $new_file_name_file_b,
				'file_c' => $new_file_name_file_c,
				'file_d' => $new_file_name_file_d,
				'add_by_import' => '1'
			];
		}
		print_r($data);die;
		//$this->db->insert('quiz_questions' , $data);
		//$this->User_model->insertRecord('quiz_questions', $data);
		$save = $this->master->create('quiz_questions', $data, true);
		redirect('mahasiswa/import');
		/* if ($save) {
			redirect('mahasiswa');
		} else {

		} */
	}

	public function do_import_exam()
	{
		$input = json_decode($this->input->post('data', true));
		$data = [];
		foreach ($input as $d) {
			$data[] = [
				'question' => $d->question,
				'exam_quiz_id' => $d->quiz_id,
				'option1' => $d->option1,
				'option2' => $d->option2,
				'option3' => $d->option3,
				'option4' => $d->option4,
				'answer' => $d->answer,
				'exam_type' => $d->exam_type,
				'is_active' => '1',
				'file' => $d->file,
				'file_a' => $d->file_a,
				'file_b' => $d->file_b,
				'file_c' => $d->file_c,
				'file_d' => $d->file_d,
				'add_by_import' => '1'
			];
		}
		//$this->db->insert('quiz_questions' , $data);
		//$this->User_model->insertRecord('quiz_questions', $data);
		$save = $this->master->create('exam_quiz_questions', $data, true);
		redirect('mahasiswa/importexam');
		/* if ($save) {
			redirect('mahasiswa');
		} else {

		} */
	}

	public function do_import2()
	{
		$input = json_decode($this->input->post('data', true));
		$data = [];
		foreach ($input as $d) {
			$data[] = [
				'student_id' => $d->student_id,
				'subject_id' => $d->subject_id,
				'exam_id' => $d->exam_id,
				'class_id' => $d->class_id,
				'class_score1' => $d->class_score1,
				'class_score2' => $d->class_score2,
				'class_score3' => $d->class_score3,
				'exam_score' => $d->exam_score,
				'comment' => $d->comment,
			];
		}
		//$this->db->insert('quiz_questions' , $data);
		//$this->User_model->insertRecord('quiz_questions', $data);
		$save = $this->master->create('mark', $data, true);
		redirect('mahasiswa/import2');
		/* if ($save) {
			redirect('mahasiswa');
		} else {

		} */
	}
}
