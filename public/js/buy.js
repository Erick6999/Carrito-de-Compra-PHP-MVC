    const boton = document.getElementById('paypal-button-container');
    const buy = document.getElementById('carrito');
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {

         value = document.getElementById('total').value;
          return actions.order.create({
            purchase_units: [{"description":"Total de compra","amount":{"currency_code":"USD","value":value}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Gracias por tu compra!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },
        onClick: function()  {
             const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })
          Toast.fire({
            icon: 'success',
            title: 'Compra realizada correctamente'
          })
          console.log('no yih');
          const forma = document.getElementById("shop");
          var total = document.createElement("input"); 
          total.value= document.getElementById('total').value;;
          total.name="total";
          forma.appendChild(total);
          forma.submit();
          console.log('yih');
          },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();