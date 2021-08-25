<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\ResumeModel;
use App\Models\VideoProfModel;
use App\Models\HeadlineModel;
use App\Models\EduModel;
use App\Models\ExpModel;
use App\Models\SkillModel;
use App\Models\MediaModel;
use CodeIgniter\I18n\Time;
class User extends Controller
{
    public $userModel;
    public $resumeModel;
    public $videoprofModel;
    public $headlineModel;
    public $eduModel;
    public $expModel;
    public $skillModel;
    public $mediaModel;
    public $session;
    public $email;
    public function __construct()
	{
		helper(["form"]);
        $this->userModel = new UserModel();
        $this->resumeModel = new ResumeModel();
        $this->videoprofModel = new VideoProfModel();
        $this->headlineModel = new HeadlineModel();
        $this->eduModel = new EduModel();
        $this->expModel = new ExpModel();
        $this->skillModel = new SkillModel();
        $this->mediaModel = new MediaModel();
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
                return view('signup', [
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

// User Login
    public function signIn()
    {
        $data =[];
        if ($this->request->getMethod()=='post') {
            $rules = [
                
                'email'=> [
                    'rules'=>'required|valid_email',
                    'label'=> 'Email'
                ],
                'pass'=> [
                    'rules'=>'required|min_length[6]|max_length[16]',
                    'label'=> 'Password'
                ]
            ];
            if ($this->validate($rules)) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('pass');
                $userdata = $this->userModel->verifyEmail($email);
                if ($userdata) 
                {
                    if (password_verify(trim($password), $userdata['password'])) 
                    {
                        if ($userdata['status']=='active') {
                            $this->session->set(['logged_user'=>$userdata['uniid'], 'logged_user_id'=>$userdata['user_id']]);
                            return redirect()->to(base_url().'');
                        }
                        else {
                            $this->session->setTempdata('error','Please actiavate your account before log in');
                            return redirect()->to(current_url());
                        }
                    }
                    else {
                        $this->session->setTempdata('error','Sorry! Wrong password entered',3);
                        return redirect()->to(current_url());
                    }
                }
                else {
                    $this->session->setTempdata('error','Sorry, Email does not exists',3);
                    return redirect()->to(current_url());
                }
            }
            else {
                // $data['validation'] = $this->validator;
                return view('signin', [
                'validation' => $this->validator
            ]);
            }
        }
        return view('signin');
    }

    public function logOut()
    {
        session()->remove('logged_user','logged_user_id');
        session()->destroy();
        return redirect()->to(base_url()."/signin");
    }

// User profile
    public function profile($data=null)
    {
        $uniid = session()->get('logged_user');
        $data['userdata'] = $this->userModel->getLoggedInUserData($uniid);
        // resume
        $resume=$this->resumeModel->where('user_id',session()->get('logged_user_id'))->findAll();
        $data['resume'] = $resume[0]['resume'];
        // print_r($userdata);

        // Video Profile
        $video=$this->videoprofModel->where('user_id',session()->get('logged_user_id'))->findAll();
        $data['video'] = $video[0]['video'];

        // Resume Headline
        $headline=$this->headlineModel->where('user_id',session()->get('logged_user_id'))->findAll();
        $data['headline'] = $headline[0]['headline'];

        //Educaion 
        $education = $this->eduModel->where('user_id',session()->get('logged_user_id'))->findAll();
        $data['education'] = $education;

        //Employment 
        $exp = $this->expModel->where('user_id',session()->get('logged_user_id'))->findAll();
        $data['experience'] = $exp;
    
        // key skills
        $data['skills'] = $this->userModel->getSkills();

        //Employment 
        $media = $this->mediaModel->where('user_id',session()->get('logged_user_id'))->findAll();
        $data['media'] = $media;
        return view('employee-profile',$data);
    }

// Video Upload/update
    public function uploadVideo()
    {
        // echo 'upload resume';
        $vdata = [];
        if ($this->request->getMethod()=='post') {
            // echo 'post method';
            $rules = [
                'vid_profile' => [
                'rules'=>'uploaded[vid_profile]|max_size[vid_profile,25000]|ext_in[vid_profile,mp4,mkv,mov]',
                'label'=>'Video Profile'
                ]
            ];
            if ($this->validate($rules)) {
                // echo 'rule validated';
                $file = $this->request->getFile('vid_profile');
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    if ($file->move(FCPATH.'public\vprofile',$newName)) {
                        // $path = base_url().'/public/resume/'.$file->getName();
                        $videodata = [
                            'user_id'=> session()->get('logged_user_id'),
                            'video'=> $newName
                        ];
                        if ($this->videoprofModel->where('user_id',session()->get('logged_user_id'),)->findAll()==true) {
                            $video=$this->videoprofModel->where('user_id',session()->get('logged_user_id'))->findAll();
                            // print_r($video);
                            $id = $video[0]['id'];
                            $data['video'] = $video[0]['video'];
                            // echo $data['video'];
                            if ($this->request->getMethod()=='post') {
                                $videodata = [
                                    'video'=> $newName
                                ];
                                if ($this->videoprofModel->update($id,$videodata)==true) {
                                    // $data['video'] = $video[0]['video'];
                                    $data['vsuccess']='Video Updated Successfully';
                                }
                                else {
                                    $data['verror']='Video not updated Successfully';
                                }
                            }
                        }
                        else {
                            if($this->videoprofModel->save($videodata)==true)
                            {
                                $video=$this->videoprofModel->where('user_id',session()->get('logged_user_id'))->findAll();
                                // print_r($video);
                                $data['video'] = $video[0]['video'];
                                // echo $data['video'];
                                $data['vsuccess']='Video uploaded Successfully';
                            }
                            else {
                                $data['verror']='Video not uploaded Successfully';
                            }
                        }
                        
                        
                        return $this->profile($data);
                        
                    }
                    else {
                        $this->session->setTempdata('error','Sorry!,video Not Uploaded Successfully');
                        echo $file->getErrorString()." ".$file->getError();
                        return $this->profile();
                    }
                }
            }
            else {
                $data['validation'] = $this->validator;
                return view('employee-profile',$data);
            }
        };
        // return $this->profile($data);
    }

// Delete Video
    public function deleteVideo()
    {
        if ($this->videoprofModel->where('user_id',session()->get('logged_user_id'))->delete()) {
            $data['verror']='Video Deleted Successfully';
            return view('employee-profile',$data);
        }
    }

// Resume upload/update
    public function uploadResume()
    {
        // echo 'upload resume';
        $data = [];
        if ($this->request->getMethod()=='post') {
            // echo 'post method';
            $rules = [
                'cand_resume' => [
                'rules'=>'uploaded[cand_resume]|max_size[cand_resume,2000]|ext_in[cand_resume,pdf,doc,docx]',
                'label'=>'Resume'
                ]
            ];
            if ($this->validate($rules)) {
                // echo 'rule validated';
                $file = $this->request->getFile('cand_resume');
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    if ($file->move(FCPATH.'public\resume',$newName)) {
                        // $path = base_url().'/public/resume/'.$file->getName();
                        $resumedata = [
                            'user_id'=> session()->get('logged_user_id'),
                            'resume'=> $newName
                        ];
                        if ($this->resumeModel->where('user_id',session()->get('logged_user_id'),)->findAll()==true) {
                            $resume=$this->resumeModel->where('user_id',session()->get('logged_user_id'))->findAll();
                            print_r($resume);
                            $id = $resume[0]['id'];
                            $data['resume'] = $resume[0]['resume'];
                            if ($this->request->getMethod()=='post') {
                                $resumedata = [
                                    'resume'=> $newName
                                ];
                                if ($this->resumeModel->update($id,$resumedata)==true) {
                                    $data['success']='Resume Updated Successfully';
                                }
                            }
                        }
                        else {
                            if($this->resumeModel->save($resumedata)==true)
                            {
                                $resume=$this->resumeModel->where('user_id',session()->get('logged_user_id'))->findAll();
                                print_r($resume);
                                $data['resume'] = $resume[0]['resume'];
                                $data['success']='Resume Uploaded Successfully';
                            }
                        }
                        
                        
                        return $this->profile($data);
                        
                    }
                    else {
                        $this->session->setTempdata('error','Sorry!,Resume Not Uploaded Successfully');
                        echo $file->getErrorString()." ".$file->getError();
                        return $this->profile();
                    }
                }
            }
            else {
                $data['validation'] = $this->validator;
                return view('employee-profile',$data);
            }
        };
        return $this->profile($data);
    }

// Delete Resume
    public function deleteResume()
    {
        if ($this->resumeModel->where('user_id',session()->get('logged_user_id'))->delete()) {
            $data['error']='Resume Deleted Successfully';
            return view('employee-profile',$data);
        }
    }

// headline upload/update
    public function uploadHeadLine()
    {
        // echo 'upload resume';
        $data = [];
        if ($this->request->getMethod()=='post') {
            // echo 'post method';
            $rules = [
                'headline' => [
                'rules'=>'required|max_length[500]|min_length[20]',
                'label'=>'Resume Headline'
                ]
            ];
            if ($this->validate($rules)) {
                // echo 'rule validated';
                $headline = $this->request->getVar('headline');
                
                        $headlineData = [
                            'user_id'=> session()->get('logged_user_id'),
                            'headline'=> $headline
                        ];
                        if ($this->headlineModel->where('user_id',session()->get('logged_user_id'),)->findAll()==true) {
                            $headlineArray=$this->headlineModel->where('user_id',session()->get('logged_user_id'))->findAll();
                            // print_r($headlineArray);
                            $id = $headlineArray[0]['id'];
                            $data['headline'] = $headlineArray[0]['headline'];
                            if ($this->request->getMethod()=='post') {
                                $headlineData = [
                                    'headline'=> $headline
                                ];
                                if ($this->headlineModel->update($id,$headlineData)==true) {
                                    $data['hsuccess']='Headline Updated Successfully';
                                }
                                else {
                                    $data['herror']='Headline Not Updated Successfully';
                                }
                            }
                        }
                        else {
                            if($this->headlineModel->save($headlineData)==true)
                            {
                                $headline=$this->resumeModel->where('user_id',session()->get('logged_user_id'))->findAll();
                                // print_r($headline);
                                $data['headline'] = $headline[0]['headline'];
                                $data['hsuccess']='Headline Uploaded Successfully';
                            }
                            else {
                                $data['herror']='Headline Not Uploaded Successfully';
                            }
                        }
                        
                        
                        return $this->profile($data);
                        
                    // }
                    // else {
                    //     $this->session->setTempdata('error','Sorry!,Resume Not Uploaded Successfully');
                    //     echo $file->getErrorString()." ".$file->getError();
                    //     return $this->profile();
                    // }
                // }
            }
            else {
                $data['validation'] = $this->validator;
                return view('employee-profile',$data);
            }
        };
        return $this->profile($data);
    }

// Delete Resume
    public function deleteHeadLine()
    {
        if ($this->headlineModel->where('user_id',session()->get('logged_user_id'))->delete()) {
            $data['herror']='Headline Deleted Successfully';
            return view('employee-profile',$data);
        }
    }

// profile photo
    public function profilePhoto()
    {
        $data = [];
        if ($this->request->getMethod()=='post') {
            // echo 'post method';
            $rules = [
                'profile_photo' => [
                'rules'=>'uploaded[profile_photo]|max_size[profile_photo,20000]|ext_in[profile_photo,png,jpg,jpeg]',
                'label'=>'Profile Photo'
                ]
            ];
            if ($this->validate($rules)) {
                // echo 'rule validated';
                $file = $this->request->getFile('profile_photo');
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    if ($file->move(FCPATH.'public\profilepic',$newName)) {
                        // $path = base_url().'/public/resume/'.$file->getName();
                            $user_id = session()->get('logged_user_id');
                            $profilepic = $newName;
                        $status=$this->userModel->profilePhoto($user_id,$profilepic);
                        if ($status == true) {
                            $data['profilepic'] = $profilepic;
                            $data['psuccess'] = 'Profile Photo Uploaded Successfully';
                        }
                        else {
                            $data['perror'] = 'Profile Photo Not Uploaded Successfully';
                        }
                        return $this->profile($data);
                        
                    }
                    else {
                        $this->session->setTempdata('error','Sorry!,Resume Not Uploaded Successfully');
                        echo $file->getErrorString()." ".$file->getError();
                        return $this->profile();
                    }
                }
            }
            else {
                $data['validation'] = $this->validator;
                return view('employee-profile',$data);
            }
        };
        return $this->profile($data);
    }

