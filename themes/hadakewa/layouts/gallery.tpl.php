<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view($folder_themes.'/layouts/header.php');?>
			<div id="contentwrapper">
				<div id="contentcolumn">
					<div class="innertube">
						<?php $this->load->view($folder_themes.'/partials/gallery.php');?>
					</div>
				</div>
			</div>

			<div id="rightcolumn">
				<div class="innertube">
					<?php $this->load->view($folder_themes.'/partials/side.right.php');?>
				</div>
			</div>

			<div id="footer">
				<?php $this->load->view($folder_themes.'/partials/copywright.tpl.php');?>
			</div>
		</div>
	</body>
</html>
