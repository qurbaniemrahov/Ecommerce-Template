<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./images/svg/logo.svg" type="image/x-icon" />
  <link rel="stylesheet" href="./unpkg.com/swiper@11.0.4/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="./unpkg.com/metismenujs@1.4.0/dist/metismenujs.min.css" />
  <link rel="stylesheet" href="./libraries/iziToast/iziToast.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Besnik. - Electronics store</title>
</head>

<body class="flex min-h-screen flex-col overflow-hidden bg-body font-poppins text-txt">
  <header class="header-section relative z-30 shadow-custom-1">
    <div class="hidden bg-secondary-color sm:flex">
      <div class="container mx-auto grid h-full grid-cols-12 px-2 py-[6px] sm:px-8" style="background-color: #011638;">
        <div class="col-span-8 self-center">
          <div class="flex gap-[15px]">
            <div class="flex items-center gap-2">
              <i class="bi bi-envelope flex text-2xl text-primary-color"></i>
              <a href="#" class="font-light text-white">Besnik.@example.com</a>
            </div>
            <div class="flex items-center gap-2">
              <i class="bi bi-telephone flex text-xl text-primary-color"></i>
              <a href="#" class="font-light text-white">0123456789</a>
            </div>
          </div>
        </div>
        <div class="col-span-4 self-center justify-self-end">
          <div class="flex items-center gap-[10px]">
            <a href="#">
              <i class="bi bi-instagram transition-all-300 flex text-icon hover:text-white"></i>
            </a>
            <a href="#">
              <i class="bi bi-facebook transition-all-300 flex text-icon hover:text-white"></i>
            </a>
            <a href="#">
              <i class="bi bi-twitter transition-all-300 flex text-icon hover:text-white"></i>
            </a>
            <a href="#">
              <i class="bi bi-youtube transition-all-300 flex text-icon hover:text-white"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-secondary-color">
      <div class="container mx-auto grid h-full grid-cols-4 gap-1 px-2 py-5 sm:px-8 lg:grid-cols-12 lg:gap-0"
        style="background-color: #fff; color: #011638;">
        <div class="order-1 col-span-2 self-center lg:order-1 lg:col-span-3">
          <a href="index.html">
            <img class="inline" src="images/svg/logo.svg" alt="Besnik." />
          </a>
        </div>
        <div
          class="header-search transition-all-300 order-3 col-span-4 mt-[10px] hidden self-center lg:order-2 lg:col-span-6 lg:mt-0 lg:block">
          <form class="search" action="#">
            <div class="flex h-[40px] overflow-hidden rounded-[50px] bg-primary-rgba">
              <input
                class="search w-full border-none bg-transparent py-[5px] pl-5 text-white placeholder-icon focus:border-none focus:ring-0 focus:ring-transparent"
                type="search" placeholder="Search..." />
              <button class="btn-search px-3 text-white" type="submit">
                <i class="bi bi-search flex text-xl"></i>
              </button>
            </div>
          </form>
        </div>
        <div class="order-2 col-span-2 flex gap-2 self-center justify-self-end lg:order-3 lg:col-span-3 xl:gap-5">
          <div class="flex items-center lg:hidden">
            <button class="btn-search-mob p-[5px] text-white">
              <i class="bi bi-search pointer-events-none flex text-2xl"></i>
            </button>
          </div>
          <div class="flex items-center lg:hidden">
            <button class="btn-open-modal text-white" data-target=".menu-mob">
              <i class="bi bi-list pointer-events-none flex text-3xl"></i>
            </button>
          </div>
          <div class="group-items hidden items-center gap-5 text-white lg:flex">
            <div class="relative">
              <a class="btn-open-modal" data-target=".wishlist-modal" href="javascript:void(0)">
                <i class="bi bi-heart pointer-events-none flex translate-y-1 transform text-[32px] text-white"
                  style="color: #011638;"></i>
              </a>
              <span class="badge absolute top-0 right-[-6px] h-[15px] min-w-[15px] px-[2px]">0</span>
            </div>
            <div class="relative">
              <a class="btn-open-modal" data-target=".shopping-cart-modal" href="javascript:void(0)">
                <i class="bi bi-cart2 pointer-events-none flex text-[35px] text-white" style="color: #011638;"></i>
              </a>
              <span class="badge absolute top-0 right-[-6px] h-[15px] min-w-[15px] px-[2px]">0</span>
            </div>
          </div>
          <div class="group relative hidden lg:flex">
            <div class="flex cursor-pointer select-none items-center gap-1">
              <span class="font-semibold text-white" style="color: #011638;">My account</span>
              <i class="bi bi-caret-down-fill transition-all-300 flex rotate-0 text-sm text-white group-hover:rotate-180"
                style="color: #011638;"></i>
            </div>
            <div
              class="transition-all-300 invisible absolute top-full z-30 w-[120%] pt-[10px] opacity-0 group-hover:visible group-hover:opacity-100">
              <div class="arrow relative">
                <ul class="overflow-hidden rounded-md bg-white p-[6px] shadow-custom-1">
                  <li class="hover:font-semibold">
                    <a href="#" class="btn-open-modal" data-tab="0" data-target=".entry-modal">
                      <div class="pointer-events-none flex items-center gap-2 p-1">
                        <i class="bi bi-box-arrow-in-right flex text-xl text-primary-color" style="color: #011638;"></i>
                        <span>Login</span>
                      </div>
                    </a>
                  </li>
                  <li class="hover:font-semibold">
                    <a href="#" class="btn-open-modal" data-tab="1" data-target=".entry-modal">
                      <div class="pointer-events-none flex items-center gap-2 p-1">
                        <i class="bi bi-person flex text-xl text-primary-color" style="color: #011638;"></i>
                        <span>Sign up</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden bg-white lg:block">
      <nav class="container mx-auto px-2 sm:px-8">
        <ul class="menu flex flex-wrap items-center justify-between py-[10px] text-lg">
          <li class="underlined-animated group relative">
            <a href="#" class="btn-open flex items-center gap-1 font-semibold">
              <span>Products</span>
              <i
                class="bi bi-caret-down-fill transition-all-300 flex rotate-0 text-xs text-primary-color group-hover:rotate-180"></i>
            </a>
            <div
              class="submenu transition-all-300 invisible absolute left-0 pt-[10px] opacity-0 group-hover:visible group-hover:opacity-100">
              <ul class="relative w-[250px] bg-white text-base shadow-custom-1">

                <li class="group-1">
                  <a href="#" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Ergonic Chair</span>
                    <i
                      class="bi bi-caret-right-fill group-1-hover-visible invisible ml-auto flex text-xs text-primary-color"></i>
                  </a>
                  <div
                    class="submenu group-1-hover-visible transition-all-300 invisible absolute top-0 left-full min-h-full min-w-[680px] opacity-0">
                    <div class="bg-white shadow-custom-2">
                      <div class="border-b-2 border-primary-color py-[10px]">
                        <span class="px-5 text-3xl font-bold uppercase text-primary-color">Ergonic Chair</span>
                      </div>
                      <div class="submenu-categories flex flex-wrap">
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img"
                                src="images/categories/pc_components/motherboards.jpg" alt="motherboard" />
                            </div>
                            <span class="group-2-hover-font block text-center">Keyboard</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img"
                                src="images/categories/pc_components/processors.jpg" alt="processors" />
                            </div>
                            <span class="group-2-hover-font block text-center">Gaming Gear</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img" src="images/categories/pc_components/rams.jpg"
                                alt="rams" />
                            </div>
                            <span class="group-2-hover-font block text-center">Smarthome</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img"
                                src="images/categories/pc_components/video_cards.jpg" alt="video cards" />
                            </div>
                            <span class="group-2-hover-font block text-center">Computer Accessories</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img"
                                src="images/categories/pc_components/power_supplys.jpg" alt="video cards" />
                            </div>
                            <span class="group-2-hover-font block object-contain text-center">Power Supplys</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img"
                                src="images/categories/pc_components/hard_drives.jpg" alt="video cards" />
                            </div>
                            <span class="group-2-hover-font block text-center">Hard Drives</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img"
                                src="images/categories/pc_components/ssd_disk.jpg" alt="video cards" />
                            </div>
                            <span class="group-2-hover-font block text-center">SSD Disk</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img"
                                src="images/categories/pc_components/computer_case.jpg" alt="video cards" />
                            </div>
                            <span class="group-2-hover-font block text-center">Case</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="group-1">
                  <a href="#" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Keyboard</span>
                    <i
                      class="bi bi-caret-right-fill group-1-hover-visible invisible ml-auto flex text-xs text-primary-color"></i>
                  </a>
                  <div
                    class="submenu group-1-hover-visible transition-all-300 invisible absolute top-0 left-full min-h-full min-w-[680px] opacity-0">
                    <div class="bg-white shadow-custom-2">
                      <div class="border-b-2 border-primary-color py-[10px]">
                        <span class="px-5 text-3xl font-bold uppercase text-primary-color">Keyboard</span>
                      </div>
                      <div class="submenu-categories flex flex-wrap">
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img"
                                src="images/categories/peripherals/keywords.jpg" alt="motherboard" />
                            </div>
                            <span class="group-2-hover-font block text-center">Keywords</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img" src="images/categories/peripherals/mouse.jpg"
                                alt="processors" />
                            </div>
                            <span class="group-2-hover-font block text-center">Mouses</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img" src="images/categories/peripherals/mic.jpg"
                                alt="rams" />
                            </div>
                            <span class="group-2-hover-font block text-center">Mics</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img" src="images/categories/peripherals/webcam.jpg"
                                alt="rams" />
                            </div>
                            <span class="group-2-hover-font block text-center">Webcam</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="group-1">
                  <a href="#" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Gaming Gear</span>
                    <i
                      class="bi bi-caret-right-fill group-1-hover-visible invisible ml-auto flex text-xs text-primary-color"></i>
                  </a>
                  <div
                    class="submenu group-1-hover-visible transition-all-300 invisible absolute top-0 left-full min-h-full min-w-[680px] opacity-0">
                    <div class="bg-white shadow-custom-2">
                      <div class="border-b-2 border-primary-color py-[10px]">
                        <span class="px-5 text-3xl font-bold uppercase text-primary-color">Gaming Gear</span>
                      </div>
                      <div class="submenu-categories flex flex-wrap">
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img" src="images/categories/computers/desktops.jpg"
                                alt="motherboard" />
                            </div>
                            <span class="group-2-hover-font block text-center">Desktops</span>
                          </a>
                        </div>
                        <div class="group-2 p-[10px]">
                          <a class="categorie-container inline-block" href="#">
                            <div class="categorie-img h-[150px] w-[150px]">
                              <img class="img-product group-2-hover-img" src="images/categories/computers/notebooks.jpg"
                                alt="processors" />
                            </div>
                            <span class="group-2-hover-font block text-center">Notebooks</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="group-1">
                  <a href="#" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Smarthome</span>
                  </a>
                </li>

                <li class="group-1">
                  <a href="#" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Computer Accessories</span>
                  </a>
                </li>

              </ul>
            </div>
          </li>
          <li class="underlined-animated">
            <a href="index.html">Home</a>
          </li>
          <li class="underlined-animated">
            <a href="#">Smarthome</a>
          </li>
          <li class="underlined-animated">
            <a href="#">Keyboard</a>
          </li>
          <li class="underlined-animated">
            <a href="#">Computer Accessories</a>
          </li>
          <li class="underlined-animated group">
            <a href="shop-mixed.html" class="flex items-center gap-1">
              <span>Shop</span>
              <i
                class="bi bi-caret-down-fill transition-all-300 flex rotate-0 text-xs text-primary-color group-hover:rotate-180"></i>
            </a>
          </li>
          <li class="underlined-animated group">
            <a href="#" class="flex items-center gap-1">
              <span>Pages</span>
              <i
                class="bi bi-caret-down-fill transition-all-300 flex rotate-0 text-xs text-primary-color group-hover:rotate-180"></i>
            </a>
            <div
              class="transition-all-300 invisible absolute left-0 pt-[10px] opacity-0 group-hover:visible group-hover:opacity-100">
              <ul class="relative w-[250px] bg-white text-base shadow-custom-1">
                <li class="group-1">
                  <a href="wishlist.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Wishlist</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="shopping-cart.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Shopping Cart</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="product-details.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Product Details</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="checkout.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Checkout</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="my-account.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">My Account</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="login.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Login</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="sign-up.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Sign Up</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="forgot-password.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Forgot Password</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="error404.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Error 404</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="purchase-completed.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Purchase Completed</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="purchase-failed.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Purchase Failed</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="message-sent.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Message Sent</span>
                  </a>
                </li>
                <li class="group-1">
                  <a href="verification.html" class="flex items-center gap-2 p-2">
                    <i class="bi bi-circle-fill group-1-hover-visible invisible flex text-[6px] text-primary-color"></i>
                    <span class="group-1-hover-font">Verification</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="underlined-animated">
            <a href="contact-us.html">Contact Us</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="banners-section container mx-auto my-5 px-2 sm:px-8">
    <div class="grid grid-cols-12 gap-5">
      <div class="swiper-container col-span-12 overflow-hidden rounded-lg md:col-span-8">
        <div class="swiper swiper-banner group relative flex items-center">
          <div class="swiper-wrapper max-h-[377px]">
            <div class="swiper-slide">
              <img src="images/banner/banner-1.png" alt="banner 1" />
            </div>
            <div class="swiper-slide">
              <img src="images/banner/banner-2.jpg" alt="banner 2" />
            </div>
            <div class="swiper-slide">
              <img src="images/banner/banner-3.jpg" alt="banner 3" />
            </div>
            <div class="swiper-slide">
              <img src="images/banner/banner-4.jpg" alt="banner 3" />
            </div>
          </div>
          <div class="button-next btn-slider-1 transition-all-300 -right-16 group-hover:right-4">
            &#10095;
          </div>
          <div class="button-prev btn-slider-1 transition-all-300 -left-16 group-hover:left-4">
            &#10094;
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="group relative col-span-4 hidden overflow-hidden rounded-lg md:block">
        <div class="overlay-gradient absolute z-[1] h-full w-full"></div>
        <img class="transition-all-300 h-full w-full object-cover hover:transform group-hover:scale-110"
          src="images/categories/vr-glass-hero.jpg" alt="banner-img" />
        <div class="absolute top-0 left-0 flex h-full w-full items-center">
          <div class="z-[2] p-5">
            <h3 class="text-lg font-bold uppercase text-primary-color drop-shadow-xl" style="color: #eceeef;">
              VR - Meta Quest 3
            </h3>
            <p class="my-5 text-white drop-shadow-md">
              Choose your vr and play it!
            </p>
            <a class="btn-effect inline-block rounded-lg bg-primary-color py-2 px-3 text-white" href="shop-mixed.html"
              style="color: #fff;">
              <span>Shop now</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="information-section container mx-auto my-5 px-2 sm:px-8">
    <div class="grid grid-cols-12 gap-5">
      <div class="col-span-12 flex sm:col-span-6 lg:col-span-3">
        <div
          class="transition-all-300 flex w-full items-center gap-4 rounded-lg bg-white p-5 hover:shadow-lg xs:pl-[20%] sm:pl-5">
          <div class="rounded-full border-2">
            <i class="bi bi-truck flex p-3 text-[40px] text-primary-color"></i>
          </div>
          <div>
            <h6 class="font-bold capitalize">Free shipping</h6>
            <p class="break-all text-sm text-gray-400">Orders over $100</p>
          </div>
        </div>
      </div>
      <div class="col-span-12 flex sm:col-span-6 lg:col-span-3">
        <div
          class="transition-all-300 flex w-full items-center gap-4 rounded-lg bg-white p-5 hover:shadow-lg xs:pl-[20%] sm:pl-5">
          <div class="rounded-full border-2">
            <i class="bi bi-cash-coin flex p-3 text-[40px] text-primary-color"></i>
          </div>
          <div>
            <h6 class="font-bold capitalize">Money back</h6>
            <p class="break-all text-sm text-gray-400">With a 30 day</p>
          </div>
        </div>
      </div>
      <div class="col-span-12 flex sm:col-span-6 lg:col-span-3">
        <div
          class="transition-all-300 flex w-full items-center gap-4 rounded-lg bg-white p-5 hover:shadow-lg xs:pl-[20%] sm:pl-5">
          <div class="rounded-full border-2">
            <i class="bi bi-shield-check flex p-3 text-[40px] text-primary-color"></i>
          </div>
          <div>
            <h6 class="font-bold capitalize">Secure payment</h6>
            <p class="break-all text-sm text-gray-400">Secured payment</p>
          </div>
        </div>
      </div>
      <div class="col-span-12 flex sm:col-span-6 lg:col-span-3">
        <div
          class="transition-all-300 flex w-full items-center gap-4 rounded-lg bg-white p-5 hover:shadow-lg xs:pl-[20%] sm:pl-5">
          <div class="rounded-full border-2">
            <i class="bi bi-headset flex p-3 text-[40px] text-primary-color"></i>
          </div>
          <div>
            <h6 class="font-bold capitalize">Online support</h6>
            <p class="break-all text-sm text-gray-400">Support 24/7</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="offers-section container mx-auto my-5 px-2 sm:px-8">
    <div class="liner-container mt-5 flex justify-center border-b-2 border-[rgba(119,119,119,.17)]">
      <h1 class="mb-[-2px] inline-block border-b-2 border-primary-color pb-3 text-2xl font-bold uppercase">
        Offers
      </h1>
    </div>
    <div class="swiper-container">
      <div class="swiper swiper-cards group relative flex items-center py-5">
        <div class="swiper-wrapper">
          <div class="swiper-slide h-auto">
            <div
              class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
              <div class="absolute top-[10px] right-[10px]">
                <div class="p-[2px]">
                  <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)">
                    <i class="bi bi-heart pointer-events-none flex text-white"></i>
                  </a>
                </div>
                <div class="p-[2px]">
                  <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)" data-target=".quick-view-modal">
                    <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                  </a>
                </div>
              </div>
              <div
                class="absolute top-0 left-0 flex h-[35px] w-[90px] items-center justify-center rounded-br-lg bg-primary-color">
                <span class="text-md text-center font-semibold uppercase text-white">
                  25% Off</span>
              </div>
              <div class="h-[190px] overflow-hidden rounded-lg">
                <a href="#">
                  <img class="card-object-fit h-full w-full" src="images/cards/notebooks/note_1.jpg" alt="product" />
                </a>
              </div>
              <div class="my-2 flex justify-between">
                <div class="flex">
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                </div>
                <div>
                  <span class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                </div>
              </div>
              <div class="my-1">
                <a class="clamp break-all font-medium" href="#">
                  Apple Macbook Aire 13
                </a>
              </div>
              <div class="my-1">
                <p class="clamp-2 text-sm text-gray-400">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Itaque culpa, odio, qui praesentium dignissimos eaque
                  dolorum porro alias neque, eius animi ipsa voluptates. Optio
                  repellat tempora voluptas, dolores ipsam ad!
                </p>
              </div>

              <div class="my-1">
                <span class="text-lg font-bold">$37.00</span>
                <span class="text-sm text-primary-color line-through">$50.00</span>
              </div>
              <div class="mt-auto">
                <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                  href="#!">
                  <span class="font-bold uppercase text-white">View details</span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto">
            <div
              class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
              <div class="absolute top-[10px] right-[10px]">
                <div class="p-[2px]">
                  <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)">
                    <i class="bi bi-heart pointer-events-none flex text-white"></i>
                  </a>
                </div>
                <div class="p-[2px]">
                  <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)" data-target=".quick-view-modal">
                    <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                  </a>
                </div>
              </div>
              <div
                class="absolute top-0 left-0 flex h-[35px] w-[90px] items-center justify-center rounded-br-lg bg-primary-color">
                <span class="text-md text-center font-semibold uppercase text-white">
                  25% Off</span>
              </div>
              <div class="h-[190px] overflow-hidden rounded-lg">
                <a href="#">
                  <img class="card-object-fit h-full w-full" src="images/categories/gaming/consoles.jpg"
                    alt="product" />
                </a>
              </div>
              <div class="my-2 flex justify-between">
                <div class="flex">
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                </div>
                <div>
                  <span class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                </div>
              </div>
              <div class="my-1">
                <a class="clamp break-all font-medium" href="#">
                  PlayStation 5
                </a>
              </div>
              <div class="my-1">
                <p class="clamp-2 text-sm text-gray-400">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Itaque culpa, odio, qui praesentium dignissimos eaque
                  dolorum porro alias neque, eius animi ipsa voluptates. Optio
                  repellat tempora voluptas, dolores ipsam ad!
                </p>
              </div>

              <div class="my-1">
                <span class="text-lg font-bold">$37.00</span>
                <span class="text-sm text-primary-color line-through">$50.00</span>
              </div>
              <div class="mt-auto">
                <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                  href="#">
                  <span class="font-bold uppercase text-white">View details</span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto">
            <div
              class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
              <div class="absolute top-[10px] right-[10px]">
                <div class="p-[2px]">
                  <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)">
                    <i class="bi bi-heart pointer-events-none flex text-white"></i>
                  </a>
                </div>
                <div class="p-[2px]">
                  <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)" data-target=".quick-view-modal">
                    <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                  </a>
                </div>
              </div>
              <div
                class="absolute top-0 left-0 flex h-[35px] w-[90px] items-center justify-center rounded-br-lg bg-primary-color">
                <span class="text-md text-center font-semibold uppercase text-white">
                  25% Off</span>
              </div>
              <div class="h-[190px] overflow-hidden rounded-lg">
                <a href="#">
                  <img class="card-object-fit h-full w-full" src="images/cards/mousepad.jpg" alt="product" />
                </a>
              </div>
              <div class="my-2 flex justify-between">
                <div class="flex">
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                </div>
                <div>
                  <span class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                </div>
              </div>
              <div class="my-1">
                <a class="clamp break-all font-medium" href="#">
                  Mousepad Hyperx Fury S Pro Speed
                </a>
              </div>
              <div class="my-1">
                <p class="clamp-2 text-sm text-gray-400">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Itaque culpa, odio, qui praesentium dignissimos eaque
                  dolorum porro alias neque, eius animi ipsa voluptates. Optio
                  repellat tempora voluptas, dolores ipsam ad!
                </p>
              </div>

              <div class="my-1">
                <span class="text-lg font-bold">$37.00</span>
                <span class="text-sm text-primary-color line-through">$50.00</span>
              </div>
              <div class="mt-auto">
                <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                  href="#">
                  <span class="font-bold uppercase text-white">View details</span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto">
            <div
              class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
              <div class="absolute top-[10px] right-[10px]">
                <div class="p-[2px]">
                  <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)">
                    <i class="bi bi-heart pointer-events-none flex text-white"></i>
                  </a>
                </div>
                <div class="p-[2px]">
                  <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)" data-target=".quick-view-modal">
                    <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                  </a>
                </div>
              </div>
              <div
                class="absolute top-0 left-0 flex h-[35px] w-[90px] items-center justify-center rounded-br-lg bg-primary-color">
                <span class="text-md text-center font-semibold uppercase text-white">
                  25% Off</span>
              </div>
              <div class="h-[190px] overflow-hidden rounded-lg">
                <a href="#">
                  <img class="card-object-fit h-full w-full" src="images/categories/pc_components/processors.jpg"
                    alt="product" />
                </a>
              </div>
              <div class="my-2 flex justify-between">
                <div class="flex">
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                </div>
                <div>
                  <span class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                </div>
              </div>
              <div class="my-1">
                <a class="clamp break-all font-medium" href="#">
                  Ryzen 5 3600x
                </a>
              </div>
              <div class="my-1">
                <p class="clamp-2 text-sm text-gray-400">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Itaque culpa, odio, qui praesentium dignissimos eaque
                  dolorum porro alias neque, eius animi ipsa voluptates. Optio
                  repellat tempora voluptas, dolores ipsam ad!
                </p>
              </div>

              <div class="my-1">
                <span class="text-lg font-bold">$37.00</span>
                <span class="text-sm text-primary-color line-through">$50.00</span>
              </div>
              <div class="mt-auto">
                <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                  href="shop-mixed.html">
                  <span class="font-bold uppercase text-white">View details</span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto">
            <div
              class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
              <div class="absolute top-[10px] right-[10px]">
                <div class="p-[2px]">
                  <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)">
                    <i class="bi bi-heart pointer-events-none flex text-white"></i>
                  </a>
                </div>
                <div class="p-[2px]">
                  <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)" data-target=".quick-view-modal">
                    <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                  </a>
                </div>
              </div>
              <div
                class="absolute top-0 left-0 flex h-[35px] w-[90px] items-center justify-center rounded-br-lg bg-primary-color">
                <span class="text-md text-center font-semibold uppercase text-white">
                  25% Off</span>
              </div>
              <div class="h-[190px] overflow-hidden rounded-lg">
                <a href="#">
                  <img class="card-object-fit h-full w-full" src="images/categories/peripherals/mouse.jpg"
                    alt="product" />
                </a>
              </div>
              <div class="my-2 flex justify-between">
                <div class="flex">
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                </div>
                <div>
                  <span class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                </div>
              </div>
              <div class="my-1">
                <a class="clamp break-all font-medium" href="#">
                  Mouse Logitech g403
                </a>
              </div>
              <div class="my-1">
                <p class="clamp-2 text-sm text-gray-400">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Itaque culpa, odio, qui praesentium dignissimos eaque
                  dolorum porro alias neque, eius animi ipsa voluptates. Optio
                  repellat tempora voluptas, dolores ipsam ad!
                </p>
              </div>


              <div class="my-1">
                <span class="text-lg font-bold">$37.00</span>
                <span class="text-sm text-primary-color line-through">$50.00</span>
              </div>
              <div class="mt-auto">
                <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                  href="#">
                  <span class="font-bold uppercase text-white">View details</span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto">
            <div
              class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
              <div class="absolute top-[10px] right-[10px]">
                <div class="p-[2px]">
                  <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)">
                    <i class="bi bi-heart pointer-events-none flex text-white"></i>
                  </a>
                </div>
                <div class="p-[2px]">
                  <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)" data-target=".quick-view-modal">
                    <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                  </a>
                </div>
              </div>
              <div
                class="absolute top-0 left-0 flex h-[35px] w-[90px] items-center justify-center rounded-br-lg bg-primary-color">
                <span class="text-md text-center font-semibold uppercase text-white">
                  25% Off</span>
              </div>
              <div class="h-[190px] overflow-hidden rounded-lg">
                <a href="#">
                  <img class="card-object-fit h-full w-full" src="images/cards/phones/phone_1.jpg" alt="product" />
                </a>
              </div>
              <div class="my-2 flex justify-between">
                <div class="flex">
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                </div>
                <div>
                  <span class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                </div>
              </div>
              <div class="my-1">
                <a class="clamp break-all font-medium" href="#">
                  Moto e7i Power
                </a>
              </div>
              <div class="my-1">
                <p class="clamp-2 text-sm text-gray-400">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Itaque culpa, odio, qui praesentium dignissimos eaque
                  dolorum porro alias neque, eius animi ipsa voluptates. Optio
                  repellat tempora voluptas, dolores ipsam ad!
                </p>
              </div>


              <div class="my-1">
                <span class="text-lg font-bold">$37.00</span>
                <span class="text-sm text-primary-color line-through">$50.00</span>
              </div>
              <div class="mt-auto">
                <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                  href="#">
                  <span class="font-bold uppercase text-white">View details</span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto">
            <div
              class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
              <div class="absolute top-[10px] right-[10px]">
                <div class="p-[2px]">
                  <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)">
                    <i class="bi bi-heart pointer-events-none flex text-white"></i>
                  </a>
                </div>
                <div class="p-[2px]">
                  <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)" data-target=".quick-view-modal">
                    <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                  </a>
                </div>
              </div>
              <div
                class="absolute top-0 left-0 flex h-[35px] w-[90px] items-center justify-center rounded-br-lg bg-primary-color">
                <span class="text-md text-center font-semibold uppercase text-white">
                  25% Off</span>
              </div>
              <div class="h-[190px] overflow-hidden rounded-lg">
                <a href="#">
                  <img class="card-object-fit h-full w-full" src="images/cards/notebooks/note_6.jpg" alt="product" />
                </a>
              </div>
              <div class="my-2 flex justify-between">
                <div class="flex">
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                </div>
                <div>
                  <span class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                </div>
              </div>
              <div class="my-1">
                <a class="clamp break-all font-medium" href="#">
                  Dell Inspiron
                </a>
              </div>
              <div class="my-1">
                <p class="clamp-2 text-sm text-gray-400">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Itaque culpa, odio, qui praesentium dignissimos eaque
                  dolorum porro alias neque, eius animi ipsa voluptates. Optio
                  repellat tempora voluptas, dolores ipsam ad!
                </p>
              </div>


              <div class="my-1">
                <span class="text-lg font-bold">$37.00</span>
                <span class="text-sm text-primary-color line-through">$50.00</span>
              </div>
              <div class="mt-auto">
                <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                  href="#">
                  <span class="font-bold uppercase text-white">View details</span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide h-auto">
            <div
              class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
              <div class="absolute top-[10px] right-[10px]">
                <div class="p-[2px]">
                  <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)">
                    <i class="bi bi-heart pointer-events-none flex text-white"></i>
                  </a>
                </div>
                <div class="p-[2px]">
                  <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                    href="javascript:void(0)" data-target=".quick-view-modal">
                    <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                  </a>
                </div>
              </div>
              <div
                class="absolute top-0 left-0 flex h-[35px] w-[90px] items-center justify-center rounded-br-lg bg-primary-color">
                <span class="text-md text-center font-semibold uppercase text-white">
                  25% Off</span>
              </div>
              <div class="h-[190px] overflow-hidden rounded-lg">
                <a href="#">
                  <img class="card-object-fit h-full w-full" src="images/cards/phones/phone_5.jpg" alt="product" />
                </a>
              </div>
              <div class="my-2 flex justify-between">
                <div class="flex">
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-star"></i>
                  <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                </div>
                <div>
                  <span class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                </div>
              </div>
              <div class="my-1">
                <a class="clamp break-all font-medium" href="#">
                  Samsung Galaxy Z Fold4
                </a>
              </div>
              <div class="my-1">
                <p class="clamp-2 text-sm text-gray-400">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Itaque culpa, odio, qui praesentium dignissimos eaque
                  dolorum porro alias neque, eius animi ipsa voluptates. Optio
                  repellat tempora voluptas, dolores ipsam ad!
                </p>
              </div>


              <div class="my-1">
                <span class="text-lg font-bold">$37.00</span>
                <span class="text-sm text-primary-color line-through">$50.00</span>
              </div>
              <div class="mt-auto">
                <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                  href="#">
                  <span class="font-bold uppercase text-white">View details</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="button-next btn-slider-1 transition-all-300 -right-16 group-hover:right-4">
          &#10095;
        </div>
        <div class="button-prev btn-slider-1 transition-all-300 -left-16 group-hover:left-4">
          &#10094;
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>

  <div class="banners-section-2 container mx-auto my-5 px-2 sm:px-8">
    <div class="grid grid-cols-12 gap-5">
      <div class="group relative col-span-12 h-[300px] overflow-hidden rounded-lg sm:col-span-6">
        <div class="overlay-gradient absolute z-[1] h-full w-full"></div>
        <img class="transition-all-300 h-full w-full object-cover hover:transform group-hover:scale-110"
          src="images/categories/vr-glass-hero.jpg" alt="banner-img" />
        <div class="absolute top-0 left-0 flex h-full w-full items-center">
          <div class="z-[2] p-5">
            <h3 class="text-lg font-bold uppercase text-primary-color drop-shadow-xl">
              Virtual Glasses
            </h3>
            <p class="my-5 text-white drop-shadow-md">
              Choose the ideal VR for you!
            </p>
            <a class="btn-effect inline-block rounded-lg bg-primary-color py-2 px-3 text-white" href="#">
              <span>Show more</span>
            </a>
          </div>
        </div>
      </div>
      <div class="group relative col-span-12 h-[300px] overflow-hidden rounded-lg sm:col-span-6">
        <div class="overlay-gradient absolute z-[1] h-full w-full"></div>
        <img class="transition-all-300 h-full w-full object-cover hover:transform group-hover:scale-110"
          src="images/categories/banner-robot.png" alt="banner-img" />
        <div class="absolute top-0 left-0 flex h-full w-full items-center">
          <div class="z-[2] p-5">
            <h3 class="text-lg font-bold uppercase text-primary-color drop-shadow-xl">
              Robot Vacuum
            </h3>
            <p class="my-5 text-white drop-shadow-md">
              Smarthome at the best price!
            </p>
            <a class="btn-effect inline-block rounded-lg bg-primary-color py-2 px-3 text-white" href="#">
              <span>Show more</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products-1-section container mx-auto my-5 px-2 sm:px-8">
    <div class="liner-container mt-5 flex justify-center border-b-2 border-[rgba(119,119,119,.17)]">
      <h1 class="mb-[-2px] inline-block border-b-2 border-primary-color pb-3 text-2xl font-bold uppercase">
        Notebooks
      </h1>
    </div>
    <div class="grid grid-cols-12 gap-5">
      <div class="group relative col-span-3 my-5 hidden overflow-hidden rounded-l-lg xl:block">
        <div class="overlay-gradient absolute z-[1] h-full w-full"></div>
        <img class="transition-all-300 h-full w-full object-cover hover:transform group-hover:scale-110"
          src="images/categories/ergonic-chair-01.jpg" alt="banner-img" />
        <div class="absolute top-0 left-0 flex h-full w-full items-center">
          <div class="z-[2] p-5">
            <h3 class="text-lg font-bold uppercase text-primary-color drop-shadow-xl" style="color: #d7d7d7;">
              Ergonic Chair
            </h3>
            <p class="my-5 text-white drop-shadow-md">
              Choose your laptop now!
            </p>
            <a class="btn-effect inline-block rounded-lg bg-primary-color py-2 px-3 text-white" href="#">
              <span>Show more</span>
            </a>
          </div>
        </div>
      </div>
      <div class="cards-slider-2 swiper-container col-span-12 xl:col-span-9">
        <div class="swiper swiper-cards-2 group relative flex items-center py-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/notebooks/note_1.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">Apple Macbook Air 13</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/notebooks/note_2.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">Asus ZenBook 14</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/notebooks/note_3.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">Lenovo V15</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/notebooks/note_4.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">HP 255 G7</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/notebooks/note_5.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">MSI Stealth</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/notebooks/note_6.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">Dell Inspiron</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="button-next btn-slider-1 transition-all-300 -right-16 group-hover:right-4">
            &#10095;
          </div>
          <div class="button-prev btn-slider-1 transition-all-300 -left-16 group-hover:left-4">
            &#10094;
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="products-2-section container mx-auto my-5 px-2 sm:px-8">
    <div class="liner-container mt-5 flex justify-center border-b-2 border-[rgba(119,119,119,.17)]">
      <h1 class="mb-[-2px] inline-block border-b-2 border-primary-color pb-3 text-2xl font-bold uppercase">
        Smartphones
      </h1>
    </div>
    <div class="grid grid-cols-12 gap-5">
      <div class="group relative col-span-3 my-5 hidden overflow-hidden rounded-l-lg xl:block">
        <div class="overlay-gradient absolute z-[1] h-full w-full"></div>
        <img class="transition-all-300 h-full w-full object-cover hover:transform group-hover:scale-110"
          src="images/categories/keyboard-custom.jpg" alt="banner-img" />
        <div class="absolute top-0 left-0 flex h-full w-full items-center">
          <div class="z-[2] p-5">
            <h3 class="text-lg font-bold uppercase text-primary-color drop-shadow-xl" style="color: #d7d7d7;">
              Keyboards
            </h3>
            <p class="my-5 text-white drop-shadow-md">
              Choose your keyboard now!
            </p>
            <a class="btn-effect inline-block rounded-lg bg-primary-color py-2 px-3 text-white" href="#">
              <span>Show more</span>
            </a>
          </div>
        </div>
      </div>
      <div class="cards-slider-2 swiper-container col-span-12 xl:col-span-9">
        <div class="swiper swiper-cards-2 group relative flex items-center py-5">
          <div class="swiper-wrapper">
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/phones/phone_1.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">Moto e7i Power</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/phones/phone_2.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">iPhone 12 Mini</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/phones/phone_3.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">Samsung A12</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/phones/phone_4.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">Nokia 5.4</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/phones/phone_5.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">Samsung Galaxy Z Fold4</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="swiper-slide h-auto">
              <div
                class="card-container transition-all-300 translateY-2 relative flex h-full flex-col overflow-hidden rounded-lg bg-white p-5 shadow-md hover:z-[2] hover:shadow-xl">
                <div class="absolute top-[10px] right-[10px]">
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-wishlist btn-wishlist transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center gap-2 rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                  <div class="p-[2px]">
                    <a class="tippy tippy-left-card-view btn-open-modal transition-all-300 flex h-9 w-9 cursor-pointer items-center justify-center rounded-lg bg-[rgba(0,0,0,.3)] hover:bg-primary-hover"
                      href="javascript:void(0)" data-target=".quick-view-modal">
                      <i class="bi bi-eye pointer-events-none flex text-xl text-white"></i>
                    </a>
                  </div>
                </div>
                <div class="h-[190px] overflow-hidden rounded-lg">
                  <a href="#">
                    <img class="card-object-fit h-full w-full" src="images/cards/phones/phone_6.jpg" alt="product" />
                  </a>
                </div>
                <div class="my-2 flex justify-between">
                  <div class="flex">
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-star"></i>
                    <i class="bi bi-star-fill flex text-base text-gray-200"></i>
                  </div>
                  <div>
                    <span
                      class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
                  </div>
                </div>
                <div class="my-1">
                  <a class="clamp break-all font-medium" href="#">Motorola Edge 30</a>
                </div>
                <div class="my-1">
                  <p class="clamp-2 text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque culpa, odio, qui praesentium dignissimos eaque
                    dolorum porro alias neque, eius animi ipsa voluptates.
                    Optio repellat tempora voluptas, dolores ipsam ad!
                  </p>
                </div>

                <div class="my-1">
                  <span class="text-lg font-bold">$37.00</span>
                </div>
                <div class="mt-auto">
                  <a class="btn-effect transition-all-300 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
                    href="#">
                    <span class="font-bold uppercase text-white">View details</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="button-next btn-slider-1 transition-all-300 -right-16 group-hover:right-4">
            &#10095;
          </div>
          <div class="button-prev btn-slider-1 transition-all-300 -left-16 group-hover:left-4">
            &#10094;
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="categories-section container mx-auto my-5 px-2 sm:px-8">
    <div class="liner-container mb-5 flex justify-center border-b-2 border-[rgba(119,119,119,.17)]">
      <h1 class="mb-[-2px] inline-block border-b-2 border-primary-color pb-3 text-2xl font-bold uppercase">
        Categories
      </h1>
    </div>
    <div class="swiper-container col-span-12 overflow-hidden rounded-lg md:col-span-8">
      <div class="swiper swiper-default group relative flex items-center py-5">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="grid grid-cols-3 xs:grid-cols-6 sm:grid-cols-9 lg:grid-cols-12">
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-gpu-card mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Video Cards</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-plug-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Power Supplies</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-motherboard-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Motherboard</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-cpu-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Processors</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-memory mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Memory Ram</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-device-hdd-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Hard Drives</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-device-ssd-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">SSD</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-pc mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Cases</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="grid grid-cols-3 xs:grid-cols-6 sm:grid-cols-9 lg:grid-cols-12">
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-mouse-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Mouses</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-keyboard-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Keyboards</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-printer-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Printers</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-laptop mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Notebooks</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-phone-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Phones</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-tablet-landscape-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Tablets</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-display mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Monitors</span>
                  </div>
                </a>
              </div>
              <div class="col-span-3 flex border">
                <a class="transition-all-300 flex w-full justify-center bg-white p-5 hover:relative hover:z-[2] hover:shadow-xl"
                  href="#">
                  <div>
                    <i class="bi bi-usb-drive-fill mb-2 flex justify-center text-[40px] text-primary-color"></i>
                    <span class="text-gray-40">Pendrives</span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination !top-[-5px] !bottom-[unset] text-right"></div>
      </div>
    </div>
  </div>

  <div class="brands-section container mx-auto my-5 px-2 sm:px-8">
    <div class="swiper swiper-brands group relative flex items-center">
      <div class="swiper-wrapper flex select-none items-center">
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/amd-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/asrock-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/asus-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/corsair-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/genius-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/gigabyte-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/hp-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/intel-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/kingston-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/lenovo-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/logitech-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/msi-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/nvidia-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/philips-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/redragon-logo.png"
            alt="logo" />
        </div>
        <div class="swiper-slide">
          <img class="transition-all-300 object-contain filter hover:filter-none" src="images/brands/samsung-logo.png"
            alt="logo" />
        </div>
      </div>
      <div class="button-next btn-slider-2 transition-all-300 -right-16 hover:text-primary-color group-hover:right-4">
        &#10095;
      </div>
      <div class="button-prev btn-slider-2 transition-all-300 -left-16 hover:text-primary-color group-hover:left-4">
        &#10094;
      </div>
    </div>
  </div>

  <!-- Modals: -->
  <div class="menu-mob modal transition-all-300 invisible fixed inset-0 z-50 h-full w-full bg-overlay opacity-0">
    <div class="flex h-full w-full">
      <div
        class="modal-content transition-all-300 relative left-[-999px] mr-auto flex h-full w-[288px] min-w-[250px] flex-col bg-white">
        <div class="w-full bg-secondary-color">
          <button class="btn-close-modal transition-all-300 absolute top-5 right-5 p-[3px] text-white">
            <i class="bi bi-x-lg text-stroke-medium pointer-events-none flex text-xl"></i>
          </button>
          <div class="py-12">
            <img src="images/svg/logo.svg" class="mx-auto h-[40px]" alt="logo" />
          </div>
        </div>
        <nav class="h-full w-full overflow-auto bg-white">
          <ul class="metismenu">
            <li class="border-b border-gray-200">
              <a class="flex select-none items-center p-2" href="index.html">
                <i class="bi bi-house-door mr-3 flex text-xl text-primary-color"></i>
                <span class="font-semibold">Home</span>
              </a>
            </li>
            <li class="border-b border-gray-200">
              <div class="metismenu-btn has-arrow flex cursor-pointer select-none items-center p-2"
                aria-expanded="false" role="menu">
                <i class="bi bi-person mr-3 flex text-xl text-primary-color"></i>
                <span class="font-semibold">My Account</span>
              </div>
              <div class="metismenu-content">
                <a class="btn-open-modal ml-10 block p-1" href="#" data-tab="0" data-target=".entry-modal">Login</a>
                <a class="btn-open-modal ml-10 block p-1" href="#" data-tab="1" data-target=".entry-modal">Sign Up</a>
              </div>
            </li>
            <li class="border-b border-gray-200">
              <div class="btn-open-modal cursor-pointer p-2" data-target=".wishlist-modal">
                <div class="pointer-events-none flex cursor-pointer select-none items-center">
                  <i class="bi bi-heart mr-3 flex text-xl text-primary-color"></i>
                  <span class="font-semibold">Wishlist</span>
                  <span class="badge ml-auto h-[22px] min-w-[22px] px-[6px]">0</span>
                </div>
              </div>
            </li>
            <li class="border-b border-gray-200">
              <div class="btn-open-modal cursor-pointer p-2" data-target=".shopping-cart-modal">
                <div class="pointer-events-none flex cursor-pointer select-none items-center">
                  <i class="bi bi-cart mr-3 flex text-xl text-primary-color"></i>
                  <span class="font-semibold">Shopping Cart</span>
                  <span class="badge ml-auto h-[22px] min-w-[22px] px-[6px]">0</span>
                </div>
              </div>
            </li>
            <li class="border-b border-gray-200">
              <div class="metismenu-btn has-arrow flex cursor-pointer select-none items-center p-2"
                aria-expanded="false" role="menu">
                <i class="bi bi-motherboard mr-3 flex text-xl text-primary-color"></i>
                <span class="font-semibold">Hardware</span>
              </div>
              <div class="metismenu-content">
                <a class="btn-open-modal ml-10 block p-1" href="#">Motherboards</a>
                <a class="btn-open-modal ml-10 block p-1" href="#">Processors</a>
                <a class="btn-open-modal ml-10 block p-1" href="#">Rams</a>
                <a class="btn-open-modal ml-10 block p-1" href="#">Video Cards</a>
                <a class="btn-open-modal ml-10 block p-1" href="#">Power Supplys</a>
                <a class="btn-open-modal ml-10 block p-1" href="#">Hard Drives</a>
                <a class="btn-open-modal ml-10 block p-1" href="#">SSD Disk</a>
              </div>
            </li>
            <li class="border-b border-gray-200">
              <div class="metismenu-btn has-arrow flex cursor-pointer select-none items-center p-2"
                aria-expanded="false" role="menu">
                <i class="bi bi-mouse mr-3 flex text-xl text-primary-color"></i>
                <span class="font-semibold">Peripherals</span>
              </div>
              <div class="metismenu-content">
                <a class="btn-open-modal ml-10 block p-1" href="#">Keywords</a>
                <a class="btn-open-modal ml-10 block p-1" href="#">Mouses</a>
                <a class="btn-open-modal ml-10 block p-1" href="#">Mics</a>
                <a class="btn-open-modal ml-10 block p-1" href="#">Webcam</a>
              </div>
            </li>
            <li class="border-b border-gray-200">
              <div class="metismenu-btn has-arrow flex cursor-pointer select-none items-center p-2"
                aria-expanded="false" role="menu">
                <i class="bi bi-pc-display mr-3 flex text-xl text-primary-color"></i>
                <span class="font-semibold">Computers</span>
              </div>
              <div class="metismenu-content">
                <a class="btn-open-modal ml-10 block p-1" href="#">Notebooks</a>
                <a class="btn-open-modal ml-10 block p-1" href="#">Desktops</a>
              </div>
            </li>
            <li class="border-b border-gray-200">
              <a class="flex cursor-pointer select-none items-center p-2" href="#">
                <i class="bi bi-tv mr-3 flex text-xl text-primary-color"></i>
                <span class="font-semibold">Monitors</span>
              </a>
            </li>
            <li class="border-b border-gray-200">
              <a class="flex cursor-pointer select-none items-center p-2" href="#">
                <i class="bi bi-printer mr-3 flex text-xl text-primary-color"></i>
                <span class="font-semibold">Printers</span>
              </a>
            </li>
            <li class="border-b border-gray-200">
              <a class="flex cursor-pointer select-none items-center p-2" href="#">
                <i class="bi bi-phone mr-3 flex text-xl text-primary-color"></i>
                <span class="font-semibold">Smartphones</span>
              </a>
            </li>

            <li class="border-b border-gray-200">
              <a class="flex select-none items-center p-2" href="contact-us.html">
                <i class="bi bi-telephone mr-3 flex text-xl text-primary-color"></i>
                <span class="font-semibold">Contact Us</span>
              </a>
            </li>
            <li class="border-b border-gray-200">
              <div class="metismenu-btn has-arrow flex cursor-pointer select-none items-center p-2"
                aria-expanded="false" role="menu">
                <span class="font-semibold">Pages</span>
              </div>
              <div class="metismenu-content">
                <a class="btn-open-modal ml-10 block p-1" href="wishlist.html">Wishlist</a>
                <a class="btn-open-modal ml-10 block p-1" href="shopping-cart.html">Shopping Cart</a>
                <a class="btn-open-modal ml-10 block p-1" href="product-details.html">Product Details</a>
                <a class="btn-open-modal ml-10 block p-1" href="checkout.html">Checkout</a>
                <a class="btn-open-modal ml-10 block p-1" href="shop-mixed.html">Shop - Mixed</a>

                <a class="btn-open-modal ml-10 block p-1" href="about-us.html">About Us</a>
                <a class="btn-open-modal ml-10 block p-1" href="my-account.html">My Account</a>
                <a class="btn-open-modal ml-10 block p-1" href="forgot-password.html">Forgot Password</a>
                <a class="btn-open-modal ml-10 block p-1" href="login.html">Login</a>
                <a class="btn-open-modal ml-10 block p-1" href="sign-up.html">Sign Up</a>
                <a class="btn-open-modal ml-10 block p-1" href="verification.html">Verification</a>

                <a class="btn-open-modal ml-10 block p-1" href="error404.html">Error 404</a>
                <a class="btn-open-modal ml-10 block p-1" href="message-sent.html">Message Sent</a>
                <a class="btn-open-modal ml-10 block p-1" href="purchase-completed.html">Purchase Completed</a>
                <a class="btn-open-modal ml-10 block p-1" href="purchase-failed.html">Purchase Failed</a>

              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <div
    class="shopping-cart-modal modal transition-all-300 invisible fixed inset-0 z-50 h-full w-full bg-overlay opacity-0">
    <div class="flex h-full w-full">
      <div
        class="modal-content transition-all-300 relative right-[-999px] ml-auto flex h-full w-[400px] min-w-[250px] flex-col bg-white">
        <div class="w-full">
          <div class="border-b-2 border-gray-200 p-5">
            <h3 class="text-xl font-bold uppercase">Shopping Cart</h3>
          </div>
          <button class="btn-close-modal transition-all-300 absolute top-5 right-5 p-[3px] hover:text-slate-400">
            <i class="bi bi-x-lg text-stroke-medium pointer-events-none flex text-xl"></i>
          </button>
        </div>
        <div class="h-full overflow-auto">
          <!-- If the shopping cart is empty (replace hidden with flex) -->
          <div class="hidden flex-col items-center justify-center gap-4 p-5">
            <i class="bi bi-cart-x text-8xl text-gray-200"></i>
            <p class="font-semibold">There are no products in the cart.</p>
            <a class="btn-effect transition-all-300 flex items-center justify-center gap-2 rounded-lg bg-primary-color p-2"
              href="#">
              <span class="font-bold uppercase text-white">Go to the store</span>
            </a>
          </div>
          <!-- -->
          <a class="transition-all-300 flex h-[100px] w-full items-center justify-between gap-5 bg-white p-2 hover:bg-gray-100"
            href="#">
            <div class="h-[80px] w-[80px] min-w-[80px] overflow-hidden rounded-lg border">
              <img class="h-full w-full object-cover" src="images/product/prod-1.jpg" alt="product" />
            </div>
            <div class="flex w-full flex-col">
              <h6 class="clamp-2 break-all text-lg font-semibold">
                Ryzen 5 3600x
              </h6>
              <div class="flex gap-2">
                <div class="flex gap-1 leading-7 text-gray-400">
                  <span>1</span>
                  <span>X</span>
                </div>
                <div class="flex items-center gap-2">
                  <span class="font-bold text-primary-color">$37.00</span>
                  <small class="text-xs text-primary-color line-through">$50.00</small>
                </div>
              </div>
            </div>
            <div class="transition-all-300 flex text-slate-400 hover:text-primary-color">
              <i class="bi bi-trash-fill pointer-events-none text-2xl"></i>
            </div>
          </a>
        </div>
        <div class="mt-auto border-t-2 border-gray-200 bg-white px-1 pt-5 xs:px-5">
          <div class="flex justify-between">
            <span class="text-lg uppercase">Subtotal:</span>
            <span class="text-lg font-semibold text-primary-color">$37.00</span>
          </div>
          <a class="btn-effect transition-all-300 my-5 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
            href="shopping-cart.html">
            <span class="font-bold uppercase text-white">View Shopping Cart</span>
          </a>
          <a class="btn-effect transition-all-300 my-5 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
            href="checkout.html">
            <span class="font-bold uppercase text-white">Checkout now</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="wishlist-modal modal transition-all-300 invisible fixed inset-0 z-50 h-full w-full bg-overlay opacity-0">
    <div class="flex h-full w-full">
      <div
        class="modal-content transition-all-300 relative right-[-999px] ml-auto flex h-full w-[400px] min-w-[250px] flex-col bg-white">
        <div class="w-full">
          <div class="border-b-2 border-gray-200 p-5">
            <h3 class="text-xl font-bold uppercase">Wishlist</h3>
          </div>
          <button class="btn-close-modal transition-all-300 absolute top-5 right-5 p-[3px] hover:text-slate-400">
            <i class="bi bi-x-lg text-stroke-medium pointer-events-none flex text-xl"></i>
          </button>
        </div>
        <div class="h-full overflow-auto">
          <!-- If the wishlist is empty (replace hidden with flex) -->
          <div class="hidden flex-col items-center justify-center gap-4 p-5">
            <i class="bi bi-heart text-8xl text-gray-200"></i>
            <p class="font-semibold">
              There are no products in the wishlist.
            </p>
            <a class="btn-effect transition-all-300 flex items-center justify-center gap-2 rounded-lg bg-primary-color p-2"
              href="#">
              <span class="font-bold uppercase text-white">Go to the store</span>
            </a>
          </div>
          <a class="transition-all-300 flex h-[100px] w-full items-center justify-between gap-5 bg-white p-2 hover:bg-gray-100"
            href="#">
            <div class="h-[80px] w-[80px] min-w-[80px] overflow-hidden rounded-lg border">
              <img class="h-full w-full object-cover" src="images/product/prod-1.jpg" alt="product" />
            </div>

            <div class="flex w-full flex-col">
              <h6 class="clamp-2 break-all text-lg font-semibold">
                Ryzen 5 3600x
              </h6>
              <div class="flex items-center gap-2">
                <span class="font-bold text-primary-color">$37.00</span>
                <small class="text-xs text-primary-color line-through">$50.00</small>
              </div>
            </div>

            <div class="transition-all-300 flex text-slate-400 hover:text-primary-color">
              <i class="bi bi-trash-fill pointer-events-none text-2xl"></i>
            </div>
          </a>
        </div>
        <div class="mt-auto border-t-2 border-gray-200 bg-white px-1 xs:px-5">
          <a class="btn-effect transition-all-300 my-5 flex w-full items-center justify-center rounded-lg bg-primary-color p-2"
            href="wishlist.html">
            <span class="font-bold uppercase text-white">View Wishlist</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div
    class="entry-modal modal transition-all-300 invisible fixed inset-0 z-50 flex h-full w-full flex-col items-center justify-start overflow-auto bg-overlay opacity-0">
    <div class="my-10 flex w-full justify-center">
      <div
        class="entry-content modal-content transition-all-300 relative mx-3 w-[500px] min-w-[250px] rounded-lg bg-white px-3 pb-3 pt-7 xs:px-5 xs:pb-5 md:m-5">
        <button
          class="btn-close-modal transition-all-300 absolute top-0 right-0 p-2 sm:top-[-10px] sm:right-[-10px] sm:rounded-lg sm:bg-primary-color sm:text-white sm:hover:bg-primary-hover">
          <i class="bi bi-x-lg text-stroke-medium pointer-events-none flex"></i>
        </button>
        <div class="tabs-container entry-container">
          <ul class="flex justify-between">
            <li
              class="btn-tabs tab-active-1 transition-all-300 active w-full cursor-pointer border bg-gray-200 p-2 text-center text-gray-400">
              Login
            </li>
            <li
              class="btn-tabs tab-active-1 transition-all-300 w-full cursor-pointer border bg-gray-200 p-2 text-center text-gray-400">
              Sign Up
            </li>
          </ul>
          <div class="tabs-content border border-t-transparent">
            <div class="tab-content invisible absolute w-full p-5 opacity-0">
              <div class="my-5">
                <img class="mx-auto" src="images/svg/logo.svg" alt="Besnik." />
              </div>
              <form action="#">
                <div class="flex flex-col gap-4">
                  <div class="relative flex h-[40px] items-center">
                    <i class="bi bi-person absolute ml-2 flex text-[24px] text-gray-400"></i>
                    <input class="input pl-10" type="text" placeholder="Username or Email" required />
                  </div>
                  <div class="relative flex h-[40px] items-center">
                    <i class="bi bi-lock absolute ml-2 flex text-[24px] text-gray-400"></i>
                    <input class="input pl-10" type="password" placeholder="Password" required />
                  </div>
                  <button class="btn-effect transition-all-300 h-full w-full rounded-lg bg-primary-color p-2"
                    type="submit">
                    <span class="font-bold uppercase text-white">Login</span>
                  </button>
                </div>
                <div class="my-2 flex flex-wrap items-center justify-between gap-2">
                  <label class="flex select-none items-center gap-2">
                    <input class="checkbox" type="checkbox" />
                    <span class="text-gray-title">Remember</span>
                  </label>
                  <a class="underlined-animated text-[#3091ff] after:bottom-0" href="#">Forgot Password?</a>
                </div>
              </form>
              <span class="or text-gray-title flex h-[50px] items-center py-2">
                <span class="mx-2 text-sm uppercase">Or</span>
              </span>
              <div class="flex flex-col flex-wrap justify-center gap-5 sm:flex-row">
                <button
                  class="transition-all-300 flex h-[50px] min-w-[100px] items-center justify-center rounded-lg bg-facebook hover:scale-110">
                  <i class="bi bi-facebook flex text-3xl text-white"></i>
                </button>
                <button
                  class="transition-all-300 flex h-[50px] min-w-[100px] items-center justify-center rounded-lg bg-twitter hover:scale-110">
                  <i class="bi bi-twitter flex text-3xl text-white"></i>
                </button>
                <button
                  class="transition-all-300 flex h-[50px] min-w-[100px] items-center justify-center rounded-lg bg-google hover:scale-110">
                  <i class="bi bi-google flex text-3xl text-white"></i>
                </button>
              </div>
            </div>
            <div class="tab-content invisible absolute w-full bg-white p-5 opacity-0">
              <div class="my-5">
                <img class="mx-auto" src="images/svg/logo.svg" alt="Besnik." />
              </div>
              <form action="#">
                <div class="flex flex-col gap-4">
                  <div class="relative flex h-[40px] items-center">
                    <i class="bi bi-person absolute ml-2 flex text-[24px] text-gray-400"></i>
                    <input class="input pl-10" type="text" placeholder="Name" required />
                  </div>
                  <div class="relative flex h-[40px] items-center">
                    <i class="bi bi-envelope absolute ml-2 flex text-[24px] text-gray-400"></i>
                    <input class="input pl-10" type="text" placeholder="Email" required />
                  </div>
                  <div class="relative flex h-[40px] items-center">
                    <i class="bi bi-lock absolute ml-2 flex text-[24px] text-gray-400"></i>
                    <input class="input pl-10" type="password" placeholder="Password" required />
                  </div>
                  <div class="relative flex h-[40px] items-center">
                    <i class="bi bi-lock-fill absolute ml-2 flex text-[24px] text-gray-400"></i>
                    <input class="input pl-10" type="password" placeholder="Confirm Password" required />
                  </div>
                  <button class="btn-effect transition-all-300 h-full w-full rounded-lg bg-primary-color p-2"
                    type="submit">
                    <span class="font-bold uppercase text-white">Sign Up</span>
                  </button>
                </div>
                <div class="my-2 flex items-center justify-between">
                  <label class="flex select-none items-center gap-2">
                    <input class="checkbox" type="checkbox" />
                    <span class="text-gray-title">I agree with all
                      <a class="underlined-animated text-[#3091ff] after:bottom-0" href="#">Terms of Use</a>
                      &
                      <a class="underlined-animated text-[#3091ff] after:bottom-0" href="#">Privacy Policy</a>.</span>
                  </label>
                </div>
              </form>
              <span class="or text-gray-title flex h-[50px] items-center py-2">
                <span class="mx-2 text-sm uppercase">Or</span>
              </span>
              <div class="flex flex-col flex-wrap justify-center gap-5 sm:flex-row">
                <button
                  class="transition-all-300 flex h-[50px] min-w-[100px] items-center justify-center rounded-lg bg-facebook hover:scale-110">
                  <i class="bi bi-facebook flex text-3xl text-white"></i>
                </button>
                <button
                  class="transition-all-300 flex h-[50px] min-w-[100px] items-center justify-center rounded-lg bg-twitter hover:scale-110">
                  <i class="bi bi-twitter flex text-3xl text-white"></i>
                </button>
                <button
                  class="transition-all-300 flex h-[50px] min-w-[100px] items-center justify-center rounded-lg bg-google hover:scale-110">
                  <i class="bi bi-google flex text-3xl text-white"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div
    class="quick-view-modal modal transition-all-300 invisible fixed inset-0 z-50 flex h-full w-full flex-col items-center justify-start overflow-auto bg-overlay opacity-0">
    <div class="my-10 flex w-full justify-center">
      <div
        class="modal-content relative mx-3 w-[900px] min-w-[250px] scale-0 rounded-lg bg-body px-3 pb-3 pt-7 xs:px-5 xs:pb-5 md:m-5">
        <button
          class="btn-close-modal transition-all-300 absolute top-0 right-0 p-2 sm:top-[-10px] sm:right-[-10px] sm:rounded-lg sm:bg-primary-color sm:text-white sm:hover:bg-primary-hover">
          <i class="bi bi-x-lg text-stroke-medium pointer-events-none flex"></i>
        </button>
        <div class="grid grid-cols-12 gap-5">
          <div class="col-span-12 max-h-[500px] md:col-span-7">
            <div class="swiper swiper-top group relative flex items-center rounded-lg">
              <div class="swiper-wrapper z-[5]">
                <div class="swiper-slide">
                  <div class="swiper-zoom-container">
                    <img src="images/product/prod-1.jpg" alt="product" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-zoom-container">
                    <img src="images/product/prod-2.jpg" alt="product" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-zoom-container">
                    <img src="images/product/prod-3.jpg" alt="product" />
                  </div>
                </div>
              </div>
              <div class="button-next btn-slider-1 transition-all-300 -right-16 group-hover:right-4">
                &#10095;
              </div>
              <div class="button-prev btn-slider-1 transition-all-300 -left-16 group-hover:left-4">
                &#10094;
              </div>
            </div>
            <div class="swiper swiper-thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide cursor-pointer rounded-lg">
                  <img src="images/product/prod-1.jpg" alt="product" />
                </div>
                <div class="swiper-slide cursor-pointer rounded-lg">
                  <img src="images/product/prod-2.jpg" alt="product" />
                </div>
                <div class="swiper-slide cursor-pointer rounded-lg">
                  <img src="images/product/prod-3.jpg" alt="product" />
                </div>
              </div>
              <div class="button-next btn-slider-1 transition-all-300 -right-16 group-hover:right-4">
                &#10095;
              </div>
              <div class="button-prev btn-slider-1 transition-all-300 -left-16 group-hover:left-4">
                &#10094;
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-5">
            <div class="my-1">
              <a class="clamp-2 transition-all-300 break-all text-2xl font-medium hover:text-primary-color" href="#">
                Ryzen 5 3600x
              </a>
            </div>
            <div class="my-2 flex justify-between">
              <div class="flex">
                <i class="bi bi-star-fill flex text-base text-star"></i>
                <i class="bi bi-star-fill flex text-base text-star"></i>
                <i class="bi bi-star-fill flex text-base text-star"></i>
                <i class="bi bi-star-fill flex text-base text-star"></i>
                <i class="bi bi-star-fill flex text-base text-gray-200"></i>
              </div>
              <div class="ml-auto">
                <span class="rounded-md bg-green-300 py-1 px-2 text-xs font-bold uppercase text-white">instock</span>
              </div>
            </div>
            <div class="my-5 flex items-center gap-5">
              <div class="flex rounded-lg bg-white py-2 px-3 text-primary-color">
                <span class="text-sm">$</span>
                <span class="text-2xl font-semibold leading-7">37.00</span>
              </div>
              <div class="flex flex-col">
                <span class="text-md font-semibold uppercase text-green-400">
                  25% Off</span>
                <span class="prev-price text-sm text-primary-color line-through">$50.00</span>
              </div>
            </div>
            <div class="my-4">
              <p class="clamp-5 break-all">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                cupiditate repellat magni exercitationem non, quaerat
                consequatur. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Earum cupiditate.
              </p>
            </div>
            <div class="flex gap-1">
              <form action="javascript:void(0)">
                <div class="block">
                  <div class="my-3 flex flex-col gap-1">
                    <span class="font-bold">Size:</span>
                    <ul class="flex flex-wrap gap-3">
                      <li class="relative">
                        <input class="peer sr-only" type="radio" value="" name="size" id="size-1" checked="" />
                        <label
                          class="flex h-8 w-10 cursor-pointer items-center justify-center rounded-lg border border-gray-300 bg-white hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-primary-color"
                          for="size-1">
                          S
                        </label>
                      </li>
                      <li class="relative">
                        <input class="peer sr-only" type="radio" value="" name="size" id="size-2" />
                        <label
                          class="flex h-8 w-10 cursor-pointer items-center justify-center rounded-lg border border-gray-300 bg-white hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-primary-color"
                          for="size-2">
                          M
                        </label>
                      </li>
                      <li class="relative">
                        <input class="peer sr-only" type="radio" value="" name="size" id="size-3" />
                        <label
                          class="flex h-8 w-10 cursor-pointer items-center justify-center rounded-lg border border-gray-300 bg-white hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-primary-color"
                          for="size-3">
                          L
                        </label>
                      </li>
                      <li class="relative">
                        <input class="peer sr-only" type="radio" value="" name="size" id="size-4" />
                        <label
                          class="flex h-8 w-10 cursor-pointer items-center justify-center rounded-lg border border-gray-300 bg-white hover:bg-gray-50 focus:outline-none peer-checked:border-transparent peer-checked:ring-2 peer-checked:ring-primary-color"
                          for="size-4">
                          XL
                        </label>
                      </li>
                    </ul>
                  </div>
                  <div class="my-3 flex gap-2">
                    <div>
                      <label class="inline-flex items-center">
                        <input type="radio"
                          class="radio bg-blue-600 text-blue-600 checked:ring-blue-300 focus:ring-blue-300"
                          name="radio-colors" value="0" checked />
                      </label>
                    </div>
                    <div>
                      <label class="inline-flex items-center">
                        <input type="radio"
                          class="radio bg-red-600 text-red-600 checked:ring-red-300 focus:ring-red-300"
                          name="radio-colors" value="1" />
                      </label>
                    </div>
                    <div>
                      <label class="inline-flex items-center">
                        <input type="radio"
                          class="radio bg-yellow-600 text-yellow-600 checked:ring-yellow-300 focus:ring-yellow-300"
                          name="radio-colors" value="2" />
                      </label>
                    </div>
                    <div>
                      <label class="inline-flex items-center">
                        <input type="radio" class="radio bg-black text-black checked:ring-gray-400 focus:ring-gray-400"
                          name="radio-colors" value="3" />
                      </label>
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap justify-start gap-5">
                  <div class="quantity inline-flex rounded-lg bg-white">
                    <input
                      class="quantity-value input-number w-12 border-none bg-transparent p-1 text-center text-lg text-gray-400 focus:border-none focus:ring-0"
                      type="number" value="0" />
                    <div class="flex w-5 flex-col justify-between">
                      <button class="quantity-btn increment text-primary-color" type="button">
                        <i class="bi bi-caret-up-fill"></i>
                      </button>
                      <button class="quantity-btn decrement text-primary-color" type="button">
                        <i class="bi bi-caret-down-fill"></i>
                      </button>
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <button
                      class="btn-effect transition-all-300 flex h-full w-full items-center justify-center gap-2 rounded-lg bg-primary-color p-2"
                      type="submit">
                      <i class="bi bi-cart-fill flex text-xl text-white"></i>
                      <span class="font-bold uppercase text-white">Add to cart</span>
                    </button>
                    <a class="tippy tippy-wishlist btn-wishlist transition-all-300 flex min-h-[40px] min-w-[40px] cursor-pointer items-center justify-center gap-2 rounded-lg bg-primary-color p-2 hover:bg-primary-hover"
                      href="javascript:void(0)">
                      <i class="bi bi-heart pointer-events-none flex text-white"></i>
                    </a>
                  </div>
                </div>
              </form>
            </div>
            <div class="mt-5 border-t border-gray-200 pt-5">
              <div>
                <b>Categories: </b>
                <span><a href="#" class="text-zinc-500">Hardware</a>,
                  <a href="#" class="text-zinc-500">Processors</a></span>
              </div>
              <div class="flex gap-2">
                <b>Share:</b>
                <div class="flex items-center gap-[10px]">
                  <a href="#">
                    <i class="bi bi-facebook transition-all-300 flex text-zinc-500 hover:text-primary-color"></i>
                  </a>
                  <a href="#">
                    <i class="bi bi-twitter transition-all-300 flex text-zinc-500 hover:text-primary-color"></i>
                  </a>
                  <a href="#">
                    <i class="bi bi-whatsapp transition-all-300 flex text-zinc-500 hover:text-primary-color"></i>
                  </a>
                  <a href="#">
                    <i class="bi bi-link-45deg transition-all-300 flex text-zinc-500 hover:text-primary-color"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- -->

  <div class="btn-gotop transition-all-300 invisible fixed bottom-[-999px] right-10 z-50 opacity-0"
    style="background: #011638;">
    <div class="transition-all-300 cursor-pointer rounded-lg bg-[rgba(0,0,0,.3)] p-3 hover:bg-primary-color">
      <i class="bi bi-chevron-compact-up pointer-events-none flex text-2xl text-white" style="color: #fff;"></i>
    </div>
  </div>

  <div class="loader fixed z-[999] flex h-screen w-screen items-center justify-center bg-body">
    <div class="loader-content flex flex-col items-center gap-2">
      <span class="text-3xl font-semibold text-gray-200">Besnik.</span>
      <div class="flex h-1 w-40 gap-1 overflow-hidden bg-gray-200">
        <div class="animation-loader h-full w-20 bg-primary-color"></div>
      </div>
    </div>
  </div>

  <footer class="footer-section mt-auto w-full bg-[#00abcc] text-gray-400">
    <div class="container mx-auto grid grid-cols-12 px-4 sm:px-8">
      <div class="col-span-12 py-[50px]">
        <div class="grid grid-cols-12 gap-2">
          <div class="col-span-12 sm:col-span-6 lg:col-span-4">
            <div class="pb-6">
              <img src="images/svg/logo.svg" class="h-[40px]" alt="logo" />
            </div>
            <div>
              <div class="flex items-center gap-[10px] py-2">
                <i class="bi bi-envelope-fill flex text-xl text-primary-color"></i>
                <a class="break-all" href="#">besnik.@example.com</a>
              </div>
              <div class="flex items-center gap-[10px] py-2">
                <i class="bi bi-telephone-fill flex text-xl text-primary-color"></i>
                <a class="break-all" href="#">0123456789</a>
              </div>
              <div class="flex items-center gap-[10px] py-2">
                <i class="bi bi-geo-alt-fill flex text-xl text-primary-color"></i>
                <span class="break-all">22/26 - TP HCM</span>
              </div>
            </div>
          </div>
          <div class="col-span-12 py-5 sm:col-span-6 sm:py-0 lg:col-span-4">
            <h3 class="pb-2 font-semibold text-gray-300">Useful Links</h3>
            <div>
              <ul class="flex flex-col flex-wrap gap-2 text-sm xs:max-h-[200px]">
                <li class="group relative flex items-center hover:text-primary-color">
                  <i
                    class="bi bi-circle-fill invisible absolute -left-4 flex text-[6px] text-primary-color group-hover:visible"></i>
                  <a href="#" class="transition-all-300 group-hover:text-white">Terms &amp; Conditions</a>
                </li>
                <li class="group relative flex items-center hover:text-primary-color">
                  <i
                    class="bi bi-circle-fill invisible absolute -left-4 flex text-[6px] text-primary-color group-hover:visible"></i>
                  <a href="#" class="transition-all-300 group-hover:text-white">New products</a>
                </li>
                <li class="group relative flex items-center hover:text-primary-color">
                  <i
                    class="bi bi-circle-fill invisible absolute -left-4 flex text-[6px] text-primary-color group-hover:visible"></i>
                  <a href="#" class="transition-all-300 group-hover:text-white">Best sales</a>
                </li>
                <li class="group relative flex items-center hover:text-primary-color">
                  <i
                    class="bi bi-circle-fill invisible absolute -left-4 flex text-[6px] text-primary-color group-hover:visible"></i>
                  <a href="#" class="transition-all-300 group-hover:text-white">Secure payment</a>
                </li>
                <li class="group relative flex items-center hover:text-primary-color">
                  <i
                    class="bi bi-circle-fill invisible absolute -left-4 flex text-[6px] text-primary-color group-hover:visible"></i>
                  <a href="#" class="transition-all-300 group-hover:text-white">Services</a>
                </li>
                <li class="group relative flex items-center hover:text-primary-color">
                  <i
                    class="bi bi-circle-fill invisible absolute -left-4 flex text-[6px] text-primary-color group-hover:visible"></i>
                  <a href="#" class="transition-all-300 group-hover:text-white">Delivery</a>
                </li>
                <li class="group relative flex items-center hover:text-primary-color">
                  <i
                    class="bi bi-circle-fill invisible absolute -left-4 flex text-[6px] text-primary-color group-hover:visible"></i>
                  <a href="#" class="transition-all-300 group-hover:text-white">Legal Notice</a>
                </li>
                <li class="group relative flex items-center hover:text-primary-color">
                  <i
                    class="bi bi-circle-fill invisible absolute -left-4 flex text-[6px] text-primary-color group-hover:visible"></i>
                  <a href="#" class="transition-all-300 group-hover:text-white">About us</a>
                </li>
                <li class="group relative flex items-center hover:text-primary-color">
                  <i
                    class="bi bi-circle-fill invisible absolute -left-4 flex text-[6px] text-primary-color group-hover:visible"></i>
                  <a href="#" class="transition-all-300 group-hover:text-white">Contact us</a>
                </li>
                <li class="group relative flex items-center hover:text-primary-color">
                  <i
                    class="bi bi-circle-fill invisible absolute -left-4 flex text-[6px] text-primary-color group-hover:visible"></i>
                  <a href="#" class="transition-all-300 group-hover:text-white">Stores</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <h3 class="pb-2 font-semibold text-gray-300">
              Be the first to know it
            </h3>
            <span class="py-2 text-sm">Subscribe to receive updates on our store and special
              offers</span>
            <form class="py-2">
              <div class="flex overflow-hidden rounded-lg bg-gray-rgba p-2">
                <input
                  class="w-full border-none bg-transparent pl-2 focus:border-none focus:ring-0 focus:ring-transparent"
                  type="text" placeholder="Your email address" />
                <button class="p-1" type="submit">
                  <i class="bi bi-send flex text-lg text-white"></i>
                </button>
              </div>
            </form>
            <div class="flex gap-2 py-2">
              <div class="relative h-8 w-8 overflow-hidden rounded-full">
                <a class="instagram-before flex h-8 w-8 items-center justify-center bg-gray-rgba text-center text-white"
                  href="#">
                  <i class="bi bi-instagram relative z-[2] flex"></i>
                </a>
              </div>
              <div class="transition-all-300 h-8 w-8 rounded-full bg-gray-rgba hover:bg-facebook">
                <a class="flex h-8 w-8 items-center justify-center" href="#">
                  <i class="bi bi-facebook flex text-white"></i>
                </a>
              </div>
              <div class="transition-all-300 h-8 w-8 rounded-full bg-gray-rgba hover:bg-twitter">
                <a class="flex h-8 w-8 items-center justify-center" href="#">
                  <i class="bi bi-twitter flex text-white"></i>
                </a>
              </div>
              <div class="transition-all-300 h-8 w-8 rounded-full bg-gray-rgba hover:bg-youtube">
                <a class="flex h-8 w-8 items-center justify-center" href="#">
                  <i class="bi bi-youtube flex text-white"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-12 pb-5">
        <p class="text-center">
          © <span class="current-year"></span> Example. All rights reserved
        </p>
      </div>
    </div>
  </footer>
  <script src="./unpkg.com/popperjs/core.js"></script>
  <script src="https://unpkg.com/tippy.js@6"></script>
  <script src="./unpkg.com/swiper@11.0.4/swiper-bundle.min.js"></script>
  <script src="./unpkg.com/metismenujs@1.4.0/dist/metismenujs.min.js"></script>
  <script src="./libraries/iziToast/iziToast.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>