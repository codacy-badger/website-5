<!DOCTYPE html>

<head>
  <meta name="Description" content="Xmetafanx's LinuxHQ site is a page for ..">
  <title>

    <?php

    $mainTitle = 'Xmetal LinuxHQ Section - ';

    global $sectiontitle;         // Allows the use of the $sectionTitle variable

    echo $mainTitle . $sectionTitle . $pageTitle;
    ?>


    <?php include 'modules/headerInclude.tpl'; ?>


    <!-- Universal CSS file-->
    <link href="/universalCSS/styling.css" rel="stylesheet" type="text/css" media="all">
    <link href="/linuxHQ/stylesheets/styling.css" rel="stylesheet" type="text/css">
  </title>
</head>

<body>

  <?php include 'linuxNavMenu.tpl'; ?>
