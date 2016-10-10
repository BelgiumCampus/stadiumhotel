var map;

function initMap() {
    var stadiumHotel = {
        lat: -33.934627,
        lng: 25.603518
    };

    map = new google.maps.Map(document.getElementById('map'), {
        center: stadiumHotel,
        zoom: 12
    });

    //the map is limited to 10 markers
    setMarkers(map, stadiumHotel);


}

function setMarkers(map, stadiumHotel) {
    var hotelMarker = {
        url: 'content/images/hotel-marker-transparent.png',
        size: new google.maps.Size(45, 45),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(22, 45)
    };
    var shape = {
        coords: [1, 1, 1, 45, 45, 45, 45, 1],
        type: "poly"
    };

    //1. hotel
    var hotel = new google.maps.Marker({
        position: stadiumHotel,
        map: map,
        icon: hotelMarker,
        shape: shape,
        title: 'Stadium Hotel',
        zIndex: 1,
        animation: google.maps.Animation.DROP
    });
    hotel.addListener('click', function () {
        new google.maps.InfoWindow({
            content: "<div><h3>The Stadium Hotel</h3><p>This is where you'll be staying.</p></div>"
        }).open(map, hotel);
    });
    //2. memorial
    var horses = new google.maps.Marker({
        position: {
            lat: -33.962162,
            lng: 25.608809
        },
        map: map,
        title: 'Horse Memorial'
    });
    horses.addListener('click', function () {
        new google.maps.InfoWindow({
            content: "<div><h3>The Horse Memorial</h3><p>Read more about the Horse Memorial <a href='http://www.nmbt.co.za/listing/horse_memorial.html' target='_blank'>here</a>.</p></div>"
        }).open(map, horses);
    });
    //3. museum
    var museum = new google.maps.Marker({
        position: {
            lat: -33.899428,
            lng: 25.572550
        },
        map: map,
        title: 'Red Location Museum'
    });
    museum.addListener('click', function () {
        new google.maps.InfoWindow({
            content: "<div><h3>Red Location Museum</h3><p>Read more about the Red Location Museum <a href='http://www.nmbt.co.za/listing/red_location_museum.html' target='_blank'>here</a>.</p></div>"
        }).open(map, museum);
    });
    //4. reserve
    var reserve = new google.maps.Marker({
        position: {
            lat: -33.962032,
            lng: 25.620269
        },
        map: map,
        title: 'Donkin Reserve'
    });
    reserve.addListener('click', function () {
        new google.maps.InfoWindow({
            content: "<div><h3>Donkin Reserve</h3><p>Read more about the Donkin Reserve <a href='http://www.nmbt.co.za/listing/donkin_reserve_pyramid_and_lighthouse.html' target='_blank'>here</a>.</p></div>"
        }).open(map, reserve);
    });
    //5. brewery
    var brewery = new google.maps.Marker({
        position: {
            lat: -33.965759,
            lng: 25.623426
        },
        map: map,
        title: 'Dockside Brewery'
    });
    brewery.addListener('click', function () {
        new google.maps.InfoWindow({
            content: "<div><h3>Dockside Brewery</h3><p>Read more about the Dockside Brewery <a href='http://www.docksidebrewery.co.za/' target='_blank'>here</a>.</p></div>"
        }).open(map, brewery);
    });
    //6. water world
    var water = new google.maps.Marker({
        position: {
            lat: -33.971998,
            lng: 25.645317
        },
        map: map,
        title: 'Splash Water World'
    });
    water.addListener('click', function () {
        new google.maps.InfoWindow({
            content: "<div><h3>Splash Water World</h3><p>Read more about Splash Water World <a href='http://splashwaterworldpe.co.za/' target='_blank'>here</a>.</p></div>"
        }).open(map, water);
    });
    //7. art museam
    var art = new google.maps.Marker({
        position: {
            lat: -33.965546,
            lng: 25.611263
        },
        map: map,
        title: 'Nelson Mandela Metropolitan Art Museum'
    });
    art.addListener('click', function () {
        new google.maps.InfoWindow({
            content: "<div><h3>Nelson Mandela Metropolitan Art Museum</h3><p>Read more about the Nelson Mandela Metropolitan Art Museum <a href='http://www.artmuseum.co.za/' target='_blank'>here</a>.</p></div>"
        }).open(map, art);
    });
    //8. casino
    var casino = new google.maps.Marker({
        position: {
            lat: -33.982161,
            lng: 25.657217
        },
        map: map,
        title: 'Boardwalk Hotel and Casino'
    });
    casino.addListener('click', function () {
        new google.maps.InfoWindow({
            content: "<div><h3>Boardwalk Hotel and Casino</h3><p>Read more about the Boardwalk Hotel and Casino <a href='https://www.suninternational.com/boardwalk/' target='_blank'>here</a>.</p></div>"
        }).open(map, casino);
    });
    //9. bayworld
    var bayworld = new google.maps.Marker({
        //get coords
        position: {
            lat: -33.977854,
            lng: 25.648400
        },
        map: map,
        title: 'Bayworld'
    });
    bayworld.addListener('click', function () {
        new google.maps.InfoWindow({
            content: "<div><h3>Bayworld Museum, Oceanarium &amp; Snake Park</h3><p>Read more about Bayworld <a href='http://www.bayworld.co.za/' target='_blank'>here</a>.</p></div>"
        }).open(map, bayworld);
    });
    //10. stadium
    var stadium = new google.maps.Marker({
        position: {
            lat: -33.937935,
            lng: 25.599354
        },
        map: map,
        title: 'Nelson Mandela Bay Stadium'
    });
    stadium.addListener('click', function () {
        new google.maps.InfoWindow({
            content: "<div><h3>Nelson Mandela Bay Stadium</h3><p>Read more about the Nelson Mandela Bay Stadium <a href='http://www.nmbstadium.com/' target='_blank'>here</a>.</p></div>"
        }).open(map, stadium);
    });
}
