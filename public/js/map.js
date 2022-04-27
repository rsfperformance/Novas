ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
        center: [41.345618, 69.280684],
        zoom: 12,
        controls: []
    }, {
        searchControlProvider: 'yandex#search'
    },
);
myMap.geoObjects
.add(new ymaps.Placemark([41.36049468943865, 69.28168320369915], {
}, {
    iconLayout: 'default#image',
    iconImageHref: 'img/marker.svg',
    iconImageSize: [50, 50],
}))


        
     myMap.panes.get('ground').getElement().style.filter = 'grayscale(100%)';
}


