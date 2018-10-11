/**********************************Start Up Function***********************************/
var availability = document.getElementById("productDetailAvailability");
var outOfStock = document.getElementById("productDetailOutOfStock");
var inStock = document.getElementById("productDetailInStock");
var check = availability.innerHTML;
if(check.match("In stock"))
{
  availability.style.color = "green";
}
else
{
  availability.style.color = "red";
  outOfStock.style.display = "block";
  inStock.style.display = "none";
}

$('.zoo-item').ZooMove();
/**********************************Calling Function************************************/
function productDetailOnFocus()
{
  var image = document.getElementById("productDetailAddOn");
  image.className = "productDetailAddOnBlack";
}

function productDetailOnBlur()
{
  var image = document.getElementById("productDetailAddOn");
  image.className = "productDetailAddOnWhite";
}

function productDetailAdd()
{
  var value = document.getElementById("productDetailQuantity");
  value.value++;
}

function productDetailMinus()
{
  var value = document.getElementById("productDetailQuantity");
  if(value.value != 1)
  {
    value.value--;
  }
}

function productDetailValueCheck(value)
{
  if(isNaN(value) || value.value < 1)
  {
    value.value = 1;
  }
  else
  {
    Math.floor(value.value);
  }
}

function productDetailChangeImage(additionalImage)
{
  var mainImage = document.getElementById("productDetailImage");
  var save;
  
  save = additionalImage.src;
  additionalImage.src = mainImage.attributes["data-zoo-image"].value;
  mainImage.setAttribute("data-zoo-image", save);
  mainImage.getElementsByTagName("div")[0].style.backgroundImage = "url('" + save + "')";
}

