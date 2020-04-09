<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

    <!-- embedd library jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
        /* #controls {position: absolute;top: 0;bottom: 0;left: 0;right: 200;} */
        #map {position: absolute;top: 0;bottom: 0;left: 0;right: 0;}

        #delete {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px;
            z-index: 400;
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>

</head>
<body>
    <div id="map"></div>
    <input type="submit" class="deleteall" id="delete" value="Delete All Marker"/>
    <script>
        $(document).ready(function(){
            //setting map dengan koordinat dan zoom level
            var map = L.map('map').setView([-8.455383, 115.192969], 10);

            //menampilkan layer map
            L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=4oECnlCscQSAbtknotNK', {
                attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
            }).addTo(map);

            /*  variabel untuk menghitung indeks marker yang telah dibuat */
            var countId = 0;
            
            //custom icon
            var markericon = L.Icon.extend({
                options: {
                    shadowUrl: 'shadow.png',
                    iconSize: [22, 35],
                    shadowSize: [25, 14],
                    iconAnchor: [10, 34],
                    shadowAnchor: [0, 0],
                    popupAnchor: [0, -30]
                }
            })

            //mendeklarasikan icon yang digunakan
            var mark = new markericon({iconUrl: 'monument.png'});

            /*	mendefinisikan sebuah variable popup */
            var popup = L.popup();

            //mendeklarasikan array marker
            var polypoint = [];

            // menangkap event on-click pada map dan memunculkan sebuah marker
            map.on('click',function(e){
                
                /* indeks ditambahkan 1 setiap marker akan dibuat */
                countId = countId + 1;

                var marker = L.marker(e.latlng,{
                    draggable: 'false',
                    icon: mark,
                    /* 
                        menambahkan atribut baru berupa id untuk menandai indeks marker yang dibuat
                    */
                    id: countId,
                    
                }).addTo(map);

                marker.dragging.disable();

                polypoint.push([marker.getLatLng().lat, marker.getLatLng().lng])

                marker.on('click',function(e){
                    /* cara pengambilan nilai atribut dari marker*/
                    var id = marker.options.id;

                    // popup.setLatLng([e.latlng.lat+0.02,e.latlng.lng]);
                    // popup.setContent('<input type="submit" class="delete" value="Delete Marker"/>');
                    // popup.openOn(map);
                });

                /* 
                menggambar polygon dari titik-titik yang didefinisikan diatas. 
                silahkan digoogling untuk mengatur warna, ketebalan garis serta atribut polygon lainnya 
                */
                var polygon = L.polyline(polypoint,{
                    color: 'red'
                }).addTo(map); 

                // pengiriman data koordinat marker ke server
					markerData = {"lat":e.latlng.lat,"lng":e.latlng.lng,"zoom":map.getZoom()}
					//
					$.ajax({
        				url: "./saveToDatabase.php",
        				type: "post",
        				data: markerData,
        				success: function (msg, status, jqXHR){
        					//respon pemanggilan ./saveToDatabase.php
        					alert(msg);	
        				}
    				});	

            });

            $.ajax({
                url: "./loadFromDatabase.php",
                type: "get",
                //tipe data : json
                dataType: 'json',
                success: function (data){
                    for (var i = 0; i < data.length; i++) {
                        //buat marker pada posisi yang tersimpan di database
                        marker = L.marker([data[i].lat,data[i].lng],{
                            draggable: 'false',
                            icon: mark,
                        }).addTo(map);

                        marker.dragging.disable();

                        polypoint.push([data[i].lat,data[i].lng])

                        /* 
                        menggambar polygon dari titik-titik yang didefinisikan diatas. 
                        silahkan digoogling untuk mengatur warna, ketebalan garis serta atribut polygon lainnya 
                        */
                        var polygon = L.polyline(polypoint,{
                            color: 'red'
                        }).addTo(map); 

                        marker.on('click',function(e){
                        /* cara pengambilan nilai atribut dari marker*/
                        var id = marker.options.id;

                        // popup.setLatLng([e.latlng.lat+0.02,e.latlng.lng]);
                        // popup.setContent('<input type="submit" class="delete" value="Delete Marker"/>');
                        // popup.openOn(map);
                    });

                        // //set map center pada marker yang tersimpan di database
                        // map.setView([data.lat,data.lng],data.zoom);
                    }	
                }
            });	

            $('.deleteall').click(function(){
                var clickBtnValue = $(this).val();
                var ajaxurl = 'deleteall.php',
                data =  'deleteall';
                $.post(ajaxurl, data, function (response) {
                    // Response div goes here.
                    alert("action performed successfully");
                });

                location.reload();
            });

            $('.delete').click(function(){
                var clickBtnValue = $(this).val();
                var ajaxurl = 'delete.php',
                data =  'id';
                $.post(ajaxurl, data, function (response) {
                    // Response div goes here.
                    alert("action performed successfully");
                });

                location.reload();
            });
            
            // alert('Ketika anda merefresh halaman ini, maka pada peta akan muncul marker yang terakhir kali anda buat');
        });
        
    </script>
</body>
</html>