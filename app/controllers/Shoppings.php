<?php
class Shoppings extends Controller{
    public function __construct() {
        $this->shoppingModel = $this->model('Shopping');
      }
    
      public function index(){
        $data = array();
        $datax =  $this->shoppingModel->filter('id_user', $_SESSION['user_id']);
        for($i=0; $i<count($datax); $i++) {
          $arrayf = $this->shoppingModel->productos('Id', $datax[$i]->id_prod);
          //echo $data[0]->Imagen;
          array_push($data, $arrayf);
          //echo '<pre>' . var_export($data, true) . '</pre>';
        }
        //echo '<pre>' . var_export($data, true) . '</pre>';
        //die('se detuvo');
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          sleep(3);
          $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
          if (isset($_POST["submitme"])) {
            switch ($_POST["submitme"]) {
                case "delete":
                  $data2 =[
                    'id_user' =>$_SESSION['user_id'],
                    'id_prod' => trim($_POST['id_prod']),     
                  ];
                  if($this->shoppingModel->clear($data2['id_prod'])){
                    $data = array();
                    $datax =  $this->shoppingModel->filter('id_user', $_SESSION['user_id']);
                    for($i=0; $i<count($datax); $i++) {
                    $arrayf = $this->shoppingModel->productos('Id', $datax[$i]->id_prod);
                    //echo $data[0]->Imagen;
                    array_push($data, $arrayf);
                  //echo '<pre>' . var_export($data, true) . '</pre>';
                    }
                    $this->view('shoppings/index', $data);
                  }else{
                    die('no hizo nada');
                  }
                    break;
                case "Comprar":
                  $data =[
                    'id_user' =>$_SESSION['user_id'],
                    'total' => trim($_POST['total']),     
                  ];
                  if($this->shoppingModel->compraraux($data)){
                      redirect('shoppings/pagar', $data);}
                      else{
                        die('algo salio mal en la compra');
                      }
                    break;
                default:
                die('pero que ha pasado');
                    break;
            }
        }
        }
        $this->view('shoppings/index', $data);
      }

      public function pagar(){
        $data =  $this->shoppingModel->carritoaux('id_user', $_SESSION['user_id']);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          sleep(3);
          $data2 =[
            'id_user' =>$_SESSION['user_id'],
            'total' => trim($_POST['total']),     
          ];
          if($this->shoppingModel->comprar($data2)){
            $this->shoppingModel->clearaux($data2['id_user']);
            $this->shoppingModel->clearall('id_user', $data2['id_user']);
            redirect('shoppings/index', $data2);
          }else{
            $this->view('shoppings/pagar', $data);
          }
        }
        $this->view('shoppings/pagar', $data);
      }
}
?>