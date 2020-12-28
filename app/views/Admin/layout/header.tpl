<header class="navbar navbar-expand-lg bg-custom">
    <a class="navbar-brand logo-text" href="{php}echo BASE_URL{/php}admin/dashboard">
        <img class="lazyloaded" src="{php}echo BASE_URL{/php}assets/image/logo.png" alt="Bacalah" width="40" height="40">
        Hobby Review
    </a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="ml-auto navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user mr-2"></i>{$smarty.session.pengguna.nama}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{php}echo BASE_URL{/php}admin/logout">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</header>