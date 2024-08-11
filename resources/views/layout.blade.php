<html>
    <head>
        <title>wow4results</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                  <li class="nav-item active">
                    <a class="nav-link" href="/"> <button type="button" class="btn btn-primary">Exercise 1</button> <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/exercise-2"><button type="button" class="btn btn-primary">Exercise 2</button> </a>
                  </li>
                
                  <li class="nav-item">
                    <a class="nav-link "  href="/exercise-3"><button type="button" class="btn btn-primary">Exercise 3</button> </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="/exercise-4" "><button type="button" class="btn btn-primary">Exercise 4</button> </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link "  href="/exercise-5"><button type="button" class="btn btn-primary">Exercise 5</button> </a>
                  </li>
              </ul>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        {{-- <footer> copy rights</footer> --}}
    </body>

</html>