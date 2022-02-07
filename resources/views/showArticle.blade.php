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
<a href="/articles" class="btn btn-danger mt-5" > Articles </a>
<div class="space-100"></div>

    <h1 class="mx-auto"><span>Article Name</span> of <span>{{$article->name}}</span>  </h1>
   <div class="mx-auto mt-3" style="width: 500px;">  
<div class="card" style="width: 30rem;">

  <img src="/images/{{$article->article_image}}" class="card-img-top" alt="...">
 
  <div class="card-body">
    <h4 class="card-title"><span>article Number : {{$article->id}}</span> </h5>
    <h4 class="card-title"><span>Article Details: {{$article->details}}</span> </h5>
    <h4 class="card-title"><span>Article Slug: {{$article->slug}}</span> </h5>
    <h4 class="card-title"><span>Category Number: {{$article->gategory_id}}</span> </h5>
  </div>
</div>      
</div>


</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>   
</html>