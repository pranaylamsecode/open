<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/* ini_set('display_errors', 1); */
class Report extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session'); //Load library for session
    }

    public function studentPaymentReport($param1 = null, $param2 = null, $param3 = null)
    {

        $page_data['page_name'] = 'studentPaymentReport';
        $page_data['page_title'] = get_phrase('Payment Report');
        $this->load->view('backend/index', $page_data);

    }

    public function classAttendanceReport($class_id = null, $section_id = null, $month = null, $year = null)
    {

        $active_sms_gateway = $this->db->get_where('sms_settings', array('type' => 'active_sms_gateway'))->row()->info;

        if ($_POST) {
            redirect(base_url() . 'admin/classAttendanceReport/' . $class_id . '/' . $section_id . '/' . $month . '/' . $year, 'refresh');
        }

        $classes = $this->db->get('class')->result_array();
        foreach ($classes as $key => $class) {
            if (isset($class_id) && $class_id == $class['class_id']) {
                $class_name = $class['name'];
            }

        }

        $sections = $this->db->get('section')->result_array();
        foreach ($sections as $key => $section) {
            if (isset($section_id) && $section_id == $section['section_id']) {
                $section_name = $section['name'];
            }

        }

        $page_data['month'] = $month;
        $page_data['year'] = $year;
        $page_data['class_id'] = $class_id;
        $page_data['section_id'] = $section_id;
        $page_data['page_name'] = 'attendance_report';
        $page_data['page_title'] = "Attendance Report:" . $class_name . " : Section " . $section_name;
        $this->load->view('backend/index', $page_data);
    }

    /***********  The function below manages school marks ***********************/
    public function examMarkReport($exam_id = null, $class_id = null, $student_id = null)
    {

        if ($this->input->post('operation') == 'selection') {

            $page_data['exam_id'] = $this->input->post('exam_id');
            $page_data['class_id'] = $this->input->post('class_id');
            $page_data['student_id'] = $this->input->post('student_id');

            if ($page_data['exam_id'] > 0 && $page_data['class_id'] > 0 && $page_data['student_id'] > 0) {

                redirect(base_url() . 'report/examMarkReport/' . $page_data['exam_id'] . '/' . $page_data['class_id'] . '/' . $page_data['student_id'], 'refresh');
            } else {
                $this->session->set_flashdata('error_message', get_phrase('Pleasen select something'));
                redirect(base_url() . 'report/examMarkReport', 'refresh');
            }
        }
        $page_data['exam_id'] = $exam_id;
        $page_data['class_id'] = $class_id;
        $page_data['student_id'] = $student_id;
        $page_data['subject_id'] = $subject_id;
        $page_data['page_name'] = 'examMarkReport';
        $page_data['page_title'] = get_phrase('Student Marks');
        $this->load->view('backend/index', $page_data);
    }
