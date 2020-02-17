

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>


<h1 class="text-center my-5">Edit Project</h1>

<div class="row justify-content-center">
  <div class="col-md-8">


@if($errors->any())


<div class="alert alert-danger">

<ul class="list-group">

  @foreach($errors->all() as $error)

<li class="list-group-item">
  
  {{ $error }}

</li>

@endforeach

</ul>
</div>
@endif



<!--<input type="hidden" name="project_id" value="{{$project->id}}"/>
-->
<form action="/project/{{$project->id}}" method="POST">
  
  @method('PUT')
  
  @csrf



<input type="text" class="form-control" value="{{$project->name}}" name="name" placeholder="name">
<input type="text" class="form-control" value="{{$project->description}}" name="description" placeholder="description">



<button class="btn btn-success text-center mx-auto" type="submit">Update</button>

</form>
</div>
</div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

