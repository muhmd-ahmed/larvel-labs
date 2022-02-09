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
<a href="/articles" class="btn btn-danger mt-2" > Articles </a>


    <h3 class="text-center "><span>Article Name</span> of <span>{{$article->name}}</span>  </h3>
   <div class="mx-auto mt-3" style="width: 500px;">  
<div class="card" style="width: 30rem;">

  <img src="/images/{{$article->article_image}}" class="card-img-top" alt="...">
 
  <div class="card-body">
  <h4 class="card-title"><span>article Name =></span> {{$article->name}} </h5>
    <h4 class="card-title"><span>article Number => </span>{{$article->id}} </h5>
    <h4 class="card-title"><span>Article Details=></span> {{$article->details}} </h5>
    <h4 class="card-title"><span>Article Slug => </span>{{$article->slug}} </h5>
    <h4 class="card-title"><span>Category Name => </span>{{$article->category->name}}</h5>
    <h4 class="card-title"><span>Category Number => </span>{{$article->gategory_id}}</h5>

    

  </div>
</div>      
</div>


</section>
<h4 class="text-center mt-5">Related <span>Category</span></h4>

       <section class="container">
<a href="/categories" class="btn btn-danger " > Categories </a>
<div class="space-100"></div>


    <h4 class="text-center"><span>Category Details</span> of <span>{{$article->category ->name}}</span>  </h4>
   <div class="mx-auto mt-3" style="width: 500px;">  
<div class="card" style="width: 30rem;">

  <img src="/images/{{$article->category->category_image}}" class="card-img-top" alt="...">
 
  <div class="card-body">
    <h4 class="card-title"><span>Category Number => </span>{{$article-> category ->id}} </h5>
    <h4 class="card-title"><span>Category Name => </span>{{$article-> category ->name}} </h5>
    
  </div>
</div>      
</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>   
</html>