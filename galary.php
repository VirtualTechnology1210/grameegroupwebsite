<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="./galary.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Oswald|Anton|Roboto Slab|Rakkas|Signika">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
         <script src="https://kit.fontawesome.com/ee7a178a15.js" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Opan+Sans">
         <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css">
         <link rel="shortcut icon" href="./assets/sakra logo.png" type="image/x-icon">

         <!-- google fonts -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        /* Define styles for the icon */
        .ri-arrow-down-s-line {
            cursor: pointer;
            margin-left: 5px; /* Adjust this value as needed to create space between text and icon */
        }
        .nav__link {
            display: inline-block; /* Ensure the anchor behaves as a block element */
            text-decoration: none; /* Remove default underline */
            color: #fffff0;
        }
        .dropdown__button {
            display: flex; /* Use flexbox to align text and icon */
            align-items: center; /* Center vertically */
        }
    </style>
</head>
<body oncontextmenu="return false">


  <div class="outerload">
    <div id="preloader">
      <div></div>
      <div></div>
      <div></div>
   </div>
  </div>


  <div class="fix" style="z-index: 999;">
    <a href="https://api.whatsapp.com/send?phone=9382812000&amp;text=Welcome to Gramen Group" target="_blank"
      rel="noreferrer"><img class="round" src="./assets/whatsapp.png" alt=""></a>
    <a href="https://www.instagram.com/" target="_blank"><img class="round"
        src="./assets/instagram.png" alt=""></a>
    <a href="tel:9382812000" target="_blank"><img class="round" src="./assets/telephone.png" alt=""></a>
    <a href="https://www.facebook.com/" target="_blank" style="border-bottom:none;"><img class="round"
        src="./assets/facebook.png" alt="" ></a>
    <!-- <a href="https://www.youtube.com/" target="_blank" ><img src="./youtube.png"
        class="round" alt=""></i></a>
        <a href="https://twitter.com/" ><img class="round" src="./twitter.png" alt=""></a>
        <a href=""><img class="round" src="./gmail.png" alt=""></a>
        <a href="" style="border-bottom:none;"><img src="./linkedin.png" alt=""class="round"></a> -->
  </div>


  <div>
    <a href="javascript:" id="return-to-top" style="z-index: 1000;"><i class="bi bi-chevron-up" ></i></a>
  </div>



  <div class="container">
      <div class="nav__data my-2">
          <div class="nav__logo" style="display: flex;align-items: center;">
            <!-- <a href="#" class="nav__logo" > -->
              <!-- <h2>Logo</h2> -->
              <img src="./assets/GRAMEEN LOGO.png" alt="" style="width:100%;">
          <!-- </a> -->
          </div>
                  
                  
                  <!-- <div class="search-box">
                      <button class="btn-search"><i class="fas fa-search"></i></button>
                      <input type="text" class="input-search" placeholder="Type to Search...">
                    </div> -->

                    <div class="nav-no" style="display: flex;align-items: center;">
                      <h6 ><i class="bi bi-telephone-fill"></i>&nbsp;&nbsp;&nbsp;Call : +91 9382812000</h6>
                    </div>
                  
  
                  <div class="nav__toggle" id="nav-toggle" >
                      <i class="ri-menu-line nav__toggle-menu"></i>
                      <i class="ri-close-line nav__toggle-close"></i>
                  </div>
              </div>
    </div>
        
    <div class="container-fluid nav-div " >
              <div class="row nav__menu" id="nav-menu" style="background-color: white;z-index: 1000;">
                  
                  
                  <div class="col-12" style="background-color: #26284e;color: white;">
                  <ul class="nav__list" >

                    <li class="dropdown__item">   
                        
                        
                      <a href="./index.php" class="nav__link">
                        <div class="dropdown__button">
                            <span>Home</span>
                            
                        </div>
                    </a>
                                       
                    </li>




                      <li class="dropdown__item">   
                        
                        
                        <a href="./aboutus.php" class="nav__link ">
                          <div class="dropdown__button">
                              <span>About Us</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>
                                         
                      
                        <!-- <a href="./about us.html" >
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                            About Us<i class="ri-arrow-down-s-line dropdown__arrow">  </i>
                          </div>
                        </a> -->

                          <div class="dropdown__container" >
                              <div class="dropdown-alter"  style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="aboutus.php#overview">
                                      <div class="dropdown__group" >
                                          <div class="dropdown__icon">
                                              <i class="bi bi-binoculars-fill"></i>
                                          </div>
      
                                          <span class="dropdown__title">Overview</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="aboutus.php#vision-mission-goal">
                                      <div class="dropdown__group" >
                                          <div class="dropdown__icon">
                                              <i class="fa fa-podcast" aria-hidden="true" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Vision, Mission and Goals</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="aboutus.php#board-of-directors">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-people-line"></i>
                                          </div>
      
                                          <span class="dropdown__title">Board of Directors</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="aboutus.php#Management-team">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-people-group"></i>
                                          </div>
      
                                          <span class="dropdown__title">Management Team</span>
      
                                      </div>
                                    </a>

                                    <a href=" aboutus.php#staff-team-structure">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-users-rays" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Staff Team and Structure</span>
      
                                          
                                      </div>
                                    </a>

                                    <a href="aboutus.php#geograp-area-apration">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-bar-chart-line-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Geographical Area of Operations</span>
      
                                         
                                      </div>
                                    </a>

                                    <a href="aboutus.php#social-impact">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-shuffle" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Social Impact</span>
      
                                         
                                      </div>
                                    </a>
                                  </div>
                              </div>
                          </div>
                      </li>

                     
                      <li class="dropdown__item">  



                        <a href="./products.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>Products</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>


                        <!-- <a href="./products.html">                   
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Products <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a>  -->

                          <div class="dropdown__container">
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="products.php#Agriculture-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-wheat-awn"></i>
                                          </div>
      
                                          <span class="dropdown__title">Agriculture Loans </span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="products.php#Microfinance-Loan">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-microchip" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Microfinance Loans</span>
      
                                      </div>
                                    </a>
      
                                    <a href="products.php#Consumer-Durable-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-hand-holding-dollar" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Consumer Durable Loans</span>
      
                                         
                                      </div>
                                    </a>
      
                                    <a href="products.php#SME-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-bar-chart-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">SME Loans</span>
      
                                          
                                      </div>
                                    </a>

                                    <a href="products.php#Emergency-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-kit-medical" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Emergency Loan</span>
      
                                          
                                      </div>
                                    </a>

                                    <a href="products.php#Climate-ready-WASH-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-cloud-haze2-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Climate ready WASH Loans</span>
      
                                         
                                      </div>
                                    </a>

                                    <a href="products.php#Solar-Energy-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-solar-panel" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Solar Energy Loans</span>
      
                                         
                                      </div>
                                    </a>
                                  </div>
                              </div>
                              
                          </div>
                      </li>

                      
                      <li class="dropdown__item">


                        <a href="./PartnerOrganisations.php" class="nav__link">
                          <div class="dropdown__button">
                              <span> Partner Organisations</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>


                        <!-- <a href="./Partner Organisations.html">
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Partner Organisations <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a> -->

                          <div class="dropdown__container">
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="PartnerOrganisations.php#Funding-Partners">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-magnifying-glass-dollar"></i>
                                          </div>
      
                                          <span class="dropdown__title">Funding Partners</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="PartnerOrganisations.php#Technology-Partners">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-handshake" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Technology Partners</span>
      
                                        
                                      </div>
                                    </a>
  
                                    <a href="PartnerOrganisations.php#Insurance-Partners">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-building-columns" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Insurance Partners</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="PartnerOrganisations.php#Associations-Networks">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa fa-users" aria-hidden="true" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Associations & Networks</span>
      
                                          
                                      </div>
                                    </a>
                                  </div>
                              </div>
                              
                          </div>
                      </li>


                      <li class="dropdown__item">


                        <a href="./Policies.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>Policies</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>




                        <!-- <a href="./Policies.html">
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Policies<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a> -->

                          <div class="dropdown__container">
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="Policies.php#Human-Resource-Management">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-rotate" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Human Resource Management</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="Policies.php#Employee-Code-of-Conduct-Policy">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-person-lines-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Code of Conduct</span>
      
                                          
                                      </div>
                                    </a>
                                  </div>
                              </div>
                             
                          </div>
                      </li>


                      <li class="dropdown__item"> 
                        
                        

                        <a href="./Financials.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>Financials</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>



                        <!-- <a href="./Financials.html">               
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Financials<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a>  -->

                          <div class="dropdown__container" >
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="Financials.php#growth-and-outreach">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-graph-up-arrow" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Growth and Outreach</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="Financials.php#Financial-Performance">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-currency-exchange" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Financial Performance</span>
      
                                         
                                      </div>
                                    </a>
      
                                    <a href="Financials.php#Physical-and-Financial-Projection">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-shield-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Physical and Financial Projection</span>
      
                                        
                                      </div>
                                    </a>
      
                                    <a href="Financials.php#Internal-Audit">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-file-pen" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Internal Audit</span>
      
                                          
                                      </div>
                                    </a>

                                    <a href="Financials.php#MIS-IT-systems">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-tower-cell" ></i>
                                          </div>
      
                                          <span class="dropdown__title">MIS & IT Systems</span>
      
                                         
                                      </div>
                                    </a>

                                           <a href="./Financials.php#Rating-report">   
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-star" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Rating Report</span>
      
                                          
                                      </div>
                                      </a>

                                      <a href="./Financials.php#Audited-statements">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-book"></i>
                                          </div>
      
                                          <span class="dropdown__title">Audited Statements</span>
      
                                         
                                      </div>
                                      </a>

                                  </div>
                              </div>
                              
                          </div>
                      </li>


                     <li class="dropdown__item"> 
                        
                        
                        <a href="./itsystem.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>IT Systems</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>


                        <!-- <a href="#">                    
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              IT Systems <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a> -->

                          <div class="dropdown__container">
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="./itsystem.php#Eswar-system">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-laptop-file" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Eswar Systems</span>
      
                                      </div>
                                      </a>
                                        <a href="./itsystem.php#Viva">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-heart-pulse" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Viva</span>
      
                                          
                                      </div>
                                      </a>
                                  </div>
                              </div>
                              
                          </div>
                      </li>




                      <li class="dropdown__item"> 
                        
                        

                        <a href="./asirwadtrust.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>Asirwad Trust</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>



                        <!-- <a href="./Financials.html">               
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Financials<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a>  -->


                          <div class="dropdown__container ">
                              <div class="dropdown-alter " style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="./asirwadtrust.php#vision-mission-goal">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                            <i class="fa fa-podcast" aria-hidden="true" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Vision, Mission and Goals</span>
      
                                          
                                      </div>
                                    </a>

                                    <a href="./asirwadtrust.php#board-of-directors">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                            <i class="fa-solid fa-people-line"></i>
                                          </div>
      
                                          <span class="dropdown__title">Board of Directors</span>
      
                                         
                                      </div>
                                    </a>

                                    <!-- <div class="dropdown"> -->
                                      <a href="./asirwadtrust.php#Funding-agencies">
                                       <div class="dropdown__group">
                                         
                                            <div class="dropdown__icon">
                                              <i class="fa-solid fa-magnifying-glass-dollar"></i>
                                            </div>
        
                                            <span class="dropdown__title">Funding Agencies</span>
                                            <!-- <div class="dropdown-content full-height" style="background-color: #fffff0;">
                                              <button data-bs-toggle="modal" data-bs-target="#exampleModal1" style="border: none;background-color: transparent;outline: none;">DST</button>
                                              <a href="#">DBT</a>
                                              <a href="#">Blue Star</a>
                                              <a href="#">Pon Chemical</a>
                                              <a href="#">MSME-KVIC</a>
                                            </div> -->
                                          
                                        </div>
                                      
                                      </a>
                                    <!-- </div> -->

                                    <a href="./asirwadtrust.php#Program-and-services">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-gears"></i>
                                            
                                          </div>
      
                                          <span class="dropdown__title">Programs And Services</span>
      
                                         
                                      </div>
                                    </a>
      
                                    <a href="./asirwadtrust.php#Organization-structure">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-diagram-3-fill"></i>
                                          </div>
      
                                          <span class="dropdown__title">Organization Structure</span>
      
                                         
                                      </div>
                                    </a>

                                    
      



                                  </div>
                              </div>
                              
                          
                            
                            </div>
                        
                      </li>



                      <li class="dropdown__item">   


                        <a href="./galary.php" class="nav__link">
                          <div class="dropdown__button">
                              <span> Gallery</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>


                        <!-- <a href="./galary.html">                    
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Gallery<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a>  -->

                          <div class="dropdown__container" >
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="galary.php#PHOTOS">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-images"></i>
                                          </div>
      
                                          <span class="dropdown__title">Photos</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="galary.php#VIDEOS">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-play-circle-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Videos</span>
      
                                          
                                      </div>
                                    </a>
                                  </div>
                              </div>
                             
                          </div>
                      </li>


                      <li class="dropdown__item">   
                        
                        
                        <a href="./Contactus.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>Contact Us</span>
                              
                          </div>
                      </a>
                                         
                      </li>

                     
                     </ul>
              </div>
              </div>
      </div>

            <div class="container-fluid ">
                <div class="row contentmain">
                    <div class="col-12 contentcon">
                        <h2 class="mb-4">Gallery</h2>
                        <h5>HOME / Gallery</h5>
                    </div>
                </div>
            </div>


            <!-- <div class="container-fluid" id="PHOTOS">
        <div class="row">
            <div class="parent-container mb-5">
                <div class="col-12 text-center mb-5 section-header">
                    <h3 style="color: #26284e;">PHOTOS</h3>
                </div>
                <div class="col-lg-4 child-container" id="one" >
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%; padding:5px 0;">Chairman and MD – V. Senthil Nathan in School – addressing to School teachers</p>
                  <img src="./asirwad/0.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Microfinance (SHG/JLG) Program</p>
                  <img src="./asirwad/1.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Gober Gas Training Program</p>
                  <img src="./asirwad/2.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Organic Farming Program</p>
                  <img src="./asirwad/3.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Govt. of India (NSDC) Training Program</p>
                  <img src="./asirwad/4.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">International Women’s day celebration on March 8 th , 2020</p>
                  <img src="./asirwad/5.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Govt. of India - Ministry of S&amp;T, Department of Bio Technology-Turkey research project</p>
                  <img src="./asirwad/6.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Agriculture Training Program</p>
                  <img src="./asirwad/7.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Eye Camp Program</p>
                  <img src="./asirwad/8.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Health Awareness - Cardio Camp Program</p>
                  <img src="./asirwad/9.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Health Awareness - Cardio Camp Program</p>
                  <img src="./asirwad/10.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Water and Sanitation Program: School – Toilet Construction</p>
                  <img src="./asirwad/11.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Turkey shed (Nucleus Centre)</p>
                  <img src="./asirwad/12.jpg" width="100%" height="auto">
                  </div>
                 
                  
                  
                  
                </div>
                  <div class="col-lg-4 child-container" id="two">
                    <img src="./asirwad/33.jpg" width="100%" height="auto">
                    <img src="./asirwad/31.jpg" width="100%" height="auto">
                    <img src="./asirwad/32.JPG" width="100%" height="auto">
                    <img src="./asirwad/26.jpg" width="100%" height="auto">
                    <img src="./asirwad/27.JPG" width="100%" height="auto">
                    <img src="./asirwad/28.JPG" width="100%" height="auto">
                    <img src="./asirwad/29.JPG" width="100%" height="auto">
                    <img src="./asirwad/30.JPG" width="100%" height="auto">
                    
                    
                    
                                                          
                </div>
                    <div class="col-lg-4 child-container" id="three">
                    <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Institute of Technology, Delhi </p>
                  <img src="./asirwad/13.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Institute of Technology, Delhi </p>
                  <img src="./asirwad/14.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Meteorology Department staff installing meteorology equipments at Schools</p>
                  <img src="./asirwad/16.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Institute of Technology, Delhi </p>
                  <img src="./asirwad/15.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Meteorology Department staff installing meteorology equipments at Schools</p>
                  <img src="./asirwad/17.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Meteorology Department staff installing meteorology equipments at Schools</p>
                  <img src="./asirwad/18.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Institute of Technology, Delhi </p>
                  <img src="./asirwad/20.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Meteorology Department staff installing meteorology equipments at Schools</p>
                  <img src="./asirwad/19.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">DR. NINAWE WITH ASIRWAD STAFF TEAM</p>
                  <img src="./asirwad/21.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">DR. NINAWE WITH ASIRWAD STAFF TEAM</p>
                  <img src="./asirwad/22.jpg" width="100%" height="auto">
                  </div>
                  <img src="./asirwad/23.jpg" width="100%" height="auto">
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">DR. NINAWE WITH ASIRWAD STAFF TEAM</p>
                  <img src="./asirwad/24.jpg" width="100%" height="auto">
                  </div>
                      <img src="./asirwad/25.JPG" width="100%" height="auto">
                      

                      
                      
                      
                </div>
            </div>
        </div>

    </div> -->






    <!-- MAIN (Center website) -->
