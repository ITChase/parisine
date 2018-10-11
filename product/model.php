<?php

class productModel extends Model
{
/*
  function product($collectionId, $seriesId, $productId)
  {

    $data = array();

    $query = "select * from product WHERE productId = :productId and productStatus <=" . WEB_STATUS;
    $stmt  = $this->_pdo->prepare($query);
    $stmt->bindParam(":productId", $productId, PDO::PARAM_INT);
    $stmt->execute();
    $rowA = $stmt->fetch();

    $query = "select * from collection WHERE collectionId = :collectionId and collectionStatus <=" . WEB_STATUS;
    $stmt  = $this->_pdo->prepare($query);
    $stmt->bindParam(":collectionId", $collectionId, PDO::PARAM_INT);
    $stmt->execute();
    $rowB = $stmt->fetch();

    $query = "select * from series WHERE seriesId = :seriesId and seriesStatus <=" . WEB_STATUS;
    $stmt  = $this->_pdo->prepare($query);
    $stmt->bindParam(":seriesId", $seriesId, PDO::PARAM_INT);
    $stmt->execute();
    $rowC = $stmt->fetch();



    $data["productName"]                  = $rowA["productName" . $this->_language];
    $data["productImage"]                 = "runtime/image/product/570x822/" . $productId;
    $data["productAdditionalImageNumber"] = $rowA["productAdditionalImageNumber"];
    $data["productPrice"]                 = "$" . $rowA["productPrice"];
    $data["productBrand"]                 = $rowA["productBrand"];
    $data["productCategory"]              = $rowA["productCategory" . $this->_language];
    $data["productSpecifications"]        = $rowA["productSpecifications"];
    $data["productDescription"]           = nl2br($rowA["productDescription" . $this->_language]);
    $data["productHowToUse"]              = nl2br($rowA["productHowToUse" . $this->_language]);
    $data["collectionName"]               = $rowB["collectionName" . $this->_language];
    $data["seriesName"]                   = $rowC["seriesName" . $this->_language];
    $data["availability"] = "In stock";
    return $data;

  }
*/


    function product($categoryId, $subcategoryId, $productId)
    {

        $data = array();

        $query = "select * from productsTemp WHERE productID = :productId";
        $stmt  = $this->_pdo->prepare($query);
        $stmt->bindParam(":productId", $productId, PDO::PARAM_INT);
        $stmt->execute();
        $rowA = $stmt->fetch();

        $query = "select * from productsTemp WHERE categoryId = :categoryId";
        $stmt  = $this->_pdo->prepare($query);
        $stmt->bindParam(":categoryId", $categoryId, PDO::PARAM_INT);
        $stmt->execute();
        $rowB = $stmt->fetch();

        $query = "select * from productsTemp WHERE subcategoryId = :subcategoryId";
        $stmt  = $this->_pdo->prepare($query);
        $stmt->bindParam(":subcategoryId", $subcategoryId, PDO::PARAM_INT);
        $stmt->execute();
        $rowC = $stmt->fetch();

        $productimage= str_replace(' ', '', $rowA["image"]);

        $data["productName"]                  = $rowA["product_name_" . $this->_language];
        $data["productImage"]                 = "runtime/image/e-shop-image_570x822/".$productimage;
        $data["productAdditionalImageNumber"] = $rowA["additional-image"];
        $data["productPrice"]                 = $rowA["price"];
        $data["productBrand"]                 = $rowA["brand"];
        $data["productCategory"]              = $rowA["Categorie_" . $this->_language];
        $data["productSpecifications"]        = $rowA["specification"];
        $data["productDescription"]           = nl2br($rowA["description1_" . $this->_language]);
        $data["productHowToUse"]              = nl2br($rowA["notes-de-tete_" . $this->_language]);
        $data["collectionName"]               = $rowA["Categorie_" . $this->_language];
        $data["seriesName"]                   = $rowA["Sub-categorie1_" . $this->_language];
        $data["notes_de_tete"]                   = $rowA["notes-de-tete_" . $this->_language];
        $data["notes_de_cœur"]                   = $rowA["notes-de-cœur_" . $this->_language];
        $data["notes_de_fond"]                   = $rowA["notes-de-fond_" . $this->_language];
        $data["availability"] = "In stock";
        $data["productId"] = $productId;
        return $data;

    }


}
