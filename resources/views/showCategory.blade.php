<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

</head>
<body>

      
       <section class="container">
<a href="/categories" class="btn btn-danger mt-2" > Categories </a>


    <h2 class="text-center "><span>Probuct Details</span> of <span>{{$category->name}}</span>  </h2>
   <div class="mx-auto " style="width: 500px;">  
<div class="card" style="width: 30rem;">

  <img src="/images/{{$category->category_image}}" class="card-img-top" alt="...">
 
  <div class="card-body">
    <h4 class="card-title"><span>Category Number : {{$category->id}}</span> </h5>
    <h4 class="card-title"><span>Category Type: {{$category->name}}</span> </h5>

  </div>
</div>      
</div>


<h2 class="text-center mt-5">Related <span>Articles</span></h2>

<div class="space-100"></div>
<section class="container-fluid ">
<div class="row">
@foreach($category->relatedArticles as $cat )
     
<div class="col-md-3 me-3 mb-4">  
<div class="card" style="width: 18rem;">

  <img src="/images/{{$cat->article_image}}" class="card-img-top" alt="...">
 
  <div class="card-body">
    <h5 class="card-title"><span>Article Name</span> => {{$cat->name}}</h5>
    <p class="card-text"><span>ID</span> => {{$cat->id}}</p>
    <p class="card-text"><span>Slug</span> => {{$cat->slug}}</p>
    <p class="card-text"><span>Details</span> => {{$cat->details}}</p>
    <p class="card-text"><span>Category Name</span> => {{$cat->category->name}}</p>
  </div>
</div>      
</div>
@endforeach
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>   
</html>