// Update personal info
    public function updatePersonalInfo()
    {
        $data=[];
        $user_id=session()->get('logged_user_id');
        if ($this->request->getMethod()=='post'){
           
             $rules = [
                'cand_fname'=> [
                    'rules'=>'required|min_length[2]',
                    'label'=> 'Cadidate Name'
                ],
                'cand_lname'=> [
                    'rules'=>'required|min_length[2]',
                    'label'=> 'Cadidate Name'
                ],
                'cand_email'=> [
                    'rules'=>'required|valid_email',
                    'label'=> 'Candidate Email'
                ],
            ];
            if ($this->validate($rules)) {
                
                $userdata = [
                    'first_name' => $this->request->getVar('cand_fname',FILTER_SANITIZE_STRING),
                    'last_name' => $this->request->getVar('cand_lname'),
                    'email' => $this->request->getVar('cand_email'), 
                    'contact' => $this->request->getVar('cand_cont'), 
                    'location' => $this->request->getVar('cand_loc'), 
                ];
                
                $status=$this->userModel->updatePersonalInfo($user_id,$userdata);
                
                if ($status == 'true') {
                    $data['profilepic'] = $userdata;
                    $data['isuccess'] = 'Personal Info Uploaded Successfully';
                }
                else {
                    $data['ierror'] = 'Personal Info Not Uploaded Successfully';
                }
                return $this->profile($data);

            }
            else {
                $data['validation'] = $this->validator;
                return view('employee-profile',$data);
            }
        };
        return $this->profile($data);
    }

    public function updateEdu()
    {
        $data = [];
        if ($this->request->getMethod()=='post') {
            echo 'post method';
            $eduData = [
                'user_id' => session()->get('logged_user_id'),
                'education1' => $this->request->getVar('cand_Edu1',FILTER_SANITIZE_STRING),
                'course1' => $this->request->getVar('cand_course1',FILTER_SANITIZE_STRING),
                'specialization1' => $this->request->getVar('cand_spl1',FILTER_SANITIZE_STRING),
                'university1' => $this->request->getVar('cand_uni1',FILTER_SANITIZE_STRING),
                'course_type1' => $this->request->getVar('cand_coty1',FILTER_SANITIZE_STRING),
                'passing_yr1' => $this->request->getVar('cand_passyr1',FILTER_SANITIZE_STRING),
                'grading_system1' => $this->request->getVar('cand_grade1',FILTER_SANITIZE_STRING),
                'marks1' => $this->request->getVar('cand_mrk1',FILTER_SANITIZE_STRING),

                'education2' => $this->request->getVar('cand_Edu2',FILTER_SANITIZE_STRING),
                'course2' => $this->request->getVar('cand_course2',FILTER_SANITIZE_STRING),
                'specialization2' => $this->request->getVar('cand_spl2',FILTER_SANITIZE_STRING),
                'university2' => $this->request->getVar('cand_uni2',FILTER_SANITIZE_STRING),
                'course_type2' => $this->request->getVar('cand_coty2',FILTER_SANITIZE_STRING),
                'passing_yr2' => $this->request->getVar('cand_passyr2',FILTER_SANITIZE_STRING),
                'grading_system2' => $this->request->getVar('cand_grade2',FILTER_SANITIZE_STRING),
                'marks2' => $this->request->getVar('cand_mrk2',FILTER_SANITIZE_STRING),
                
                'education3' => $this->request->getVar('cand_Edu3',FILTER_SANITIZE_STRING),
                'course3' => $this->request->getVar('cand_course3',FILTER_SANITIZE_STRING),
                'specialization3' => $this->request->getVar('cand_spl3',FILTER_SANITIZE_STRING),
                'university3' => $this->request->getVar('cand_uni3',FILTER_SANITIZE_STRING),
                'course_type3' => $this->request->getVar('cand_coty3',FILTER_SANITIZE_STRING),
                'passing_yr3' => $this->request->getVar('cand_passyr3',FILTER_SANITIZE_STRING),
                'grading_system3' => $this->request->getVar('cand_grade3',FILTER_SANITIZE_STRING),
                'marks3' => $this->request->getVar('cand_mrk3',FILTER_SANITIZE_STRING),
            ];
            echo $eduData;
            if ($this->eduModel->where('user_id',session()->get('logged_user_id'),)->findAll()==true) {
                $eduArray=$this->eduModel->where('user_id',session()->get('logged_user_id'))->findAll();
                // print_r($headlineArray);
                $id = $eduArray[0]['id'];
                    if ($this->eduModel->update($id,$eduData)==true) {
                        $data['education'] = $eduArray;
                        $data['esuccess']='Education Data Updated Successfully';
                    }
                    else {
                        $data['eerror']='Education Data Not Updated Successfully';
                    }
                // }
            }
            else {
                // echo "save data";
                // print_r($eduData);
                if($this->eduModel->insert($eduData)==true)
                {
                    // echo "data saved";
                    $edu=$this->eduModel->where('user_id',session()->get('logged_user_id'))->findAll();
                    print_r($edu);
                    $data['education'] = $edu;
                    $data['esuccess']='Education Data Uploaded Successfully';
                }
                else {
                    $data['eerror']='Education Data Not Uploaded Successfully';
                }
            }
            return $this->profile($data);
        };
        return $this->profile($data);
    }

