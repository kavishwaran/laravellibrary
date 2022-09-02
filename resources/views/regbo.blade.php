<html>
    <head> 
        <title>Book Registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body style="background-image:  url({{ asset('/images/2.jpg') }});">
        
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
                            <h2  style="text-align: center; background-color:#1b0f068c; color: #ff7200; padding: 14px 16px; font-size:26">Register book </h2>
                        </div>
                    </div>
                    <hr>
                    <div class ="row" style="align-items: center">
                        <p>
                            <br>
                        <div class="form-group col-md-6">
                            <label style="font-size: 26; font-weight: bold">Book ID:</label>
                            <input type="text", name="book_ID" class = "form-control" id="book_ID" placeholder="Book ID">
                        </div>
                        </p>

                        <p>
                            <br>
                        <div class ="form-group col-md-6">
                            <label style="font-size: 26; font-weight: bold">Tittle:</label>   
                            <input type="text", name="tittle" class = "form-control" id="tittle" placeholder="Tittle">
                        </div>
                        </p>

                        <p>
                            <br>
                        <div class="form-group col-md-6">
                            <label style="font-size: 26; font-weight: bold">Description:</label>   
                            <input type="text", name="des" class = "form-control" id="des" placeholder="Description">
                        </div>
                        </p>

                        <p>
                            <br>
                        <div class="form-group col-md-6">
                            <label style="font-size: 26; font-weight: bold">Genre/type:</label>   
                            <input type="text", name="gt" class = "form-control" id="gt" placeholder="Genre/type">
                        </div>
                        </p>

                        <p>
                            <br>
                        <div class="form-group col-md-6">
                            <label style="font-size: 26; font-weight: bold">Price:</label>   
                             <input type="text", name="pri" class = "form-control" id="pri" placeholder="Price">
                        </div>
                        </p>
                        <p>
                            <br>
                            <br>
                            
                            <button class="btn btn-success" style="width: 160px; height: 40px;background: #ff7200;  margin-left: 20px; margin-bottom: 10px;font-size: 18px; border-radius: 10px; cursor: pointer;">Submit</button>
                            
                        </p>
                    </div>
                
            </div>
        </div>
    </body>
</html>
   