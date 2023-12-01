import { PlacesAutocomplete } from "places";

function onPlacesResults(results) {
  const resultadosElemento = document.getElementById("origen-results");
  
  if (results.length === 0) {
    resultadosElemento.innerHTML = "No se encontraron resultados para su búsqueda de origen.";
  } else {
    // Limpiar los resultados previos
    resultadosElemento.innerHTML = "";
    
    // Mostrar los resultados de la búsqueda
    const ul = document.createElement("ul");

    results.forEach((result) => {
      const li = document.createElement("li");
      li.textContent = result.description; // O la propiedad que contiene el nombre del lugar
      ul.appendChild(li);
    });

    resultadosElemento.appendChild(ul);
  }
}

const autocomplete = new PlacesAutocomplete({
  placeholder: "Selecciona una fecha",
  onPlacesChanged: onPlacesResults,
});

document.getElementById("origen").appendChild(autocomplete);
