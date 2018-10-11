<?php
if(!isset($_POST["minprice"]))
    $_POST["minprice"] = 1;
if(!isset($_POST["maxprice"]))
    $_POST["maxprice"] = 10000;
if(!isset($_POST['sortMethod']))
   $sortMethod = 'product_name_' . $this->_language;
if(isset($_POST['sortMethod']))
{
    if($_POST['sortMethod'] == 'name')
        $sortMethod =  'product_name_'. $this->_language;
    if($_POST['sortMethod'] == 'position')
        $sortMethod = 'brand';
    if($_POST['sortMethod'] == 'price')
        $sortMethod = 'price';
}




$minprice = (int)$_POST["minprice"];
$maxprice = (int)$_POST["maxprice"];
$start = ($page > 1) ? ($page*$perPage) - $perPage : 0;
if (!isset($subcategoryId))
    $datas = $this->_pdo->prepare( "SELECT SQL_CALC_FOUND_ROWS * FROM productsTemp WHERE categoryId = {$categoryId} AND price BETWEEN {$minprice} AND {$maxprice} ORDER BY {$sortMethod} ASC LIMIT {$start}, {$perPage}");
else if (!isset($subcategory2Id))
    $datas = $this->_pdo->prepare( "SELECT SQL_CALC_FOUND_ROWS * FROM productsTemp WHERE categoryId = {$categoryId} AND subcategoryId = {$subcategoryId} AND price BETWEEN {$minprice} AND {$maxprice} ORDER BY {$sortMethod} ASC LIMIT {$start}, {$perPage}");
else
    $datas = $this->_pdo->prepare( "SELECT SQL_CALC_FOUND_ROWS * FROM productsTemp WHERE categoryId = {$categoryId} AND subcategoryId = {$subcategoryId} AND subcategory2Id = {$subcategory2Id}  AND price BETWEEN {$minprice} AND {$maxprice} ORDER BY {$sortMethod} ASC LIMIT {$start}, {$perPage}");
$datas->execute();
$existCheck =  $datas->rowCount();
$datas = $datas->fetchAll();
$total =  $this->_pdo->query('SELECT FOUND_ROWS() as total')->fetch(PDO::FETCH_ASSOC)['total'];
$pages = ceil($total / $perPage);


foreach ($datas as $data) {
    $productimage = str_replace(' ', '', $data["image"]);
    echo '
    <a class="menuListProductA" href="/' . $this->_language . '/product/index/' . $data["categoryId"] . '/' . $data["subcategoryId"] .  '/' . $data["productID"] . '">
        <div class="menuListProductImage">
         <img src="' . WEB_PATH . 'runtime/image/e-shop-image_570x822/' . $productimage . '.jpg">
        </div>

        <div class="menuListProductMain">
            <p class="menuListProductName">'
        . $data["product_name_".$this->_language] .
        '</p>

            <p class="menuListProductDescription">'
 . $data["description1_".$this->_language] .
'</p>

            <p class="menuListProductPrice">'
      . "$" . $data["price"]. " HKD" .
        '</p>
        </div>
    </a>';
}


