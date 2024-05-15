<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="http://localhost/klinik_kesehatan/public/public/assets/vendor/libs/jquery/jquery.js"></script>
<script src="http://localhost/klinik_kesehatan/public/public/assets/vendor/libs/popper/popper.js"></script>
<script src="http://localhost/klinik_kesehatan/public/public/assets/vendor/js/bootstrap.js"></script>
<script src="http://localhost/klinik_kesehatan/public/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="http://localhost/klinik_kesehatan/public/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="http://localhost/klinik_kesehatan/public/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="http://localhost/klinik_kesehatan/public/assets/js/main.js"></script>

<!-- Page JS -->
<script src="http://localhost/klinik_kesehatan/public/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="http://localhost/klinik_kesehatan/public/assets/js/sidebarMenu.js"></script>
<script>
    new DataTable("#myTable", {
        info: false,
        "columnDefs": [{
                "orderable": true,
                "targets": 0
            },
            {
                "orderable": false,
                "targets": 1
            },
            {
                "orderable": true,
                "targets": 2
            },
            {
                "orderable": false,
                "targets": 3
            },
            {
                "orderable": false,
                "targets": 4
            },
            {
                "orderable": false,
                "targets": 5
            },
            {
                "orderable": false,
                "targets": 6
            },
        ]
    });
</script>
</body>

</html>