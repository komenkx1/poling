 <!-- aside -->
 <div id="aside" class="app-aside modal nav-dropdown">
  <!-- fluid app aside -->
  <div class="left navside dark dk" data-layout="column">
    <div class="navbar no-radius">
      <!-- brand -->
      <a class="navbar-brand">
        <div ui-include="'/../assets/images/logo.svg'"></div>
        <img src="../assets/images/logo.png" alt="." class="hide">
        <span class="hidden-folded inline">Flatkit</span>
      </a>
      <!-- / brand -->
    </div>
    <div class="hide-scroll" data-flex>
        <nav class="scroll nav-light">
          
            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Main</small>
              </li>
              
              <li class="@if($title == 'Mahasiswa') active @endif ">
                <a href="/admin/mahasiswa">
                  <span class="nav-icon ">
                    <i class="fa fa-users">
                      <span ui-include="'/../assets/images/i_0.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text ">Mahasiswa</span>
                </a>
              </li>
              <li class="@if($title == 'Calon') active @endif ">
                <a href="/admin/calon">
                  <span class="nav-icon ">
                    <i class="fa fa-users">
                      <span ui-include="'/../assets/images/i_0.svg'"></span>
                    </i>
                  </span>
                  <span class="nav-text ">Calon</span>
                </a>
              </li>

          
            </ul>
        </nav>
    </div>
    <div class="b-t">
      <div class="nav-fold">
        <a href="profile.html">
          <span class="clear hidden-folded p-x">
            <span class="block _500">{{ Auth::user()->name }}</span>
            <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
          </span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- / -->


