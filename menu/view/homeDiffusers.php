
<?php
$page = isset($page)?(int) $page :1;
$perPage = (int)isset($perPage)?(int) $perPage :12;
if (isset($_POST['perPage']) ){
    $perPage =  (int)$_POST['perPage'];
}
?>
<div id="mobileMenuFilter">
  <button id="mobileMenuFilterButton" onclick="mobileMenuFilterControl()">
    <img src="<?php echo WEB_PATH; ?>runtime/image/menuFilterButton.png">
  </button>

  <div class="mobileMenuFilterFixed  noSwipe">
    <div class="menuFilterTool">
      <div class="menuFilterToolTitle">
        Category
      </div>

      <div id="menuFilterCategory" role="tablist">
        <div class="menuFilterCategoryName" data-toggle="collapse" data-parent="#mobileMenuFilterCategory"
             href="#mobileMenuPersonalFragrances">
          <a href="http://test.parisine.com/EN/menu/homeDiffusers/3/12/1">
              5ÈME CATALYTIC DIFFUSERS
          </a>

          <button>
            ∨
          </button>
        </div>

        <div class="menuFilterCategoryList collapse" id="mobileMenuPersonalFragrances">
          <a href="http://test.parisine.com/EN/menu/homeDiffusers/3/13/12/1">
              LAZURITE
          </a>
            <br><br>

          <a href="http://test.parisine.com/EN/menu/homeDiffusers/3/12/12/1">
              GLASS
          </a>
            <br><br>

          <a href="">
              CERAMIC
          </a>
            <br><br>

            <a href="http://test.parisine.com/EN/menu/homeDiffusers/3/11/12/1">
                ALUMINIUM
            </a>
            <br><br>


            <a href="http://test.parisine.com/EN/menu/homeDiffusers/3/10/12/1">
                MINI LAMPE
            </a>
            <br><br>

        </div>

        <div class="menuFilterCategoryName" data-toggle="collapse" data-parent="#mobileMenuFilterCategory"
             href="#mobileMenuPersonalFragrancesA">
          <a href="http://test.parisine.com/EN/menu/homeDiffusers/4/12/1">
              6TH ELECTRIC DIFFUSERS
          </a>

          <button>
            ∨
          </button>
        </div>

          <div class="menuFilterCategoryName" data-toggle="collapse" data-parent="#mobileMenuFilterCategory"
               href="#mobileMenuPersonalFragrancesA">
              <a href="http://test.parisine.com/EN/menu/homeDiffusers/5/12/1">
                  7TH NATURAL DIFFUSERS
              </a>

              <button>
                  ∨
              </button>
          </div>

          <div class="menuFilterCategoryName" data-toggle="collapse" data-parent="#mobileMenuFilterCategory"
               href="#mobileMenuPersonalFragrancesA">
              <a href="http://test.parisine.com/EN/menu/homeDiffusers/6/12/1">
                  9TH SCENTED BEADS DIFFUSERS
              </a>

              <button>
                  ∨
              </button>
          </div>


      </div>
    </div>

    <div class="menuFilterTool">
      <div class="menuFilterToolTitle">
        Filter by price
      </div>

        <label>
          Min price

          <input id="mobileMenuRangeMin" type="text" name = "minPrice">
        </label>

        <label>
          Max price

          <input id="mobileMenuRangeMax" type="text" name = "maxPrice">
        </label>

        <div id = "load_product"></div>
    </div>

    <div class="menuFilterTool">
      <div class="menuFilterToolTitle">
        Filter by brand
      </div>

      <div class="menuFilterBrand">
        <p>
          Ed.Pinaud(9)
        </p>

        <p>
          D'Orsay(4)
        </p>
      </div>
    </div>


  </div>
</div>

<div class="mobileMenuListMask" onclick="mobileMenuFilterClose()"></div>

