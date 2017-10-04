<?php

		$pageTitle = 'Linux Distribution (AKA Version) Section';
	  $sitePath = "/home/xmetalx1/public_html";

		include $sitePath . '/linuxHQ/modules/variables/varinclude.php';
		include $sitePath . "/templates/linux/blankTemplates/baseLinuxDistroBlank.tpl";
?>


<h1>Top Linux Distributions for new users</h1>
<div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">
				<img src="/linuxHQ/graphics/icons/mint.png" alt="Linux Mint Icon"/><?php echo $mintMP; ?></h4>
      <div class="card-text">
        <div class="screenshots">

          <?php echo $mintCinSS1; ?>
        </div>
        <div class="linuxContainer"><? echo $mintHOME; ?></div>
        <div class="linuxContainer"><?php echo $mintDW; ?></div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title"><?php echo $ubuntuMateMP; ?></h4>
      <div class="card-text">
        <div class="screenshots"> <?php echo $UMateSS1; ?></div>
        <div class="linuxContainer"><?php echo $UMateHOME;  ?></div>
        <div class="linuxContainer"><?php echo $UMateDW; ?></div>
        <div class="linuxContainer">
          <p>Minimum Requirements</p>
          <ul>
            <li>Pentium III 750 megahertz</li>
            <li>512 megabytes (MB) of RAM</li>
            <li>8 gigabytes (GB) of available space on the hard disk</li>
          </ul>
          <p>Recommended</p>
          <ul>
            <li>Core 2 Duo 1.6 gigahertz</li>
            <li>2 gigabytes (GB) RAM</li>
            <li>16 gigabytes (GB) of available space on the hard disk</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title"><?php echo $xubuntuMP; ?></h4>
      <div class="card-text">
        <div class="screenshots"><?php echo $xubuntuSS1; ?></div>
        <div class="linuxContainer"><?php echo $xubuntuHOME; ?></div>
        <div class="linuxContainer"><?php echo $xubuntuDW; ?></div>
      </div>
    </div>
  </div>

<div class="card">
  <div class="card-block">
    <h4 class="card-title"> <?php echo $linuxLiteMP; ?></h4>
  </div>
  <div class="card-text">
    <div class="screenshots">

      <?php echo $lliteSS1; ?>
    </div>
    <div class="linuxContainer"><?php echo $linuxLiteHOME; ?></div>
    <div class="linuxContainer"><?php echo $lliteDW; ?></div>
    <div class="linuxContainer">
      <ul>
        <li>
          <p>MINIMUM RECOMMENDED SPECIFICATIONS:</p>
          <ul>
            <li>CPU: 700MHz processor</li>
            <li>RAM: 512mb ram</li>
            <li>RESOLUTION: VGA screen 1024x768 resolution</li>
          </ul>
        </li>
        <li>
          <p>PREFERRED SPECIFICATIONS:</p>
          <ul>
            <li>CPU: 1.5GHz processor</li>
            <li>RAM: 1024mb ram</li>
            <li>RESOLUTION: VGA, DVI or HDMI screen 1366x768</li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title"> <?php echo $lubuntuMP; ?></h4>
    <div class="card-text">
      <div class="screenshots">  <?php echo $lubuntu1; ?></div>
      <div class="linuxContainer"><?php echo $lubuntuHOME; ?></div>
      <div class="linuxContainer"><?php echo $lubuntuDW; ?></div>
      <div class="linuxContainer">
        <ul>
          <li>
            <p>Requirements</p>
            <ul>
              <li>Memory (RAM): 1 GB of RAM.</li>
              <li>Processor (CPU): The minimum specification for CPU is Pentium 4 or Pentium M or AMD K8.</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <h4 class="card-title"><?php echo $eOSMP; ?></h4>
    <div class="card-text">
      <div class="screenshots">  <?php echo $eosSS1; ?></div>
      <div class="linuxContainer"><?php echo $elementaryHOME; ?></div>
      <div class="linuxContainer"><?php echo $elementaryDW; ?></div>
      <div class="linuxContainer">
        <ul>
          <li>Intel i3 or comparable dual-core 64-bit processor</li>
          <li>1 GB of system memory (RAM)</li>
          <li>15 GB of disk space</li>
        </ul>
      </div>
    </div>
  </div>
</div>

</div>

</div></div>

<?php include $sitePath . "/modules/footer.tpl"; ?>
