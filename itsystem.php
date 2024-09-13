<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itsystem</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <!-- <link rel="stylesheet" href="./index.css"> -->
        <link rel="stylesheet" href="./itsystem.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Roboto Slab|Rakkas|Oswald">
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
         <script src="https://kit.fontawesome.com/ee7a178a15.js" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Opan+Sans">
         <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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



      <div class="container-fluid " >
                <div class="row contentmain">
                    <div class="col-12 contentcon">
                        <h2 class="mb-4">IT Systems</h2>
                        <h5>HOME / IT Systems</h5>
                    </div>
                </div>
            </div>




            <div class="container my-5" id="Internal-Audit">
                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Internal Control System</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G TRUST has a defined Internal Control System to monitor its operations. At the Branch level, a reporting structure has been created for effective monitoring of operations. Field Manager conducts the field verification and then reports to the Branch Manager (BM). From Branch Manager, the next level of screening is done by the Head Office. The Head Office Sanction Committee (HSC) is held at a centralized location to review loan applications with the attendance of concerned branch staff. At HSC, Credit Officer briefs on loan application with client details, borrowing details , available cash flows and applied loan amount. Branch manager verifies client cash flows, business activity, purpose of loan and makes a final decision on the amount and approves them. </li></p>
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Branch Manager is responsible for loan collection and delinquency management. The follow- up of all overdue loan accounts is done by Field Manager. A well-defined process is laid out for follow-up and collection of delinquent loans based on overdue bucket. Loan delinquency is tracked in HO on regular basis through their software. No undue influence and coercion are used to force the recovery. No late penalty charges are levied.</p>
                            <!-- <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbspThe Audit team also analysis the proposed branch area on the basis of survey report and
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
                                the products/ services offered / availed.</p> -->

                    </div>
                    <div class="col-lg-6 col-md-12  internal-audit-main">
                        <div style="display: flex;justify-content: center;">
                        <img class="internal-audit" src="./assets/1.png" alt="" style="width: 80%;margin-left: 10px;margin-bottom: 10px;">
                    </div>
                    <!-- <div style="display: flex;justify-content: end;align-items: end;">
                        <img class="internal-audit2" src="./assets/internal audit.avif.jpeg" alt="" style="width: 80%;">
                    </div> -->
                    </div>
                </div>

            </div>




            <div class="container my-5" id="Eswar-system">
                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Eswar system</h3>
                    </div>
                    <div class="col-lg-6 col-md-12  internal-audit-main">
                        <div style="display: flex;justify-content: center;">
                        <img class="internal-audit" src="./assets/eswar system logo.png" alt="" style="width: 80%;margin-left: 10px;margin-bottom: 10px;">
                    </div>
                    <!-- <div style="display: flex;justify-content: end;align-items: end;">
                        <img class="internal-audit2" src="./assets/internal audit.avif.jpeg" alt="" style="width: 80%;">
                    </div> -->
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G Trust have MIS software outsourced from M/s. Eswar system based out of Madurai. This software is cloud-based software with SQL as backend and MS office as front end. Complete recovery, collection details, by member wise, center wise, branch wise, staff wise is available in the system. For any date to date and for any period reports are available.</li></p>
                            <!-- <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Branch Manager is responsible for loan collection and delinquency management. The follow- up of all overdue loan accounts is done by Field Manager. A well-defined process is laid out for follow-up and collection of delinquent loans based on overdue bucket. Loan delinquency is tracked in HO on regular basis through their software. No undue influence and coercion are used to force the recovery. No late penalty charges are levied.</p> -->
                            <!-- <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbspThe Audit team also analysis the proposed branch area on the basis of survey report and
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
                                the products/ services offered / availed.</p> -->

                    </div>
                    
                </div>

            </div>



            <div class="container my-5" id="Viva">
                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Viva</h3>
                    </div>
                    
                    <div class="col-lg-6 col-md-12">
                        <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Innov Finlab Private Limited has embarked on a strategic initiative to revolutionise the micro-lending space through its cutting-edge technology platform.  The platform's architecture is composed of three integral modules, each serving a distinct purpose yet harmoniously integrated:</li></p>
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Onboarding Module: Viva’s Customer Onboarding App serves as the gateway for individuals seeking credit from Viva. Key Features of the Onboarding App are KYC Validation,  Credit Bureau Integration, e-Agreement Execution.</p>
                           <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Digital Collections Module: Viva’s payment application leverages on the digital payment solutions available, and is tailored for borrowers who don’t carry smartphones. Borrowers can make loan repayments via third-party UPI channels through the Smart Phones of another family member, a neighbourhood shop or e-banking Kiosk.</p>
                              <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbspMerchant Module: The Merchant mobile application empowers Viva’s retailers/merchants to enable end-use specific loan disbursements such as school fee loans, agri-equipment loans and consumer durable loans etc to their customers in a seamless fashion.</p>
                            <!--<p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The auditors in their subsequent visits to the Branch ensure that the findings are addressed
                                respectively, if the shortcomings are highlighted, the Branch has to give the required explanation. They
                                also ensure regular checks on client awareness and understanding of the key terms and conditions of
                                the products/ services offered / availed.</p> -->

                    </div>
                    <div class="col-lg-6 col-md-12  internal-audit-main">
                        <div style="display: flex;justify-content: center;">
                        <img class="internal-audit" src="./assets/viva logo.jpeg" alt="" style="width: 80%;margin-left: 10px;margin-bottom: 10px;">
                    </div>
                    <!-- <div style="display: flex;justify-content: end;align-items: end;">
                        <img class="internal-audit2" src="./assets/internal audit.avif.jpeg" alt="" style="width: 80%;">
                    </div> -->
                    </div>
                    
                </div>

            </div>







            <section class="parallax" id="MIS-IT-systems">
                <div class="svg">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fffff0" fill-opacity="1" d="M0,224L40,229.3C80,235,160,245,240,208C320,171,400,85,480,69.3C560,53,640,107,720,144C800,181,880,203,960,181.3C1040,160,1120,96,1200,69.3C1280,43,1360,53,1400,58.7L1440,64L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
                </div>
                <div class="container-fluid p-3 parallax-inner">
                    <br>
                    <div class="row parallax-content" style="display: flex;justify-content: center;align-items: center;">
                        <div class="col-12 text-center my-5 section-header1">
                            <h3 style="color: #fffff0;">MIS & IT systems</h3>
                        </div>
                         <div class="col-lg-6 col-md-12 px-4 mis-img"> 


                             <div>
                                <img src="./assets/mis.jpeg" alt="" style="width: 100%;">
                            </div> 
                            <!-- <div style="display: flex;justify-content: right;align-items: right;">
                                <img src="./assets/management inpormation2.avif" alt="" style="width: 80%;">
                            </div> -->
                            
                         </div> 
                        <div class="col-lg-6 col-md-12 p-3" style="background-color: rgba(255, 248, 248, 0.2);padding: 20px;">
                            <p>G TRUST staff members are responsible for maintaining the Management Information System (MIS) to
                                ensure the Trust has access to accurate information for decision-making.</p>
                                <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspG TRUST has dedicated MIS and IT team at Head Office headed by respective heads to ensure
                                    smooth flow of operational data between Head Office and branches. The departments act as the source
                                    of information for the senior management and handle all transactions with Funders.</li></p>
                                    <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspG Trust have MIS software outsourced from M/s. Eswar system based out of Madurai. This
                                    software is cloud-based software with SQL as backend and MS office as front end. Complete recovery,
                                    collection details, by member wise, center wise, branch wise, staff wise is available in the system. For
                                    any date to date and for any period reports are available.</li></p>
                                    <p> <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspAs on date G TRUST is having branches at different locations, all the branches are equipped with
                                    Uninterrupted Broad Band facility, each Branch Manager has exclusive username and password for
                                    login. All the branches are connected to the HO through the network ensuring access to real time data.
                                    The software provides all levels of management access to the central server, thereby improving
                                    supervision, control and decision making.</li></p>
                                    <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspAll types of reports including demand collection reports at branch level can be generated within
                                    a short span of time. The software is also used for financial consolidation and reporting.</li></p>
                                    <li>The Trust has a backup cloud-based server to ensure efficient functioning, maintenance, and
                                        disaster management.</li>
                        </div>
                  </div>
                    <br>
                </div>
            </section>
























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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- Include jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Include CounterUp library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<!-- Include Waypoints library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
(function($){
var canvas = $('#bg').children('canvas'),
background = canvas[0],
foreground1 = canvas[1],
foreground2 = canvas[2],
config = {
circle: {
amount: 18,
layer: 3,
color: [157, 97, 207],
alpha: 0.3
},
line: {
amount: 12,
layer: 3,
color: [255, 255, 255],
alpha: 0.3
},
speed: 0.5,
angle: 20
};

if (background.getContext){
var bctx = background.getContext('2d'),
fctx1 = foreground1.getContext('2d'),
fctx2 = foreground2.getContext('2d'),
M = window.Math, // Cached Math
degree = config.angle/360*M.PI*2,
circles = [],
lines = [],
wWidth, wHeight, timer;

requestAnimationFrame = window.requestAnimationFrame || 
window.mozRequestAnimationFrame ||
window.webkitRequestAnimationFrame ||
window.msRequestAnimationFrame ||
window.oRequestAnimationFrame ||
function(callback, element) { setTimeout(callback, 1000 / 60); };

cancelAnimationFrame = window.cancelAnimationFrame ||
window.mozCancelAnimationFrame ||
window.webkitCancelAnimationFrame ||
window.msCancelAnimationFrame ||
window.oCancelAnimationFrame ||
clearTimeout;

var setCanvasHeight = function(){
wWidth = $(window).width();
wHeight = $(window).height(),

canvas.each(function(){
this.width = wWidth;
this.height = wHeight;
});
};

var drawCircle = function(x, y, radius, color, alpha){
var gradient = fctx1.createRadialGradient(x, y, radius, x, y, 0);
gradient.addColorStop(0, 'rgba('+color[0]+','+color[1]+','+color[2]+','+alpha+')');
gradient.addColorStop(1, 'rgba('+color[0]+','+color[1]+','+color[2]+','+(alpha-0.1)+')');

fctx1.beginPath();
fctx1.arc(x, y, radius, 0, M.PI*2, true);
fctx1.fillStyle = gradient;
fctx1.fill();
};

var drawLine = function(x, y, width, color, alpha){
var endX = x+M.sin(degree)*width,
endY = y-M.cos(degree)*width,
gradient = fctx2.createLinearGradient(x, y, endX, endY);
gradient.addColorStop(0, 'rgba('+color[0]+','+color[1]+','+color[2]+','+alpha+')');
gradient.addColorStop(1, 'rgba('+color[0]+','+color[1]+','+color[2]+','+(alpha-0.1)+')');

fctx2.beginPath();
fctx2.moveTo(x, y);
fctx2.lineTo(endX, endY);
fctx2.lineWidth = 3;
fctx2.lineCap = 'round';
fctx2.strokeStyle = gradient;
fctx2.stroke();
};

var drawBack = function(){
bctx.clearRect(0, 0, wWidth, wHeight);

var gradient = [];

gradient[0] = bctx.createRadialGradient(wWidth*0.3, wHeight*0.1, 0, wWidth*0.3, wHeight*0.1, wWidth*0.9);
gradient[0].addColorStop(0, 'rgb(0, 26, 77)');
gradient[0].addColorStop(1, 'transparent');

bctx.translate(wWidth, 0);
bctx.scale(-1,1);
bctx.beginPath();
bctx.fillStyle = gradient[0];
bctx.fillRect(0, 0, wWidth, wHeight);

gradient[1] = bctx.createRadialGradient(wWidth*0.1, wHeight*0.1, 0, wWidth*0.3, wHeight*0.1, wWidth);
gradient[1].addColorStop(0, 'rgb(0, 150, 240)');
gradient[1].addColorStop(0.8, 'transparent');

bctx.translate(wWidth, 0);
bctx.scale(-1,1);
bctx.beginPath();
bctx.fillStyle = gradient[1];
bctx.fillRect(0, 0, wWidth, wHeight);

gradient[2] = bctx.createRadialGradient(wWidth*0.1, wHeight*0.5, 0, wWidth*0.1, wHeight*0.5, wWidth*0.5);
gradient[2].addColorStop(0, 'rgb(40, 20, 105)');
gradient[2].addColorStop(1, 'transparent');

bctx.beginPath();
bctx.fillStyle = gradient[2];
bctx.fillRect(0, 0, wWidth, wHeight);
};

var animate = function(){
var sin = M.sin(degree),
cos = M.cos(degree);

if (config.circle.amount > 0 && config.circle.layer > 0){
fctx1.clearRect(0, 0, wWidth, wHeight);
for (var i=0, len = circles.length; i<len; i++){
    var item = circles[i],
        x = item.x,
        y = item.y,
        radius = item.radius,
        speed = item.speed;

    if (x > wWidth + radius){
        x = -radius;
    } else if (x < -radius){
        x = wWidth + radius
    } else {
        x += sin*speed;
    }

    if (y > wHeight + radius){
        y = -radius;
    } else if (y < -radius){
        y = wHeight + radius;
    } else {
        y -= cos*speed;
    }

    item.x = x;
    item.y = y;
    drawCircle(x, y, radius, item.color, item.alpha);
}
}

if (config.line.amount > 0 && config.line.layer > 0){
fctx2.clearRect(0, 0, wWidth, wHeight);
for (var j=0, len = lines.length; j<len; j++){
    var item = lines[j],
        x = item.x,
        y = item.y,
        width = item.width,
        speed = item.speed;

    if (x > wWidth + width * sin){
        x = -width * sin;
    } else if (x < -width * sin){
        x = wWidth + width * sin;
    } else {
        x += sin*speed;
    }

    if (y > wHeight + width * cos){
        y = -width * cos;
    } else if (y < -width * cos){
        y = wHeight + width * cos;
    } else {
        y -= cos*speed;
    }
    
    item.x = x;
    item.y = y;
    drawLine(x, y, width, item.color, item.alpha);
}
}

timer = requestAnimationFrame(animate);
};

var createItem = function(){
circles = [];
lines = [];

if (config.circle.amount > 0 && config.circle.layer > 0){
for (var i=0; i<config.circle.amount/config.circle.layer; i++){
    for (var j=0; j<config.circle.layer; j++){
        circles.push({
            x: M.random() * wWidth,
            y: M.random() * wHeight,
            radius: M.random()*(20+j*5)+(20+j*5),
            color: config.circle.color,
            alpha: M.random()*0.2+(config.circle.alpha-j*0.1),
            speed: config.speed*(1+j*0.5)
        });
    }
}
}

if (config.line.amount > 0 && config.line.layer > 0){
for (var m=0; m<config.line.amount/config.line.layer; m++){
    for (var n=0; n<config.line.layer; n++){
        lines.push({
            x: M.random() * wWidth,
            y: M.random() * wHeight,
            width: M.random()*(20+n*5)+(20+n*5),
            color: config.line.color,
            alpha: M.random()*0.2+(config.line.alpha-n*0.1),
            speed: config.speed*(1+n*0.5)
        });
    }
}
}

cancelAnimationFrame(timer);
timer = requestAnimationFrame(animate);
drawBack();
};

$(document).ready(function(){
setCanvasHeight();
createItem();
});
$(window).resize(function(){
setCanvasHeight();
createItem();
});
}
})(jQuery);
</script>


