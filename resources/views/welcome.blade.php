<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" class="">
    <!-- Styles -->
</head>

<body>

    <div class="d-flex  mb-3" id="nav">
        <div class="me-auto p-2 bd-highlight">
            <a class="navbar-brand" href="https://qoruz.com"><img
                    src="https://qoruz.com/new_site/assets/images/qoruz-search.svg" width="180px"
                    alt="Qoruz Search - Influencer Search Engine Logo"></a>
        </div>
        <div class="p-2 ">
            <a href="https://creators.qoruz.com/" target="_blank" id="" class="nav-link pr-0">
                ARE YOU AN INFLUENCER?</a>
        </div>
        <div class="p-2 ">
            <a href="https://qoruz.com/influencer-marketing-platform-india" id="" class="nav-link pl-3">
                For Enterprise</a>
        </div>
        <div class="p-2" id="login">
            <li>
                @if (Route::has('login'))

                    @auth
                        <a href="{{ url('/home') }}">Login</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </li>
        </div>

    </div>
    <section id="new-homepage">
        <section id="new-banner" class="container-fluid container-fluid-qoruz-search">
            <div class="container">
                <div class="dashboard-tittles">
                    <h2 class=" text-center main-tittle">Search from the <span>Largest Database</span> of Influencers
                    </h2>
                    <p class=" text-center sub-tittle">Access over 3,16,895 influencers from 100 categories and a
                        zillion topics
                    </p>
                </div>
            </div>
        </section>
    </section>

    <div class="input-search ">
        <div class="d-flex justify-content-center">
            <div class="input-group ">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Ccircle cx='12' cy='12' r='12' fill='url(%23paint0_linear)'/%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.75 6H14.25C16.3208 6 18 7.67925 18 9.75V14.25C18 16.3208 16.3208 18 14.25 18H9.75C7.67925 18 6 16.3208 6 14.25V9.75C6 7.67925 7.67925 6 9.75 6ZM14.25 16.875C15.6975 16.875 16.875 15.6975 16.875 14.25V9.75C16.875 8.3025 15.6975 7.125 14.25 7.125H9.75C8.3025 7.125 7.125 8.3025 7.125 9.75V14.25C7.125 15.6975 8.3025 16.875 9.75 16.875H14.25Z' fill='white'/%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9 12C9 10.3432 10.3432 9 12 9C13.6568 9 15 10.3432 15 12C15 13.6568 13.6568 15 12 15C10.3432 15 9 13.6568 9 12ZM10.125 12C10.125 13.0335 10.9665 13.875 12 13.875C13.0335 13.875 13.875 13.0335 13.875 12C13.875 10.9657 13.0335 10.125 12 10.125C10.9665 10.125 10.125 10.9657 10.125 12Z' fill='white'/%3E %3Ccircle cx='15.2251' cy='8.77499' r='0.39975' fill='white'/%3E %3Cdefs%3E %3ClinearGradient id='paint0_linear' x1='12.0001' y1='31.6062' x2='31.6062' y2='11.9999' gradientUnits='userSpaceOnUse'%3E %3Cstop stop-color='%23FFC107'/%3E %3Cstop offset='0.507' stop-color='%23F44336'/%3E %3Cstop offset='0.99' stop-color='%239C27B0'/%3E %3C/linearGradient%3E %3C/defs%3E %3C/svg%3E"
                        class="select-icon" alt="Instagram">
                    <span class="m-hide">Instagram</span>
                </button>
                <ul class="dropdown-menu bg-info">
                    <li>
                        <a class="dropdown-item" href="#"><img
                                src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Ccircle cx='12' cy='12' r='12' fill='url(%23paint0_linear)'/%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.75 6H14.25C16.3208 6 18 7.67925 18 9.75V14.25C18 16.3208 16.3208 18 14.25 18H9.75C7.67925 18 6 16.3208 6 14.25V9.75C6 7.67925 7.67925 6 9.75 6ZM14.25 16.875C15.6975 16.875 16.875 15.6975 16.875 14.25V9.75C16.875 8.3025 15.6975 7.125 14.25 7.125H9.75C8.3025 7.125 7.125 8.3025 7.125 9.75V14.25C7.125 15.6975 8.3025 16.875 9.75 16.875H14.25Z' fill='white'/%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9 12C9 10.3432 10.3432 9 12 9C13.6568 9 15 10.3432 15 12C15 13.6568 13.6568 15 12 15C10.3432 15 9 13.6568 9 12ZM10.125 12C10.125 13.0335 10.9665 13.875 12 13.875C13.0335 13.875 13.875 13.0335 13.875 12C13.875 10.9657 13.0335 10.125 12 10.125C10.9665 10.125 10.125 10.9657 10.125 12Z' fill='white'/%3E %3Ccircle cx='15.2251' cy='8.77499' r='0.39975' fill='white'/%3E %3Cdefs%3E %3ClinearGradient id='paint0_linear' x1='12.0001' y1='31.6062' x2='31.6062' y2='11.9999' gradientUnits='userSpaceOnUse'%3E %3Cstop stop-color='%23FFC107'/%3E %3Cstop offset='0.507' stop-color='%23F44336'/%3E %3Cstop offset='0.99' stop-color='%239C27B0'/%3E %3C/linearGradient%3E %3C/defs%3E %3C/svg%3E"
                                class="select-icon p-1" alt="Instagram">Instagram</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><img
                                src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Ccircle cx='12' cy='12' r='12' fill='%231DA1F2'/%3E %3Cpath d='M17.2593 9.3649C17.421 13.0954 14.7213 17.25 9.94418 17.25C8.489 17.25 7.13671 16.8108 6 16.0587C7.36699 16.2252 8.72908 15.8365 9.81189 14.9632C8.68498 14.943 7.73446 14.1757 7.40619 13.1207C7.80795 13.2014 8.20482 13.1762 8.56739 13.0752C7.32779 12.8178 6.47526 11.6719 6.50466 10.4401C6.85253 10.637 7.2494 10.7582 7.67076 10.7733C6.52426 9.98582 6.20088 8.42596 6.87213 7.23462C8.14113 8.8399 10.0373 9.89495 12.1784 10.006C11.806 8.34519 13.026 6.75 14.687 6.75C15.4268 6.75 16.0932 7.07308 16.5635 7.58798C17.1515 7.46683 17.7003 7.24976 18.2 6.94687C18.0089 7.56779 17.5974 8.08774 17.0682 8.41587C17.5876 8.35024 18.0824 8.20889 18.5479 7.99687C18.1951 8.52692 17.759 8.99135 17.2593 9.3649Z' fill='white'/%3E %3C/svg%3E"
                                class="select-icon p-1" alt="Twitter">Twitter</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><img
                                src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Ccircle cx='12' cy='12' r='12' fill='%233B5998'/%3E %3Cpath d='M13.7281 7.90965C14.3234 7.90965 15.1134 7.90965 15.1134 7.90965V6C15.1134 6 14.2815 6 13.1518 6C12.0221 6 10.5528 6.66943 10.5528 8.61431C10.5528 8.97722 10.5528 9.50924 10.5528 10.1293H8.67896V12.1059H10.5528C10.5528 14.5687 10.5528 17.25 10.5528 17.25H11.3848H12.045H12.7892C12.7892 17.25 12.7892 14.4736 12.7892 12.1059H14.6516L14.9608 10.1293H12.7892C12.7892 9.48105 12.7892 9.00893 12.7892 8.87152C12.7892 8.22322 13.1327 7.90965 13.7281 7.90965Z' fill='white'/%3E %3C/svg%3E"
                                class="select-icon p-1" alt="Facebook">Facebook</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><img
                                src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Ccircle cx='12' cy='12' r='12' fill='%23FF0001'/%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.4164 7.78484C18.0057 7.95054 18.4642 8.42308 18.6205 9.02569C18.9127 10.1159 18.8998 12.3881 18.8998 12.3881C18.8998 12.3881 18.8998 14.6472 18.6205 15.7374C18.4599 16.3341 18.002 16.7997 17.4164 16.9619C16.3471 17.25 12.0765 17.25 12.0765 17.25C12.0765 17.25 7.81235 17.25 6.73347 16.9521C6.14518 16.7877 5.68746 16.316 5.53257 15.7145C5.25 14.6373 5.25 12.3685 5.25 12.3685C5.25 12.3685 5.25 10.1159 5.52614 9.02569C5.68796 8.42819 6.14281 7.95946 6.72705 7.78811C7.7963 7.5 12.0701 7.5 12.0701 7.5C12.0701 7.5 16.3471 7.5 17.4164 7.78484ZM10.7151 10.2862V14.4605L14.2664 12.3684L10.7151 10.2862Z' fill='white'/%3E %3C/svg%3E"
                                class="select-icon p-1" alt="YouTube">YouTube</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><img
                                src="data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Ccircle cx='12' cy='12' r='12' fill='%2323A9F6'/%3E %3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M9.29488 7.7861L8.22901 7.93468L7.37479 8.18144H7.37173C8.47122 6.84874 10.1365 6 11.9989 6C12.9139 6 13.7773 6.21123 14.5532 6.57639L14.3385 6.60886L13.7494 6.52024L13.3329 6.79832L13.0376 7.12376L11.966 7.22422L11.5248 7.15164L11.2222 7.6272L10.339 7.67609L9.78617 7.51681L9.29488 7.7861ZM12.8656 6.25937L12.253 6.59654L11.9009 6.81572L12.1457 6.97456L12.6895 6.91996L13.2589 6.48657L12.8656 6.25937ZM10.438 6.6459L10.7084 6.75855L11.0624 6.6459L11.2553 6.98002L10.438 7.19462L10.045 6.96474C10.045 6.96474 10.0463 6.96391 10.0487 6.96232L10.0487 6.96232C10.0881 6.93658 10.4297 6.71316 10.438 6.6459ZM16.9837 8.66154L16.8042 8.71846L15.848 8.80364L15.5779 9.23488L15.3819 9.17262L14.6209 8.4866L14.5105 8.12984L14.3626 7.7494L13.8843 7.32044L13.3201 7.21005L13.3071 7.46827L13.8599 8.00761L14.1303 8.32617L13.8263 8.48507L13.5787 8.41212L13.2077 8.25742L13.2203 7.95833L12.7336 7.75818L12.572 8.46139L12.0815 8.57254L12.13 8.96483L12.7692 9.08782L12.8796 8.46101L13.4072 8.53893L13.6524 8.68255H14.0459L14.3153 9.2219L15.0293 9.94611L14.9769 10.2276L14.4012 10.1543L13.4064 10.6566L12.6901 11.5156L12.5969 11.8961H12.3398L11.8607 11.6753L11.3954 11.8961L11.5111 12.3869L11.7136 12.1535L12.0697 12.1424L12.0448 12.5832L12.3398 12.6696L12.6343 13.0004L13.1153 12.8651L13.6647 12.9518L14.3026 13.1234L14.6213 13.1608L15.1614 13.7738L16.204 14.3869L15.5297 15.6749L14.818 16.0057L14.5479 16.7418L13.518 17.4293L13.4083 17.8258C16.0413 17.1917 17.9999 14.8269 17.9999 11.9996C17.9992 10.7647 17.6248 9.61533 16.9837 8.66154ZM12.6897 15.1356L12.2527 14.3254L12.6538 13.4896L12.2527 13.3697L11.8023 12.9174L10.8044 12.6936L10.4732 12.0007V12.4121H10.3273L9.46731 11.2463V10.2887L8.83696 9.26389L7.83604 9.44227H7.16176L6.82251 9.21996L7.25535 8.87695L6.82366 8.97665C6.30333 9.86511 6 10.8961 6 12.0003C6 15.3132 8.68606 18 11.9998 18C12.255 18 12.5052 17.9774 12.7528 17.9476L12.6901 17.2207C12.6901 17.2207 12.9656 16.1413 12.9656 16.1046C12.9652 16.0676 12.6897 15.1356 12.6897 15.1356Z' fill='white'/%3E %3C/svg%3E"
                                class="select-icon p-1" alt="Blog">Blog</a>
                    </li>
                </ul>
                <input type="text" class="form-control"
                    placeholder=" Type names, categories, topics, bio keywords, #anything!"
                    aria-label="Text input with dropdown button">
            </div>
        </div>
    </div>
</body>

</html>
