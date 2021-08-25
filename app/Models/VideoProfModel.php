<?php
namespace App\Models;
use CodeIgniter\Model;

class VideoProfModel extends Model
{
    protected $table = 'candidate_video';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    
    protected $allowedFields = ['user_id', 'video'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}


?>