<script>
jQuery(document).ready(function($) {
$('.counter').each(function() {
var $this = $(this);
var num = parseFloat($this.data('num').toString().replace(/,/g, '')); // Retrieve the number from data-num attribute
$this.text('0'); // Set the initial text content to 0
$({ countNum: 0 }).animate({ countNum: num }, {
duration: 3500, // Adjust the duration as needed
easing: 'linear',
step: function() {
$this.text(commaSeparateNumber(Math.floor(this.countNum))); // Format the number with commas
},
complete: function() {
$this.text(commaSeparateNumber(this.countNum)); // Format the final number with commas
}
});
});

// Function to add commas to numbers
function commaSeparateNumber(val) {
while (/(\d+)(\d{3})/.test(val.toString())) {
val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
}
return val;
}
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
    <title>itsystem</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <!-- <link rel="stylesheet" href="./index.css"> -->
        <link rel="stylesheet" href="./itsystem.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Roboto Slab|Rakkas|Oswald">
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
         <script src="https://kit.fontawesome.com/ee7a178a15.js" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Opan+Sans">
         <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
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



      <div class="container-fluid " >
                <div class="row contentmain">
                    <div class="col-12 contentcon">
                        <h2 class="mb-4">IT Systems</h2>
                        <h5>HOME / IT Systems</h5>
                    </div>
                </div>
            </div>




            <div class="container my-5" id="Internal-Audit">
                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Internal Control System</h3>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G TRUST has a defined Internal Control System to monitor its operations. At the Branch level, a reporting structure has been created for effective monitoring of operations. Field Manager conducts the field verification and then reports to the Branch Manager (BM). From Branch Manager, the next level of screening is done by the Head Office. The Head Office Sanction Committee (HSC) is held at a centralized location to review loan applications with the attendance of concerned branch staff. At HSC, Credit Officer briefs on loan application with client details, borrowing details , available cash flows and applied loan amount. Branch manager verifies client cash flows, business activity, purpose of loan and makes a final decision on the amount and approves them. </li></p>
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Branch Manager is responsible for loan collection and delinquency management. The follow- up of all overdue loan accounts is done by Field Manager. A well-defined process is laid out for follow-up and collection of delinquent loans based on overdue bucket. Loan delinquency is tracked in HO on regular basis through their software. No undue influence and coercion are used to force the recovery. No late penalty charges are levied.</p>
                            <!-- <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbspThe Audit team also analysis the proposed branch area on the basis of survey report and
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
                                the products/ services offered / availed.</p> -->

                    </div>
                    <div class="col-lg-6 col-md-12  internal-audit-main">
                        <div style="display: flex;justify-content: center;">
                        <img class="internal-audit" src="./assets/1.png" alt="" style="width: 80%;margin-left: 10px;margin-bottom: 10px;">
                    </div>
                    <!-- <div style="display: flex;justify-content: end;align-items: end;">
                        <img class="internal-audit2" src="./assets/internal audit.avif.jpeg" alt="" style="width: 80%;">
                    </div> -->
                    </div>
                </div>

            </div>




            <div class="container my-5" id="Eswar-system">
                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Eswar system</h3>
                    </div>
                    <div class="col-lg-6 col-md-12  internal-audit-main">
                        <div style="display: flex;justify-content: center;">
                        <img class="internal-audit" src="./assets/eswar system logo.png" alt="" style="width: 80%;margin-left: 10px;margin-bottom: 10px;">
                    </div>
                    <!-- <div style="display: flex;justify-content: end;align-items: end;">
                        <img class="internal-audit2" src="./assets/internal audit.avif.jpeg" alt="" style="width: 80%;">
                    </div> -->
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;G Trust have MIS software outsourced from M/s. Eswar system based out of Madurai. This software is cloud-based software with SQL as backend and MS office as front end. Complete recovery, collection details, by member wise, center wise, branch wise, staff wise is available in the system. For any date to date and for any period reports are available.</li></p>
                            <!-- <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Branch Manager is responsible for loan collection and delinquency management. The follow- up of all overdue loan accounts is done by Field Manager. A well-defined process is laid out for follow-up and collection of delinquent loans based on overdue bucket. Loan delinquency is tracked in HO on regular basis through their software. No undue influence and coercion are used to force the recovery. No late penalty charges are levied.</p> -->
                            <!-- <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbspThe Audit team also analysis the proposed branch area on the basis of survey report and
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
                                the products/ services offered / availed.</p> -->

                    </div>
                    
                </div>

            </div>



            <div class="container my-5" id="Viva">
                <div class="row" style="display: flex;justify-content: center;align-items: center;">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Viva</h3>
                    </div>
                    
                    <div class="col-lg-6 col-md-12">
                        <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Innov Finlab Private Limited has embarked on a strategic initiative to revolutionise the micro-lending space through its cutting-edge technology platform.  The platform's architecture is composed of three integral modules, each serving a distinct purpose yet harmoniously integrated:</li></p>
                            <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Onboarding Module: Viva’s Customer Onboarding App serves as the gateway for individuals seeking credit from Viva. Key Features of the Onboarding App are KYC Validation,  Credit Bureau Integration, e-Agreement Execution.</p>
                           <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Digital Collections Module: Viva’s payment application leverages on the digital payment solutions available, and is tailored for borrowers who don’t carry smartphones. Borrowers can make loan repayments via third-party UPI channels through the Smart Phones of another family member, a neighbourhood shop or e-banking Kiosk.</p>
                              <p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbspMerchant Module: The Merchant mobile application empowers Viva’s retailers/merchants to enable end-use specific loan disbursements such as school fee loans, agri-equipment loans and consumer durable loans etc to their customers in a seamless fashion.</p>
                            <!--<p style="text-align: justify;"><i class="fa-solid fa-circle-check" style="font-size: 15px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The auditors in their subsequent visits to the Branch ensure that the findings are addressed
                                respectively, if the shortcomings are highlighted, the Branch has to give the required explanation. They
                                also ensure regular checks on client awareness and understanding of the key terms and conditions of
                                the products/ services offered / availed.</p> -->

                    </div>
                    <div class="col-lg-6 col-md-12  internal-audit-main">
                        <div style="display: flex;justify-content: center;">
                        <img class="internal-audit" src="./assets/viva logo.jpeg" alt="" style="width: 80%;margin-left: 10px;margin-bottom: 10px;">
                    </div>
                    <!-- <div style="display: flex;justify-content: end;align-items: end;">
                        <img class="internal-audit2" src="./assets/internal audit.avif.jpeg" alt="" style="width: 80%;">
                    </div> -->
                    </div>
                    
                </div>

            </div>







            <section class="parallax" id="MIS-IT-systems">
                <div class="svg">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fffff0" fill-opacity="1" d="M0,224L40,229.3C80,235,160,245,240,208C320,171,400,85,480,69.3C560,53,640,107,720,144C800,181,880,203,960,181.3C1040,160,1120,96,1200,69.3C1280,43,1360,53,1400,58.7L1440,64L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
                </div>
                <div class="container-fluid p-3 parallax-inner">
                    <br>
                    <div class="row parallax-content" style="display: flex;justify-content: center;align-items: center;">
                        <div class="col-12 text-center my-5 section-header1">
                            <h3 style="color: #fffff0;">MIS & IT systems</h3>
                        </div>
                         <div class="col-lg-6 col-md-12 px-4 mis-img"> 


                             <div>
                                <img src="./assets/mis.jpeg" alt="" style="width: 100%;">
                            </div> 
                            <!-- <div style="display: flex;justify-content: right;align-items: right;">
                                <img src="./assets/management inpormation2.avif" alt="" style="width: 80%;">
                            </div> -->
                            
                         </div> 
                        <div class="col-lg-6 col-md-12 p-3" style="background-color: rgba(255, 248, 248, 0.2);padding: 20px;">
                            <p>G TRUST staff members are responsible for maintaining the Management Information System (MIS) to
                                ensure the Trust has access to accurate information for decision-making.</p>
                                <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspG TRUST has dedicated MIS and IT team at Head Office headed by respective heads to ensure
                                    smooth flow of operational data between Head Office and branches. The departments act as the source
                                    of information for the senior management and handle all transactions with Funders.</li></p>
                                    <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspG Trust have MIS software outsourced from M/s. Eswar system based out of Madurai. This
                                    software is cloud-based software with SQL as backend and MS office as front end. Complete recovery,
                                    collection details, by member wise, center wise, branch wise, staff wise is available in the system. For
                                    any date to date and for any period reports are available.</li></p>
                                    <p> <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspAs on date G TRUST is having branches at different locations, all the branches are equipped with
                                    Uninterrupted Broad Band facility, each Branch Manager has exclusive username and password for
                                    login. All the branches are connected to the HO through the network ensuring access to real time data.
                                    The software provides all levels of management access to the central server, thereby improving
                                    supervision, control and decision making.</li></p>
                                    <p><li> &nbsp;&nbsp;&nbsp;&nbsp;&nbspAll types of reports including demand collection reports at branch level can be generated within
                                    a short span of time. The software is also used for financial consolidation and reporting.</li></p>
                                    <li>The Trust has a backup cloud-based server to ensure efficient functioning, maintenance, and
                                        disaster management.</li>
                        </div>
                  </div>
                    <br>
                </div>
            </section>
























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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<!-- Include jQuery library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Include CounterUp library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<!-- Include Waypoints library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
(function($){
var canvas = $('#bg').children('canvas'),
background = canvas[0],
foreground1 = canvas[1],
foreground2 = canvas[2],
config = {
circle: {
amount: 18,
layer: 3,
color: [157, 97, 207],
alpha: 0.3
},
line: {
amount: 12,
layer: 3,
color: [255, 255, 255],
alpha: 0.3
},
speed: 0.5,
angle: 20
};

if (background.getContext){
var bctx = background.getContext('2d'),
fctx1 = foreground1.getContext('2d'),
fctx2 = foreground2.getContext('2d'),
M = window.Math, // Cached Math
degree = config.angle/360*M.PI*2,
circles = [],
lines = [],
wWidth, wHeight, timer;

requestAnimationFrame = window.requestAnimationFrame || 
window.mozRequestAnimationFrame ||
window.webkitRequestAnimationFrame ||
window.msRequestAnimationFrame ||
window.oRequestAnimationFrame ||
function(callback, element) { setTimeout(callback, 1000 / 60); };

cancelAnimationFrame = window.cancelAnimationFrame ||
window.mozCancelAnimationFrame ||
window.webkitCancelAnimationFrame ||
window.msCancelAnimationFrame ||
window.oCancelAnimationFrame ||
clearTimeout;

var setCanvasHeight = function(){
wWidth = $(window).width();
wHeight = $(window).height(),

canvas.each(function(){
this.width = wWidth;
this.height = wHeight;
});
};

var drawCircle = function(x, y, radius, color, alpha){
var gradient = fctx1.createRadialGradient(x, y, radius, x, y, 0);
gradient.addColorStop(0, 'rgba('+color[0]+','+color[1]+','+color[2]+','+alpha+')');
gradient.addColorStop(1, 'rgba('+color[0]+','+color[1]+','+color[2]+','+(alpha-0.1)+')');

fctx1.beginPath();
fctx1.arc(x, y, radius, 0, M.PI*2, true);
fctx1.fillStyle = gradient;
fctx1.fill();
};

var drawLine = function(x, y, width, color, alpha){
var endX = x+M.sin(degree)*width,
endY = y-M.cos(degree)*width,
gradient = fctx2.createLinearGradient(x, y, endX, endY);
gradient.addColorStop(0, 'rgba('+color[0]+','+color[1]+','+color[2]+','+alpha+')');
gradient.addColorStop(1, 'rgba('+color[0]+','+color[1]+','+color[2]+','+(alpha-0.1)+')');

fctx2.beginPath();
fctx2.moveTo(x, y);
fctx2.lineTo(endX, endY);
fctx2.lineWidth = 3;
fctx2.lineCap = 'round';
fctx2.strokeStyle = gradient;
fctx2.stroke();
};

var drawBack = function(){
bctx.clearRect(0, 0, wWidth, wHeight);

var gradient = [];

gradient[0] = bctx.createRadialGradient(wWidth*0.3, wHeight*0.1, 0, wWidth*0.3, wHeight*0.1, wWidth*0.9);
gradient[0].addColorStop(0, 'rgb(0, 26, 77)');
gradient[0].addColorStop(1, 'transparent');

bctx.translate(wWidth, 0);
bctx.scale(-1,1);
bctx.beginPath();
bctx.fillStyle = gradient[0];
bctx.fillRect(0, 0, wWidth, wHeight);

gradient[1] = bctx.createRadialGradient(wWidth*0.1, wHeight*0.1, 0, wWidth*0.3, wHeight*0.1, wWidth);
gradient[1].addColorStop(0, 'rgb(0, 150, 240)');
gradient[1].addColorStop(0.8, 'transparent');

bctx.translate(wWidth, 0);
bctx.scale(-1,1);
bctx.beginPath();
bctx.fillStyle = gradient[1];
bctx.fillRect(0, 0, wWidth, wHeight);

gradient[2] = bctx.createRadialGradient(wWidth*0.1, wHeight*0.5, 0, wWidth*0.1, wHeight*0.5, wWidth*0.5);
gradient[2].addColorStop(0, 'rgb(40, 20, 105)');
gradient[2].addColorStop(1, 'transparent');

bctx.beginPath();
bctx.fillStyle = gradient[2];
bctx.fillRect(0, 0, wWidth, wHeight);
};

var animate = function(){
var sin = M.sin(degree),
cos = M.cos(degree);

if (config.circle.amount > 0 && config.circle.layer > 0){
fctx1.clearRect(0, 0, wWidth, wHeight);
for (var i=0, len = circles.length; i<len; i++){
    var item = circles[i],
        x = item.x,
        y = item.y,
        radius = item.radius,
        speed = item.speed;

    if (x > wWidth + radius){
        x = -radius;
    } else if (x < -radius){
        x = wWidth + radius
    } else {
        x += sin*speed;
    }

    if (y > wHeight + radius){
        y = -radius;
    } else if (y < -radius){
        y = wHeight + radius;
    } else {
        y -= cos*speed;
    }

    item.x = x;
    item.y = y;
    drawCircle(x, y, radius, item.color, item.alpha);
}
}

if (config.line.amount > 0 && config.line.layer > 0){
fctx2.clearRect(0, 0, wWidth, wHeight);
for (var j=0, len = lines.length; j<len; j++){
    var item = lines[j],
        x = item.x,
        y = item.y,
        width = item.width,
        speed = item.speed;

    if (x > wWidth + width * sin){
        x = -width * sin;
    } else if (x < -width * sin){
        x = wWidth + width * sin;
    } else {
        x += sin*speed;
    }

    if (y > wHeight + width * cos){
        y = -width * cos;
    } else if (y < -width * cos){
        y = wHeight + width * cos;
    } else {
        y -= cos*speed;
    }
    
    item.x = x;
    item.y = y;
    drawLine(x, y, width, item.color, item.alpha);
}
}

timer = requestAnimationFrame(animate);
};

var createItem = function(){
circles = [];
lines = [];

if (config.circle.amount > 0 && config.circle.layer > 0){
for (var i=0; i<config.circle.amount/config.circle.layer; i++){
    for (var j=0; j<config.circle.layer; j++){
        circles.push({
            x: M.random() * wWidth,
            y: M.random() * wHeight,
            radius: M.random()*(20+j*5)+(20+j*5),
            color: config.circle.color,
            alpha: M.random()*0.2+(config.circle.alpha-j*0.1),
            speed: config.speed*(1+j*0.5)
        });
    }
}
}

if (config.line.amount > 0 && config.line.layer > 0){
for (var m=0; m<config.line.amount/config.line.layer; m++){
    for (var n=0; n<config.line.layer; n++){
        lines.push({
            x: M.random() * wWidth,
            y: M.random() * wHeight,
            width: M.random()*(20+n*5)+(20+n*5),
            color: config.line.color,
            alpha: M.random()*0.2+(config.line.alpha-n*0.1),
            speed: config.speed*(1+n*0.5)
        });
    }
}
}

cancelAnimationFrame(timer);
timer = requestAnimationFrame(animate);
drawBack();
};

$(document).ready(function(){
setCanvasHeight();
createItem();
});
$(window).resize(function(){
setCanvasHeight();
createItem();
});
}
})(jQuery);
</script>


<script>
jQuery(document).ready(function($) {
$('.counter').each(function() {
var $this = $(this);
var num = parseFloat($this.data('num').toString().replace(/,/g, '')); // Retrieve the number from data-num attribute
$this.text('0'); // Set the initial text content to 0
$({ countNum: 0 }).animate({ countNum: num }, {
duration: 3500, // Adjust the duration as needed
easing: 'linear',
step: function() {
$this.text(commaSeparateNumber(Math.floor(this.countNum))); // Format the number with commas
},
complete: function() {
$this.text(commaSeparateNumber(this.countNum)); // Format the final number with commas
}
});
});

// Function to add commas to numbers
function commaSeparateNumber(val) {
while (/(\d+)(\d{3})/.test(val.toString())) {
val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
}
return val;
}
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