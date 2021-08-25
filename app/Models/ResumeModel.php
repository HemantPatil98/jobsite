<?php
namespace App\Models;
use CodeIgniter\Model;

class ResumeModel extends Model
{
    protected $table = 'candidate_resume';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    
    protected $allowedFields = ['user_id', 'resume'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}


?>