
// Maps

function initMap() {
    // Coordenadas del negocio (ejemplo)
    var negocioLocation = { lat: 4.658383, lng: -74.093946 }; // Bogotá, ejemplo de coordenadas

    // Crear un mapa centrado en la ubicación del negocio
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15, // Nivel de zoom del mapa
        center: negocioLocation // Centrar el mapa en las coordenadas del negocio
    });

    // Marcar la ubicación del negocio en el mapa
    var marker = new google.maps.Marker({
        position: negocioLocation,
        map: map,
        title: 'KFC Bogotá-Portal80' // Título al pasar el mouse sobre el marcador
    });
}
