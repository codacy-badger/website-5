<?php

    $title = 'App Section - App Index';

        $sitePath = "/home/xmetalx1/public_html";
        include $sitePath . "/templates/linux/baseLinuxAPP.tpl";

?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Introduction</h3>
  </div>
  <div class="panel-body">
		<p>This section will contain PPA information and other linux program information not suitable for the
		TechHQ Software section which contains main cross platform </p>

  </div>

</div>

<div class="vertical-tabs-container">
  <div class="vertical-tabs">
    <a href="#tab1" rel="tab1" class="js-vertical-tab vertical-tab is-active">Graphics Programs</a>
    <a href="#tab2" rel="tab2" class="js-vertical-tab vertical-tab">Internet Programs</a>    
    <a href="#tab3" rel="tab3" class="js-vertical-tab vertical-tab">Multimedia Programs</a>
    <a href="javascript:void(0)" rel="tab4" class="js-vertical-tab vertical-tab">Item 4</a></div>

  <div class="vertical-tab-content-container">
    <a href="" rel="tab1" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading is-active">Item 1</a>
    <div id="tab1" class="js-vertical-tab-content vertical-tab-content">
      <h3>Editors</h3>
      <ul>
        <li><a href="https://www.gimp.org/">GIMP</a></li>
        <li><a href="https://pinta-project.com/pintaproject/pinta/">Pinta</a></li>
      </ul>
      <h3>Viewers</h3>
    </div>    <a href="" rel="tab2" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">Item 2</a>
    <div id="tab2" class="js-vertical-tab-content vertical-tab-content">
      <h3>Chat Programs</h3>
      <ul>
        <li>Hexchat</li>
        <li>Pidgin</li>
      </ul>
      <h3>Emails Programs</h3>
      <ul>
        <li>Thunderbird</li>
      </ul>
      <h3>Web Browsers</h3>
      <ul>
        <li>Chromium</li>
        <li>Google Chrome</li>
        <li>Mozilla Firefox</li>
        <li>Pale Moon</li>
        <li>Vivaldi</li>
      </ul>
    </div>    <a href="" rel="tab3" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">Item 3</a>
    <div id="tab3" class="js-vertical-tab-content vertical-tab-content">
      <p>Donec  turpis.</p>
    </div>    <a href="" rel="tab4" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">Item 4</a>
    <div id="tab4" class="js-vertical-tab-content vertical-tab-content">
      <p>Sociis sapien.</p>
    </div>
  </div>
</div>

<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
