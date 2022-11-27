@section('navbar')
<head>
  
  <title>@yield('Navbar')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>
<style>
  .navbar{
    justify-content: center;
    align-items:center;
    background-color: orange;
    color: white;
  }
</style>
<nav class="navbar">
  <h1>Giant Book Supplier</h1>
</nav>

<ul class="nav justify-content-center">
 <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/categories">Fantasy</a></li>
            <li><a class="dropdown-item" href="/horror">Horror</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/publisher">Publisher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Contact</a>
        </li>
</ul>
</body>
</html>
