/**********************************Start Up Function***********************************/
/*new SmoothScroll();
 
 function SmoothScroll(el)
 {
 var t = this, h = document.documentElement;
 el = el || window;
 t.rAF = false;
 t.target = 0;
 t.scroll = 0;
 t.animate = function ()
 {
 t.scroll += (t.target - t.scroll) * 0.1;
 if (Math.abs(t.scroll.toFixed(5) - t.target) <= 1.47131)
 {
 cancelAnimationFrame(t.rAF);
 t.rAF = false;
 }
 if (el == window)
 {
 scrollTo(0, t.scroll);
 }
 else
 {
 el.scrollTop = t.scroll;
 }
 if (t.rAF)
 {
 t.rAF = requestAnimationFrame(t.animate);
 }
 };
 el.onmousewheel = function (e)
 {
 e.preventDefault();
 e.stopPropagation();
 var scrollEnd = (el == window) ? h.scrollHeight - h.clientHeight : el.scrollHeight - el.clientHeight;
 t.target += (e.wheelDelta > 0) ? -70 : 70;
 if (t.target < 0)
 {
 t.target = 0;
 }
 if (t.target > scrollEnd)
 {
 t.target = scrollEnd;
 }
 if (!t.rAF)
 {
 t.rAF = requestAnimationFrame(t.animate);
 }
 };
 el.onscroll = function ()
 {
 if (t.rAF)
 {
 return;
 }
 t.target = (el == window) ? pageYOffset || h.scrollTop : el.scrollTop;
 t.scroll = t.target;
 };
 }*/

var urlPath = window.location.pathname;
var languageText = urlPath.split("/");
$("#headerSelect").find("option[value='" + languageText[1] + "']").attr('selected', 'selected');

var headerCartNumber = document.getElementById("headerCartNumber");
if(parseInt(headerCartNumber.innerHTML) == 0)
{
  headerCartNumber.style.color = "white";
}

var image_path = 'runtime/image/';
images = ['footerArrowGold.png', 'footerArrowWhite.png', 'footerMediaFacebookHover.png',
          'footerMediaInstagramHover.png', 'footerMediaPinterestHover.png', 'headerSearchGold.png',
          'headerSearchWhite.png'];
for(var i = 0; i < images.length; i++)
{
  var image_preload = new Image();
  image_preload.src = image_path + images[i];
}

$(function()
  {
    $('#mobileHeaderMenuButton').on('click', function()
    {
      $(this).toggleClass('active');
      return false;
    });
  
    $('.mobileHeaderOptionDiv.multiple>button').on('click', function()
    {
      $(this).parent().toggleClass('active');
      return false;
    });
  
    $('.mobileHeaderOptionAddOn.multiple>button').on('click', function()
    {
      $(this).parent().toggleClass('active');
      return false;
    });
  
    $('.mobileFooterList>button').on('click', function()
    {
      $(this).parent().toggleClass('active');
      return false;
    });
  });

$('#headerModal1').modal("show").css("display", "flex").css("padding-right", "17px;");
window.scrollTo(0, 0);
/**********************************Calling Function************************************/
var stickyNav = $(".headerNavBar");

$(window).scroll(function()
                 {
                   if($(this).scrollTop() > 287)
                   {
                     stickyNav.addClass("sticky");
                     $(".header").addClass("transit");
                   }
                   else
                   {
                     stickyNav.removeClass("sticky");
                     $(".header").removeClass("transit");
                   }
                 });

function language()
{
  var select = $("#headerSelect");
  var languageA = select.find("option:selected").val();
  var languageB = select.find("option:not(:selected)").val();
  var languageText = urlPath.split("/");
  var url = window.location.href;

  if(languageText[1] == "EN" || languageText[1] == "ZH" || languageText[1] == "CN")
  {
    window.location.href = url.replace(languageText[1], languageA);
  }
  else
  {
    window.location.href = url.replace(languageText[1], languageA);
  }

    if ((languageText[1] === ""))
    {
        window.location.href = url+languageA;
    }

}

function mobileLanguage(a)
{
  var url = window.location.href;
  
  if(!url.match("EN") && !url.match("ZH"))
  {
    window.location.href = url + a;
  }
  else if(a == "EN")
  {
    window.location.href = url.replace("ZH", "EN");
  }
  else if(a == "ZH")
  {
    window.location.href = url.replace("EN", "ZH");
  }
}

function headerSearchOnFocus()
{
  var image = document.getElementById("headerSearchAddOn");
  image.className = "headerSearchAddOnWhite";
}

function headerSearchOnBlur()
{
  var image = document.getElementById("headerSearchAddOn");
  image.className = "headerSearchAddOnBlack";
}

function headerModalInputOnFocus()
{
  var image = document.getElementById("headerModalInputAddOn");
  image.className = "headerModalInputAddOnBlack";
}

function headerModalInputOnBlur()
{
  var image = document.getElementById("headerModalInputAddOn");
  image.className = "headerModalInputAddOnWhite";
}

function headerModalClose()
{
  $('#headerModal1').modal('hide');
}

function showCartList()
{
  var cartList = document.getElementsByClassName("headerCartHoverDiv")[0];
  cartList.style.maxHeight = "455px";
  cartList.style.padding = "30px";
}

function hideCartList()
{
  var cartList = document.getElementsByClassName("headerCartHoverDiv")[0];
  cartList.style.maxHeight = "0";
  cartList.style.padding = "0";
}

function footerSearchOnFocus()
{
  var image = document.getElementById("footerSearchAddOn");
  image.className = "footerSearchAddOnWhite";
}

function footerSearchOnBlur()
{
  var image = document.getElementById("footerSearchAddOn");
  image.className = "footerSearchAddOnBlack";
}

function mobileMenuControl()
{
  if($(".mobileHeaderMainB").hasClass('active'))
  {
    $(".mobileHeaderMainB.active").removeClass("active");
    setTimeout(function()
               {
                 $(".mobileHeaderMainA").toggleClass("active")
               }, 300);
  }
  else
  {
    $(".mobileHeaderMainA").toggleClass("active")
  }
  return false;
}

function mobileCartControl()
{
  if($(".mobileHeaderMainA").hasClass('active'))
  {
    $(".mobileHeaderMainA.active").removeClass("active");
    $('#mobileHeaderMenuButton').removeClass("active");
    setTimeout(function()
               {
                 $(".mobileHeaderMainB").toggleClass("active")
               }, 300);
  }
  else
  {
    $(".mobileHeaderMainB").toggleClass("active");
  }
  return false;
}