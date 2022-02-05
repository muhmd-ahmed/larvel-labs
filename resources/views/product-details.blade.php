<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> STORE </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        
       
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">F&Q</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div style="height:30px;"></div>
<section class="container">
<a href="/home" class="btn btn-danger mt-5" >Go Home </a>
       @foreach($products as $product)
       @if($product['id']==$_GET['id'])
       <div class="space-100"></div>
    <h1 class="mx-auto"><span>Probuct Details</span> of <span>{{$product['name']}}</span>  </h1>
   <div class="mx-auto mt-3" style="width: 500px;">  
<div class="card" style="width: 30rem;">

  <img src="{{$product['url']}}" class="card-img-top" alt="...">
 
  <div class="card-body">
    <h4 class="card-title"><span>Product : </span> {{$product['name']}}</h5>
    <h4 class="card-text"><span>Price : </span>{{$product['price']}}</h4>
    <h4 class="card-text"><span>Describtion : </span>{{$product['describtion']}}</h4>
  </div>
</div>      
</div>
@endif
@endforeach

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>   
</html>