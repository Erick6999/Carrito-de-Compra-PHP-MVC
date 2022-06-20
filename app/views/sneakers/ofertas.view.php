<?php require(APPROOT . '/views/partials/head.php'); ?>
       <div class="container h-screen pt-6">
       <div class="grid content-start h-full grid-cols-3 gap-4 px-32 align-middle" >
        <div class="max-w-sm overflow-hidden rounded shadow-lg">
        <?php foreach ($data['sneaker1'] as $key => $sneaker) : ?>
          <img class="w-full" src="<?php echo URLROOT; ?>/images/<?=$sneaker->Imagen?>" alt="<?= $sneaker->Modelo ?>">
          <div class="px-6 py-4">
            <div class="mb-2 text-xl font-bold"><?= $sneaker->Modelo ?></div>
            <p class="text-base text-gray-700">
            <?= $sneaker->Descripcion ?>
            </p>
            <br>
            <div class="flex items-center">
            <div class="text-sm">
              <p class="leading-none text-gray-900">Stock: <?= $sneaker->Stock ?></p>
              <p class="text-gray-600">Precio original: $<?= $sneaker->Precio ?></p>
              <p class="text-gray-600">En oferta por: $<?= $sneaker->Descuento ?></p>
            </div>
          </div>
          </div>
          <div class="px-4 pt-2 pb-2">
            <form form autocomplete="off" action="<?= URLROOT; ?>/sneakers/ofertas" method="post" class="w-4/5 mx-auto" name="forma1" id="forma1">
            <input id="Modelo" name="Modelo" type="hidden" value="<?= $sneaker->Modelo ?>">
            <input id="Precio" name="Precio" type="hidden" value="<?= $sneaker->Descuento ?>">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <input id="Stock" name="Stock" type="hidden" value="<?= $sneaker->Stock ?>">
            <input id="Descripcion" name="Descripcion" type="hidden" value="<?= $sneaker->Descripcion ?>">
            <input id="Imagen" name="Imagen" type="hidden" value="<?= $sneaker->Imagen ?>">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="forma1" name="submit" value="detalle">
             Detalles
            </button>
          </form>
            <form autocomplete="off" action="<?= URLROOT; ?>/sneakers/ofertas" method="post" class="w-4/5 mx-auto" name="formacarrito1" id="formacarrito1">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <button onclick="carrito()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="formacarrito1" name="submit" value="carrito">
             Carrito
            </button>
          </form>
          <?php endforeach; ?>
          </div>
        </div>
        <div class="max-w-sm overflow-hidden rounded shadow-lg">
        <?php foreach ($data['sneaker2'] as $key => $sneaker) : ?>
          <img class="w-full" src="<?php echo URLROOT; ?>/images/<?=$sneaker->Imagen?>" alt="<?= $sneaker->Modelo ?>">
          <div class="px-6 py-4">
            <div class="mb-2 text-xl font-bold"><?= $sneaker->Modelo ?></div>
            <p class="text-base text-gray-700">
            <?= $sneaker->Descripcion ?>
            </p>
            <br>
            <div class="flex items-center">
            <div class="text-sm">
              <p class="leading-none text-gray-900">Stock: <?= $sneaker->Stock ?></p>
              <p class="text-gray-600">Precio original: $<?= $sneaker->Precio ?></p>
              <p class="text-gray-600">En oferta por: $<?= $sneaker->Descuento ?></p>
            </div>
          </div>
          </div>
          <div class="px-4 pt-2 pb-2">
          <form form autocomplete="off" action="<?= URLROOT; ?>/sneakers/ofertas" method="post" class="w-4/5 mx-auto" name="forma2" id="forma2">
            <input id="Modelo" name="Modelo" type="hidden" value="<?= $sneaker->Modelo ?>">
            <input id="Precio" name="Precio" type="hidden" value="<?= $sneaker->Descuento ?>">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <input id="Stock" name="Stock" type="hidden" value="<?= $sneaker->Stock ?>">
            <input id="Descripcion" name="Descripcion" type="hidden" value="<?= $sneaker->Descripcion ?>">
            <input id="Imagen" name="Imagen" type="hidden" value="<?= $sneaker->Imagen ?>">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="forma2" name="submit" value="detalle">
             Detalles
            </button>
          </form>
            <form autocomplete="off" action="<?= URLROOT; ?>/sneakers/ofertas" method="post" class="w-4/5 mx-auto" name="formacarrito2" id="formacarrito2">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <button onclick="carrito()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="formacarrito2" name="submit" value="carrito">
             Carrito
            </button>
          </form>
          <?php endforeach; ?>
          </div>
        </div>
        <div class="max-w-sm overflow-hidden rounded shadow-lg">
        <?php foreach ($data['sneaker3'] as $key => $sneaker) : ?>
          <img class="w-full" src="<?php echo URLROOT; ?>/images/<?=$sneaker->Imagen?>" alt="<?= $sneaker->Modelo ?>">
          <div class="px-6 py-4">
            <div class="mb-2 text-xl font-bold"><?= $sneaker->Modelo ?></div>
            <p class="text-base text-gray-700">
            <?= $sneaker->Descripcion ?>
            </p>
            <br>
            <div class="flex items-center">
            <div class="text-sm">
              <p class="leading-none text-gray-900">Stock: <?= $sneaker->Stock ?></p>
              <p class="text-gray-600">Precio original: $<?= $sneaker->Precio ?></p>
              <p class="text-gray-600">En oferta por: $<?= $sneaker->Descuento ?></p>
            </div>
          </div>
          </div>
          <div class="px-4 pt-2 pb-2">
          <form form autocomplete="off" action="<?= URLROOT; ?>/sneakers/ofertas" method="post" class="w-4/5 mx-auto" name="forma3" id="forma3">
            <input id="Modelo" name="Modelo" type="hidden" value="<?= $sneaker->Modelo ?>">
            <input id="Precio" name="Precio" type="hidden" value="<?= $sneaker->Descuento ?>">
            <input id="Stock" name="Stock" type="hidden" value="<?= $sneaker->Stock ?>">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <input id="Descripcion" name="Descripcion" type="hidden" value="<?= $sneaker->Descripcion ?>">
            <input id="Imagen" name="Imagen" type="hidden" value="<?= $sneaker->Imagen ?>">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="forma3" name="submit" value="detalle">
             Detalles
            </button>
          </form>
            <form autocomplete="off" action="<?= URLROOT; ?>/sneakers/ofertas" method="post" class="w-4/5 mx-auto" name="formacarrito3" if="formacarrito3">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <button onclick="carrito()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="formacarrito3" name="submit" value="carrito">
             Carrito
            </button>
          </form>
          <?php endforeach; ?>
          </div>
        </div>
</div>
<?php require(APPROOT . '/views/partials/footer.php'); ?>