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

<!-- Template JS File -->
<script src="<?= base_url() ?>/assets/js/scripts.js"></script>
<script src="<?= base_url() ?>/assets/js/custom.js"></script>

<!-- navbar active -->
<script type="text/javascript">
    $(document).ready(() => {
        $("#nav<?= $this->uri->segment(2); ?>").addClass('active')
    })
</script>

<!-- leafet ambil koordinat -->
<script>
    var curLocation = [0, 0];
    if (curLocation[0] == 0 && curLocation[1] == 0) {
        curLocation = [-7.946263, 112.615548];
    }

    var mymap = L.map('map').setView([-7.946263, 112.615548], 14);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
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

<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>

</body>

</html>