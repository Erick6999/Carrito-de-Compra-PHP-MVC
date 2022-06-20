    const btns = document.getElementsByClassName("carrito");
    const buttonlogin = document.getElementById('login');
    const comprar = document.getElementById('form1');
  
     function login(){
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
            title: 'Inicio sesión correctamente'
          })
     }
     function addwish(){
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
          title: 'Se añadio correctamente a la lista de deseos'
        })
   }
     function carrito(){
      Swal.fire(
        'Agregado a carrito :3',
        'Sigue comprando',
        'success'
      )
     }
     function eliminarwhish(){
      Swal.fire(
        'Se elimino el producto :v',
        'Ya no los elimines :((',
        'success'
      )
     }
     function eliminar(){
      Swal.fire(
        'Eliminado del carrito :(',
        'Te vamos a esperar con el dinero :^(',
        'success'
      )
     }

    buttonlogin.addEventListener("click", function(){
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
            title: 'Inicio sesión correctamente'
          })
    });

    function comprado(event, form){
      event.preventDefault();
      console.log('si llega');
      const swalWithTailwind = Swal.mixin({
        customClass: {
            confirmButton: 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded',
            cancelButton: 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded'
        },
        buttonsStyling: false,
    })
    swalWithTailwind.fire({
        title: 'Comprar el carrito de compras',
        text: "Quiere seguir con la compra?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Comprar',
        cancelButtonText: 'Cancel',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            swalWithTailwind.fire(
                    'Comprado',
                    'Pasa a comprar tus productos',
                    'success',
                );                    
            comprar.submit();
        } else if (
            result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithTailwind.fire(
                'Cancelado',
                'Sigue comprando :)',
                'error'
            );
        }
    });
      }