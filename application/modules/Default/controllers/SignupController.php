<?php

class Default_SignupController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $request = $this->getRequest();
        $userModel = new Default_Model_User();
        if($request->isPost()){
            $data = array(
                'name'  => $request->getParam('fullName', ''),
                'email' => $request->getParam('email', ''),
                'password'  => md5($request->getParam('password', '')),
                'role_id'   => $request->getParam('userType')
            );
            $userModel->save($data);
            $this->forward('index', 'login', 'default');
        }
    }


}