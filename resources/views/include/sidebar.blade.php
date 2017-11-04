<div class="scrollbar-inner">
    <div class="user">
        <div class="user__info" data-toggle="dropdown">
            <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
            <div>
                <div class="user__name">{{ Auth::user()->name }}</div>
                <div class="user__email">{{ Auth::user()->email }}</div>
            </div>
        </div>

        <div class="dropdown-menu">
            <a class="dropdown-item" href="">View Profile</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>

    <ul class="navigation">
        <li><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>

        <li class="navigation__sub navigation__sub--{{ active(['users.index','register','users.edit','roles','roles.index','hak_akses']) }}">
            <a href=""><i class="zmdi zmdi-view-week"></i> Administrator</a>

            <ul>
                <li class="navigation__{{ active(['users.index','register','users.edit']) }}"><a href="{{ route('users.index') }}">Manajemen User</a></li>
                <li class="navigation__{{ active(['roles','roles.index']) }}"><a href="{{ route('roles.index') }}">Tipe User</a></li>
                <li class="navigation__{{ active(['hak_akses']) }}"><a href="{{ route('hak_akses') }}">Hak Akses</a></li>
                @role('admin')
                    <li><a href="top-navigation.html">Top Navigation</a></li>
                @endrole
            </ul>
        </li>

        

        <li class="navigation__sub navigation__sub--{{ active(['pekerjaan.index']) }}">
            <a href=""><i class="zmdi zmdi-format-underlined"></i> Data Master</a>

            <ul>
                <li class="navigation__{{ active(['pekerjaan.index']) }}"><a href="{{ route('pekerjaan.index') }}">Pekerjaan</a></li>
                <li class="navigation__{{ active(['agama.index']) }}"><a href="{{ route('agama.index') }}">Agama</a></li>
                <li class="navigation__{{ active(['pendidikan.index']) }}"><a href="{{ route('pendidikan.index') }}">Pendidikan</a></li>
                <li class="navigation__{{ active(['keluarga.index']) }}"><a href="{{ route('keluarga.index') }}">Hubungan Keluarga</a></li>
            </ul>
        </li>

        <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

        <li class="navigation__sub">
            <a href=""><i class="zmdi zmdi-view-list"></i> Tables</a>

            <ul>
                <li><a href="html-table.html">HTML Table</a></li>
                <li><a href="data-table.html">Data Table</a></li>
            </ul>
        </li>

        <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
            <a href=""><i class="zmdi zmdi-collection-text"></i> Forms</a>

            <ul>
                <li><a href="form-elements.html">Basic Form Elements</a></li>
                <li><a href="form-components.html">Form Components</a></li>
                <li class="navigation__active"><a href="form-validation.html">Form Validation</a></li>
            </ul>
        </li>

        <li class="navigation__sub">
            <a href=""><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

            <ul>
                <li><a href="colors.html">Colors</a></li>
                <li><a href="css-animations.html">CSS Animations</a></li>
                <li><a href="buttons.html">Buttons</a></li>
                <li><a href="icons.html">Icons</a></li>
                <li><a href="listview.html">Listview</a></li>
                <li><a href="toolbars.html">Toolbars</a></li>
                <li><a href="cards.html">Cards</a></li>
                <li><a href="alerts.html">Alerts</a></li>
                <li><a href="badges.html">Badges</a></li>
                <li><a href="breadcrumbs.html">Bredcrumbs</a></li>
                <li><a href="jumbotron.html">Jumbotron</a></li>
                <li><a href="navs.html">Navs</a></li>
                <li><a href="pagination.html">Pagination</a></li>
                <li><a href="progress.html">Progress</a></li>
            </ul>
        </li>

        <li class="navigation__sub">
            <a href=""><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

            <ul class="navigation__sub">
                <li><a href="carousel.html">Carousel</a></li>
                <li><a href="collapse.html">Collapse</a></li>
                <li><a href="dropdowns.html">Dropdowns</a></li>
                <li><a href="modals.html">Modals</a></li>
                <li><a href="popover.html">Popover</a></li>
                <li><a href="tabs.html">Tabs</a></li>
                <li><a href="tooltips.html">Tooltips</a></li>
                <li><a href="notifications-alerts.html">Notifications & Alerts</a></li>
            </ul>
        </li>

        <li class="navigation__sub">
            <a href=""><i class="zmdi zmdi-trending-up"></i> Charts</a>

            <ul>
                <li><a href="flot-charts.html">Flot</a></li>
                <li><a href="other-charts.html">Other Charts</a></li>
            </ul>
        </li>

        <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>

        <li><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>

        <li class="navigation__sub">
            <a href=""><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

            <ul>
                <li><a href="profile-about.html">Profile</a></li>
                <li><a href="messages.html">Messages</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="groups.html">Groups</a></li>
                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="todo-lists.html">Todo Lists</a></li>
                <li><a href="notes.html">Notes</a></li>
                <li><a href="login.html">Login & SignUp</a></li>
                <li><a href="lockscreen.html">Lockscreen</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="empty.html">Empty Page</a></li>
            </ul>
        </li>
    </ul>
</div>
