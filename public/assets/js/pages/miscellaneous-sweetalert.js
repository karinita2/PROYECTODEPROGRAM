$( document ).ready(function() {
    // PrettyPrint
    $('pre').addClass('prettyprint');
    prettyPrint();
    
    /*document.querySelector('.sweetalert-basic').onclick = function(){
        swal("Here's a message!");
    };
    document.querySelector('.sweetalert-text').onclick = function(){
        swal("Here's a message!", "It's pretty, isn't it?");
    };
    document.querySelector('.sweetalert-success').onclick = function(){
        swal("Good job!", "You clicked the button!", "success")
    };
    document.querySelector('.sweetalert-warning').onclick = function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this imaginary file!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!", 
            closeOnConfirm: false 
        }, function(){  
            swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
        });
    };*/
    document.querySelector('.sweetalert-cancel').onclick = function(){
        swal({   
            title: "Esta seguro?",
            text: "No podrá recuperar este dato.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sí, Borrar!",
            cancelButtonText: "No, Cancelar!",
            closeOnConfirm: false,
            closeOnCancel: false 
        }, function(isConfirm){
            if (isConfirm) {
                swal("Eliminado!", "Se ha eliminado corrrectamente", "success");
            } else {
                swal("Cancelado", "No se ha eliminado este dato. :)", "error");
            }
        });
    };
    document.querySelector('.sweetalert-icon').onclick = function(){
        swal({
            title: "Sweet!",   
            text: "Here's a custom image.",   
            imageUrl: "assets/images/thumbs-up.jpg" 
        });
    };
    document.querySelector('.sweetalert-html').onclick = function(){
        swal({   
            title: "HTML <small>Title</small>!",   
            text: "A custom <span style='color:#F8BB86'>html<span> message.",   
            html: true  
        });
    };
    document.querySelector('.sweetalert-timer').onclick = function(){
        swal({   
            title: "Auto close alert!",   
            text: "I will close in 2 seconds.",   
            timer: 2000,   
            showConfirmButton: false 
        });
    };
    document.querySelector('.sweetalert-input').onclick = function(){
        swal({   
            title: "An input!",  
            text: "Write something interesting:", 
            type: "input",   
            showCancelButton: true,   
            closeOnConfirm: false,  
            animation: "slide-from-top",  
            inputPlaceholder: "Write something" 
        }, function(inputValue){   
            if (inputValue === false) return false;    
            
            if (inputValue === "") {     
                swal.showInputError("You need to write something!");     
                return false   
            }  
            
            swal("Nice!", "You wrote: " + inputValue, "success"); 
        });
    };
});