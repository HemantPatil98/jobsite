<?php
namespace App\Models;
use CodeIgniter\Model;

class HeadlineModel extends Model
{
    protected $table = 'resume_headline';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    
    protected $allowedFields = ['user_id', 'headline'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}


?>