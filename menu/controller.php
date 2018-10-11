s<?php

class menuController extends Controller
{
  function homeDiffusers($param)
  {
    $this->assign("category", $this->_action);
      $this->assign("categoryId", 2);
      if (isset($param[0]) && !isset($param[2]))
      {
          if($param[0] <= 12)
              $param[0] = 12;
          else if ($param[0] <= 24)
              $param[0] = 24;
          else if($param[0] <= 36 || $param[0] > 36)
              $param[0] = 36;
          $this->assign("perPage", $param[0]);
          if (isset($param[1]))
          {
              $this->assign("page", $param[1]);
          }
      }

      if(isset($param[2]) && !isset($param[3]))
      {
          if($param[0] < 3 || $param[0] > 6)
              $param[0] = 3;
          if($param[1] <= 12)
              $param[1] = 12;
          else if ($param[1] <= 24)
              $param[1] = 24;
          else if($param[1] <= 36 || $param[1] > 36)
              $param[1] = 36;

          $this->assign("subcategoryId", $param[0]);
          $this->assign("perPage", $param[1]);
          $this->assign("page", $param[2]);
      }

      if(isset($param[3]))
      {
          if($param[0] < 3 || $param[0] > 6)
              $param[0] = 3;
          if($param[1] < 10 || $param[1] > 12)
              $param[1] = 10;
          else
              $this->assign("subcategory2Id", $param[1]);
          if($param[2] <= 12)
              $param[2] = 12;
          else if ($param[2] <= 24)
              $param[2] = 24;
          else if($param[2] <= 36 || $param[2] > 36)
              $param[2] = 36;
          $this->assign("subcategoryId", $param[0]);
          $this->assign("subcategory2Id", $param[1]);
          $this->assign("perPage", $param[2]);
          $this->assign("page", $param[3]);
      }


    $this->render();
  }

    function personalFragrances($param)
    {
        $this->assign("category", $this->_action);
        $this->assign("categoryId", 1);
        if (isset($param[0]) && !isset($param[2]))
        {
            if($param[0] <= 12)
                $param[0] = 12;
            else if ($param[0] <= 24)
                $param[0] = 24;
            else if($param[0] <= 36 || $param[0] > 36)
                $param[0] = 36;
            $this->assign("perPage", $param[0]);
            if (isset($param[1]))
            {
                $this->assign("page", $param[1]);
            }
        }

        if(isset($param[2]) && !isset($param[3]))
        {
            if($param[0] < 1 || $param[0] > 2)
                $param[0] = 1;
            if($param[1] <= 12)
                $param[1] = 12;
            else if ($param[1] <= 24)
                $param[1] = 24;
            else if($param[1] <= 36 || $param[1] > 36)
                $param[1] = 36;

            $this->assign("subcategoryId", $param[0]);
            $this->assign("perPage", $param[1]);
            $this->assign("page", $param[2]);
        }

        if(isset($param[3]))
        {
            if($param[0] < 1 || $param[0] > 2)
                $param[0] = 1;
            if($param[1] < 1 || $param[1] > 9)
                $param[1] = 1;
            else
                $this->assign("subcategory2Id", $param[1]);
            if($param[2] <= 12)
                $param[2] = 12;
            else if ($param[2] <= 24)
                $param[2] = 24;
            else if($param[2] <= 36 || $param[2] > 36)
                $param[2] = 36;
            $this->assign("subcategoryId", $param[0]);
            $this->assign("subcategory2Id", $param[1]);
            $this->assign("perPage", $param[2]);
            $this->assign("page", $param[3]);
        }


        $this->render();
    }

    function productpagination($param)
    {

    }

    function menuTemp()
    {
        $this->render();
    }
}
