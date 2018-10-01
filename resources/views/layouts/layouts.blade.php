<html>

  @include('layouts._head')

  <body>

    @include('layouts._nav')

    <main class="py-4">
        @yield('content')
    </main>

    @include('layouts._footer')

    <script type="text/javascript">
      $(document).ready(function(){
    
        $('.Ovens').css({
            "width": "500px",
            "height": "500px",
            "margin": "0px 200px 50px 0px"
        });

        $('.Washing').css({
          "float": "right",
          "margin": "0px 200px 50px 0px"
        });

        $('.Security').css({
          "float": "right",
          "margin": "70px 200px 50px 0px",
          "width": "200px",
          "height":"200px",
        });

        $('.Pet').css({
          "float": "right",
          "margin": "70px 100px 50px 0",
          "width": "500px",
          "height":"500px",
        });

      });
    </script>
  </body>
</html>
