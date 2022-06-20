<?php
class Sneaker {
 private $db;
 private $query;

 public function __construct() {
  $this->db = Database::make(DATABASE);
  $this->query = new QueryBuilder( $this->db);
}

 public function all() {
  return $this->query->selectAll('sneakers', 'Sneaker');
 }
 public function AllOffers() {
  return $this->query->selectAll('sneakers', 'Sneaker');
 }

 public function filter($field, $value) {
   return $this->query->selectByValue('sneakers', $field, $value);
 }

 public function filteraux() {
  return $this->query->selectAll('details', 'Sneaker');
}

public function fav($data){
  return $this->query->insert('whislist', $data);
}

 public function comprar($data) {
  $sneakerData = [
    'id_user' => $data['id_user'],
    'id_prod' => $data['id_prod'],
  ];
  return $this->query->insert('carrito',$sneakerData);
}
public function aux($data) {
  $sneakerData =[
    'Modelo' => $data['Modelo'],
    'Precio' => $data['Precio'],
    'Stock' => $data['Stock'],
    'id_prod' => $data['id_prod'],
    'Descripcion' => $data['Descripcion'],
    'Imagen' => $data['Imagen'],      
  ];
  return $this->query->insert('details',$sneakerData);
}
public function deleteaux($data) {
  return $this->query->clearByValue('details', 'Modelo', $data[0]->Modelo);
}
}