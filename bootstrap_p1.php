<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Bootstrap page</title>
    <style>
        .border{
            border:2px solid black;
            /* background-color:blue; */
        }
      
        .logo2{
            background-image: url(images/16.jpg);
            background-size:1350px;
            background-repeat:no-repeat;
            height:300px;
        }
        .p{
            /* width:200px; */
            height:320px;
            margin:auto;
        }
        .bwid{
            min-width:100px;
        }
        /* *{
            margin:0px;
            padding:0px;
        } */
    </style>
</head>
<body>
    <div class="container-md pt-2  pb-2">
            <div class=" row ">
                <div class="logo2"> </div>
                
               
            </div>
            <div class="row">
                <!-- <div class="col-sm p-3 bg-dark text-center text-white">~Travelling is to soul as reading is to mind~</div> -->
                <div class="col-sm-1 pt-3 bg-dark text-center text-white text-start"> About Us  </div>
                <div class="col-sm-1 pt-2 bg-dark text-center text-white text-start"> Destinations  </div>
                <div class="col-sm-1 pt-2 bg-dark text-center text-white text-start">Authenticity</div>
                <div class="col-sm-1  pt-2 bg-dark text-center text-white text-start"> Booking </div>
                <div class="col-sm-1 pt-2 bg-dark text-center text-white text-start"> Reviews </div>
                <div class="col-sm-1  pt-2 bg-dark text-center text-white text-start"> Contact Us </div>

                <!-- Destinations ||
                Authentication ||
                Booking ||
                Client Reviews ||
                Contact Us -->
                <!-- <div class="btn-group btn-group-sm">
                    <button class="btn btn-outline-secondary btn-sm bwid">About Us</button>
                    <button class="btn btn-outline-secondary  btn-sm bwid">Destinations</button>
                    <button class="btn btn-outline-secondary  btn-sm bwid">Authentication</button>
                    <button class="btn btn-outline-secondary  btn-sm bwid">Booking</button>
                    <button class="btn btn-outline-secondary  btn-sm bwid">Client Reviews</button>
                    <button class="btn btn-outline-secondary  btn-sm bwid">Contact Us</button>
                </div>  -->
                
                <div class="col-sm-6 p-2 bg-dark text-center text-white float-right">
                       
                        <div class="btn-group"  style="align:right;float:right;">
                                <button type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown">Search</button>
                            
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#d">Our destination</a></li>
                                    <li><a class="dropdown-item" href="#p">Packages</a></li>
                                </ul>
                           
                        
                        </div>
                </div>
                
            </div>
            <div class="row ">
                <div class="col-sm-2 border pt-4 bg-dark">
                    <table class="table table-hover table-dark" id="p">
                        <thead>
                            <tr> 
                                <td> Package Details </td>
                              
                            </tr>
                        </thead>
                            <tbody>
                            <tr>
                                <td>France</td>
                             
                            </tr>
                            <tr>
                                <td>Italy</td>
                              
                            </tr>
                            <tr>
                                <td>Greece</td>
                              
                            </tr>
                            <tr>
                                <td>Turkey</td>
                              
                            </tr>
                            <tr>
                                <td>Indonesia</td>
                              
                            </tr>               
                            <tr>
                                <td>Maldives</td>
                              
                            </tr>
                            <tr>
                                <td>Dubai</td>
                              
                            </tr>
                          
                            </tbody>
                    </table>
                   
                </div>
                <div class="col-sm-8 border p-5" style="background-color:#C9C5BA;">
                     <span class="h1">TRAVEL</span><small> for your soul want it</small>
                       <br><br> <p>
                       A famous quote goes like, “It is better to travel well than to arrive”.
                       and we totally agree. Travelling broadens the horizons of your knowledge and makes you a better and knowledgeable person. 
                       Travelling comes with a checklist and lots of planning. For that, one of the most important things you need to do beforehand is 
                       to choose a good travel agency for yourself. <br>
                       Bestways travels is one of the oldest and well-known travel agency in Islamabad. It is an IATA certified travel agency having experience of more than 30 years.
                       The certificate allows the agency to provide clients with the most economical rates possible in the industry. 
                       It has won over 50 awards from different certified organizations and airlines.
                        </p><br><br>
                     
                </div>
                <div class="col-sm-2 border p-3 bg-dark">
                        <marquee width="60%" direction="up" height="350px" scrollamount="3" class="text-white">
                        “Live with no excuses and travel with no regrets” ~ Oscar Wilde.<br><br>
                        “The world is a book and those who do not travel read only one page.” ~ Saint Augustine.<br><br>
                        “Not all those who wander are lost” ~ J.R.R. Tolkien.<br><br>
                        “Take only memories, leave only footprints” ~ Chief Seattle.<br><br>
                        “Travel makes one modest, you see what a tiny place you occupy in the world.” ~ Gustave Flaubert.<br>
                        </marquee>
                     
                </div>
            </div>

            <div class="row border" >
                <div class="col-sm border bg-dark "> <span class="display-4 text-uppercase text-white text-center p-3" style="text-align:center;" id="d">Beautiful Destinations</span><br><br></div>
            </div>

            <div class="row p-5 border " style="background-color:#C9C5BA;">
                <div class="col-sm ">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/21.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                        <h4 class="card-title">Turkey</h4>
                        <p class="card-text">Cappadacia in turkey is famous for its mesmerizing views</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm  ">
                    <div class="card" style="width:300px">
                            <img class="card-img-top" src="images/27.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">Indonesia</h4>
                            <p class="card-text"> Indoneisa is famous for its mesmerizing views</p>
                            </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="card" style="width:300px">
                                <img class="card-img-top" src="images/23.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title">Maldives</h4>
                                <p class="card-text">Maldivesis famous for its mesmerizing views</p>
                                </div>
                        </div>
                </div>
          
            </div>
            
            <div class="row p-5 border" style="background-color:#C9C5BA;">
                <div class="col-sm ">
                   <div class="card" style="width:300px">
                            <img class="card-img-top" src="images/13.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">Venice</h4>
                            <p class="card-text">Venice is famous for its mesmerizing views</p>
                            </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="card" style="width:300px">
                            <img class="card-img-top" src="images/15.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">Greece</h4>
                            <p class="card-text">Greece is famous for its mesmerizing views</p>
                            </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="card" style="width:300px">
                            <img class="card-img-top" src="images/10.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">Italy</h4>
                            <p class="card-text">Italy is famous for its mesmerizing views</p>
                            </div>
                    </div>
                </div>
                
            </div>

            <div class="row p-5 border " style="background-color:#C9C5BA;">
                <div class="col-sm ">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/20.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                        <h4 class="card-title">Netherlands</h4>
                        <p class="card-text">Netherlands is famous for its mesmerizing views</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="card" style="width:300px">
                            <img class="card-img-top" src="images/5.jpg" alt="Card image" style="width:100%">
                            <div class="card-body">
                            <h4 class="card-title">France</h4>
                            <p class="card-text">France is famous for its mesmerizing views</p>
                            </div>
                    </div>
                </div>
                <div class="col-sm ">
                    <div class="card" style="width:300px">
                                <img class="card-img-top" src="images/28.jpg" alt="Card image" style="width:100%">
                                <div class="card-body">
                                <h4 class="card-title">Dubai</h4>
                                <p class="card-text">Dubai is famous for its mesmerizing views</p>
                                </div>
                        </div>
                </div>
    </div>

          <div class="row ">
                    <div class=" col-sm  p-3 bg-dark text-white text-center">
                       ~ All rights reserved ~
                    </div>
          </div>
    </div>

</body>
</html>