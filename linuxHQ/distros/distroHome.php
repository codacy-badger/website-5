<?php

		$title = 'Linux Distribution (AKA Version) Section';

		$sitePath = "/home/xmetalx1/public_html";

		include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/distros.php');
		include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/sshots.php');

?>

<?php
  $content = <<<EOD

    <h1>Top Linux Distributions for new users</h1>

    <div class="distroMainSection">
      <div class="distroName">
      	<img src="/linuxHQ/graphics/icons/mint.png" alt="Linux Mint Icon" />
      	<a href="http://xmetal.x10.mx/linuxHQ/distros/ubuntu/linuxMint.php" target="_blank">Linux Mint</a>
      </div>

      <div class="distroSS"> $mintCin1   </div>
      <div class="distroHome"> <a href="https://www.linuxmint.com/">Linux Mint Homepage</a>   </div>
      <div class="dwHome"> <a href="http://distrowatch.com/mint%22">Linux Mint on Distrowatch</a>    </div>
      <div class="specs">     </div>

    </div>


		<div class="distroMainSection">
		  <div class="distroName"> <a href="/linuxHQ/distros/ubuntu/ubuntuMate.php" target="_blank"> Ubuntu Mate </a>   </div>
		  <div class="distroSS">  $UMateSS1  </div>
		  <div class="distroHome"> <a href="https://ubuntu-mate.org/" target="_blank">Ubuntu Mate Homepage</a>   </div>
		  <div class="dwHome">
		      <a href="http://distrowatch.com/table.php?distribution=ubuntumate">
		          Ubuntu Mate on Distrowatch</a>
		  </div>

		  <div class="specs">

				 <ul>
				  <li>
					<p>Minimum Requirements</p>
					<ul>
					  <li>Pentium III 750 megahertz</li>
					  <li>512 megabytes (MB) of RAM</li>
					  <li>8 gigabytes (GB) of available space on the hard disk</li>
					</ul>
				  </li>
				  <li>
					<p>Recommended</p>
					<ul>
					  <li>Core 2 Duo 1.6 gigahertz</li>
					  <li>2 gigabytes (GB) RAM</li>
					  <li>16 gigabytes (GB) of available space on the hard disk</li>
					</ul>
				  </li>
				</ul>
		     </div>
    </div>


			<div class="distroMainSection">

				  <div class="distroName">  <a href="http://xmetal.x10.mx/linuxHQ/distros/ubuntu/xubuntu.php" target="_blank">Xubuntu</a>    </div>
				  <div class="distroSS"> $xubuntu1 </div>
				  <div class="distroHome">  <a href="http://xubuntu.org/" target="_blank">Xubuntu Homepage</a>   </div>
				  <div class="dwHome">
						<a href="http://distrowatch.com/table.php?distribution=xubuntu">Xubuntu on Distrowatch</a>
				  </div>

				  <div class="specs">     </div>

		</div>

	<div class="distroMainSection">

		  <div class="distroName"> <a href="/linuxHQ/distros/ubuntu/linuxLite.php" target="_blank">Linux Lite</a>    </div>
		  <div class="distroSS"> $lliteSS1 </div>

		  <div class="distroHome"> <a href="http://www.linuxliteos.com/" target="_blank">Linux Lite Homepage</a>   </div>
		  <div class="dwHome">  <a href="http://distrowatch.com/table.php?distribution=lite" target="_blank">
					Linux Lite on Distrowatch</a>   </div>
		  <div class="specs">

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


 <div class="distroMainSection">

	  <div class="distroName"> <a href="http://xmetal.x10.mx/linuxHQ/distros/ubuntu/lubuntu.php" target="_blank">Lubuntu</a>    </div>
	  <div class="distroSS">  $lubuntu1  </div>
	  <div class="distroHome"><a href="http://lubuntu.net/" target="_blank">Lubuntu Homepage</a>    </div>
	  <div class="dwHome"> <a href="http://distrowatch.com/table.php?distribution=lubuntu" target="_blank">Lubuntu on Distrowatch</a>    </div>

	  <div class="specs">
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

	<div class="distroMainSection">

			  <div class="distroName">  <a href="http://xmetal.x10.mx/linuxHQ/distros/ubuntu/elementaryOS.php" target="_blank">
														ElementaryOS</a>   </div>
			  <div class="distroSS">  $eosSShot1   </div>
			  <div class="distroHome"> <a href="http://elementary.io/" target="_blank">ElementaryOS Homepage</a>   </div>
			  <div class="dwHome">  <a href="http://distrowatch.com/table.php?distribution=elementary" target="_blank">
				ElementaryOS on Distrowatch</a>   </div>
			  <div class="specs">

				<ul>
				  <li>Intel i3 or comparable dual-core 64-bit processor</li>
				  <li>1 GB of system memory (RAM)</li>
				  <li>15 GB of disk space</li>
				</ul>
            </div>

	</div>

		 <div id="distroMainSection">
			  <div class="distroName">
				 <a href="http://xmetal.x10.mx/linuxHQ/distros/ubuntu/zorin.php">Zorin</a>
			  </div>

			<div class="distroSS">$zorinSShot1    </div>

			<div class="dwHome"> <a href="http://www.zorin-os.com/">Zorin Homepage</a>  </div>

			 <div class="distroHome">
				 <a href="http://distrowatch.com/table.php?distribution=zorin">Zorin on Distrowatch</a>
			</div>

		 </div>

<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
