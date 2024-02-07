<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Exam_quize_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

   // The function below inserts into academic syllabus table //
    function createQuiz(){
        $page_data = array(
            'quiz_name' => $this->input->post('quiz'),
            'quiz_duration' => $this->input->post('duration'),
            'start_date' => date('Y-m-d', strtotime($this->input->post('q_s_d'))),
            'end_date' => date('Y-m-d', strtotime($this->input->post('q_e_d'))),
            'is_active' => '1',
            'other_imp_instruction' => $this->input->post('other_imp_instruction'),
            'negative_mark' => $this->input->post('negative_mark'),
            'mark_for_correct_answer' => $this->input->post('mark_for_correct_answer'),
            'show_it' => intval($this->input->post('show_quiz')),
            'created_date' => date('Y-m-d H:i:s')
        );

        // print_r($page_data);
        // exit;

        $this->db->insert('exam_quiz_details', $page_data);
    }


 // The function below inserts into academic syllabus table //
 function updateQuiz($param2){

    $page_data = array(
        'quiz_name' => $this->input->post('quiz'),
        'quiz_duration' => $this->input->post('duration'),
        'start_date' => date('Y-m-d', strtotime($this->input->post('q_s_d'))),
        'end_date' => date('Y-m-d', strtotime($this->input->post('q_e_d'))),
        'other_imp_instruction' => $this->input->post('other_imp_instruction'),
        'negative_mark' => $this->input->post('negative_mark'),
        'mark_for_correct_answer' => $this->input->post('mark_for_correct_answer'),
        // 'is_active' => DEFAULT_ACTIVE_MODE,
        'show_it' => intval($this->input->post('show_quiz')),
    );

    // print_r($page_data);
    // exit;
$this->db->where('exam_quiz_id', $param2);
$this->db->update('exam_quiz_details', $page_data);
}




function deleteQuiz($param2){
    $this->db->where('exam_quiz_id', $param2);
    $this->db->delete('exam_quiz_questions');

    // Delete from exam_quiz_details table
    $this->db->where('exam_quiz_id', $param2);
    $this->db->delete('exam_quiz_details');
}

function deleteQuizQuestion($param2){
    $this->db->where('id', $param2);
    $this->db->delete('exam_quiz_questions');
}


function createQuizQuestion(){
    $page_data = array(
        'exam_quiz_id' => $this->input->post('exam_quiz_id'),
        'question' => $this->input->post('question'),
        'option_1' => $this->input->post('option_1'),
        'option_2' => $this->input->post('option_2'),
        'option_3' => $this->input->post('option_3'),
        'option_4' => $this->input->post('option_4'),
        'answer' => $this->input->post('answer'),
        'is_active' => '1',
        'created_date' => date('Y-m-d H:i:s')
    );

    // print_r($page_data);
    // exit;

    $this->db->insert('exam_quiz_questions', $page_data);
    // print_r($page_data);
    // exit;
    // Increment the 'counter' field in exam_quiz_details table
    //  $id = $this->input->post('quiz_id');
    //  $this->db->set('counter', 'counter+1', FALSE);
    //  $this->db->where('quiz_id', $id);
    //  $this->db->update('exam_quiz_details');

}


}
