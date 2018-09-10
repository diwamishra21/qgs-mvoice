<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
 
namespace App\Controller;
ob_start();
use App\Controller\AppController;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\Network\Request;
use Cake\View\Form\EntityContext;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\NotFoundException;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AnonymousController extends AppController
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
     
		//$this->viewBuilder()->layout('layout');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }
	
	 public function anonymousConfirmation()
    {
		$this->loadModel('Users');
	$this->viewBuilder()->layout('');
		$ip =  $this->request->clientIp();
		$time = Time::now();
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
				$authuser=
                $this->Flash->success(__('The user has been saved.'));

                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user','ip','time'));
		}
	
	 public function witns()
    {
			//$this->loadModel('Witns');
 if ($this->request->is('post')) {
$wi_name=$this->request->data['witness_name'];
$wi_bu=$this->request->data('witness_bu');
$wi_city=$this->request->data['witness_city'];
$wi_location=$this->request->data('witness_work');
$wi_empid=$this->request->data('witness_emp_id');
$wi_email_id=$this->request->data('witness_email');
$a_useremail=$this->request->data('a_useremail');
$relationship=$this->request->data('witness_relation');
$witnsTable = TableRegistry::get('witns');
$witns = $witnsTable->newEntity();

$witns->wi_name  =$wi_name ;
$witns->wi_bu = $wi_bu;
$witns->wi_city = $wi_city;
$witns->wi_location =$wi_location; 
$witns->wi_empid =$wi_empid; 
$witns->wi_email_id =$wi_email_id; 
$witns->a_useremail =$a_useremail; 
$witns->relationship =$relationship; 

//pr($this->request->getData());
if ($witnsTable->save($witns)) {




return $this->redirect([ 'controller'=>'Anonymous','action' => 'anonymousConcern']);
   }
 	}
exit;
	}
	 
	 public function anonymousConcern()
    {
$this->loadModel('Witns');
		//$this->viewBuilder()->layout('anonymouslayout');
$time1 = Time::now();
$time = Time::now();
$a = (string) microtime();
 if ($this->request->is('post')) {
//pr($this->request->data);die;
	 $c_title=$this->request->data['c_title'];
$concern_regarding=$this->request->data['c_subject'];
$other_issue=$this->request->data['other_issue'];
$colleague_complaint=$this->request->data['c_option'];
$resolve_complaint=$this->request->data['c_tried_r_own'];
$bu=$this->request->data('bu');
$city=$this->request->data('city');
$work_location=$this->request->data['work_location'];
$name=$this->request->data('name');
$username=$this->request->data('name');
$user_type=$this->request->data('user_type');
$password=$this->request->data['password'];
$pass=$this->request->data['pass'];
$empid=$this->request->data['empid'];
$email=$this->request->data('email');
$mobile=$this->request->data('mobile');
$notes=$this->request->data('notes');
$concern_details=$this->request->data('concern_details');
$attach_data =$this->request->data('attach_data');

   

$attach_data_imploed=implode(",",$attach_data);

$first_access=$time;
$confirmed=$this->request->data('confirmed');
$complaint_id_status=$this->request->data('complaint_id_status');
$status=$this->request->data('status');
$usersTable = TableRegistry::get('users');
$usersdata = $usersTable->newEntity();
$usersdata->c_title  =$c_title ;
$usersdata->c_subject = $concern_regarding;
$usersdata->other_issue = $other_issue;
$usersdata->c_option =$colleague_complaint; 
$usersdata->c_tried_r_own =$resolve_complaint; 
$usersdata->bu =$bu; 
$usersdata->city =$city; 
$usersdata->work_location  =$work_location ;
$usersdata->name = $name;
$usersdata->username = $username;
$usersdata->user_type = $user_type;
$usersdata->password = $password;
$usersdata->pass = $pass;
$usersdata->empid = $empid;
$usersdata->email =$email; 
$usersdata->mobile =$mobile; 
$usersdata->notes =$notes; 
$usersdata->concern_details =$concern_details; 
$usersdata->attach_data =$attach_data_imploed; 



$complaint_id = "STEP" . substr($a, 2, 6) . $empid;
$usersdata->complaint_id =$complaint_id; 
$usersdata->first_access =$first_access; 
$usersdata->confirmed =$confirmed; 
$usersdata->status =$status; 
$usersdata->complaint_id_status =$complaint_id_status;
if ($usersTable->save($usersdata)) {
     
 $id = $usersdata->id;

$tablename = TableRegistry::get("Witns");
$query = $tablename->query();
            $result = $query->update()
                    ->set(['Witns.user_id' => $id])
                    ->where(['Witns.a_useremail' => $email])
                    ->execute();

//pr( $result);die;

                       

return $this->redirect([ 'controller'=>'Anonymous','action' => 'concern','complaint_id'=>$complaint_id]);

	 //$this->Flash->success(__('The user has been saved.'));

	 	 
	   }
$this->set(compact('time1','complaint_id','complaint_id_data'));
//pr($this->request->getData());
 }

 
	}
		
		 public function concern()
    {
		$this->loadModel('Users');
		 //$complaint_id= $this->Users->get($id, [
            //'contain' => []
        //]);
		//$complaint_id1 = $this->Users->find('all', array('order'=> 'Users.id DESC' ));

       
	}
		
		
		
}
