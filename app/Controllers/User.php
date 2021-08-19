<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;
class User extends Controller
{
    public $userModel;
    public $session;
    public $email;
    public function __construct()
	{
		helper(["form"]);
        $this->userModel = new UserModel();
        $this->session=\Config\Services::session();
        $this->email = \Config\Services::email();
	}

// User sign up
    public function index()
    {
        return view('signup');
    }

    public function signup()
    { 
        $data =[];
        // $data['validation'] = null;
        if ($this->request->getMethod()=='post') {
            $rules = [
                'fname'=> [
                    'rules'=>'required|min_length[2]',
                    'label'=> 'First Name'
                ],
                'lname'=> [
                    'rules'=>'required|min_length[2]',
                    'label'=> 'Last Name'
                ],
                'email'=> [
                    'rules'=>'required|valid_email|is_unique[user.email]',
                    'label'=> 'Email'
                ],
                'pass'=> [
                    'rules'=>'required|min_length[6]|max_length[16]',
                    'label'=> 'Password'
                ],
                'cpass'=> [
                    'rules'=>'required|matches[pass]',
                    'label'=> 'Confirm Password'
                ]
            ];
            if ($this->validate($rules)) {
                // echo 'rules validated';
                $uniid = md5(str_shuffle('abcdefghijklmnopqrstuvwxyz'.time()));
                $usedata = [
                    'first_name' => $this->request->getVar('fname',FILTER_SANITIZE_STRING),
                    'last_name' => $this->request->getVar('lname'),
                    'email' => $this->request->getVar('email'),  
                    'password' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT) ,
                    'uniid' => $uniid,
                    'activation_date' => date("Y-m-d h:i:s")
                ];
                if($this->userModel->signup($usedata)){
                    $to = $this->request->getVar('email');
                    $subject = 'Account Activation Link - Cravita';
                    $message = 'Hi '.$this->request->getVar('fname',FILTER_SANITIZE_STRING).",<br><br>Thanks, Your account is created"
                                ."successfully. Please click on the below link to activate your account<br><br>"
                                ."<a href='".base_url()."/user/activate?uniid=".$uniid."' target='_blank'>Activate Now</a><br><br>Thank You.<br>Team Cravita";

                    
                    $this->email->setTo($to);
                    $this->email->setFrom('Cravita Technologies India.com','Info');
                    $this->email->setSubject($subject);
                    $this->email->setMessage($message);

                    if ($this->email->send()) {
                        // echo 'account created';
                        $this->session->setTempdata('success','Account created successfully. Please check your email for activation link.',3);
                        //return redirect()->to(current_url());
                        echo view('signup');
                    }
                    else{
                        // $data = $this->email->printDebugger(['header']);
                        // print_r($data);
                        $this->session->setTempdata('error','Account created successfully. Sorry, unable to send activation link to registered email address.',3);
                        echo view('signup');
                    }
                }
                else{
                    $this->session->setTempdata('error','Sorry, Unable to create an account. Please try again',3);
                    return redirect()->to(current_url());
                }
                echo $usedata['first_name'];
            }
            else {
                // $data['validation'] = $this->validator;
                echo view('signup', [
                'validation' => $this->validator
            ]);
            }
        }
        // return view('signup',$data);
    }

    public function _remap($method)
    {
        if (method_exists($this,$method)) {
            return $this -> $method();
        }
        else {
            $this->signup();
        }
    }

    public function activate()
    {
        $uniid=$_GET['uniid'];
        
        $data=[];
        // echo gettype($uniid);
        if (!empty($uniid)) 
        {
           
            $userdata = $this->userModel->verifyUniid($uniid);
            if ($userdata) 
            {
                if ($this->verifyExpTime($userdata->activation_date)) 
                {
                    if ($userdata->status =='inactive') {
                        $status = $this->userModel->updateStatus($uniid);
                        if ($status == true) {
                            $data['success'] = 'Account Activated Successfully';
                        }
                    }
                    else 
                    {
                        $data['success'] = 'Your account is already activated';
                    }
                }
                else 
                {
                    $status=$this->userModel->deleteData($uniid);
                    if ($status == true) {
                        $data['error'] = 'Sorry! Activation link has expired. Please register once again.';
                    }
                    else {
                        echo 'something went wrong';
                    }
                    
                }
            }
            
        }
        else 
        {
            // echo 'uniid is empty';
            $data['error'] = 'Sorry, unable to process your request';
        }
        return view('signup',$data);
    }

    public function verifyExpTime($regTime)
    {
        $currTime = Time::now();
        $regTime = strtotime($regTime);
        $diffTime = (int)$currTime - (int)$regTime;
        if (3600 > $diffTime) 
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>