<ul class="ts-sidebar-menu">
    <li class="ts-label">Search</li>
    <li>
        <input type="text" class="ts-sidebar-search" placeholder="Search here...">
    </li>
    <li class="ts-label">Main</li>

    <li class="dashboard">
        <a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
    </li>

    <li class="user">
        <a href="#"><i class="fa fa-user"></i>User</a>
        <ul>
            <li><a href="{{route('user.index')}}"><i class="fa fa-pie-chart"></i>Gestion User</a></li>
            <li><a href="{{route('roleUser.index')}}"><i class="fa fa-users"></i>Gestion Rôle</a></li>
        </ul>
    </li>

    <li class="homePage">
        <a href="#"><i class="fa fa-home"></i>Home page</a>
            <ul>
                <li><a href="{{route('homePage.index')}}"><i class="fa fa-pie-chart"></i>Gestion Home-page</a></li>
                <li><a href="{{route('homePage.create')}}"><i class="fa fa-plus-circle"></i>Création Home-page</a></li>
                <li><a href="{{route('phraseculte.index')}}"><i class="fa fa-pie-chart"></i>Gestion Phrase culte</a></li>
                <li><a href="{{route('phraseculte.create')}}"><i class="fa fa-plus-circle"></i>Création Phrase culte</a></li>
                <li><a href="{{route('temoignage.index')}}"><i class="fa fa-pie-chart"></i>Gestion Témoignage</a></li>
                <li><a href="{{route('temoignage.create')}}"><i class="fa fa-plus-circle"></i>Création Témoignage</a></li>
            </ul>
    </li>

    <li class="homePage">
        <a href="#"><i class="fa fa-plus"></i>Extras</a>
        <ul>
            <li><a href="{{route('cgu.index')}}"><i class="fa fa-pie-chart"></i>CGU</a></li>
            <li><a href="{{route('langue.index')}}"><i class="fa fa-pie-chart"></i>Langue</a></li>
            <li><a href="{{route('contact.index')}}"><i class="fa fa-pie-chart"></i>Contact</a></li>
        </ul>
    </li>







    <!-- TODO Les models 1 étage et 2 étages -->
    <li><a href="#"><i class="fa fa-desktop"></i>Categorie 2 étages</a>
        <ul>
            <li><a href="#">Sous categorie 1</a></li>
            <li><a href="#">Sous categorie 2</a></li>
            <li><a href="#">Sous categorie 3</a></li>
        </ul>
    </li>

    <li><a href="#"><i class="fa fa-sitemap"></i> Categorie 3 étages</a>
        <ul>
            <li><a href="#">Sous categorie 1</a></li>
            <li><a href="#">Sous categorie 2</a></li>
            <li><a href="#">Sous categorie 3</a>
                <ul>
                    <li><a href="#">sous sous catégorie 1</a></li>
                    <li><a href="#">sous sous catégorie 2</a></li>
                </ul>
            </li>
        </ul>
    </li>
</ul>