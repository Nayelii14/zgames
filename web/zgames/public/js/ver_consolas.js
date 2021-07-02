const cargarTabla = (consolas)=>{

    let tbody = document.querySelector("#tbody-consola");
    //2.Recorrer lista de consolas
    for(let i=0; i<consolas.length; ++i){
        //3. Por cada consola generar una fila.
        let tr=document.createElement("tr");
        let tdNombre = document.createElement("td");
        tdNombre.innerText = consolas[i].nombre;
        let tdMarca = document.createElement("td");
        tdMarca.innerText = consolas[i].marca;
        let tdAnio = document.createElement("td");
        tdAnio.innerText = consolas[i].anio;

        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText="Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idConsola = consolas[i].id;
        tdAcciones.appendChild(botonEliminar);
        //5.Agregar los td al tr
        tr.appendChild(tdNombre);
        tr.appendChild(tdMarca);
        tr.appendChild(tdAnio);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);
    }
}

document.addEventListener("DOMContentLoaded", async()=>{
    let consolas = await getConsolas();
    cargarTabla(consolas);
});