<?php
class Wishlists extends Controller{
    public function __construct() {
        $this->wishlistModel = $this->model('Wishlist');
      }
    
      public function index(){
        $data = array();
        $datax =  $this->wishlistModel->filter('id_user', $_SESSION['user_id']);
        for($i=0; $i<count($datax); $i++) {
          $arrayf = $this->wishlistModel->productos('Id', $datax[$i]->id_prod);
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
                  if($this->wishlistModel->clear($data2['id_prod'])){
                    $data = array();
                    $datax =  $this->wishlistModel->filter('id_user', $_SESSION['user_id']);
                    for($i=0; $i<count($datax); $i++) {
                    $arrayf = $this->wishlistModel->productos('Id', $datax[$i]->id_prod);
                    //echo $data[0]->Imagen;
                    array_push($data, $arrayf);
                  //echo '<pre>' . var_export($data, true) . '</pre>';
                    }
                    $this->view('wishlists/index', $data);
                  }else{
                    die('no hizo nada');
                  }
                    break;
                case "buy":
                  $data =[
                    'id_user' =>$_SESSION['user_id'],
                    'total' => trim($_POST['total']),
                    'id_prod' => trim($_POST['id_prod'])     
                  ];
                  if($this->wishlistModel->comprar($data)){
                      redirect('shoppings/index', $data);}
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
        $this->view('wishlists/index', $data);
      }
}
?>