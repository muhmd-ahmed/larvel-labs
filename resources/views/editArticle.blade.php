
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<section class="container mt-5">
       <div class="row ">
        
       <div class="col-md-6 border mb-5"> 
         <h2 class="text-center mt-4">Update <span>Article</span> </h2>   
<form method="POST" action="/edit-article/{{$article->id}}"  >
@method('PUT')
@csrf
  <div class="mb-3 mt-5">
    <label for="articleName" class="form-label">Article Name</label>
    <input type="text" class="form-control" id="articleName" value="{{old('name') ?? $article->name}}" name="article_name" >
    @error('article_name')
    <span>{{$message}}</span>
    @enderror
</div>

<div class="mb-3 mt-5">
    <label for="details" class="form-label">Article Details</label>
    <input type="text" class="form-control" id="details" value="{{old('details') ?? $article->details}}" name="details" >
    @error('details')
    <span>{{$message}}</span>
    @enderror
</div>
<div class="mb-3 mt-5">
    <label for="slug" class="form-label">Article Slug</label>
    <input type="text" class="form-control" id="slug" value="{{old('slug') ?? $article->slug}}" name="slug" >
    @error('slug')
    <span>{{$message}}</span>
    @enderror
</div>
<div class="mb-3 mt-5">
    <label for="category_id" class="form-label">Category Number </label>
    <input type="text" class="form-control" id="slug" value="{{old('category_id') ?? $article->gategory_id}}" name="categories" >
    @error('categories')
    <span>{{$message}}</span>
    @enderror
</div>
<div class="mb-3 mt-5">
    <label for="articleImg" class="form-label">Article image</label>
    <input type="file" class="form-control" id="articleImg" name="article_img"  >
    @error('article_img')
    <span>{{$message}}</span>
    @enderror
</div>
<div class="form-check mt-5 ">
  <input class="form-check-input" type="radio" name="is_used" id="is_used" >
  <label class="form-check-label" for="is_used">
  Is Used
  </label>
  @error('is_used')
    <span>{{$message}}</span>
    @enderror
</div>

  <button type="submit" class="btn btn-danger">Update</button>
</form>
</div>
</div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>   
</html>