<!DOCTYPE html>
<html lang="en" class="scroll-smooth" dir="ltr">
  
<!-- Mirrored from themihub.com/html/morex-demo/morex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 02:30:24 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kevin Portfolio</title>
 
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&amp;family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300&amp;display=swap" rel="stylesheet">
    
     <!-- Plugins css -->
    <link rel="stylesheet" href="assets/css/mobilemenu.css" />
    <!-- <link rel="stylesheet" href="./assets/css/glightbox.min.css" /> -->
    <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/swiper%408/swiper-bundle.min.css"/>
    <!-- Tailwind css -->
    <link rel="stylesheet" href="assets/css/styles.css" />


    <script>
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
        document.documentElement.classList.add("dark");
      } 
      if (localStorage.getItem("theme-color") === "light") {
        document.documentElement.classList.remove("dark");
      } 
    </script>
  </head>
  <body class="font-rubik dark:bg-dark_primary_bg">

    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->

      <!-- Dark and light button start -->
      <div class="fixed ltr:right-0 rtl:left-0 top-[50%] translate-y-[-50%] z-50">
        <button class="bg-accent1 w-[50px] h-[50px] text-white flex justify-center items-center rounded-lg ltr:rounded-tr-none ltr:rounded-br-none rtl:rounded-tl-none rtl:rounded-bl-none" id="light__to--dark">
          <svg xmlns="http://www.w3.org/2000/svg" class="dark--mode__icon ionicon max-w-[25px] fill-white" viewBox="0 0 512 512"><title>Moon</title><path d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z"/></svg>
          
          <svg xmlns="http://www.w3.org/2000/svg" class="light--mode__icon ionicon max-w-[25px] fill-white" viewBox="0 0 512 512"><title>Sunny</title><path d="M256 118a22 22 0 01-22-22V48a22 22 0 0144 0v48a22 22 0 01-22 22zM256 486a22 22 0 01-22-22v-48a22 22 0 0144 0v48a22 22 0 01-22 22zM369.14 164.86a22 22 0 01-15.56-37.55l33.94-33.94a22 22 0 0131.11 31.11l-33.94 33.94a21.93 21.93 0 01-15.55 6.44zM108.92 425.08a22 22 0 01-15.55-37.56l33.94-33.94a22 22 0 1131.11 31.11l-33.94 33.94a21.94 21.94 0 01-15.56 6.45zM464 278h-48a22 22 0 010-44h48a22 22 0 010 44zM96 278H48a22 22 0 010-44h48a22 22 0 010 44zM403.08 425.08a21.94 21.94 0 01-15.56-6.45l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.55 37.56zM142.86 164.86a21.89 21.89 0 01-15.55-6.44l-33.94-33.94a22 22 0 0131.11-31.11l33.94 33.94a22 22 0 01-15.56 37.55zM256 358a102 102 0 11102-102 102.12 102.12 0 01-102 102z"/></svg>
        </button>
        
      </div>
      <!-- Dark and light button end -->

      <!-- Header area start -->
      <header class="absolute w-full left-0 top-0">
        <div class="header__sticky py-5">
          <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="logo">
                    <a href="index.html">
                      <img class="hidden dark:block" src="assets/images/logo-light.png" alt="">
                      <img class="dark:hidden" src="assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="flex items-center md:hidden">
                  <nav >
                      <ul class="flex items-center">
                          <li>
                            <a href="#home" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Home</a>
                          </li>
                          <li>
                            <a href="#about" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">About</a>
                          </li>
                          </li>
                          <li>
                            <a href="#services" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Services</a>
                          </li>
                          <li>
                            <a href="#portfolio" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Portfolio</a>
                          </li>
                          <li>
                            <a href="#blog" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Blog</a>
                          </li>
                          <li><a href="#contact" class="text-[17px] xl:text-[19px] text-primary dark:text-white font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300 ltr:ml-[26px] ltr:xl:ml-[44px] rtl:mr-[26px] rtl:xl:mr-[44px] relative after:absolute after:content-[''] after:h-[2px] after:w-0 after:bottom-[3px] ltr:after:left-0 rtl:after:right-0 after:transition-[.5s] after:bg-accent1 py-[8px] hover:after:w-full">Contact</a></li>
                      </ul> 
                  </nav>
                  <button class="flex bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center ltr:ml-[32px] rtl:mr-[32px] transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1]">
                    <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    </span>
                    <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">Download CV</span>
                  </button>
                </div>
                <div class="lg:hidden">
                  <button class="offcanvas__header--menu__open--btn text-primary dark:text-white " data-offcanvas>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                  </button>
                </div>
            </div>
        </div>
         <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header lg:hidden dark:bg-gray-800">
          <div class="offcanvas__inner">
              <div class="offcanvas__logo">
                  <a class="offcanvas__logo_link" href="index.html">
                      <img class="dark:hidden" src="assets/images/logo.png" alt="Grocee Logo" width="158" height="36">
                      <img class="hidden dark:block" src="assets/images/logo-light.png" alt="Grocee Logo" width="158" height="36">
                  </a>
                  <button class="offcanvas__close--btn dark:text-white" data-offcanvas>close</button>
              </div>
              <nav class="offcanvas__menu">
                  <ul class="offcanvas__menu_ul">
                      <li class="offcanvas__menu_li">
                          <a class="offcanvas__menu_item dark:text-white" href="#home">Home</a>
                      </li>
                      <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#about">About</a></li>
                      <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#services">Services</a></li>
                      <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#portfolio">Portfolio</a></li>
                      <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#blog">Blog</a></li>
                      <li class="offcanvas__menu_li"><a class="offcanvas__menu_item dark:text-white" href="#contact">Contact</a></li>
                  </ul>
                  <button class="flex mx-auto bg-accent1 lg:px-[15px] px-[12px] xl:py-[12px] py-[10px] rounded-[2rem] text-[16px] xl:text-[18px] font-medium text-white items-center transition duration-300 relative after:absolute :after:content-[''] after:bg-primary after:h-full after:w-full after:bottom-0 after:left-0 after:rounded-[2rem] after:trasition after:duration-300 after:opacity-0 hover:after:opacity-[1] mt-[30px]">
                    <span class="icon bg-[#EFEBEB] text-accent1 w-[34px] h-[34px] rounded-full flex items-center justify-center ltr:xl:mr-[15px] ltr:mr-[10px] rtl:xl:ml-[15px] rtl:ml-[10px] relative z-[8] flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    </span>
                    <span class="ltr:xl:pr-[5px] ltr:lg:pr-[5px] rtl:xl:pl-[5px] rtl:lg:pl-[5px] relative z-[8] flex-shrink-0">Download CV</span>
                  </button>
              </nav>
              
          </div>
        </div>
        <!-- End Offcanvas header menu -->
        </div>
        

      </header>
      <!-- Header area end -->

      <!-- Main wrapper start -->
      <main>
        <!-- Hero section start -->
        <section class="bg-cover bg-no-repeat bg-center sm:h-full only-md:h-screen lg:min-h-screen flex justify-center items-center overflow-hidden bg-[url('../images/hero-bg-img.png')] bg-[#DAEEF1] dark:bg-[url('../images/hero-bg-img-dark.png')] dark:bg-dark_primary_bg dark:border-b dark:border-dark_accent1" id="home">
            <div class="container mx-auto flex sm:flex-col items-center justify-center lg:mt-[40px] only-md:mt-[40px] sm:pt-[100px] sm:pb-[70px]">
                <div class="lg:max-w-[40%] sm:max-w-[60%] xs:max-w-[85%] only-md:max-w-[40%] flex justify-end">
                  <div class="relative only-xl:max-w-[70%]">
                      <img class="hidden dark:block" src="assets/images/hero-man-dark.png" alt="">
                      <img class="dark:hidden" src="assets/images/hero-man.png" alt="">
                      <span class="absolute top-[100px] lg:top-[210px] right-[-20px] only-md:right-[-10px] only-xl:max-w-[65px] lg:max-w-[80px] xl:max-w-[105px] sm:max-w-[50px] only-md:max-w-[70px] animateUpDown"><img src="assets/images/photoshop-logo.png" alt=""></span>
                      <span class="absolute top-[80px] left-[-40px] md:left-[-10px] only-xl:max-w-[65px] lg:max-w-[80px] xl:max-w-[105px] sm:max-w-[50px] only-md:max-w-[70px] animateUpDown"><img src="assets/images/figma.png" alt=""></span>

                      <div class="flex items-center absolute bottom-0 right-0 bg-white dark:bg-dark_accent1 rounded-[50px] px-[15px] py-[15px] shadow-[0_0_50px_0_rgba(196,206,213,0.2)] dark:shadow-[0_0_50px_0_rgba(0,0,0,0.2)]"> 
                        <div class="text-accent1 w-[45px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <div class="pl-[10px] pr-[15px]">
                            <span class="block text-[20px] lg:text-[26px] font-bold text-primary dark:text-white font-heebo leading-[1]">1100k+</span>
                            <span class="block text-paragraph dark:text-slate-200 text-[17px]">Completed projects</span>
                        </div>
                      </div>

                   </div>
                </div>
                <div class="ltr:xl:pl-[95px] ltr:lg:pl-[50px] ltr:only-md:pl-[40px] rtl:xl:pr-[95px] rtl:lg:pr-[50px] rtl:only-md:pr-[40px] flex-grow sm:mt-[30px] sm:text-center">
                  <span class="text-accent1 text-[24px] font-semibold italic pb-[5px]">HELLO  I'M</span>
                  <h2 class="lg:text-[60px] only-md:text-[40px] sm:text-[28px] font-bold font-heebo text-heading dark:text-white">Kevin Napit! </h2>
                  <h3 class="font-heebo font-normal text-primary dark:text-white">Web developer </h3>
                  <p class="lg:text-[20px] md:text-[16px] text-paragraph dark:text-slate-200 lg:mt-[18px] md:mt-[15px]">There are many variations of sum availabled <br> in alley of type and scrambled it some.</p>
                   <div class="flex items-center gap-[18px] flex-wrap mt-[30px] sm:justify-center">
                      <a href="#" class="btn outline-btn text-accent1 shrink-0">About Me</a>
                      <div class="flex items-center flex-wrap gap-[15px] sm:justify-center">
                        <span class="font-heebo lg:text-[22px] md:text-[18px] font-semibold shrink-0 text-primary dark:text-white">Follow Me: </span>
                        <div class="flex items-center">
                          <a href="#" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full">
                            <svg  fill="currentColor" stroke="currentColor" width="13" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                          </a>
                          <a href="#" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full ltr:ml-[10px] rtl:mr-[10px]">
                              <svg fill="currentColor" stroke="currentColor" width="13" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
                          </a>
                          <a href="#" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full ltr:ml-[10px] rtl:mr-[10px]">
                            <svg fill="currentColor" stroke="currentColor" width="13" height="14"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                          </a>
                          <a href="#" class="w-[30px] h-[30px] flex items-center justify-center text-accent1 border border-accent1 transition duration-300 hover:bg-accent1 hover:text-white rounded-full ltr:ml-[10px] rtl:mr-[10px]">                            
                            <svg fill="currentColor" stroke="currentColor" width="13" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                          </a>
                        </div>
                      </div>
                   </div>
                </div>
            </div>
        </section>
        <!-- Hero section end -->
        
        <!-- Services section start -->
        <section class="lg:py-[100px] md:py-[70px]" id="services">
            <div class="container mx-auto">
              <!-- Section title start -->
               <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
                    <div class="max-w-full lg:max-w-[580px]  w-full">
                      <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">CREATIVE SERVICE</span>
                      <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">What can i do for service clients you</h2>
                    </div>
                    <div class="md:grow">
                      <p class="text-[#636363] text-[17px] leading-[28px] lg:max-w-[472px] w-full dark:text-slate-200">Promote your blog posts, case udie, and product ouncems
                        with the the branded videoscustomers coming back for
                        services Makes best effort.</p>
                    </div>
               </div>
              <!-- Section title end -->

              <!-- Services list start -->
              <div class="grid gap-[30px] lg:grid-cols-3 grid-cols-1 only-md:grid-cols-2">

                    <!-- Single service start -->
                    <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                        <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                          <span class="bg-[#48CDA0] text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-[#79DAB9] before:opacity-[0.26]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                          
                          </span>
                          <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Web Development</h3>
                          <p class="text-[17px] text-[#636363] dark:text-slate-200">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                          <a href="#" class="link-button text-[#48CDA0] before:bg-[#48CDA0] mt-[15px] hover:text-[#333] dark:hover:text-white">Read More</a>
                        </div>
                    </div>
                    <!-- Single service end -->
                    
                    <!-- Single service start -->
                    <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                        <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                          <span class="bg-[#ED5F38] text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-[#ED5F38] before:opacity-[0.16]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-life-buoy"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line><line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line></svg>
                            
                          </span>
                          <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Creative Design</h3>
                          <p class="text-[17px] text-[#636363] dark:text-slate-200">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                          <a href="#" class="link-button text-[#ED5F38] before:bg-[#ED5F38] mt-[15px] hover:text-[#333] dark:hover:text-white">Read More</a>
                        </div>
                    </div>
                    <!-- Single service end -->

                    <!-- Single service start -->
                    <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                        <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                          <span class="bg-[#007EFF] text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-[#007EFF] before:opacity-[0.16]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                          </span>
                          <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Project Consultancy</h3>
                          <p class="text-[17px] text-[#636363] dark:text-slate-200">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                          <a href="#" class="link-button text-[#007EFF] before:bg-[#007EFF] mt-[15px] hover:text-[#333] dark:hover:text-white">Read More</a>
                        </div>
                    </div>
                    <!-- Single service end -->


                    <!-- Single service start -->
                    <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                        <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                          <span class="bg-[#E6BC13] text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-[#E6BC13] before:opacity-[0.22]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-headphones"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
                          </span>
                          <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">24/7 Support</h3>
                          <p class="text-[17px] text-[#636363] dark:text-slate-200">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                          <a href="#" class="link-button text-[#E6BC13] before:bg-[#E6BC13] mt-[15px] hover:text-[#333] dark:hover:text-white">Read More</a>
                        </div>
                    </div>
                    <!-- Single service end -->

                    

                    <!-- Single service start -->
                    <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                        <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                          <span class="bg-[#ED38D1] text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-[#ED38D1] before:opacity-[0.16]">
                            <svg width="40" height="40" stroke="currentColor" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2l0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4l0 0c19.8 27.1 39.7 54.4 49.2 86.2H272zM192 512c44.2 0 80-35.8 80-80V416H112v16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z"/></svg>
                          </span>
                          <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Awesome Idea</h3>
                          <p class="text-[17px] text-[#636363] dark:text-slate-200">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                          <a href="#" class="link-button text-[#ED38D1] before:bg-[#ED38D1] mt-[15px] hover:text-[#333] dark:hover:text-white">Read More</a>
                        </div>
                    </div>
                    <!-- Single service end -->

                    
                      <!-- Single service start -->
                      <div class="shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_150px_0_rgba(196,206,213,0.7)]  dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] hover:translate-y-[-10px] transition duration-500">
                        <div class="overflow-hidden px-[30px] xl:px-[40px] lg:pt-[50px] md:pt-[40px] pb-[40px] ">
                          <span class="bg-[#A348CD] text-white w-[70px] h-[70px] lg:w-[93px] lg:h-[93px] flex items-center justify-center rounded-full service-shape before:bg-[#A348CD] before:opacity-[0.16]">
                            <svg width="40" height="40" stroke="currentColor" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zm288 32c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32z"/></svg>
                          </span>
                          <h3 class="text-primary dark:text-white text-[20px] xl:text-[25px] font-bold font-heebo mt-[20px] mb-[15px]">Development Design</h3>
                          <p class="text-[17px] text-[#636363] dark:text-slate-200">Promote your blog posts, case udie, and product ouncems nts with the the branded videos.</p>
                          <a href="#" class="link-button text-[#A348CD] before:bg-[#A348CD] mt-[15px] hover:text-[#333] dark:hover:text-white">Read More</a>
                        </div>
                    </div>
                    <!-- Single service end -->

              </div>
              <!-- Services list end -->

            </div>
        </section>
        <!-- Services section end -->

        <!-- About me section start -->
        <section class="bg-cover bg-no-repeat bg-center bg-[url('../images/about-me-bg.png')] bg-[#ECF1F6] dark:bg-dark_primary_bg dark:bg-none py-[70px] lg:py-[100px] dark:border-t dark:border-b dark:border-dark_accent1" id="about">
          <div class="container mx-auto">
              <div class="flex justify-between sm:flex-wrap sm:flex-col-reverse">
                  <div class="w-full lg:max-w-[550px]">
                      <div>
                        <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">Tentang Saya</span>
                        <h2 class="text-[24px] only-md:text-[32px] lg:text-[48px] font-bold font-heebo leading-[36px] lg:leading-[58px] text-[#000248] dark:text-white ltr:lg:pr-[50px] rtl:lg:pl-[50px]">I can design world for leading ui/ux</h2>
                      </div>
                      <div class="mt-[30px]">
                        <h3 class="text-accent1 text-[20px] lg:text-[24px] font-medium ">PERSONAL INFOS:</h3>
                        <ul class="flex justify-between flex-wrap mt-[18px]">
                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">First Name: Kevin</li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Last Name: Napit</li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Address: Siborongborong</li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Phone: +6282275339157</li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Age: 19 Years</li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Email: kevinphy92@mail.com</li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Nationality: Indonesian</li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Skype: Roben.Boris</li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Freelance: Available</li>

                          <li class="text-paragraph dark:text-slate-200 w-full xs:max-w-[100%]  max-w-[50%] ltr:pl-[18px] rtl:pr-[18px] my-[10px] relative before:absolute before:content-[''] before:bg-accent1 before:w-[6px] before:h-[6px] ltr:before:left-0 rtl:before:right-0 before:top-[8px] before:rounded-full after:absolute after::content-[''] after:w-4 after:h-4 after:border-2 after:border-accent1 ltr:after:left-[-5px] rtl:after:right-[-5px] after:top-[3px] after:border-solid after:rounded-full text-[17px]">Languages: Bahasa, English</li>
                        </ul>
                        <a href="#" class="btn solid-btn text-accent1 mt-[35px] inline-block">Hire Me</a>
                      </div>
                  </div>
                  <div class="sm:mb-[50px]">
                      <div class="relative">
                        <img class="relative z-10 sm:mx-auto" src="assets/images/about-me.png" alt="">
                        <span class="absolute sm:w-[100px] sm:h-[100px] only-md:w-[150px] only-md:h-[150px] lg:w-[200px] lg:h-[200px] xl:w-[250px] xl:h-[250px] border-[8px] lg:border-[13px] border-accent1 rounded-full xs:bottom-[-25%] sm:bottom-[-12%] bottom-[-18%] ltr:sm:left-[3%] ltr:left-[-18%] rtl:sm:right-[3%] rtl:right-[-18%] animateUpDown"></span>
                      </div>
                      <div class="text-center mt-[30px]">
                        <h4 class="font-heebo text-[50px] lg:text-[80px] font-bold leading-[1] text-white title-stroke">27+</h4>
                         <span class="font-bold sm:text-[20px] only-md:text-[24px] lg:text-[30px] font-heebo text-primary dark:text-white">Experience Working</span>
                      </div>
                  </div>
              </div>
          </div>
        </section>
        <!-- About me section end -->

        <!-- Logo list section start -->
        <section class="py-[70px] lg:py-[100px] border-b-[1px] border-[#DDDDDD] dark:border-dark_accent1">
          <div class="container mx-auto">
             <div class="relative">
                <div class="w-full absolute h-[1px] bg-[#DDDDDD] top-[50%] translate-y-[-50%] ltr:left-0 rtl:right-0 2xs:hidden"></div>
                <div class="flex flex-wrap">
                  <div class="max-w-[25%] 2xs:max-w-[50%] w-full ltr:border-r-[1px] rtl:border-l-[1px] border-[#DDDDDD] dark:border-dark_accent1 client__logo--padding">
                    <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                      <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="assets/images/logo/1.png" alt="">
                      <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="assets/images/logo/dark-log-1.png" alt="">
                    </div>
                    <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                      <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="assets/images/logo/2.png" alt="">
                      <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="assets/images/logo/dark-log-2.png" alt="">
                    </div>
                  </div>

                  <div class="max-w-[25%] 2xs:max-w-[50%] w-full ltr:border-r-[1px] rtl:border-l 2xs:border-none border-[#DDDDDD] dark:border-dark_accent1 client__logo--padding">
                    <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                      <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="assets/images/logo/3.png" alt="">
                      <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="assets/images/logo/dark-log-3.png" alt="">
                    </div>
                    <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                      <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="assets/images/logo/4.png" alt="">
                      <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="assets/images/logo/dark-log-4.png" alt="">
                    </div>
                  </div>
                  
                  <div class="max-w-[25%] 2xs:max-w-[50%] w-full ltr:border-r-[1px] rtl:border-l border-[#DDDDDD] client__logo--padding dark:border-dark_accent1">
                    <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                      <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="assets/images/logo/5.png" alt="">
                      <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="assets/images/logo/dark-log-5.png" alt="">
                    </div>
                    <div class="w-full client__logo--padding--inner">
                      <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="assets/images/logo/6.png" alt="">
                      <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="assets/images/logo/dark-log-6.png" alt="">
                    </div>
                  </div>
                  
                  <div class="max-w-[25%] 2xs:max-w-[50%] w-full client__logo--padding">
                    <div class="w-full client__logo--padding--inner 2xs:border-b-[1px] 2xs:border-[#DDDDDD] dark:2xs:border-dark_accent1">
                      <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="assets/images/logo/7.png" alt="">
                      <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="assets/images/logo/dark-log-7.png" alt="">
                    </div>
                    <div class="w-full client__logo--padding--inner">
                      <img class="mx-auto opacity-[0.7] hover:opacity-[1] transition duration-300 dark:hidden" src="assets/images/logo/8.png" alt="">
                      <img class="mx-auto grayscale hover:grayscale-0 transition duration-300 dark:block hidden" src="assets/images/logo/dark-log-8.png" alt="">
                    </div>
                  </div>                  

                </div>
             </div>
          </div>
        </section>
        <!-- Logo list section end -->


        <!--  Resume section start -->
        <section class="lg:py-[100px] md:py-[70px]">
          <div class="container mx-auto">
            <!-- Section title start -->
             <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
                  <div class="max-w-full lg:max-w-[575px]  w-full">
                    <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">EXPERICNCE AND EDUCATION</span>
                    <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">Resume of Experience
                      and Education
                      </h2>
                  </div>
                  <div class="md:grow">
                    <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">Promote your blog posts, case udie, and product ouncems
                      with the the branded videoscustomers coming back for services Makes best effort.</p>
                  </div>
             </div>
            <!-- Section title end -->

            <!-- Resume wrapper start -->
            <div class="flex flex-wrap">

              <!-- Skill -->
              <div class="w-full max-w-[50%] sm:max-w-full flex-grow">
                  <div class="relative ltr:pl-[30px] rtl:pr-[30px]">
                      <!-- border line -->
                      <div class="absolute w-[1px] ltr:left-0 rtl:right-0 top-[10px] bottom-[5px] bg-accent1"></div>
                      <!-- border line  end-->

                      <!-- Single resume start -->
                      <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white flex items-center rounded-full justify-center">
                            <svg width="25" height="40" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/></svg>
                          </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">API DEVELOPER</h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">Shopify</span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">Promote your blog posts, case udie, and product ouncems nts with thehe branded videos.</p>
                          <span class="text-[17px] font-medium text-accent1 relative ltr:pl-[20px] rtl:pr-[20px] before:absolute before:bg-accent1 before:w-[7px] before:h-[7px] ltr:before:left-0 rtl:before:right-0 before:top-[50%] before:translate-y-[-50%] mt-[20px] block">2021</span>
                        </div>
                    </div>
                    <!-- Single resume end -->

                    <!-- Single resume start -->
                    <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative mt-[40px]">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white flex items-center rounded-full justify-center">
                            <svg width="25" height="40" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/></svg>
                          </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">WEB DEVELOPER</h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">Envato</span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">Promote your blog posts, case udie, and product ouncems nts with thehe branded videos.</p>
                          <span class="text-[17px] font-medium text-accent1 relative ltr:pl-[20px] rtl:pr-[20px] before:absolute before:bg-accent1 before:w-[7px] before:h-[7px] ltr:before:left-0 rtl:before:right-0 before:top-[50%] before:translate-y-[-50%] mt-[20px] block">2017</span>
                        </div>
                    </div>
                    <!-- Single resume end -->

                    <!-- Single resume start -->
                    <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative mt-[40px]">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white flex items-center rounded-full justify-center">
                            <svg width="25" height="40" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z"/></svg>
                          </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">UI/UX DESIGNER</h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">Udemy</span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">Promote your blog posts, case udie, and product ouncems nts with thehe branded videos.</p>
                          <span class="text-[17px] font-medium text-accent1 relative ltr:pl-[20px] rtl:pr-[20px] before:absolute before:bg-accent1 before:w-[7px] before:h-[7px] ltr:before:left-0 rtl:before:right-0 before:top-[50%] before:translate-y-[-50%] mt-[20px] block">2014</span>
                        </div>
                    </div>
                    <!-- Single resume end -->
                  </div>
              </div>
              <!-- Skill -->

              <!-- Education -->
              <div class="w-full max-w-[50%] sm:max-w-full flex-grow  sm:mt-[40px]">
                <div class="relative ltr:pl-[30px] rtl:pr-[30px]">
                      <!-- border line -->
                      <div class="absolute w-[1px] ltr:left-0 rtl:right-0 top-[10px] bottom-[5px] bg-accent1"></div>
                      <!-- border line  end-->

                       <!-- Single resume start -->
                       <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white flex items-center rounded-full justify-center">
                            <svg width="25" height="44" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/></svg>
                          </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">Software Engineer</h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">Cambridge UNIVERSITY</span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">Promote your blog posts, case udie, and product ouncems nts with thehe branded videos.</p>
                          <span class="text-[17px] font-medium text-accent1 relative ltr:pl-[20px] rtl:pr-[20px] before:absolute before:bg-accent1 before:w-[7px] before:h-[7px] ltr:before:left-0 rtl:before:right-0 before:top-[50%] before:translate-y-[-50%] mt-[20px] block">2020</span>
                        </div>
                        </div>
                        <!-- Single resume end -->

                        <!-- Single resume start -->
                        <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative mt-[40px]">
                          <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                          <div class="w-[70px] h-[70px]">
                            <span class="w-[50px] h-[50px] bg-accent1 text-white flex items-center rounded-full justify-center">
                              <svg width="25" height="44" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/></svg>
                            </span>
                          </div>
                          <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                              <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                                <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">Master's Degree</h3>
                                <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">OXFORD UNIVERSITY</span>
                              </div>
                              <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">Promote your blog posts, case udie, and product ouncems nts with thehe branded videos.</p>
                            <span class="text-[17px] font-medium text-accent1 relative ltr:pl-[20px] rtl:pr-[20px] before:absolute before:bg-accent1 before:w-[7px] before:h-[7px] ltr:before:left-0 rtl:before:right-0 before:top-[50%] before:translate-y-[-50%] mt-[20px] block">2018</span>
                          </div>
                      </div>
                      <!-- Single resume end -->

                      <!-- Single resume start -->
                      <div class="flex ltr:pr-[50px] ltr:sm:pr-[0] ltr:lg:pr-[70px rtl:pl-[50px] rtl:sm:pl-[0] rtl:lg:pl-[70px relative mt-[40px]">
                        <span class="absolute w-[20px] h-[20px] ltr:left-[-40px] rtl:right-[-40px] top-[10px] bg-accent1 rounded-full z-10 before:absolute before:bg-white before:w-[16px] before:h-[16px] before:rounded-full ltr:before:left-[2px] rtl:before:right-[2px] before:top-[2px]"></span>
                        <div class="w-[70px] h-[70px]">
                          <span class="w-[50px] h-[50px] bg-accent1 text-white flex items-center rounded-full justify-center">
                            <svg width="25" height="44" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/></svg>
                          </span>
                        </div>
                        <div class="flex-grow ltr:pl-[15px] rtl:pr-[15px]">
                            <div class="flex items-center only-md:flex-col only-md:items-start 2xs:flex-col 2xs:items-start">
                              <h3 class="font-heebo 2xs:text-[18px] text-[20px] lg:text-[25px] text-primary dark:text-white">Bachelor's Degree</h3>
                              <span class="bg-accent1 text-white text-[13px] rounded-[30px] px-[15px] py-[5px] uppercase ltr:ml-[15px] rtl:mr-[15px] ltr:only-md:ml-0 only-md:my-[5px] ltr:2xs:ml-0 rtl:only-md:m-0 rtl:2xs:mr-0 2xs:my-[5px] text-center">KIEV UNIVERSITY</span>
                            </div>
                            <p class="text-paragraph dark:text-slate-200 mt-[10px] text-[17px]">Promote your blog posts, case udie, and product ouncems nts with thehe branded videos.</p>
                          <span class="text-[17px] font-medium text-accent1 relative ltr:pl-[20px] rtl:pr-[20px] before:absolute before:bg-accent1 before:w-[7px] before:h-[7px] ltr:before:left-0 rtl:before:right-0 before:top-[50%] before:translate-y-[-50%] mt-[20px] block">2015</span>
                        </div>
                    </div>
                    <!-- Single resume end -->

                  </div>
              </div>
              <!-- Education -->
            </div>
            <!-- Resume wrapper end -->
          </div>
        </section>
        <!--  Resume section end -->

         <!--  Skill section start -->
        <section class="lg:pb-[100px] md:pb-[70px]">
          <div class="container mx-auto">
            <!-- Section title start -->
              <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
                  <div class="max-w-full lg:max-w-[575px]  w-full">
                    <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">SKILLs</span>
                    <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">Skill of Best Masters
                      Software Skills.
                      </h2>
                  </div>
                  <div class="md:grow">
                    <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">Promote your skills, case studies, and product ouncems
                      with the the branded videoscustomers coming back for services Makes best effort.</p>
                  </div>
              </div>
            <!-- Section title end -->

            <!-- Resume wrapper start -->
            <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] md:flex-wrap md:text-center">

                <!-- Column start -->
                <div class="max-w-full lg:max-w-[472px]  w-full only-md:px-7 sm:px-5">

                  <!-- Single skill start -->
                  <div class="relative mb-7">
                    <div class="flex justify-between mb-1">
                      <span class="text-lg font-medium text-primary dark:text-white">Node.js</span>
                      <span class="text-xs font-medium text-white bg-accent1 dark:text-white absolute py-1.5 px-1.5 bottom-6 rounded-sm before:absolute before:content-[''] before:bg-accent1 before:w-5 before:h-5 before:clip-polygon before:top-4 ltr:before:left-2 rtl:before:right-2 before:-z-10 ltr:left-[calc(60%_-_20px)] rtl:right-[calc(60%_-_20px)]">60%</span>
                    </div>
                  <div class="w-full bg-gray-200 rounded-full h-[10px] dark:bg-gray-700 flex items-center">
                        <div class="bg-accent1 h-[6px] rounded-full mx-[2px]" style="width: 60%"></div>
                    </div>
                  </div>
                  <!-- Single skill end -->

                  <!-- Single skill start -->
                  <div class="relative mb-7">
                    <div class="flex justify-between mb-1">
                      <span class="text-lg font-medium text-primary dark:text-white">JavaScript</span>
                      <span class="text-xs font-medium text-white bg-accent1 dark:text-white absolute py-1.5 px-1.5 bottom-6 rounded-sm before:absolute before:content-[''] before:bg-accent1 before:w-5 before:h-5 before:clip-polygon before:top-4 before:left-2 before:-z-10 ltr:left-[calc(75%_-_20px)] rtl:right-[calc(75%_-_20px)]">75%</span>
                    </div>
                  <div class="w-full bg-gray-200 rounded-full h-[10px] dark:bg-gray-700 flex items-center">
                        <div class="bg-accent1 h-[6px] rounded-full mx-[2px]" style="width: 75%"></div>
                    </div>
                  </div>
                  <!-- Single skill end -->

                  <!-- Single skill start -->
                  <div class="relative">
                    <div class="flex justify-between mb-1">
                      <span class="text-lg font-medium text-primary dark:text-white">Web Design</span>
                      <span class="text-xs font-medium text-white bg-accent1 dark:text-white absolute py-1.5 px-1.5 bottom-6 rounded-sm before:absolute before:content-[''] before:bg-accent1 before:w-5 before:h-5 before:clip-polygon before:top-4 before:left-2 before:-z-10 ltr:left-[calc(90%_-_20px)] rtl:right-[calc(90%_-_20px)]">90%</span>
                    </div>
                  <div class="w-full bg-gray-200 rounded-full h-[10px] dark:bg-gray-700 flex items-center">
                        <div class="bg-accent1 h-[6px] rounded-full mx-[2px]" style="width: 90%"></div>
                    </div>
                  </div>
                  <!-- Single skill end -->

                </div>
                <!-- Column end -->

                <!-- Column start -->
                <div class="max-w-full lg:max-w-[472px] w-full only-md:px-7 sm:px-5">
                    <!-- Single skill start -->
                    <div class="relative mb-7">
                    <div class="flex justify-between mb-1">
                      <span class="text-lg font-medium text-primary dark:text-white">HTML</span>
                      <span class="text-xs font-medium text-white bg-accent1 dark:text-white absolute py-1.5 px-1.5 bottom-6 rounded-sm before:absolute before:content-[''] before:bg-accent1 before:w-5 before:h-5 before:clip-polygon before:top-4 before:left-2 before:-z-10 ltr:left-[calc(100%_-_30px)] rtl:right-[calc(100%_-_30px)]">100%</span>
                    </div>
                  <div class="w-full bg-gray-200 rounded-full h-[10px] dark:bg-gray-700 flex items-center">
                        <div class="bg-accent1 h-[6px] rounded-full mx-[2px]" style="width: 100%"></div>
                    </div>
                  </div>
                  <!-- Single skill end -->

                  <!-- Single skill start -->
                  <div class="relative mb-7">
                    <div class="flex justify-between mb-1">
                      <span class="text-lg font-medium text-primary dark:text-white">CSS</span>
                      <span class="text-xs font-medium text-white bg-accent1 dark:text-white absolute py-1.5 px-1.5 bottom-6 rounded-sm before:absolute before:content-[''] before:bg-accent1 before:w-5 before:h-5 before:clip-polygon before:top-4 before:left-2 before:-z-10 ltr:left-[calc(90%_-_20px)] rtl:right-[calc(90%_-_20px)]">90%</span>
                    </div>
                  <div class="w-full bg-gray-200 rounded-full h-[10px] dark:bg-gray-700 flex items-center">
                        <div class="bg-accent1 h-[6px] rounded-full mx-[2px]" style="width: 90%"></div>
                    </div>
                  </div>
                  <!-- Single skill end -->

                  <!-- Single skill start -->
                  <div class="relative">
                    <div class="flex justify-between mb-1">
                      <span class="text-lg font-medium text-primary dark:text-white">React.js</span>
                      <span class="text-xs font-medium text-white bg-accent1 dark:text-white absolute py-1.5 px-1.5 bottom-6 rounded-sm before:absolute before:content-[''] before:bg-accent1 before:w-5 before:h-5 before:clip-polygon before:top-4 before:left-2 before:-z-10 ltr:left-[calc(70%_-_20px)] rtl:right-[calc(70%_-_20px)]">70%</span>
                    </div>
                  <div class="w-full bg-gray-200 rounded-full h-[10px] dark:bg-gray-700 flex items-center">
                        <div class="bg-accent1 h-[6px] rounded-full mx-[2px]" style="width: 70%"></div>
                    </div>
                  </div>
                  <!-- Single skill end -->
                </div>
                <!-- Column end -->
              
            </div>
            <!-- Resume wrapper end -->
          </div>
        </section>
        <!--  Skill section end -->


        <!-- Portfolio section start -->
        <section class="bg-[#EFF3F7] dark:bg-dark_primary_bg pt-[70px] lg:pt-[100px] pb-[40px] lg:pb-[70px] dark:border-t dark:border-b dark:border-dark_accent1" id="portfolio">
          <div class="container mx-auto">
            <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
                 <div class="max-w-full lg:max-w-[580px]  w-full">
                   <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">PORTFOLIO</span>
                   <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">Never compromise for 
                    portfolio quality
                    </h2>
                 </div>
                 <div class="md:grow">
                   <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">Promote your blog posts, case udie, and product ouncems
                     with the the branded videoscustomers coming back for
                     services Makes best effort.</p>
                 </div>
            </div>
            
            <!-- Filter portfolio start -->
            <div class="isotope--filter">
              <div class="button-group filters-button-group flex justify-center flex-wrap gap-[30px]">
                <button class="button is-checked text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300" data-filter="*">Show All</button>
                <button class="button text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300" data-filter=".web">Web</button>
                <button class="button text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300" data-filter=".graphics">Graphics</button>
                <button class="button text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300" data-filter=".development">Development</button>
                <button class="button text-primary dark:text-white text-[18px] capitalize font-medium hover:text-accent1 dark:hover:text-accent1 transition duration-300" data-filter=".mobile">Mobile</button>
              </div>
              <div class="portfolio__grid flex mt-[50px] mx-[-15px]">
                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] web portfolio__parent" data-category="web">
                   <div class="relative overflow-hidden">
                      <a href="#" class="popup-modal--open">
                        <span class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                          <div class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                            <span class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            </span>
                            <h3 class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">Illustration</h3>
                            <span class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">Promote your blog posts, case udie, and thehe branded videos.</span>
                          </div>
                        </span>
                        <div class="w-full portfolio__image--card">
                          <img class="w-full transition duration-300" src="assets/images/portfolio/1.png" alt="">
                        </div>
                      </a>
                      <!-- Portfolio popup start -->
                      <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                        <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                        <!-- Modal content -->
                        <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                            <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                              <button class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                              <h2 class="text-accent1 text-center font-bold">
                                Illustration Project
                              </h2>
                              <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                  <div class="space-y-2">
                                      <p class="dark:text-white flex items-center">
                                          <span class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                          </span>
                                          Project :&nbsp;
                                          <span class="font-medium"> Website</span>
                                      </p>
                                      <p class="dark:text-white flex items-center">
                                          <span class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                          </span>
                                          Languages :&nbsp;
                                          <span class="font-medium">Photoshop, Illustration</span>
                                      </p>
                                  </div>

                                  <div class="space-y-2">
                                      <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                          <span class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                          </span>
                                          Client :&nbsp; <span class="font-medium">Envato</span>
                                      </p>
                                      <p class="dark:text-white flex items-center">
                                          <span class="mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                          </span>
                                          Preview :&nbsp;
                                          <span class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                              <a href="https://www.envato.com/" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                                          </span>
                                      </p>
                                  </div>
                              </div>

                              <p class="dark:text-white font-normal text-[17px]">
                                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                  Mollitia placeat magnam possimus iusto blanditiis pariatur
                                  labore explicabo quo repellat hic dolorum numquam
                                  asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                  odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                  quidem! Quas magni distinctio dolorum dolore natus, vel
                                  numquam accusamus. Nostrum eligendi recusandae qui tempore
                                  deserunt!
                              </p>
                              <div class="pr-3">
                                  <img class="max-w-full h-auto rounded-xl mt-6 mx-auto" src="assets/images/portfolio/big-1.png" alt="portfolio image">
                              </div>
                          </div>
                        </div>
                      </div>
                      <!-- Portfolio popup end -->
                  </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] graphics portfolio__parent" data-category="graphics">
                   <div class="relative overflow-hidden">
                    <a href="#" class="popup-modal--open">
                        <span class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                          <div class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                            <span class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            </span>
                            <h3 class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">React</h3>
                            <span class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">Promote your blog posts, case udie, and thehe branded videos.</span>
                          </div>
                        </span>
                        <div class="w-full portfolio__image--card">
                          <img class="w-full transition duration-300" src="assets/images/portfolio/2.png" alt="">
                        </div>
                    </a>

                     <!-- Portfolio popup start -->
                     <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                      <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                      <!-- Modal content -->
                      <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                          <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                            <button class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                            <h2 class="text-accent1 text-center font-bold">
                              React Project
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        </span>
                                        Project :&nbsp;
                                        <span class="font-medium"> Website</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                        </span>
                                        Languages :&nbsp;
                                        <span class="font-medium">Photoshop, Illustration</span>
                                    </p>
                                </div>

                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                        Client :&nbsp; <span class="font-medium">Envato</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                        </span>
                                        Preview :&nbsp;
                                        <span class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                            <a href="https://www.envato.com/" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <p class="dark:text-white font-normal text-[17px]">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Mollitia placeat magnam possimus iusto blanditiis pariatur
                                labore explicabo quo repellat hic dolorum numquam
                                asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                quidem! Quas magni distinctio dolorum dolore natus, vel
                                numquam accusamus. Nostrum eligendi recusandae qui tempore
                                deserunt!
                            </p>
                            <div class="pr-3">
                                <img class="max-w-full h-auto rounded-xl mt-6 mx-auto" src="assets/images/portfolio/big-2.png" alt="portfolio image">
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Portfolio popup end -->
                  </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] development portfolio__parent" data-category="development">
                   <div class="relative overflow-hidden">
                    <a href="#" class="popup-modal--open">
                        <span class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                          <div class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                            <span class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            </span>
                            <h3 class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">Next JS</h3>
                            <span class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">Promote your blog posts, case udie, and thehe branded videos.</span>
                          </div>
                        </span>
                        <div class="w-full portfolio__image--card">
                          <img class="w-full transition duration-300" src="assets/images/portfolio/3.png" alt="">
                        </div>
                      </a>
                    <!-- Portfolio popup start -->
                    <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                      <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                      <!-- Modal content -->
                      <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                          <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                            <button class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                            <h2 class="text-accent1 text-center font-bold">
                              Nextjs Project
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        </span>
                                        Project :&nbsp;
                                        <span class="font-medium"> Website</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                        </span>
                                        Languages :&nbsp;
                                        <span class="font-medium">Photoshop, Illustration</span>
                                    </p>
                                </div>

                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                        Client :&nbsp; <span class="font-medium">Envato</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                        </span>
                                        Preview :&nbsp;
                                        <span class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                            <a href="https://www.envato.com/" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <p class="dark:text-white font-normal text-[17px]">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Mollitia placeat magnam possimus iusto blanditiis pariatur
                                labore explicabo quo repellat hic dolorum numquam
                                asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                quidem! Quas magni distinctio dolorum dolore natus, vel
                                numquam accusamus. Nostrum eligendi recusandae qui tempore
                                deserunt!
                            </p>
                            <div class="pr-3">
                                <img class="max-w-full h-auto rounded-xl mt-6 mx-auto" src="assets/images/portfolio/big-3.png" alt="portfolio image">
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Portfolio popup end -->
                  </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] mobile portfolio__parent" data-category="mobile">
                   <div class="relative overflow-hidden">
                    <a href="#" class="popup-modal--open">
                        <span class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                          <div class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                            <span class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            </span>
                            <h3 class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">Android  Development</h3>
                            <span class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">Promote your blog posts, case udie, and thehe branded videos.</span>
                          </div>
                        </span>
                        <div class="w-full portfolio__image--card">
                          <img class="w-full transition duration-300" src="assets/images/portfolio/4.png" alt="">
                        </div>
                      </a>

                    <!-- Portfolio popup start -->
                    <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                      <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                      <!-- Modal content -->
                      <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                          <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                            <button class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                            <h2 class="text-accent1 text-center font-bold">
                              Android  Development
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        </span>
                                        Project :&nbsp;
                                        <span class="font-medium"> Website</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                        </span>
                                        Languages :&nbsp;
                                        <span class="font-medium">Photoshop, Illustration</span>
                                    </p>
                                </div>

                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                        Client :&nbsp; <span class="font-medium">Envato</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                        </span>
                                        Preview :&nbsp;
                                        <span class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                            <a href="https://www.envato.com/" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <p class="dark:text-white font-normal text-[17px]">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Mollitia placeat magnam possimus iusto blanditiis pariatur
                                labore explicabo quo repellat hic dolorum numquam
                                asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                quidem! Quas magni distinctio dolorum dolore natus, vel
                                numquam accusamus. Nostrum eligendi recusandae qui tempore
                                deserunt!
                            </p>
                            <div class="pr-3">
                                <img class="max-w-full h-auto rounded-xl mt-6 mx-auto" src="assets/images/portfolio/big-4.png" alt="portfolio image">
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Portfolio popup end -->
                  </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] graphics portfolio__parent" data-category="graphics">
                   <div class="relative overflow-hidden">
                    <a href="#" class="popup-modal--open">
                        <span class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                          <div class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                            <span class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            </span>
                            <h3 class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">APP  Development</h3>
                            <span class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">Promote your blog posts, case udie, and thehe branded videos.</span>
                          </div>
                        </span>
                        <div class="w-full portfolio__image--card">
                          <img class="w-full transition duration-300" src="assets/images/portfolio/5.png" alt="">
                        </div>
                      </a>

                    <!-- Portfolio popup start -->
                    <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                      <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                      <!-- Modal content -->
                      <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                          <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                            <button class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                            <h2 class="text-accent1 text-center font-bold">
                              App Development
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        </span>
                                        Project :&nbsp;
                                        <span class="font-medium"> Website</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                        </span>
                                        Languages :&nbsp;
                                        <span class="font-medium">Photoshop, Illustration</span>
                                    </p>
                                </div>

                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                        Client :&nbsp; <span class="font-medium">Envato</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                        </span>
                                        Preview :&nbsp;
                                        <span class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                            <a href="https://www.envato.com/" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <p class="dark:text-white font-normal text-[17px]">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Mollitia placeat magnam possimus iusto blanditiis pariatur
                                labore explicabo quo repellat hic dolorum numquam
                                asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                quidem! Quas magni distinctio dolorum dolore natus, vel
                                numquam accusamus. Nostrum eligendi recusandae qui tempore
                                deserunt!
                            </p>
                            <div class="pr-3">
                                <img class="max-w-full h-auto rounded-xl mt-6 mx-auto" src="assets/images/portfolio/big-5.png" alt="portfolio image">
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Portfolio popup end -->
                  </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] web development portfolio__parent" data-category="development">
                   <div class="relative overflow-hidden">
                    <a href="#" class="popup-modal--open">
                        <span class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                          <div class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                            <span class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            </span>
                            <h3 class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">Photoshop</h3>
                            <span class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">Promote your blog posts, case udie, and thehe branded videos.</span>
                          </div>
                        </span>
                        <div class="w-full portfolio__image--card">
                          <img class="w-full transition duration-300" src="assets/images/portfolio/6.png" alt="">
                        </div>
                      </a>
                      <!-- Portfolio popup start -->
                    <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                      <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                      <!-- Modal content -->
                      <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                          <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                            <button class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                            <h2 class="text-accent1 text-center font-bold">
                              Photoshop Design
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        </span>
                                        Project :&nbsp;
                                        <span class="font-medium"> Website</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                        </span>
                                        Languages :&nbsp;
                                        <span class="font-medium">Photoshop, Illustration</span>
                                    </p>
                                </div>

                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                        Client :&nbsp; <span class="font-medium">Envato</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                        </span>
                                        Preview :&nbsp;
                                        <span class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                            <a href="https://www.envato.com/" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <p class="dark:text-white font-normal text-[17px]">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Mollitia placeat magnam possimus iusto blanditiis pariatur
                                labore explicabo quo repellat hic dolorum numquam
                                asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                quidem! Quas magni distinctio dolorum dolore natus, vel
                                numquam accusamus. Nostrum eligendi recusandae qui tempore
                                deserunt!
                            </p>
                            <div class="pr-3">
                                <img class="max-w-full h-auto rounded-xl mt-6 mx-auto" src="assets/images/portfolio/big-6.png" alt="portfolio image">
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Portfolio popup end -->
                  </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] web portfolio__parent" data-category="web">
                   <div class="relative overflow-hidden">
                    <a href="#" class="popup-modal--open">
                        <span class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                          <div class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                            <span class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            </span>
                            <h3 class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">Webflow</h3>
                            <span class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">Promote your blog posts, case udie, and thehe branded videos.</span>
                          </div>
                        </span>
                        <div class="w-full portfolio__image--card">
                          <img class="w-full transition duration-300" src="assets/images/portfolio/7.png" alt="">
                        </div>
                      </a>
                
                      <!-- Portfolio popup start -->
                    <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                      <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                      <!-- Modal content -->
                      <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                          <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                            <button class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                            <h2 class="text-accent1 text-center font-bold">
                              Webflow Project
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        </span>
                                        Project :&nbsp;
                                        <span class="font-medium"> Website</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                        </span>
                                        Languages :&nbsp;
                                        <span class="font-medium">Photoshop, Illustration</span>
                                    </p>
                                </div>

                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                        Client :&nbsp; <span class="font-medium">Envato</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                        </span>
                                        Preview :&nbsp;
                                        <span class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                            <a href="https://www.envato.com/" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <p class="dark:text-white font-normal text-[17px]">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Mollitia placeat magnam possimus iusto blanditiis pariatur
                                labore explicabo quo repellat hic dolorum numquam
                                asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                quidem! Quas magni distinctio dolorum dolore natus, vel
                                numquam accusamus. Nostrum eligendi recusandae qui tempore
                                deserunt!
                            </p>
                            <div class="pr-3">
                                <img class="max-w-full h-auto rounded-xl mt-6 mx-auto" src="assets/images/portfolio/big-7.png" alt="portfolio image">
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Portfolio popup end -->
                  </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] development graphics portfolio__parent" data-category="mobile">
                   <div class="relative overflow-hidden">
                    <a href="#" class="popup-modal--open">
                        <span class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                          <div class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                            <span class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            </span>
                            <h3 class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">Hubspot</h3>
                            <span class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">Promote your blog posts, case udie, and thehe branded videos.</span>
                          </div>
                        </span>
                        <div class="w-full portfolio__image--card">
                          <img class="w-full transition duration-300" src="assets/images/portfolio/8.png" alt="">
                        </div>
                      </a>

                      <!-- Portfolio popup start -->
                     <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                      <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                      <!-- Modal content -->
                      <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                          <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                            <button class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                            <h2 class="text-accent1 text-center font-bold">
                              Hubspot Project
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        </span>
                                        Project :&nbsp;
                                        <span class="font-medium"> Website</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                        </span>
                                        Languages :&nbsp;
                                        <span class="font-medium">Photoshop, Illustration</span>
                                    </p>
                                </div>

                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                        Client :&nbsp; <span class="font-medium">Envato</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                        </span>
                                        Preview :&nbsp;
                                        <span class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                            <a href="https://www.envato.com/" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <p class="dark:text-white font-normal text-[17px]">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Mollitia placeat magnam possimus iusto blanditiis pariatur
                                labore explicabo quo repellat hic dolorum numquam
                                asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                quidem! Quas magni distinctio dolorum dolore natus, vel
                                numquam accusamus. Nostrum eligendi recusandae qui tempore
                                deserunt!
                            </p>
                            <div class="pr-3">
                                <img class="max-w-full h-auto rounded-xl mt-6 mx-auto" src="assets/images/portfolio/big-8.png" alt="portfolio image">
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Portfolio popup end -->
                  </div>
                </div>
                <!-- single portfolio end -->

                <!-- single portfolio start -->
                <div class="element-item mb-[30px] w-[50%] lg:w-[33.33%]  px-[15px] web mobile portfolio__parent" data-category="web">
                   <div class="relative overflow-hidden">
                    <a href="#" class="popup-modal--open">
                        <span class="absolute w-full h-full bg-accent1 left-0 top-0 opacity-0 transition duration-300 portfolio__overlay z-10">
                          <div class="flex items-center justify-end flex-col text-center h-full text-white p-[20px]">
                            <span class="portfolio--zoom flex items-center grow transition-all duration-300 translate-y-[-20px]">
                              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
                            </span>
                            <h3 class="portfolio--title text-[18px] lg:text-[24px] font-heebo transition-all duration-300 translate-y-3">Web Development</h3>
                            <span class="portfolio--sub-title text-[17px] 2xs:hidden transition-all duration-500 translate-y-3">Promote your blog posts, case udie, and thehe branded videos.</span>
                          </div>
                        </span>
                        <div class="w-full portfolio__image--card">
                          <img class="w-full transition duration-300" src="assets/images/portfolio/9.png" alt="">
                        </div>
                      </a>

                      <!-- Portfolio popup start -->
                     <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                      <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                      <!-- Modal content -->
                      <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                          <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                            <button class="modal__popup--close ltr:right-[10px] rtl:left-[10px] top-[10px] absolute w-[50px] h-[50px] bg-accent1 hover:bg-primary dark:hover:bg-dark_accent1 text-white rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                              </button>
                            <h2 class="text-accent1 text-center font-bold">
                              Web Development
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 my-6">
                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                        </span>
                                        Project :&nbsp;
                                        <span class="font-medium"> Website</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                                        </span>
                                        Languages :&nbsp;
                                        <span class="font-medium">Photoshop, Illustration</span>
                                    </p>
                                </div>

                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center mt-2 lg:mt-0  ">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                        Client :&nbsp; <span class="font-medium">Envato</span>
                                    </p>
                                    <p class="dark:text-white flex items-center">
                                        <span class="mr-2">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                                        </span>
                                        Preview :&nbsp;
                                        <span class="font-medium transition-all duration-300 ease-in-out hover:text-accent1">
                                            <a href="https://www.envato.com/" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <p class="dark:text-white font-normal text-[17px]">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Mollitia placeat magnam possimus iusto blanditiis pariatur
                                labore explicabo quo repellat hic dolorum numquam
                                asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                quidem! Quas magni distinctio dolorum dolore natus, vel
                                numquam accusamus. Nostrum eligendi recusandae qui tempore
                                deserunt!
                            </p>
                            <div class="pr-3">
                                <img class="max-w-full h-auto rounded-xl mt-6 mx-auto" src="assets/images/portfolio/big-9.png" alt="portfolio image">
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Portfolio popup end -->
                  </div>
                </div>
                <!-- single portfolio end -->
              </div>
            </div>
            <!-- Filter portfolio end -->

          </div>
        </section>
        <!-- Portfolio section end -->


        <!-- Testimonial section start -->
        <section class="lg:py-[100px] md:py-[70px] dark:border-b dark:border-dark_accent1">
            <div class="container mx-auto">
              <!-- Section title start -->
              <div class="mb-[35px] lg:mb-[55px]">
                <div class="max-w-full max-w-full w-full text-center">
                  <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">TESTIMONIALS</span>
                  <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">We are people say me
                   </h2>
                </div>
              </div>
              <!-- Section title end -->

                <div class="testimonial__slider--inner lg:px-[220px] relative">
                    <!-- Slider main container -->
                  <div class="swiper testimonial__slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                      
                      <!-- Single slide -->
                      <div class="swiper-slide">
                        <div class="slider__inner text-center"> 
                            <div class="client__rating flex justify-center gap-[5px]">
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                            </div>
                            <div class="text-[24px] leading-8 text-paragraph dark:text-slate-200 italic mt-[20px] mb-[30px]">
                              “We understand the importance of approaching each work integrally and believe in the power of simple and we say easy cation growth.
                            </div>
                            <div>
                              <img class="mx-auto w-[130px] h-[130px] rounded-full shadow-[0_0_50px_0_rgba(196,206,213,0.2)]" src="assets/images/testimonial/1.png" alt="">
                              <div class="mt-[25px]">
                                <h3 class="text-2xl text-primary dark:text-white">Romes Barson</h3>
                                <span class="dark:text-slate-100">Manager</span>
                              </div>
                            </div>

                        </div>
                      </div>
                      <!-- Single slide -->
                      <!-- Single slide -->
                      <div class="swiper-slide">
                        <div class="slider__inner text-center"> 
                            <div class="client__rating flex justify-center gap-[5px]">
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                            </div>
                            <div class="text-[24px] leading-8 text-paragraph dark:text-slate-200 italic mt-[20px] mb-[30px]">
                              “We understand the importance of approaching each work integrally and believe in the power of simple and we say easy cation growth.
                            </div>
                            <div>
                              <img class="mx-auto w-[130px] h-[130px] rounded-full shadow-[0_0_50px_0_rgba(196,206,213,0.2)]" src="assets/images/testimonial/1.png" alt="">
                              <div class="mt-[25px]">
                                <h3 class="text-2xl text-primary dark:text-white">Romes Barson</h3>
                                <span class="dark:text-slate-100">Manager</span>
                              </div>
                            </div>

                        </div>
                      </div>
                      <!-- Single slide -->
                      <!-- Single slide -->
                      <div class="swiper-slide">
                        <div class="slider__inner text-center"> 
                            <div class="client__rating flex justify-center gap-[5px]">
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                              <span>
                                <svg class="fill-[#ffce31] stroke-[#ffce31]" xmlns="http://www.w3.org/2000/svg" width="20" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              </span>
                            </div>
                            <div class="text-[24px] leading-8 text-paragraph dark:text-slate-200 italic mt-[20px] mb-[30px]">
                              “We understand the importance of approaching each work integrally and believe in the power of simple and we say easy cation growth.
                            </div>
                            <div>
                              <img class="mx-auto w-[130px] h-[130px] rounded-full shadow-[0_0_50px_0_rgba(196,206,213,0.2)]" src="assets/images/testimonial/1.png" alt="">
                              <div class="mt-[25px]">
                                <h3 class="text-2xl text-primary dark:text-white">Romes Barson</h3>
                                <span class="dark:text-slate-100">Manager</span>
                              </div>
                            </div>

                        </div>
                      </div>
                      <!-- Single slide -->


                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination mt-7"></div>
                  </div>
                  <div class="md:hidden">
                      <span class="absolute top-[38%] translate-y-[-50%] left-0 xl:left-[-12%] only-xl:left-[0]  text-accent1">
                        <svg class="w-full only-lg:max-w-[130px] only-xl:max-w-[150px] xl:max-w-[250px] opacity-30"  fill="currentColor" stroke="currentColor"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z"/></svg>
                      </span>
                      <span class="absolute top-[38%] translate-y-[-50%] right-0 xl:right-[-12%] only-xl:right-[0] text-accent1">
                        <svg  class="w-full only-lg:max-w-[130px] only-xl:max-w-[150px] xl:max-w-[250px] opacity-30" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448 296c0 66.3-53.7 120-120 120h-8c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H320c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72zm-256 0c0 66.3-53.7 120-120 120H64c-17.7 0-32-14.3-32-32s14.3-32 32-32h8c30.9 0 56-25.1 56-56v-8H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64h64c35.3 0 64 28.7 64 64v32 32 72z"/></svg>
                      </span>
                  </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section end -->

        <!-- Contact form section start -->
        <section class="py-[70px] lg:py-[100px] mb-[270px] bg-cover bg-no-repeat bg-center bg-[url('../images/contact-bg.html')] bg-[#ECF1F6] dark:bg-[url('../images/contact-bg-dark.html')] dark:bg-dark_primary_bg" id="contact">
          <div class="container mx-auto">
            <!-- Form wrapper start -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px]">
              <div>
                <!-- Section title -->
                  <div class="mb-[55px] md:text-center">
                      <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">CONTACT</span>
                      <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">Get I contact work 
                      </h2>
                      <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">Promote your blog posts, case udie, and product ouncems
                        with the the branded videoscustomers coming back for
                        services Makes best effort.</p>
                  </div>
                <!-- Section title end -->
                
                <!-- from inner start-->
                  <form action="#">
                      <div class="grid grid-cols-2 gap-7">
                          <div>
                            <input class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="text" name="name" placeholder="Your name" >
                          </div>
                          <div>
                            <input class="w-full bg-white rounded px-5 py-2 h-11 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="email" name="email" placeholder="Your email" >
                          </div>
                          <div class="col-span-2">
                            <textarea class="w-full bg-white rounded px-5 py-2 h-40 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                          </div>
                      </div>
                      <button class="btn solid-btn mt-12">Send Request</button>
                  </form>
                <!-- from inner end -->
              </div>

              <div class="ltr:only-md:pl-[30px] ltr:lg:pl-[50px] rtl:only-md:pr-[30px] rtl:lg:pr-[50px] mt-[30px] lg:mt-[150px] md:flex md:gap-[30px] md:flex-wrap">
                  <!-- Single contact info start -->
                  <div class="flex items-center">
                    <div>
                      <span class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">                        
                        <svg width="25" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                      </span>
                    </div>
                    <div class="ltr:pl-6 rtl:pr-6">
                       <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">Call Me</h3>
                       <span class="text-primary dark:text-slate-200 text-[22px] md:text-[18px] mt-5">++880254615566 <br> ++826542556455</span>
                    </div>
                  </div>
                  <!-- Single contact info end -->

                  <!-- Single contact info start -->
                  <div class="flex items-center lg:mt-7">
                    <div>
                      <span class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                      </span>
                    </div>
                    <div class="ltr:pl-6 rtl:pr-6">
                       <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">Email Us</h3>
                       <span class="text-primary  dark:text-slate-200 text-[22px] md:text-[18px] mt-5">rubel@eobi.com <br>
                        moraty@bara.com
                        </span>
                    </div>
                  </div>
                  <!-- Single contact info end -->

                  <!-- Single contact info start -->
                  <div class="flex items-center lg:mt-7">
                    <div>
                      <span class="w-[50px] h-[50px] lg:w-[70px] lg:h-[70px] bg-accent1 text-white flex items-center rounded-full justify-center">
                        <svg width="32" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"/></svg>
                      </span>
                    </div>
                    <div class="ltr:pl-6 rtl:pr-6">
                       <h3 class="text-[28px] md:text-[22px] font-heebo font-bold text-primary dark:text-white">Address</h3>
                       <span class="text-primary  dark:text-slate-200 text-[22px] md:text-[18px] mt-5">20, 25 Dhaka,0123 <br>
                        Ratrba baraj,20
                        </span>
                    </div>
                  </div>
                  <!-- Single contact info end -->

              </div>
            </div>
            <!-- Form wrapper end -->

            <!-- Google map start  -->
            <div class="mb-[-275px] pt-[70px] lg:pt-[100px]">
              <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=440&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe></div>
            </div>
            <!-- Google map send -->
            
          </div>
        </section>
        <!-- Contact form section end -->

        <!-- Blog section start -->
        <section class="pb-[70px] lg:pb-[100px]" id="blog">
          <div class="container mx-auto">
            <!-- Section title start -->
            <div class="flex justify-between items-center gap-[20px] lg:gap-[30px] mb-[55px] md:flex-wrap md:text-center">
              <div class="max-w-full lg:max-w-[580px]  w-full">
                <span class="text-accent1 text-[20px] lg:text-[24px] font-medium mb-[10px] lg:mb-[5px]">LATEST BLOGS</span>
                <h2 class="text:[28px] lg:text-[48px] font-bold font-heebo leading-[36x] lg:leading-[58px] text-[#000248] dark:text-white">Blog Latest of News 
                  tricks & Updates</h2>
              </div>
              <div class="md:grow">
                <p class="text-[#636363] dark:text-slate-200 text-[17px] leading-[28px] lg:max-w-[472px] w-full">Promote your blog posts, case udie, and product ouncems
                  with the the branded videoscustomers coming back for
                  services Makes best effort.</p>
              </div>
            </div>
            <!-- Section title end -->

            <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-3 gap-[30px]">


            <!-- single blog  start -->
            <div class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
              <a class="block popup-modal--open" href="#">
                <!-- blog image -->
                <div class="overflow-hidden">
                  <span class="block">
                    <img class="blog__thumb w-full transition duration-300" src="assets/images/blog/1.png" alt="">
                  </span>
                </div>
                <!-- blog image end -->

                <!-- blog content -->
                <div class="p-[30px]">
                    <div class="mb-[15px]">
                      <span class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">UI /UX DESIGN</span>
                    </div>
                    <div>
                      <h3 class="text-[25px] leading-7 font-heebo font-bold">
                        <span class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300">Angular team welarges to trequests blog</span>
                      </h3>
                      <p class="mt-[15px] text-paragraph dark:text-slate-200 text-[17px]">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor incididunt ut labore et dolore aliqu</p>
                    </div>
                </div>
                <!-- blog content end -->
              </a>

              <!-- Blog popup start -->
              <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                <!-- Modal content -->
                <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                    
                    <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                      <!-- Modal close button -->
                      <button class="modal__popup--close ltr:right-[5px] rtl:left-[5px] top-[5px] absolute w-[50px] h-[50px] bg-accent1 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-primary dark:hover:bg-dark_accent1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                      </button>
                      <!-- Modal close button -->
                      <!-- Modal main content -->
                      <div>
                        <div class="pt-3">
                            <img class="max-w-full h-auto rounded-xl mt-6 mx-auto w-full" src="assets/images/blog/blog-details-1.png" alt="Blog details">
                        </div>
                        <h4 class="text-[25px] lg:text-[32px] leading-7 font-heebo font-bold mt-8">
                          <span class="text-primary dark:text-white">Angular team welarges to trequests blog</span>
                        </h4>
                        <div class="blog__content mt-5 text-[17px] leading-7 dark:text-slate-300">
                          <p>It is a long established fact that a reader will be distracted by the readable content of a page is
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using ique maiestatis sum quod sum ut alienum nec et to
                            summo possim persequeris vix mea. Adhuc quodsi qui, sit no tale essent electramei sum sums
                            rodesset in pro, quo scripta feugait vidisse. Lorem ipsum dolor sit amet, eu duo ferri labor dicat
                            Mea ex modo reque senserit, et sed hinc dolor, scaevola sum salutandi expetendis vix ne his 
                            quod mundi consequat sum. There are not many of passages of lorem </p>
                            <p class="mt-5">It is a long established fact that a reader will be distracted by the readable content of a page is
                              when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                              distribution of letters,</p>
                              
                            <blockquote class="p-4 my-4 bg-gray-50 ltr:border-l-4 rtl:border-r-4 border-gray-300 dark:border-dark_accent1 dark:bg-dark_accent1 dark:text-white text-xl">
                              <svg aria-hidden="true" class="w-10 h-10 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/></svg>
                              <p>"Tailwind css is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                            </blockquote>
                        </div>

                        <!-- Blog comment box start -->
                        <div class="mt-10">
                          <h4 class="text-primary mb-5 dark:text-white">Comments (2)</h4>
                          <div class="mt-7">
                              <!-- Single comment start -->
                              <div class="flex gap-4 border-b border-gray-300 pb-7 dark:text-slate-300">
                                  <div class="w-20">
                                    <img src="assets/images/blog/avatar.png" alt="">
                                  </div>
                                  <div>
                                    <div class="flex items-center gap-3">
                                      <h6 class="text-primary font-heebo dark:text-white">Bonas Mera</h6>
                                      <span>November 16, 2022</span>
                                    </div>
                                    <p class="py-2">Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.</p>
                                    <button class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">Reply</button>
                                  </div>
                              </div>
                              <!-- Single comment end -->

                              <!-- Single comment start -->
                              <div class="flex gap-4 pt-7 pl-20 dark:text-slate-300">
                                  <div class="w-20">
                                    <img src="assets/images/blog/avatar-2.png" alt="">
                                  </div>
                                  <div>
                                    <div class="flex items-center gap-3">
                                      <h6 class="text-primary font-heebo dark:text-white">Jhone Doe</h6>
                                      <span>November 20, 2023</span>
                                    </div>
                                    <p class="py-2">Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.</p>
                                    <button class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">Reply</button>
                                  </div>
                              </div>
                              <!-- Single comment end -->
                          </div>
                        </div>
                        <!-- Blog comment box end -->

                        <form action="#" class="mt-10">
                          <h4 class="text-primary mb-5 dark:text-white">Leave a Reply</h4>
                          <div class="grid grid-cols-2 gap-7">
                              <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="text" name="name" placeholder="Your name" >
                              </div>
                              <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="email" name="email" placeholder="Your email" >
                              </div>
                              <div class="col-span-2">
                                <textarea class="w-full bg-white rounded px-5 py-2 h-40 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                              </div>
                          </div>
                          <button class="btn--small solid-btn mt-7">Post Comment</button>
                      </form>
                      </div>
                      <!-- Modal main content end -->
                  </div>
                </div>
              </div>
              <!-- Blog popup end -->

            </div>
            <!-- single blog end -->

            <!-- single blog  start -->
            <div class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
              <a class="block popup-modal--open" href="#"> 
                <!-- blog image -->
                <div class="overflow-hidden">
                  <span class="block">
                    <img class="blog__thumb w-full transition duration-300" src="assets/images/blog/2.png" alt="">
                  </span>
                </div>
                <!-- blog image end -->

                <!-- blog content -->
                <div class="p-[30px]">
                    <div class="mb-[15px]">
                      <span class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">HTML AND CSS</span>
                    </div>
                    <div>
                      <h3 class="text-[25px] leading-7 font-heebo font-bold">
                        <span class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300" href="#">How to create a website using html</span>
                      </h3>
                      <p class="mt-[15px] text-paragraph dark:text-slate-200 text-[17px]">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor incididunt ut labore et dolore aliqu</p>
                    </div>
                </div>
                <!-- blog content end -->

              </a>

              <!-- Blog popup start -->
              <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                <!-- Modal content -->
                <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                    
                    <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                      <!-- Modal close button -->
                      <button class="modal__popup--close ltr:right-[5px] rtl:left-[5px] top-[5px] absolute w-[50px] h-[50px] bg-accent1 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-primary dark:hover:bg-dark_accent1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                      </button>
                      <!-- Modal close button -->
                      <!-- Modal main content -->
                      <div>
                        <div class="pt-3">
                            <img class="max-w-full h-auto rounded-xl mt-6 mx-auto w-full" src="assets/images/blog/blog-details-1.png" alt="Blog details">
                        </div>
                        <h4 class="text-[25px] lg:text-[32px] leading-7 font-heebo font-bold mt-8">
                          <span class="text-primary dark:text-white">Angular team welarges to trequests blog</span>
                        </h4>
                        <div class="blog__content mt-5 text-[17px] leading-7 dark:text-slate-300">
                          <p>It is a long established fact that a reader will be distracted by the readable content of a page is
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using ique maiestatis sum quod sum ut alienum nec et to
                            summo possim persequeris vix mea. Adhuc quodsi qui, sit no tale essent electramei sum sums
                            rodesset in pro, quo scripta feugait vidisse. Lorem ipsum dolor sit amet, eu duo ferri labor dicat
                            Mea ex modo reque senserit, et sed hinc dolor, scaevola sum salutandi expetendis vix ne his 
                            quod mundi consequat sum. There are not many of passages of lorem </p>
                            <p class="mt-5">It is a long established fact that a reader will be distracted by the readable content of a page is
                              when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                              distribution of letters,</p>
                              
                            <blockquote class="p-4 my-4 bg-gray-50 ltr:border-l-4 rtl:border-r-4 border-gray-300 dark:border-dark_accent1 dark:bg-dark_accent1 dark:text-white text-xl">
                              <svg aria-hidden="true" class="w-10 h-10 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/></svg>
                              <p>"Tailwind css is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                            </blockquote>
                        </div>

                        <!-- Blog comment box start -->
                        <div class="mt-10">
                          <h4 class="text-primary mb-5 dark:text-white">Comments (2)</h4>
                          <div class="mt-7">
                              <!-- Single comment start -->
                              <div class="flex gap-4 border-b border-gray-300 pb-7 dark:text-slate-300">
                                  <div class="w-20">
                                    <img src="assets/images/blog/avatar.png" alt="">
                                  </div>
                                  <div>
                                    <div class="flex items-center gap-3">
                                      <h6 class="text-primary font-heebo dark:text-white">Bonas Mera</h6>
                                      <span>November 16, 2022</span>
                                    </div>
                                    <p class="py-2">Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.</p>
                                    <button class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">Reply</button>
                                  </div>
                              </div>
                              <!-- Single comment end -->

                              <!-- Single comment start -->
                              <div class="flex gap-4 pt-7 pl-20 dark:text-slate-300">
                                  <div class="w-20">
                                    <img src="assets/images/blog/avatar-2.png" alt="">
                                  </div>
                                  <div>
                                    <div class="flex items-center gap-3">
                                      <h6 class="text-primary font-heebo dark:text-white">Jhone Doe</h6>
                                      <span>November 20, 2023</span>
                                    </div>
                                    <p class="py-2">Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.</p>
                                    <button class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">Reply</button>
                                  </div>
                              </div>
                              <!-- Single comment end -->
                          </div>
                        </div>
                        <!-- Blog comment box end -->

                        <form action="#" class="mt-10">
                          <h4 class="text-primary mb-5 dark:text-white">Leave a Reply</h4>
                          <div class="grid grid-cols-2 gap-7">
                              <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="text" name="name" placeholder="Your name" >
                              </div>
                              <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="email" name="email" placeholder="Your email" >
                              </div>
                              <div class="col-span-2">
                                <textarea class="w-full bg-white rounded px-5 py-2 h-40 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                              </div>
                          </div>
                          <button class="btn--small solid-btn mt-7">Post Comment</button>
                      </form>
                      </div>
                      <!-- Modal main content end -->
                  </div>
                </div>
              </div>
              <!-- Blog popup end -->

            </div>
            <!-- single blog end -->

            <!-- single blog  start -->
            <div class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
              <a class="block popup-modal--open" href="#">
              <!-- blog image -->
              <div class="overflow-hidden">
                <span class="block">
                  <img class="blog__thumb w-full transition duration-300" src="assets/images/blog/3.png" alt="">
                </span>
              </div>
               <!-- blog image end -->

              <!-- blog content -->
              <div class="p-[30px]">
                  <div class="mb-[15px]">
                    <span class="bg-accent1_rgb text-[14px] uppercase py-1 px-[6px] text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">Shopify</span>
                  </div>
                  <div>
                    <h3 class="text-[25px] leading-7 font-heebo font-bold">
                      <span class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300">We mack team welarges to trequests blog</span>
                    </h3>
                    <p class="mt-[15px] text-paragraph dark:text-slate-200 text-[17px]">Lorem ipsum dolor sit amet,elit, sed do eiusmod tempor incididunt ut labore et dolore aliqu</p>
                  </div>
              </div>
              <!-- blog content end -->
              </a>

              <!-- Blog popup start -->
              <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[98] opacity-0 invisible">
                <div class="modal_popup_overlay fixed w-full h-full bg-[#000] left-0 top-0 opacity-[0.3]"></div>
                <!-- Modal content -->
                <div class="modal__portfolio--content relative z-10 h-full flex items-center px-[15px] max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]">
                    
                    <div class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                      <!-- Modal close button -->
                      <button class="modal__popup--close ltr:right-[5px] rtl:left-[5px] top-[5px] absolute w-[50px] h-[50px] bg-accent1 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-primary dark:hover:bg-dark_accent1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                      </button>
                      <!-- Modal close button -->
                      <!-- Modal main content -->
                      <div>
                        <div class="pt-3">
                            <img class="max-w-full h-auto rounded-xl mt-6 mx-auto w-full" src="assets/images/blog/blog-details-1.png" alt="Blog details">
                        </div>
                        <h4 class="text-[25px] lg:text-[32px] leading-7 font-heebo font-bold mt-8">
                          <span class="text-primary dark:text-white">Angular team welarges to trequests blog</span>
                        </h4>
                        <div class="blog__content mt-5 text-[17px] leading-7 dark:text-slate-300">
                          <p>It is a long established fact that a reader will be distracted by the readable content of a page is
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using ique maiestatis sum quod sum ut alienum nec et to
                            summo possim persequeris vix mea. Adhuc quodsi qui, sit no tale essent electramei sum sums
                            rodesset in pro, quo scripta feugait vidisse. Lorem ipsum dolor sit amet, eu duo ferri labor dicat
                            Mea ex modo reque senserit, et sed hinc dolor, scaevola sum salutandi expetendis vix ne his 
                            quod mundi consequat sum. There are not many of passages of lorem </p>
                            <p class="mt-5">It is a long established fact that a reader will be distracted by the readable content of a page is
                              when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                              distribution of letters,</p>
                              
                            <blockquote class="p-4 my-4 bg-gray-50 ltr:border-l-4 rtl:border-r-4 border-gray-300 dark:border-dark_accent1 dark:bg-dark_accent1 dark:text-white text-xl">
                              <svg aria-hidden="true" class="w-10 h-10 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/></svg>
                              <p>"Tailwind css is just awesome. It contains tons of predesigned components and pages starting from login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                            </blockquote>
                        </div>

                        <!-- Blog comment box start -->
                        <div class="mt-10">
                          <h4 class="text-primary mb-5 dark:text-white">Comments (2)</h4>
                          <div class="mt-7">
                              <!-- Single comment start -->
                              <div class="flex gap-4 border-b border-gray-300 pb-7 dark:text-slate-300">
                                  <div class="w-20">
                                    <img src="assets/images/blog/avatar.png" alt="">
                                  </div>
                                  <div>
                                    <div class="flex items-center gap-3">
                                      <h6 class="text-primary font-heebo dark:text-white">Bonas Mera</h6>
                                      <span>November 16, 2022</span>
                                    </div>
                                    <p class="py-2">Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.</p>
                                    <button class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">Reply</button>
                                  </div>
                              </div>
                              <!-- Single comment end -->

                              <!-- Single comment start -->
                              <div class="flex gap-4 pt-7 pl-20 dark:text-slate-300">
                                  <div class="w-20">
                                    <img src="assets/images/blog/avatar-2.png" alt="">
                                  </div>
                                  <div>
                                    <div class="flex items-center gap-3">
                                      <h6 class="text-primary font-heebo dark:text-white">Jhone Doe</h6>
                                      <span>November 20, 2023</span>
                                    </div>
                                    <p class="py-2">Lorem ipsum is simply free textdolor sit amet, consectetur notted adipisicing elit sed do iusmod tempor incididu.</p>
                                    <button class="text-accent1 font-heebo font-bold text-[18px] transition-all duration-300 hover:text-primary bg-transparent">Reply</button>
                                  </div>
                              </div>
                              <!-- Single comment end -->
                          </div>
                        </div>
                        <!-- Blog comment box end -->

                        <form action="#" class="mt-10">
                          <h4 class="text-primary mb-5 dark:text-white">Leave a Reply</h4>
                          <div class="grid grid-cols-2 gap-7">
                              <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="text" name="name" placeholder="Your name" >
                              </div>
                              <div>
                                <input class="w-full bg-white rounded px-5 py-2 h-11 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" type="email" name="email" placeholder="Your email" >
                              </div>
                              <div class="col-span-2">
                                <textarea class="w-full bg-white rounded px-5 py-2 h-40 border border-gray-300 dark:bg-transparent dark:text-slate-300 dark:border dark:border-slate-600" name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                              </div>
                          </div>
                          <button class="btn--small solid-btn mt-7">Post Comment</button>
                      </form>
                      </div>
                      <!-- Modal main content end -->
                  </div>
                </div>
              </div>
              <!-- Blog popup end -->

            </div>
            <!-- single blog end -->

            </div>
          </div>          
        </section>
        <!-- Blog section end -->
      </main>
      <!-- Main wrapper end -->


    <!-- Footer start -->
      <footer class="py-[50px] bg-cover bg-no-repeat bg-center bg-[url('../images/footer-bg.html')] bg-[#EFF3F7] dark:bg-[url('../images/footer-bg-dark.html')] dark:bg-dark_primary_bg dark:border-t dark:border-dark_accent1">
      <div class="container mx-auto">
          <div class="grid grid-cols-1 only-md:grid-cols-2 lg:grid-cols-2">
              <div class="flex">
                <p class="flex items-center flex-wrap sm:justify-center dark:text-slate-200">Developed with <span class="px-[3px] text-paragraph dark:text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" stroke="text-paragraph" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                  </span>  by <span class=" px-[3px]"><a class="text-accent1 hover:font-bold" href="#">Morex</a></span>© 2023</p>
              </div>
              <div class="flex items-center justify-end gap-8 sm:justify-center sm:mt-[15px]">
                  <a href="#" class="text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px]">Terms & Condition</a>
                  <a href="#" class="text-paragraph dark:text-slate-200 hover:text-accent1 font-medium text-[20px] sm:text-[16px]"> Privacy Policy</a>
              </div>
          </div>
      </div>

    </footer>
    <!-- Footer end -->

    <!-- Back to top start -->
    <button id="scroll__top" class="fixed bottom-12 ltr:right-5 rtl:left-5 z-50 bg-accent1 text-white shadow-[0_2px_22px_rgba(0,0,0,0.16)] cursor-pointer translate-y-12 opacity-0 invisible transition-all duration-300 leading-[1] w-11 h-11 rounded-full border-none flex items-center justify-center hover:bg-primary dark:hover:bg-dark_accent1">
      <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 leading-[1]" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round"  stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg>
    </button>  
    <!-- Back to top end -->



    <!-------- Plugins js ------>

    <!-- Swiper js -->
    <script src="../../../../cdn.jsdelivr.net/npm/swiper%408/swiper-bundle.min.js"></script>
    
    <!-- imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js" defer></script>

    <!-- Isotope js -->
    <script src="assets/js/isotope.pkgd.min.js" defer></script>

  <!-- Custom js -->
    <script src="assets/js/script.js" defer></script>

    <script>
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
        document.getElementById("light__to--dark")?.classList.add("dark--version");
      } 
      if (localStorage.getItem("theme-color") === "light") {
        document.getElementById("light__to--dark")?.classList.remove("dark--version");
      } 
    </script>
  </body>

<!-- Mirrored from themihub.com/html/morex-demo/morex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 02:30:42 GMT -->
</html>
