var map = L.map('map').setView([-7.5590015, 110.8549945], 17);

// L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    // maxZoom: 17,
    // attribution: '© OpenStreetMap'
// }).addTo(map);

L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
maxZoom: 20,
subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
}).addTo(map);

// $(document).ready(function() {
//     $.getJSON('/dashboard/search/json', function(data) {
//         $.each(data, function(index) {
//             L.marker([data[index].lat, data[index].long]).addTo(map).bindPopup(data[index].name)
//             .openPopup();
//         });
//     });
// });

// $(function(){
    // $.ajax({
        // url: '/dashboard/search',
        // type: 'GET',
        // dataType: 'json',
// 
        // success: function(data) {
            // $.each(data, function( key, value ) {
// 
                // L.marker([value.lat, value.long]).addTo(map)
                    // .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
                    // .openPopup();
            // })
        // },
        // error: function(data) {
// 
        // }
    // });
// })


