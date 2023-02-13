<?php

class Invoice extends Controller {
	public function index() {
		$data['title'] = 'List Invoices';
		$data['invoices'] = $this->model('Invoice_model')->getAllInvoice();
		$this->view('templates/header', $data);
		$this->view('invoice/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id) {
		$data['title'] = 'Detail Invoice';
		$data['invoices'] = $this->model('Invoice_model')->getInvoiceById($id);
		$this->view('templates/header', $data);
		$this->view('invoice/detail', $data);
		$this->view('templates/footer');
	}

	public function add() {
		if($this->model('Invoice_model')->addInvoice($_POST) > 0) {
			Messanger::setFlash('success', 'add', 'success');
			header('Location: '.BASEURL.'/invoice');
			exit;
		} else {
			Messanger::setFlash('failed', 'add', 'danger');
			header('Location: '.BASEURL.'/invoice');
			exit;
		}
	}

	public function delete($id) {
		if($this->model('Invoice_model')->deleteInvoice($id) > 0) {
			Messanger::setFlash('success', 'delete', 'success');
			header('Location: '.BASEURL.'/invoice');
			exit;
		} else {
			Messanger::setFlash('failed', 'delete', 'danger');
			header('Location: '.BASEURL.'/invoice');
			exit;
		}
	}

	public function getedit() {
		echo json_encode($this->model('Invoice_model')->getInvoiceById($_POST['id']));
	}

	public function edit() {
		if($this->model('Invoice_model')->editInvoice($_POST) > 0) {
			Messanger::setFlash('success', 'edit', 'success');
			header('Location: '.BASEURL.'/invoice');
			exit;
		} else {
			Messanger::setFlash('failed', 'edit', 'danger');
			header('Location: '.BASEURL.'/invoice');
			exit;
		}
	}
}