const modalAgregarLibro = document.getElementById("modal-agregar-libro")

const openModalAgregarLibro = document.getElementById("agregar-libro")
const modalAgregarLibro_mensaje = document.getElementById("agregar-libro-mensaje")

const confirmarAgregarLibro = document.getElementById("confirmar-agregar-libro")

const formAgregarLibro = document.getElementById("form-agregar-libro")

openModalAgregarLibro.addEventListener("click",()=>{
    modalAgregarLibro.style.display = "flex"
})


confirmarAgregarLibro.addEventListener("click",async(event)=>{
    event.preventDefault();
    const formDatos = new FormData(formAgregarLibro)

    try{
        const response = await fetch("../../db/agregar-libro.php",{
            method: "POST",
            body: formDatos
        })
        if(!response.ok){
            throw new Error(`Error!: ${response.status}`);
        }
 
        const data = await response.json();
        formAgregarLibro.style.display = "none";

        if (data.exito) {
            modalAgregarLibro_mensaje.style.display = "flex"
            modalAgregarLibro_mensaje.innerHTML = `<h4 style="color: green;">${data.mensaje}</h4>`;
        } else {
            modalAgregarLibro_mensaje.style.display = "flex"
            modalAgregarLibro_mensaje.innerHTML = `<h4 style="color: red;">${data.mensaje}</h4>`;
        }
    } catch(error){
        console.error("Error al procesar el prestamo: ", error);
        formAgregarLibro.style.display = "none";
        modalAgregarLibro_mensaje.innerHTML = `<h4 style="color: red;">Ocurrio un error al procesar el prestamo, intentalo otra vez.</h4>`;    }
        
})




// ------------------------------------------------------------------------------------------------------------------
// MODAL ELIMINAR LIBRO
// ------------------------------------------------------------------------------------------------------------------
const modalEliminarLibro = document.getElementById("modal-borrar-libro")
const openModalEliminarLibro = document.getElementById("eliminar")
const modalEliminarLibro_busqueda = document.getElementById("busqueda")
const modalEliminarLibro_formBuscar = document.getElementById("search-libro-eliminar")
const modalEliminarLibro_buscarBtn = document.getElementById("buscar-libro-eliminar-btn")

modalEliminarLibro_buscarBtn.addEventListener("click",async(event)=>{
    event.preventDefault()

    const formDatos = new FormData(modalEliminarLibro_formBuscar)
    try{
        const response = await fetch("../../db/info-libro.php",{
            method : "POST",
            body: formDatos
        })
        if(!response.ok){
            throw new Error(`Error!: ${response.status}`);
            
        }
        const data = await response.json()
        if(data.exito){
            
        }else{
            
        }
    }catch(error){

    }
})

openModalEliminarLibro.addEventListener("click",()=>{
    modalEliminarLibro.style.display = "flex"
})

window.addEventListener("click", (event) => {
    switch (event.target) {
        case modalAgregarLibro:
            modalAgregarLibro.style.display = "none";
            formAgregarLibro.style.display ="flex"
            modalAgregarLibro_mensaje.innerHTML = ""
            break;
        case modalEliminarLibro:
            modalEliminarLibro.style.display = "none"
            break;
    }
});