<div class="main container my-5" id="PHOTOS">

<!-- <h1>MYLOGO.COM</h1>
<hr>

<h2>PORTFOLIO</h2> -->
<div id="myBtnContainer" >
  <!-- <button class="btn active" onclick="filterSelection('all')"> Show all</button> -->
  <button class="btn btn-stl active"  onclick="filterSelection('chairman')"> Chairman and MD – V. Senthil Nathan in School – addressing to School teachers</button>
  <button class="btn btn-stl" onclick="filterSelection('Microfinance')"> Microfinance (SHG/JLG) Program</button>
  <button class="btn btn-stl" onclick="filterSelection('Gober')"> Gober Gas Training Program</button>
  <button class="btn btn-stl" onclick="filterSelection('Organic')"> Organic Farming Program</button>
  <button class="btn btn-stl" onclick="filterSelection('Govt')"> Govt. of India (NSDC) Training Program</button>
   <button class="btn btn-stl" onclick="filterSelection('Agriculture')"> Agriculture Training Program</button>
  <button class="btn btn-stl" onclick="filterSelection('Eye')"> Eye Camp Program</button>
  <button class="btn btn-stl" onclick="filterSelection('Health')"> Health Awareness - Cardio Camp Program</button>
 <button class="btn btn-stl" onclick="filterSelection('Turkey')"> Govt. of India - Ministry of S&T, Department of Bio Technology-Turkey research project</button>
  <button class="btn btn-stl" onclick="filterSelection('Indian')"> Indian Institute of Technology, Delhi</button>
  <button class="btn btn-stl" onclick="filterSelection('NINAWE')"> DR. NINAWE WITH ASIRWAD STAFF TEAM</button>
  <!-- <button class="btn btn-stl" onclick="filterSelection('Chicken')"> Turkey Chicken</button> -->
  <!-- <button class="btn btn-stl" onclick="filterSelection('Equipments')"> Equipments</button> -->
  <button class="btn btn-stl" onclick="filterSelection('International')"> International Women’s day celebration on March 8 th , 2020</button>
  <!-- <button class="btn btn-stl" onclick="filterSelection('Ministry')"> Govt. of India - Ministry of S&T, Department of Bio Technology-Turkey research project</button> -->
  <!-- <button class="btn btn-stl" onclick="filterSelection('Meteorology')"> Indian Meteorology Department staff installing meteorology equipments at Schools</button> -->
  <button class="btn btn-stl" onclick="filterSelection('Water')"> Water and Sanitation Program: School – Toilet Construction</button>
  <button class="btn btn-stl" onclick="filterSelection('Certificate')"> Certificate</button>
  <button class="btn btn-stl" onclick="filterSelection('Ministry')"> Ministry of MSME - KVIC SFURTI project</button>
  <button class="btn btn-stl" onclick="filterSelection('Conferences')"> Conferences</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row row-div text-center" >
  <div class="column chairman" style="width:100%;">
    <div class="content">
      <h3>Chairman and MD – V. Senthil Nathan in School – addressing to School teachers</h3>
    </div>
  </div>
  <div class="column chairman">
    <div class="content">
      <img src="./asirwad/0.jpg" alt="Mountains" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance" style="width:100%;">
    <div class="content">
      <h3>Microfinance (SHG/JLG) Program</h3>
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/1.jpg" alt="Lights" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/61.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/62.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/63.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/69.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/70.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/71.jpeg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Gober" style="width:100%;">
    <div class="content">
      <h3>Gober Gas Training Program</h3>
    </div>
  </div>
  <div class="column Gober" >
    <div class="content">
          <img src="./asirwad/2.jpg" alt="Nature" style="width:100%">
    </div>
  </div>
  
  <div class="column Organic" style="width:100%;">
    <div class="content">
      <h3>Organic Farming Program</h3>
    </div>
  </div>
  <div class="column Organic">
    <div class="content">
      <img src="./asirwad/3.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Govt" style="width:100%;">
    <div class="content">
      <h3>Govt. of India (NSDC) Training Program</h3>
    </div>
  </div>
  <div class="column Govt">
    <div class="content">
    <img src="./asirwad/4.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column International" style="width:100%;">
    <div class="content">
      <h3>International Women’s day celebration on March 8 th , 2022</h3>
    </div>
  </div>
  <div class="column International">
    <div class="content">
    <img src="./asirwad/5.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Turkey" style="width:100%;">
    <div class="content">
      <h3>Govt. of India - Ministry of S&T, Department of Bio Technology-Turkey research project</h3>
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
      <img src="./asirwad/6.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Agriculture" style="width:100%;">
    <div class="content">
      <h3>Agriculture Training Program</h3>
    </div>
  </div>
  <div class="column Agriculture">
    <div class="content">
    <img src="./asirwad/7.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Eye" style="width:100%;">
    <div class="content">
      <h3>Eye Camp Program</h3>
    </div>
  </div>
  <div class="column Eye">
    <div class="content">
    <img src="./asirwad/8.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Health" style="width:100%;">
    <div class="content">
      <h3>Health Awareness - Cardio Camp Program</h3>
    </div>
  </div>
  <div class="column Health">
    <div class="content">
    <img src="./asirwad/9.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Health">
    <div class="content">
    <img src="./asirwad/10.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Water" style="width:100%;">
    <div class="content">
      <h3>Water and Sanitation Program: School – Toilet Construction</h3>
    </div>
  </div>
  <div class="column Water">
    <div class="content">
    <img src="./asirwad/11.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Turkey" style="width:100%;">
    <div class="content">
      <h3>Turkey shed (Nucleus Centre)</h3>
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/12.jpg" alt="Car" style="width:100%">
    </div>
  </div>
   
  <div class="column Indian" style="width:100%;">
    <div class="content" >
      <h3>Dr. Das Professor, Indian Institute of Technology, Delhi
