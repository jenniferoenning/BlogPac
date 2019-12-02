$( "#enviar" ).on( "click", function(valid) {
    if($('#title')[0].value == ''){
        valid.preventDefault();
        Swal.fire({
            title: 'Cpf inválido!',
            text: '',
            type: 'error',
            confirmButtonText: 'Ok'
        })
    }
    else if($('#name')[0].value == ''){
   valid.preventDefault();
        Swal.fire({
            itle: 'Nome inválido!',
            text: '',
            type: 'error',
            confirmButtonText: 'Ok'
        })
    }
    else if($('#exampleFormControlTextarea1')[0].value == ''){
   valid.preventDefault();
        Swal.fire({
            title: 'Telefone inválido!',
            text: '',
            type: 'error',
            confirmButtonText: 'Ok'
        }) 
    }
    else{
        valid.preventDefault();
        Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Seu formulário foi enviado!',
           showConfirmButton: false,
          timer: 1500       })
    }
});