<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/all.css" />

    <style>
        #map {position: absolute; top: 0; bottom: 0; left: 0; right: 0;}
        .leaflet-control-attribution {
            display: none !important;
        }
        .leaflet-popup-content{
            margin: 0px;
        }
        .leaflet-popup-content-wrapper{
            padding: 0px;
        }
        .image-container{
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                overflow: hidden;
                width: 275px;
                height: 160px;
        }
        .nama{
                font-size: 16px;
                width: 175px;
                margin-top: 10px;
                margin-left: 10px;
                font-weight: bold;
                padding-bottom: 10px;
        }
        .alamat{
                margin-left: 10px;
                padding-bottom: 10px;
        }
        .map-icon{
            margin-right: 10px;
            float: left;
            font-size: 20px;
            vertical-align: middle;
            text-align: center;
        }
        .alamat-txt{
            display: inline-block;
            width: 235px;
        }
        .telepon{
            margin-left: 10px;
            padding-bottom: 10px;
        }
        .telepon-icon{
            float: left;
            margin-right: 10px;
            font-size: 15px;
        }
        .telepon-txt{
            width: 175px;
        }
        .kompas{
            margin-left: 10px;
            padding-bottom: 10px;
        }
        .kompas-icon{
            float: left;
            margin-right: 10px;
            font-size: 15px;
        }
        .kompas-txt{
            width: 175px;
        }
        .jam{
            margin-left: 10px;
            padding-bottom: 10px;
        }
        .jam-icon{
            float: left;
            margin-right: 10px;
            font-size: 15px;
        }
        .jam-txt{
            width: 175px;
        }
    </style>
