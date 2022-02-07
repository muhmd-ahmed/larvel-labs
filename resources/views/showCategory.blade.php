<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

</head>
<body>

       <div class="space-100"></div>
       <section class="container">
<a href="/categories" class="btn btn-danger mt-5" > Categories </a>
<div class="space-100"></div>

    <h1 class="mx-auto"><span>Probuct Details</span> of <span>{{$category->name}}</span>  </h1>
   <div class="mx-auto mt-3" style="width: 500px;">  
<div class="card" style="width: 30rem;">

  <img src="/images/{{$category->category_image}}" class="card-img-top" alt="...">
 
  <div class="card-body">
    <h4 class="card-title"><span>Category Number : {{$category->id}}</span> </h5>
    <h4 class="card-title"><span>Category Type: {{$category->name}}</span> </h5>

  </div>
</div>      
</div>


</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>   
</html>