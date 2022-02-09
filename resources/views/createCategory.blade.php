
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
         <h2 class="text-center mt-4">ADD <span>Category</span> </h2>   
<form method="post" action="/save" >
@csrf
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="text" class="form-control" id="CategoryName" name="category_name" value="{{old('category_name') ??old('category_name') }}" >
    @error('category_name')
    <span>{{$message}}</span>
    @enderror
</div>
  <div class="mb-3 mt-5">
    <label for="category_img" class="form-label">Category Image</label>
    <input type="file" class="form-control" id="category_img" name="category_img">
    @error('category_img')
    <span>{{$message}}</span>
    @enderror
  </div>
  <button type="submit" class="btn btn-danger mb-3 mt-5 d-grid gap-2 col-6 mx-auto">Submit</button>
</form>
</div>
</div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>   
</html>