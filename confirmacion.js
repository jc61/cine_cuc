function confirmacion(event) {
    
    if(confirm("¿Confirmar cancelación?")){
        return true;
    }else{
        event.preventDefault();
    }
}

let linkCancel = document.querySelectorAll(".cancelar");

for (let index = 0; index < linkCancel.length; index++) {
    linkCancel[index].addEventListener('click', confirmacion);
    
}