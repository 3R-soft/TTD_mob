
	<!-- header -->
	<div data-role="header" data-position="fixed">
	  <!-- navbar -->
	  <div data-role="navbar">
		<ul>
		  <li style="width:75%">
			<img src="images/ttd_logo.png" alt="ttd_logo" width="156" height="35" style="margin-top:6px">
		  </li>
		  <li style="width:25%">
			  <?php
                if (isset( $_SESSION['idclana']))
                {
                  echo '<a href="#user" data-rel="popup" data-transition="false" ';
                  echo 'data-position-to="window" style="height:46px">';
                  echo '<img src="images/ttd_user.png" alt="user" width="54" height="29">';
                  echo '</a>';
                }
              ?>
		  </li>
		</ul>
		<ul><li style="height:2px; background-color:#0F0"></li></ul>
	  </div><!-- /navbar -->
	</div><!-- /header -->

	<!-- User -->
	<div id="user" data-role="popup" data-theme="a" data-overlay-theme="a">
	  <ul data-role="listview" data-inset="true" data-icon="false" style="min-width:210px;" data-theme="f">
        <li data-role="divider" data-theme="e" style="height:40px">
          <?php
            if (isset( $_SESSION['idclana']))
            {
              echo "Your REF number is: ";
              echo $_SESSION['ref_number'];
            }
          ?>
        </li>
        <li>
          <a href="logout.php">
            <?php if (isset( $_SESSION['idclana'])) { echo "Log Out"; } ?>
          </a>
        </li>
        <li><a href="#">View details</a></li>
        <li><a href="#">Edit profile</a></li>
        <li><a href="#">Change password</a></li>
	  </ul>
	</div><!-- /User -->
