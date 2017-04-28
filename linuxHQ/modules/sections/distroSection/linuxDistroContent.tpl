<div class="row">
  <div class="col-lg-3"><?php echo $icon; ?></div>
  <div class="col-lg-9"><?php echo $name; ?></div>
</div>

<?php echo $sitePath . '/linuxHQ/modules/distroTable.php'; ?>
<?php echo $sitePath . '/linuxHQ/modules/ytsection.php'; ?>

<div class="card">
  <div class="card-block">
    <h4 class="card-title">Description</h4>
    <div class="card-text"><?php echo $description; ?></div>
  </div>
</div>

  <div class="bold">Screenshots</div>

  <div id="distroShots"><?php echo $distroSshot; ?><br/></div>

  <div class="card">
    <div class="card-block">
      <h3 class="card-title">
        Reviews

      </h3>
        <?php echo $sitePath . '/linuxHQ/modules/linuxDistroReviewer.php' ; ?>
    </div>
  </div>


<div class="card">
  <div class="card-block">
    <h4 class="card-title">My Experience: </h4>
    <div class="card-text">
			<?php echo $EXP; ?> <br/><?php echo $experience; ?> <br/><br/>
      <div class="boldUnderline">
        Any other comments I have about this distro:
        <?php echo $otherComments; ?><br/><?php echo . '/linuxHQ/modules/distroRec.php'; ?>
      </div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-block">
    <h4 class="card-title">USB Drive Creation Experience</h4>
    <div class="card-text">
      <p><a href="/linuxHQ/info.php" target="_blank">Explaination of what this section is</a></p>
    </div>
    <div id="usb">
				<?php include $sitePath . '/linuxHQ/modules/usb.php'; ?>
		</div>
  </div>
</div>
