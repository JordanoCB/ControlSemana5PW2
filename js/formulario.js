function validar(element){

    // obtenemos el dataset con los valores minimos para ese campo
    const min = parseInt(element.dataset.lengthmin);

    if(element.value.length>=min){

        // tiene los caracteres minimos

        element.classList.remove("borderRed");
        return true;
        }else{

            // no tiene los caracteres minimos

            alert("Debe ingresar el minimo de caracteres indicados");
            element.classList.add("borderRed");
            return false;
        }
    }
    /**
    * Function que valida que todos los valores del formulario tengan el tamaño
    * mínimo indicado.
    * Se ejecuta antes de enviar el formulario.
    */
    function validarFormulario(formulario){
        var result = true;
        var input = formulario.querySelectorAll("input");

        // recorremos todos los input para ver si algun input no cumple con los caracteres minimos

        for (i of input) {
            if (validar(i)==false) {
                result=false;
            }
        }
        return result;
    }