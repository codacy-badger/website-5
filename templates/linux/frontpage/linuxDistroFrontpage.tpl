<?php
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . '/modules/linux/linuxBaseHeader.tpl'; 
?>


<body onload="getDistroData()">
 
  <?php include $sitePath . '/modules/linux/linuxNavMenu.tpl'; ?>
  
  <div class="row">
    <div class="col-xm-12 col-md-2">
      <?php include $sitePath . '/linuxHQ/modules/sections/linuxDECol1.tpl'; ?>
    </div>
    <div class="col-xm-12 col-md-10" id="distroSection" >

    </div>
  </div> <!-- Ends Row -->
  
<script src="http://xmetal.x10.mx/linuxHQ/scripts/distrosFrontpage.js"></script>

<?php include $sitePath . "/modules/footer.tpl"; ?>