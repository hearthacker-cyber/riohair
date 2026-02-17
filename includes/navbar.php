<!-- includes/navbar.php -->
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Rio<span>Hair</span>Co.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'product.php' ? 'active' : ''; ?>" href="product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact</a>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-globe me-1"></i> <span id="currentLang">English</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')"><img src="https://flagcdn.com/24x18/us.png" alt="English" class="me-2"> English</a></li>
                        <li><a class="dropdown-item" href="#" onclick="changeLanguage('it')"><img src="https://flagcdn.com/24x18/it.png" alt="Italian" class="me-2"> Italian</a></li>
                        <li><a class="dropdown-item" href="#" onclick="changeLanguage('fr')"><img src="https://flagcdn.com/24x18/fr.png" alt="French" class="me-2"> French</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>  