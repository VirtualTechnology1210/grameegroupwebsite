<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="./products.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Roboto Slab|Rakkas">
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
                        <h2 class="mb-4">PRODUCTS</h2>
                        <h5>HOME / PRODUCTS</h5>
                    </div>
                </div>
            </div>

             <div class="container my-5" id="Agriculture-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Agriculture Loans</h3>
                    </div>
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), is dedicated to fostering agricultural growth and sustainability in our community. We are seeking financial support to expand our operations, invest in modern equipment, and enhance our agricultural practices. This proposal outlines our vision for agricultural development and how the loan will contribute to achieving our goals.</p>
                    <li >Product : Agriculture Loan</li>
                    <li >Loan size : 10 - 30 K</li>
                    <li >Tenure : 1 Year</li>
                    <li >Interest Rate : 12% +1% LPF</li>
                    <li >Loan Type /Purpose : Income Generation purpose</li>
                   </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="p-3 agricultural">
                        <div  data-aos="fade-right"  data-aos-duration="1000" >
                            <img src="./assets/agriculture loan.jpg" alt="">
                          </div>
                            <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                        </div>
                    </div>
                </div>
             </div>
    

              <div class="container my-5" id="Microfinance-Loan">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Microfinance Loan</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="p-3 agricultural">
                            <div  data-aos="fade-right"  data-aos-duration="1000" >
                                <img src="./assets/microfinance.jpg" alt="">
                              </div>
                                <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                            </div>
                        </div>
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), is dedicated to empowering individuals and small businesses by providing access to financial services. Our mission is to alleviate poverty and promote economic development through microfinance initiatives. We are seeking funding to expand our microfinance loan portfolio and reach more underserved communities.</p>
                    <li >Product : Microfinance Loan</li>
                    <li >Loan size : 10 - 50 K</li>
                    <li >Tenure : 1 Year</li>
                    <li >Interest Rate : 12% +1% LPF</li>
                    <li >Loan Type /Purpose : Income Generation purpose</li>
                   </div>
                  </div>
                </div>
              </div>

              <div class="container my-5" id="Consumer-Durable-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Consumer Durable Loans</h3>
                    </div>
                    
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), Consumer durable loans are a type of financing specifically designed to help consumers purchase durable goods such as electronics, appliances, furniture, and other high-value items. These loans are offered by banks, financial institutions, and sometimes directly by retailers or manufacturers.</p>
                    <li >Product : Consumer Durable Loan</li>
                    <li >Loan size : 1 - 10 K</li>
                    <li >Tenure : 20 Weeks</li>
                    <li >Interest Rate : 12% +1% LPF</li>
                    <li >Loan Type /Purpose : Purchase of Household items</li>
                   </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="p-3 agricultural">
                        <div  data-aos="fade-right"  data-aos-duration="1000" >
                            <img src="./assets/Consumer Durable Loans.jpeg" alt="">
                          </div>
                            <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="container my-5" id="SME-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">SME Loans (Small and Medium-sized Enterprises.)</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="p-3 agricultural">
                            <div  data-aos="fade-right"  data-aos-duration="1000" >
                                <img src="./assets/sme loan.jpeg" alt="" style="height: 92%;">
                              </div>
                                <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                            </div>
                        </div>
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), SME stands for Small and Medium-sized Enterprises. These are businesses that maintain revenues, assets, or a number of employees below a certain threshold, which varies by country. SMEs are a critical component of most economies, contributing significantly to employment, innovation, and economic growth.</p>
                    <li >Product : SME-General</li>
                    <li >Loan size : 1 L - 2 L</li>
                    <li >Tenure : 2 Years , 3 Years</li>
                    <li >Interest Rate : 14% +2% LPF</li>
                    <li >Loan Type /Purpose : production, trading and service type
                        enterprises</li>
                   </div>
                  </div>
                </div>
              </div>

              <div class="container my-5" id="Emergency-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Emergency Loans</h3>
                    </div>
                    
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), Emergency loans are financial products designed to provide quick access to funds in times of urgent need. These loans are typically unsecured, meaning they do not require collateral, and are often characterized by a streamlined application and approval process to ensure borrowers receive the funds as soon as possible. Emergency loans can help individuals cover unexpected expenses, such as medical bills, car repairs, or home repairs, when they do not have enough savings or immediate access to other forms of financing.</p>
                    <li >Product : Emergency Loans</li>
                    <li >Loan size : 1 - 5 K</li>
                    <li>Tenure : 10 Weeks</li>
                    <li >Interest Rate : 12% +1% LPF</li>
                    <li >Loan Type /Purpose : For education, medical etc</li>
                   </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="p-3 agricultural">
                        <div  data-aos="fade-right"  data-aos-duration="1000" >
                            <img src="./assets/emergency loan.jpg" alt="">
                          </div>
                            <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="container my-5" id="Climate-ready-WASH-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Climate ready WASH Loans</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="p-3 agricultural">
                            <div  data-aos="fade-right"  data-aos-duration="1000" >
                                <img src="./assets/wash loan.jpg" alt="">
                              </div>
                                <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                            </div>
                        </div>
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), "Climate ready WASH loans" refers to financial products designed to support Water, Sanitation, and Hygiene (WASH) projects that are resilient to climate change impacts. These loans aim to provide funding for infrastructure and initiatives that improve access to clean water, sanitation facilities, and hygiene practices while also considering climate variability and future climate projections.</p>
                    <li >Product : WASH Loan</li>
                    <li >Loan size : 1 - 50 K</li>
                    <li >Tenure : 1 Year</li>
                    <li >Interest Rate : 14% +1% LPF</li>
                    <li >Loan Type /Purpose : For clean water, sanitation, rain
                        water harvesting, etc</li>
                   </div>
                  </div>
                </div>
              </div>

              <div class="container my-5" id="Solar-Energy-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Solar Energy Loans</h3>
                    </div>
                    
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), Solar energy loans are financial products specifically designed to help individuals, businesses, and organizations finance the installation of solar energy systems. These loans aim to make solar energy more accessible and affordable by providing funding for upfront installation costs, which can be significant but offer long-term savings through reduced energy bills and environmental benefits.</p>
                    <li >Product : Solar Energy Loans</li>
                    <li >Loan size : 1 - 50 K</li>
                    <li >Tenure : 1 Year</li>
                    <li >Interest Rate : 12% +1% LPF</li>
                    <li >Loan Type /Purpose : For roof top water heater, roof
                        top solar panel set up for home
                        electricity, etc</li>
                   </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="p-3 agricultural">
                        <div  data-aos="fade-right"  data-aos-duration="1000" >
                            <img src="./assets/solar loan.jpg" alt="">
                          </div>
                            <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                        </div>
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
    <title>products</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="./products.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Roboto Slab|Rakkas">
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
                        <h2 class="mb-4">PRODUCTS</h2>
                        <h5>HOME / PRODUCTS</h5>
                    </div>
                </div>
            </div>

             <div class="container my-5" id="Agriculture-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Agriculture Loans</h3>
                    </div>
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), is dedicated to fostering agricultural growth and sustainability in our community. We are seeking financial support to expand our operations, invest in modern equipment, and enhance our agricultural practices. This proposal outlines our vision for agricultural development and how the loan will contribute to achieving our goals.</p>
                    <li >Product : Agriculture Loan</li>
                    <li >Loan size : 10 - 30 K</li>
                    <li >Tenure : 1 Year</li>
                    <li >Interest Rate : 12% +1% LPF</li>
                    <li >Loan Type /Purpose : Income Generation purpose</li>
                   </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="p-3 agricultural">
                        <div  data-aos="fade-right"  data-aos-duration="1000" >
                            <img src="./assets/agriculture loan.jpg" alt="">
                          </div>
                            <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                        </div>
                    </div>
                </div>
             </div>
    

              <div class="container my-5" id="Microfinance-Loan">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Microfinance Loan</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="p-3 agricultural">
                            <div  data-aos="fade-right"  data-aos-duration="1000" >
                                <img src="./assets/microfinance.jpg" alt="">
                              </div>
                                <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                            </div>
                        </div>
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), is dedicated to empowering individuals and small businesses by providing access to financial services. Our mission is to alleviate poverty and promote economic development through microfinance initiatives. We are seeking funding to expand our microfinance loan portfolio and reach more underserved communities.</p>
                    <li >Product : Microfinance Loan</li>
                    <li >Loan size : 10 - 50 K</li>
                    <li >Tenure : 1 Year</li>
                    <li >Interest Rate : 12% +1% LPF</li>
                    <li >Loan Type /Purpose : Income Generation purpose</li>
                   </div>
                  </div>
                </div>
              </div>

              <div class="container my-5" id="Consumer-Durable-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Consumer Durable Loans</h3>
                    </div>
                    
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), Consumer durable loans are a type of financing specifically designed to help consumers purchase durable goods such as electronics, appliances, furniture, and other high-value items. These loans are offered by banks, financial institutions, and sometimes directly by retailers or manufacturers.</p>
                    <li >Product : Consumer Durable Loan</li>
                    <li >Loan size : 1 - 10 K</li>
                    <li >Tenure : 20 Weeks</li>
                    <li >Interest Rate : 12% +1% LPF</li>
                    <li >Loan Type /Purpose : Purchase of Household items</li>
                   </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="p-3 agricultural">
                        <div  data-aos="fade-right"  data-aos-duration="1000" >
                            <img src="./assets/Consumer Durable Loans.jpeg" alt="">
                          </div>
                            <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="container my-5" id="SME-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">SME Loans (Small and Medium-sized Enterprises.)</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="p-3 agricultural">
                            <div  data-aos="fade-right"  data-aos-duration="1000" >
                                <img src="./assets/sme loan.jpeg" alt="" style="height: 92%;">
                              </div>
                                <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                            </div>
                        </div>
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), SME stands for Small and Medium-sized Enterprises. These are businesses that maintain revenues, assets, or a number of employees below a certain threshold, which varies by country. SMEs are a critical component of most economies, contributing significantly to employment, innovation, and economic growth.</p>
                    <li >Product : SME-General</li>
                    <li >Loan size : 1 L - 2 L</li>
                    <li >Tenure : 2 Years , 3 Years</li>
                    <li >Interest Rate : 14% +2% LPF</li>
                    <li >Loan Type /Purpose : production, trading and service type
                        enterprises</li>
                   </div>
                  </div>
                </div>
              </div>

              <div class="container my-5" id="Emergency-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Emergency Loans</h3>
                    </div>
                    
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), Emergency loans are financial products designed to provide quick access to funds in times of urgent need. These loans are typically unsecured, meaning they do not require collateral, and are often characterized by a streamlined application and approval process to ensure borrowers receive the funds as soon as possible. Emergency loans can help individuals cover unexpected expenses, such as medical bills, car repairs, or home repairs, when they do not have enough savings or immediate access to other forms of financing.</p>
                    <li >Product : Emergency Loans</li>
                    <li >Loan size : 1 - 5 K</li>
                    <li>Tenure : 10 Weeks</li>
                    <li >Interest Rate : 12% +1% LPF</li>
                    <li >Loan Type /Purpose : For education, medical etc</li>
                   </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="p-3 agricultural">
                        <div  data-aos="fade-right"  data-aos-duration="1000" >
                            <img src="./assets/emergency loan.jpg" alt="">
                          </div>
                            <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="container my-5" id="Climate-ready-WASH-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Climate ready WASH Loans</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="p-3 agricultural">
                            <div  data-aos="fade-right"  data-aos-duration="1000" >
                                <img src="./assets/wash loan.jpg" alt="">
                              </div>
                                <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                            </div>
                        </div>
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), "Climate ready WASH loans" refers to financial products designed to support Water, Sanitation, and Hygiene (WASH) projects that are resilient to climate change impacts. These loans aim to provide funding for infrastructure and initiatives that improve access to clean water, sanitation facilities, and hygiene practices while also considering climate variability and future climate projections.</p>
                    <li >Product : WASH Loan</li>
                    <li >Loan size : 1 - 50 K</li>
                    <li >Tenure : 1 Year</li>
                    <li >Interest Rate : 14% +1% LPF</li>
                    <li >Loan Type /Purpose : For clean water, sanitation, rain
                        water harvesting, etc</li>
                   </div>
                  </div>
                </div>
              </div>

              <div class="container my-5" id="Solar-Energy-Loans">
                <div class="row">
                    <div class="col-lg-12 col-md-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Solar Energy Loans</h3>
                    </div>
                    
                  <div class="col-lg-6 col-md-12">
                   <div class="p-3">
                    <p > "GRAMEEN MICROFINANCE TRUST" (G TRUST), Solar energy loans are financial products specifically designed to help individuals, businesses, and organizations finance the installation of solar energy systems. These loans aim to make solar energy more accessible and affordable by providing funding for upfront installation costs, which can be significant but offer long-term savings through reduced energy bills and environmental benefits.</p>
                    <li >Product : Solar Energy Loans</li>
                    <li >Loan size : 1 - 50 K</li>
                    <li >Tenure : 1 Year</li>
                    <li >Interest Rate : 12% +1% LPF</li>
                    <li >Loan Type /Purpose : For roof top water heater, roof
                        top solar panel set up for home
                        electricity, etc</li>
                   </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="p-3 agricultural">
                        <div  data-aos="fade-right"  data-aos-duration="1000" >
                            <img src="./assets/solar loan.jpg" alt="">
                          </div>
                            <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500"></div>
                        </div>
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