// Experience
    public function updateExp()
    { 
        $data = [];
        if ($this->request->getMethod()=='post') {
            echo 'post method';
            $expData = [
                'user_id' => session()->get('logged_user_id'),
                'designation' => $this->request->getVar('cand_des',FILTER_SANITIZE_STRING),
                'company' => $this->request->getVar('cand_cname',FILTER_SANITIZE_STRING),
                'total_experience' => $this->request->getVar('ttl_exp'),
                'job_start' => $this->request->getVar('cand_jst'),
                'job_end' => $this->request->getVar('cand_jtill'),
                'job_type' => $this->request->getVar('cand_jty'),
                'salary' => $this->request->getVar('cand_sal'),
                'job_description' => $this->request->getVar('cand_jrd'),
                'notice_period' => $this->request->getVar('cand_notice'),
            ];
            echo $expData;
            if ($this->expModel->where('user_id',session()->get('logged_user_id'),)->findAll()==true) {
                $expArray=$this->expModel->where('user_id',session()->get('logged_user_id'))->findAll();
                // print_r($headlineArray);
                $id = $expArray[0]['id'];
                    if ($this->expModel->update($id,$expData)==true) {
                        $data['experience'] = $expArray;
                        $data['exsuccess']='Employment Data Updated Successfully';
                    }
                    else {
                        $data['exerror']='Employment Data Not Updated Successfully';
                    }
                // }
            }
            else {
                // echo "save data";
                // print_r($eduData);
                if($this->expModel->save($expData)==true)
                {
                    // echo "data saved";
                    $expArray=$this->expModel->where('user_id',session()->get('logged_user_id'))->findAll();
                    // print_r($edu);
                    $data['experience'] = $expArray;
                    $data['exsuccess']='Employment Data Uploaded Successfully';
                }
                else {
                    $data['exerror']='Employment Data Not Uploaded Successfully';
                }
            }
            return $this->profile($data);
        };
        return $this->profile($data);
    }

