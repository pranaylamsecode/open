<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Quiz_question_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function createQuestion(){
        $page_data = array(
            'quiz_id' => $this->input->post('quiz_id'),
            'question' => $this->input->post('question'),
            'option1' => $this->input->post('option1'),
            'option2' => $this->input->post('option2'),
            'option3' => $this->input->post('option3'),
            'option4' => $this->input->post('option4'),

            'file' => $_FILES['question_image']['name'],
            'file_a' => $_FILES['option_a']['name'],
            'file_b' => $_FILES['option_b']['name'],
            'file_c' => $_FILES['option_c']['name'],
            'file_d' => $_FILES['option_d']['name'],
            'is_active' => '1',
        );

        // print_r($page_data);
        // exit;

        $this->db->insert('quiz_questions', $page_data);
         // Increment the 'counter' field in quiz_details table
     $id = $this->input->post('quiz_id');
     $this->db->set('counter', 'counter+1', FALSE);
     $this->db->where('quiz_id', $id);
     $this->db->update('quiz_details');
    }

   // The function below inserts into academic syllabus table //
    function updateQuestion($param2){

        $question_image = $_FILES['question_image']['name']  ? $_FILES['question_image']['name']  :  $_FILES['question_image_original']['name'];
        $option_a = $_FILES['option_a']['name']  ? $_FILES['option_a']['name']  :  $_FILES['option_a_original']['name'];
        $option_b = $_FILES['option_b']['name']  ? $_FILES['option_b']['name']  :  $_FILES['option_b_original']['name'];
        $option_c = $_FILES['option_c']['name']  ? $_FILES['option_c']['name']  :  $_FILES['option_c_original']['name'];
        $option_d = $_FILES['option_d']['name']  ? $_FILES['option_d']['name']  :  $_FILES['option_d_original']['name'];


        $page_data = array(
            // 'quiz_id' => $this->input->post('quiz_id'),
            'question' => $this->input->post('question'),
            'option1' => $this->input->post('option1'),
            'option2' => $this->input->post('option2'),
            'option3' => $this->input->post('option3'),
            'option4' => $this->input->post('option4'),
            'answer' => $this->input->post('answer'),

            'file' => $question_image,
            'file_a' => $option_a,
            'file_b' => $option_b,
            'file_c' => $option_c,
            'file_d' => $option_d,
        );

        // print_r($page_data);
        // exit;
        $this->db->where('id', $param2);
        $this->db->update('quiz_questions', $page_data);
    }

    function deleteQuizQuestion($param2){
        // Get the quiz_id of the question being deleted
        $question = $this->db->get_where('quiz_questions', array('id' => $param2))->row();
        $quiz_id = $question->quiz_id;

        // Delete the question from quiz_questions table
        $this->db->where('id', $param2);
        $this->db->delete('quiz_questions');

        // Update the counter field in quiz_details table
        $this->db->where('quiz_id', $quiz_id);
        $this->db->set('counter', 'counter-1', FALSE);
        $this->db->update('quiz_details');
    }

}
