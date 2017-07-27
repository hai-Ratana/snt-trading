<div id="sidebar" class="sidebar responsive  ace-save-state">
  <script type="text/javascript">
    try{ace.settings.loadState('sidebar')}catch(e){}
  </script>

  <div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
    <!-- image -->
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
      <span class="btn btn-success"></span>

      <span class="btn btn-info"></span>

      <span class="btn btn-warning"></span>

      <span class="btn btn-danger"></span>
    </div>
  </div><!-- /.sidebar-shortcuts -->

  <ul class="nav nav-list">
    <li class="{{ Request::is('home') ? 'active' : '' }}">
      <a href="{{url('home')}}">
        <i class="menu-icon fa fa-tachometer"></i>
        <span class="menu-text"> Dashboard </span>
      </a>

      <b class="arrow"></b>
    </li>

    <li class="{{ Request::is('admin/slider') ? 'active' : '' }}">
      <a href="{{url('admin/slider')}}" >
        <i class="menu-icon fa fa-desktop"></i>
        <span class="menu-text">
          Silder
        </span>


      </a>

      <b class="arrow"></b>

    </li>
    <li class="{{ Request::is('') ? 'active' : '' }}">
      <a href="{{url('')}}" >
        <i class="menu-icon fa fa-desktop"></i>
        <span class="menu-text">
          Prodoucts
        </span>


      </a>

      <b class="arrow"></b>

    </li>
    <li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								UI &amp; Elements
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
                  header
								</a>
                <b class="arrow"></b>
              </li>
              <li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
                  about us
								</a>
                <b class="arrow"></b>
              </li>
              <li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
                  footer
								</a>
                <b class="arrow"></b>
              </li>

            </ul>
			</li>
  </ul><!-- /.nav-list -->

  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>
