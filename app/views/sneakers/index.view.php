<?php require(APPROOT . '/views/partials/head.php'); ?>
<div class="container h-screen pt-6" x-data="TabApp" >
     <div class="flex-row mb-8 ml-4 space-x-4">
      <button type="submit" x-on:click="selectedTab = 0" class="px-4 py-2 font-semibold text-red-500 bg-transparent border border-black rounded w-42 hover:bg-red-500 hover:text-white hover:border-transparent">
        Modelo Air
      </button>
      <button type="submit" x-on:click="selectedTab = 1"  class="px-4 py-2 font-semibold text-red-500 bg-transparent border border-black rounded w-42 hover:bg-red-500 hover:text-white hover:border-transparent">
        Modelo Travis
      </button>
      <button type="submit" x-on:click="selectedTab = 2"  class="px-4 py-2 font-semibold text-red-500 bg-transparent border border-black rounded w-42 hover:bg-red-500 hover:text-white hover:border-transparent">
        Modelo Drake
      </button>
     </div>
     <div x-show="selectedTab==0" class="grid content-start h-full grid-cols-3 gap-4 p-8 align-middle">
      <div class="w-full max-w-sm lg:max-w-full lg:flex">
        <div class="flex-none h-48 overflow-hidden text-center bg-cover bg-center bg-no-repeat rounded-t lg:h-auto lg:w-48 lg:rounded-t-none lg:rounded-l" style="background-image: url('./images/jordan2.jpg') " title="Modelo 3000">
        </div>
        <div class="flex flex-col justify-between p-4 leading-normal bg-white border-b border-l border-r border-gray-400 rounded-b lg:border-l-0 lg:border-t lg:border-gray-400 lg:rounded-b-none lg:rounded-r">
          <div class="mb-8">
          <?php foreach ($data['sneaker1'] as $key => $sneaker) : ?>
            <p class="flex items-center text-sm text-gray-600">
              Air One
            </p>
            <div class="mb-2 text-xl font-bold text-gray-900"><?= $sneaker->Modelo ?></div>
            <p class="text-base text-gray-700">
            <?= $sneaker->Descripcion ?>
            </p>
          </div>
          <div class="flex items-center">
            <div class="text-sm">
              <p class="leading-none text-gray-900">Stock: <?= $sneaker->Stock ?></p>
              <p class="text-gray-600">$<?= $sneaker->Precio ?></p>
            </div>
          </div>
          <div class="px-4 pt-2 pb-2">
          <form form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="forma1" id="forma1">
            <input id="Modelo" name="Modelo" type="hidden" value="<?= $sneaker->Modelo ?>">
            <input id="Precio" name="Precio" type="hidden" value="<?= $sneaker->Precio ?>">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <input id="Stock" name="Stock" type="hidden" value="<?= $sneaker->Stock ?>">
            <input id="Descripcion" name="Descripcion" type="hidden" value="<?= $sneaker->Descripcion ?>">
            <input id="Imagen" name="Imagen" type="hidden" value="<?= $sneaker->Imagen ?>">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="forma1" name="submit" value="detalle">
             Detalles
            </button>
          </form>
            <form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="formacarrito1" id="formacarrito1">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <button onclick="carrito()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="formacarrito1" name="submit" value="carrito">
             Carrito
            </button>
          </form>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      
      <div class="w-full max-w-sm lg:max-w-full lg:flex">
        <div class="flex-none h-48 overflow-hidden text-center bg-cover bg-center bg-no-repeat rounded-t lg:h-auto lg:w-48 lg:rounded-t-none lg:rounded-l" style="background-image: url('./images/jordan3.jpg')" title="Jordan">
        </div>
        <div class="flex flex-col justify-between p-4 leading-normal bg-white border-b border-l border-r border-gray-400 rounded-b lg:border-l-0 lg:border-t lg:border-gray-400 lg:rounded-b-none lg:rounded-r">
          <div class="mb-8">
          <?php foreach ($data['sneaker2'] as $key => $sneaker) : ?>
            <p class="flex items-center text-sm text-gray-600">
              Air One
            </p>
            <div class="mb-2 text-xl font-bold text-gray-900"><?= $sneaker->Modelo ?></div>
            <p class="text-base text-gray-700">
            <?= $sneaker->Descripcion ?>
            </p>
          </div>
          <div class="flex items-center">
            <div class="text-sm">
              <p class="leading-none text-gray-900">Stock: <?= $sneaker->Stock ?></p>
              <p class="text-gray-600">$<?= $sneaker->Precio ?></p>
            </div>
          </div>
          <div class="px-4 pt-2 pb-2">
          <form form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="forma2" id="forma2">
            <input id="Modelo" name="Modelo" type="hidden" value="<?= $sneaker->Modelo ?>">
            <input id="Precio" name="Precio" type="hidden" value="<?= $sneaker->Precio ?>">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <input id="Stock" name="Stock" type="hidden" value="<?= $sneaker->Stock ?>">
            <input id="Descripcion" name="Descripcion" type="hidden" value="<?= $sneaker->Descripcion ?>">
            <input id="Imagen" name="Imagen" type="hidden" value="<?= $sneaker->Imagen ?>">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="forma2" name="submit" value="detalle">
             Detalles
            </button>
          </form>
            <form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="formacarrito2" id="formacarrito2">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <button onclick="carrito()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="formacarrito2" name="submit" value="carrito">
             Carrito
            </button>
          </form>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="w-full max-w-sm lg:max-w-full lg:flex">
        <div class="flex-none h-48 overflow-hidden text-center bg-cover bg-center bg-no-repeat rounded-t lg:h-auto lg:w-48 lg:rounded-t-none lg:rounded-l" style="background-image: url('./images/jordan.jpg')" title="Jordan">
        </div>
        <div class="flex flex-col justify-between p-4 leading-normal bg-white border-b border-l border-r border-gray-400 rounded-b lg:border-l-0 lg:border-t lg:border-gray-400 lg:rounded-b-none lg:rounded-r">
          <div class="mb-8">
          <?php foreach ($data['sneaker3'] as $key => $sneaker) : ?>
            <p class="flex items-center text-sm text-gray-600">
              Air One
            </p>
            <div class="mb-2 text-xl font-bold text-gray-900"><?= $sneaker->Modelo ?></div>
            <p class="text-base text-gray-700">
            <?= $sneaker->Descripcion ?>
            </p>
          </div>
          <div class="flex items-center">
            <div class="text-sm">
              <p class="leading-none text-gray-900">Stock: <?= $sneaker->Stock ?></p>
              <p class="text-gray-600">$<?= $sneaker->Precio ?></p>
            </div>
          </div>
          <div class="px-4 pt-2 pb-2">
          <form form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="forma3" id="forma3">
            <input id="Modelo" name="Modelo" type="hidden" value="<?= $sneaker->Modelo ?>">
            <input id="Precio" name="Precio" type="hidden" value="<?= $sneaker->Precio ?>">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <input id="Stock" name="Stock" type="hidden" value="<?= $sneaker->Stock ?>">
            <input id="Descripcion" name="Descripcion" type="hidden" value="<?= $sneaker->Descripcion ?>">
            <input id="Imagen" name="Imagen" type="hidden" value="<?= $sneaker->Imagen ?>">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="forma3" name="submit" value="detalle">
             Detalles
            </button>
          </form>
            <form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="formacarrito3" id="formacarrito3">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <button onclick="carrito()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="formacarrito3" name="submit" value="carrito">
             Carrito
            </button>
          </form>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      </div>

      <div x-show="selectedTab==1" class="grid content-start h-full grid-cols-3 gap-4 px-32 align-middle" >
        <div class="max-w-sm overflow-hidden rounded shadow-lg">
          <img class="w-full" src="./images/jordantravis4.jpg" alt="JORDAN TRAVIS AIR">
          <div class="px-6 py-4">
          <?php foreach ($data['sneaker4'] as $key => $sneaker) : ?>
            <div class="mb-2 text-xl font-bold"><?= $sneaker->Modelo ?></div>
            <p class="text-base text-gray-700">
            <?= $sneaker->Descripcion ?>
            </p>
            <br>
            <div class="flex items-center">
            <div class="text-sm">
              <p class="leading-none text-gray-900">Stock: <?= $sneaker->Stock ?></p>
              <p class="text-gray-600">$<?= $sneaker->Precio ?></p>
            </div>
          </div>
          </div>
            <?php endforeach; ?>
            <div class="px-4 pt-2 pb-2">
            <form form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="forma4" id="forma4">
            <input id="Modelo" name="Modelo" type="hidden" value="<?= $sneaker->Modelo ?>">
            <input id="Precio" name="Precio" type="hidden" value="<?= $sneaker->Precio ?>">
            <input id="Stock" name="Stock" type="hidden" value="<?= $sneaker->Stock ?>">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <input id="Descripcion" name="Descripcion" type="hidden" value="<?= $sneaker->Descripcion ?>">
            <input id="Imagen" name="Imagen" type="hidden" value="<?= $sneaker->Imagen ?>">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="forma4" name="submit" value="detalle">
             Detalles
            </button>
          </form>
            <form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="formacarrito4" id="formacarrito4">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <button onclick="carrito()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="formacarrito4" name="submit" value="carrito">
             Carrito
            </button>
          </form>
          </div>
        </div>
  
        <div class="max-w-sm overflow-hidden rounded shadow-lg">
          <img class="w-full" src="./images/jordanair4.jpg" alt="JORDAN TRAVIS AIR IV">
          <div class="px-6 py-4">
          <?php foreach ($data['sneaker5'] as $key => $sneaker) : ?>
            <div class="mb-2 text-xl font-bold"><?= $sneaker->Modelo ?></div>
            <p class="text-base text-gray-700">
            <?= $sneaker->Descripcion ?>
            </p>
            <br>
            <div class="flex items-center">
            <div class="text-sm">
              <p class="leading-none text-gray-900">Stock: <?= $sneaker->Stock ?></p>
              <p class="text-gray-600">$<?= $sneaker->Precio ?></p>
            </div>
          </div>
          </div>
          <div class="px-4 pt-2 pb-2">
          <form form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="forma5" id="forma5">
            <input id="Modelo" name="Modelo" type="hidden" value="<?= $sneaker->Modelo ?>">
            <input id="Precio" name="Precio" type="hidden" value="<?= $sneaker->Precio ?>">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <input id="Stock" name="Stock" type="hidden" value="<?= $sneaker->Stock ?>">
            <input id="Descripcion" name="Descripcion" type="hidden" value="<?= $sneaker->Descripcion ?>">
            <input id="Imagen" name="Imagen" type="hidden" value="<?= $sneaker->Imagen ?>">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="forma5" name="submit" value="detalle">
             Detalles
            </button>
          </form>
            <form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="formacarrito5" id="formacarrito5">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <button onclick="carrito()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="formacarrito5" name="submit" value="carrito">
             Carrito
            </button>
          </form>
          <?php endforeach; ?>
          </div>
        </div>
  
        <div class="max-w-sm overflow-hidden rounded shadow-lg">
          <img class="w-full" src="./images/jordantravis.jpg" alt="JORDAN TRAVIS SUPER">
          <div class="px-6 py-4">
          <?php foreach ($data['sneaker6'] as $key => $sneaker) : ?>
            <div class="mb-2 text-xl font-bold"><?= $sneaker->Modelo ?></div>
            <p class="text-base text-gray-700">
            <?= $sneaker->Descripcion ?>
            </p>
            <br>
            <div class="flex items-center">
            <div class="text-sm">
              <p class="leading-none text-gray-900">Stock: <?= $sneaker->Stock ?></p>
              <p class="text-gray-600">$<?= $sneaker->Precio ?></p>
            </div>
          </div>
          </div>
          <div class="px-4 pt-2 pb-2">
          <form form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="forma6" id="forma6">
            <input id="Modelo" name="Modelo" type="hidden" value="<?= $sneaker->Modelo ?>">
            <input id="Precio" name="Precio" type="hidden" value="<?= $sneaker->Precio ?>">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <input id="Stock" name="Stock" type="hidden" value="<?= $sneaker->Stock ?>">
            <input id="Descripcion" name="Descripcion" type="hidden" value="<?= $sneaker->Descripcion ?>">
            <input id="Imagen" name="Imagen" type="hidden" value="<?= $sneaker->Imagen ?>">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="forma6" name="submit" value="detalle">
             Detalles
            </button>
          </form>
            <form autocomplete="off" action="<?= URLROOT; ?>/sneakers/index" method="post" class="w-4/5 mx-auto" name="formacarrito6" id="formacarrito6">
            <input id="id_prod" name="id_prod" type="hidden" value="<?= $sneaker->Id ?>">
            <button onclick="carrito(event)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit" form="formacarrito6" name="submit" value="carrito">
             Carrito
            </button>
          </form>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
      <p x-show="selectedTab==2">Hola Uriel</p>
     </div>
<?php require(APPROOT . '/views/partials/footer.php'); ?>