<?php
error_reporting(0);
class APP
{  
 


   public function header()
   {
      $header = '
     
   <body>
      <aside aria-label="alert banner" class="website-alert">
      <svg focusable="false" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" aria-hidden="true" class="website-alert__icon" style="will-change: transform;">
         <path d="M17 22v-9h-4v2h2v7h-3v2h8v-2h-3zM16 7a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 16 7z"></path>
         <path d="M16 30a14 14 0 1 1 14-14 14 14 0 0 1-14 14zm0-26a12 12 0 1 0 12 12A12 12 0 0 0 16 4z"></path>
      </svg>
      <p class="website-alert__text"><span>Data Table Carbon System v1 is live!</span><span></span> <span></span></p>
      <a class="website-alert__button" tabindex="-1" href="#">
         <button class="bx--btn bx--btn--secondary bx--btn--sm" type="button">
            <span>Go</span>
            <svg focusable="false" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" aria-hidden="true" style="will-change: transform;">
               <path d="M18 6l-1.43 1.39L24.15 15H3v2h21.15l-7.58 7.57L18 26l10-10L18 6z"></path>
            </svg>
         </button>
      </a>
   </aside>
   <header aria-label="Header" class="bx--header bx--header--website" role="banner">
      <a class="bx--skip-to-content" href="#main-content" tabindex="0">Skip to main content</a>
      <button aria-label="Open menu" class="bx--header__action--menu bx--header__action bx--header__menu-trigger bx--header__menu-toggle" title="Open menu" type="button">
         <svg focusable="false" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" style="will-change: transform;">
            <path d="M2 14.8h16V16H2zm0-3.6h16v1.2H2zm0-3.6h16v1.2H2zM2 4h16v1.2H2z"></path>
         </svg>
      </button>
      <a  class="bx--header__name" href="#">Data Table &nbsp;<span>Carbon System</span></a>
      <div class="bx--header__global">
         
         <a  id="clickrightnav" aria-label="Switch" class="bx--header__action--switcher bx--header__action" type="button">
            <svg focusable="false" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32" aria-hidden="true" style="will-change: transform;">
               <path d="M14 5h4v4h-4zM5 5h4v4H5zm18 0h4v4h-4zm-9 9h4v4h-4zm-9 0h4v4H5zm18 0h4v4h-4zm-9 9h4v4h-4zm-9 0h4v4H5zm18 0h4v4h-4z"></path>
            </svg>
         </a>
         <a href="index.php" aria-label="Switch" class="bx--header__action--switcher bx--header__action" type="button">
            <i style="color:white" class="fas fa-power-off"></i>
         </a>
      </div>
   </header>
   <div    class="page-header">
      <div class="page-tabs">
         <div class="bx--grid">
            <div class="bx--row">
               <div class="bx--col-lg-12 bx--offset-lg-4 bx--no-gutter">
               <nav data-tabs class="bx--tabs" role="navigation">

               <ul class="bx--tabs__nav bx--tabs__nav--hidden" role="tablist">
                  <li class="bx--tabs__nav-item bx--tabs__nav-item--selected " data-target=".tab-1" role="presentation">
                     <a style="color:white" tabindex="0" id="tab-link-1" class="bx--tabs__nav-link" href="javascript:void(0)" role="tab" aria-controls="tab-panel-1" aria-selected="true">Table</a>
                  </li>
                  <li class="bx--tabs__nav-item " data-target=".tab-2" role="presentation">
                     <a style="color:white" tabindex="0" id="tab-link-2" class="bx--tabs__nav-link" href="javascript:void(0)" role="tab" aria-controls="tab-panel-2">SQL</a>
                  </li>
                  
               </ul>
               </nav>
               

 
               </div>
               
            </div>
         </div>
      </div>
   </div>';

   return $header;
   }


 
   
}
?>
