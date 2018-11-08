
<html>
    <head>
      <meta charset="utf-8">
      <title>App Name - @yield('title')</title>
      <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    </head>
    <body>
      <header>
        <div class="title">
          
        
          @include('layouts.aside')
      </header>
        <main>
          @yield('content')
        </main>
        <script type="text/javascript" src="{{asset('/js/script.js')}}"></script>
    </body>
</html>
