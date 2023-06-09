{* navigator horizonal *}
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <img src="imgs/2.jpg" class="rounded-circle" width="50" height="50" alt="Flower">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About me</a>
            </li>
        </ul>

        <form action="index.php?c=News&a=search" method="POST" class="d-flex">
            <input class="form-control me-2" type="text" name="key" id="search-box" placeholder="Input keyword">
            <button class="btn btn-warning" type="submit">Search</button>
        </form>

        <a class="nav-link text-white" href="index.php?c=User&a=login">Log in</a>
        <button class="rounded-pill">More Info</button>
    </div>
</nav>