<html>
    <head> 
        <title>Student Registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        


           
    </head>
    <body style="background-image:  url({{ asset('/images/2.jpg') }});" >
        

            
        <div class ="main" >
           
           
        
        <div class = "container">
            <div class = "form-group col-12 p-0">
                <div>
                    @if (Session::has('success'))
                    <div class = "alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                        
                    @endif
                </div>
                
                <form action="{{ route('store') }}" method="POST";>
                    @csrf
                    <div class = "form-group" >
                        <div class ="col-sm-12">
                            <h2 style="text-align: center; background-color:#1b0f068c; color: #ff7200;  padding: 14px 16px; font-size:26">Student Registration </h2>
                        </div>

                    </div>
                    <hr>
                    
                    <div class ="row">
                        <form>
                            <p>
                                <br>
                        <div class="form-group col-md-6">
                        <label style="font-size: 26; font-weight: bold">Student ID</label>
                        <input type="text", name="st_ID" class = "form-control" id="st_ID" placeholder="Student ID">
                        </div>
                            </p>
                            <p>
                                <br>
                        <div class ="form-group col-md-6">
                        <label style="font-size: 26; font-weight: bold">Student Name</label>   
                        <input type="text", name="st_name" class = "form-control" id="st_name" placeholder="Student Name">
                        </div>
                            </p>

                            <p>
                                <br>
                        <div class="form-group col-md-6">
                        <label style="font-size: 26; font-weight: bold">Student Email</label>   
                        <input type="text", name="st_email" class = "form-control" id="st_email" placeholder="Student E-mail">
                        </div>
                            </p>
                        <br>
                        <button class="btn btn-success" style="width: 160px; height: 40px;background: #ff7200;  margin-left: 20px; margin-bottom: 10px;font-size: 18px; border-radius: 10px; cursor: pointer;">Submit</button>
                    </div>
                
            </div>
        </div>
        </div>
       
    </body>
</html>
   