(Advisory Board member of PROBE Project,

Department of Science and Technology, Ministry of Science and Technology,

Govt of India
Visiting ASIRWAD project</h3>
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/13.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/14.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/15.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/20.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/34.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/35.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Indian" style="width:100%;">
    <div class="content">
      <h3>Mr. Gowda, Retired IMD – Indian Meteorology Department staff installing
meteorology equipments at Schools under PROBE project of
ASIRWAD – Department of Science and Technology</h3>
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/16.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/17.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/18.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/19.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/36.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/37.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column NINAWE" style="width:100%;">
    <div class="content">
      <h3>DR. NINAWE WITH ASIRWAD STAFF TEAM</h3>
    </div>
  </div>
  <div class="column NINAWE">
    <div class="content">
    <img src="./asirwad/21.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column NINAWE">
    <div class="content">
    <img src="./asirwad/22.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column NINAWE">
    <div class="content">
    <img src="./asirwad/24.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <!-- <div class="column NINAWE">
    <div class="content">
    <img src="./asirwad/33.jpg" alt="Car" style="width:100%">
    </div>
  </div> -->

  <div class="column Turkey" style="width:100%;">
    <div class="content">
      <h3>Turkey Chicken</h3>
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/31.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/32.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/25.JPG" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Turkey" style="width:100%;">
    <div class="content">
      <h3>Equipments</h3>
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/26.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/27.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/28.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/29.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/30.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Certificate" style="width:100%;">
    <div class="content">
      <h3>Certificate</h3>
    </div>
  </div>
  <div class="column Certificate">
    <div class="content">
    <img src="./asirwad/certificate1.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Certificate">
    <div class="content">
    <img src="./asirwad/certificate2.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Certificate">
    <div class="content">
    <img src="./asirwad/certificate3.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Certificate">
    <div class="content">
    <img src="./asirwad/certificate4.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry" style="width:100%;">
    <div class="content">
      <h3>Ministry of MSME - KVIC SFURTI project</h3>
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/48.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/49.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/50.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/51.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/52.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/54.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/55.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  
  
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/64.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/65.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/66.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/67.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/68.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/53.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/56.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/38.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <!-- <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/39.JPG" alt="Car" style="width:100%">
    </div>
  </div> -->
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/40.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <!-- <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/41.JPG" alt="Car" style="width:100%">
    </div>
  </div> -->
  <!-- <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/42.jpg" alt="Car" style="width:100%">
    </div>
  </div> -->
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/43.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <!-- <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/44.jpg" alt="Car" style="width:100%">
    </div>
  </div> -->
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/45.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/46.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/47.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Conferences" style="width:100%;">
    <div class="content">
      <h3>Mr. V. Senthil Nathan, CEO of ASIRWAD Trust participating international conferences</h3>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con1.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">Mr. V. Senthil Nathan participating in 
International Conference On 
Water and Sanitation in Mumbai 
in 2014 at Hotel Taj
</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con2.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">Mr.  V. Senthil Nathan with Founder Chair of 
Water.Org; donor organisation based in USA. 
Water.org is supported by PEPSI Co Foundation 
</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con3.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">Mr. V. Senthil Nathan, CEO of ASIRWAD Trust in RBI – Reserve Bank of India Training College at Pune in 2003</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con4.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">At an International Conference in 
Hong Kong,<br> China in 2015
</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con5.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">At Philippines during his Exposure visit
to CARD Bank, Philippines 
in Sep 2004 
</h6>
    </div>
  </div>
  <div class="column Conferences" >
    <div class="content" >
    <img src="./asirwad/con9.jpeg" alt="Car" style="width:100%">
   <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">Mr. V. Senthil Nathan with Nobel Peace Prize 
Laureate<br> Dr. Yunus, Founder Chairman, 
Grameen Bank, Bangladesh</h6>

    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con7.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">At Russia attending SEEP -USA
Conference 
</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con8.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">Mr. V. Senthil Nathan CEO of ASIRWAD Trust with 
IRDA – Insurance Regulatory Development 
Authority Chairman at Hyderabad
</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con6.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">At Poland participating SEEP Network, USA workshop in May 2004</h6>
    </div>
  </div>
  
  
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
            <div class="container my-5" id="VIDEOS">
              <div class="row" style="display: flex;justify-content: center;">
                <div class="col-12 text-center  section-header">
                  <h3 style="color: #26284e;">VIDEOS</h3>
              </div>
                <div class="col-lg-10">
                  <video src="./assets/video1.mp4" height="100%" width="100%" controls></video>

                </div>

              </div>

            </div>




<section id="six">
                <div class="row .footer" style="color: white;">
                  <div class="col-12 col-lg-4 col-md-6 col-sm-12 "
                    style="display: flex; flex-direction: column;align-items: center;margin-top: 20px;">
                  
                    <h3> Contact Us</h3>
                    <h7 style="color: white;"><i class="fa-solid fa-envelope"></i> Email</h7>
                    <p class="py-1 m-0">contact@grameengroup.in</p>
                    <h7><i class="fa-solid fa-phone-volume mt-3 mb-3"></i> Call us</h7>
                    
                    <p class="py-1 m-0">9442509485</p>
                    <p class="py-1 m-0">9382812000</p>
          
                    <p class="my-3 mb-4"><a href="#"><i class="bi bi-envelope-fill"
                      style="border-radius: 50%;background-color:#fffff0 ; color: #26284e;  font-size: 15px;padding: 10px 13px;margin: 8px;"></i></a>
                  <a href="#"><i class="bi bi-twitter"
                      style="border-radius: 50%;background-color:#fffff0 ; color: #26284e;   font-size: 15px;padding: 10px 13px;margin: 8px;"></i></a>
                  <a
                    href="#">
                    <i class="bi bi-linkedin"
                      style="border-radius: 50%;background-color:#fffff0 ; color: #26284e;   font-size: 15px;padding: 10px 13px;margin: 8px;"></i></a>
                      <a
                    href="#">
                    <i class="bi bi-youtube"
                      style="border-radius: 50%;background-color:#fffff0 ; color: #26284e;  font-size: 15px;padding: 10px 13px;margin: 7px;"></i></a>
                </p>
          
          
          
                  </div>
          
                  <div class="col-12 col-lg-2 col-md-6 col-sm-12 "
                    style="display: flex; flex-direction: column; align-items: center;margin-top: 20px;">
                    <div style="display: grid;">
                      <h3> Quick links</h3>
                     
                        <a href="index.php">Home</a>
                      <a href="aboutus.php" >About Us</a>
                      <a href="products.php">Products</a>
                      <a href="PartnerOrganisations.php">Partner Organisations</a>
                      <a href="Policies.php">Policies</a>
                      
                    </div>
          
                  </div>
                  <div class="col-12 col-lg-2 col-md-6 col-sm-12 "
                    style="display: flex; flex-direction: column; align-items: center;margin-top: 20px;">
                    <div style="display: grid;">
                      <h3> Quick links</h3>
                    
                      <a href="Financials.php">Financials</a>
                      <a href="itsystem.php">IT Systems</a>
                      <a href="asirwadtrust.php">Asirwad Trust</a>
                      <a href="galary.php">Gallery</a>
                      <a href="Contactus.php">Contact Us</a>
                    </div>
          
                  </div>
                 
                  <div class="col-12 col-lg-4 col-md-6 col-sm-12 "
                    style="display: flex; flex-direction: column; align-items: center;margin-top: 20px;">
                    <div>
                      <h3>Location</h3>
                      <p style="display: flex; flex-direction: column; font-weight:500;">
                        <!-- <span>44/2span</span>
                        <span>3rd sangeeth Nagar,</span>
                        <span> Madurai - 625018.</span> -->
                        <span>D468E, 
                           Rajarajan Street,</span>
                        <span>3rd cross, 
                           Anna Nagar,</span> 
                        <span>Thennur, 
                           Trichy - 620 017,</span> 
                          <span>
                            Tamil Nadu, South India
                          </span> 
                      </p>
          
                    </div>
          
                  </div>
                  <div class="container">
                    <div class="copyright">
                      Copyright &copy; 2024. All Rights Reserved.
                    </div>
                    <div class="credits">
                      Designed by<a href="https://virtualtechnology.in//" target="_blank" style='color:#D2B48c;'>
                        virtualtechnology.in</a>
                    </div>
                  </div>
          
          
          
          
              </section>

          


                    <script src="./main.js"></script>
                    <script src="./galery.js"></script>
            
            
            
            
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
           
           
           
                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
          
          
                    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
           
           
           
           
           
           
           
           
           
           
           
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                  AOS.init();
                    var swiper = new Swiper(".swiper", {
        effect: "cards",
        grabCursor: true,
        initialSlide: 2,
        speed: 500,
        loop: true,
        rotate: true,
        mousewheel: {
        invert: false,
      },
    });
                </script>

<script>
  // JavaScript for navigation behavior using event delegation
  document.addEventListener('click', (event) => {
      const clickedElement = event.target;
      // Check if the clicked element is a navigation link and the icon is not clicked
      if (clickedElement.classList.contains('nav__link') && !clickedElement.querySelector('.ri-arrow-down-s-line')) {
          console.log('Clicked on the content of the navigation link, navigating to another page');
          // Allow navigation to the specified page
      } else if (clickedElement.classList.contains('ri-arrow-down-s-line')) {
          console.log('Clicked on the icon');
          event.preventDefault(); // Prevent default navigation when the icon is clicked
      }
  });




  document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        document.querySelector(".outerload").style.display = "none";
    }, 2000);
});

 

