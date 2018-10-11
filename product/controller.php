<?php

class productController extends Controller
{
    /*
  function index($param)
  {
    $collectionId = $param[0];
    if (isset($param[2]))
    {
      $seriesId  = $param[1];
      $productId = $param[2];
    }
    else
    {
      $seriesId  = $param[0];
      $productId = $param[1];
    }

    $data = $this->process('product', $collectionId, $seriesId, $productId);
    $this->assign($data);
    $this->render();
  }
    */
    /*05.28
    function index($param)
    {
        $collectionId = $param[0];
        if (isset($param[2]))
        {
            $seriesId  = $param[1];
            $productId = $param[2];
        }
        else
        {
            $seriesId  = $param[0];
            $productId = $param[1];
        }

        $data = $this->process('product', $collectionId, $seriesId, $productId);
        $this->assign($data);
        $this->render();
    }
}
    */
    function index($param)
    {
        $categoryId = $param[0];
        if (isset($param[2]))
        {
            $subcategoryId  = $param[1];
            $productId = $param[2];
        }
        else
        {
            $subcategoryId  = $param[0];
            $productId = $param[1];
        }


        $data = $this->process('product', $categoryId,  $subcategoryId, $productId);
        $this->assign($data);
        $this->render();
    }
}