
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
         <h2 class="text-center mt-4">ADD <span>Article</span> </h2>   
<form method="post" action="/save-article" >
@csrf
  <div class="mb-3 mt-5">
    <label for="articleName" class="form-label">Article Name</label>
    <input type="text" class="form-control" id="articleName" name="article_name" value="{{old('article_name') ??old('article_name') }}">
    @error('article_name')
    <span>{{$message}}</span>
    @enderror
</div>
<div class="mb-3 mt-5">
    <label for="articleDetails" class="form-label">Article Details</label>
    <input type="text" class="form-control" id="articleDetails" name="details" value="{{old('details') ??old('details') }}">
    @error('details')
    <span>{{$message}}</span>
    @enderror
</div>
<div class="mb-3 mt-5">
    <label for="articleSlug" class="form-label">Article Slug</label>
    <input type="text" class="form-control" id="articleSlug" name="slug" value="{{old('slug') ??old('slug') }}" >
    @error('slug')
    <span>{{$message}}</span>
    @enderror
</div>

<select class="form-select mb-3 mt-5" name="categories">
<option  disabled selected>Select One Category </option>
  @foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
  @endforeach
</select>
@error('categories')
    <span>{{$message}}</span>
    @enderror
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
<div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" class="btn btn-danger mt-5 mb-5 w-50 ">Add</button>
</div>
</form>
</div>
</div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>   
</html>