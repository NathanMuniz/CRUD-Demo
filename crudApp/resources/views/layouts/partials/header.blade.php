<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">

    <!-- Navbar-brand -->
    <a class="navbar-brand" href="{{asset('/')}}">MyCrudApp</a>

    <!-- 3 button 3 lines, to open nav-links-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- inside of the toggler, this is the navlisnk-->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav">

            <!-- This is a link to home-->
            <li class="nav-item active">
                <a class="nav-link" href="{{asset('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>

            <!-- Toggle that open links -->
            <li class="nav-item dropdown">

                <!-- Toggle button-->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>

                <!-- Action inside of the toggle-->
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                </div>


            </li>


        </ul>

    </div>


</nav>