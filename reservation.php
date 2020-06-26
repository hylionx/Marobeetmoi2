<?php require ('./fichiers/header.php');?>
<head><title>Réservation</title> </head>


    <!-- about -->
	<div class="about agileinfo">
		<div class="container">
			<h3 class="agileits-title">Je réserve ma robe</h3>
			<!--Script de réservation en ligne de rsv360-->
			<script type="text/javascript" src="https://www.rdv360.com/js/iframeResizer.min.js">

            </script>
            <iframe id="rdv360Iframe" src="https://www.rdv360.com/ma-robe-et-moi?ajx_md=1" width="100%" scrolling="no" style="border:0px; ">

            </iframe><script type="text/javascript">$(function(){$('#rdv360Iframe').iFrameResize();});</script>
	<!-- fin du script de la réservation -->

<?php require ('./fichiers/footer.php')?>