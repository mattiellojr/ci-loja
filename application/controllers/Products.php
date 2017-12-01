<?php

/**
* Products Controller
*/
class Products extends CI_Controller {

	public function index() {
		$data['title'] = 'Produtos';

		$this -> load -> view('templates/header');
		$this -> load -> view('products/index');
		$this -> load -> view('templates/footer');
	}
	
	public function create() {
		$this -> load -> view('templates/header');
		$this -> load -> view('products/create');
		$this -> load -> view('templates/footer');
	}

	public function store()	{
		
		$this -> db -> insert(array(
			'name' => $_POST['name'],
			'price' => $_POST['price'],
			'quantity' => $_POST['quantity']
		));
	}

	public function update() {

	}

	public function destroy() {

	}
}