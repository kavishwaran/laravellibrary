<!DOCTYPE html>
<html lang="en">
 
<head>
   
    <title>Library management</title>
    <style>
        *{

margin: 0;
padding: 0;


}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url(1.jpg);
    background-position: center;
    background-size: cover;
    height: 109vh;
    background-image:  url({{ asset('/images/1.jpg') }});

}
.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}
.icon{
    width: 200px;
    float: left;
    height: 70px;
}
.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
}
.menu{
    width:400px;
    float: left;
    height: 100px;
}
ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}
ul li{
    list-style: none;
    margin-left: 72px;
    margin-top: 27px;
    font-size: 14px;

}
ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}
ul li a:hover{
    color: #ff7200;
}



.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color:#fff;
    position: relative  ;
 
}
.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: 'Times New Roman';
    letter-spacing: 1.5px;
    line-height: 30px;
}
.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}
.content .cnn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-left: 20px;
    margin-bottom: 10px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
}
.content  .cnn a{
    text-decoration: none;
    color: #0a0501;
    transition: .3s ease;
}
.icon a{
    text-decoration: none;
    color: #fff;
}
.icon ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ff7200;
  color: black;
}
        </style>
</head>
<div class ="main">
<body style=" background: linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url(1.jpg);">
    
        
            <div class ="topnav" id="myTopnav">
            <div class = "icon">
                <h2 class = "logo">Library</h2>
            </div>
            <ul>
                <li><a href= "{{ URL::to('/regbo') }}">Register Books</a></li>
                <li><a href="{{ URL::to('/regstu') }}">Register Students</a></li>
                <li><a href="{{ URL::to('/search') }}">Search Books</a></li>
                
                
                </a>
                
                
            </ul>
            </div>
            
            <div class = "menu">
               
               
                <div class ="content">
                    <h1>Library Management <br><span>ABCD university</span></h1>
                    <p class = "par">
                        With roots going back to the year 2000, abcd university has grown to be the largest private sector higher education<br>
                        network in Sri Lanka due to an extensive island-wide network of 40 branches which create opportunities for <br>
                        over 30,000 students each year. <br> This library management allows to register books, register students and lend books
                        
                    </p>
                    <button class = "cnn"><a href="{{ URL::to('/lendbo') }}">Lend Book</a></button>
                            <br>
                        <div class = "icon">
                            <a href="#"><icon-icon name = "logo-facebook"></icon-icon></a>
                                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                                <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                                
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
    <script src = "https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>