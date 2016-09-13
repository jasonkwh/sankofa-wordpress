<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 */
?>
<div id="full-twitter-box"></div></div>
<!-- #main --> 

	<!-- #footer -->
	<div id="footer">
		<div class="container">
			<div class="row-fluid">
				<div class="second_wrapper">
					<?php dynamic_sidebar( 'footer-sidebar' ); ?>
					<div class="clear"></div>
				</div>
				<!-- second_wrapper -->
			</div>
		</div>
		<div class="third_wrapper">
			<div class="container">
				<div class="row-fluid">
					<div id="copyright" class="copyright span6"> ACN 602 218 495 | AFSL No. 473 202</div>
					<div class="owner span6">© <?php echo date("Y"); ?> <strong>Sankofa Funds Management Pty Ltd</strong></div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!-- third_wrapper --> 
		</div>
	<!-- #footer -->

</div>
<!-- #wrapper -->

<a href="JavaScript:void(0);" title="Back To Top" id="backtop"></a>
<?php wp_footer(); ?>
</body>
</html>