<?php
class Shopping {
 private $db;
 private $query;

 public function __construct() {
  $this->db = Database::make(DATABASE);
  $this->query = new QueryBuilder( $this->db);
}

 public function all() {
  return $this->query->selectAll('carrito', 'Shopping');
 }

 public function filter($field, $value) {
   return $this->query->selectByValue('carrito', $field, $value);
 }

 public function productos($field, $value) {
  return $this->query->selectByValue('sneakers', $field, $value);
}

public function comprar($data){
  return $this->query->insert('ventas', $data);
}
public function compraraux($data){
  return $this->query->insert('aux', $data);
}
public function carrito($field, $value){
  return $this->query->selectByValue('carrito', $field, $value);
}

public function carritoaux($field,$value){
  return $this->query->selectByValue('aux', $field, $value);
}

public function clearaux($value) {
  return $this->query->clearByValue('aux','id_user', $value);
}
 public function clear($value) {
    return $this->query->clearByValue('carrito','id_prod', $value);
}
public function clearall($field, $value) {
  return $this->query->clearByValue('carrito', $field, $value);
}
}