<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    
</head>
<body style="background-image:  url({{ asset('/images/1.jpg') }});">
    <div class="container">
        <h1 style="text-align: center; background-color:#0a0501; color: #ff7200">Search Everything</h1>
        <div class="row">
            <div class="col-md-6" style="margin-top:40px">
               
               <form action="{{ route('web.search') }}" method="GET">
          
                  <div class="form-group">
                     <label for="">Enter keyword</label>
                     <input type="text" class="form-control" name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
                     <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                  </div>
                  <div class="form-group">
                   <button type="submit" class="btn btn-primary">Search</button>
                  </div>
               </form>
               <br>
               <br>
               <hr>
               <br>
               @if(isset($Books))
  
                 <table class="table table-hover">
                     <thead>
                         <tr>
                             <th>Book ID</th>
                             <th>Tittle</th>
                             <th>Description</th>
                             <th>Genre</th>
                             <th>Price</th>
                         </tr>
                     </thead>
                     <tbody>
                         @if(count($Books) > 0)
                             @foreach($Books as $Book)
                                <tr>
                                    <td>{{ $Book->book_ID }}</td>
                                    <td>{{ $Book->tittle }}</td>
                                    <td>{{ $Book->gt }}</td>
                                    <td>{{ $Book->book_ID }}</td>
                                    <td>{{ $Book->pri }}</td>
                                    
                                </tr>
                             @endforeach
                         @else
  
                            <tr><td>No result found!</td></tr>
                         @endif
                     </tbody>
                 </table>
  
                 
                   
                 </div>
  
               @endif
            </div>
         </div>
    </div>
</body>
</html>