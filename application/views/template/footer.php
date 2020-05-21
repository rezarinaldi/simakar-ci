<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; Simakar <script>
            document.write(new Date().getFullYear());
        </script>
        Made with 💜 <div class="bullet"></div> 🎨 By <a href="https://rez4rinaldi.github.io">Reza Rinaldi</a>
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="<?= base_url() ?>/assets/modules/jquery.min.js"></script>
<script src="<?= base_url() ?>/assets/modules/tooltip.js"></script>
<script src="<?= base_url() ?>/assets/modules/popper.js"></script>
<script src="<?= base_url() ?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?= base_url() ?>/assets/modules/moment.min.js"></script>
<script src="<?= base_url() ?>/assets/modules/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?= base_url() ?>/assets/modules/izitoast/js/iziToast.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/modules/jquery.sparkline.min.js"></script>
<script src="<?= base_url() ?>/assets/modules/chart.min.js"></script>
<script src="<?= base_url() ?>/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Sweetalert JS -->
<script src="<?= base_url(); ?>/assets/js/myscript.js"></script>
<script src="<?= base_url(); ?>/assets/modules/sweetalert/sweetalert.min.js"></script>

<script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>

<!-- streetview -->
<script src="<?= base_url() ?>/assets/js/streetviewbutton.js"></script>

<!-- Template JS File -->
<script src="<?= base_url() ?>/assets/js/scripts.js"></script>
<script src="<?= base_url() ?>/assets/js/custom.js"></script>

<!-- navbar active -->
<script type="text/javascript">
    $(document).ready(() => {
        $("#nav<?= $this->uri->segment(2); ?>").addClass('active')
    })
</script>

<!-- leaflet ambil koordinat -->
<script type="text/javascript">
    var curLocation = [0, 0];
    if (curLocation[0] == 0 && curLocation[1] == 0) {
        curLocation = [-7.946263, 112.615548];
    }
    // Create a map
    var mymap = L.map('map').setView([-7.946263, 112.615548], 14);
    // Add an OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(mymap);
    // Add the Street View buttons in the top left corner
    // (Please get your own Client ID on https://www.mapillary.com/app/settings/developers)
    L.streetView({
        position: 'topleft',
        mapillaryId: 'RC1ZRTBfaVlhWmJmUGVqRk5CYnAxQTpmMGE3OTU0MzM0MTljZTA4'
    }).addTo(mymap);

    mymap.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
        draggable: 'true'
    });

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng).keyup();
    });

    $("#Latitude, #Longitude").change(function() {
        var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        mymap.panTo(position);
    });
    mymap.addLayer(marker);
</script>

<!-- leaflet pemetaan -->
<script type="text/javascript">
    // Create a map
    var map = L.map('mapid').setView([-7.946263, 112.615548], 14);
    // Add an OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    // Add the Street View buttons in the top left corner
    // (Please get your own Client ID on https://www.mapillary.com/app/settings/developers)
    L.streetView({
        position: 'topleft',
        mapillaryId: 'RC1ZRTBfaVlhWmJmUGVqRk5CYnAxQTpmMGE3OTU0MzM0MTljZTA4'
    }).addTo(map);
    // Add a marker to the centre of the map
    var marker = L.marker(map.getCenter()).addTo(map);
    // Make sure the marker stays in the centre when the map is moved
    map.on('move', function() {
        marker.setLatLng(map.getCenter());
    });
    // icon marker
    var icon_rumah = L.icon({
        iconUrl: '<?= base_url('assets/img/lokasi.png') ?>',
        iconSize: [35, 45], // size of the icon
    });
</script>

<!-- datatable -->
<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>

<!-- chartjs -->
<script type="text/javascript">
    var ctx = document.getElementById("chartDivisi").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            datasets: [{
                data: [80, 50, 40, 30, 20],
                backgroundColor: [
                    "#191d21",
                    "#63ed7a",
                    "#ffa426",
                    "#fc544b",
                    "#6777ef",
                ],
                label: "Dataset 1",
            }, ],
            labels: ["Black", "Green", "Yellow", "Red", "Blue"],
        },
        options: {
            responsive: true,
            legend: {
                position: "bottom",
            },
        },
    });

    var ctx = document.getElementById("chartJabatan").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "pie",
        data: {
            datasets: [{
                data: [80, 50, 40, 30, 100],
                backgroundColor: [
                    "#191d21",
                    "#63ed7a",
                    "#ffa426",
                    "#fc544b",
                    "#6777ef",
                ],
                label: "Dataset 1",
            }, ],
            labels: ["Black", "Green", "Yellow", "Red", "Blue"],
        },
        options: {
            responsive: true,
            legend: {
                position: "bottom",
            },
        },
    });

    var ctx = document.getElementById("chartProvinsi").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            datasets: [{
                data: [80, 50, 40, 30, 20],
                backgroundColor: [
                    "#191d21",
                    "#63ed7a",
                    "#ffa426",
                    "#fc544b",
                    "#6777ef",
                ],
                label: "Dataset 1",
            }, ],
            labels: ["Black", "Green", "Yellow", "Red", "Blue"],
        },
        options: {
            responsive: true,
            legend: {
                position: "bottom",
            },
        },
    });
</script>

</body>

</html>