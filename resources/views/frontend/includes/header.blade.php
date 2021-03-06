<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/logo.png')}}" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Top Rated
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('Top-Rated-Doctos')}}">Doctors</a>
                            <a class="dropdown-item" href="#">Hospitals</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact-us')}}">Contact</a>
                    </li>
                </ul>
                <div class="authBtnDiv">
                    <div class="languageTranlate">
                        <p>العربية <span class="translateBtn"><img src="{{asset('img/translateLanguage.png')}}" alt=""class="img-fluid"></span></p>
                    </div>
                    <a href="{{url('register')}}" class="login__Register-Btn">Login / Register</a>
                    <a href="" class="apply__Doctor-Btn">Apply as Doctor</a>
                </div>
            </div>
        </nav>
    </header>