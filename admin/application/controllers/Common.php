<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('Base_Controller.php');
class Common extends Base_Controller {
	//constructor
	function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->database();


    }

    public function index() {

    	$data = array();
        //if form submitted
        if($this->input->server('REQUEST_METHOD') == 'POST') {
            //setting validation rule
            $this->form_validation->set_rules('uname', 'Username', 'required');
            $this->form_validation->set_rules('upassword', 'Password', 'required');

            if ($this->form_validation->run() !== FALSE) {
                $username = $this->input->post('uname', true);
                $password = $this->input->post('upassword', true);
                $password = $this->convert_to_md5($password);
                $login_res = $this->User_model->validate_user($username, $password);

                if( count($login_res) > 0 ) {
                    if($login_res[0]->is_active == 1) {
                        $this->session->set_userdata( array('user_id'  => $login_res[0]->user_id) );
                        $this->session->set_userdata( array('first_name'  => $login_res[0]->first_name) );

                        $this->session->set_userdata( array('user_name'  => $login_res[0]->user_name) );
                        $this->session->set_userdata( array('user_role'  => $login_res[0]->user_role) );

                        // print_r($login_res);
                        // exit;

                        redirect('quiz');
                    } else {
                        $data['error_msg'] = $this->config->item('err_user_inactive');
                    }
                } else {
                    $data['error_msg'] = $this->config->item('err_login_invalid');
                }

            }
        }
        //loading view
    	$this->load->view('login_student', $data);
    }

    public function logout() {
    	$this->session->sess_destroy();
		redirect('home', 'refresh');
    }


