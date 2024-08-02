<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="shortcut icon" href="{{asset('fav.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}">
    <link
      href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css"
      rel="stylesheet"
      />
      <link
        href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.bubble.css"
        rel="stylesheet"
        />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
        <!-- Core build with no theme, formatting, non-essential modules -->
        <link
          href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.core.css"
          rel="stylesheet"
          />
          <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet">

            <title>My Freelancer</title>
            <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">

          <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">

            <!-- Scripts -->
            @routes
            @vite([
            'resources/js/app.js'
            ])
            @inertiaHead
          </head>
          <body class="font-sans antialiased">
              <gmpx-api-loader
      key="AIzaSyDXGsx1M8NgD6v08sSROn2Wud8j-XKjK0U"
      solution-channel="GMP_QB_addressselection_v3_cABCX"
    ></gmpx-api-loader>
            @inertia
          </body>
          
        </html>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXGsx1M8NgD6v08sSROn2Wud8j-XKjK0U&libraries=places"></script>
        <script type="module" src="https://unpkg.com/emoji-picker-element@latest/dist/index.js"></script>


<script>
    window.Laravel = <?php echo json_encode([
         'csrf_token' => csrf_token(),
         'baseUrl'      => asset('/')
    ]); ?>
</script>