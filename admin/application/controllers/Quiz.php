<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
ini_set('display_errors', 1);

class Quiz extends CI_Controller {

    function __construct() {
        parent::__construct();
        		$this->load->database();                                //Load Databse Class
                $this->load->library('session');					    //Load library for session
                $this->load->model('academic_model');                   // Load Apllication Model Here
                $this->load->model('meeting_model');                   // Load Apllication Model Here
                $this->load->model('student_model');                    // Load Apllication Model Here
                $this->load->model('exam_question_model');              // Load Apllication Model Here
                $this->load->model('student_payment_model');            // Load Apllication Model Here
                $this->load->model('event_model');                      // Load Apllication Model Here
                $this->load->model('language_model');                      // Load Apllication Model Here
                $this->load->model('admin_model');                      // Load Apllication Model Here
                $this->load->model('quiz_model');
                $this->load->model('quiz_question_model');
            }



        /***********  The function manages quiz ***********************/
        function add_quiz ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){
                // echo 'hello';
                // print_r($param1);
                // exit;


                $this->quiz_model->createQuiz();
                $this->session->set_flashdata('flash_message', get_phrase('Quiz added successfully'));
                redirect(base_url(). 'quiz/manage_quiz', 'refresh');
            }

            if($param1 == 'update'){
                $this->quiz_model->updateQuiz($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
                redirect(base_url(). 'quiz/manage_quiz', 'refresh');
            }

            if($param1 == 'delete'){
                // print_r($param2);
                // exit;
                $this->quiz_model->deleteQuiz($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
                redirect(base_url(). 'quiz/manage_quiz', 'refresh');
            }

            $page_data['page_name']     = 'add_quiz';
            $page_data['page_title']    = get_phrase('Add Quiz');
            $page_data['quiz_details']  = $this->db->get('quiz_details')->result_array();
            $this->load->view('backend/index', $page_data);

        }

        function edit_quiz($quiz_id){

            $page_data['quiz_id']      = $quiz_id;
            $page_data['page_name']     = 'edit_quiz';
            $page_data['page_title']    = get_phrase('Edit Quiz');

            // print_r($page_data);
            // exit;
            $this->load->view('backend/index', $page_data);
        }

        function manage_quiz ($param1 = null, $param2 = null, $param3 = null){

            $page_data['page_name']     = 'manage_quiz';
            $page_data['page_title']    = get_phrase('Manage Quiz');
            $page_data['quiz_details']  = $this->db->get('quiz_details')->result_array();
            // print_r($page_data);
            // exit;
            $this->load->view('backend/index', $page_data);

        }

        function manage_quiz_enquiry($param1 = null, $param2 = null, $param3 = null){

            $page_data['page_name']     = 'manage_quiz_enquiry';
            $page_data['page_title']    = get_phrase('Manage Quiz Enquiry');

            //$page_data['quiz_enquiry']  = $this->db->get('quiz_enquiry')->result_array();

            $this->db->select('e.*, r.score as score, d.quiz_name as quiz_name');
            $this->db->from('quiz_enquiry e');
            $this->db->join('quiz_report r', 'r.student_id = e.student_id');
            $this->db->join('quiz_details d', 'd.quiz_id = r.quiz_id');
            $page_data['quiz_enquiry'] = $this->db->get()->result_array();




            // print_r($page_data);
            // exit;
            $this->load->view('backend/index', $page_data);

        }

         /***********  The function below add, update and delete exam question table ***********************/
        function quizQuestion ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){


				 //uploading file using codeigniter upload library
				 $files = $_FILES['question_image'];
				 $option_a = $_FILES['option_a'];
				 $option_b = $_FILES['option_b'];
				 $option_c = $_FILES['option_c'];
				 $option_d = $_FILES['option_d'];

				 $this->load->library('upload');
				 $config['upload_path'] = 'uploads/question_image/';
				 $config['allowed_types'] = '*';

				 $_FILES['question_image']['name'] = $files['name'];
				 $_FILES['question_image']['type'] = $files['type'];
				 $_FILES['question_image']['tmp_name'] = $files['tmp_name'];
				 $_FILES['question_image']['size'] = $files['size'];


				 $_FILES['option_a']['name'] = $option_a['name'];
				 $_FILES['option_a']['type'] = $option_a['type'];
				 $_FILES['option_a']['tmp_name'] = $option_a['tmp_name'];
				 $_FILES['option_a']['size'] = $option_a['size'];

				 $_FILES['option_b']['name'] = $option_b['name'];
				 $_FILES['option_b']['type'] = $option_b['type'];
				 $_FILES['option_b']['tmp_name'] = $option_b['tmp_name'];
				 $_FILES['option_b']['size'] = $option_b['size'];


				 $_FILES['option_c']['name'] = $option_c['name'];
				 $_FILES['option_c']['type'] = $option_c['type'];
				 $_FILES['option_c']['tmp_name'] = $option_c['tmp_name'];
				 $_FILES['option_c']['size'] = $option_c['size'];


				 $_FILES['option_d']['name'] = $option_d['name'];
				 $_FILES['option_d']['type'] = $option_d['type'];
				 $_FILES['option_d']['tmp_name'] = $option_d['tmp_name'];
				 $_FILES['option_d']['size'] = $option_d['size'];


				 $this->upload->initialize($config);
				 $this->upload->do_upload('question_image');
				 $this->upload->do_upload('option_a');
				 $this->upload->do_upload('option_b');
				 $this->upload->do_upload('option_c');
				 $this->upload->do_upload('option_d');




				 $page_data['question_image'] = $_FILES['question_image']['name'];
				 $page_data['option_a'] = $_FILES['option_a']['name'];
				 $page_data['option_b'] = $_FILES['option_b']['name'];
				 $page_data['option_c'] = $_FILES['option_c']['name'];
				 $page_data['option_d'] = $_FILES['option_d']['name'];
				 /* $this->db->insert('results', $page_data); */

                $this->quiz_question_model->createQuestion();
                $this->session->set_flashdata('flash_message', get_phrase('Data saved successfully'));
                redirect(base_url(). 'quiz/manage_quiz_question', 'refresh');
            }

            if($param1 == 'update'){
                $this->quiz_question_model->updateQuestion($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
                redirect(base_url(). 'quiz/manage_quiz_question', 'refresh');
            }

            $page_data['page_name']     = 'add_quiz_question';
            $page_data['page_title']    = get_phrase('Quiz Question');
            $this->load->view('backend/index', $page_data);
        }

        function edit_quiz_question($id){

            $page_data['id']      = $id;
            $page_data['page_name']     = 'edit_quiz_question';
            $page_data['page_title']    = get_phrase('Edit Quiz Question');

            // print_r($page_data);
            // exit;
            $this->load->view('backend/index', $page_data);
        }

        function manage_quiz_question ($param1 = null, $param2 = null, $param3 = null){

            if($param1 == 'create'){
                // echo 'hello';
                // print_r($param3);
                // exit;
                $this->quiz_question_model->createQuestion();
                $this->session->set_flashdata('flash_message', get_phrase('Quiz added successfully'));
                redirect(base_url(). 'quiz/manage_quiz_question', 'refresh');
            }


            if($param1 == 'delete'){
                // print_r($param2);
                // exit;
                $this->quiz_question_model->deleteQuizQuestion($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
                redirect(base_url(). 'quiz/manage_quiz_question', 'refresh');
            }

            $page_data['page_name'] = 'manage_quiz_question';
            $page_data['page_title'] = get_phrase('Manage Quiz Question');

            // Perform an inner join operation on quiz_questions and quiz_details using their common column
            $this->db->select('*');
            $this->db->from('quiz_questions');
            $this->db->join('quiz_details', 'quiz_questions.quiz_id = quiz_details.quiz_id');
            $page_data['details'] = $this->db->get()->result_array();

            // print_r($page_data);
            // exit;

            $this->load->view('backend/index', $page_data);

        }

        function manage_quiz_enquiry_delete($param1 = null, $param2 = null, $param3 = null){



            if($param1 == 'delete'){
                // print_r($param2);
                // exit;
                $this->quiz_question_model->deleteQuizQuestion($param2);
                $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
                redirect(base_url(). 'quiz/manage_quiz_enquiry', 'refresh');
            }

            $page_data['page_name']     = 'manage_quiz_enquiry';
            $page_data['page_title']    = get_phrase('Manage Quiz Enquiry');
            $page_data['quiz_enquiry']  = $this->db->get('quiz_enquiry')->result_array();
            // print_r($page_data);
            // exit;
            $this->load->view('backend/index', $page_data);

            // print_r($page_data);
            // exit;

            $this->load->view('backend/index', $page_data);

        }



}