/***********  The function that manages school marks ends here ***********************/
    public function examMarkReport2($exam_id = null, $class_id = null, $student_id = null)
    {

        if ($this->input->post('operation') == 'selection') {

            $page_data['exam_id'] = $this->input->post('exam_id');
            $page_data['class_id'] = $this->input->post('class_id');
            $page_data['student_id'] = $this->input->post('student_id');

            if ($page_data['exam_id'] > 0 && $page_data['class_id'] > 0 && $page_data['student_id'] > 0) {

                redirect(base_url() . 'report/examMarkReport2/' . $page_data['exam_id'] . '/' . $page_data['class_id'] . '/' . $page_data['student_id'], 'refresh');
            } else {
                $this->session->set_flashdata('error_message', get_phrase('Pleasen select something'));
                redirect(base_url() . 'report/examMarkReport2', 'refresh');
            }
        }
        $page_data['exam_id'] = $exam_id;
        $page_data['class_id'] = $class_id;
        $page_data['student_id'] = $student_id;
        $page_data['subject_id'] = $subject_id;
        $page_data['page_name'] = 'examMarkReport';
        $page_data['page_title'] = get_phrase('Report Marks');
        $this->load->view('backend/index', $page_data);
    }
    /* report for schoreship quiz start  */
    public function examMarkReport3($exam_id = null, $student_id = null, $student_id2 = null)
    {

        if ($this->input->post('operation') == 'selection') {

            $page_data['exam_id'] = $this->input->post('exam_id');
            $page_data['student_id'] = $this->input->post('student_id');
            $page_data['student_id2'] = $this->input->post('student_id2');
            $page_data['batch'] = $this->input->post('batch');

            if ($page_data['student_id2'] == 'All') {
                redirect(base_url() . 'report/examMarkReportBatch/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2'], 'refresh');

            } elseif (!empty($page_data['student_id2']) && !empty($page_data['student_id'])) {

                redirect(base_url() . 'report/examMarkReport4/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2'], 'refresh');
            } elseif (!empty($page_data['exam_id'])) {

                redirect(base_url() . 'report/examMarkReport3/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2'], 'refresh');

            } else {
                $this->session->set_flashdata('error_message', get_phrase('Pleasen select something'));
                redirect(base_url() . 'report/examMarkReport3', 'refresh');
            }
        }

        $page_data['exam_id'] = $exam_id;
        $page_data['student_id'] = $student_id;
        $page_data['student_id2'] = $student_id2;
        $page_data['page_name'] = 'examMarkReport2';
        $page_data['page_title'] = get_phrase('Quiz Marks');
        $this->load->view('backend/index', $page_data);
    }

    public function examMarkReport4($exam_id = null, $student_id = null, $student_id2 = null)
    {

        if ($this->input->post('operation') == 'selection') {

            $page_data['exam_id'] = $this->input->post('exam_id');
            $page_data['student_id'] = $this->input->post('student_id');
            $page_data['student_id2'] = $this->input->post('student_id2');
            $page_data['batch'] = $this->input->post('batch');


            if ($page_data['student_id2'] == 'All') {
                redirect(base_url() . 'report/examMarkReportBatch/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2'], 'refresh');

            }elseif(!empty($page_data['batch']) && !empty($page_data['student_id'])) {
                redirect(base_url() . 'report/examMarkReportBatch/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2'], 'refresh');

            } elseif (!empty($page_data['student_id2']) && !empty($page_data['student_id'])) {

                redirect(base_url() . 'report/examMarkReport4/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2'], 'refresh');
            } elseif (!empty($page_data['exam_id'])) {

                redirect(base_url() . 'report/examMarkReport3/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2'], 'refresh');

            } else {
                $this->session->set_flashdata('error_message', get_phrase('Pleasen select something'));
                redirect(base_url() . 'report/examMarkReport3', 'refresh');
            }
        }

        $page_data['exam_id'] = $exam_id;
        $page_data['student_id'] = $student_id;
        $page_data['student_id2'] = $student_id2;
        $page_data['page_name'] = 'examMarkReport3';
        $page_data['page_title'] = get_phrase('Quiz Marks');
        $this->load->view('backend/index', $page_data);
    }



    public function examMarkReportBatch($exam_id = null, $student_id = null, $student_id2 = null)
    {

        if ($this->input->post('operation') == 'selection') {

            $page_data['exam_id'] = $this->input->post('exam_id');
            $page_data['student_id'] = $this->input->post('student_id');
            $page_data['student_id2'] = $this->input->post('student_id2');
            $page_data['batch'] = $this->input->post('batch');

            if (!empty($page_data['student_id2']) && $page_data['student_id2'] == 'All') {
                redirect(base_url() . 'report/examMarkReportBatch/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2'], 'refresh');

            } elseif (!empty($page_data['student_id2']) && !empty($page_data['student_id'])) {

                redirect(base_url() . 'report/examMarkReport4/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2'], 'refresh');
            } elseif (!empty($page_data['exam_id'])) {

                redirect(base_url() . 'report/examMarkReport3/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2'], 'refresh');

            } else {
                $this->session->set_flashdata('error_message', get_phrase('Please select something'));
                redirect(base_url() . 'report/examMarkReport3', 'refresh');
            }
        }

        $page_data['exam_id'] = $exam_id;
        $page_data['student_id'] = $student_id;
        $page_data['student_id2'] = $student_id2;
        $page_data['page_name'] = 'examMarkReportbatch';
        $page_data['page_title'] = get_phrase('Quiz Marks');
        $this->load->view('backend/index', $page_data);
    }
    /* report for schorship quiz end  */



     /* report for exam report start  */
     public function examMarkReportExamQuiz($exam_id = 0, $student_id = 0, $student_id2 = 0, $percentage_type = 0)
     {

         if ($this->input->post('operation') == 'selection') {

             $page_data['exam_id'] = $this->input->post('exam_id');
             $page_data['student_id'] = $this->input->post('student_id');
			 if(empty($page_data['student_id'])){
				$page_data['student_id'] = 0;
			 }
			 $page_data['student_id2'] = $this->input->post('student_id2');
			 if(empty($page_data['student_id2'])){
				$page_data['student_id2'] = 0;
			 }
             $page_data['percentage_type'] = $this->input->post('percentage_type');
			 if(empty($page_data['percentage_type'])){
				$page_data['percentage_type'] = 0;
			 }

             if ($page_data['student_id2'] == 'All' && !empty($page_data['student_id'])  && !empty($page_data['student_id2'])  ) {
                 redirect(base_url() . 'report/examMarkReportBatchQuiz/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2']. '/' . $page_data['percentage_type'], 'refresh');

             } elseif (!empty($page_data['student_id2']) && !empty($page_data['student_id'])) {

                 redirect(base_url() . 'report/examMarkReportExamQuiz4/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2']. '/' . $page_data['percentage_type'], 'refresh');
             } elseif (!empty($page_data['exam_id'])) {

                 redirect(base_url() . 'report/examMarkReportExamQuiz4/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2']. '/' . $page_data['percentage_type'], 'refresh');

             } else {
                 $this->session->set_flashdata('error_message', get_phrase('Pleasen select something'));
                 redirect(base_url() . 'report/examMarkReportExamQuiz', 'refresh');
             }
         }

         $page_data['exam_id'] = $exam_id;
         $page_data['student_id'] = $student_id;
         $page_data['student_id2'] = $student_id2;
         $page_data['percentage_type'] = $percentage_type;
         $page_data['page_name'] = 'examMarkReport2exam';
         $page_data['page_title'] = get_phrase('Exam Quiz Report');
         $this->load->view('backend/index', $page_data);
     }

     public function examMarkReportExamQuiz4($exam_id = 0, $student_id = 0, $student_id2 = 0,$percentage_type = 0)
     {



         if ($this->input->post('operation') == 'selection') {

			$page_data['exam_id'] = $this->input->post('exam_id');
			$page_data['student_id'] = $this->input->post('student_id');
			if(empty($page_data['student_id'])){
			   $page_data['student_id'] = 0;
			}
			$page_data['student_id2'] = $this->input->post('student_id2');
			if(empty($page_data['student_id2'])){
			   $page_data['student_id2'] = 0;
			}
			$page_data['percentage_type'] = $this->input->post('percentage_type');
			if(empty($page_data['percentage_type'])){
			   $page_data['percentage_type'] = 0;
			}

            if ($page_data['student_id2'] == 'All' && !empty($page_data['student_id'])  && !empty($page_data['student_id2'])) {
				redirect(base_url() . 'report/examMarkReportBatchQuiz/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2']. '/' . $page_data['percentage_type'], 'refresh');

			} elseif (!empty($page_data['student_id2']) && !empty($page_data['student_id'])) {

				redirect(base_url() . 'report/examMarkReportExamQuiz4/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2']. '/' . $page_data['percentage_type'], 'refresh');
			} elseif (!empty($page_data['exam_id'])) {

				redirect(base_url() . 'report/examMarkReportExamQuiz4/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2']. '/' . $page_data['percentage_type'], 'refresh');

			} else {
				$this->session->set_flashdata('error_message', get_phrase('Please select something'));
				redirect(base_url() . 'report/examMarkReportExamQuiz', 'refresh');
			}
		  }

		  $page_data['exam_id'] = $exam_id;
		  $page_data['student_id'] = $student_id;
		  $page_data['student_id2'] = $student_id2;
		  $page_data['percentage_type'] = $percentage_type;
         $page_data['page_name'] = 'examMarkReport3exam';
         $page_data['page_title'] = get_phrase('Exam Quiz');
         $this->load->view('backend/index', $page_data);
     }

     public function examMarkReportBatchQuiz($exam_id = 0, $student_id = 0, $student_id2 = 0,$percentage_type = 0)
    {

        if ($this->input->post('operation') == 'selection') {

			$page_data['exam_id'] = $this->input->post('exam_id');
			$page_data['student_id'] = $this->input->post('student_id');
			if(empty($page_data['student_id'])){
			   $page_data['student_id'] = 0;
			}
			$page_data['student_id2'] = $this->input->post('student_id2');
			if(empty($page_data['student_id2'])){
			   $page_data['student_id2'] = 0;
			}
			$page_data['percentage_type'] = $this->input->post('percentage_type');
			if(empty($page_data['percentage_type'])){
			   $page_data['percentage_type'] = 0;
			}

             if ($page_data['student_id2'] == 'All' && !empty($page_data['student_id'])  && !empty($page_data['student_id2'])) {
                 redirect(base_url() . 'report/examMarkReportBatchQuiz/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2']. '/' . $page_data['percentage_type'], 'refresh');

             } elseif (!empty($page_data['student_id2']) && !empty($page_data['student_id'])) {

                 redirect(base_url() . 'report/examMarkReportExamQuiz4/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2']. '/' . $page_data['percentage_type'], 'refresh');
             } elseif (!empty($page_data['exam_id'])) {

                 redirect(base_url() . 'report/examMarkReportExamQuiz4/' . $page_data['exam_id'] . '/' . $page_data['student_id'] . '/' . $page_data['student_id2']. '/' . $page_data['percentage_type'], 'refresh');

             } else {
                 $this->session->set_flashdata('error_message', get_phrase('Pleasen select something'));
                 redirect(base_url() . 'report/examMarkReportExamQuiz', 'refresh');
             }
         }

         $page_data['exam_id'] = $exam_id;
         $page_data['student_id'] = $student_id;
         $page_data['student_id2'] = $student_id2;
		 $page_data['percentage_type'] = $percentage_type;
        $page_data['page_name'] = 'examMarkReportbatchexam';
        $page_data['page_title'] = get_phrase('Exam Quiz');
        $this->load->view('backend/index', $page_data);
    }

     /* report for exam report end  */

}
