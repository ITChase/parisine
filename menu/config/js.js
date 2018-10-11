
/**********************************Calling Function************************************/

$(document).ready(function()
    {
        $("#menuSliderRange").slider({
            range : true,
            min: 0,
            max: 10000,
            values: [0, 10000],
            slide: function(event, ui)
            {
                $("#menuRangeMin").val(ui.values[0] );
                $("#menuRangeMinDisplay").html("$" + ui.values[0]);
                $("#menuRangeMax").val(ui.values[1]);
                $("#menuRangeMaxDisplay").html("$" + ui.values[1]);
            }
        });
        $("#menuRangeMin").val($("#menuSliderRange").slider("values", 0));
        var minPrice =  $("#menuRangeMin");
        $("#menuRangeMinDisplay").html("$" + $("#menuSliderRange").slider("values", 0));
        $("#menuRangeMax").val($("#menuSliderRange").slider("values", 1));
        var maxPrice =  $("#menuRangeMax");
        $("#menuRangeMaxDisplay").html("$" + $("#menuSliderRange").slider("values", 1));
        document.getElementById("menuRangeMin").value = ui.values[0];
        document.getElementById("menuRangeMax").value = ui.values[1];
    }

);



function menuFilterControl()
{
  var filter = document.getElementById("menuFilter");
  var button = document.getElementById("menuFilterButton");
  
  if($("#menuFilter").css("opacity") == "1")
  {
    filter.style.width = "0";
    filter.style.opacity = "0";
    filter.style.transition = "width .3s, opacity .1s ease-out";
    $("#menuList").addClass("active");
    $(".menuListProductA").addClass('menuListProductB').removeClass('menuListProductA');
    button.style.transform = "rotateY(180deg)";
    setTimeout(function()
               {
                 $("#menuFilter").toggleClass("active");
               }, 300);
  }
  else
  {
    $("#menuFilter").toggleClass("active");
    setTimeout(function()
               {
                 filter.style.width = "25%";
                 filter.style.opacity = "1";
                 filter.style.transition = "width .3s, opacity 1s";
                 $("#menuList").removeClass("active");
               }, 1);
    $(".menuListProductB").addClass('menuListProductA').removeClass('menuListProductB');
    button.style.transform = "";
  }
}

$(window).scroll(function()
                 {
                   if($(this).scrollTop() > 0)
                   {
                     $("#mobileMenuFilterButton").addClass("sticky");
                   }
                   else
                   {
                     $("#mobileMenuFilterButton").removeClass("sticky");
                   }
                 });

function mobileMenuFilterControl()
{
  if($("#mobileMenuFilter").hasClass("active"))
  {
    $("#mobileMenuFilter").removeClass("active");
    $(".mobileMenuListMask").removeClass("active");
  }
  else
  {
    $("#mobileMenuFilter").addClass("active");
    $(".mobileMenuListMask").addClass("active");
  }
}
/* //CK's function: usage undefined, but can caused headSelector disfunction. Keep, but commented...
$(function()
  {
    $(document).swipe({
                        swipe: function(event, direction, distance, duration, fingerCount,
                                        fingerData)
                        {
                          if(direction == "right")
                          {
                            $("#mobileMenuFilter").addClass("active");
                            $(".mobileMenuListMask").addClass("active");
                          }
                          if(direction == "left")
                          {
                            $("#mobileMenuFilter").removeClass("active");
                            $(".mobileMenuListMask").removeClass("active");
                          }
                        }
                      });
  });
  */

function mobileMenuFilterClose()
{
  $("#mobileMenuFilter").removeClass("active");
  $(".mobileMenuListMask").removeClass("active");
}

function menuShowMethodA(thisButton)
{
  if(thisButton.className == "menuListControllerAButtonB")
  {
    $(".menuListControllerAButtonA").addClass('menuListControllerAButton').removeClass('menuListControllerAButtonA');
    $(".menuListControllerAButtonB").addClass('menuListControllerAButtonA').removeClass('menuListControllerAButtonB');
    $(".menuListControllerAButton").addClass('menuListControllerAButtonB').removeClass('menuListControllerAButton');
  }
  $(".menuListProductA.active").removeClass("active");
  $(".menuListProductB.active").removeClass("active");
}

function menuShowMethodB(thisButton)
{
  if(thisButton.className == "menuListControllerAButtonB")
  {
    $(".menuListControllerAButtonA").addClass('menuListControllerAButton').removeClass('menuListControllerAButtonA');
    $(".menuListControllerAButtonB").addClass('menuListControllerAButtonA').removeClass('menuListControllerAButtonB');
    $(".menuListControllerAButton").addClass('menuListControllerAButtonB').removeClass('menuListControllerAButton');
  }
  $(".menuListProductA").addClass("active");
  $(".menuListProductB").addClass("active");
}