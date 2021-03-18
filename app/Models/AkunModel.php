<?php 
    namespace App\Models;

    use CodeIgniter\Model;

    class AkunModel extends Model{
        protected $table = 'pwd';
        protected $allowedFields = ['email', 'username', 'password'];

        public function getByEmail($id){
            $data = $this->where('email', $id)->first();
            if(!$data){
                return NULL;
            }
            else{
                return $data;
            }
        }
        public function getByUname($id){
            $data = $this->where('username', $id)->first();
            if(!$data){
                return NULL;
            }
            else{
                return $data;
            }
        }
    }

?>