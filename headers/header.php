    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="images/logo4.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sample">Sample Essays</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="guide">Writing Guide</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog">Blog</a>
            </li>
            <!--<li class="nav-item">-->
            <!--    <a class="nav-link" href="tracks">Track Order</a>-->
            <!--</li>-->
            <li class="nav-item">
                <a class="nav-link" href="sample">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tracks">Account</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
    <style>
        .navbar-expand-lg {
            width: 100%;
            background: #fff;
        }

        .navbar-brand img {
            height: 35px;
            width: 35px;
            padding: 0;
            margin-left: 125px;
            border: 2px solid green;
            border-radius: 50%;
        }

        .nav-item {
            margin-left: 10px;
            font-family: time;
        }
        
        .nav-link{
            color: #001a1a !important;
            font-weight: bold; !important;
        }
        
        .nav-link:hover {
            color: grey !important;
            font-weight: bold; !important;
        }

        .dropdown {
            display: none;
        }

        .navbar-light .navbar-toggle {
            color: #008080;
            border-color: #008080;
        }

        @media(max-width:600px) {
            .navbar-brand img {
                height: 35px;
                width: 35px;
                margin-left: 25px;

            }

            .nav-item {
                margin-left: 30px;
            }
        }
    </style>
</nav>
