<?php

	$sectionTitle = 'TechHQ Section - ';
	include $path . '/modules/tech/baseTechHeader.tpl';

?>
<body>
    <div class="flexContainer">

		<?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

		<div class="row mainSection">
			<div class="col-xs-12 col-md-2">
				<?php include $path .'/techHQ/modules/techCenterCol1.tpl'; ?>
			</div>

			<div class="col-xs-12 col-md-10">

			</div>

		</div>

		<!-- include baseTechFooter -->
		<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
