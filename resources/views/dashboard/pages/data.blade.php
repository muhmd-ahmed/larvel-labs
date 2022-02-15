@extends('dashboard.layouts.master')
@section('title')
<title>Datatable | Store</title>
@endsection
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th> # </th>
                    <th>Article Name </th>
                    <th>Article Details</th>
                    <th>Article Slug </th>
                    <th>Category Name</th>
                    <th>Article Image</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($Articles as $article)
                  <tr>
                    
                    <td> {{$article->id}}</td>
                    <td>{{$article->name}}</td>
                    
                    <td>{{$article->details}}</td>
                    <td>{{$article->slug}}</td>
                    <td>{{$article->category->name}}</td>
                    <td><img src="images/{{$article->article_image}}" class="card-img-top" width="140px" height="140px" alt="..."></td>
                    <td><form action="/delete-article/{{$article->id}}" method="post">
@method('DELETE')
@csrf
    <button type="submit" class="btn btn-danger "> Delete </button>
</form></td>
<td><a href="/edit-article/{{$article->id}}" class="btn btn-primary">Update</a></td>
<td><a href="/show-article/{{$article->id}}" class="btn btn-success">Show</a></td>

                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('custom-scripts')

<script src="{{asset('custom/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>

<script src="{{asset('custom/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('custom/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
