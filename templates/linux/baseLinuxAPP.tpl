<?php

    $sectionTitle = 'Linux App Section - ';
    $sitePath = "/home/xmetalx1/public_html";

    $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/linux/linuxBaseHeader.tpl';

?>
  <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/linux/linuxNavMenu.tpl'; ?>

  <div class="row">
    <div class="col-xs-12 col-md-2">
      <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/linuxHQ/modules/sections/linuxAppCol1.tpl'; ?>
    </div>

    <div class="col-xm-12 col-md-10">