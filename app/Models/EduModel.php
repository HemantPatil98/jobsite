<?php
namespace App\Models;
use CodeIgniter\Model;

class EduModel extends Model
{
    protected $table = 'cadidate_edu';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    
    protected $allowedFields = ['user_id', 'education1','course1','specialization1','university1','course_type1','passing_yr1','grading_system1','marks1','education2','course2','specialization2','university2','course_type2','passing_yr2','grading_system2','marks2','education3','course3','specialization3','university3','course_type3','passing_yr3','grading_system3','marks3',];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}


?>