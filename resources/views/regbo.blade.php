<html>
    <head> 
        <title>Book Registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body style="background-image:  url({{ asset('/images/1.jpg') }});">
        
        <div class = "container">
            <div class = "form-group col-12 p-0">
                <div>
                    @if (Session::has('success'))
                    <div class = "alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                        
                    @endif
                </div>
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class = "form-group">
                        <div class ="col-sm-12">
                            <h2  style="text-align: center; background-color:#0a0501; color: #ff7200">Register book </h2>
                        </div>
                    </div>
                    <hr>
                    <div class ="row">
                        <p>
                            <br>
                        <div class="form-group col-md-6">
                            <label>Book ID</label>
                            <input type="text", name="book_ID" class = "form-control" id="book_ID" placeholder="Book ID">
                        </div>
                        </p>

                        <p>
                            <br>
                        <div class ="form-group col-md-6">
                            <label>Tittle</label>   
                            <input type="text", name="tittle" class = "form-control" id="tittle" placeholder="Tittle">
                        </div>
                        </p>

                        <p>
                            <br>
                        <div class="form-group col-md-6">
                            <label>Description</label>   
                            <input type="text", name="des" class = "form-control" id="des" placeholder="Description">
                        </div>
                        </p>

                        <p>
                            <br>
                        <div class="form-group col-md-6">
                            <label>Genre/type</label>   
                            <input type="text", name="gt" class = "form-control" id="gt" placeholder="Genre/type">
                        </div>
                        </p>

                        <p>
                            <br>
                        <div class="form-group col-md-6">
                            <label>Price</label>   
                             <input type="text", name="pri" class = "form-control" id="pri" placeholder="Price">
                        </div>
                        </p>
                        <p>
                            <br>
                            <br>
                            <div class ="form-group col-md-6" align = "center">
                            <button class="btn btn-success" style="with:80px">Submit</button>
                            </div>
                        </p>
                    </div>
                
            </div>
        </div>
    </body>
</html>
   