//////////////////////////////////////////////////////////////////////private function
    private function isUserLogin() {
    	$user_id = $this->session->userdata('student_id');
    	/* if(!empty($user_id)) {
    		//ok
        } else {
    		redirect('home');
        } */
    }

    public function questionPaper()
    {

        // echo "hello";
        $user_id  = $this->session->userdata('student_id');


        if(empty($user_id))
        {

				redirect('login');

        }
        $quizid = $this->input->post('quiz', true);
        $level_type = $this->input->post('level_type', true);

        $step_instruction = $this->input->post('step_instruction', true);


        $this->isUserLogin();
        $data = array();

        //$where = "user_id = $user_id";
        // $data_arr = ('is_active'=1);
        // $data_arr = array('is_active' => 1);
        $refresh_select_users = "SELECT * FROM users WHERE is_active = 1 AND user_id = $user_id";
        $query_res = $this->db->query($refresh_select_users);

        $res = $query_res->row();

        // Check if the property exists before trying to access it
        $row = isset($res->is_refresh) ? $res->is_refresh : null;

        // $refresh_result = $this->User_model->selectRecord($refresh_select_users);

        // if (count($refresh_result) == 1)
        if ($row == 1) {
            redirect('save-answer');
        } else {

            $quizid = $this->input->post('quiz', true);
             $level_type = $this->input->post('level_type', true);


			if(empty($quizid) && empty($level_type))
			{
				redirect('student/quizlist');
			}
            /* $query = "SELECT * FROM `quiz_questions` WHERE `is_active` = 1 AND `quiz_id` = '$quizid' AND `exam_type` = '$level_type'";
            $data['question'] = $this->User_model->selectRecord($query); */

            $this->db->select('*');
            $this->db->from('quiz_questions');
            $this->db->where('is_active', 1);
            $this->db->where('quiz_id', $quizid);
            $this->db->where('exam_type', $level_type);

            $data['question'] = $this->db->get()->result();

            if(empty($data['question'])){

                $this->session->set_flashdata('flash_message', get_phrase('No question is present !'));

                redirect('student/quizlist');
            }

            $time = "SELECT quiz_duration FROM quiz_details WHERE quiz_id = $quizid";
            $data['time'] = $this->User_model->selectRecord($time);

            // $this->load->view('question-paper', $data);

            // print_r($data['question']);
            // exit;

           // $this->load->view('header_view');

           $step_instruction = $this->input->post('step_instruction', true);
           if($step_instruction == 0)
           {

            $data['quizid'] = $quizid;
            $data['level_type'] = $level_type;

            $this->db->select('*');
            $this->db->from('quiz_details');
            $this->db->where('quiz_id', $quizid);
            $data['quiz_name'] =   $this->db->get()->result();



            $this->load->view('scholarship/question-paper-instruction-0', $data);
           }elseif($step_instruction == 1)
           {
            $data['quizid'] = $quizid;
            $data['level_type'] = $level_type;

            $this->db->select('*');
            $this->db->from('quiz_details');
            $this->db->where('quiz_id', $quizid);
            $data['quiz_name'] =   $this->db->get()->result();

            $this->db->select('*');
            $this->db->from('quiz_details');
            $this->db->where('quiz_id', $quizid);
            $get_duration =   $this->db->get()->result();
            foreach($get_duration as $get_duration)
            {
                    $quiz_duration = $get_duration->quiz_duration;
            }

             $data['quiz_duration'] =  $quiz_duration;

             foreach($data['quiz_name'] as $quiz_name)
             {
                     $mark_correct_answer = $quiz_name->mark_for_correct_answer;
                     $negative_mark = $quiz_name->negative_mark;
                     $more_desc = $quiz_name->other_imp_instruction;
             }

              $data['mark_for_correct_answer'] =  $mark_correct_answer;
              $data['negative_mark'] =  $negative_mark;
              $data['more_desc'] =  $more_desc;




            $this->load->view('scholarship/question-paper-instruction-1', $data);
           }elseif($step_instruction == 2){

            $this->db->select('*');
            $this->db->from('quiz_details');
            $this->db->where('quiz_id', $quizid);
            $data['quiz_name'] =   $this->db->get()->result();

            foreach($data['quiz_name'] as $quiz_name)
            {
                    $mark_correct_answer = $quiz_name->mark_for_correct_answer;
                    $negative_mark = $quiz_name->negative_mark;
                    $more_desc = $quiz_name->other_imp_instruction;
            }

             $data['mark_for_correct_answer'] =  $mark_correct_answer;
             $data['negative_mark'] =  $negative_mark;
             $data['more_desc'] =  $more_desc;

            $this->load->view('scholarship/question-paper', $data);
           }else{


           }




           // $this->load->view('footer_view');
        }
    }


    public function saveAnswer()
    {
        $this->isUserLogin();

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $user_id = $this->session->userdata('student_id');
            $quiz_id = $this->input->post('quizid');

            $select_query = "SELECT * FROM quiz_questions WHERE quiz_id = $quiz_id";
            $quiz_questions = $this->User_model->selectRecord($select_query);

            foreach ($this->input->post() as $key => $answer) {
                if (strpos($key, 'question_') !== false) {
                    $question_id = explode('_', $key)[1];

                    $is_correct = $this->checkAnswer($quiz_questions, $question_id, $answer);

                    $this->User_model->insertRecord('quiz_answer', array(
                        'user_id' => $user_id,
                        'quiz_id' => $quiz_id,
                        'question_id' => $question_id,
                        'answer' => $answer,
                        'is_correct' => $is_correct
                    ));
                }
            }

            $questionQuery = "SELECT quiz_questions.question, quiz_answer.answer FROM quiz_questions
                INNER JOIN quiz_answer ON quiz_answer.question_id = quiz_questions.id
                WHERE quiz_answer.user_id = $user_id AND quiz_answer.quiz_id = $quiz_id";
            $data['result'] = $this->User_model->selectRecord($questionQuery);

            $correctQuery = "SELECT * FROM quiz_answer WHERE quiz_id = $quiz_id AND user_id = $user_id AND is_correct = 1";
            $data['correct'] = $this->User_model->selectRecord($correctQuery);

            // $this->load->view('quiz-complete', $data);
           // $this->load->view('header_view');

           $this->db->select('*');
            $this->db->from('quiz_details');
            $this->db->where('quiz_id', $quiz_id);
            $data['quiz_name'] =   $this->db->get()->result();

            foreach($data['quiz_name'] as $quiz_name)
            {
                    $mark_correct_answer = $quiz_name->mark_for_correct_answer;
                    $negative_mark = $quiz_name->negative_mark;

            }

             $data['mark_for_correct_answer'] =  $mark_correct_answer;
             $data['negative_mark'] =  $negative_mark;

             $correct =count($data['correct']);
                $number_of_minus_from_total_mark =(int)count($data['result']) - (int)$correct;
                $total_minus_mark =$number_of_minus_from_total_mark * (int)$negative_mark;
                $total_correct_mark =(int)$correct * (int)$data['mark_for_correct_answer'];
                $final_marks =(int)$total_correct_mark - (int)$total_minus_mark;

                $data2 = array(
                    'student_id' => $user_id,
                    'quiz_id' => $quiz_id,
                    'score' => $final_marks,
                );

                $this->db->insert('quiz_report', $data2);

                /* logic for prentail  */
                $current_score_value = $final_marks;

                  $this->db->select('score');
                  $this->db->from('quiz_report');
                  $this->db->where('quiz_id', $quiz_id);
                  $report_asc_orders =   $this->db->get()->result_array();

                  $this->db->select('score');
                  $this->db->from('quiz_report');
                  $this->db->where('quiz_id', $quiz_id);
                  $this->db->where('score <', $current_score_value); // Select scores less than the current score value
                  $NumberofValuesBelow = $this->db->get()->result_array();



                $NumberofValuesBelow = count($NumberofValuesBelow);
                $TotalNumberofValues = count($report_asc_orders);
                $precentage = ( (int) $NumberofValuesBelow / (int) $TotalNumberofValues) * 100;

                $data3 = array(
                    'precentage'      => $precentage
                );

                $this->db->where('quiz_id', $quiz_id);

                $this->db->update('quiz_report', $data3);


                /* logic for prentail end  */

            $this->load->view('scholarship/quiz-complete', $data);
           // $this->load->view('footer_view');
        }
    }

    private function checkAnswer($quiz_questions, $question_id, $user_answer)
    {
        foreach ($quiz_questions as $quiz_details) {
            if ($quiz_details->id == $question_id) {
                return ($quiz_details->answer == $user_answer) ? 1 : 0;
            }
        }
        return 0; // Default to incorrect if question not found
    }


    public function startQuiz()
    {
        /* $this->isUserLogin();

        $data = array(); */

        $user_id  = $this->session->userdata('student_id');
        if(empty($user_id))
        {

				redirect('login');

        }

        $query = "SELECT quiz_name, quiz_id
                  FROM quiz_details
                  WHERE CURRENT_DATE() BETWEEN start_date AND end_date
                  AND is_active = 1
                  AND show_it = 1
                  AND counter > 0
                  AND quiz_id NOT IN (
                      SELECT quiz_id
                      FROM quiz_answer
                      WHERE user_id = $user_id
                      GROUP BY quiz_id
                  )
                  ORDER BY quiz_id DESC";



        $data['quiz_name'] = $this->User_model->selectRecord($query);

        // Uncomment the lines below for testing purposes
        // print_r($data['quiz_name']);
        // exit;

      //  $this->load->view('header_view');
        $this->load->view('scholarship/start-quiz', $data);
      //  $this->load->view('footer_view');
    }
    public function quizComplete()
    {
        $this->isUserLogin();
        $query = "select quiz_id from quiz_answer";
	    $data['question'] = $this->User_model->selectRecord($query);
	    // $this->load->view('quiz-complete', $data);

     //   $this->load->view('header_vi  ew');
        $this->load->view('scholarship/quiz-complete', $data);
       // $this->load->view('footer_view');
	}
}
