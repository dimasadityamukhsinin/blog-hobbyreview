<nav>
    <div class="row m-0">
        <div class="navigation">
            <ul class="w-100 p-0">
                <a class="navigation-link" href="{php}echo BASE_URL{/php}author/dashboard">
                    <li class="pt-2 pb-2 d-flex align-items-center {if $active eq "dashboard"} active{/if}">
                            <i class="fas fa-tachometer-alt mr-1"></i>
                            <span>Dashboard</span>
                    </li>
                </a>
                <a class="navigation-link" href="{php}echo BASE_URL{/php}author/master_artikel">
                    <li class="pt-2 pb-2 d-flex align-items-center {if $active eq "artikel"} active{/if}">
                            <i class="fas fa-newspaper mr-1"></i>
                            <span>Master Artikel</span>
                    </li>
                </a>
            </ul>
        </div>
        <div class="col">