</script>

<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>




<script>
filterSelection("chairman")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<script>
  document.addEventListener('keydown', function (e) {
    if (e.key === 'F12' || e.keyCode === 123) {
        e.preventDefault();
    }
});

</script>

    
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="./galary.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Oswald|Anton|Roboto Slab|Rakkas|Signika">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
         <script src="https://kit.fontawesome.com/ee7a178a15.js" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Opan+Sans">
         <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.css">
         <link rel="shortcut icon" href="./assets/sakra logo.png" type="image/x-icon">

         <!-- google fonts -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        /* Define styles for the icon */
        .ri-arrow-down-s-line {
            cursor: pointer;
            margin-left: 5px; /* Adjust this value as needed to create space between text and icon */
        }
        .nav__link {
            display: inline-block; /* Ensure the anchor behaves as a block element */
            text-decoration: none; /* Remove default underline */
            color: #fffff0;
        }
        .dropdown__button {
            display: flex; /* Use flexbox to align text and icon */
            align-items: center; /* Center vertically */
        }
    </style>
</head>
<body oncontextmenu="return false">


  <div class="outerload">
    <div id="preloader">
      <div></div>
      <div></div>
      <div></div>
   </div>
  </div>


  <div class="fix" style="z-index: 999;">
    <a href="https://api.whatsapp.com/send?phone=9382812000&amp;text=Welcome to Gramen Group" target="_blank"
      rel="noreferrer"><img class="round" src="./assets/whatsapp.png" alt=""></a>
    <a href="https://www.instagram.com/" target="_blank"><img class="round"
        src="./assets/instagram.png" alt=""></a>
    <a href="tel:9382812000" target="_blank"><img class="round" src="./assets/telephone.png" alt=""></a>
    <a href="https://www.facebook.com/" target="_blank" style="border-bottom:none;"><img class="round"
        src="./assets/facebook.png" alt="" ></a>
    <!-- <a href="https://www.youtube.com/" target="_blank" ><img src="./youtube.png"
        class="round" alt=""></i></a>
        <a href="https://twitter.com/" ><img class="round" src="./twitter.png" alt=""></a>
        <a href=""><img class="round" src="./gmail.png" alt=""></a>
        <a href="" style="border-bottom:none;"><img src="./linkedin.png" alt=""class="round"></a> -->
  </div>


  <div>
    <a href="javascript:" id="return-to-top" style="z-index: 1000;"><i class="bi bi-chevron-up" ></i></a>
  </div>



  <div class="container">
      <div class="nav__data my-2">
          <div class="nav__logo" style="display: flex;align-items: center;">
            <!-- <a href="#" class="nav__logo" > -->
              <!-- <h2>Logo</h2> -->
              <img src="./assets/GRAMEEN LOGO.png" alt="" style="width:100%;">
          <!-- </a> -->
          </div>
                  
                  
                  <!-- <div class="search-box">
                      <button class="btn-search"><i class="fas fa-search"></i></button>
                      <input type="text" class="input-search" placeholder="Type to Search...">
                    </div> -->

                    <div class="nav-no" style="display: flex;align-items: center;">
                      <h6 ><i class="bi bi-telephone-fill"></i>&nbsp;&nbsp;&nbsp;Call : +91 9382812000</h6>
                    </div>
                  
  
                  <div class="nav__toggle" id="nav-toggle" >
                      <i class="ri-menu-line nav__toggle-menu"></i>
                      <i class="ri-close-line nav__toggle-close"></i>
                  </div>
              </div>
    </div>
        
    <div class="container-fluid nav-div " >
              <div class="row nav__menu" id="nav-menu" style="background-color: white;z-index: 1000;">
                  
                  
                  <div class="col-12" style="background-color: #26284e;color: white;">
                  <ul class="nav__list" >

                    <li class="dropdown__item">   
                        
                        
                      <a href="./index.php" class="nav__link">
                        <div class="dropdown__button">
                            <span>Home</span>
                            
                        </div>
                    </a>
                                       
                    </li>




                      <li class="dropdown__item">   
                        
                        
                        <a href="./aboutus.php" class="nav__link ">
                          <div class="dropdown__button">
                              <span>About Us</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>
                                         
                      
                        <!-- <a href="./about us.html" >
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                            About Us<i class="ri-arrow-down-s-line dropdown__arrow">  </i>
                          </div>
                        </a> -->

                          <div class="dropdown__container" >
                              <div class="dropdown-alter"  style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="aboutus.php#overview">
                                      <div class="dropdown__group" >
                                          <div class="dropdown__icon">
                                              <i class="bi bi-binoculars-fill"></i>
                                          </div>
      
                                          <span class="dropdown__title">Overview</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="aboutus.php#vision-mission-goal">
                                      <div class="dropdown__group" >
                                          <div class="dropdown__icon">
                                              <i class="fa fa-podcast" aria-hidden="true" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Vision, Mission and Goals</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="aboutus.php#board-of-directors">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-people-line"></i>
                                          </div>
      
                                          <span class="dropdown__title">Board of Directors</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="aboutus.php#Management-team">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-people-group"></i>
                                          </div>
      
                                          <span class="dropdown__title">Management Team</span>
      
                                      </div>
                                    </a>

                                    <a href=" aboutus.php#staff-team-structure">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-users-rays" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Staff Team and Structure</span>
      
                                          
                                      </div>
                                    </a>

                                    <a href="aboutus.php#geograp-area-apration">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-bar-chart-line-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Geographical Area of Operations</span>
      
                                         
                                      </div>
                                    </a>

                                    <a href="aboutus.php#social-impact">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-shuffle" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Social Impact</span>
      
                                         
                                      </div>
                                    </a>
                                  </div>
                              </div>
                          </div>
                      </li>

                     
                      <li class="dropdown__item">  



                        <a href="./products.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>Products</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>


                        <!-- <a href="./products.html">                   
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Products <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a>  -->

                          <div class="dropdown__container">
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="products.php#Agriculture-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-wheat-awn"></i>
                                          </div>
      
                                          <span class="dropdown__title">Agriculture Loans </span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="products.php#Microfinance-Loan">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-microchip" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Microfinance Loans</span>
      
                                      </div>
                                    </a>
      
                                    <a href="products.php#Consumer-Durable-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-hand-holding-dollar" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Consumer Durable Loans</span>
      
                                         
                                      </div>
                                    </a>
      
                                    <a href="products.php#SME-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-bar-chart-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">SME Loans</span>
      
                                          
                                      </div>
                                    </a>

                                    <a href="products.php#Emergency-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-kit-medical" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Emergency Loan</span>
      
                                          
                                      </div>
                                    </a>

                                    <a href="products.php#Climate-ready-WASH-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-cloud-haze2-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Climate ready WASH Loans</span>
      
                                         
                                      </div>
                                    </a>

                                    <a href="products.php#Solar-Energy-Loans">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-solar-panel" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Solar Energy Loans</span>
      
                                         
                                      </div>
                                    </a>
                                  </div>
                              </div>
                              
                          </div>
                      </li>

                      
                      <li class="dropdown__item">


                        <a href="./PartnerOrganisations.php" class="nav__link">
                          <div class="dropdown__button">
                              <span> Partner Organisations</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>


                        <!-- <a href="./Partner Organisations.html">
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Partner Organisations <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a> -->

                          <div class="dropdown__container">
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="PartnerOrganisations.php#Funding-Partners">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-magnifying-glass-dollar"></i>
                                          </div>
      
                                          <span class="dropdown__title">Funding Partners</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="PartnerOrganisations.php#Technology-Partners">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-handshake" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Technology Partners</span>
      
                                        
                                      </div>
                                    </a>
  
                                    <a href="PartnerOrganisations.php#Insurance-Partners">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-building-columns" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Insurance Partners</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="PartnerOrganisations.php#Associations-Networks">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa fa-users" aria-hidden="true" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Associations & Networks</span>
      
                                          
                                      </div>
                                    </a>
                                  </div>
                              </div>
                              
                          </div>
                      </li>


                      <li class="dropdown__item">


                        <a href="./Policies.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>Policies</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>




                        <!-- <a href="./Policies.html">
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Policies<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a> -->

                          <div class="dropdown__container">
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="Policies.php#Human-Resource-Management">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-rotate" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Human Resource Management</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="Policies.php#Employee-Code-of-Conduct-Policy">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-person-lines-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Code of Conduct</span>
      
                                          
                                      </div>
                                    </a>
                                  </div>
                              </div>
                             
                          </div>
                      </li>


                      <li class="dropdown__item"> 
                        
                        

                        <a href="./Financials.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>Financials</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>



                        <!-- <a href="./Financials.html">               
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Financials<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a>  -->

                          <div class="dropdown__container" >
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="Financials.php#growth-and-outreach">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-graph-up-arrow" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Growth and Outreach</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="Financials.php#Financial-Performance">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-currency-exchange" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Financial Performance</span>
      
                                         
                                      </div>
                                    </a>
      
                                    <a href="Financials.php#Physical-and-Financial-Projection">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-shield-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Physical and Financial Projection</span>
      
                                        
                                      </div>
                                    </a>
      
                                    <a href="Financials.php#Internal-Audit">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-file-pen" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Internal Audit</span>
      
                                          
                                      </div>
                                    </a>

                                    <a href="Financials.php#MIS-IT-systems">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-tower-cell" ></i>
                                          </div>
      
                                          <span class="dropdown__title">MIS & IT Systems</span>
      
                                         
                                      </div>
                                    </a>

                                           <a href="./Financials.php#Rating-report">   
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-star" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Rating Report</span>
      
                                          
                                      </div>
                                      </a>

                                      <a href="./Financials.php#Audited-statements">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-book"></i>
                                          </div>
      
                                          <span class="dropdown__title">Audited Statements</span>
      
                                         
                                      </div>
                                      </a>

                                  </div>
                              </div>
                              
                          </div>
                      </li>


                     <li class="dropdown__item"> 
                        
                        
                        <a href="./itsystem.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>IT Systems</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>


                        <!-- <a href="#">                    
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              IT Systems <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a> -->

                          <div class="dropdown__container">
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="./itsystem.php#Eswar-system">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-laptop-file" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Eswar Systems</span>
      
                                      </div>
                                      </a>
                                        <a href="./itsystem.php#Viva">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-heart-pulse" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Viva</span>
      
                                          
                                      </div>
                                      </a>
                                  </div>
                              </div>
                              
                          </div>
                      </li>




                      <li class="dropdown__item"> 
                        
                        

                        <a href="./asirwadtrust.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>Asirwad Trust</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>



                        <!-- <a href="./Financials.html">               
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Financials<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a>  -->


                          <div class="dropdown__container ">
                              <div class="dropdown-alter " style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="./asirwadtrust.php#vision-mission-goal">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                            <i class="fa fa-podcast" aria-hidden="true" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Vision, Mission and Goals</span>
      
                                          
                                      </div>
                                    </a>

                                    <a href="./asirwadtrust.php#board-of-directors">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                            <i class="fa-solid fa-people-line"></i>
                                          </div>
      
                                          <span class="dropdown__title">Board of Directors</span>
      
                                         
                                      </div>
                                    </a>

                                    <!-- <div class="dropdown"> -->
                                      <a href="./asirwadtrust.php#Funding-agencies">
                                       <div class="dropdown__group">
                                         
                                            <div class="dropdown__icon">
                                              <i class="fa-solid fa-magnifying-glass-dollar"></i>
                                            </div>
        
                                            <span class="dropdown__title">Funding Agencies</span>
                                            <!-- <div class="dropdown-content full-height" style="background-color: #fffff0;">
                                              <button data-bs-toggle="modal" data-bs-target="#exampleModal1" style="border: none;background-color: transparent;outline: none;">DST</button>
                                              <a href="#">DBT</a>
                                              <a href="#">Blue Star</a>
                                              <a href="#">Pon Chemical</a>
                                              <a href="#">MSME-KVIC</a>
                                            </div> -->
                                          
                                        </div>
                                      
                                      </a>
                                    <!-- </div> -->

                                    <a href="./asirwadtrust.php#Program-and-services">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="fa-solid fa-gears"></i>
                                            
                                          </div>
      
                                          <span class="dropdown__title">Programs And Services</span>
      
                                         
                                      </div>
                                    </a>
      
                                    <a href="./asirwadtrust.php#Organization-structure">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-diagram-3-fill"></i>
                                          </div>
      
                                          <span class="dropdown__title">Organization Structure</span>
      
                                         
                                      </div>
                                    </a>

                                    
      



                                  </div>
                              </div>
                              
                          
                            
                            </div>
                        
                      </li>



                      <li class="dropdown__item">   


                        <a href="./galary.php" class="nav__link">
                          <div class="dropdown__button">
                              <span> Gallery</span>
                              <!-- Add the icon with the class "icon" -->
                              <i class="ri-arrow-down-s-line icon"></i>
                          </div>
                      </a>


                        <!-- <a href="./galary.html">                    
                          <div class="nav__link dropdown__button" style="color: #fffff0;">
                              Gallery<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                          </div>
                        </a>  -->

                          <div class="dropdown__container" >
                              <div class="dropdown-alter" style="background-color: #fffff0;z-index: 100;">
                                  <div class="dropdown__content">
                                    <a href="galary.php#PHOTOS">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-images"></i>
                                          </div>
      
                                          <span class="dropdown__title">Photos</span>
      
                                          
                                      </div>
                                    </a>
      
                                    <a href="galary.php#VIDEOS">
                                      <div class="dropdown__group">
                                          <div class="dropdown__icon">
                                              <i class="bi bi-play-circle-fill" ></i>
                                          </div>
      
                                          <span class="dropdown__title">Videos</span>
      
                                          
                                      </div>
                                    </a>
                                  </div>
                              </div>
                             
                          </div>
                      </li>


                      <li class="dropdown__item">   
                        
                        
                        <a href="./Contactus.php" class="nav__link">
                          <div class="dropdown__button">
                              <span>Contact Us</span>
                              
                          </div>
                      </a>
                                         
                      </li>

                     
                     </ul>
              </div>
              </div>
      </div>

            <div class="container-fluid ">
                <div class="row contentmain">
                    <div class="col-12 contentcon">
                        <h2 class="mb-4">Gallery</h2>
                        <h5>HOME / Gallery</h5>
                    </div>
                </div>
            </div>


            <!-- <div class="container-fluid" id="PHOTOS">
        <div class="row">
            <div class="parent-container mb-5">
                <div class="col-12 text-center mb-5 section-header">
                    <h3 style="color: #26284e;">PHOTOS</h3>
                </div>
                <div class="col-lg-4 child-container" id="one" >
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%; padding:5px 0;">Chairman and MD – V. Senthil Nathan in School – addressing to School teachers</p>
                  <img src="./asirwad/0.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Microfinance (SHG/JLG) Program</p>
                  <img src="./asirwad/1.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Gober Gas Training Program</p>
                  <img src="./asirwad/2.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Organic Farming Program</p>
                  <img src="./asirwad/3.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Govt. of India (NSDC) Training Program</p>
                  <img src="./asirwad/4.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">International Women’s day celebration on March 8 th , 2020</p>
                  <img src="./asirwad/5.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Govt. of India - Ministry of S&amp;T, Department of Bio Technology-Turkey research project</p>
                  <img src="./asirwad/6.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Agriculture Training Program</p>
                  <img src="./asirwad/7.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Eye Camp Program</p>
                  <img src="./asirwad/8.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Health Awareness - Cardio Camp Program</p>
                  <img src="./asirwad/9.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Health Awareness - Cardio Camp Program</p>
                  <img src="./asirwad/10.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Water and Sanitation Program: School – Toilet Construction</p>
                  <img src="./asirwad/11.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:0px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Turkey shed (Nucleus Centre)</p>
                  <img src="./asirwad/12.jpg" width="100%" height="auto">
                  </div>
                 
                  
                  
                  
                </div>
                  <div class="col-lg-4 child-container" id="two">
                    <img src="./asirwad/33.jpg" width="100%" height="auto">
                    <img src="./asirwad/31.jpg" width="100%" height="auto">
                    <img src="./asirwad/32.JPG" width="100%" height="auto">
                    <img src="./asirwad/26.jpg" width="100%" height="auto">
                    <img src="./asirwad/27.JPG" width="100%" height="auto">
                    <img src="./asirwad/28.JPG" width="100%" height="auto">
                    <img src="./asirwad/29.JPG" width="100%" height="auto">
                    <img src="./asirwad/30.JPG" width="100%" height="auto">
                    
                    
                    
                                                          
                </div>
                    <div class="col-lg-4 child-container" id="three">
                    <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Institute of Technology, Delhi </p>
                  <img src="./asirwad/13.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Institute of Technology, Delhi </p>
                  <img src="./asirwad/14.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Meteorology Department staff installing meteorology equipments at Schools</p>
                  <img src="./asirwad/16.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Institute of Technology, Delhi </p>
                  <img src="./asirwad/15.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Meteorology Department staff installing meteorology equipments at Schools</p>
                  <img src="./asirwad/17.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Meteorology Department staff installing meteorology equipments at Schools</p>
                  <img src="./asirwad/18.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Institute of Technology, Delhi </p>
                  <img src="./asirwad/20.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">Indian Meteorology Department staff installing meteorology equipments at Schools</p>
                  <img src="./asirwad/19.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">DR. NINAWE WITH ASIRWAD STAFF TEAM</p>
                  <img src="./asirwad/21.jpg" width="100%" height="auto">
                  </div>
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">DR. NINAWE WITH ASIRWAD STAFF TEAM</p>
                  <img src="./asirwad/22.jpg" width="100%" height="auto">
                  </div>
                  <img src="./asirwad/23.jpg" width="100%" height="auto">
                  <div style="position:relative;">
                  <p style="position:absolute;bottom:-10px;background-color:rgba(38, 40, 78, 0.9);color:yellow;text-align:center;width:100%;padding:5px 0;">DR. NINAWE WITH ASIRWAD STAFF TEAM</p>
                  <img src="./asirwad/24.jpg" width="100%" height="auto">
                  </div>
                      <img src="./asirwad/25.JPG" width="100%" height="auto">
                      

                      
                      
                      
                </div>
            </div>
        </div>

    </div> -->






    <!-- MAIN (Center website) -->
