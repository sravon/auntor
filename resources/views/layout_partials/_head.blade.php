<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Give A Work | Work For Everyone</title>
<meta name="description" content="@lang('config.common_meta_description')" />
<meta name="keywords" content="" />
<meta name="author" content="@lang('config.common_meta_author')" />

<meta property="og:image" content="{{ asset('assets/logo/logo-02.png') }}">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1024">
<meta property="og:image:height" content="1024">
<meta name="yandex-verification" content="af2551372c2824dd" />

<link rel="shortcut icon" href="{{ asset(__('config.site_favicon')) }}" type="image/png">



<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{ asset('assets/frontend/css') }}/bootstrap.min.css" type="text/css">

<!--Material Icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css') }}/materialdesignicons.min.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css') }}/fontawesome.css" />

<!-- selectize css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css') }}/selectize.css" />


<!-- Google Font -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700;1,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,600;1,700&display=swap" rel="stylesheet">

<!--Slider-->
<link rel="stylesheet" href="{{ asset('assets/frontend/css') }}/owl.carousel.css" />
<link rel="stylesheet" href="{{ asset('assets/frontend/css') }}/owl.theme.css" />
<link rel="stylesheet" href="{{ asset('assets/frontend/css') }}/owl.transitions.css" />
<link rel="stylesheet" href="{{ asset('assets/frontend/plugins') }}/slick/slick.css" />
@yield('css_plugin')
<!-- Custom  Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css') }}/style.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css') }}/button.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css') }}/animations.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css') }}/footer.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css') }}/home.css" />

@yield('custom_style')
