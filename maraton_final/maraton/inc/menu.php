<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 <?php if ($active == 'index') echo "link-secondary"; ?> ">Home</a></li>
        <li><a href="cennik.php" class="nav-link px-2 <?php if ($active == 'cennik') echo "link-secondary"; ?>">Info</a></li>
        <li><a href="faq.php" class="nav-link px-2 <?php if ($active == 'faq') echo "link-secondary"; ?>">Otázky a odpovede</a></li>
        <li><a href="about.php" class="nav-link px-2 <?php if ($active == 'about') echo "link-secondary"; ?>">About</a></li>
        <li><a href="kontakt.php" class="nav-link px-2 <?php if ($active == 'kontakt') echo "link-secondary"; ?>">Kontakt</a></li>
    </ul>

    <div class="col-md-3 text-end">
        <a href="admin/login.php" type="button" class="btn btn-outline-primary me-2">Prihlasiť</a>
        <a href="admin/register.php" type="button" class="btn btn-primary">Registrovať</a>
    </div>
</header>