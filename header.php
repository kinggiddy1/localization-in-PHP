<?php require_once('config/config.php'); ?>
<header>
   <div class="header-area">
      <div id="sticky-header" class="main-header-area">
         <div class="container-fluid p-0">
            <div class="row align-items-center no-gutters">
               <div class="col-xl-5 col-lg-6">
                  <div class="main-menu d-none d-lg-block">
                     <nav>
                        <ul id="navigation">
                           <li><a class="active" href="<?php echo BASEROOT; ?>"><?php echo __('home'); ?></a></li>
                           <li><a href="<?php echo BASEROOT; ?>rooms/"><?php echo __('rooms'); ?></a></li>
                           <li><a href="<?php echo BASEROOT; ?>conferences/"><?php echo __('conferences'); ?></a></li>
                           <li>
                              <a href="#"><?php echo __('service'); ?> <i class="ti-angle-down"></i></a>
                              <ul class="submenu">
                                 <li><a href="<?php echo BASEROOT; ?>restaurant & bar/"><?php echo __('restaurant'); ?></a></li>
                                 <li><a href="<?php echo BASEROOT; ?>recreation-facilities/"><?php echo __('recreation'); ?></a></li>
                                 <li><a href="<?php echo BASEROOT; ?>services/"><?php echo __('other_services'); ?></a></li>
                              </ul>
                           </li>
                           <li><a href="<?php echo BASEROOT; ?>3d/"><?php echo __('tour'); ?></a></li>
                           <li><a href="<?php echo BASEROOT; ?>gallery-2/"><?php echo __('gallery'); ?></a></li>
                           <li>
                              <a href="#"><?php echo __('about'); ?> <i class="ti-angle-down"></i></a>
                              <ul class="submenu">
                                 <li><a href="<?php echo BASEROOT; ?>about-us/"><?php echo __('about_us'); ?></a></li>
                                 <li><a href="<?php echo BASEROOT; ?>contact-us/"><?php echo __('contact'); ?></a></li>
                              </ul>
                           </li>
                           <li class="d-lg-none">
                              <a class="popup-with-form" href="#test-form"><?php echo __('book_now'); ?></a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-2 col-12 text-center">
                  <div class="logo-img">
                     <a href="<?php echo BASEROOT; ?>">
                        <img src="<?php echo BASEROOT; ?>img/bestlogo.png" alt="Logo" width="150" height="120" class="img-fluid mx-auto d-block">
                     </a>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                  <div class="book_room">
                     <div class="socail_links">
                        <ul>
                           <li><a href="https://www.facebook.com/bestview.hotelmusanze/"><i class="fa fa-facebook-square"></i></a></li>
                           <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                     </div>
                     <!-- Language Switcher -->
                     <div class="language-switcher" style="display:inline-block; margin-left:15px; color:white;">
                        <a href="?lang=en" style="color:white; margin-right:5px;">EN</a> | 
                        <a href="?lang=fr" style="color:white; margin-left:5px;">FR</a>
                     </div>
                     <div class="book_btn" style="margin-left: 15px;">
                        <a class="popup-with-form" href="#test-form"><?php echo __('book_now'); ?></a>
                     </div>
                  </div>
               </div>

               <!-- Booking Form Popup -->
               <form id="test-form" class="white-popup-block mfp-hide">
                  <div class="popup_inner container">
                     <div class="form-group row">
                        <div class="col-12 text-center">
                           <h3><?php echo __('choose_booking'); ?></h3>
                        </div>
                     </div>
                     <div class="form-group row justify-content-center" id="booking-options">
                        <a href="#room-form" class="boxed-btn33 popup-with-form"><?php echo __('book_room'); ?></a>
                        <a href="#conference-form" class="boxed-btn33 popup-with-form"><?php echo __('book_conference'); ?></a>
                     </div>
                  </div>
               </form>

               <div class="col-12">
                  <div class="mobile_menu d-block d-lg-none"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