<div class="main container my-5" id="PHOTOS">

<!-- <h1>MYLOGO.COM</h1>
<hr>

<h2>PORTFOLIO</h2> -->
<div id="myBtnContainer" >
  <!-- <button class="btn active" onclick="filterSelection('all')"> Show all</button> -->
  <button class="btn btn-stl active"  onclick="filterSelection('chairman')"> Chairman and MD – V. Senthil Nathan in School – addressing to School teachers</button>
  <button class="btn btn-stl" onclick="filterSelection('Microfinance')"> Microfinance (SHG/JLG) Program</button>
  <button class="btn btn-stl" onclick="filterSelection('Gober')"> Gober Gas Training Program</button>
  <button class="btn btn-stl" onclick="filterSelection('Organic')"> Organic Farming Program</button>
  <button class="btn btn-stl" onclick="filterSelection('Govt')"> Govt. of India (NSDC) Training Program</button>
   <button class="btn btn-stl" onclick="filterSelection('Agriculture')"> Agriculture Training Program</button>
  <button class="btn btn-stl" onclick="filterSelection('Eye')"> Eye Camp Program</button>
  <button class="btn btn-stl" onclick="filterSelection('Health')"> Health Awareness - Cardio Camp Program</button>
 <button class="btn btn-stl" onclick="filterSelection('Turkey')"> Govt. of India - Ministry of S&T, Department of Bio Technology-Turkey research project</button>
  <button class="btn btn-stl" onclick="filterSelection('Indian')"> Indian Institute of Technology, Delhi</button>
  <button class="btn btn-stl" onclick="filterSelection('NINAWE')"> DR. NINAWE WITH ASIRWAD STAFF TEAM</button>
  <!-- <button class="btn btn-stl" onclick="filterSelection('Chicken')"> Turkey Chicken</button> -->
  <!-- <button class="btn btn-stl" onclick="filterSelection('Equipments')"> Equipments</button> -->
  <button class="btn btn-stl" onclick="filterSelection('International')"> International Women’s day celebration on March 8 th , 2020</button>
  <!-- <button class="btn btn-stl" onclick="filterSelection('Ministry')"> Govt. of India - Ministry of S&T, Department of Bio Technology-Turkey research project</button> -->
  <!-- <button class="btn btn-stl" onclick="filterSelection('Meteorology')"> Indian Meteorology Department staff installing meteorology equipments at Schools</button> -->
  <button class="btn btn-stl" onclick="filterSelection('Water')"> Water and Sanitation Program: School – Toilet Construction</button>
  <button class="btn btn-stl" onclick="filterSelection('Certificate')"> Certificate</button>
  <button class="btn btn-stl" onclick="filterSelection('Ministry')"> Ministry of MSME - KVIC SFURTI project</button>
  <button class="btn btn-stl" onclick="filterSelection('Conferences')"> Conferences</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row row-div text-center" >
  <div class="column chairman" style="width:100%;">
    <div class="content">
      <h3>Chairman and MD – V. Senthil Nathan in School – addressing to School teachers</h3>
    </div>
  </div>
  <div class="column chairman">
    <div class="content">
      <img src="./asirwad/0.jpg" alt="Mountains" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance" style="width:100%;">
    <div class="content">
      <h3>Microfinance (SHG/JLG) Program</h3>
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/1.jpg" alt="Lights" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/61.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/62.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/63.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/69.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/70.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Microfinance">
    <div class="content">
    <img src="./asirwad/71.jpeg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Gober" style="width:100%;">
    <div class="content">
      <h3>Gober Gas Training Program</h3>
    </div>
  </div>
  <div class="column Gober" >
    <div class="content">
          <img src="./asirwad/2.jpg" alt="Nature" style="width:100%">
    </div>
  </div>
  
  <div class="column Organic" style="width:100%;">
    <div class="content">
      <h3>Organic Farming Program</h3>
    </div>
  </div>
  <div class="column Organic">
    <div class="content">
      <img src="./asirwad/3.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Govt" style="width:100%;">
    <div class="content">
      <h3>Govt. of India (NSDC) Training Program</h3>
    </div>
  </div>
  <div class="column Govt">
    <div class="content">
    <img src="./asirwad/4.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column International" style="width:100%;">
    <div class="content">
      <h3>International Women’s day celebration on March 8 th , 2022</h3>
    </div>
  </div>
  <div class="column International">
    <div class="content">
    <img src="./asirwad/5.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Turkey" style="width:100%;">
    <div class="content">
      <h3>Govt. of India - Ministry of S&T, Department of Bio Technology-Turkey research project</h3>
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
      <img src="./asirwad/6.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Agriculture" style="width:100%;">
    <div class="content">
      <h3>Agriculture Training Program</h3>
    </div>
  </div>
  <div class="column Agriculture">
    <div class="content">
    <img src="./asirwad/7.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Eye" style="width:100%;">
    <div class="content">
      <h3>Eye Camp Program</h3>
    </div>
  </div>
  <div class="column Eye">
    <div class="content">
    <img src="./asirwad/8.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Health" style="width:100%;">
    <div class="content">
      <h3>Health Awareness - Cardio Camp Program</h3>
    </div>
  </div>
  <div class="column Health">
    <div class="content">
    <img src="./asirwad/9.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Health">
    <div class="content">
    <img src="./asirwad/10.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Water" style="width:100%;">
    <div class="content">
      <h3>Water and Sanitation Program: School – Toilet Construction</h3>
    </div>
  </div>
  <div class="column Water">
    <div class="content">
    <img src="./asirwad/11.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Turkey" style="width:100%;">
    <div class="content">
      <h3>Turkey shed (Nucleus Centre)</h3>
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/12.jpg" alt="Car" style="width:100%">
    </div>
  </div>
   
  <div class="column Indian" style="width:100%;">
    <div class="content" >
      <h3>Dr. Das Professor, Indian Institute of Technology, Delhi
