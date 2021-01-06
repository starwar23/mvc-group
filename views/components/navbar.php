<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">MVC-GROUP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" href="/">Home</a>

        </div>
    </div>
    <div class="d-flex">
        <?php
        if (!$_SESSION["user"]) {
            ?>
            <a class="nav-link active" href="/login">Login</a>
            <a class="nav-link active" href="/register">Register</a>
            <?php
        } else {
            ?>
            <a class="nav-link active" href="/profile">Profile</a>
            <form action="/auth/logout" method="post">
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
            <?php
        }
        ?>

    </div>
</nav>
