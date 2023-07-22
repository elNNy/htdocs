<?php 

class User_model extends CI_Model{

//     public function  get_users($user_id, $username){
        
//      $this->db->where([
        
//         'id' => $user_id,
//         'username' => $username

//     ]);
        
//     $query =  $this->db->get('users');

//     return $query->result();

//     // $this->db->where('id', $user_id);
//         // $query = $this->db->query("SELECT * FROM users");

//         // return $query->num_fields(); // ეს კოდი სვეტების რაოდენობას გვაჩვენებს
//         // return $query->num_rows();  // ეს გვაძლევს სტრიქონებს


//         // $query =  $this->db->get('users');

//         // return $query->result();

//     // $config['hostname'] = "localhost";
//         // $config['username'] = "root";
//         // $config['password'] = "";
//         // $config['database'] = "elene_db";
     
//         // $config_2['hostname'] = "localhost";
//         // $config_2['username'] = "root";
//         // $config_2['password'] = "";
//         // $config_2['database'] = "elene_db"; 

//         // $connection = $this->load->database($config);

//         // $connection_2 = $this->load->database($config_2);

    
    
//     }

    
//     // create
// public function create_users($data){
//     $this->db->insert('users', $data);
// }
//    // update
// public function update_users($data, $id){
//     $this->db->where(['id'=> $id]);
//     $this->db->update('users', $data);
// }
//    //delete
// public function delete_users($id){
//     $this->db->where(['id'=> $id]);
//     $this->db->delete('users');
// }

public function login_user($username, $password){
    $this->db->where('username', $username);
    $this->db->where('password', $password);

    $result = $this->db->get('users');

    if($result->num_row() == 1){
        return $result->row(0)->id;
    } else{
        return false;
    }
}
}


?>