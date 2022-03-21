<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css " rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" class="">





<div class="container mt-3">
    <img src={{ asset('images/virat.jpeg') }} class="rounded-circle mb-4" alt="Cinque Terre" width="90px"
        height="90px">

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('welcome') }}" class="nav-link active" aria-current="page">
                <i class="fa fa-home"></i>
                <span class="ms-2">Home</span>
            </a>
        </li>
        <li>
            <a href="{{ url('create') }}" class="nav-link text-white">
                <i class="fa fa-dashboard"></i>
                <span class="ms-2">Dashboard</span>
            </a>
        </li>
        <li> <a href="{{ route('all_post') }}" class="nav-link text-white">
                <i class="bi bi-table"></i>
                <span class="ms-2">Table
                </span>
            </a>
        </li>
        <li> <a href="#" class="nav-link text-white">
                <i class="fa fa-cog"></i>
                <span class="ms-2">Settings</span>
            </a>
        </li>
        <li> <a href="#" class="nav-link text-white">
                <i class="fa fa-bookmark"></i>
                <span class="ms-2">Bookmarks</span> </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('images/virat.jpeg') }}" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong> Kumaran </strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="{{ url('create') }}">New project</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>

            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
