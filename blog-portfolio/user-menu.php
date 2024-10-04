

<nav class="navbar navbar-expand bg-info navbar-dark px-5">
    <a href="profile.php" class="navbar-brand">
        <h1 class="h3">Bloggen</h1>
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="posts.php" class="nav-link text-white">My Posts</a>
        </li>
        <li class="nav-item">
            <a href="add-post-by-user.php" class="nav-link text-white">Add Post</a>
        </li>
    </ul>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <?php if (isset($_SESSION['age'])): ?>
                <a href="profile.php" class="nav-link text-white">
                    <i class="me-1 fa-solid fa-user text-white mr-1"></i>
                    Welcome <?= htmlspecialchars($_SESSION['age']); ?>
                </a>
            <?php else: ?>
                <a href="login.php" class="nav-link text-white">Login</a>
            <?php endif; ?>
        </li>
        <li class="nav-item">
            <a href="logout.php" class="nav-link text-white">
                <i class="me-1 fa-solid fa-user"></i>Logout
            </a>
        </li>
    </ul>
</nav>
