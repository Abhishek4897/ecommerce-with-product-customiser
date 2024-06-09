</div>
			</div>
		</div>
	</div>

    <script src="<?php echo base_url() ?>assets1/bower_components/jquery/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets1/bower_components/jquery-ui/js/jquery-ui.min.js">
	</script>
	<script src="<?php echo base_url() ?>assets1/bower_components/popper.js/js/popper.min.js"></script>
	<script src="<?php echo base_url() ?>assets1/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
     <!--jquiry ui validation-->
     <script src="<?php echo base_url() ?>assets1/plugins/jqueryui/external/jquery/jquery.js"></script>
        <script src="<?php echo base_url() ?>assets1/plugins/jqueryui/jquery-ui.js"></script>
        <script>
        
        $( "#accordion" ).accordion();
        
        
        
        var availableTags = [
        	"ActionScript",
        	"AppleScript",
        	"Asp",
        	"BASIC",
        	"C",
        	"C++",
        	"Clojure",
        	"COBOL",
        	"ColdFusion",
        	"Erlang",
        	"Fortran",
        	"Groovy",
        	"Haskell",
        	"Java",
        	"JavaScript",
        	"Lisp",
        	"Perl",
        	"PHP",
        	"Python",
        	"Ruby",
        	"Scala",
        	"Scheme"
        ];
        $( "#autocomplete" ).autocomplete({
        	source: availableTags
        });
        
        
        
        $( "#button" ).button();
        $( "#button-icon" ).button({
        	icon: "ui-icon-gear",
        	showLabel: false
        });
        
        
        
        $( "#radioset" ).buttonset();
        
        
        
        $( "#controlgroup" ).controlgroup();
        
        
        
        $( "#tabs" ).tabs();
        
        
        
        $( "#dialog" ).dialog({
        	autoOpen: false,
        	width: 400,
        	buttons: [
        		{
        			text: "Ok",
        			click: function() {
        				$( this ).dialog( "close" );
        			}
        		},
        		{
        			text: "Cancel",
        			click: function() {
        				$( this ).dialog( "close" );
        			}
        		}
        	]
        });
        
        // Link to open the dialog
        $( "#dialog-link" ).click(function( event ) {
        	$( "#dialog" ).dialog( "open" );
        	event.preventDefault();
        });
        
        
        
        $( "#datepicker" ).datepicker({
        	inline: true
        });
        
        $( "#datepicker1" ).datepicker({
        	inline: true
        });
        
        $( "#datepicker2" ).datepicker({
        	inline: true
        });
        
        $( "#datepicker3" ).datepicker({
        	inline: true
        });
        $( "#datepicker4" ).datepicker({
        	inline: true
        });
        
        
        
        $( "#slider" ).slider({
        	range: true,
        	values: [ 17, 67 ]
        });
        
        
        
        $( "#progressbar" ).progressbar({
        	value: 20
        });
        
        
        
        $( "#spinner" ).spinner();
        
        
        
        $( "#menu" ).menu();
        
        
        
        $( "#tooltip" ).tooltip();
        
        
        
        $( "#selectmenu" ).selectmenu();
        
        
        // Hover states on the static widgets
        $( "#dialog-link, #icons li" ).hover(
        	function() {
        		$( this ).addClass( "ui-state-hover" );
        	},
        	function() {
        		$( this ).removeClass( "ui-state-hover" );
        	}
        );
        </script>
     <!--jquiry ui validaion-->
	<script src="<?php echo base_url() ?>assets1/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

	<script src="<?php echo base_url() ?>assets1/pages/waves/js/waves.min.js"></script>

	<script src="<?php echo base_url() ?>assets1/bower_components/modernizr/js/modernizr.js"></script>

	<script src="<?php echo base_url() ?>assets1/js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- 
	<script src="<?php// echo base_url() ?>assets1/pages/widget/amchart/gauge.js"></script>
	<script src="<?php// echo base_url() ?>assets1/pages/widget/amchart/serial.js"></script>
	<script src="<?php// echo base_url() ?>assets1/pages/widget/amchart/light.js"></script>
	<script src="<?php// echo base_url() ?>assets1/pages/widget/amchart/pie.min.js"></script> -->
	<!-- <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script> -->

	<script src="<?php echo base_url() ?>assets1/js/pcoded.min.js"></script>
	<script src="<?php echo base_url() ?>assets1/js/vertical/vertical-layout.min.js"></script><script src="<?php echo base_url() ?>assets1/pages/form-masking/inputmask.js"></script>
<!-- <script src="<?php //echo base_url() ?>assets1/pages/form-masking/jquery.inputmask.js"></script>
<script src="<?php //echo base_url() ?>assets1/pages/form-masking/autoNumeric.js"></script> -->
<!-- <script src="<?php //echo base_url() ?>assets1/pages/form-masking/form-mask.js"></script> -->
<script src="<?php echo base_url() ?>assets1/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets1/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets1/pages/data-table/js/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets1/pages/data-table/js/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets1/pages/data-table/js/vfs_fonts.js"></script>
<!--<script src="<?php echo base_url() ?>assets1/pages/advance-elements/swithces.js"></script>-->
<!--<script src="<?php echo base_url() ?>assets1/bower_components/switchery/js/switchery.min.js"></script>-->
<script src="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/js/jquery.barrating.min.js"></script>
<script src="<?php echo base_url() ?>assets1/pages/rating/rating.js"></script>
<script src="<?php echo base_url() ?>assets1/js/pcoded.min.js"></script>

<script src="<?php echo base_url() ?>assets1/pages/rating/rating.js"></script>
<script src="<?php echo base_url() ?>assets1/bower_components/slick-carousel/js/slick.min.js"></script>
<script src="<?php echo base_url() ?>assets1/pages/product-detail/product-detail.js"></script>
<script src="<?php echo base_url() ?>assets1/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets1/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets1/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets1/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets1/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets1/pages/data-table/js/data-table-custom.js"></script>
<!-- <script src="<?php //echo base_url() ?>assets1/pages/dashboard/ecommerce-dashboard.js"></script> -->
<script src="<?php echo base_url() ?>assets1/plugins/select-picker/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url() ?>assets1/js/script.js"></script>
<!--<script src="<?php echo base_url() ?>assets1/pages/forms-wizard-validation/form-wizard.js"></script>-->
<script src="<?php echo base_url() ?>assets1/bower_components/jquery.steps/js/jquery.steps.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets1/js/rating.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url() ?>assets1/bower_components/jquery-bar-rating/js/jquery.barrating.js"></script>-->
<!--<script type="text/javascript" src="<?php echo base_url() ?>assets1/bower_components/chart.js/js/Chart.js"></script>-->
<!--      <script type="text/javascript" src="<?php echo base_url() ?>assets1/pages/chart/chartjs/chartjs-custom.js"></script>-->
 <!--<script type="text/javascript" src="<?php echo base_url() ?>assets1/js/modal.js"></script>-->
      <script src="<?php echo base_url() ?>assets1/js/classie.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets1/js/modalEffects.js"></script>
      <script>
      
      $(document).ready(function() {
   $.fn.dataTable.ext.errMode = 'none';
    var table = $('#order-table')
         .DataTable( {
         "pagingType": "full_numbers",
         dom: 'Bfrtip',
         buttons: [
             'copy', 'csv', 'excel', 'pdf', 'print'
         ]
     } );
    
     
   } );
      </script>
      <script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height:250
        });
    });
  </script>
</body>


</html>
