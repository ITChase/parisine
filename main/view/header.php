<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset ($_SESSION['user']) || isset($_SESSION['email'])) {
        if (isset($_POST['addCart'])) {
            if (!isset($_SESSION['cartNum'])) {
                $_SESSION['cartNum'] = 0;
            }
            $_SESSION['cartItem'][] = array(
                "cartProduct" => $productName,
                "cartQuantity" => $_POST['cartQuantity'],
                "cartPrice" => $productPrice,
                "productImage" => $productImage
            );
            $_SESSION['cartNum']++;
        }
        if (isset($_POST['removeCart'])) {
            require('removeCart.php');
        }
    }
}


?>
<div class="header">
  <div class="headerMenuLeft">
    <select id="headerSelect" title="language" onchange="language()">
      <option value="EN">EN</option>
      
      <option value="ZH">ZH</option>

        <option value="CN">CN</option>

    </select>


      <?php if (!isset($_SESSION['loginchecker'])) {
          echo '<div class="headerMenuLeftButton">
       <a class="headerMenuA" href="/';
          echo $this->_language .'/login/index">';
          echo $dataHeader["Login" . $this->_language]. '</a></div>';
      }
      ?>
    
    <div class="headerMenuLeftButton">
      <a class="headerMenuA" href="/<?php echo $this->_language; ?>/account/dashBoard">
          <?php echo $dataHeader["MyAccount" . $this->_language]; ?>
      </a>
    </div>
    
    <div class="headerMenuLeftButton">
      <a class="headerMenuA">

          <?php
                 if (isset($_SESSION['email']))
                 {
                     include 'application/login/view/logout.php';
                 }
          ?>
      </a>
    </div>
  </div>
  
  <div class="headerMenuRight">
    <div class="input-group headerSearchDiv">
        <form action = "/" class="SearchDiv" method = "get">
          <input class="headerSearch" type="text" placeholder="<?php echo $dataHeader["Search" . $this->_language]; ?>" required autocomplete="off" name="search_Item" onfocus="headerSearchOnFocus()"
                 onBlur="headerSearchOnBlur()">
            <input type="hidden" name = "page" value="1" >

          <button class="headerSearchAddOnBlack" id="headerSearchAddOn">
          </button>
        </form>
    </div>
    
    <div class="headerCartDiv" onmouseover="showCartList()" onmouseout="hideCartList()">
      <img class="headerCartImage" src="<?php echo WEB_PATH; ?>runtime/image/headerCart.png">
      
      <p class="headerCartNumber" id="headerCartNumber">
        0
      </p>
      
      <p class="headerCartText">
          <?php echo $dataHeader["Cart" . $this->_language]; ?>
      </p>
      
      <p class="headerCartPrice">
        $0.00
      </p>
    </div>
    
    <div class="headerCartHoverDiv" onmouseover="showCartList()" onmouseout="hideCartList()">
      <div class="headerCartHoverList">
        <?php
            if(isset($_SESSION['cartItem'])) {
                for ($x = 0; $x < $_SESSION['cartNum']; $x++)
                {
                    $_SESSION['cNum'] = $x;
                    if(isset($_SESSION['cartItem'][$x]))
                      include('cart.php');
                }
            }
            else
               echo ' The Cart is Empty.<br>
<a href = "http://test.parisine.com/EN/product/index/1/1">Shop to add product Now.</a>'
        ?>
      </div>
      
      <p class="headerCartHoverP">
          <?php
          if (isset($_SESSION['cartItem']))
          {
              $totalPrice = 0;
              $cartNotEmpty = 0;
              for ($y = 0; $y < $_SESSION['cartNum']; $y++)
              {
                  if(isset($_SESSION['cartItem'][$y]))
                  {
                      $totalPrice += $_SESSION['cartItem'][$y]['cartPrice'] * $_SESSION['cartItem'][$y]['cartQuantity'];
                      $cartNotEmpty += 1;
                  }
                  if ($cartNotEmpty>=1) {
                      $_SESSION['cartMessage'] = "Total: $" . $totalPrice;
                  }
                  else {
                      $_SESSION['cartMessage'] =  ' The Cart is Empty.<br>
                        <a href = "http://test.parisine.com/EN/product/index/1/1">Shop to add product Now.</a>';
                  }
              }
              include ('cartMessage.php');
          }
          ?>
      </p>
        <form class = "cartCheckoutBtn" action="/EN/payment/checkout" method="POST" autocomplete="off">
      <button class="headerCartHoverButton">
          <?php echo $dataHeader["ViewCart" . $this->_language]; ?>
      </button>
        </form>

        <form class = "cartCheckoutBtn" action="/EN/payment/checkout" method="POST" autocomplete="off">
      <button class="headerCartHoverButton">
          <?php echo $dataHeader["CheckOut" . $this->_language]; ?>
      </button>
        </form>
    </div>
  </div>
  
  <a href="/<?php echo $this->_language; ?>">
    <img class="headerLogo" src="<?php echo WEB_PATH; ?>runtime/image/headerLogo.png">
  </a>
