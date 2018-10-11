
<?php


if($productId >50) {
    $relatedproductId1 = $productId - 1;
    $relatedproductId2 = $productId - 2;
    $relatedproductId3 = $productId - 3;
    $relatedproductId4 = $productId - 4;
}
if($productId<50){
    $relatedproductId1 = $productId + 1;
    $relatedproductId2 = $productId + 2;
    $relatedproductId3 = $productId + 3;
    $relatedproductId4 = $productId + 4;
}

$query = "select * from productsTemp WHERE productID = :relatedproductId1";
$stmt  = $this->_pdo->prepare($query);
$stmt->bindParam(":relatedproductId1", $relatedproductId1, PDO::PARAM_INT);
$stmt->execute();
$related1 = $stmt->fetch();

    $productimage = str_replace(' ', '', $related1["image"]);

    echo '
<a class="productRelatedProduct"href="/' . $this->_language . '/product/index/' . $related1["categoryId"]. '/' . $related1["subcategoryId"] .  '/' . $related1["productID"] . '">
    <img class="productRelatedProductImage"
         src="' . WEB_PATH . 'runtime/image/e-shop-image_570x822/' . $productimage . '.jpg">
         
    <p class="productRelatedProductName">'
        . $related1["product_name_".$this->_language] .
        '</p>

    <p class="productRelatedProductDescription">'
        . $related1["description1_".$this->_language] .
        '</p>

    <p class="productRelatedProductPrice">'
        . "$" . $related1["price"]. " HKD" .
        '</p>
  </a>';

$query2 = "select * from productsTemp WHERE productID = :relatedproductId2";
$stmt2  =  $this->_pdo->prepare($query2);
$stmt2->bindParam(":relatedproductId2", $relatedproductId2, PDO::PARAM_INT);
$stmt2->execute();
$related2 = $stmt2->fetch();

$productimage = str_replace(' ', '', $related2["image"]);

echo '
<a class="productRelatedProduct"href="/' . $this->_language . '/product/index/' . $related2["categoryId"] . '/' . $related2["subcategoryId"] .  '/' . $related2["productID"] . '">
    <img class="productRelatedProductImage"
         src="' . WEB_PATH . 'runtime/image/e-shop-image_570x822/' . $productimage . '.jpg">
         
    <p class="productRelatedProductName">'
    . $related2["product_name_".$this->_language] .
    '</p>

    <p class="productRelatedProductDescription">'
    . $related2["description1_".$this->_language] .
    '</p>

    <p class="productRelatedProductPrice">'
    . "$" . $related2["price"]. " HKD" .
    '</p>
  </a>';

$query3 = "select * from productsTemp WHERE productID = :relatedproductId3";
$stmt3  =  $this->_pdo->prepare($query3);
$stmt3->bindParam(":relatedproductId3", $relatedproductId3, PDO::PARAM_INT);
$stmt3->execute();
$related3 = $stmt3->fetch();

$productimage = str_replace(' ', '', $related3["image"]);

echo '
<a class="productRelatedProduct"href="/' . $this->_language . '/product/index/' . $related3["categoryId"] . '/' . $related3["subcategoryId"] .  '/' . $related3["productID"] . '">
    <img class="productRelatedProductImage"
         src="' . WEB_PATH . 'runtime/image/e-shop-image_570x822/' . $productimage . '.jpg">
         
    <p class="productRelatedProductName">'
    . $related3["product_name_".$this->_language] .
    '</p>

    <p class="productRelatedProductDescription">'
    . $related3["description1_".$this->_language] .
    '</p>

    <p class="productRelatedProductPrice">'
    . "$" . $related3["price"]. " HKD" .
    '</p>
  </a>';


$query4 = "select * from productsTemp WHERE productID = :relatedproductId4";
$stmt4  =  $this->_pdo->prepare($query4);
$stmt4->bindParam(":relatedproductId4", $relatedproductId4, PDO::PARAM_INT);
$stmt4->execute();
$related4 = $stmt4->fetch();

$productimage = str_replace(' ', '', $related4["image"]);

echo '
<a class="productRelatedProduct"href="/' . $this->_language . '/product/index/' . $related4["categoryId"] . '/' . $related4["subcategoryId"] .  '/' . $related4["productID"] . '">
    <img class="productRelatedProductImage"
         src="' . WEB_PATH . 'runtime/image/e-shop-image_570x822/' . $productimage . '.jpg">
         
    <p class="productRelatedProductName">'
    . $related4["product_name_".$this->_language] .
    '</p>
    
<p class="productRelatedProductDescription">'
    . $related4["description1_".$this->_language] .
    '</p>
  

    <p class="productRelatedProductPrice">'
    . "$" . $related4["price"]. " HKD" .
    '</p>
  </a>';

