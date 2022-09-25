<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">Pawppy</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">Pw</a>
        </div>
        <ul class="sidebar-menu">


            <li class="<?php if ($title == 'Dashboard') {
                            echo 'active';
                        }; ?>">
                <a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="<?php if ($title == 'Gejala') {
                            echo 'active';
                        }; ?>">
                <a href="/admin/gejala" class="nav-link"><i class="fas fa-vial"></i>
                    <span>Gejala</span></a>
            </li>
            <li class="<?php if ($title == 'Penyakit') {
                            echo 'active';
                        }; ?>">
                <a href="/admin/penyakit" class="nav-link"> <i class="fas fa-disease"></i><span>Penyakit</span></a>
            </li>
            <li class="<?php if ($title == 'Basis Pengetahuan') {
                            echo 'active';
                        }; ?>">
                <a href="/admin/basispengetahuan" class="nav-link"><i class="fas fa-stethoscope"></i><span>Basis
                        Pengetahuan</span></a>
            </li>

            <li class="<?php if ($title == 'Artikel') {
                            echo 'active';
                        }; ?>">
                <a href="/admin/artikel" class="nav-link"><i class="fas fa-newspaper"></i><span>Artikel</span></a>
            </li>
            <li class="<?php if ($title == 'Auth') {
                            echo 'active';
                        }; ?>">
                <a href="/admin/auth" class="nav-link"><i class="far fa-user"></i> <span>Auth</span></a>
            </li>




        </ul>

        <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div> -->
    </aside>
</div>