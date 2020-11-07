<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OKR Management</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <!-- public folder -->
    <link rel="stylesheet" type="text/css" href="{{ url('/public/css/app.css') }}" /> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
  <div class="container is-fullheight">
    <section class="hero is-fullheight">
      @include('includes/header')

      @include('includes/breadcrumb')
      
      <div class="hero-body">
        <div class="login">
          
          <h3 class="title is-3 has-text-centered">
              @yield('heading')
          </h3>

          @yield('content')
        </div>
        </div>
      @include('includes/footer')
    </section>
  </div>
</body>
</html>
