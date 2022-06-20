<?php
class Sneakers extends Controller{
    public function __construct() {
        $this->sneakerModel = $this->model('Sneaker');
      }
      public function index(){
        $_SESSION['page1'] = true;
        $data = [
          'sneaker1' =>  $this->sneakerModel->filter('Id','1'),
          'sneaker2' =>  $this->sneakerModel->filter('Id','2'),
          'sneaker3' =>  $this->sneakerModel->filter('Id','3'),
          'sneaker4' =>  $this->sneakerModel->filter('Id','4'),
          'sneaker5' =>  $this->sneakerModel->filter('Id','5'),
          'sneaker6' =>  $this->sneakerModel->filter('Id','6')
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
          if (isset($_POST["submit"])) {
            switch ($_POST["submit"]) {
                case "detalle":
                  if($_SESSION['page1']){
                    $data =[
                      'id_prod' => trim($_POST['id_prod']),
                      'Modelo' => trim($_POST['Modelo']),
                      'Precio' => trim($_POST['Descuento']),
                      'Stock' => trim($_POST['Stock']),
                      'Descripcion' => trim($_POST['Descripcion']),
                      'Imagen' => trim($_POST['Imagen']),       
                    ];
                    $this->sneakerModel->aux($data);
                    redirect('sneakers/detalles', $data);
                  }else{
                    die('algo salio mal');
                  }
                    break;
                case "carrito":
                    sleep(3);
                    if($_SESSION['page1']){
                      $data =[
                        'id_user' =>$_SESSION['user_id'],
                        'id_prod' => trim($_POST['id_prod']),     
                      ];
                      if ($this->sneakerModel->comprar($data)) {
                        redirect('shoppings/index');
                      } else {
                        die('algo salio mal...');
                      }
                    }else{
                      die('algo salio mal');
                    }
                    break;
                default:
                die('pero que ha pasado');
                    break;
            }
        }
        }
        $this->view('sneakers/index', $data);
      }

      public function detalles(){
        if( $_SESSION['page1'] ) {
          $data = $this->sneakerModel->filteraux();
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
            if (isset($_POST["submit"])) {
              switch ($_POST["submit"]) {
                  case "carrito":
                      sleep(3);
                      if($_SESSION['page1']){
                        $data =[
                          'id_user' =>$_SESSION['user_id'],
                          'id_prod' => trim($_POST['id_prod']),     
                        ];
                        if ($this->sneakerModel->comprar($data)) { 
                          redirect('shoppings/index', $data);
                        } else {
                          die('algo salio mal...');
                        }
                      }else{
                        redirect('shoppings/index', $data);
                      }
                      break;
                  case "whish":
                        sleep(3);
                        if($_SESSION['page1']){
                          $data =[
                            'id_user' =>$_SESSION['user_id'],
                            'id_prod' => trim($_POST['id_prod']),     
                          ];
                          if ($this->sneakerModel->fav($data)) { 
                            redirect('wishlists/index', $data);
                          } else {
                            die('algo salio mal...');
                          }
                        }else{
                          redirect('wishlists/index', $data);
                        }
                        break;
                  default:
                  die('pero que ha pasado');
                      break;
              }
          }
          }
          $this->view('sneakers/detalles', $data);
          $this->sneakerModel->deleteaux($data);
          }else{
            die('no tienes permiso si no ves los productos');
          }
      }

      public function ofertas(){
        $_SESSION['page1'] = true;
        $data = [
          'sneaker1' =>  $this->sneakerModel->filter('Id','7'),
          'sneaker2' =>  $this->sneakerModel->filter('Id','8'),
          'sneaker3' =>  $this->sneakerModel->filter('Id','9'),
        ];
        //echo $data[0]->Imagen;
        //echo '<pre>' . var_export($data, true) . '</pre>';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
          if (isset($_POST["submit"])) {
            switch ($_POST["submit"]) {
                case "detalle":
                  if($_SESSION['page1']){
                    $data =[
                      'id_prod' => trim($_POST['id_prod']),
                      'Modelo' => trim($_POST['Modelo']),
                      'Precio' => trim($_POST['Descuento']),
                      'Stock' => trim($_POST['Stock']),
                      'Descripcion' => trim($_POST['Descripcion']),
                      'Imagen' => trim($_POST['Imagen']),      
                    ];
                    $this->sneakerModel->aux($data);
                    redirect('sneakers/detalles', $data);
                  }else{
                    die('algo salio mal');
                  }
                    break;
                case "carrito":
                    sleep(2);
                    if($_SESSION['page1']){
                      $data =[
                        'id_user' =>$_SESSION['user_id'],
                        'id_prod' => trim($_POST['id_prod']),     
                      ];
                      if ($this->sneakerModel->comprar($data)) {
                        
                        redirect('shoppings/index');
                      } else {
                        die('algo salio mal...');
                      }
                    }else{
                      die('algo salio mal');
                    }
                    break;
                default:
                die('pero que ha pasado');
                    break;
            }
        }
        }
        //die('no hubo compra');
        $this->view('sneakers/ofertas', $data);
      }
    
}
?>