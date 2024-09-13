<<<<<<< HEAD
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="./index.css">
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

            
            <!-- <div class="container-fluid text-center maincontent-main">
                <div class="row maincontent">
                  <div class="col-lg-6 col-md-12  maincontent-img" style="padding:30px;">
                    <img src="./asirwad/1.jpg" alt="" style="width:100%;border-radius:7%;">
                 </div>

                 <div class="geeks col-lg-6 col-md-12 maincontent-con" id="grap4">
    <h3 class="my-4 animated-text">
        <span>No of districts - <span class="counter" data-num="5">5</span></span><br>
        <span>No of Branches - <span class="counter" data-num="10">10</span></span><br>
        <span>No of staffs - <span class="counter" data-num="45">45</span></span><br>
        <span>No of members - <span class="counter" data-num="12000">12000</span></span><br>
        <span>Amt of Loan disbursement - <span class="counter" data-num="45">45</span> crs</span><br>
        <span>Loan OS <span class="counter" data-num="9.9">9.9</span> cr</span>
    </h3>
</div> -->
<div class="container-fluid text-center maincontent-main">
    <div class="row maincontent">
      <!-- <h1>Growth By Numbers</h1>
      <p class="para">We have grown from strength to strength over the past 20 years</p> -->
      <div class="loader-animat" style="display:flex;justify-content:center;padding:50px;">
      <div class="col-lg-2 home-main-count col-md-offset-12" >
        <h1><span class="counter" data-num="5">5</span></h1>
        <p>No of districts</p>
      </div>
      
      <div class="col-lg-2 home-main-count" >
        <h1><span class="counter" data-num="10">10</span></h1>
        <p>No of Branches</p>
      </div>
      
      <div class="col-lg-2 home-main-count">
        <h1><span class="counter" data-num="45">45</span></h1>
        <p>No of staffs</p>
      </div>
      
      <div class="col-lg-2 home-main-count" >
        <h1><span class="counter" data-num="12000">12000</span></h1>
        <p>No of members</p>
      </div>
      <div class="col-lg-2 home-main-count" >
        <h1><span class="counter" data-num="45">45</span></span> crs</span></h1>
        <p>Amt of Loan disbursement</p>
      </div>
      
      <div class="col-lg-2 home-main-count" >
        <h1><span class="counter" data-num="9.9">9.9</span></span> crs</span></h1>
        <p>Loan OS</p>
      </div>
      </div>
    </div>
  </div>



                    
                    
                    
                 
                </div>
            </div>




            <div class="container text-center my-5" id="overview">
                <div class="row overviewmain">
                  <div class="col-lg-12 col-md-12 text-center my-5 section-header" >
                    <h3 style="color: #26284e;">Overview</h3>
                </div>
                
                    <div class=" col-lg-6 col-md-12 overviewcon">
                        <p class="my-4">"GRAMEEN MICROFINANCE TRUST" (G TRUST), a development finance organization (NGO-MFI)
                            registered under Indian trust act in 2006 operating in five districts of Tamil Nadu such as Tiruchirappalli,
                            Cuddalore, Tanjore and Mayiladuthurai for more than ten years in implementing projects like SHG,
                            Microfinance and livelihood development programs.</p>
                        <p class="my-4">GRAMEEN MICROFINANCE Trust is servicing more than 25000 customers in the last 5 years. Presently G
                            Trust have 10 branches with 46 staff; disbursed Rs. 45 Crores and maintaining 99% Repayment.</p>
                    </div>
                    <div class="col-lg-6 col-md-12 overviewimg">
                      <div  data-aos="fade-right"  data-aos-duration="1000" >
                        <img src="./assets/overview.jpeg" alt="">
                      </div>
                        <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500" style="height:87%;width:87%;"></div>
                    </div>
                    
                </div>
            </div>



            <div class="container my-5" id="board-of-directors">
            <div class="row" style="display: flex;justify-content: center;align-items: center;">
                <div class="col-12 text-center my-5 section-header">
                    <h3 style="color: #26284e;">Board Of Directors</h3>
                </div>
                <div class="col-lg-3 col-md-12"style="display: flex;justify-content: center;">
                    <article class="card1 my-3">
                        <img
                          class="card__background1"
                          src="./assets/Senthil.JPG"
                          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                          
                        />
                        <div class="card__content1 | flow1" style="text-align:center;">
                          <div class="card__content--container1 | flow1" style=" text-align: -webkit-center;">
                            <h2 class="card__title1" style="color: white;">Dr. V. Senthil Nathan <br><p>MD & CEO</p></h2>
                             <!-- <p class="card__description" style="color: white;">MD&CEO</p> -->
                          </div>
                          <button class="card__button1" data-bs-toggle="modal" data-bs-target="#exampleModal4" style="margin-top: 20px;">Read more</button>
                        </div>
                      </article>
                      <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class=" row modal-body" style="display: flex;">
                                <div class="col-lg-4 col-md-12 p-4">
                                    <img src="./assets/Senthil.JPG" alt="" width="100%" height="auto">
                                </div>
                                <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                    <h3 class="modal-title" id="exampleModalLabel">Dr. V. Senthil Nathan, MBA</h3>
                              <h5 class="modal-title" id="exampleModalLabel">Honorary Doctorate
                                from World Tamil
                                University, USA
                                Mentor/Ex-Officio
                                board of Trustee /
                                MD&CEO</h5><br>
                              <p>Mr. Senthil Nathan did his MBA and completed
                                his specialised courses such as:</p><br>
                                <p>1. Micro fin by CGAP, World Bank, USA</p><br>
                                    <p>2. CAMEL Rating tool of MFIs by ACCION
                                        International, USA</p><br>
                                        <p>3. GIRAFFEE Rating tool by Planet Finance,
                                            France</p><br>
                                            <p>4. Did a research project of USAID, External
                                                Affairs Ministry of USA by IRIS University, USA</p><br>
                                                <p>5. He is honoured with doctorate degree by World Tamil University, USA</p><br>
                                        <div>
                                            <h5>Experience :</h5>
                                        <li>3 years in Indian Space
                                            Research Organisation,
                                            ISRO, Govt. of India</li>
                                            <li>5 years of development
                                                exp</li>
                                                <li>20 years in microfinance</li>
                                                <li>5 years of secured
                                                    business HL/LAP,
                                                    TW/CD, Gold Loan,
                                                    MEL, PL</li>
                                            </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-12" style="display: flex;justify-content: center;">
                    <article class="card1 my-3" >
                        <img
                          class="card__background1"
                          src="./assets/hophoto/COOBala.png"
                          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                          
                        />
                        <div class="card__content1 | flow1" style="text-align:center;">
                          <div class="card__content--container1 | flow1" style=" text-align: -webkit-center;">
                            <h2 class="card__title1" style="color: white;">S. Bala Alias Deivanai <br><p>COO</p></h2>
                             <!-- <p class="card__description" style="color: white;">COO</p>  -->
                          </div>
                          <button class="card__button1" data-bs-toggle="modal" data-bs-target="#exampleModal5" style="margin-top: 20px;">Read more</button>
                        </div>
                      </article>
                      <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="row modal-body" style="display: flex;">
                                <div class="col-lg-4 col-md-12 p-4">
                                    <img src="./assets/hophoto/COOBala.png" alt="" width="100%" height="auto">
                                </div>
                                <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                    <h3 class="modal-title" id="exampleModalLabel">Bala Alias Deivanai, M.Com</h3><br>
                              <h5 class="modal-title" id="exampleModalLabel">Cheif Operation Officer (COO)</h5><br>
                              <p>Bala Alias Deivanai has completed post graduation in Commerce (M.Com) and also Masters degree in Social work (MSW).</p><br>
                                <p>She has experience in microfinance for more than a decade. </p><br>
                                    <p>She has been involving in ministry of science and technology,  Ministry of Bio Technology and Ministry of MSME, Government of India research and development projects.</p><br>
                                        <p>She is serving in different board as independent director.</p>
                                    <!-- <div>
                                            <h5>Experience :</h5>
                                        <li>5 years of exp.
                                            Development field</li>
                                            <li>5 years in teaching
                                                profession</li>
                                                <li>5 years in microfinance
                                                    profession</li>
                                            </div> -->
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
               

           

        
                <div class="col-lg-3 col-md-12" style="display: flex;justify-content: center;">
                    <article class="card1 my-3">
                        <img
                          class="card__background1"
                          src="./assets/Backya.png"
                          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                          
                        />
                        <div class="card__content1 | flow1" style="text-align:center;">
                          <div class="card__content--container1 | flow1" style=" text-align: -webkit-center;">
                            <h2 class="card__title1" style="color: white;">S. Backiyalakshmi <br><p>Chairman</p></h2>
                             <!-- <p class="card__description" style="color: white;">Chairman</p>  -->
                          </div>
                          <button class="card__button1" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="margin-top: 20px;">Read more</button>
                          <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                          </button> -->
                        </div>
                      </article>
                      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="row modal-body" style="display: flex;">
                                <div class="col-lg-4 col-md-12 p-4">
                                    <img src="./assets/Backya.png" alt="" width="100%" height="auto">
                                </div>
                                <div class="col-lg-8 col-md-12 p-4" style="text-align: left;">
                                    <h3 class="modal-title" id="exampleModalLabel">S. Backiyalakshmi, M.Sc</h3>
                              <h5 class="modal-title" id="exampleModalLabel">Chairman</h5><br>
                              <p>Mrs. Backyalakshmi did Economics in under
                                graduation and is a Master’s degree holder in
                                Hospital management (M.Sc.), completed courses
                                in Indra Gandhi College, Trichy.</p><br>
                                <p>Has working experience in different hospitals in
                                    Tamil Nadu for 5 years such as Vasan, ABC, etc.</p><br>
                                    <p>Involved in social development services related to
                                        health, education, livelihood programs, including
                                        microfinance and Self-Help Group for 10 years</p><br>
                                        <div>
                                            <h5>Experience :</h5>
                                        <li>10 years of exp. in
                                            Development field</li>
                                            <li>2 years exp. in medical
                                                field</li>
                                                <li>Philanthropist</li>
                                            </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-12" style="display: flex;justify-content: center;">
                    <article class="card1 my-3" >
                        <img
                          class="card__background1"
                          src="./assets/Mahesh.png"
                          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                          
                        />
                        <div class="card__content1 | flow1" style="text-align:center;">
                          <div class="card__content--container1 | flow1" style=" text-align: -webkit-center;">
                            <h2 class="card__title1" style="color: white;">S. Maheswari <br><p>Board Of Trustee</p></h2>
                             <!-- <p class="card__description" style="color: white;">Board of Trustee</p>  -->
                          </div>
                          <button class="card__button1" data-bs-toggle="modal" data-bs-target="#exampleModal2" style="margin-top: 20px;">Read more</button>
                        </div>
                      </article>
                      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="row modal-body" style="display: flex;">
                                <div class="col-lg-4 col-md-12 p-4">
                                    <img src="./assets/Mahesh.png" alt="" width="100%" height="auto">
                                </div>
                                <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                    <h3 class="modal-title" id="exampleModalLabel">S. Maheswari,M.Com</h3>
                              <h5 class="modal-title" id="exampleModalLabel">Board of Trustee</h5><br>
                              <p>Mrs. S. Maheswari did Commerce and Economics
                                in under graduation and is a Master’s degree
                                holder in Commerce (M. Com), completed
                                courses in Holy Cross College, Trichy.</p><br>
                                <p>Has working experience in different Academic
                                    institutions; Schools and Colleges in Tamil Nadu
                                    for 5 years.</p><br>
                                    <p>Involved in social development services including
                                        microfinance and Self-Help Group for 5 years</p><br>
                                        <div>
                                            <h5>Experience :</h5>
                                        <li>5 years of exp.
                                            Development field</li>
                                            <li>5 years in teaching
                                                profession</li>
                                                <li>5 years in microfinance
                                                    profession</li>
                                            </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                
               

            </div>

        </div>



            <div class="container  my-5">
                <div class="row">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Branch</h3>
                    </div>
                    <div class="col-12" >
                        <div class="table-responsive ">
                        <table>
                            <tr>
                                <th>S.NO</th>
                              <th>Branch</th>
                              <th>Taluk</th>
                              <th>District</th>
                            </tr>
                            <tr>
                                <td>1</td>
                              <td>Panruti</td>
                              <td>Panruti</td>
                              <td>Cuddalore</td>
                            </tr>
                            <tr>
                                <td>2</td>
                              <td>Kattumannarkoil Kovil</td>
                              <td>Kattumannarkoil Kovil</td>
                              <td>Cuddalore</td>
                            </tr>
                            <tr>
                                <td>3</td>
                              <td>Kollidam</td>
                              <td>Sirkali</td>
                              <td>Mayiladuthurai</td>
                            </tr>
                            <tr>
                                <td>4</td>
                              <td>Cuddalore</td>
                              <td>Cuddalore</td>
                              <td>Cuddalore</td>
                            </tr>
                            <tr>
                                <td>5</td>
                              <td>Manapparai</td>
                              <td>Manapparai</td>
                              <td>Tiruchirappalli</td>
                            </tr>
                            <tr>
                                <td>6</td>
                              <td>Puthuchathiram</td>
                              <td>Chidambaram</td>
                              <td>Cuddalore</td>
                            </tr>
                            <tr>
                                <td>7</td>
                              <td>Thirupananthal</td>
                              <td>Thiruvidaimarudur</td>
                              <td>Thanjavur</td>
                            </tr>
                            <tr>
                                <td>8</td>
                              <td>Vaitheeswaran Kovil</td>
                              <td>Sirkali</td>
                              <td>Mayiladuthurai</td>
                            </tr>
                            <tr>
                                <td>9</td>
                              <td>Vadalur</td>
                              <td>Kurinjipadi</td>
                              <td>Cuddalore</td>
                            </tr>
                            <tr>
                                <td>10</td>
                              <td>Virudhachalam</td>
                              <td>Virudhachalam</td>
                              <td>Cuddalore</td>
                            </tr>
                          </table>
                        </div>
                    </div>
                </div>
            </div>


            <!--<div class="container my-5">-->
            <!--  <div class="row">-->
            <!--        <div class="col-12 text-center mt-2 section-header">-->
            <!--             <h3 style="color: #26284e;">Growth and Outreach</h3>-->
            <!--         </div>-->
            <!--         <div class=" col-12 table-con" style="overflow-x: auto;">-->
            <!--            <table>-->
            <!--                <tr>-->
            <!--                  <th>Operational Highlights​​</th>-->
            <!--                  <th>FY 15-19 (4 YEARS)</th>-->
            <!--                  <th>2021</th>-->
            <!--                  <th>2022</th>-->
            <!--                    <th>2023</th>-->
            <!--                </tr>-->
            <!--                <tr>-->
            <!--                  <td>No. of States​​</td>-->
            <!--                  <td>1</td>-->
            <!--                  <td>1</td>-->
            <!--                  <td>1</td>-->
            <!--                  <td>1</td>-->
                              
            <!--                </tr>-->
            <!--                <tr>-->
            <!--                  <td>No. of District</td>-->
            <!--                  <td>1</td>-->
            <!--                  <td>1</td>-->
            <!--                  <td>4</td>-->
            <!--                  <td>5</td>-->
                             
            <!--                </tr>-->
            <!--                <tr>-->
            <!--                  <td>No. of Villages</td>-->
            <!--                  <td>20</td>-->
            <!--                  <td>35</td>-->
            <!--                  <td></td>-->
            <!--                  <td></td>-->
                              
            <!--                </tr>-->
            <!--                <tr>-->
            <!--                  <td>No. of Groups</td>-->
            <!--                  <td>30</td>-->
            <!--                  <td>52.5</td>-->
            <!--                  <td></td>-->
            <!--                  <td></td>-->
                              
            <!--              </tr>-->
            <!--              <tr>-->
            <!--                <td>No. of Branches​​</td>-->
            <!--                <td>1</td>-->
            <!--                <td>1</td>-->
            <!--                <td>1</td>-->
            <!--                <td>10</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>No. of active borrowers​​</td>-->
            <!--                <td>570</td>-->
            <!--                <td>32</td>-->
            <!--                <td>5,653</td>-->
            <!--                <td>9,791</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>No. of staff​​</td>-->
            <!--                <td>2</td>-->
            <!--                <td>2</td>-->
            <!--                <td>5</td>-->
            <!--                <td>43</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>No. of female employees​​</td>-->
            <!--                <td>1</td>-->
            <!--                <td>0</td>-->
            <!--                <td>1</td>-->
            <!--                <td>5</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>No. of credit officers ​​​​</td>-->
            <!--                <td>1</td>-->
            <!--                <td>1</td>-->
            <!--                <td>4</td>-->
            <!--                <td>34</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>Loans disbursed during the year (₹ in Crs)​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td>0.12</td>-->
            <!--                <td>13.06</td>-->
            <!--                <td>29.49</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>Assigned / Securitised Portfolio​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td></td>-->
            <!--                <td></td>-->
            <!--                <td></td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>BC portfolio​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td>0</td>-->
            <!--                <td>9.50 Cr</td>-->
            <!--                <td>9.26 Cr</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>On-book portfolio​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td>0.12</td>-->
            <!--                <td>0.04 Cr</td>-->
            <!--                <td>1.1 Cr</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>Total portfolio​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td>10.34 L</td>-->
            <!--                <td>9.54 Cr</td>-->
            <!--                <td>10.04 Cr</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>Gross NPA %​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td></td>-->
            <!--                <td></td>-->
            <!--                <td>3 Lakhs</td>-->
                            
            <!--            </tr>-->
            <!--              </table>-->
                          
            <!--        </div>-->
            <!--  </div>-->

            <!--</div>-->


            <div class="container my-5" id="VIDEOS">
                <div class="row" style="display: flex;justify-content: center;">
                  <div class="col-12 text-center my-5 section-header">
                    <h3 style="color: #26284e;">VIDEOS</h3>
                </div>
                  <div class="col-lg-10">
                    <video src="./assets/video1.mp4" height="100%" width="100%" controls></video>
  
                  </div>
  
                </div>
  
              </div>


              <div class="container  my-5" id="Funding-Partners" >
                <div class="row" style="display: flex;
                justify-content: center;
                align-items: center;">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Funding Partners</h3>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3">
                            <img
                              class="card__background"
                              src="./assets/samunnati logo.png"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">S. Backiyalakshmi,M.Sc.</h2>
                                <p class="card__description" style="color: white;">Chairman and Managing Trustee</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal6" style="margin-top: 10px;">Read more</button>
                              <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                                
                              </button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/samunnati logo.png" alt="" width="300" height="300">
                                    </div>
                                    <div class="col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">SAMUNNATI</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Chairman and Managing Trustee</h5><br> -->
                                  <p>India’s largest agri enterprise, Samunnati is an open agri network to unlock the trillion-dollar-plus potential of Indian agriculture with smallholder farmers at the centre of it.</p><br>
                                    <p>Samunnati currently has access to 6000+ Farmer Collectives with a member base of over 6 million farmers
                                        and envisions impacting 1 in every 4 farming households through its network by 2027.</p><br>
                                        <p>Headquartered in Chennai, Tamil Nadu, India, Samunnati has a presence in more than 100 agri value chains spread over 28 states in India and has powered over $3Bn of gross transaction value in its journey so far.</p><br>
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>10 years of exp. in
                                                Development field</li>
                                                <li>2 years exp. in medical
                                                    field</li>
                                                    <li>Philanthropist</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3" >
                            <img
                              class="card__background"
                              src="./assets/avanti logo.webp"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">S. Maheswari , M. Com</h2>
                                <p class="card__description" style="color: white;">Board of Trustee,</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal7" style="margin-top: 10px;">Read more</button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/avanti logo.webp" alt="" width="300" height="300">
                                    </div>
                                    <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">AVANTI</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Board of Trustee,</h5><br> -->
                                  <p>Avanti’s mission is to enable sustainable livelihoods and empower the next 100 million households through accessible and affordable financial services.</p><br>
                                    <p>It is building a co-creation platform that fosters hyperlocal livelihood innovation and mass customisation.</p><br>
                                        <p>We currently focus on providing micro loans for income generation that enable sustainable livelihood creation.

                                        </p><br>
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>5 years of exp.
                                                Development field</li>
                                                <li>5 years in teaching
                                                    profession</li>
                                                    <li>5 years in microfinance
                                                        profession</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3">
                            <img
                              class="card__background"
                              src="./assets/esaf logo.jfif"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">S. Mahalakshmi,M.Sc</h2>
                                <p class="card__description" style="color: white;">Board of Trustee</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal8" style="margin-top: 10px;">Read more</button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/esaf logo.jfif" alt="" width="300" height="300">
                                    </div>
                                    <div class="col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">ESAF CO-OPERATIVE</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Board of Trustee</h5><br> -->
                                  <p>Even though formally ESMACO has a history of around 10 years but its seeds were sown way back in the year 1992 when Mr. K. Paul Thomas (Chief Promoter of ESMACO and Founder of ESAF Group of Social enterprises) started an NGO, ESAF Society. ESAF Society was established in Thrissur, Kerala in 1992, as a response to the social and economical needs of the unemployed youth and the underprivileged.</p><br>
                                    <p>Since then, ESAF has grown by leaps and bounds in the Microfinance sector, promoting microfinance as a viable, sustainable and effective means for creating jobs and reducing poverty, through ESAF Microfinance and Investments P Ltd from the year 2008 to 2017 and through ESAF Small Finance Bank Ltd from March 2017.</p><br>
                                        <p>From 2011 to 2016, ESMACO was a credit Society taking care of the thrift needs of the members who are from deserving backgrounds and in the year 2016, honouring the mandate from the Reserve Bank of India in order to commence the operations of ESAF Small Finance Bank Ltd, ESMACO surrendered its credit status and is presently acting as an Agro Society (From ESCCO to ESMACO).</p><br>
                                            
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>5 years of exp.
                                                Development field</li>
                                                <li>7 years of industrial
                                                    experience</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3">
                            <img
                              class="card__background"
                              src="./assets/aphelion logo.webp"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">S. Mahalakshmi,M.Sc</h2>
                                <p class="card__description" style="color: white;">Board of Trustee</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal9" style="margin-top: 10px;">Read more</button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/aphelion logo.webp" alt="" width="300" height="300">
                                    </div>
                                    <div class="col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">APHELION FINANCE</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Board of Trustee</h5><br> -->
                                  <p>Aphelion Finance is an ISO 9001:2008 certified Non-Banking Finance Company, registered with the Reserve Bank of India. Aphelion Finance Private Limited’s small ticket personal loans (STPL) build a life of ease and convenience for you. We have gained recognition within the industry as one of the foremost Financial Assets Company. </p><br>
                                    <p>Furthermore, we are appreciated for our high quality standards of satisfaction and performance that we have set and matched year after year. The Company had also been accredited Long Term Rating “IND BB" with stable outlook by India Rating and Research, a FITCH Group Company and “ICRA BB+” with Stable outlook by ICRA Limited.</p><br>
                                        <p>Our quick Personal Loans and easy Gold Loans help you accomplish your ambitions and dreams. We are committed to provide the best financial solutions with the mission to fulfill your needs and aspirations.</p><br>
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>5 years of exp.
                                                Development field</li>
                                                <li>7 years of industrial
                                                    experience</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3" >
                            <img
                              class="card__background"
                              src="./assets/ahope.jpg"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">S. Maheswari , M. Com</h2>
                                <p class="card__description" style="color: white;">Board of Trustee,</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal20" style="margin-top: 10px;">Read more</button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/ahope.jpg" alt="" width="300" height="300">
                                    </div>
                                    <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">aHOPE</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Board of Trustee,</h5><br> -->
                                  <p>From decades of experience in understanding the Governments and implementing large scale transformation throughout the country, we are now creating solutions for the bottom of the pyramid. Converting scarcity into abundance and poverty into prosperity. </p><br>
                                  <!--  <p>It is building a co-creation platform that fosters hyperlocal livelihood innovation and mass customisation.</p><br>-->
                                  <!--      <p>We currently focus on providing micro loans for income generation that enable sustainable livelihood creation.-->

                                  <!--      </p><br>-->
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>5 years of exp.
                                                Development field</li>
                                                <li>5 years in teaching
                                                    profession</li>
                                                    <li>5 years in microfinance
                                                        profession</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3">
                            <img
                              class="card__background"
                              src="./assets/rarfincare logo.jpg"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">Dr. V. Senthil Nathan,MBA</h2>
                                <p class="card__description" style="color: white;">Honorary Doctorate
                                    from World Tamil
                                    University, USA
                                    Mentor/Ex-Officio
                                    board of Trustee /
                                    MD&CEO</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal10" style="margin-top: 10px;">Read more</button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class=" row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/rarfincare logo.jpg" alt="" width="300" height="300">
                                    </div>
                                    <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">RARFINCARE</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Honorary Doctorate
                                    from World Tamil
                                    University, USA
                                    Mentor/Ex-Officio
                                    board of Trustee /
                                    MD&CEO</h5><br> -->
                                  <p>RAR Fincare Limited was incorporated on 9th July 2019 with a vision to become the most trustworthy financial services provider in the country. The company is being promoted by GRT group, which is a well-diversified conglomerate with interests in Jewelry, Hotels, Education, Real Estate, and Renewable Energy.</p><br>
                                    <p>RAR Fincare was founded to fulfill the credit needs of businesses (including MSMEs) and individuals in India by providing appropriate financial products. Towards achieving this objective, the company applied for and received a license from RBI to operate as an NBFC on 2nd February 2021.</p><br>
                                            <p>The company ensures customer-centricity and builds customer intimacy through the right mix of physical touchpoints, field staff, digital touchpoints, and vernacular promotions. It has drafted a comprehensive and well-equipped business strategy and implementation plan to streamline operations and to provide a high level of efficiency in services.</p><br>
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>3 years in Indian Space
                                                Research Organisation,
                                                ISRO, Govt. of India</li>
                                                <li>5 years of development
                                                    exp</li>
                                                    <li>20 years in microfinance</li>
                                                    <li>5 years of secured
                                                        business HL/LAP,
                                                        TW/CD, Gold Loan,
                                                        MEL, PL</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
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
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="./index.css">
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

            
            <!-- <div class="container-fluid text-center maincontent-main">
                <div class="row maincontent">
                  <div class="col-lg-6 col-md-12  maincontent-img" style="padding:30px;">
                    <img src="./asirwad/1.jpg" alt="" style="width:100%;border-radius:7%;">
                 </div>

                 <div class="geeks col-lg-6 col-md-12 maincontent-con" id="grap4">
    <h3 class="my-4 animated-text">
        <span>No of districts - <span class="counter" data-num="5">5</span></span><br>
        <span>No of Branches - <span class="counter" data-num="10">10</span></span><br>
        <span>No of staffs - <span class="counter" data-num="45">45</span></span><br>
        <span>No of members - <span class="counter" data-num="12000">12000</span></span><br>
        <span>Amt of Loan disbursement - <span class="counter" data-num="45">45</span> crs</span><br>
        <span>Loan OS <span class="counter" data-num="9.9">9.9</span> cr</span>
    </h3>
