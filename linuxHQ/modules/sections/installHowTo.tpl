
<ul class="accordion-tabs-minimal">

  <li class="tab-header-and-content">
    <a href="#screeshot" class="tab-link is-active">Version Chart</a>
    <div class="tab-content">
        <div class="card hidden-md-down">
          <div class="card-block">
            <div class="card-text">
							<table>
								<caption>Desktop version comparision chart</caption>
								<tr>
									<th>Desktop</th>
									<th>Arch</th>
									<th>Fedora 25 ISO</th>
									<th>Fedora 26 ISO</th>
									<th>OpenSuse Leap 42.2</th>
									<th>OpenSuse Leap 42.3</th>
									<th>Ubuntu LTS ISO</th>
									<th>Latest non-LTS Ubuntu release</th>
								</tr>


								<tr>
									<td>Plasma 5</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>

								<tr>
									<td>Gnomeshell</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>

								<tr>
									<td>Cinnamon</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>


							</table>
							<p>As I THINK I put in the Ubuntu Tab ... is a comparison between say Neon and Kubuntu ... even between say the LTS and non-LTS versions of Kubuntu VS Neon</p>


            </div>
          </div>
        </div>
    </div>
  </li>


  <li class="tab-header-and-content hidden-sm-down">
    <a href="#screeshot" class="tab-link">Arch</a>
    <div class="tab-content ">
        <?php include $sitePath . '/linuxHQ/modules/database/dearch.php'; ?>

    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#" class="tab-link">
      Fedora</a>
    <div class="tab-content">

      <?php include $sitePath . '/linuxHQ/modules/database/defedora.php'; ?>

      <p>instructions on how to install it go here </p>

    </div>

  </li>

  <li class="tab-header-and-content">
    <a href="#youtube" class="tab-link">OpenSuse</a>
    <div class="tab-content">

      <?php include $sitePath . '/linuxHQ/modules/database/deOpenSuse.php'; ?>

			<p>Current Version in Opensuse Leap 42.2 + instructions on how to install it go here </p>

			<p>Current Version in Opensuse Leap 42.3  + instructions on how to install it go here </p>

			<p>Current Version in Opensuse Tumbleweed + instructions on how to install it go here </p>

    </div>
  </li>



  <li class="tab-header-and-content">
    <a href="#usb" class="tab-link">Ubuntu </a>
    <div class="tab-content">
      <?php include $sitePath . '/linuxHQ/modules/database/deubuntu.php'; ?>

      <p> instructions on how to install it go here </p>

			<p>EXAMPLE - Plasma 5  -  Show differences in say Kubuntu vs Neon vs Neon LTS version ... er versions </p>

    </div>
  </li>
</ul>
