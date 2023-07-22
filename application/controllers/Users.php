<?php 

class Users extends CI_Controller{
//     public function show($user_id){

//         $this->load->model('user_model');

//         // $result = $this->user_model->get_users();

//         $data['results'] = $this->user_model->get_users($user_id, 'elene');

//         $this->load->view('user_view', $data);

        

//         foreach ($result as $object){

//             echo $object -> password . "<br>";
//         }

        


        
//     } 

// public function insert(){

//     $this->load->model('user_model');

//     $username = "Mari";
//     $password = "mari123";

//     $this->user_model->create_users([
//         'username' => $username,
//         'password' => $password

//     ]);
// }

// public function update(){

//     $this->load->model('user_model');
//     $id = 1;

//     $username = "elionora";
//     $password = "magarivar";

//     $this->user_model->update_users([
//         'username' => $username,
//         'password' => $password

//     ],$id);

// }
// public function delete(){
//     $this->load->model('user_model');
//     $id = 1;

//     $this->user_model->delete_users($id);

// }



    public function login(){
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
        if($this->form_validation->run() == false){
            $data = array(

                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            redirect('home');
        } else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username, $password);

            if($user_id){
                $user_data = array(
                  'user_id' => $user_id,  
                  'username' => $username, 
                  'logged_in' => true, 
                  
                );
                $this->session->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'you logged in successfuly!');
                redirect('home/index');

                } else { 

                    $this->session->set_flashdata('login_failed', 'you are not logged in!');
                    redirect('home/index');
                }

        }

        }


    
        // echo $this ->input->post('username');
    }

?> 