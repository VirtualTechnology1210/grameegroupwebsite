<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financials</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="./Financials.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Oswald|Anton|Roboto Slab|Rakkas|Signika">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
         <script src="https://kit.fontawesome.com/ee7a178a15.js" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Opan+Sans">
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
                        <h2 class="mb-4">Financials</h2>
                        <h5>HOME / Financials</h5>
                    </div>
                </div>
            </div>


            <div class="container my-5" id="growth-and-outreach">
              <div class="row">
                    <div class="col-12 text-center mt-2 section-header">
                         <h3 style="color: #26284e;">Growth and Outreach</h3>
                     </div>
                     <div class=" col-12" style="overflow-x: auto;">
                        <table>
                            <tr>
                              <th>Operational Highlights​​</th>
                              <th>FY 15-19 (4 YEARS)</th>
                              <th>2021</th>
                              <th>2022</th>
                                <th>2023</th>
                                <th>2024</th>
                            </tr>
                            <tr>
                              <td>No. of States​​</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              
                              
                            </tr>
                            <tr>
                              <td>No. of District</td>
                              <td>1</td>
                              <td>1</td>
                              <td>4</td>
                              <td>5</td>
                              <td>5</td>
                             
                            </tr>
                            <tr>
                              <td>No. of Villages</td>
                              <td>20</td>
                              <td>35</td>
                              <td>180</td>
                              <td>238</td>
                              <td>270</td>
                              
                            </tr>
                            <tr>
                              <td>No. of Groups</td>
                              <td>30</td>
                              <td>52.5</td>
                              <td>447</td>
                              <td>515</td>
                              <td>570</td>
                              
                          </tr>
                          <tr>
                            <td>No. of Branches​​</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>10</td>
                            <td>10</td>
                            
                        </tr>
                        <tr>
                            <td>No. of active borrowers​​</td>
                            <td>570</td>
                            <td>32</td>
                            <td>5,653</td>
                            <td>9,791</td>
                            <td>14,051</td>
                            
                        </tr>
                        <tr>
                            <td>No. of Total staff​​</td>
                            <td>2</td>
                            <td>2</td>
                            <td>5</td>
                            <td>43</td>
                            <td>47</td>
                            
                        </tr>
                        <tr>
                            <td>No. of Branch Managers</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>10</td>
                            <td>10</td>
                            
                        </tr>
                        <tr>
                            <td>No. of female employees​​</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>5</td>
                            <td>6</td>
                            
                        </tr>
                        <tr>
                            <td>No. of credit officers ​​​​</td>
                            <td>1</td>
                            <td>1</td>
                            <td>4</td>
                            <td>33</td>
                            <td>37</td>
                        </tr>
                        <tr>
                            <td>Loans disbursed during the year (₹ in Crs)​​​​</td>
                            <td></td>
                            <td>0.12</td>
                            <td>13</td>
                            <td>29</td>
                            <td>12</td>
                            
                        </tr>
                        <!--<tr>-->
                        <!--    <td>Assigned / Securitised Portfolio​​​​</td>-->
                        <!--    <td></td>-->
                        <!--    <td></td>-->
                        <!--    <td></td>-->
                        <!--    <td></td>-->
                            
                        <!--</tr>-->
                        <tr>
                            <td>BC portfolio​​​​</td>
                            <td></td>
                            <td>0</td>
                            <td>9</td>
                            <td>9</td>
                            <td>7</td>
                            
                        </tr>
                        <tr>
                            <td>On-book portfolio​​​​</td>
                            <td></td>
                            <td>0.12</td>
                            <td>0.04</td>
                            <td>1.1</td>
                            <td>1.3</td>
                        </tr>
                        <tr>
                            <td>Total portfolio​​​​</td>
                            <td></td>
                            <td>0.1</td>
                            <td>9.54</td>
                            <td>10.04</td>
                            <td>8.3</td>
                            
                        </tr>
                        <tr>
                            <td>Gross NPA </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>0.03</td>
                            <td>0.04</td>
                            
                        </tr>
                          </table>
                          
                    </div>
              </div>

            </div>

            

            <div class="container my-5" id="Financial-Performance">
                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                  <div class="col-12 text-center mb-5 mt-3 section-header">
                        <h3 style="color: #26284e;">Financial Performance</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h4 >Asset Quality</h4>
                        <p style="text-align: justify;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gross NPA @ 90+dpd is 0.38% as on March 31, 2023, and made an appropriate
                            provision for the same. There has been an amount outstanding in the business
                            correspondent portfolio for which regular recovery efforts are being made .</p>
                            <h4 >Funding profile</h4>
                            <p style="text-align: justify;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G TRUST has availed Term loans from financial institutions amounting to ₹ 2.05
                                Crs. and outstanding as on March 31,2023 is ₹ 1.87 Crs. The feedback from lender
                                and business correspondent partners was found to be satisfactory.</p>
                                <h4 >Earning Profile</h4>
                                <p style="text-align: justify;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G TRUST has registered PAT of ₹ 0.07 Crs. during FY23 as compared to ₹ -0.21 Crs. in FY 22</p>
                                <h4 >Liquidity Profile</h4>
                                <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The liquidity position of G TRUST is adequate to manage the present liabilities of the Trust.</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="smartphone">
                            <div class="content">
                             <img src="./assets/social-impact2.jpeg" alt="" style="width:100%;border:none;height:100%">
                            </div>
                          </div>
                    </div>

                </div>

            </div>


            <div class="container my-5" id="Physical-and-Financial-Projection">
                <div class="row">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Physical and Financial Projection</h3>
                    </div>
                    <div class=" col-12" style="overflow-x: auto;">
                        <table>
                            <tr>
                              <th>Particulars</th>
                              <th>Year 2025</th>
                              <th>Year 2026</th>
                              <th>Year 2027</th>
                                <th>Year 2028</th>
                                <th>Year 2029</th>
                            </tr>
                            <tr>
                              <td>Branches</td>
                              <td>20</td>
                              <td>20</td>
                              <td>30</td>
                              <td>40</td>
                              <td>50</td>
                            </tr>
                            <tr>
                              <td>Borrowers</td>
                              <td>47,700</td>
                              <td>63,450</td>
                              <td>61,650</td>
                              <td>139,050</td>
                              <td>188,550</td>
                            </tr>
                            <tr>
                              <td>Loan Disbursement</td>
                              <td>168</td>
                              <td>236</td>
                              <td>355</td>
                              <td>511</td>
                              <td>700</td>
                            </tr>
                            <tr>
                              <td>Loan Outstanding</td>
                              <td>94</td>
                              <td>128</td>
                              <td>187</td>
                              <td>266</td>
                              <td>360</td>
                          </tr>
                          <tr>
                            <td>Funding Requirement from
                                Banks/Financial Institutions</td>
                            <td>36</td>
                            <td>27</td>
                            <td>51</td>
                            <td>70</td>
                            <td>78</td>
                        </tr>
                        <tr>
                            <td>AUM Per Branch</td>
                            <td>5</td>
                            <td>6</td>
                            <td>6</td>
                            <td>7</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>Avg Loan Size per Borrower</td>
                            <td>19,738</td>
                            <td>20,158</td>
                            <td>30,381</td>
                            <td>19,101</td>
                            <td>19,098</td>
                        </tr>
                        <tr>
                            <td>Operational Self Sufficiency</td>
                            <td>109%</td>
                            <td>119%</td>
                            <td>114%</td>
                            <td>114%</td>
                            <td>114%</td>
                        </tr>
                          </table>
                    </div>

                </div>

            </div>


            <div class="container my-5" id="grap1">
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="display: flex;justify-content: left;align-items: center;">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                        <script>
                            var xValues = ["Year 2025", "Year 2026", "Year 2027", "Year 2028", "Year 2029"];
                            var yValues = [47700, 63450, 61650, 139050, 188550];
                            var barColors = ["red", "green","blue","orange","brown"];
                            
                            new Chart("myChart", {
                              type: "bar",
                              data: {
                                labels: xValues,
                                datasets: [{
                                  backgroundColor: barColors,
                                  data: yValues
                                }]
                              },
                              options: {
                                legend: {display: false},
                                title: {
                                  display: true,
                                  text: "Borrowers"
                                }
                              }
                            });
                            </script>
                    </div>
              </div>
            </div>


            <div class="container my-5" id="grap2">
                <div class="row">
                    <div class="col-12" style="display: flex;justify-content: right;align-items: center;">
                        <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

                        <script>
                            var xValues = ["Year 2025", "Year 2026", "Year 2027", "Year 2028", "Year 2029"];
                            var yValues = [168, 236, 355, 511, 700];
                            var barColors = [ "orange","brown","red","green","blue"];
                            
                            new Chart("myChart2", {
                              type: "bar",
                              data: {
                                labels: xValues,
                                datasets: [{
                                  backgroundColor: barColors,
                                  data: yValues
                                }]
                              },
                              options: {
                                legend: {display: false},
                                title: {
                                  display: true,
                                  text: "Loan Disbursement"
                                }
                              }
                            });
                            </script>
                    </div>
                </div>
            </div>


            <div class="container my-5" id="grap3">
                <div class="row">
                    <div class="col-12" style="display: flex;justify-content: left;align-items: center;">
                        <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>

                        <script>
                            var xValues = ["0","Year 2025", "Year 2026", "Year 2027", "Year 2028", "Year 2029"];
                            var yValues = [0,94, 128, 187, 266, 360];
                            var barColors = ["red", "green","blue","orange","brown"];
                            
                            new Chart("myChart3", {
                              type: "line",
                              data: {
                                labels: xValues,
                                datasets: [{
                                //   backgroundCo   lor: black,
                                  data: yValues
                                }]
                              },
                              options: {
                                legend: {display: false},
                                title: {
                                  display: true,
                                  text: "Loan Outstanding"
                                }
                              }
                            });
                            </script>
                    </div>

                </div>

            </div>


            <div class="container" id="grap4">
                <div class="row">
                    <div class="col-12" style="display: flex;justify-content: right;align-items: center;">
                        <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>
                            
                        <script>
                            var xValues = ["Year 2025", "Year 2026", "Year 2027", "Year 2028", "Year 2029"];
                            var yValues = [36, 27, 51, 70, 78];
                            var barColors = "red";
                            
                            new Chart("myChart4", {
                              type: "bar",
                              data: {
                                labels: xValues,
                                datasets: [{
                                  backgroundColor: barColors,
                                  data: yValues
                                }]
                              },
                              options: {
                                title: {
                            display: true,
                            text: 'Funding Requirement from Banks/Financial Institutions' // Add your chart title here
                        },
                                legend: {display: false},
                                scales: {
                                  yAxes: [{
                                    ticks: {
                                      beginAtZero: true
                                    }
                                  }],
                                }
                              }
                            });
                            </script>

                    </div>

                </div>

            </div>


            <div class="container my-5" id="Internal-Audit">
                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Internal Audit</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G Trust has three-member team, One team head and two staff members. Each branch is audited
                            for three days. So, within a week two branches are getting audited. Presently G Trust has 10 branches
                            and hence every audit cycle for each branch is done within a month. Tele calling is also executed by
                            audit team.</li></p>
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbspThe Trust has a team of internal auditors who undertake compulsory branch and borrower
                            audits on monthly basis. These audits are surprise audits.</p>
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbspThe Audit team also analysis the proposed branch area on the basis of survey report and
                            prepare their report and submits the same to Head of Operations and President of the Trust.
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbspThe audit report is presented to the Chairperson and the Board. The report and its findings are
                            discussed in the Board Meeting as well as in the Audit Team Meetings. The management takes
                            responsibility to ensure that relevant actions are taken on the Audit findings. Audit reports are also
                            shared with the respective Branches, so that they are aware of their shortcomings and improve them
                            accordingly. Branches are required to maintain an Audit Report Compliance file containing Audit report
                            and the reply given by branch on audit issues highlighted in the report.</p>
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The auditors in their subsequent visits to the Branch ensure that the findings are addressed
                                respectively, if the shortcomings are highlighted, the Branch has to give the required explanation. They
                                also ensure regular checks on client awareness and understanding of the key terms and conditions of
                                the products/ services offered / availed.</p>

                    </div>
                    <div class="col-lg-6 col-md-12  internal-audit-main">
                        <div>
                        <img class="internal-audit" src="./assets/internal audit2.jpg" alt="" style="width: 80%;margin-left: 10px;margin-bottom: 10px;">
                    </div>
                    <div style="display: flex;justify-content: end;align-items: end;">
                        <img class="internal-audit2" src="./assets/internal audit.avif.jpeg" alt="" style="width: 80%;">
                    </div>
                    </div>
                </div>

            </div>

            
            <!--            <section class="parallax" id="MIS-IT-systems">-->
            <!--    <div class="svg">-->
            <!--      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fffff0" fill-opacity="1" d="M0,224L40,229.3C80,235,160,245,240,208C320,171,400,85,480,69.3C560,53,640,107,720,144C800,181,880,203,960,181.3C1040,160,1120,96,1200,69.3C1280,43,1360,53,1400,58.7L1440,64L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>-->
            <!--    </div>-->
            <!--    <div class="container-fluid p-3 parallax-inner">-->
            <!--        <br>-->
            <!--        <div class="row parallax-content" style="display: flex;justify-content: center;align-items: center;">-->
            <!--            <div class="col-12 text-center my-5 section-header1">-->
            <!--                <h3 style="color: #fffff0;">MIS & IT systems</h3>-->
            <!--            </div>-->
            <!--             <div class="col-lg-6 col-md-12 px-4 mis-img"> -->


                        













            <!--                 <div>-->
            <!--                    <img src="./assets/mis.jpeg" alt="" style="width: 100%;">-->
            <!--                </div> -->
                            <!-- <div style="display: flex;justify-content: right;align-items: right;">
            <!--                    <img src="./assets/management inpormation2.avif" alt="" style="width: 80%;">-->
            <!--                </div> -->
                            
            <!--             </div> -->
            <!--            <div class="col-lg-6 col-md-12 p-3" style="background-color: rgba(255, 248, 248, 0.2);padding: 20px;">-->
            <!--                <p>G TRUST staff members are responsible for maintaining the Management Information System (MIS) to-->
            <!--                    ensure the Trust has access to accurate information for decision-making.</p>-->
            <!--                    <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspG TRUST has dedicated MIS and IT team at Head Office headed by respective heads to ensure-->
            <!--                        smooth flow of operational data between Head Office and branches. The departments act as the source-->
            <!--                        of information for the senior management and handle all transactions with Funders.</li></p>-->
            <!--                        <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspG Trust have MIS software outsourced from M/s. Eswar system based out of Madurai. This-->
            <!--                        software is cloud-based software with SQL as backend and MS office as front end. Complete recovery,-->
            <!--                        collection details, by member wise, center wise, branch wise, staff wise is available in the system. For-->
            <!--                        any date to date and for any period reports are available.</li></p>-->
            <!--                        <p> <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspAs on date G TRUST is having branches at different locations, all the branches are equipped with-->
            <!--                        Uninterrupted Broad Band facility, each Branch Manager has exclusive username and password for-->
            <!--                        login. All the branches are connected to the HO through the network ensuring access to real time data.-->
            <!--                        The software provides all levels of management access to the central server, thereby improving-->
            <!--                        supervision, control and decision making.</li></p>-->
            <!--                        <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspAll types of reports including demand collection reports at branch level can be generated within-->
            <!--                        a short span of time. The software is also used for financial consolidation and reporting.</li></p>-->
            <!--                        <li>The Trust has a backup cloud-based server to ensure efficient functioning, maintenance, and-->
            <!--                            disaster management.</li>-->
            <!--            </div>-->
            <!--      </div>-->
            <!--        <br>-->
            <!--    </div>-->
            <!--</section>-->



                        <div class="container my-5" id="Rating-report">
                          <div class="row">
                          <div class="col-12 my-5 section-header">
                            <h3 style="color: #26284e;">Rating Report</h3>
                         </div>
                            <div class="col-12 text-center ">
                                
                                <li style="list-style-type:none;text-align:left;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;B2K Analytics has assigned B2K ‘MF4’ (Pronounced as B2K MF ‘FOUR’) grading to Grameen Microfinance Trust (“G TRUST ” or the ‘Trust ”).</li><br>
                                <li style="list-style-type:none;text-align:left;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;The grading assigned factors the experience of the Board members and Management in the social development activities in the rural areas and microfinance industry, minimal NPAs, defined operational procedures, adequate capital adequacy levels and proper MIS &amp; IT systems .</li><br>
                            <p style="display: flex; justify-content: center;align-items: end;"><img src="./assets/pdf.png" alt=""> &nbsp;&nbsp;G-Trust Grading Report &nbsp;&nbsp;<a href="./assets/doc/GT MFI Grading Report pos.pdf" download="Grameen Group report" style=" text-decoration: underline;font-weight: bold;"> Download the pdf</a></p>
                            </div>

                          </div>

                        </div>


                        <div class="container my-5" id="Audited-statements">
                          <div class="row">
                          <div class="col-12 text-center my-5 section-header">
                            <h3 style="color: #26284e;">Audited Statements</h3>
                         </div>
                            <div class="col-12 text-center ">
                            <p class="mb-3" style="display: flex; justify-content: center;align-items: end;"><img src="./assets/pdf.png" alt=""> &nbsp;&nbsp;G-Trust Audited Statements 2021 - 22 &nbsp;&nbsp;<a href="./assets/doc/G Trust AUDIT ST-21-22 pos.pdf" download="Grameen Group audit st-21-22" style=" text-decoration: underline;font-weight: bold;"> Download the pdf</a></p>
                            <p style="display: flex; justify-content: center;align-items: end;"><img src="./assets/pdf.png" alt=""> &nbsp;&nbsp;G-Trust Audited Statements 2022 - 23 &nbsp;&nbsp;<a href="./assets/doc/G Trust AUDIT ST-22-23 pos.pdf" download="Grameen Group audit st-22-23" style=" text-decoration: underline;font-weight: bold;"> Download the pdf</a></p>
                            </div>

                          </div>

                        </div>
 



                        <section id="six">

                <div class="row .footer" style="color: white;">
                  <div class="col-12 col-lg-4 col-md-6 col-sm-12 "
                    style="display: flex; flex-direction: column;align-items: center;margin-top: 20px;">
                    <!-- <img src="./assets/GRAMEEN LOGO.png" alt="" width="80%"> -->
          
                    <h3> Contact Us</h3>
                    <h7 style="color: white;"><i class="fa-solid fa-envelope"></i> Email</h7>
                    <p class="py-1 m-0">contact@grameengroup.in</p>
                    <h7><i class="fa-solid fa-phone-volume mt-3 mb-3"></i> Call us</h7>
                    <!-- <p>9944662269</p>
                    <p>9944662287</p>
                    <p>8667431343</p> -->
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
                      <!-- <a href="http://103.48.182.237/cloudradius/customer/login">CRM Login</a>
                      <a href="https://play.google.com/store/apps/details?id=com.cloudradius.admin&pcampaignid=web_share">Mobile
                        App</a> -->
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
                      <!-- <a href="http://103.48.182.237/cloudradius/customer/login">CRM Login</a>
                      <a href="https://play.google.com/store/apps/details?id=com.cloudradius.admin&pcampaignid=web_share">Mobile
                        App</a> -->
                        
                      <a href="Financials.php">Financials</a>
                      <a href="itsystem.php">IT Systems</a>
                      <a href="asirwadtrust.php">Asirwad Trust</a>
                      <a href="galary.php">Gallery</a>
                      <a href="Contactus.php">Contact Us</a>
                    </div>
          
                  </div>
                  <!-- <div class="col-12 col-lg-3 col-md-6 col-sm-6 "
                    style="display: flex; flex-direction: column;  align-items: center;margin-top: 20px;">
                    <div style="display: grid;">
                      <h3>Another Links</h3>
                      <a href="#">Asirwad Trust</a>
                      <a href="#">Vision, Mission and Goals</a>
                      <a href="#">Board Of Directors</a>
                      <a href="#">Funding Agencies&its programs</a>
                      <a href="Contactus.html">Contact Us</a>
                    </div>
          
                  </div> -->
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
    <title>Financials</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="./Financials.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Oswald|Anton|Roboto Slab|Rakkas|Signika">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
         <script src="https://kit.fontawesome.com/ee7a178a15.js" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Opan+Sans">
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
                        <h2 class="mb-4">Financials</h2>
                        <h5>HOME / Financials</h5>
                    </div>
                </div>
            </div>


            <div class="container my-5" id="growth-and-outreach">
              <div class="row">
                    <div class="col-12 text-center mt-2 section-header">
                         <h3 style="color: #26284e;">Growth and Outreach</h3>
                     </div>
                     <div class=" col-12" style="overflow-x: auto;">
                        <table>
                            <tr>
                              <th>Operational Highlights​​</th>
                              <th>FY 15-19 (4 YEARS)</th>
                              <th>2021</th>
                              <th>2022</th>
                                <th>2023</th>
                                <th>2024</th>
                            </tr>
                            <tr>
                              <td>No. of States​​</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              
                              
                            </tr>
                            <tr>
                              <td>No. of District</td>
                              <td>1</td>
                              <td>1</td>
                              <td>4</td>
                              <td>5</td>
                              <td>5</td>
                             
                            </tr>
                            <tr>
                              <td>No. of Villages</td>
                              <td>20</td>
                              <td>35</td>
                              <td>180</td>
                              <td>238</td>
                              <td>270</td>
                              
                            </tr>
                            <tr>
                              <td>No. of Groups</td>
                              <td>30</td>
                              <td>52.5</td>
                              <td>447</td>
                              <td>515</td>
                              <td>570</td>
                              
                          </tr>
                          <tr>
                            <td>No. of Branches​​</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>10</td>
                            <td>10</td>
                            
                        </tr>
                        <tr>
                            <td>No. of active borrowers​​</td>
                            <td>570</td>
                            <td>32</td>
                            <td>5,653</td>
                            <td>9,791</td>
                            <td>14,051</td>
                            
                        </tr>
                        <tr>
                            <td>No. of Total staff​​</td>
                            <td>2</td>
                            <td>2</td>
                            <td>5</td>
                            <td>43</td>
                            <td>47</td>
                            
                        </tr>
                        <tr>
                            <td>No. of Branch Managers</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>10</td>
                            <td>10</td>
                            
                        </tr>
                        <tr>
                            <td>No. of female employees​​</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>5</td>
                            <td>6</td>
                            
                        </tr>
                        <tr>
                            <td>No. of credit officers ​​​​</td>
                            <td>1</td>
                            <td>1</td>
                            <td>4</td>
                            <td>33</td>
                            <td>37</td>
                        </tr>
                        <tr>
                            <td>Loans disbursed during the year (₹ in Crs)​​​​</td>
                            <td></td>
                            <td>0.12</td>
                            <td>13</td>
                            <td>29</td>
                            <td>12</td>
                            
                        </tr>
                        <!--<tr>-->
                        <!--    <td>Assigned / Securitised Portfolio​​​​</td>-->
                        <!--    <td></td>-->
                        <!--    <td></td>-->
                        <!--    <td></td>-->
                        <!--    <td></td>-->
                            
                        <!--</tr>-->
                        <tr>
                            <td>BC portfolio​​​​</td>
                            <td></td>
                            <td>0</td>
                            <td>9</td>
                            <td>9</td>
                            <td>7</td>
                            
                        </tr>
                        <tr>
                            <td>On-book portfolio​​​​</td>
                            <td></td>
                            <td>0.12</td>
                            <td>0.04</td>
                            <td>1.1</td>
                            <td>1.3</td>
                        </tr>
                        <tr>
                            <td>Total portfolio​​​​</td>
                            <td></td>
                            <td>0.1</td>
                            <td>9.54</td>
                            <td>10.04</td>
                            <td>8.3</td>
                            
                        </tr>
                        <tr>
                            <td>Gross NPA </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>0.03</td>
                            <td>0.04</td>
                            
                        </tr>
                          </table>
                          
                    </div>
              </div>

            </div>

            

            <div class="container my-5" id="Financial-Performance">
                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                  <div class="col-12 text-center mb-5 mt-3 section-header">
                        <h3 style="color: #26284e;">Financial Performance</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h4 >Asset Quality</h4>
                        <p style="text-align: justify;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gross NPA @ 90+dpd is 0.38% as on March 31, 2023, and made an appropriate
                            provision for the same. There has been an amount outstanding in the business
                            correspondent portfolio for which regular recovery efforts are being made .</p>
                            <h4 >Funding profile</h4>
                            <p style="text-align: justify;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G TRUST has availed Term loans from financial institutions amounting to ₹ 2.05
                                Crs. and outstanding as on March 31,2023 is ₹ 1.87 Crs. The feedback from lender
                                and business correspondent partners was found to be satisfactory.</p>
                                <h4 >Earning Profile</h4>
                                <p style="text-align: justify;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G TRUST has registered PAT of ₹ 0.07 Crs. during FY23 as compared to ₹ -0.21 Crs. in FY 22</p>
                                <h4 >Liquidity Profile</h4>
                                <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The liquidity position of G TRUST is adequate to manage the present liabilities of the Trust.</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="smartphone">
                            <div class="content">
                             <img src="./assets/social-impact2.jpeg" alt="" style="width:100%;border:none;height:100%">
                            </div>
                          </div>
                    </div>

                </div>

            </div>


            <div class="container my-5" id="Physical-and-Financial-Projection">
                <div class="row">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Physical and Financial Projection</h3>
                    </div>
                    <div class=" col-12" style="overflow-x: auto;">
                        <table>
                            <tr>
                              <th>Particulars</th>
                              <th>Year 2025</th>
                              <th>Year 2026</th>
                              <th>Year 2027</th>
                                <th>Year 2028</th>
                                <th>Year 2029</th>
                            </tr>
                            <tr>
                              <td>Branches</td>
                              <td>20</td>
                              <td>20</td>
                              <td>30</td>
                              <td>40</td>
                              <td>50</td>
                            </tr>
                            <tr>
                              <td>Borrowers</td>
                              <td>47,700</td>
                              <td>63,450</td>
                              <td>61,650</td>
                              <td>139,050</td>
                              <td>188,550</td>
                            </tr>
                            <tr>
                              <td>Loan Disbursement</td>
                              <td>168</td>
                              <td>236</td>
                              <td>355</td>
                              <td>511</td>
                              <td>700</td>
                            </tr>
                            <tr>
                              <td>Loan Outstanding</td>
                              <td>94</td>
                              <td>128</td>
                              <td>187</td>
                              <td>266</td>
                              <td>360</td>
                          </tr>
                          <tr>
                            <td>Funding Requirement from
                                Banks/Financial Institutions</td>
                            <td>36</td>
                            <td>27</td>
                            <td>51</td>
                            <td>70</td>
                            <td>78</td>
                        </tr>
                        <tr>
                            <td>AUM Per Branch</td>
                            <td>5</td>
                            <td>6</td>
                            <td>6</td>
                            <td>7</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>Avg Loan Size per Borrower</td>
                            <td>19,738</td>
                            <td>20,158</td>
                            <td>30,381</td>
                            <td>19,101</td>
                            <td>19,098</td>
                        </tr>
                        <tr>
                            <td>Operational Self Sufficiency</td>
                            <td>109%</td>
                            <td>119%</td>
                            <td>114%</td>
                            <td>114%</td>
                            <td>114%</td>
                        </tr>
                          </table>
                    </div>

                </div>

            </div>


            <div class="container my-5" id="grap1">
                <div class="row">
                    <div class="col-lg-12 col-md-12" style="display: flex;justify-content: left;align-items: center;">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                        <script>
                            var xValues = ["Year 2025", "Year 2026", "Year 2027", "Year 2028", "Year 2029"];
                            var yValues = [47700, 63450, 61650, 139050, 188550];
                            var barColors = ["red", "green","blue","orange","brown"];
                            
                            new Chart("myChart", {
                              type: "bar",
                              data: {
                                labels: xValues,
                                datasets: [{
                                  backgroundColor: barColors,
                                  data: yValues
                                }]
                              },
                              options: {
                                legend: {display: false},
                                title: {
                                  display: true,
                                  text: "Borrowers"
                                }
                              }
                            });
                            </script>
                    </div>
              </div>
            </div>


            <div class="container my-5" id="grap2">
                <div class="row">
                    <div class="col-12" style="display: flex;justify-content: right;align-items: center;">
                        <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

                        <script>
                            var xValues = ["Year 2025", "Year 2026", "Year 2027", "Year 2028", "Year 2029"];
                            var yValues = [168, 236, 355, 511, 700];
                            var barColors = [ "orange","brown","red","green","blue"];
                            
                            new Chart("myChart2", {
                              type: "bar",
                              data: {
                                labels: xValues,
                                datasets: [{
                                  backgroundColor: barColors,
                                  data: yValues
                                }]
                              },
                              options: {
                                legend: {display: false},
                                title: {
                                  display: true,
                                  text: "Loan Disbursement"
                                }
                              }
                            });
                            </script>
                    </div>
                </div>
            </div>


            <div class="container my-5" id="grap3">
                <div class="row">
                    <div class="col-12" style="display: flex;justify-content: left;align-items: center;">
                        <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>

                        <script>
                            var xValues = ["0","Year 2025", "Year 2026", "Year 2027", "Year 2028", "Year 2029"];
                            var yValues = [0,94, 128, 187, 266, 360];
                            var barColors = ["red", "green","blue","orange","brown"];
                            
                            new Chart("myChart3", {
                              type: "line",
                              data: {
                                labels: xValues,
                                datasets: [{
                                //   backgroundCo   lor: black,
                                  data: yValues
                                }]
                              },
                              options: {
                                legend: {display: false},
                                title: {
                                  display: true,
                                  text: "Loan Outstanding"
                                }
                              }
                            });
                            </script>
                    </div>

                </div>

            </div>


            <div class="container" id="grap4">
                <div class="row">
                    <div class="col-12" style="display: flex;justify-content: right;align-items: center;">
                        <canvas id="myChart4" style="width:100%;max-width:600px"></canvas>
                            
                        <script>
                            var xValues = ["Year 2025", "Year 2026", "Year 2027", "Year 2028", "Year 2029"];
                            var yValues = [36, 27, 51, 70, 78];
                            var barColors = "red";
                            
                            new Chart("myChart4", {
                              type: "bar",
                              data: {
                                labels: xValues,
                                datasets: [{
                                  backgroundColor: barColors,
                                  data: yValues
                                }]
                              },
                              options: {
                                title: {
                            display: true,
                            text: 'Funding Requirement from Banks/Financial Institutions' // Add your chart title here
                        },
                                legend: {display: false},
                                scales: {
                                  yAxes: [{
                                    ticks: {
                                      beginAtZero: true
                                    }
                                  }],
                                }
                              }
                            });
                            </script>

                    </div>

                </div>

            </div>


            <div class="container my-5" id="Internal-Audit">
                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Internal Audit</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G Trust has three-member team, One team head and two staff members. Each branch is audited
                            for three days. So, within a week two branches are getting audited. Presently G Trust has 10 branches
                            and hence every audit cycle for each branch is done within a month. Tele calling is also executed by
                            audit team.</li></p>
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbspThe Trust has a team of internal auditors who undertake compulsory branch and borrower
                            audits on monthly basis. These audits are surprise audits.</p>
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbspThe Audit team also analysis the proposed branch area on the basis of survey report and
                            prepare their report and submits the same to Head of Operations and President of the Trust.
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbspThe audit report is presented to the Chairperson and the Board. The report and its findings are
                            discussed in the Board Meeting as well as in the Audit Team Meetings. The management takes
                            responsibility to ensure that relevant actions are taken on the Audit findings. Audit reports are also
                            shared with the respective Branches, so that they are aware of their shortcomings and improve them
                            accordingly. Branches are required to maintain an Audit Report Compliance file containing Audit report
                            and the reply given by branch on audit issues highlighted in the report.</p>
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The auditors in their subsequent visits to the Branch ensure that the findings are addressed
                                respectively, if the shortcomings are highlighted, the Branch has to give the required explanation. They
                                also ensure regular checks on client awareness and understanding of the key terms and conditions of
                                the products/ services offered / availed.</p>

                    </div>
                    <div class="col-lg-6 col-md-12  internal-audit-main">
                        <div>
                        <img class="internal-audit" src="./assets/internal audit2.jpg" alt="" style="width: 80%;margin-left: 10px;margin-bottom: 10px;">
                    </div>
                    <div style="display: flex;justify-content: end;align-items: end;">
                        <img class="internal-audit2" src="./assets/internal audit.avif.jpeg" alt="" style="width: 80%;">
                    </div>
                    </div>
                </div>

            </div>

            
            <!--            <section class="parallax" id="MIS-IT-systems">-->
            <!--    <div class="svg">-->
            <!--      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fffff0" fill-opacity="1" d="M0,224L40,229.3C80,235,160,245,240,208C320,171,400,85,480,69.3C560,53,640,107,720,144C800,181,880,203,960,181.3C1040,160,1120,96,1200,69.3C1280,43,1360,53,1400,58.7L1440,64L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>-->
            <!--    </div>-->
            <!--    <div class="container-fluid p-3 parallax-inner">-->
            <!--        <br>-->
            <!--        <div class="row parallax-content" style="display: flex;justify-content: center;align-items: center;">-->
            <!--            <div class="col-12 text-center my-5 section-header1">-->
            <!--                <h3 style="color: #fffff0;">MIS & IT systems</h3>-->
            <!--            </div>-->
            <!--             <div class="col-lg-6 col-md-12 px-4 mis-img"> -->


                        













            <!--                 <div>-->
            <!--                    <img src="./assets/mis.jpeg" alt="" style="width: 100%;">-->
            <!--                </div> -->
                            <!-- <div style="display: flex;justify-content: right;align-items: right;">
            <!--                    <img src="./assets/management inpormation2.avif" alt="" style="width: 80%;">-->
            <!--                </div> -->
                            
            <!--             </div> -->
            <!--            <div class="col-lg-6 col-md-12 p-3" style="background-color: rgba(255, 248, 248, 0.2);padding: 20px;">-->
            <!--                <p>G TRUST staff members are responsible for maintaining the Management Information System (MIS) to-->
            <!--                    ensure the Trust has access to accurate information for decision-making.</p>-->
            <!--                    <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspG TRUST has dedicated MIS and IT team at Head Office headed by respective heads to ensure-->
            <!--                        smooth flow of operational data between Head Office and branches. The departments act as the source-->
            <!--                        of information for the senior management and handle all transactions with Funders.</li></p>-->
            <!--                        <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspG Trust have MIS software outsourced from M/s. Eswar system based out of Madurai. This-->
            <!--                        software is cloud-based software with SQL as backend and MS office as front end. Complete recovery,-->
            <!--                        collection details, by member wise, center wise, branch wise, staff wise is available in the system. For-->
            <!--                        any date to date and for any period reports are available.</li></p>-->
            <!--                        <p> <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspAs on date G TRUST is having branches at different locations, all the branches are equipped with-->
            <!--                        Uninterrupted Broad Band facility, each Branch Manager has exclusive username and password for-->
            <!--                        login. All the branches are connected to the HO through the network ensuring access to real time data.-->
            <!--                        The software provides all levels of management access to the central server, thereby improving-->
            <!--                        supervision, control and decision making.</li></p>-->
            <!--                        <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspAll types of reports including demand collection reports at branch level can be generated within-->
            <!--                        a short span of time. The software is also used for financial consolidation and reporting.</li></p>-->
            <!--                        <li>The Trust has a backup cloud-based server to ensure efficient functioning, maintenance, and-->
            <!--                            disaster management.</li>-->
            <!--            </div>-->
            <!--      </div>-->
            <!--        <br>-->
            <!--    </div>-->
            <!--</section>-->



                        <div class="container my-5" id="Rating-report">
                          <div class="row">
                          <div class="col-12 my-5 section-header">
                            <h3 style="color: #26284e;">Rating Report</h3>
                         </div>
                            <div class="col-12 text-center ">
                                
                                <li style="list-style-type:none;text-align:left;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;B2K Analytics has assigned B2K ‘MF4’ (Pronounced as B2K MF ‘FOUR’) grading to Grameen Microfinance Trust (“G TRUST ” or the ‘Trust ”).</li><br>
                                <li style="list-style-type:none;text-align:left;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;The grading assigned factors the experience of the Board members and Management in the social development activities in the rural areas and microfinance industry, minimal NPAs, defined operational procedures, adequate capital adequacy levels and proper MIS &amp; IT systems .</li><br>
                            <p style="display: flex; justify-content: center;align-items: end;"><img src="./assets/pdf.png" alt=""> &nbsp;&nbsp;G-Trust Grading Report &nbsp;&nbsp;<a href="./assets/doc/GT MFI Grading Report pos.pdf" download="Grameen Group report" style=" text-decoration: underline;font-weight: bold;"> Download the pdf</a></p>
                            </div>

                          </div>

                        </div>


                        <div class="container my-5" id="Audited-statements">
                          <div class="row">
                          <div class="col-12 text-center my-5 section-header">
                            <h3 style="color: #26284e;">Audited Statements</h3>
                         </div>
                            <div class="col-12 text-center ">
                            <p class="mb-3" style="display: flex; justify-content: center;align-items: end;"><img src="./assets/pdf.png" alt=""> &nbsp;&nbsp;G-Trust Audited Statements 2021 - 22 &nbsp;&nbsp;<a href="./assets/doc/G Trust AUDIT ST-21-22 pos.pdf" download="Grameen Group audit st-21-22" style=" text-decoration: underline;font-weight: bold;"> Download the pdf</a></p>
                            <p style="display: flex; justify-content: center;align-items: end;"><img src="./assets/pdf.png" alt=""> &nbsp;&nbsp;G-Trust Audited Statements 2022 - 23 &nbsp;&nbsp;<a href="./assets/doc/G Trust AUDIT ST-22-23 pos.pdf" download="Grameen Group audit st-22-23" style=" text-decoration: underline;font-weight: bold;"> Download the pdf</a></p>
                            </div>

                          </div>

                        </div>
 



                        <section id="six">

                <div class="row .footer" style="color: white;">
                  <div class="col-12 col-lg-4 col-md-6 col-sm-12 "
                    style="display: flex; flex-direction: column;align-items: center;margin-top: 20px;">
                    <!-- <img src="./assets/GRAMEEN LOGO.png" alt="" width="80%"> -->
          
                    <h3> Contact Us</h3>
                    <h7 style="color: white;"><i class="fa-solid fa-envelope"></i> Email</h7>
                    <p class="py-1 m-0">contact@grameengroup.in</p>
                    <h7><i class="fa-solid fa-phone-volume mt-3 mb-3"></i> Call us</h7>
                    <!-- <p>9944662269</p>
                    <p>9944662287</p>
                    <p>8667431343</p> -->
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
                      <!-- <a href="http://103.48.182.237/cloudradius/customer/login">CRM Login</a>
                      <a href="https://play.google.com/store/apps/details?id=com.cloudradius.admin&pcampaignid=web_share">Mobile
                        App</a> -->
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
                      <!-- <a href="http://103.48.182.237/cloudradius/customer/login">CRM Login</a>
                      <a href="https://play.google.com/store/apps/details?id=com.cloudradius.admin&pcampaignid=web_share">Mobile
                        App</a> -->
                        
                      <a href="Financials.php">Financials</a>
                      <a href="itsystem.php">IT Systems</a>
                      <a href="asirwadtrust.php">Asirwad Trust</a>
                      <a href="galary.php">Gallery</a>
                      <a href="Contactus.php">Contact Us</a>
                    </div>
          
                  </div>
                  <!-- <div class="col-12 col-lg-3 col-md-6 col-sm-6 "
                    style="display: flex; flex-direction: column;  align-items: center;margin-top: 20px;">
                    <div style="display: grid;">
                      <h3>Another Links</h3>
                      <a href="#">Asirwad Trust</a>
                      <a href="#">Vision, Mission and Goals</a>
                      <a href="#">Board Of Directors</a>
                      <a href="#">Funding Agencies&its programs</a>
                      <a href="Contactus.html">Contact Us</a>
                    </div>
          
                  </div> -->
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
  document.addEventListener('keydown', function (e) {
    if (e.key === 'F12' || e.keyCode === 123) {
        e.preventDefault();
    }
});

</script>
    
</body>
>>>>>>> 240664b (grameengroupwebsite)
</html>