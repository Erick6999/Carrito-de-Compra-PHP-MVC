<?php require(APPROOT . '/views/partials/head.php'); ?>
<div class="container h-screen pt-6">
        <div class="grid content-start grid-cols-3 gap-2 px-32 align-middle" >
<?php			
      $total=0;
			for($i=0; $i<count($data); $i++) {
        $dataf = $data[$i];
        for($j=0; $j<count($dataf); $j++){
          $total=$total+$dataf[$j]->Precio;
			?>
        <div class="max-w-sm overflow-hidden rounded shadow-lg">
          <img class="w-full" src="<?php echo URLROOT; ?>/images/<?=$dataf[$j]->Imagen?>" alt="<?= $dataf[$j]->Modelo ?>">
          <div class="px-6 py-4">
            <div class="mb-2 text-xl font-bold"><?= $dataf[$j]->Modelo ?></div>
            <p class="text-base text-gray-700">
            <?= $dataf[$j]->Descripcion ?>
            </p>
            <br>
            <div class="flex items-center">
            <div class="text-sm">
              <p class="text-gray-600">Precio: $<?= $dataf[$j]->Precio ?></p>
            </div>
          </div>
          <div class="px-4 pt-2 pb-2">
            <form autocomplete="off" action="<?= URLROOT; ?>/shoppings/index" method="post" class="w-4/5 mx-auto" name="quitar" id="eliminar">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $dataf[$j]->Id ?>">
            <button onclick="eliminar()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" name="submitme" type="submit" value="delete">
             Quitar del carrito
            </button>
          </form>
          </div>
          </div>
        </div>
			<?php } }?>
      
      </div>
      <form autocomplete="off" action="<?= URLROOT; ?>/shoppings/index" method="post" class="w-4/5 mx-auto" id="form1">
      <div class="grid content-start pt-24 grid-rows-1 gap-2 px-32 justify-center w-full">
      <div class="flex items-center">
      <h2 class="text-xl title-font text-gray-500 tracking-widest mr-8">Total de: $<?= $total ?></h2>
      <input id="id_user" name="id_user" type="hidden" value="<?= $_SESSION['user_id'] ?>">
      <input id="total" name="total" type="hidden" value="<?= $total ?>">
      <input id="submitme" name="submitme" type="hidden" value="Comprar">
      <button value="Comprar" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" onclick="comprado(event)">
             Comprar
      </button>
    </div>
      </form>
      </div>
      </div>
<?php require(APPROOT . '/views/partials/footer.php'); ?>