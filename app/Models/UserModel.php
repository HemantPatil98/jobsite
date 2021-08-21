<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    public function signup($data)
    {
        $builder = $this->db->table('user');
        $res = $builder->insert($data);
        if ($this->db->affectedRows()==1) {
            return true;
        }
        else {
            return false;
        }
    }

    public function verifyUniid($uniid)
    {
        $builder = $this->db->table('user');
        $builder->select('activation_date,uniid,status');
        $builder->where('uniid',$uniid);
        $result = $builder->get();
        if (count($result->getResultArray())==1) {
            // echo 'data found';
            return $result->getRow();
        }
        else {
            return false;
        }
    }

    public function updateStatus($uniid)
    {
        $builder = $this->db->table('user');
        $builder->where('uniid',$uniid);
        $builder->update(['status'=>'active']);
        if ($this->db->affectedRows()==1) {
            return true;
        }
        else{
            return false;
        }

    }

    public function deleteData($uniid)
    {
        $builder = $this->db->table('user');
        $builder->where('uniid',$uniid);
        $builder->delete();
        if ($this->db->affectedRows()==1) {
            return true;
        }
        else{
            return false;
        }
    }

    public function verifyEmail($email)
    {
        // echo 'verifying email';
        $builder = $this->db->table('user');
        $builder->select("user_id,uniid,status,password");
        $builder->where('email',$email);
        $result = $builder->get();
        print_r($result);
        if (count($result->getResultArray())==1) {
            return $result->getRowArray();
        }
        else {
            return false;
        }
    }

    public function getLoggedInUserData($uniid)
    {
        $builder = $this->db->table('user');
        $builder->where('uniid',$uniid);
        $result = $builder->get();
        if (count($result->getResultArray())==1) {
            return $result->getRow();
        }
        else {
            return false;
        }
    }
}
?>