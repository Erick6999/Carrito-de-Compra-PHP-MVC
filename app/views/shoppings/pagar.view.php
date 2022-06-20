<?php require(APPROOT . '/views/partials/head.php'); ?>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">Sneakers el mameitor</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">Pagar el carrito</h1>
        <p class="leading-relaxed mb-4">Puedes pagar con paypal y otras opciones que te ofrecemos en la parte de abajo</p>
        <div class="flex">
            <form form autocomplete="off" action="<?= URLROOT; ?>/shoppings/pagar" method="post" class="w-4/5 mx-auto" name="shop" id="shop">
            <input type="text" id="total" name="total" class="title-font font-medium text-2xl text-gray-900" value="<?= $data[0]->total ?>" readonly>
        </div>
      </div>
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="<?php echo URLROOT; ?>/images/logo_nike.jpg">
    </div>
    <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
      </div>
  </div>
  </form>
</section>
<?php require(APPROOT . '/views/partials/footer.php'); ?>