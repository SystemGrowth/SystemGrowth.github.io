<?php
$anio_actual = date("Y");
$nombre_autor = "Jeanpier Palomino - Dante Revilla";
?>

<footer style="text-align:center; position:fixed;left:0;bottom: 0;width: 100%;background-color: #222D32;padding: 3px;color:white;">
  <p>&copy; <?php echo $anio_actual; ?> <?php echo $nombre_autor; ?>. Todos los derechos reservados.</p>
</footer>

    <script>
        const base_url = "<?= base_url(); ?>";
        const smony = "<?= SMONEY; ?>";
    </script>

		<!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
		<script src="<?= media(); ?>/js/fontawesome.js"></script>


    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>

    <!-- Page specific javascripts-->
		<script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/tinymce/tinymce.min.js"></script>

		<!-- Data table plugin-->
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/bootstrap-select.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="<?= media();?>/js/datepicker/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/functions_admin.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>


