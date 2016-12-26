<?php


class CrudController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$data_user = Users::find();
    	$this->view->data_user=$data_user;
    }


    public function editAction($id)
    {
    	$data_user = Users::findFirst($id);

    	$this->view->data_user=$data_user;
    	if ($data_user->role == 'admin') {
    		$this->view->cek_admin='checked';
    		$this->view->cek_user='';
    	}elseif($data_user->role == 'user'){
    		$this->view->cek_admin='';
    		$this->view->cek_user='checked';
    	}
    }

    public function editSubmitAction($id)
    {
    	$id = $this->request->getPost("id");
   		$user = Users::findFirstById($id);
 
   		$user->assign(array(
                    'username' => $this->request->getPost('usr'),
                    'password' => $this->request->getPost('pwd'),
                    'role' => $this->request->getPost('optradio'),
                    )
                );
        $user->save();
		return $this->response->redirect('crud/');
    }


	public function insertAction()
    {
    	$user = new Users();

		$user->assign(array(
                    'username' => $this->request->getPost('usr'),
                    'password' => $this->request->getPost('pwd'),
                    'role' => $this->request->getPost('optradio'),
                    )
                );
        $user->save();
		return $this->response->redirect('crud/');
		// echo "string";

    }
    
    public function deleteAction($id)
    {
		$user = Users::findFirst($id);
		$user->delete();
		return $this->response->redirect('crud/');
    }

}

