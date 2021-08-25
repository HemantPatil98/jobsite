<?php
namespace App\Models;
use CodeIgniter\Model;

class SkillModel extends Model
{
    protected $table = 'candidate_skill';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['cand_id','skill_id'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}


?>