</head>
<body>
    <div id ="map"></div>
    <script>
        //setting map dengan koordinat dan zoom level
        var map = L.map('map').setView([-4.4228838, 116.8754437], 6);

        //menampilkan layer map
        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=4oECnlCscQSAbtknotNK', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
        }).addTo(map);

        //deklarasi variable popup
        var popup = L.popup();

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

        //declare icon yang digunakan
        var mark = new markericon({iconUrl: 'monument.png'});

        var polyLatLng = [];

        createmark('bajrasandhi',-8.6717348,115.233902,'https://upload.wikimedia.org/wikipedia/commons/9/91/Bajra-sandi.jpg', 'Monumen Bajra Sandhi', 'Jl. Raya Puputan No.142, Panjer, Kec. Denpasar Sel., Kota Denpasar, Bali 80234','(0361) 264517','08.00 - 18.00');
        createmark('puputanklungkung',-8.5348317, 115.403407,'https://cdn.idntimes.com/content-images/post/20181009/997ddfdc00aec7f346d78712448a0439.jpg', 'Monumen Puputan Klungkung', 'Kec. Klungkung, Semarapura Tengah, Kec. Klungkung, Kabupaten Klungkung, Bali 80761','0857-3993-4380','10.00 - 17.00');
        createmark('lautjawabali',-8.1929075, 114.4433196,'https://wisatabalibarat.files.wordpress.com/2011/06/monumen-lintas-laut-jawa-bali1.jpg?w=1400', 'Monumen Operasi Lintas Laut Jawa - Bali', 'Gilimanuk, Kec. Melaya, Kabupaten Jembrana, Bali 82252','-','07.00 - 21.00');
        createmark('tamanmumbul',-8.785693, 115.1942039,'https://www.spanusadua.com/wp-content/uploads/2010/07/monument-wide.jpg', 'Monumen Taman Mumbul', 'Jl. By Pas Ngurah Rai, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361','-','-');
        createmark('groundzero',-8.7173931, 115.1744735,'https://www.walkbali.com/adminen/objects/en/thumb/ground-zero-monument-bali.webp', 'Monumen Bom Bali (Ground Zero Monument)', 'Jln Legian, Kuta, Badung Regency, Bali 80361','-','-');
        createmark('margarana',-8.4650135, 115.1637487,'https://cdn-radar.jawapos.com/uploads/baliexpress/news/2018/11/20/tak-dapat-dana-perawatan-tpb-margarana-andalkan-sumbangan_m_104506.jpg', 'Monumen Margarana', 'Kelaci, Marga Dauh Puri, Marga, Marga Dauh Puri, Marga, Kabupaten Tabanan, Bali 82181','-','08.00 - 17.00');
        createmark('monas',-6.1753924, 106.8271528,'https://www.nusantaratv.com/uploads/images/image_750x_5cf5819fefecd.jpg', 'Monumen Nasional', 'Gambir, Central Jakarta City, Jakarta','(021) 3822255','08.00 - 22.00');
        createmark('kebulatantekad',-6.1570754, 107.2889078,'https://klikhotel.com/blog/wp-content/uploads/2015/08/monumen-kebulatan-tekad.jpg', 'Monumen Kebulatan Tekad', 'Jl. Raya R.Dengklok, R.Dengklok Sel., Kec. R.Dengklok, Kabupaten Karawang, Jawa Barat 41352','-','08.00 - 16.00');
        createmark('palaganambarawa',-7.2598861, 110.4025602,'https://sejarahlengkap.com/wp-content/uploads/2019/05/Sejarah-Monumen-Palagan-Ambarawa-1280x720.jpg', 'Monumen Palagan Ambarawa', 'Jl. Mgr. Sugiyopranoto, Panjang Lor, Panjang, Kec. Ambarawa, Semarang, Jawa Tengah 50614','-','08.00 - 18.00');
        createmark('bandunglautanapi',-6.9338497, 107.604925,'https://bertusblog.com/wp-content/uploads/2016/10/monumen-bandung-lautan-api.jpg', 'Monumen Bandung Lautan Api', 'Jl. Bkr, Ciateul, Kec. Regol, Kota Bandung, Jawa Barat 40252','-','24 jam');
        createmark('yogyakembali',-7.7495904, 110.3696068,'https://dolandolen.com/wp-content/uploads/2019/08/Monumen-Yogya-Kembali-Cover.jpg', 'Monumen Yogya Kembali', 'Jl. Ring Road Utara, Jongkang, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581','(0274) 868225','-');
        createmark('jalesvevajayamahe',-7.1954748, 112.7395206,'https://media.travelingyuk.com/wp-content/uploads/2018/07/Dibangun-selama-6-tahun-via-instagram.jpg', 'Monumen Jalesveva Jayamahe', 'Armada Timur Ujung, Ujung, Kec. Semampir, Kota SBY, Jawa Timur 60155','(031) 3201519','07.00 - 15.00');
        createmark('mandala',-5.1376459, 119.4136311,'https://cdn2.tstatic.net/makassar/foto/bank/images/monumen-mandala-makassar-1.jpg', 'Monumen Mandala', 'Jl. Jend. Sudirman, Sawerigading, Kec. Ujung Pandang, Kota Makassar, Sulawesi Selatan 90115','-','11.00 - 18.00');
        createmark('selamatdatang',-6.1949978, 106.8230496,'https://dolandolen.com/wp-content/uploads/2017/10/bundaran-hi.jpg', 'Monumen Selamat Datang', 'Jl. Kebon Melati 1 No.5, RT.1/RW.5, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310','-','24 jam');
        createmark('trisula',-8.2595122, 112.0742377,'https://upload.wikimedia.org/wikipedia/id/7/70/61930838.jpg', 'Monumen Trisula', 'Jl. Trisula, Bakung Utara, Bakung, Blitar, Jawa Timur 66163','-','08.00 - 17.00');

        
        // var marker = L.marker([-8.6717348,115.233902], {icon: mark}).addTo(map).bindPopup("<b> Monumen Bajra Sandhi </b>");
        // var marker2 = L.marker([-8.5348317, 115.403407], {icon: mark}).addTo(map).bindPopup("<b> Monumen Puputan Klungkung </b>");
        // var marker3 = L.marker([-8.1929075, 114.4433196], {icon: mark}).addTo(map).bindPopup("<b> Monumen Operasi Lintas Laut Jawa - Bali </b>");
        // var marker4 = L.marker([-8.785693, 115.1942039], {icon: mark}).addTo(map).bindPopup("<b> Monumen Taman Mumbul </b>");
        // var marker5 = L.marker([-8.7173931, 115.1744735], {icon: mark}).addTo(map).bindPopup("<b> Monumen Bom Bali (Ground Zero Monument) </b>");
        // var marker6 = L.marker([-8.4650135, 115.1637487], {icon: mark}).addTo(map).bindPopup("<b> Monumen Margarana </b>");
        // var marker7 = L.marker([-6.1753924, 106.8271528], {icon: mark}).addTo(map).bindPopup("<b> Monumen Nasional </b>");
        // var marker8 = L.marker([-6.1570754, 107.2889078], {icon: mark}).addTo(map).bindPopup("<b> Monumen Kebulatan Tekad </b>");
        // var marker9 = L.marker([-7.2598861, 110.4025602], {icon: mark}).addTo(map).bindPopup("<b> Monumen Palagan Ambarawa </b>");
        // var marker10 = L.marker([-6.9338497, 107.604925], {icon: mark}).addTo(map).bindPopup("<b> Monumen Bandung Lautan Api </b>");
        // var marker11 = L.marker([-7.7495904, 110.3696068], {icon: mark}).addTo(map).bindPopup("<b> Monumen Yogya Kembali </b>");
        // var marker12 = L.marker([-7.1954748, 112.7395206], {icon: mark}).addTo(map).bindPopup("<b> Monumen Jalesveva Jayamahe </b>");
        // var marker13 = L.marker([-5.1376459, 119.4136311], {icon: mark}).addTo(map).bindPopup("<b> Monumen Mandala </b>");
        // var marker14 = L.marker([-6.1949978, 106.8230496], {icon: mark}).addTo(map).bindPopup("<b> Monumen Selamat Datang </b>");
        // var marker15 = L.marker([-8.2595122, 112.0742377], {icon: mark}).addTo(map).bindPopup("<b> Monumen Trisula </b>");


        //dijalankan ketika popup di close
        map.on('popupclose', function(e){
            map.flyTo([-4.4228838, 116.8754437], 6, {
                pan: {
                    animate: true,
                    duration: 3
                },
                zoom: {
                    animate: true
                }
            });
        });

        // pembuatan function untuk mempermudah dalam membuat marker
        function createmark(markerName, lat, lng, imageValue, namaValue, alamatValue, teleponValue, jamValue ) {
                
                
            this[markerName] = L.marker([lat,lng],{
                // attribute marker
                icon: mark,
                alamat: alamatValue,
                telepon: teleponValue,
                nama: namaValue,
                image: imageValue,
                kompas: lat + "," + lng,
                jam: jamValue,

            }).addTo(map);

            eval(markerName).dragging.disable();

            // event click marker
            eval(markerName).on('click',function(e){
                /* cara pengambilan nilai atribut dari marker dan sekaligus mengisikian css*/
                
                var image = imageFunction(eval(markerName).options.image);
                var nama = namaFunction(eval(markerName).options.nama);
                var alamat = alamatFunction(eval(markerName).options.alamat);
                var telepon = teleponFunction(eval(markerName).options.telepon)
                var kompas = kompasFunction(eval(markerName).options.kompas);
                var jam = jamFunction(eval(markerName).options.jam);
                
                //setting ketika marker diklik
                map.flyTo([e.latlng.lat+0.0400,e.latlng.lng], 13, {
                    pan: {
                        animate: true,
                        duration: 3
                    },
                    zoom: {
                        animate: true,
                    }
                });
                popup.setLatLng([e.latlng.lat+0.0067,e.latlng.lng]);
                popup.setContent(
                    image+nama+alamat+kompas+jam+telepon
                );
                popup.openOn(map);
            });

        
            polyLatLng.push([lat,lng]);

        }

        function namaFunction(nama) {
            return '<div class="nama">'+nama+'</div>';
        }

        function teleponFunction(telepon) {
            return '<div class="telepon"><span class="fa fa-phone telepon-icon"></span> <div class="telepon-txt">'+telepon+'</div></div>';
        }

        function alamatFunction(alamat) {
            return '<div class="alamat"><span class="fa fa-map-marker map-icon"></span> <div class="alamat-txt">'+alamat+'</div></div>';
        }

        function imageFunction(image) {
            return '<div class="image-container"><img src="'+image+'" width="275px" style="border-radius: 12px;"/></div>';
        }

        function kompasFunction(kompas) {
            return '<div class="kompas"><span class="fa fa-compass kompas-icon"></span> <div class="kompas-txt">'+kompas+'</div></div>';
        }
        function jamFunction(jam) {
            return '<div class="jam"><span class="fa fa-clock jam-icon"></span> <div class="jam-txt">'+jam+'</div></div>';
        }

        /* 
				menggambar polygon dari titik-titik yang didefinisikan diatas. 
				silahkan digoogling untuk mengatur warna, ketebalan garis serta atribut polygon lainnya 
			*/
			var polygon = L.polyline(polyLatLng,{
				color: 'blue'
			}).addTo(map); 

    </script>
</body>
</html>