// set skills
    public function setSkill()
    {
        if ($this->request->getMethod()=='post'){
            $skills = $this->request->getVar('cand_skill');
            $skillData = [];
            foreach ($skills as $skill) {
                $skillData['skill_id'] = $skill;
                $skillData['cand_id'] = session()->get('logged_user_id');
                print_r($skillData);
                $this->skillModel->save($skillData);
            }
            // print_r($skill);
        }
    }

    // Media links update

    public function updateMedia()
    {
        $data = [];
        if ($this->request->getMethod()=='post') {
            
            $mediaData = [
                'user_id' => session()->get('logged_user_id'),
                'facebook' => $this->request->getVar('cand_face'),
                'instagram' => $this->request->getVar('cand_insta'),
                'linkedin' => $this->request->getVar('cand_lndin'),
            ];
            // echo $expData;
            if ($this->mediaModel->where('user_id',session()->get('logged_user_id'),)->findAll()==true) {
                $mediaArray=$this->mediaModel->where('user_id',session()->get('logged_user_id'))->findAll();
                // print_r($headlineArray);
                $id = $mediaArray[0]['id'];
                    if ($this->mediaModel->update($id,$mediaData)==true) {
                        $data['media'] = $mediaArray;
                        $data['msuccess']='Social Links Updated Successfully';
                    }
                    else {
                        $data['merror']='Social Links Not Updated Successfully';
                    }
                // }
            }
            else {
                // echo "save data";
                // print_r($eduData);
                if($this->mediaModel->save($mediaData)==true)
                {
                    // echo "data saved";
                    $mediaArray=$this->mediaModel->where('user_id',session()->get('logged_user_id'))->findAll();
                    // print_r($edu);
                    $data['media'] = $mediaArray;
                    $data['msuccess']='Employment Data Uploaded Successfully';
                }
                else {
                    $data['merror']='Employment Data Not Uploaded Successfully';
                }
            }
            return $this->profile($data);
        };
        return $this->profile($data);
    }
    

}

?>