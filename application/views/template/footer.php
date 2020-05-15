<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; <script>
            document.write(new Date().getFullYear());
        </script>
        Made with 💜 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
    </div>
    <div class="footer-right">
        2.3.0
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url() ?>/assets/js/stisla.js"></script>

<!-- chartjs -->
<script>
    // Get Canvas element by its id
    karyawan_chart = document.getElementById('karyawan').getContext('2d');
    chart = new Chart(karyawan_chart, {
        type: 'line',
        data: {
            labels: [
                /*
                    this is blade templating.
                    we are getting the date by specifying the submonth
                 */
                // '{{Carbon\Carbon::now()->subMonths(4)->toFormattedDateString()}}',
                // '{{Carbon\Carbon::now()->subMonths(3)->toFormattedDateString()}}',
                // '{{Carbon\Carbon::now()->subMonths(2)->toFormattedDateString()}}',
                // '{{Carbon\Carbon::now()->subMonths(1)->toFormattedDateString()}}'
            ],
            datasets: [{
                label: 'Employment Last Four Months',
                data: [
                    // '{{$emp_count_4}}',
                    // '{{$emp_count_3}}',
                    // '{{$emp_count_2}}',
                    // '{{$emp_count_1}}'
                ],
                backgroundColor: [
                    'rgba(178,235,242 ,1)'
                ],
                borderColor: [
                    'rgba(0,150,136 ,1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<!-- Sweetalert JS -->
<script src="<?= base_url(); ?>/assets/js/myscript.js"></script>
<script src="<?= base_url(); ?>/assets/js/sweetalert2.all.min.js"></script>

<script src="<?= base_url() ?>/assets/js/Chart.js"></script>
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

</body>

</html>