(Advisory Board member of PROBE Project,

Department of Science and Technology, Ministry of Science and Technology,

Govt of India
Visiting ASIRWAD project</h3>
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/13.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/14.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/15.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/20.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/34.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/35.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Indian" style="width:100%;">
    <div class="content">
      <h3>Mr. Gowda, Retired IMD – Indian Meteorology Department staff installing
meteorology equipments at Schools under PROBE project of
ASIRWAD – Department of Science and Technology</h3>
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/16.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/17.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/18.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/19.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/36.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Indian">
    <div class="content">
    <img src="./asirwad/37.jpg" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column NINAWE" style="width:100%;">
    <div class="content">
      <h3>DR. NINAWE WITH ASIRWAD STAFF TEAM</h3>
    </div>
  </div>
  <div class="column NINAWE">
    <div class="content">
    <img src="./asirwad/21.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column NINAWE">
    <div class="content">
    <img src="./asirwad/22.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column NINAWE">
    <div class="content">
    <img src="./asirwad/24.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <!-- <div class="column NINAWE">
    <div class="content">
    <img src="./asirwad/33.jpg" alt="Car" style="width:100%">
    </div>
  </div> -->

  <div class="column Turkey" style="width:100%;">
    <div class="content">
      <h3>Turkey Chicken</h3>
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/31.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/32.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/25.JPG" alt="Car" style="width:100%">
    </div>
  </div>

  <div class="column Turkey" style="width:100%;">
    <div class="content">
      <h3>Equipments</h3>
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/26.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/27.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/28.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/29.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Turkey">
    <div class="content">
    <img src="./asirwad/30.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Certificate" style="width:100%;">
    <div class="content">
      <h3>Certificate</h3>
    </div>
  </div>
  <div class="column Certificate">
    <div class="content">
    <img src="./asirwad/certificate1.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Certificate">
    <div class="content">
    <img src="./asirwad/certificate2.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Certificate">
    <div class="content">
    <img src="./asirwad/certificate3.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Certificate">
    <div class="content">
    <img src="./asirwad/certificate4.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry" style="width:100%;">
    <div class="content">
      <h3>Ministry of MSME - KVIC SFURTI project</h3>
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/48.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/49.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/50.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/51.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/52.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/54.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/55.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  
  
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/64.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/65.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/66.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/67.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/68.jpeg" alt="Car" style="width:100%">
    </div>
  </div>
  
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/53.JPG" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/56.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/38.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <!-- <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/39.JPG" alt="Car" style="width:100%">
    </div>
  </div> -->
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/40.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <!-- <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/41.JPG" alt="Car" style="width:100%">
    </div>
  </div> -->
  <!-- <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/42.jpg" alt="Car" style="width:100%">
    </div>
  </div> -->
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/43.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <!-- <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/44.jpg" alt="Car" style="width:100%">
    </div>
  </div> -->
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/45.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/46.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Ministry">
    <div class="content">
    <img src="./asirwad/47.jpg" alt="Car" style="width:100%">
    </div>
  </div>
  <div class="column Conferences" style="width:100%;">
    <div class="content">
      <h3>Mr. V. Senthil Nathan, CEO of ASIRWAD Trust participating international conferences</h3>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con1.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">Mr. V. Senthil Nathan participating in 
International Conference On 
Water and Sanitation in Mumbai 
in 2014 at Hotel Taj
</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con2.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">Mr.  V. Senthil Nathan with Founder Chair of 
Water.Org; donor organisation based in USA. 
Water.org is supported by PEPSI Co Foundation 
</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con3.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">Mr. V. Senthil Nathan, CEO of ASIRWAD Trust in RBI – Reserve Bank of India Training College at Pune in 2003</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con4.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">At an International Conference in 
Hong Kong,<br> China in 2015
</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con5.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">At Philippines during his Exposure visit
to CARD Bank, Philippines 
in Sep 2004 
</h6>
    </div>
  </div>
  <div class="column Conferences" >
    <div class="content" >
    <img src="./asirwad/con9.jpeg" alt="Car" style="width:100%">
   <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">Mr. V. Senthil Nathan with Nobel Peace Prize 
Laureate<br> Dr. Yunus, Founder Chairman, 
Grameen Bank, Bangladesh</h6>

    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con7.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">At Russia attending SEEP -USA
Conference 
</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con8.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">Mr. V. Senthil Nathan CEO of ASIRWAD Trust with 
IRDA – Insurance Regulatory Development 
Authority Chairman at Hyderabad
</h6>
    </div>
  </div>
  <div class="column Conferences">
    <div class="content">
    <img src="./asirwad/con6.jpeg" alt="Car" style="width:100%">
    <h6 style="background-color:#26284e; color:#fffff0;padding:10px;">At Poland participating SEEP Network, USA workshop in May 2004</h6>
    </div>
  </div>
  
  
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
            <div class="container my-5" id="VIDEOS">
              <div class="row" style="display: flex;justify-content: center;">
                <div class="col-12 text-center  section-header">
                  <h3 style="color: #26284e;">VIDEOS</h3>
              </div>
                <div class="col-lg-10">
                  <video src="./assets/video1.mp4" height="100%" width="100%" controls></video>

                </div>

              </div>

            </div>




<section id="six">
                <div class="row .footer" style="color: white;">
                  <div class="col-12 col-lg-4 col-md-6 col-sm-12 "
                    style="display: flex; flex-direction: column;align-items: center;margin-top: 20px;">
                  
                    <h3> Contact Us</h3>
                    <h7 style="color: white;"><i class="fa-solid fa-envelope"></i> Email</h7>
                    <p class="py-1 m-0">contact@grameengroup.in</p>
                    <h7><i class="fa-solid fa-phone-volume mt-3 mb-3"></i> Call us</h7>
                    
                    <p class="py-1 m-0">9442509485</p>
                    <p class="py-1 m-0">9382812000</p>
          
                    <p class="my-3 mb-4"><a href="#"><i class="bi bi-envelope-fill"
                      style="border-radius: 50%;background-color:#fffff0 ; color: #26284e;  font-size: 15px;padding: 10px 13px;margin: 8px;"></i></a>
                  <a href="#"><i class="bi bi-twitter"
                      style="border-radius: 50%;background-color:#fffff0 ; color: #26284e;   font-size: 15px;padding: 10px 13px;margin: 8px;"></i></a>
                  <a
                    href="#">
                    <i class="bi bi-linkedin"
                      style="border-radius: 50%;background-color:#fffff0 ; color: #26284e;   font-size: 15px;padding: 10px 13px;margin: 8px;"></i></a>
                      <a
                    href="#">
                    <i class="bi bi-youtube"
                      style="border-radius: 50%;background-color:#fffff0 ; color: #26284e;  font-size: 15px;padding: 10px 13px;margin: 7px;"></i></a>
                </p>
          
          
          
                  </div>
          
                  <div class="col-12 col-lg-2 col-md-6 col-sm-12 "
                    style="display: flex; flex-direction: column; align-items: center;margin-top: 20px;">
                    <div style="display: grid;">
                      <h3> Quick links</h3>
                     
                        <a href="index.php">Home</a>
                      <a href="aboutus.php" >About Us</a>
                      <a href="products.php">Products</a>
                      <a href="PartnerOrganisations.php">Partner Organisations</a>
                      <a href="Policies.php">Policies</a>
                      
                    </div>
          
                  </div>
                  <div class="col-12 col-lg-2 col-md-6 col-sm-12 "
                    style="display: flex; flex-direction: column; align-items: center;margin-top: 20px;">
                    <div style="display: grid;">
                      <h3> Quick links</h3>
                    
                      <a href="Financials.php">Financials</a>
                      <a href="itsystem.php">IT Systems</a>
                      <a href="asirwadtrust.php">Asirwad Trust</a>
                      <a href="galary.php">Gallery</a>
                      <a href="Contactus.php">Contact Us</a>
                    </div>
          
                  </div>
                 
                  <div class="col-12 col-lg-4 col-md-6 col-sm-12 "
                    style="display: flex; flex-direction: column; align-items: center;margin-top: 20px;">
                    <div>
                      <h3>Location</h3>
                      <p style="display: flex; flex-direction: column; font-weight:500;">
                        <!-- <span>44/2span</span>
                        <span>3rd sangeeth Nagar,</span>
                        <span> Madurai - 625018.</span> -->
                        <span>D468E, 
                           Rajarajan Street,</span>
                        <span>3rd cross, 
                           Anna Nagar,</span> 
                        <span>Thennur, 
                           Trichy - 620 017,</span> 
                          <span>
                            Tamil Nadu, South India
                          </span> 
                      </p>
          
                    </div>
          
                  </div>
                  <div class="container">
                    <div class="copyright">
                      Copyright &copy; 2024. All Rights Reserved.
                    </div>
                    <div class="credits">
                      Designed by<a href="https://virtualtechnology.in//" target="_blank" style='color:#D2B48c;'>
                        virtualtechnology.in</a>
                    </div>
                  </div>
          
          
          
          
              </section>

          


                    <script src="./main.js"></script>
                    <script src="./galery.js"></script>
            
            
            
            
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
           
           
           
                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
          
          
                    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
           
           
           
           
           
           
           
           
           
           
           
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                  AOS.init();
                    var swiper = new Swiper(".swiper", {
        effect: "cards",
        grabCursor: true,
        initialSlide: 2,
        speed: 500,
        loop: true,
        rotate: true,
        mousewheel: {
        invert: false,
      },
    });
                </script>

<script>
  // JavaScript for navigation behavior using event delegation
  document.addEventListener('click', (event) => {
      const clickedElement = event.target;
      // Check if the clicked element is a navigation link and the icon is not clicked
      if (clickedElement.classList.contains('nav__link') && !clickedElement.querySelector('.ri-arrow-down-s-line')) {
          console.log('Clicked on the content of the navigation link, navigating to another page');
          // Allow navigation to the specified page
      } else if (clickedElement.classList.contains('ri-arrow-down-s-line')) {
          console.log('Clicked on the icon');
          event.preventDefault(); // Prevent default navigation when the icon is clicked
      }
  });




  document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        document.querySelector(".outerload").style.display = "none";
    }, 2000);
});

 

</script>

<script>
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>




<script>
filterSelection("chairman")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<script>
  document.addEventListener('keydown', function (e) {
    if (e.key === 'F12' || e.keyCode === 123) {
        e.preventDefault();
    }
});

</script>

    
</body>
>>>>>>> 240664b (grameengroupwebsite)
</html>