<div class="menuPath">
  <div class="menuPathDiv">
    <a href="/<?php echo $this->_language; ?>">
      Home
    </a>

    <div class="menuPathArrow">
      >
    </div>
  </div>

  <div class="menuPathDiv<?php
  if (!isset($collection))
  {
    echo "B";
  }
  ?>
  ">
    Home Diffusers

    <?php
    if (isset($collection))
    {
      echo "
    <div class=\"menuPathArrow\">
      >
    </div>
  </div>
  
  <div class=\"menuPathDivB\">
        $collection
      ";
    }
    ?>
  </div>
</div>

<div class="menuBanner">
  <img src="<?php echo WEB_PATH; ?>runtime/image/homeDiffusersBanner.jpg">
</div>

<div class="menuMenu">
  <div id="menuFilter" class="active">
    <div class="menuFilterSticky">
      <div class="menuFilterTool">
        <div class="menuFilterToolTitle">
          Category
        </div>

        <div id="menuFilterCategory" role="tablist">
          <div class="menuFilterCategoryName" data-toggle="collapse" data-parent="#menuFilterCategory"
               href="#menuPersonalFragrances">

              <a href="http://test.parisine.com/EN/menu/homeDiffusers/3/12/1">
                  5ÈME CATALYTIC DIFFUSERS
              </a>


              <button>
              ∨
            </button>
          </div>

          <div class="menuFilterCategoryList collapse" id="menuPersonalFragrances">

              <a href="http://test.parisine.com/EN/menu/homeDiffusers/3/13/12/1">
                  LAZURITE
              </a>
              <br><br>


              <a href="http://test.parisine.com/EN/menu/homeDiffusers/3/12/12/1">
                  GLASS
              </a>
              <br><br>


              <a href="">
                  CERAMIC
              </a>
              <br><br>

              <a href="http://test.parisine.com/EN/menu/homeDiffusers/3/11/12/1">
                  ALUMINIUM
              </a>
              <br><br>

              <a href="http://test.parisine.com/EN/menu/homeDiffusers/3/10/12/1">
                  MINI LAMPE
              </a>
              <br><br>

          </div>

          <a class="menuFilterCategoryName"
             href="http://test.parisine.com/EN/menu/homeDiffusers/4/12/1">
              <p>
                  6TH ELECTRIC DIFFUSERS
              </p>

              <button>
              ∨
            </button>
          </a>

            <a class="menuFilterCategoryName"
                 href="http://test.parisine.com/EN/menu/homeDiffusers/5/12/1">
                <p>
                    7TH NATURAL DIFFUSERS
                </p>

                <button>
                    ∨
                </button>
            </a>

            <a class="menuFilterCategoryName"
               href="http://test.parisine.com/EN/menu/homeDiffusers/6/12/1">
                <p>
                    9TH SCENTED BEADS DIFFUSERS
                </p>

                <button>
                    ∨
                </button>
            </a>

        </div>
      </div>

        <form  id = "priceChanger" action = "" method="post" name = "priceChanger" >

      <div class="menuFilterTool">
        <div class="menuFilterToolTitle">
          Filter by price
        </div>

        <div id="menuSliderRange"></div>


            <div class ="menuSliderDisplay" >
          <div>
            <span id="menuRangeMinDisplay">
              $
            </span>

            <input id="menuRangeMin" type="text"  name="minprice"readonly >
          </div>

          <div>
            -
          </div>

          <div>
            <span id="menuRangeMaxDisplay">
              $
            </span>

            <input id="menuRangeMax" type="text" name = "maxprice"readonly>
          </div>
            </div>

      </div>

      <div class="menuFilterTool">
        <div class="menuFilterToolTitle">
          Filter by brand
        </div>

        <div class="menuFilterBrand">
          <p>
            Ed.Pinaud(9)
          </p>

          <p>
            D'Orsay(4)
          </p>
        </div>
      </div>


            <div class = btnArea>
                <button class = "pricefilterBtn" type = "submit">Click to filter</button>
            </div>
        </form>
    </div>
  </div>

  <div id="menuList">
    <button id="menuFilterButton" onclick="menuFilterControl()">
      <img src="<?php echo WEB_PATH; ?>runtime/image/menuFilterButton.png">
    </button>

    <div class="menuListController">
      <div class="menuListControllerA">
        <p>
          <span>
            view as:
          </span>

          <button class="menuListControllerAButtonA" onclick="menuShowMethodA(this)">
            <img src="<?php echo WEB_PATH; ?>runtime/image/menuPresentationOptionA.png">
          </button>

          <button class="menuListControllerAButtonB" onclick="menuShowMethodB(this)">
            <img src="<?php echo WEB_PATH; ?>runtime/image/menuPresentationOptionB.png">
          </button>
        </p>
          <form  id="myForm"  action = "" method = "POST" name = "sortMethod">
        <p class="menuListControllerAPB noSwipe">

          <label>
            sort by
            <select name = "sortMethod" onchange="this.form.submit();">
              <option value="name" <?php if(isset($_POST['sortMethod']) && $_POST['sortMethod'] === 'name') echo 'selected'; ?>>
                name
              </option>

                <option value="position" <?php if(isset($_POST['sortMethod']) && $_POST['sortMethod'] === 'position') echo 'selected'; ?>>
                    position
                </option>

              <option value="price" <?php if(isset($_POST['sortMethod']) && $_POST['sortMethod'] === 'price') echo 'selected'; ?>>
                price
              </option>
            </select>
          </label>


          <button class="menuListControllerAButtonC">
            ↑
          </button>
        </p>
          </form>
      </div>

      <div class="menuListControllerB">
        item 1 to 9 of 13 total
      </div>

      <div class="menuListControllerC noSwipe">
          <form  id="myForm"  action = "" method = "POST" name = "perPage">
        <label>
          show


    <select name = "perPage"onchange="this.form.submit();">
        <option value="12" <?php if(isset($perPage) && (int)$perPage === 12) echo 'selected'; ?>>
            12
        </option>

        <option value="24"<?php if(isset($perPage) && (int)$perPage === 24)  echo 'selected' ;?>>
            24
        </option>

        <option value="36"<?php if(isset($perPage) && (int)$perPage === 36) echo 'selected'; ?>>
            36
        </option>
    </select>

          per page
        </label>
          </form>
      </div>
    </div>
      <div class="menuMainMenu">
      <?php

      include 'productpagination.php';

      ?>
      </div>
    <div class="menuPageController" href="/<?php echo $this->_language; ?>/product/index/1/1/1">
      <span class="menuPageControllerName">
        Page:
      </span>

      <a class="menuPageLinkA">
          <?php
          echo '<a href="/EN/menu/homeDiffusers/';
          if(isset($subcategoryId))
              echo $subcategoryId. '/';
          if(isset($subcategory2Id))
              echo $subcategory2Id. '/';
          echo $perPage .'/';
          if ($page == 1)
              echo $page;
          else echo ($page-1);
          echo '"';
          echo '> < &nbsp </a>' ;

          for($x = 1; $x <= $pages; $x++)
          {
              echo '<a href="/EN/menu/homeDiffusers/';
              if(isset($subcategoryId))
                  echo $subcategoryId. '/';
              if(isset($subcategory2Id))
                  echo $subcategory2Id. '/';
              echo $perPage .'/'. $x . '"';
              if ($page == $x)
                  echo 'selected';
              echo '>' . $x .'&nbsp'.  ' </a>' ;
          }
          echo '<a href="/EN/menu/homeDiffusers/';
          if(isset($subcategoryId))
              echo $subcategoryId. '/';
          if(isset($subcategory2Id))
              echo $subcategory2Id. '/';
          echo $perPage .'/';
          if ($page == $pages)
              echo $page;
          else echo ($page+1);
          echo '"';
          echo '> > </a>' ;
          ?>
      </a>


    </div>
  </div>
</div>

