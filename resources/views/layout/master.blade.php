<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
   
</head>
<body>

    <div class="dashboard_cont">
    <div class="container ">
        <!-- <div class="header_line"> -->
          <header class="">
         
            <div class="navbar navbar-dark  ">
                        <div class="container nav_container ">
                            <span class="navbar-brand">
                              <div class="user_img m-auto ">
                                <img  class=""src="/images/profile.jpg" alt="">
                            </div>
                            </span>
                            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-cont">
                              <i class="fas fa-bars">
                              </i>
                            </button>
                            <div class="navbar-collapse collapse " id="navbar-cont" >
                                <ul class="navbar-nav ">
                                    <li class="nav-item"><a href="" class="nav-link active colored"> <i class="fas fa-user"></i><span  > Personal Info</span> </a></li>
                                    <li class="nav-item"><a href="" class="nav-link "> <i class="fas fa-user"></i><span  > Experince</span> </a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-user"></i><span  > Education</span></a></li>
                                    <li class="nav-item"><a href="" class="nav-link">  <i class="fas fa-user"></i><span  > Courses</span> </a></li>
                                    <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-user"></i><span  > skills</span> </a></li>
                                    <li class="nav-item"><a href="" class="nav-link nav_icons"><i class="fas fa-user"></i><span  > log out</span> </a></li>
        
                                </ul>
                            </div>
                        </div>
                    </div>    
            </header>
          
        <!-- </div> -->
        <div class="dashboard d-flex  " style="gap:70px">
          <div class="sidebar ">
                
            <div class="user_sec text-center ">
            <div class="user_img m-auto ">
                <img  class=""src="/images/" alt="">
            </div>
            <h5  >Dalia Ahmed <i class="fas fa-user-edit per_edit"></i></h5>
            
            </div>
            <a href="/add_company"> <div class="side_item ">
                <i class="fas fa-user"></i><span  >Companies</span> 
            </div>
          </a>
           <a href="add_job"> <div class="side_item sel_side">
                <i class="fas fa-user"></i><span  >Jobs</span> 
             </div>
          </a>
          <a href="/add_ad">  <div class="side_item">
                <i class="fas fa-user"></i><span  > Adds</span> 
            </div>
          </a>
            <a href="/add_service"> <div class="side_item ">
              <i class="fas fa-user"></i><span  >Services</span> 
          </div>
            </a>
            {{-- <a href="/contact">
            <div class="side_item">
                <i class="fas fa-user"></i><span  > Contact</span> 
            </div>
            </a>
            <a href="/">
              <div class="side_item">
                  <i class="fas fa-user"></i><span  > Portfilio</span> 
              </div>
              </a> --}}
            <div class="side_item">
                <a href="/log_in"><i class="fas fa-user"></i><span  > log out</span> </a>
            </div>
        </div>
@yield('content')
</html>