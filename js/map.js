mapboxgl.accessToken = 'pk.eyJ1IjoibWF0dG1ha2Vzbm9pc2UiLCJhIjoiY2t5YWNmbnQxMDQyejJvcGJjcWJjdnIxbSJ9.b9WKtKRD9iOtsygz2N4mig';
const mapOne = new mapboxgl.Map({
    container: 'map-cambridge', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [0.1542174437756883, 52.23541300922571], // starting position [lng, lat]
    zoom: 14 // starting zoom
});

// Set marker
const marker1 = new mapboxgl.Marker({
    color: "#ea4335",
    draggable: false
}).setLngLat([0.1542174437756883, 52.23541300922571]).addTo(mapOne);

const mapTwo = new mapboxgl.Map({
    container: 'map-wymondham', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [1.1366204803894677, 52.57607476277063], // starting position [lng, lat]
    zoom: 14 // starting zoom
});

// Set marker
const marker2 = new mapboxgl.Marker({
    color: "#ea4335",
    draggable: false
}).setLngLat([1.1366204803894677, 52.57607476277063])
.addTo(mapTwo);

const mapThree = new mapboxgl.Map({
    container: 'map-yarmouth', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [1.7131110765190403, 52.555933010791406], // starting position [lng, lat]
    zoom: 14 // starting zoom
});

// Set marker
const marker3 = new mapboxgl.Marker({
    color: "#ea4335",
    draggable: false
}).setLngLat([1.7131110765190403, 52.555933010791406])
.addTo(mapThree);