</div>

<div class="headerNavBar">
  <div class="headerNavBarA">
    <a class="headerNavBarTitle">
        <?php echo $dataHeader["ScentBar" . $this->_language]; ?>
    </a>

    <div class="headerNavBarAdditionalA">

        <a href="/<?php echo $this->_language; ?>/conceptBar/index">
            <?php echo $dataHeader["ScentBarConceptBar" . $this->_language]; ?>
        </a>


      <a href="/<?php echo $this->_language; ?>/scentBarAPP/home/#allpageSection">
          <?php echo $dataHeader["Your exclusive fragrance by Parisine" . $this->_language]; ?>
      </a>
      

    </div>
  </div>
  
  <div class="headerNavBarB">
    <a class="headerNavBarTitle">
        <?php echo $dataHeader["MoreAboutPerfume" . $this->_language]; ?>
    </a>
    
    <div class="headerNavBarAdditionalB">
      <a>
          <?php echo $dataHeader["MoreAboutPerfumePerfumeTips" . $this->_language]; ?>
      </a>
      
      <a href="/<?php echo $this->_language; ?>/findYourScent/tempIndex">
          <?php echo $dataHeader["MoreAboutPerfumeFindYourScent" . $this->_language]; ?>
      </a>
      
      <a>
          <?php echo $dataHeader["MoreAboutPerfumeFragrancesFamilies" . $this->_language]; ?>
      </a>
    </div>
  </div>
  
  <div class="headerNavBarC">
    <a class="headerNavBarTitle" href="/<?php echo $this->_language; ?>/menu/personalFragrances">
        <?php echo $dataHeader["Personal fragrances" . $this->_language]; ?>
    </a>
    
    <div class="headerNavBarAdditionalC">
      <div>
        <a class="headerNavBarCollectionTitle" href="/<?php echo $this->_language; ?>/menu/personalFragrances/1/12/1">
            <?php echo $dataHeader["Personal fragrances Women" . $this->_language]; ?>
        </a>
        
        <a class="headerNavBarCollection" href="/<?php echo $this->_language; ?>/menu/personalFragrances/1/2/12/1">
            <?php echo $dataHeader["Personal fragrances WomenA" . $this->_language]; ?>
        </a>
        
        <a href="/<?php echo $this->_language; ?>/menu/personalFragrances/1/3/12/1">
            <?php echo $dataHeader["Personal fragrances WomenB" . $this->_language]; ?>
        </a>
      </div>
      
      <div>
        <a class="headerNavBarCollectionTitle" href="/<?php echo $this->_language; ?>/menu/personalFragrances/2/12/1">
            <?php echo $dataHeader["Personal fragrances Men" . $this->_language]; ?>
        </a>
        
        <a class="headerNavBarCollection" href="/<?php echo $this->_language; ?>/menu/personalFragrances/2/6/12/1">
            <?php echo $dataHeader["Personal fragrances MenA" . $this->_language]; ?>
        </a>
        
        <a href="/<?php echo $this->_language; ?>/menu/personalFragrances/2/5/12/1">
            <?php echo $dataHeader["Personal fragrances MenB" . $this->_language]; ?>
        </a>
      </div>
    </div>
  </div>
  
  <div class="headerNavBarD">
    <a class="headerNavBarTitle" href="/<?php echo $this->_language; ?>/menu/homeDiffusers">
        <?php echo $dataHeader["Home diffusers" . $this->_language]; ?>
    </a>
    
    <div class="headerNavBarAdditionalD">
      <div>
        <a class="headerNavBarCollectionTitle" href="/<?php echo $this->_language; ?>/menu/homeDiffusers/3/12/1">
          5ème catalytic diffusers
        </a>
        
        <a class="headerNavBarCollection" href="/<?php echo $this->_language; ?>/menu/homeDiffusers/3/13/12/1">
          lazurite
        </a>
        
        <a class="headerNavBarCollection" href="/<?php echo $this->_language; ?>/menu/homeDiffusers/3/12/12/1">
          glass
        </a>
        
        <a class="headerNavBarCollection" href="/<?php echo $this->_language; ?>/menu/homeDiffusers">
          ceramic
        </a>
        
        <a class="headerNavBarCollection" href="/<?php echo $this->_language; ?>/menu/homeDiffusers/3/11/12/1" >
          aluminium
        </a>
        
        <a class="headerNavBarCollection" href="/<?php echo $this->_language; ?>/menu/homeDiffusers/3/10/12/1" >
          mini lampe
        </a>
      </div>
      
      <div>
        <a class="headerNavBarCollectionTitle" href="/<?php echo $this->_language; ?>/menu/homeDiffusers/4/12/1">
          6th electric diffusers
        </a>
      </div>
      
      <div>
        <a class="headerNavBarCollectionTitle" href="/<?php echo $this->_language; ?>/menu/homeDiffusers/5/12/1">
          7th natural diffusers
        </a>
      </div>
      
      <div>
        <a class="headerNavBarCollectionTitle" href="/<?php echo $this->_language; ?>/menu/homeDiffusers/6/12/1">
          9th scented beads diffusers
        </a>
      </div>
      
      <div>
        <a class="headerNavBarCollectionTitle">
          candles
        </a>
      </div>
      
      <div>
        <a class="headerNavBarCollectionTitle">
          room spray
        </a>
      </div>
    </div>
  </div>
  
  <div class="headerNavBarE">
    <a class="headerNavBarTitle" href="">
        <?php echo $dataHeader["Home fragrances" . $this->_language]; ?>
    </a>
    
    <div class="headerNavBarAdditionalE">
      <div>
        <a class="headerNavBarCollectionTitle">
            <?php echo $dataHeader["Home fragrances Favorites" . $this->_language]; ?>
        </a>
        
        <a class="headerNavBarCollection">
          5e element
        </a>
        
        <a class="headerNavBarCollection">
          9th element
        </a>
      </div>
      
      <div>
        <a class="headerNavBarCollectionTitle">
            <?php echo $dataHeader["Home fragrances Seasons". $this->_language]; ?>
        </a>
        
        <a class="headerNavBarCollection">
            <?php echo $dataHeader["Home fragrances By seasons Winter" . $this->_language]; ?>
        </a>
        
        <a class="headerNavBarCollection">
            <?php echo $dataHeader["Home fragrances By seasons Spring" . $this->_language]; ?>
        </a>
        
        <a class="headerNavBarCollection">
            <?php echo $dataHeader["Home fragrances By seasons Summer" . $this->_language]; ?>
        </a>
        
        <a class="headerNavBarCollection">
            <?php echo $dataHeader["Home fragrances By seasons Autumn" . $this->_language]; ?>
        </a>
      </div>
      
      <div>
        <a class="headerNavBarCollectionTitle">
            <?php echo $dataHeader["Home fragrances By collections" . $this->_language]; ?>
        </a>
        
        <a class="headerNavBarCollection">
          5e element
        </a>
        
        <a class="headerNavBarCollection">
          6th element
        </a>
        
        <a class="headerNavBarCollection">
          9th element
        </a>
      </div>
    </div>
  </div>
  
  <div class="headerNavBarF">
    <a class="headerNavBarTitle">
        <?php echo $dataHeader["Gifts" . $this->_language]; ?>
    </a>
    
    <div class="headerNavBarAdditionalF">
      <a>
          <?php echo $dataHeader["Gifts Celebrations" . $this->_language]; ?>
      </a>
      
      <a>
          <?php echo $dataHeader["Gifts For Her" . $this->_language]; ?>
      </a>
      
      <a>
          <?php echo $dataHeader["Gifts For him" . $this->_language]; ?>
      </a>
    </div>
  </div>
  
  <div class="headerNavBarG">
    <a class="headerNavBarTitle">
        <?php echo $dataHeader["About us" . $this->_language]; ?>
    </a>
    
    <div class="headerNavBarAdditionalG">
      <a href="/<?php echo $this->_language; ?>/aboutUs/parisine">
        Parisine
      </a>
      
      <a href="/<?php echo $this->_language; ?>/aboutUs/EDPinaud">
        ED.Pinaud
      </a>
      
      <a href="/<?php echo $this->_language; ?>/aboutUs/DOrsay">
        D'Orsay
      </a>
      
      <a href="/<?php echo $this->_language; ?>/aboutUs/visit">
          <?php echo $dataHeader["About us Visit us" . $this->_language]; ?>
      </a>
    </div>
  </div>
