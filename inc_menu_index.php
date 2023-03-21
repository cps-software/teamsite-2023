    <!-- ********** Include Template: Help Menu ********** -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <!-- Project Name Menu Option (active)-->
          <a class="brand" style="color:white" href="./home.php">Teamsite</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            
              <!-- dropdown menu - CASE -->
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Case<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header">Manage Case</li>
              		<li><a href="./newcase.php">New Case</a></li>
                	<li><a href="./mycases.php">My Cases</a></li>
                  <li><a href="./findcase.php">Find Case</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Manage Veteran</li>
                  <li><a href="./addveteran.php">Add Veteran</a></li>
                  <li><a href="./findveteran.php">Find Veteran</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Correspondence</li>
                  <li><a href="#">Denial Letter</a></li>
                  <li><a href="#">Post Card</a></li>
                </ul>
              </li>

              <!-- dropdown menu - SCHEDULE -->
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header">View Schedule</li>
              		<li><a href="./calendar.php?caseid=0">Calendar View</a></li>
                	<li><a href="#">Dashboard View</a></li>
                </ul>
              </li>

              <!-- dropdown menu - MEMORIAL -->
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Memorial<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header">Monument</li>
              		<li><a href="./selectmonumentcase.php">New Application</a></li>
                	<li><a href="#">My Applications</a></li>
                  <li><a href="#">Find Application</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Manage Vendors</li>
                  <li><a href="#">Add Vendor</a></li>
                  <li><a href="#">Find Vendor</a></li>
                  <li><a href="#">Manage Contracts</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Correspondence</li>
                  <li><a href="#">Denial Letter</a></li>
                </ul>
              </li>

              <!-- dropdown menu - CEMETERY -->
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cemetery<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header">Grounds</li>
              		<li><a href="./cemeterymap.php" target="_blank">Show Map</a></li>
                  <li><a href="./managegravesite.php">Manage Gravesite</a></li>
                  <li><a href="#">Create Dig Slip</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Work Order</li>
                  <li><a href="#">New Work Order</a></li>
                  <li><a href="#">Find Work Order</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Configuration</li>
              		<li><a href="./editcemetery.php">Edit Cemetery</a></li>
              		<li><a href="#">Edit Instructions</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Correspondence</li>
                  <li><a href="#">Create Letter</a></li>
                </ul>
              </li>

              <!-- dropdown menu - REPORTS -->
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header">Design</li>
                	<li><a href="./cemeterystructure.php" target="_blank">Cemetery Structure</a></li>
                	<li><a href="./schedulestructure.php" target="_blank">Schedule Structure</a></li>
                	<li><a href="./dbschema.php" target="_blank">Database Structure</a></li>
                	<li class="divider"></li>
                  <li class="nav-header">Technology</li>
                	<li><a href="./technologystack.php" target="_blank"">Technology Stack</a></li>
                	<li class="divider"></li>
                  <li class="nav-header">VLER Services</li>
                	<li><a href="./ws-fnod.php" target="_blank"">FNOD Service</a></li>
                </ul>
              </li>

              <li class="nav-header">|</li>

              <!-- dropdown menu - HELP -->
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Help<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header">Online Help</li>
              		<li><a href="#">Page Help</a></li>
                	<li><a href="#">User Guide</a></li>
                  <li><a href="#">Search</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">NCA Sites</li>
                  <li><a href="http://www.cem.va.gov" target="_blank">NCA Homepage</a></li>
                  <li><a href="http://www.cem.va.gov/cems/listcem.asp" target="_blank">National Cemeteries</a></li>
                  <li><a href="http://www.cem.va.gov/grants/veterans_cemeteries.asp" target="_blank">State Cemeteries</a></li>
                  <li><a href="http://gravelocator.cem.va.gov" target="_blank">Gravesite Locator</a></li>
                  <li><a href="./ngl-search.php" target="_blank">Gravesite Locator (new)</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Other</li>
                  <li><a href="./document/Burial_Schedule_Federal_holiday_2013.pdf" target="_blank">Holiday Burial Schedule</a></li>
                </ul>
              </li>

              <!-- dropdown menu - ACCOUNT-->
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header"><?php print($_SESSION['user_name']); ?></li>
              		<li><a href="./profile.php">My Profile</a></li>
                	<li><a href="./password.php">Change Password</a></li>
                  <li class="divider"></li>
                  <li><a href="./index.php">Logout</a></li>
                </ul>
              </li>

            </ul>
          </div> <!-- /.nav-collapse -->
        </div> <!-- /.container -->
      </div> <!-- /.navbar-inner -->
    </div> <!-- /.navbar -->