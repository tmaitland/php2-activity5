<?php 

use Phalcon\Mvc\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
       
    }
    public function submitAction()
	{
		$fname = $this->request->get('fname');
		$lname = $this->request->get('lname');
		$email = $this->request->get('email');
        $message = $this->request->get('message');
        

		$this->view->fname = $fname;
		$this->view->lname = $lname;
		$this->view->email = $email;
        $this->view->message = $message;
        
	}
}