</div>

<div class="mobileHeader">
  <div class="mobileHeaderBar">
    <a id="mobileHeaderMenuButton" href="#" onclick="mobileMenuControl()">
      <span></span>
      <span></span>
      <span></span>
    </a>
    
    <a class="mobileHeaderIcon" href="/<?php echo $this->_language; ?>"></a>
    
    <a class="mobileHeaderCart" onclick="mobileCartControl()">
      <img src="<?php echo WEB_PATH; ?>runtime/image/headerCart.png">
      
      <span>
        0
      </span>
    </a>
  </div>
  
  <div class="mobileHeaderMainA">
    <div class="mobileHeaderLanguage">
      <a href="#" onclick="mobileLanguage('EN')">
        EN
      </a>
      
      <a href="#" onclick="mobileLanguage('ZH')">
        ZH
      </a>
    </div>
    
    <div class="mobileHeaderOption">
      <div class="mobileHeaderOptionDiv">
        <a href="/<?php echo $this->_language; ?>/account/dashBoard">
          My account
        </a>
      </div>
      
      <div class="mobileHeaderOptionDiv multiple">
        <a>
          Scent bar
        </a>
        
        <button href="#">
          ＞
        </button>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            Scent bar
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn multiple">
          <a href="/<?php echo $this->_language; ?>/findYourScent">
            Concept bar
          </a>
        </div>
      </div>
      
      <div class="mobileHeaderOptionDiv multiple">
        More about perfume
        
        <button href="#">
          ＞
        </button>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            Perfume tips
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            Find your scent
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            Fragrances families
          </a>
        </div>
      </div>
      
      <div class="mobileHeaderOptionDiv multiple">
        Personal fragrances
        
        <button href="#">
          ＞
        </button>
        
        <div class="mobileHeaderOptionAddOn multiple">
          <a>
            Women
          </a>
          
          <button href="#">
            ＞
          </button>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              Les essentielles
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              VAPORISATEURS DE SAC
            </a>
          </div>
        </div>
        
        <div class="mobileHeaderOptionAddOn multiple">
          <a>
            Men
          </a>
          
          <button href="#">
            ＞
          </button>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              Les essentielles
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              VAPORISATEURS DE SAC
            </a>
          </div>
        </div>
      </div>
      
      <div class="mobileHeaderOptionDiv multiple">
        <a href="/<?php echo $this->_language; ?>/menu/homeDiffusers">
          Home diffusers
        </a>
        
        <button href="#">
          ＞
        </button>
        
        <div class="mobileHeaderOptionAddOn multiple">
          <a>
            5ÈME CATALYTIC DIFFUSERS
          </a>
          
          <button href="#">
            ＞
          </button>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              LAZURITE
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              GLASS
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              CERAMIC
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              ALUMINIUM
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              MINI LAMPE
            </a>
          </div>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            6TH ELECTRIC DIFFUSERS
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            7TH NATURAL DIFFUSERS
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            9TH SCENTED BEADS DIFFUSERS
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            CANDLES
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            ROOM SPRAY
          </a>
        </div>
      </div>
      
      <div class="mobileHeaderOptionDiv multiple">
        Home fragrances
        
        <button href="#">
          ＞
        </button>
        
        <div class="mobileHeaderOptionAddOn multiple">
          <a>
            FAVORITES
          </a>
          
          <button href="#">
            ＞
          </button>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              5E ELEMENT
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              9TH ELEMENT
            </a>
          </div>
        </div>
        
        <div class="mobileHeaderOptionAddOn multiple">
          <a>
            BY SEASONS
          </a>
          
          <button href="#">
            ＞
          </button>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              WINTER
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              SPRING
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              SUMMER
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              AUTUMN
            </a>
          </div>
        </div>
        
        <div class="mobileHeaderOptionAddOn multiple">
          <a>
            BY COLLECTIONS
          </a>
          
          <button href="#">
            ＞
          </button>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              5E ELEMENT
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              6TH ELEMENT
            </a>
          </div>
          
          <div class="mobileHeaderOptionAddOn">
            <a>
              9TH ELEMENT
            </a>
          </div>
        </div>
      </div>
      
      <div class="mobileHeaderOptionDiv multiple">
        Gifts
        
        <button href="#">
          ＞
        </button>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            CELEBRATIONS
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            FOR HER
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            FOR HIM
          </a>
        </div>
      </div>
      
      <div class="mobileHeaderOptionDiv multiple">
        About us
        
        <button href="#">
          ＞
        </button>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            PARISINE
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            ED.PINAUD
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            D'ORSAY
          </a>
        </div>
        
        <div class="mobileHeaderOptionAddOn">
          <a>
            VISIT US
          </a>
        </div>
      </div>
      
      <div class="input-group mobileHeaderSearchDiv">
        <input class="mobileHeaderSearch" type="text" placeholder="SEARCH.." name="headerSearch">
        
        <button class="mobileHeaderSearchAddOn" id="headerSearchAddOn" type="submit"></button>
      </div>
    </div>
  </div>
  
  <div class="mobileHeaderMainB">
    <div class="mobileHeaderOption">
      <div class="mobileHeaderCartItem">
        <img src="<?php echo WEB_PATH; ?>runtime/image/product1.jpg">
        
        <p>
          Product11
        </p>
        
        <p>
          1x
        </p>
        
        <p>
          $100.00
        </p>
        
        <p>
          <a>
            Edit
          </a>
          
          <a>
            Remove
          </a>
        </p>
      </div>
      
      <div class="mobileHeaderCartItem">
        <img src="<?php echo WEB_PATH; ?>runtime/image/product1.jpg">
        
        <p>
          Product11
        </p>
        
        <p>
          1x
        </p>
        
        <p>
          $100.00
        </p>
        
        <p>
          <a>
            Edit
          </a>
          
          <a>
            Remove
          </a>
        </p>
      </div>
      
      <div class="mobileHeaderCartItem">
        <img src="<?php echo WEB_PATH; ?>runtime/image/product1.jpg">
        
        <p>
          Product11
        </p>
        
        <p>
          1x
        </p>
        
        <p>
          $100.00
        </p>
        
        <p>
          <a>
            Edit
          </a>
          
          <a>
            Remove
          </a>
        </p>
      </div>
      
      <div class="mobileHeaderCartButton">
        <button>
          View cart
        </button>
        
        <button>
          Checkout
        </button>
      </div>
    </div>
  </div>
  
  <div class="mobileMargin"></div>
</div>

<div class="modal fade headerTag" id="headerModal<?php echo $_SESSION["firstVisit"]; ?>" tabindex="-1" role="dialog"
     aria-labelledby="headerModal">
  <div class="modal-dialog headerTag" role="document">
    <div class="modal-content headerTag">
      <div class="modal-body headerTag">
        <img src="<?php echo WEB_PATH; ?>runtime/image/headerLogo.png">
        
        <p>
          Welcome to our universe,<br>
          Sign up for the newsletter and be the first to hear of special promotions and new arrivals.
        </p>
        
        <form class="input-group headerModalInputDiv"  action="<?php echo '/' . $this->_language . '/mail/newsLetter' ?>" method="post">
          <input class="headerModalInput" type="email" placeholder="ENTER YOUR EMAIL.." name="email"
                 onfocus="headerModalInputOnFocus()" onBlur="headerModalInputOnBlur()">
          
          <button class="headerModalInputAddOnWhite" id="headerModalInputAddOn" type="submit">
          </button>
        </form>
      </div>
      
      <button class="headerModalClose" onclick="headerModalClose()">
        X
      </button>
    </div>
  </div>
</div>