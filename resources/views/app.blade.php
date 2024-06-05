<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    
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
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Core build with no theme, formatting, non-essential modules -->
        <link
          href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.core.css"
          rel="stylesheet"
          />
          <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">

            <title>My Freelancer</title>
            <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">

            <style type="text/css">
              
            </style>
            <!-- Scripts -->
            @routes
            @vite([
            'resources/js/app.js'
            ])
            @inertiaHead
          </head>
          <body class="font-sans antialiased">
            @inertia
          </body>
          
        </html>
        