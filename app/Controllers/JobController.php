<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class JobController extends Controller
{
    public function index()
    {
        echo "Hello there";
    }

    public function _remap($method)
    {
        if (method_exists($this,$method)) {
            return $this -> $method();
        }
        else {
            $this->index();
        }
    }
}

?>