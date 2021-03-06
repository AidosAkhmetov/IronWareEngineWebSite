<?php
  class Transaction {
    private $db;
    public function __construct() {
      $this->db = new Database;
    }

    public function addTransaction($data) {
      // Prepare Query
      $this->db->query('INSERT INTO transactions (id, customer_id, product,email, amount, currency, status) VALUES(:id, :customer_id, :product,:email, :amount, :currency, :status)');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':customer_id', $data['customer_id']);
      $this->db->bind(':product', $data['product']);
      $this->db->bind(':email',$data['email']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':currency', $data['currency']);
      $this->db->bind(':status', $data['status']);
      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }
    public function showTransactions(){
      $this->db->query('SELECT * from transactions where customers.first_name = user_data.name;');
      $results = $this->db->resultset();
      return $results;
    }
    public function getTransactions() {
      $this->db->query('SELECT * FROM transactions,user_data where user_data.email=transactions.email');

      $results = $this->db->resultset();

      return $results;
    }
  } 
  