<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OKR Management</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('resources/css/app.css') }}" />
</head>
<body>
  <div class="container is-fullheight">
    <section class="hero is-fullheight">
      @include('includes/header')

      @include('includes/breadcrumb')
      
      <div class="hero-body">
        <div class="login">
          @yield('content')</div>
        </div>
      @include('includes/footer')
    </section>
  </div>
</body>
</html>