</div> -->
<div class="container-fluid text-center maincontent-main">
    <div class="row maincontent">
      <!-- <h1>Growth By Numbers</h1>
      <p class="para">We have grown from strength to strength over the past 20 years</p> -->
      <div class="loader-animat" style="display:flex;justify-content:center;padding:50px;">
      <div class="col-lg-2 home-main-count col-md-offset-12" >
        <h1><span class="counter" data-num="5">5</span></h1>
        <p>No of districts</p>
      </div>
      
      <div class="col-lg-2 home-main-count" >
        <h1><span class="counter" data-num="10">10</span></h1>
        <p>No of Branches</p>
      </div>
      
      <div class="col-lg-2 home-main-count">
        <h1><span class="counter" data-num="45">45</span></h1>
        <p>No of staffs</p>
      </div>
      
      <div class="col-lg-2 home-main-count" >
        <h1><span class="counter" data-num="12000">12000</span></h1>
        <p>No of members</p>
      </div>
      <div class="col-lg-2 home-main-count" >
        <h1><span class="counter" data-num="45">45</span></span> crs</span></h1>
        <p>Amt of Loan disbursement</p>
      </div>
      
      <div class="col-lg-2 home-main-count" >
        <h1><span class="counter" data-num="9.9">9.9</span></span> crs</span></h1>
        <p>Loan OS</p>
      </div>
      </div>
    </div>
  </div>



                    
                    
                    
                 
                </div>
            </div>




            <div class="container text-center my-5" id="overview">
                <div class="row overviewmain">
                  <div class="col-lg-12 col-md-12 text-center my-5 section-header" >
                    <h3 style="color: #26284e;">Overview</h3>
                </div>
                
                    <div class=" col-lg-6 col-md-12 overviewcon">
                        <p class="my-4">"GRAMEEN MICROFINANCE TRUST" (G TRUST), a development finance organization (NGO-MFI)
                            registered under Indian trust act in 2006 operating in five districts of Tamil Nadu such as Tiruchirappalli,
                            Cuddalore, Tanjore and Mayiladuthurai for more than ten years in implementing projects like SHG,
                            Microfinance and livelihood development programs.</p>
                        <p class="my-4">GRAMEEN MICROFINANCE Trust is servicing more than 25000 customers in the last 5 years. Presently G
                            Trust have 10 branches with 46 staff; disbursed Rs. 45 Crores and maintaining 99% Repayment.</p>
                    </div>
                    <div class="col-lg-6 col-md-12 overviewimg">
                      <div  data-aos="fade-right"  data-aos-duration="1000" >
                        <img src="./assets/overview.jpeg" alt="">
                      </div>
                        <div class="imgslid" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500" style="height:87%;width:87%;"></div>
                    </div>
                    
                </div>
            </div>



            <div class="container my-5" id="board-of-directors">
            <div class="row" style="display: flex;justify-content: center;align-items: center;">
                <div class="col-12 text-center my-5 section-header">
                    <h3 style="color: #26284e;">Board Of Directors</h3>
                </div>
                <div class="col-lg-3 col-md-12"style="display: flex;justify-content: center;">
                    <article class="card1 my-3">
                        <img
                          class="card__background1"
                          src="./assets/Senthil.JPG"
                          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                          
                        />
                        <div class="card__content1 | flow1" style="text-align:center;">
                          <div class="card__content--container1 | flow1" style=" text-align: -webkit-center;">
                            <h2 class="card__title1" style="color: white;">Dr. V. Senthil Nathan <br><p>MD & CEO</p></h2>
                             <!-- <p class="card__description" style="color: white;">MD&CEO</p> -->
                          </div>
                          <button class="card__button1" data-bs-toggle="modal" data-bs-target="#exampleModal4" style="margin-top: 20px;">Read more</button>
                        </div>
                      </article>
                      <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class=" row modal-body" style="display: flex;">
                                <div class="col-lg-4 col-md-12 p-4">
                                    <img src="./assets/Senthil.JPG" alt="" width="100%" height="auto">
                                </div>
                                <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                    <h3 class="modal-title" id="exampleModalLabel">Dr. V. Senthil Nathan, MBA</h3>
                              <h5 class="modal-title" id="exampleModalLabel">Honorary Doctorate
                                from World Tamil
                                University, USA
                                Mentor/Ex-Officio
                                board of Trustee /
                                MD&CEO</h5><br>
                              <p>Mr. Senthil Nathan did his MBA and completed
                                his specialised courses such as:</p><br>
                                <p>1. Micro fin by CGAP, World Bank, USA</p><br>
                                    <p>2. CAMEL Rating tool of MFIs by ACCION
                                        International, USA</p><br>
                                        <p>3. GIRAFFEE Rating tool by Planet Finance,
                                            France</p><br>
                                            <p>4. Did a research project of USAID, External
                                                Affairs Ministry of USA by IRIS University, USA</p><br>
                                                <p>5. He is honoured with doctorate degree by World Tamil University, USA</p><br>
                                        <div>
                                            <h5>Experience :</h5>
                                        <li>3 years in Indian Space
                                            Research Organisation,
                                            ISRO, Govt. of India</li>
                                            <li>5 years of development
                                                exp</li>
                                                <li>20 years in microfinance</li>
                                                <li>5 years of secured
                                                    business HL/LAP,
                                                    TW/CD, Gold Loan,
                                                    MEL, PL</li>
                                            </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-12" style="display: flex;justify-content: center;">
                    <article class="card1 my-3" >
                        <img
                          class="card__background1"
                          src="./assets/hophoto/COOBala.png"
                          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                          
                        />
                        <div class="card__content1 | flow1" style="text-align:center;">
                          <div class="card__content--container1 | flow1" style=" text-align: -webkit-center;">
                            <h2 class="card__title1" style="color: white;">S. Bala Alias Deivanai <br><p>COO</p></h2>
                             <!-- <p class="card__description" style="color: white;">COO</p>  -->
                          </div>
                          <button class="card__button1" data-bs-toggle="modal" data-bs-target="#exampleModal5" style="margin-top: 20px;">Read more</button>
                        </div>
                      </article>
                      <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="row modal-body" style="display: flex;">
                                <div class="col-lg-4 col-md-12 p-4">
                                    <img src="./assets/hophoto/COOBala.png" alt="" width="100%" height="auto">
                                </div>
                                <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                    <h3 class="modal-title" id="exampleModalLabel">Bala Alias Deivanai, M.Com</h3><br>
                              <h5 class="modal-title" id="exampleModalLabel">Cheif Operation Officer (COO)</h5><br>
                              <p>Bala Alias Deivanai has completed post graduation in Commerce (M.Com) and also Masters degree in Social work (MSW).</p><br>
                                <p>She has experience in microfinance for more than a decade. </p><br>
                                    <p>She has been involving in ministry of science and technology,  Ministry of Bio Technology and Ministry of MSME, Government of India research and development projects.</p><br>
                                        <p>She is serving in different board as independent director.</p>
                                    <!-- <div>
                                            <h5>Experience :</h5>
                                        <li>5 years of exp.
                                            Development field</li>
                                            <li>5 years in teaching
                                                profession</li>
                                                <li>5 years in microfinance
                                                    profession</li>
                                            </div> -->
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
               

           

        
                <div class="col-lg-3 col-md-12" style="display: flex;justify-content: center;">
                    <article class="card1 my-3">
                        <img
                          class="card__background1"
                          src="./assets/Backya.png"
                          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                          
                        />
                        <div class="card__content1 | flow1" style="text-align:center;">
                          <div class="card__content--container1 | flow1" style=" text-align: -webkit-center;">
                            <h2 class="card__title1" style="color: white;">S. Backiyalakshmi <br><p>Chairman</p></h2>
                             <!-- <p class="card__description" style="color: white;">Chairman</p>  -->
                          </div>
                          <button class="card__button1" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="margin-top: 20px;">Read more</button>
                          <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                          </button> -->
                        </div>
                      </article>
                      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="row modal-body" style="display: flex;">
                                <div class="col-lg-4 col-md-12 p-4">
                                    <img src="./assets/Backya.png" alt="" width="100%" height="auto">
                                </div>
                                <div class="col-lg-8 col-md-12 p-4" style="text-align: left;">
                                    <h3 class="modal-title" id="exampleModalLabel">S. Backiyalakshmi, M.Sc</h3>
                              <h5 class="modal-title" id="exampleModalLabel">Chairman</h5><br>
                              <p>Mrs. Backyalakshmi did Economics in under
                                graduation and is a Master’s degree holder in
                                Hospital management (M.Sc.), completed courses
                                in Indra Gandhi College, Trichy.</p><br>
                                <p>Has working experience in different hospitals in
                                    Tamil Nadu for 5 years such as Vasan, ABC, etc.</p><br>
                                    <p>Involved in social development services related to
                                        health, education, livelihood programs, including
                                        microfinance and Self-Help Group for 10 years</p><br>
                                        <div>
                                            <h5>Experience :</h5>
                                        <li>10 years of exp. in
                                            Development field</li>
                                            <li>2 years exp. in medical
                                                field</li>
                                                <li>Philanthropist</li>
                                            </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-md-12" style="display: flex;justify-content: center;">
                    <article class="card1 my-3" >
                        <img
                          class="card__background1"
                          src="./assets/Mahesh.png"
                          alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                          
                        />
                        <div class="card__content1 | flow1" style="text-align:center;">
                          <div class="card__content--container1 | flow1" style=" text-align: -webkit-center;">
                            <h2 class="card__title1" style="color: white;">S. Maheswari <br><p>Board Of Trustee</p></h2>
                             <!-- <p class="card__description" style="color: white;">Board of Trustee</p>  -->
                          </div>
                          <button class="card__button1" data-bs-toggle="modal" data-bs-target="#exampleModal2" style="margin-top: 20px;">Read more</button>
                        </div>
                      </article>
                      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="row modal-body" style="display: flex;">
                                <div class="col-lg-4 col-md-12 p-4">
                                    <img src="./assets/Mahesh.png" alt="" width="100%" height="auto">
                                </div>
                                <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                    <h3 class="modal-title" id="exampleModalLabel">S. Maheswari,M.Com</h3>
                              <h5 class="modal-title" id="exampleModalLabel">Board of Trustee</h5><br>
                              <p>Mrs. S. Maheswari did Commerce and Economics
                                in under graduation and is a Master’s degree
                                holder in Commerce (M. Com), completed
                                courses in Holy Cross College, Trichy.</p><br>
                                <p>Has working experience in different Academic
                                    institutions; Schools and Colleges in Tamil Nadu
                                    for 5 years.</p><br>
                                    <p>Involved in social development services including
                                        microfinance and Self-Help Group for 5 years</p><br>
                                        <div>
                                            <h5>Experience :</h5>
                                        <li>5 years of exp.
                                            Development field</li>
                                            <li>5 years in teaching
                                                profession</li>
                                                <li>5 years in microfinance
                                                    profession</li>
                                            </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                
               

            </div>

        </div>



            <div class="container  my-5">
                <div class="row">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Branch</h3>
                    </div>
                    <div class="col-12" >
                        <div class="table-responsive ">
                        <table>
                            <tr>
                                <th>S.NO</th>
                              <th>Branch</th>
                              <th>Taluk</th>
                              <th>District</th>
                            </tr>
                            <tr>
                                <td>1</td>
                              <td>Panruti</td>
                              <td>Panruti</td>
                              <td>Cuddalore</td>
                            </tr>
                            <tr>
                                <td>2</td>
                              <td>Kattumannarkoil Kovil</td>
                              <td>Kattumannarkoil Kovil</td>
                              <td>Cuddalore</td>
                            </tr>
                            <tr>
                                <td>3</td>
                              <td>Kollidam</td>
                              <td>Sirkali</td>
                              <td>Mayiladuthurai</td>
                            </tr>
                            <tr>
                                <td>4</td>
                              <td>Cuddalore</td>
                              <td>Cuddalore</td>
                              <td>Cuddalore</td>
                            </tr>
                            <tr>
                                <td>5</td>
                              <td>Manapparai</td>
                              <td>Manapparai</td>
                              <td>Tiruchirappalli</td>
                            </tr>
                            <tr>
                                <td>6</td>
                              <td>Puthuchathiram</td>
                              <td>Chidambaram</td>
                              <td>Cuddalore</td>
                            </tr>
                            <tr>
                                <td>7</td>
                              <td>Thirupananthal</td>
                              <td>Thiruvidaimarudur</td>
                              <td>Thanjavur</td>
                            </tr>
                            <tr>
                                <td>8</td>
                              <td>Vaitheeswaran Kovil</td>
                              <td>Sirkali</td>
                              <td>Mayiladuthurai</td>
                            </tr>
                            <tr>
                                <td>9</td>
                              <td>Vadalur</td>
                              <td>Kurinjipadi</td>
                              <td>Cuddalore</td>
                            </tr>
                            <tr>
                                <td>10</td>
                              <td>Virudhachalam</td>
                              <td>Virudhachalam</td>
                              <td>Cuddalore</td>
                            </tr>
                          </table>
                        </div>
                    </div>
                </div>
            </div>


            <!--<div class="container my-5">-->
            <!--  <div class="row">-->
            <!--        <div class="col-12 text-center mt-2 section-header">-->
            <!--             <h3 style="color: #26284e;">Growth and Outreach</h3>-->
            <!--         </div>-->
            <!--         <div class=" col-12 table-con" style="overflow-x: auto;">-->
            <!--            <table>-->
            <!--                <tr>-->
            <!--                  <th>Operational Highlights​​</th>-->
            <!--                  <th>FY 15-19 (4 YEARS)</th>-->
            <!--                  <th>2021</th>-->
            <!--                  <th>2022</th>-->
            <!--                    <th>2023</th>-->
            <!--                </tr>-->
            <!--                <tr>-->
            <!--                  <td>No. of States​​</td>-->
            <!--                  <td>1</td>-->
            <!--                  <td>1</td>-->
            <!--                  <td>1</td>-->
            <!--                  <td>1</td>-->
                              
            <!--                </tr>-->
            <!--                <tr>-->
            <!--                  <td>No. of District</td>-->
            <!--                  <td>1</td>-->
            <!--                  <td>1</td>-->
            <!--                  <td>4</td>-->
            <!--                  <td>5</td>-->
                             
            <!--                </tr>-->
            <!--                <tr>-->
            <!--                  <td>No. of Villages</td>-->
            <!--                  <td>20</td>-->
            <!--                  <td>35</td>-->
            <!--                  <td></td>-->
            <!--                  <td></td>-->
                              
            <!--                </tr>-->
            <!--                <tr>-->
            <!--                  <td>No. of Groups</td>-->
            <!--                  <td>30</td>-->
            <!--                  <td>52.5</td>-->
            <!--                  <td></td>-->
            <!--                  <td></td>-->
                              
            <!--              </tr>-->
            <!--              <tr>-->
            <!--                <td>No. of Branches​​</td>-->
            <!--                <td>1</td>-->
            <!--                <td>1</td>-->
            <!--                <td>1</td>-->
            <!--                <td>10</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>No. of active borrowers​​</td>-->
            <!--                <td>570</td>-->
            <!--                <td>32</td>-->
            <!--                <td>5,653</td>-->
            <!--                <td>9,791</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>No. of staff​​</td>-->
            <!--                <td>2</td>-->
            <!--                <td>2</td>-->
            <!--                <td>5</td>-->
            <!--                <td>43</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>No. of female employees​​</td>-->
            <!--                <td>1</td>-->
            <!--                <td>0</td>-->
            <!--                <td>1</td>-->
            <!--                <td>5</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>No. of credit officers ​​​​</td>-->
            <!--                <td>1</td>-->
            <!--                <td>1</td>-->
            <!--                <td>4</td>-->
            <!--                <td>34</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>Loans disbursed during the year (₹ in Crs)​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td>0.12</td>-->
            <!--                <td>13.06</td>-->
            <!--                <td>29.49</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>Assigned / Securitised Portfolio​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td></td>-->
            <!--                <td></td>-->
            <!--                <td></td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>BC portfolio​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td>0</td>-->
            <!--                <td>9.50 Cr</td>-->
            <!--                <td>9.26 Cr</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>On-book portfolio​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td>0.12</td>-->
            <!--                <td>0.04 Cr</td>-->
            <!--                <td>1.1 Cr</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>Total portfolio​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td>10.34 L</td>-->
            <!--                <td>9.54 Cr</td>-->
            <!--                <td>10.04 Cr</td>-->
                            
            <!--            </tr>-->
            <!--            <tr>-->
            <!--                <td>Gross NPA %​​​​</td>-->
            <!--                <td></td>-->
            <!--                <td></td>-->
            <!--                <td></td>-->
            <!--                <td>3 Lakhs</td>-->
                            
            <!--            </tr>-->
            <!--              </table>-->
                          
            <!--        </div>-->
            <!--  </div>-->

            <!--</div>-->


            <div class="container my-5" id="VIDEOS">
                <div class="row" style="display: flex;justify-content: center;">
                  <div class="col-12 text-center my-5 section-header">
                    <h3 style="color: #26284e;">VIDEOS</h3>
                </div>
                  <div class="col-lg-10">
                    <video src="./assets/video1.mp4" height="100%" width="100%" controls></video>
  
                  </div>
  
                </div>
  
              </div>


              <div class="container  my-5" id="Funding-Partners" >
                <div class="row" style="display: flex;
                justify-content: center;
                align-items: center;">
                    <div class="col-12 text-center my-5 section-header">
                        <h3 style="color: #26284e;">Funding Partners</h3>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3">
                            <img
                              class="card__background"
                              src="./assets/samunnati logo.png"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">S. Backiyalakshmi,M.Sc.</h2>
                                <p class="card__description" style="color: white;">Chairman and Managing Trustee</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal6" style="margin-top: 10px;">Read more</button>
                              <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                                
                              </button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/samunnati logo.png" alt="" width="300" height="300">
                                    </div>
                                    <div class="col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">SAMUNNATI</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Chairman and Managing Trustee</h5><br> -->
                                  <p>India’s largest agri enterprise, Samunnati is an open agri network to unlock the trillion-dollar-plus potential of Indian agriculture with smallholder farmers at the centre of it.</p><br>
                                    <p>Samunnati currently has access to 6000+ Farmer Collectives with a member base of over 6 million farmers
                                        and envisions impacting 1 in every 4 farming households through its network by 2027.</p><br>
                                        <p>Headquartered in Chennai, Tamil Nadu, India, Samunnati has a presence in more than 100 agri value chains spread over 28 states in India and has powered over $3Bn of gross transaction value in its journey so far.</p><br>
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>10 years of exp. in
                                                Development field</li>
                                                <li>2 years exp. in medical
                                                    field</li>
                                                    <li>Philanthropist</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3" >
                            <img
                              class="card__background"
                              src="./assets/avanti logo.webp"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">S. Maheswari , M. Com</h2>
                                <p class="card__description" style="color: white;">Board of Trustee,</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal7" style="margin-top: 10px;">Read more</button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/avanti logo.webp" alt="" width="300" height="300">
                                    </div>
                                    <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">AVANTI</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Board of Trustee,</h5><br> -->
                                  <p>Avanti’s mission is to enable sustainable livelihoods and empower the next 100 million households through accessible and affordable financial services.</p><br>
                                    <p>It is building a co-creation platform that fosters hyperlocal livelihood innovation and mass customisation.</p><br>
                                        <p>We currently focus on providing micro loans for income generation that enable sustainable livelihood creation.

                                        </p><br>
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>5 years of exp.
                                                Development field</li>
                                                <li>5 years in teaching
                                                    profession</li>
                                                    <li>5 years in microfinance
                                                        profession</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3">
                            <img
                              class="card__background"
                              src="./assets/esaf logo.jfif"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">S. Mahalakshmi,M.Sc</h2>
                                <p class="card__description" style="color: white;">Board of Trustee</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal8" style="margin-top: 10px;">Read more</button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/esaf logo.jfif" alt="" width="300" height="300">
                                    </div>
                                    <div class="col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">ESAF CO-OPERATIVE</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Board of Trustee</h5><br> -->
                                  <p>Even though formally ESMACO has a history of around 10 years but its seeds were sown way back in the year 1992 when Mr. K. Paul Thomas (Chief Promoter of ESMACO and Founder of ESAF Group of Social enterprises) started an NGO, ESAF Society. ESAF Society was established in Thrissur, Kerala in 1992, as a response to the social and economical needs of the unemployed youth and the underprivileged.</p><br>
                                    <p>Since then, ESAF has grown by leaps and bounds in the Microfinance sector, promoting microfinance as a viable, sustainable and effective means for creating jobs and reducing poverty, through ESAF Microfinance and Investments P Ltd from the year 2008 to 2017 and through ESAF Small Finance Bank Ltd from March 2017.</p><br>
                                        <p>From 2011 to 2016, ESMACO was a credit Society taking care of the thrift needs of the members who are from deserving backgrounds and in the year 2016, honouring the mandate from the Reserve Bank of India in order to commence the operations of ESAF Small Finance Bank Ltd, ESMACO surrendered its credit status and is presently acting as an Agro Society (From ESCCO to ESMACO).</p><br>
                                            
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>5 years of exp.
                                                Development field</li>
                                                <li>7 years of industrial
                                                    experience</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3">
                            <img
                              class="card__background"
                              src="./assets/aphelion logo.webp"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">S. Mahalakshmi,M.Sc</h2>
                                <p class="card__description" style="color: white;">Board of Trustee</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal9" style="margin-top: 10px;">Read more</button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/aphelion logo.webp" alt="" width="300" height="300">
                                    </div>
                                    <div class="col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">APHELION FINANCE</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Board of Trustee</h5><br> -->
                                  <p>Aphelion Finance is an ISO 9001:2008 certified Non-Banking Finance Company, registered with the Reserve Bank of India. Aphelion Finance Private Limited’s small ticket personal loans (STPL) build a life of ease and convenience for you. We have gained recognition within the industry as one of the foremost Financial Assets Company. </p><br>
                                    <p>Furthermore, we are appreciated for our high quality standards of satisfaction and performance that we have set and matched year after year. The Company had also been accredited Long Term Rating “IND BB" with stable outlook by India Rating and Research, a FITCH Group Company and “ICRA BB+” with Stable outlook by ICRA Limited.</p><br>
                                        <p>Our quick Personal Loans and easy Gold Loans help you accomplish your ambitions and dreams. We are committed to provide the best financial solutions with the mission to fulfill your needs and aspirations.</p><br>
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>5 years of exp.
                                                Development field</li>
                                                <li>7 years of industrial
                                                    experience</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3" >
                            <img
                              class="card__background"
                              src="./assets/ahope.jpg"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">S. Maheswari , M. Com</h2>
                                <p class="card__description" style="color: white;">Board of Trustee,</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal20" style="margin-top: 10px;">Read more</button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/ahope.jpg" alt="" width="300" height="300">
                                    </div>
                                    <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">aHOPE</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Board of Trustee,</h5><br> -->
                                  <p>From decades of experience in understanding the Governments and implementing large scale transformation throughout the country, we are now creating solutions for the bottom of the pyramid. Converting scarcity into abundance and poverty into prosperity. </p><br>
                                  <!--  <p>It is building a co-creation platform that fosters hyperlocal livelihood innovation and mass customisation.</p><br>-->
                                  <!--      <p>We currently focus on providing micro loans for income generation that enable sustainable livelihood creation.-->

                                  <!--      </p><br>-->
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>5 years of exp.
                                                Development field</li>
                                                <li>5 years in teaching
                                                    profession</li>
                                                    <li>5 years in microfinance
                                                        profession</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;
                    justify-content: center;
                    align-items: center;">
                        <article class="card my-3">
                            <img
                              class="card__background"
                              src="./assets/rarfincare logo.jpg"
                              alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                              
                            />
                            <div class="card__content | flow" style="text-align: left;">
                              <div class="card__content--container | flow">
                                <!-- <h2 class="card__title" style="color: white;">Dr. V. Senthil Nathan,MBA</h2>
                                <p class="card__description" style="color: white;">Honorary Doctorate
                                    from World Tamil
                                    University, USA
                                    Mentor/Ex-Officio
                                    board of Trustee /
                                    MD&CEO</p> -->
                              </div>
                              <button class="card__button" data-bs-toggle="modal" data-bs-target="#exampleModal10" style="margin-top: 10px;">Read more</button>
                            </div>
                          </article>
                          <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class=" row modal-body" style="display: flex;">
                                    <div class="col-lg-4 col-md-12 p-4">
                                        <img src="./assets/rarfincare logo.jpg" alt="" width="300" height="300">
                                    </div>
                                    <div class=" col-lg-8 col-md-12 p-4" style="text-align: left;">
                                        <h3 class="modal-title" id="exampleModalLabel">RARFINCARE</h3><br>
                                  <!-- <h5 class="modal-title" id="exampleModalLabel">Honorary Doctorate
                                    from World Tamil
                                    University, USA
                                    Mentor/Ex-Officio
                                    board of Trustee /
                                    MD&CEO</h5><br> -->
                                  <p>RAR Fincare Limited was incorporated on 9th July 2019 with a vision to become the most trustworthy financial services provider in the country. The company is being promoted by GRT group, which is a well-diversified conglomerate with interests in Jewelry, Hotels, Education, Real Estate, and Renewable Energy.</p><br>
                                    <p>RAR Fincare was founded to fulfill the credit needs of businesses (including MSMEs) and individuals in India by providing appropriate financial products. Towards achieving this objective, the company applied for and received a license from RBI to operate as an NBFC on 2nd February 2021.</p><br>
                                            <p>The company ensures customer-centricity and builds customer intimacy through the right mix of physical touchpoints, field staff, digital touchpoints, and vernacular promotions. It has drafted a comprehensive and well-equipped business strategy and implementation plan to streamline operations and to provide a high level of efficiency in services.</p><br>
                                            <!-- <div>
                                                <h5>Experience :</h5>
                                            <li>3 years in Indian Space
                                                Research Organisation,
                                                ISRO, Govt. of India</li>
                                                <li>5 years of development
                                                    exp</li>
                                                    <li>20 years in microfinance</li>
                                                    <li>5 years of secured
                                                        business HL/LAP,
                                                        TW/CD, Gold Loan,
                                                        MEL, PL</li>
                                                </div> -->
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
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