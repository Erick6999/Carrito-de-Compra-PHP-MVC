<?php
class Wishlist {
 private $db;
 private $query;

 public function __construct() {
  $this->db = Database::make(DATABASE);
  $this->query = new QueryBuilder( $this->db);
}

 public function all() {
  return $this->query->selectAll('whislist', 'Wishlist');
 }

 public function filter($field, $value) {
   return $this->query->selectByValue('whislist', $field, $value);
 }

 public function productos($field, $value) {
  return $this->query->selectByValue('sneakers', $field, $value);
}

 public function clear($value) {
    return $this->query->clearByValue('whislist','id_prod', $value);
}
public function clearall($field, $value) {
  return $this->query->clearByValue('whislist', $field, $value);
}
public function comprar($data) {
    $sneakerData = [
      'id_user' => $data['id_user'],
      'id_prod' => $data['id_prod'],
    ];
    return $this->query->insert('carrito',$sneakerData);
  }
}