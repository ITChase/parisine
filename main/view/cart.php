<div class="headerCartHoverListItem">
    <img class="headerCartHoverListItemImage" src="<?php echo WEB_PATH . $_SESSION['cartItem'][$_SESSION['cNum']]['productImage'] . ".jpg"; ?>">
    <p class="headerCartHoverListItemBigP">
        <?php
        if (isset($_SESSION['cartItem'][$_SESSION['cNum']]['cartProduct']))
                echo $_SESSION['cartItem'][ $_SESSION['cNum']]['cartProduct'];

        ?>
    </p>

    <p class="headerCartHoverListItemBigP">
        <?php
            if (isset($_SESSION['cartItem'][$_SESSION['cNum']]['cartProduct']))
                echo "Quantity: " . $_SESSION['cartItem'][$_SESSION['cNum']]['cartQuantity'];
        ?>
    </p>

    <p class="headerCartHoverListItemLittleP">
        <?php
          if (isset($_SESSION['cartItem'][$_SESSION['cNum']]['cartProduct']))
          {
              $tempPrice = (int)$_SESSION['cartItem'][$_SESSION['cNum']]['cartPrice'] * (int)$_SESSION['cartItem'][$_SESSION['cNum']]['cartQuantity'];
              echo "Price : $" . $tempPrice;
          }
        ?>
    </p>

    <form class="headerCartHoverListItemLittleP" method = "post" action="#">
        <button class="cartBtn"  name = "cartEdit">
            <?php echo $dataHeader["Edit" . $this->_language]; ?>
        </button>

        <button class="cartBtn" name = "removeCart" value = "<?php echo $_SESSION['cNum'] ?>">
            <?php echo  $dataHeader["Remove" . $this->_language]; ?>
        </button>
    </form>

</div>