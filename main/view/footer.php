<div class="footer">
  <div class="footerList">
    <div class="footerListDiv">
      <p class="footerListTextB">
          <?php echo $dataFooter["Information" . $this->_language]; ?>
      </p>

        <a class="footerListText" href="<?php echo '/' . $this->_language . '/aboutUs/parisine'; ?>">
            <?php echo $dataFooter["InformationABOUT US" . $this->_language]; ?>
      </a>
      
      <p class="footerListText">
          <?php echo $dataFooter["InformationFIND A PARISINE STORES" . $this->_language]; ?>
      </p>

        <a class="footerListText" href="<?php echo '/' . $this->_language . '/aboutUs/visit'; ?>">
            <?php echo $dataFooter["InformationCONTACT US" . $this->_language]; ?>
      </a>

      <a class="footerListText" href="<?php echo '/' . $this->_language . '/siteMap'; ?>">
          <?php echo $dataFooter["InformationSITE MAP" . $this->_language]; ?>
      </a>
      
      <a class="footerListText" href="<?php echo '/' . $this->_language . '/FAQ'; ?>">
          <?php echo $dataFooter["InformationFAQS" . $this->_language]; ?>
      </a>
      
      <p class="footerListText">
          <?php echo $dataFooter["InformationHELPS" . $this->_language]; ?>
      </p>
    </div>
    
    <div class="footerListDiv">
      <p class="footerListTextB">
          <?php echo $dataFooter["Social" . $this->_language]; ?>
      </p>
      
      <p class="footerListText">
          <?php echo $dataFooter["SocialNEWSLETTER" . $this->_language]; ?>
      </p>
      
      <p class="footerListText">
          <?php echo $dataFooter["SocialPRESS ACCESS" . $this->_language]; ?>
      </p>

        <a class="footerListText" href="<?php echo '/' . $this->_language . '/aboutUs/visit'; ?>">
            <?php echo $dataFooter["SocialCUSTOMERS SERVICE" . $this->_language]; ?>
      </a>

        <a class="footerListText" href="<?php echo '/' . $this->_language . '/privacyPolicy/ppIndex'; ?>">
            <?php echo $dataFooter["SocialPRIVACY POLICY" . $this->_language]; ?>
      </a>

        <a class="footerListText" href="<?php echo '/' . $this->_language . '/termsAndconditions/ourTermsCon'; ?>">
            <?php echo $dataFooter["SocialTERMS AND CONDITIONS" . $this->_language]; ?>
      </a>
      
      <p class="footerListText">
          <?php echo $dataFooter["SocialGIFT CARD" . $this->_language]; ?>
      </p>
    </div>
    
    <div class="footerListDiv">
      <p class="footerListTextB">
          <?php echo $dataFooter["MyAccount" . $this->_language]; ?>
      </p>

        <a class="footerListText" href="<?php echo '/' . $this->_language . '/login/index'; ?>">
            <?php echo $dataFooter["MyAccountSIGN IN" . $this->_language]; ?>
      </a>
      
      <p class="footerListText">
          <?php echo $dataFooter["MyAccountMY WISH LIST" . $this->_language]; ?>
      </p>
    </div>
    
    <div class="footerListDiv">
      <p class="footerListTextB">
          <?php echo $dataFooter["NewsLetter" . $this->_language]; ?>
      </p>


      <div class="input-group footerSearchDiv">
          <form class="gridB" action="<?php echo '/' . $this->_language . '/mail/newsLetter' ?>" method="post">
          <div class ="fSearch">
                <input class="footerSearch" type="email" placeholder="<?php echo $dataFooter["EnterEmail". $this->_language]; ?> ." name="email"
                       onfocus="footerSearchOnFocus()" onBlur="footerSearchOnBlur()">

                <button class="footerSearchAddOnBlack" id="footerSearchAddOn" type="submit">
                </button>
          </div>
          </form>
      </div>
      
      <button class="footerMediaIconFacebook">
      </button>
      
      <button class="footerMediaIconInstagram">
      </button>
      
      <button class="footerMediaIconPinterest">
      </button>
    </div>
  </div>
  
  <div class="mobileFooter">
    <div class="mobileFooterList">
      <span>
        Information
      </span>
      
      <button href="#">
        ＞
      </button>
      
      <div class="mobileFooterListAddOn">
        About us
      </div>
      
      <div class="mobileFooterListAddOn">
        Find a Parisine store
      </div>
      
      <div class="mobileFooterListAddOn">
        Contact us
      </div>
      
      <a class="mobileFooterListAddOn" href="<?php echo '/' . $this->_language . '/siteMap'; ?>">
        Site map
      </a>
      
      <a class="mobileFooterListAddOn" href="<?php echo '/' . $this->_language . '/FAQ'; ?>">
        FAQ's
      </a>
      
      <div class="mobileFooterListAddOn">
        Helps
      </div>
    </div>
    
    <div class="mobileFooterList">
      <span>
        Social
      </span>
      
      <button href="#">
        ＞
      </button>
      
      <div class="mobileFooterListAddOn">
        Newsletter
      </div>
      
      <div class="mobileFooterListAddOn">
        Press access
      </div>
      
      <div class="mobileFooterListAddOn">
        Customer service
      </div>
      
      <div class="mobileFooterListAddOn">
        Privacy policy
      </div>
      
      <div class="mobileFooterListAddOn">
        Terms and conditions
      </div>
      
      <div class="mobileFooterListAddOn">
        Gift card
      </div>
    </div>
    
    <div class="mobileFooterList">
      <span>
        My account
      </span>
      
      <button href="#">
        ＞
      </button>
      
      <div class="mobileFooterListAddOn">
        Sign in
      </div>
      
      <div class="mobileFooterListAddOn">
        My wish list
      </div>
    </div>
    
    <div class="mobileFooterNewsLetter">
      <span>
        Newsletter
      </span>

          <div class="input-group mobileFooterSearchDiv">
              <div class ="mfSearch">
                    <input class="mobileFooterSearch" type="email" placeholder="ENTER YOUR EMAIL.." name="footerSearch"
                           onfocus="footerSearchOnFocus()" onBlur="footerSearchOnBlur()">

                    <button class="mobileFooterSearchAddOn" id="footerSearchAddOn" type="submit">
                    </button>
               </div>
          </div>

    </div>
    
    <div class="mobileFooterSocialIcon">
      <button class="footerMediaIconFacebook"></button>
      
      <button class="footerMediaIconInstagram"></button>
      
      <button class="footerMediaIconPinterest"></button>
    </div>
  </div>
  
  <div class="footerCopyright">
      <?php echo $dataFooter["footerCopyRight" . $this->_language]; ?>
  </div>
</div>