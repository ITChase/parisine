
<div id = "addCartManager">
    <div class="modal-content">
            <h2 class="mTitle">Add this product to Cart?</h2>
        <div class="mFooter"><input type="button" value="addtoCarttt" class="Bsuccess"></div>
    </div>
</div>


<div class="productPath">
  <div class="productPathDiv">
    <a href="/<?php echo $this->_language; ?>">
      Home
    </a>

    <div class="productPathArrow">
      >
    </div>
  </div>

  <div class="productPathDiv">
    <?php echo $collectionName; ?>

    <div class="productPathArrow">
      >
    </div>
  </div>

  <div class="productPathDiv">
    <?php echo $seriesName; ?>

    <div class="productPathArrow">
      >
    </div>
  </div>

  <div class="productPathDivB">
    <?php echo $productName; ?>
  </div>
</div>

<div class="productDetail">
  <div class="productDetailDivA">
    <div class="productDetailImageBackground">
      <figure class="zoo-item" id="productDetailImage"
              data-zoo-image="<?php echo WEB_PATH . $productImage . ".jpg"; ?>">
      </figure>
    </div>

    <div class="productDetailAdditionalImageDiv">
      <img class="productDetailAdditionalImage"
           src="/runtime/image/productnopic.png"
           onclick="productDetailChangeImage(this)">

      <img class="productDetailAdditionalImage"
           src="/runtime/image/productnopic.png"
           onclick="productDetailChangeImage(this)">

      <img class="productDetailAdditionalImage"
           src="/runtime/image/productnopic.png"
           onclick="productDetailChangeImage(this)">
    </div>
  </div>

  <div class="productDetailDivB">
    <p class="productDetailName">
      <?php echo $productName; ?>
    </p>

    <p class="productDetailBelong">
      <span class="productDetailCategory">
        <?php echo $productCategory; ?>
      </span>

      <span class="productDetailBrand">
        <?php echo $productBrand; ?>
      </span>

      <span class="productDetailSpecifications">
        / <?php echo $productSpecifications; ?>
      </span>
    </p>

    <p class="productDetailDescription">
      <?php echo $productDescription; ?>
    </p>

    <a class="productDetailMoreInfo" role="button" href="#productDescription">
      More Info
    </a>

    <p class="productDetailPrice">
      <?php echo "$ " . $productPrice; ?>
    </p>

    <p class="productDetailAvailability">
      Availability:

      <span id="productDetailAvailability">
        <?php echo $availability; ?>
      </span>
    </p>

    <div id="productDetailOutOfStock">
      <p>
        Be notified when the product is back in stock
      </p>

      <div class="productDetailStockNotified">
        <input class="productDetailStockInput" type="email" placeholder="ENTER YOUR E-MAIL..."
               onfocus="productDetailOnFocus()" onBlur="productDetailOnBlur()">

        <button class="productDetailAddOnWhite" id="productDetailAddOn" type="submit">
        </button>
      </div>
    </div>

     <form method="POST" action = "#" >
        <div id="productDetailInStock">
          <input id="productDetailQuantity" name="cartQuantity" type="text" placeholder="0" value="1"
                 onchange="productDetailValueCheck(this)">

          <a id="productDetailAdd"  onclick="productDetailAdd()">
          </a>

          <a id="productDetailMinus"  onclick="productDetailMinus()">
          </a>

          <button class="productDetailAddToCart"  type ="submit" name ="addCart" onclick = "addingManager('addNew')">
            Add to cart
          </button>
        </div>
      </form>



    <div class="productDetailController">
      <button class="productDetailWishList">
        Wishlist
      </button>

      <button class="productDetailCompare">
        Compare
      </button>

      <button class="productDetailEmailToAFriend">
        Email to a friend
      </button>

      <div class="addthis_inline_share_toolbox"></div>
    </div>
  </div>

  <div class="productDetailDivC">
    <div class="productDetailDivCSticky">
      <a class="productDetailPrevious">
        Previous
      </a>

      <a class="productDetailNext">
        Next
      </a>
    </div>
  </div>
</div>

<div id="productDescription">

<?php
if($collectionName != "HOME DIFFUSERS")
    echo'
  <div class="productDescriptionOlfactoryPyramid">
    <div class="productDescriptionOlfactoryPyramidTitle">
      Olfactory pyramid
    </div>

    <p class="productDescriptionOlfactoryPyramidPA">
      NOTES DE TÊTE :
    </p>

    <p class="productDescriptionOlfactoryPyramidPB">
      '. $notes_de_tete .'
    </p>

    <p class="productDescriptionOlfactoryPyramidPA">
      NOTES DE COEUR :
    </p>

    <p class="productDescriptionOlfactoryPyramidPB">
        '. $notes_de_cœur.'
    </p>

    <p class="productDescriptionOlfactoryPyramidPA">
      NOTES DE FOND :
    </p>

    <p class="productDescriptionOlfactoryPyramidPB">
        '. $notes_de_fond.'
    </p>
  </div>' ?>

    <?php
    if($collectionName != "PERSONAL FRAGRANCES")
    echo'
  <div class="productDescriptionHowToUse">
    <div class="productDescriptionHowToUseTitle">
      How to use
    </div>

    <div class="productDescriptionHowToUseText">
    '.$productDescription.
    '</div>
  </div>'
    ?>

</div>

<div class="productRelatedList">
  <p class="productRelatedProductTitle">
    Related products
  </p>


    <?php require('relatedprocess.php')?>
</div>