function validarNombre() {
    const nombre = document.querySelector("input[name='nombre']").value;
  
    if (nombre === "") {
      alert("Debes ingresar un nombre.");
      return false;
    }
  
    if (nombre.length < 3) {
      alert("El nombre debe tener al menos 3 caracteres.");
      return false;
    }
  
    return true;
  }

  function validarPueblo() {
    const pueblo = document.querySelector("input[name='pueblo']").value;
  
    if (pueblo === "") {
      alert("Debes ingresar el pueblo visitado.");
      return false;
    }
  
    if (pueblo.length < 3) {
      alert("El nombre del pueblo debe tener al menos 3 caracteres.");
      return false;
    }
  
    return true;
  }

  function validarComentario() {
    const comentario = document.querySelector("input[name='comentario']").value;
  
    if (comentario === "") {
      alert("Debes ingresar un comentario.");
      return false;
    }
    
    if (pueblo.length < 8) {
        alert("El comentario del pueblo debe tener al menos 8 caracteres.");
        return false;
      }
    return true;
  }
  