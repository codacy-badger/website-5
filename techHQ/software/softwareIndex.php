<?php

    $the_title = 'Xmetalfanxs Homepage';
    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>


<div class="card">
  <div class="card-block">
    <div class="card-text">
      <div class="row">
        <div class="col-lg-5">

          <?php echo $softpediaIcon; ?>
        </div>
        <div class="col-lg-5">
          <?php echo $majorGeeksIcon; ?>

        </div>
      </div>
    </div>
  </div>
</div>

<h3>Cross Platform</h3>
  <div class="card">
    <div class="card-header"> Graphics Applications</div>
    <div class="card-block">
      <div class="card-text">

        <ul class="bullets">
          <li class="bullet">
            <div class="bullet-content">
              <h2><?php echo $kritaIcon . $kritaHome; ?></h2>
              <p>Krita is a graphics editor is an open source graphics/illustrator program, which some users compare to Adobe Photoshop</p>
            </div>
          </li>
          <li class="bullet">
            <div class="bullet-content">
              <h2><?php echo $gimpIcon . $gimpHome; ?></h2>
              <p>GIMP is a well known and widely used Graphics editor that some (not all though) compare to Photoshop</p>
            </div>
          </li>
        </ul>

      </div>
    </div>
  </div>



<div class="card">
  <div class="card-header">Internet Related Programs</div>
  <div class="card-block">
    <div class="card-text">

      <ul class="bullets">
        <li class="bullet">
          <div class="bullet-content">
            <h2><?php echo $pidginIcon . $pidginHome; ?></h2>
            <p>Instant Messaging Client</p>
          </div>
        </li>
        <li class="bullet">
          <div class="bullet-content">
            <h2><?php echo $thunderbirdIcon . $thunderbirdHome; ?> </h2>
            <p>Email Client</p>
          </div>
        </li>
      </ul>

    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">Multimedia Programs</div>
  <div class="card-block">
    <div class="card-text">

      <h4>Audio Player</h4>
        <?php echo $clemIcon . $clemHome; ?>
        <p>Clementine is a music player and organizer that can not only play your music collection, organize your collection (including downloading artist and album information from the internet, and play media from various online sources)</p>


      <h4>Video Players</h4>
        <ul class="bullets">
          <li class="bullet">
            <div class="bullet-content"><?php echo $mpvIcon . $mpvHome; ?></div>
          </li>
          <li class="bullet">
            <div class="bullet-content"><?php echo $smPlayerIcon . $smPlayerHome; ?> </div>
          </li>
          <li class="bullet">
            <div class="bullet-content"> <?php echo $vlcIcon . $vlcHome; ?>            </div>
          </li>
        </ul>

    </div>
  </div>
</div>


<div class="card">
  <div class="card-header">Productivity/Office Programs</div>
  <div class="card-block">
    <div class="card-text">
      <?php echo $libreOIcon . $libreOHome; ?>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-header">Security Programs </div>
  <div class="card-block">
    <div class="card-text">
      <img src="/techHQ/progIcons/security/cleaners/bleachbit_1.jpg" alt="Bleachbit Icon"/>
      <a href="http://bleachbit.sourceforge.net/">Bleachbit</a>
    </div>
  </div>
</div>


<h2>Specific Operating Systems</h2>
<div class="card">
  <div class="card-header">Graphics Programs </div>
  <div class="card-block">
    <div class="card-text">
      <h4>Linux</h4>
        <ul class="bullets">
          <li class="bullet">
            <div class="bullet-content">
              <a href="https://www.kde.org/applications/graphics/gwenview/">Gwenview</a></div>
          </li>
          <li class="bullet">
            <div class="bullet-content">
              <a href="http://docs.xfce.org/apps/ristretto/start">Ristretto</a></div>
          </li>
          <li class="bullet">
            <div class="bullet-content">
              <a href="https://pinta-project.com/pintaproject/pinta/">Pinta </a></div>
          </li>
        </ul>

      <h3>  Windows  </h3>
        <?php echo $xnviewIcon . $xnviewHome;  ?>
        <p>My Favorite Image editor/so-called... Basic Image editor in Windows ... VERY powerful and well-done, program</p>

    </div>
  </div>
