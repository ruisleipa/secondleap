<?php

class UsersController extends AppController
{
	public function beforeFilter()
	{
		$this->Auth->allow('add');
	}

	public function login()
	{
		if ($this->request->is('post'))
		{
			if ($this->Auth->login())
			{
				$this->redirect($this->Auth->redirect());
			}
			else
			{
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	public function add()
	{
		if($this->request->is('post'))
		{
			$this->User->create();

			if($this->User->save($this->request->data))
			{
				$this->Session->setFlash("Your user account has been created. You can now log in.");
				$this->redirect($this->Auth->redirect(''));
			}
			else
			{
				$this->Session->setFlash(__('The username is already in use.'));
			}
		}
	}
}


