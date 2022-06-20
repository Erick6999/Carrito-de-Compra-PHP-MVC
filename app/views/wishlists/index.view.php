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
          <div class="flex px-4 pt-2 pb-2">
            <form autocomplete="off" action="<?= URLROOT; ?>/wishlists/index" method="post" class="w-4/5 mx-auto" name="quitar" id="eliminar">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $dataf[$j]->Id ?>">
            <button onclick="eliminarwhish()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-4" name="submitme" type="submit" value="delete">
             Quitar de la Whishlist
            </button>
          </form>
          <form form autocomplete="off" action="<?= URLROOT; ?>/wishlists/index" method="post" class="w-4/5 mx-auto" name="comprar" id="comprar">
          <input id="total" name="total" type="hidden" value="<?= $dataf[$j]->Precio ?>">
          <input id="id_prod" name="id_prod" type="hidden" value="<?= $dataf[$j]->Id ?>">
          <input id="id_user" name="id_user" type="hidden" value="<?= $_SESSION['user_id'] ?>">
          <button onclick="carrito()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-4" name="submitme" type="submit" value="buy">
             Agregar a carrito
            </button>
          </form>
          </div>
          </div>
        </div>
			<?php } }?>
      </div>
      </div>
      </div>
<?php require(APPROOT . '/views/partials/footer.php'); ?>