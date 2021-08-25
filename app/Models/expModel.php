<?php
namespace App\Models;
use CodeIgniter\Model;

class ExpModel extends Model
{
    protected $table = 'employment';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['user_id', 'designation','company','job_start','job_end','job_type','salary','job_description','notice_period'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}


?>