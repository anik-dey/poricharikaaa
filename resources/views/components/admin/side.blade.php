<div class="sidebar" data-color="poricharika" data-background-color="white">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger | poricharika"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="" class="simple-text logo-normal">
            <p>
                <span>PORICHARIKA</span><br>
                Admin Panel
            </p>

        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin-home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Profile</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed d-flex" href="#submenu1" data-toggle="collapse" data-target="#submenu1">
                    <i class="material-icons">content_paste</i>
                    <p>Workers Lists</p>
                </a>
                <div class="collapse" id="submenu1" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                        <li class="nav-item">
                            <a class="nav-link py-0" href="{{ route('housemaidlist') }}">
                                <p>House Maids</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0" href="{{ route('admin-home') }}">
                                <p>Office Maids</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed d-flex" href="#submenu2" data-toggle="collapse" data-target="#submenu2">
                    <i class="material-icons">content_paste</i>
                    <p>Apply Form Submissions</p>
                </a>
                <div class="collapse" id="submenu2" aria-expanded="false">
                    <ul class="flex-column pl-2 nav">
                        <li class="nav-item">
                            <a class="nav-link py-0" href="{{ route('housemaidapply') }}">
                                <p>House Maid Applies</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0" href="{{ route('admin-home') }}">
                                <p>Office Maid Applies</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('customers-contactlist') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Customers Contact</p>
                </a>
            </li>
            <!-- your sidebar here -->
        </ul>
    </div>
</div>
