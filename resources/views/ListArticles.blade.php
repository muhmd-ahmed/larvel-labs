
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
          <a class="nav-link disabled" aria-current="page" href="/home">Home</a>
        </li>
        
       
        <li class="nav-item">
          <a class="nav-link active" href="#" tabindex="-1" >Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/categories" tabindex="-1" >categories</a>
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

<section class="container-fluid ">
       <div class="row">
          <h2><a href="/add-article" class="btn btn-danger" >Add New Article</a></h2>
    <div style="height:30px;"></div>

@foreach($Articles as $article)
       
   <div class="col-md-3 ml-1 mb-4">  
<div class="card" style="width: 18rem;">

  <img src="images/{{$article->article_image}}" class="card-img-top" alt="...">
 
  <div class="card-body">
    <h5 class="card-title"><span>Article Name</span> => {{$article->name}}</h5>
    <p class="card-text"><span>ID</span> => {{$article->id}}</p>
    <p class="card-text"><span>Slug</span> => {{$article->slug}}</p>
    <p class="card-text"><span>Details</span> => {{$article->details}}</p>
    <p class="card-text"><span>Category Name</span> => {{$article->category->name}}</p>


    <div class="card-body d-flex justify-content-between">
    <form action="/delete-article/{{$article->id}}" method="post">
@method('DELETE')
@csrf
    <button type="submit" class="btn btn-danger "> Delete </button>
</form>
    <a href="/edit-article/{{$article->id}}" class="btn btn-primary">Update</a>
    <a href="/show-article/{{$article->id}}" class="btn btn-success">Show</a>

  </div>
  </div>
</div>      
</div>
@endforeach
</div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>   
</html>


