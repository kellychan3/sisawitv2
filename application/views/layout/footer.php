<script src="<?= base_url('assets/'); ?>/js/bootstrap.bundle.min.js"></script>
<!--plugins-->



<!--plugins-->
<script src="<?= base_url('assets/'); ?>/js/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/simplebar/js/simplebar.min.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/chartjs/js/Chart.extension.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/chartjs/js/Chart.min.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/chartjs/js/chartjs-custom.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<!--Morris JavaScript -->
<script src="<?= base_url('assets/'); ?>/plugins/raphael/raphael-min.js"></script>
<script src="<?= base_url('assets/'); ?>/plugins/morris/js/morris.js"></script>
<script src="<?= base_url('assets/'); ?>/js/index2.js"></script>
<!--app JS-->
<script src="<?= base_url('assets/'); ?>/js/app.js"></script>

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>

<script>
	$(document).ready(function() {
		var table = $('#aset').DataTable();
	});
</script>

<script>
	$(document).ready(function() {
		var table = $('#tanggal').DataTable({
			lengthChange: false,
			buttons: ['copy', 'excel', 'pdf', 'print']
		});

		table.buttons().container()
			.appendTo('#tanggal_wrapper .col-md-6:eq(0)');
	});
</script>

<script>
	$(document).ready(function() {
		var table = $('#bulan').DataTable({
			lengthChange: false,
			buttons: ['copy', 'excel', 'pdf', 'print']
		});

		table.buttons().container()
			.appendTo('#bulan_wrapper .col-md-6:eq(0)');
	});
</script>

<script>
	$(document).ready(function() {
		var table = $('#tahun').DataTable({
			lengthChange: false,
			buttons: ['copy', 'excel', 'pdf', 'print']
		});

		table.buttons().container()
			.appendTo('#tahun_wrapper .col-md-6:eq(0)');
	});
</script>

<!--app JS-->
<script src="<?= base_url(); ?>assets/js/app.js"></script>
<!-- <script>
	$(document).ready(function() {
		//Link Code : https://stackoverflow.com/questions/50836008/jquery-datatable-sort-not-working-for-date-column
		$('#panenTable').DataTable({
			scrollY: '50vh',
			scrollCollapse: true,
			"aaData": response,
			"pagingType": "full_numbers",
			"dom": '<"top"i>rt<"bottom"flp><"clear">',
			"sDom": 'Rfrtlip',
			"bInfo": true,
			"lengthMenu": [
				[10, 20, 30, -1],
				[10, 20, 30, "All"]
			],
			"columnDefs": [{
				"searchable": false,
				"orderable": false,
				"targets": [0, 1, 2, 3, 4],
				"type": 'natural'
			}],
			"order": [
				[1, 'asc']
			],
			"aoColumns": [{
					"mData": null
				},
				{
					"mData": "Date",
					'bSortable': true,
					"sType": "natural"
				},
			],
			"searching": true,
			"paging": true,
			"bAutoWidth": false,
			"fixedColumns": false,
			//order: [],
		});
	});
</script> -->
</body>
<footer class="page-footer">
	<p class="mb-0">Copyright ©<?php echo date('Y'); ?>. All right reserved.</p>
</footer>

</html>