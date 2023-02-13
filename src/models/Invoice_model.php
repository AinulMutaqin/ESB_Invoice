<?php

class Invoice_model {
	private $table = 'invoice';
	private $db;

	public function __construct() {
		$this->db = new Database;
	}

	public function getAllInvoice() {
		$this->db->query('SELECT * FROM '.$this->table);
		return $this->db->resultSet();
	}

	public function getInvoiceById($id) {
		$this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function addInvoice($data) {
		$query = "INSERT INTO ".$this->db->db_name.".".$this->table." (invoice_id, issue_date, due_date, subject) "." VALUES (:invoice_id, :issue_date, :due_date, :subject)";
		$this->db->query($query);
		$this->db->bind('invoice_id', $data['invoice_id']);
		$this->db->bind('issue_date', $data['issue_date']);
		$this->db->bind('due_date', $data['due_date']);
		$this->db->bind('subject', $data['subject']);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function deleteInvoice($id) {
		$query = "DELETE FROM ".$this->db->db_name.".".$this->table." WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function editInvoice($data) {
		$query = "UPDATE ".$this->db->db_name.".".$this->table." SET 
				invoice_id=:invoice_id,
				issue_date=:issue_date,
				due_date=:due_date,
				subject=:subject
				WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('invoice_id', $data['invoice_id']);
		$this->db->bind('issue_date', $data['issue_date']);
		$this->db->bind('due_date', $data['due_date']);
		$this->db->bind('subject', $data['subject']);
		$this->db->bind('id', $data['id']);
		$this->db->execute();
		return $this->db->rowCount();
	}
}