</div>


<div class="card">
<div class="card-header">Productivity Programs </div>
<div class="card-block">
  <div class="card-text">
    <h3>Windows  </h3>
      <p>PDF Readers - Adobe Acrobat Reader alternatives</p>
      <ul class="bullets">
        <li class="bullet">
          <div class="bullet-content"><?php echo $sumPDFIcon; echo $sumPDFHome;  ?></div>
        </li>
        <li class="bullet">
          <div class="bullet-content"> <?php echo $pdfXIcon; echo $pdfXHome; ?></div>
        </li>
      </ul>

  </div>
</div>
</div>

<div class="card">
  <div class="card-header">Multimedia Programs</div>
  <div class="card-block">
    <div class="card-text">

      <h3>Linux</h3>
        <ul class="bullets">
          <li class="bullet">
            <div class="bullet-content"><a href="http://audacious-media-player.org/">Audacious</a></div>
          </li>
          <li class="bullet">
            <div class="bullet-content"></div> DeadBeef
          </li>
        </ul>

      <h3>Windows</h3>
      <ul class="bullets">
        <li class="bullet">
          <div class="bullet-content">
            <?php echo $aimpIcon; echo $aimpHome; ?>
          </div>
        </li>
        <li class="bullet">
          <div class="bullet-content">
            <?php echo $foobarIcon; echo $foobarHome; ?>
          </div>
        </li>
      </ul>

    </div>
  </div>
</div>


<div class="card">
  <div class="card-header">Security Programs </div>
  <div class="card-block">
    <div class="card-text">

      <h3>Windows</h3>
        <ul class="bullets">
          <li class="bullet">
            <div class="bullet-content">
              <img src="/techHQ/progIcons/security/AVs/1589__Avast!FreeAntivirus5_icon.png" alt="Avast Icon"/>
              <a href="http://www.avast.com/free-antivirus-download">Avast </a>
            </div>
          </li>
          <li class="bullet">
            <div class="bullet-content">
              <img src="/techHQ/progIcons/security/malware/mbam_IDI_MAIN.png" alt="Malwarebytes Icon"/>
              <a href="http://www.malwarebytes.org/">Malwarebytes Anti-Malware  </a></div>
          </li>
          <li class="bullet">
            <div class="bullet-content">
              <a href="https://www.emsisoft.com/en/software/eek/">Emsisoft Emergency Toolkit    </a></div>
          </li>
        </ul>


      <h2>Cache/Temp File Cleaner</h2>
        <div class="row">
          <div class="col-lg-5"><?php echo $ccleanerIcon; echo $ccleanerHome;  ?></div>
          <div class="col-lg-5"><?php echo $CCEnhIcon; echo $CCEnhHome; ?>
            <p>A sort of &quot;database&quot; of what to clean for programs that support it  (To add more removable items then the programs default)</p>
          </div>
        </div>

    </div>
  </div>
</div>


<div class="card">
  <div class="card-header">System Tools </div>
  <div class="card-block">
    <h2 class="card-title">Windows </h2>
    <div class="card-text">
      <a href="https://www.partitionwizard.com/free-partition-manager.html">Minitools Partition Manager Freeware Edition</a>

      <h4>System Suite</h4>

      <ul class="bullets">
        <li class="bullet">
          <div class="bullet-content"><?php echo $glaryIcon . $glaryHome; ?></div>
        </li>
        <li class="bullet">
          <div class="bullet-content">  <?php echo  $wiseCareIcon . $wiseCareHome; ?>    </div>
        </li>
      </ul>

    </div>
  </div>
</div>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
