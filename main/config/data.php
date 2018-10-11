<?php
$title = 'Parisine';

if (isset($_SESSION["firstVisit"]))
{
  $_SESSION["firstVisit"]++;
}
else
{
  $_SESSION["firstVisit"] = 1;
}

//Start of "Data of header"
$dataHeader["LoginEN"] = "LOGIN";
$dataHeader["LoginZH"] = "登入";
$dataHeader["LoginCN"] = "登入";

$dataHeader["MyAccountEN"] = "MY ACCOUNT" ;
$dataHeader["MyAccountZH"] = "我的帳戶" ;
$dataHeader["MyAccountCN"] = "我的帳戶" ;

$dataHeader["CheckOutEN"] = "CHECKOUT" ;
$dataHeader["CheckOutZH"] = "結帳" ;
$dataHeader["CheckOutCN"] = "結帳" ;

$dataHeader["SearchEN"] = "SEARCH.." ;
$dataHeader["SearchZH"] = "搜尋.." ;
$dataHeader["SearchCN"] = "搜尋.." ;

$dataHeader["CartEN"] = "MY CART" ;
$dataHeader["CartZH"] = "我的購物車" ;
$dataHeader["CartCN"] = "我的購物車" ;

$dataHeader["EditEN"] = "EDIT" ;
$dataHeader["EditZH"] = "編輯" ;
$dataHeader["EditCN"] = "編輯" ;

$dataHeader["RemoveEN"] = "REMOVE" ;
$dataHeader["RemoveZH"] = "移除" ;
$dataHeader["RemoveCN"] = "移除" ;

$dataHeader["ViewCartEN"] = "VIEW CART" ;
$dataHeader["ViewCartZH"] = "前往購物車" ;
$dataHeader["ViewCartCN"] = "前往購物車" ;
//End of  "Data of header"

//Start of "Data of HeaderNav"
$dataHeader["ScentBarEN"] = "Scent bar";
$dataHeader["ScentBarZH"] = "香氣走廊";
$dataHeader["ScentBarCN"] = "香氣走廊";

$dataHeader["Your exclusive fragrance by ParisineEN"] = "CREATE YOUR EXCLUSIVE FRAGRANCE";
$dataHeader["Your exclusive fragrance by ParisineZH"] = "創造專屬您的香水";
$dataHeader["Your exclusive fragrance by ParisineCN"] = "創造專屬您的香水";

$dataHeader["ScentBarConceptBarEN"] = "Concept";
$dataHeader["ScentBarConceptBarZH"] = "概念";
$dataHeader["ScentBarConceptBarCN"] = "概念";

$dataHeader["MoreAboutPerfumeEN"] = "More About Perfume";
$dataHeader["MoreAboutPerfumeZH"] = "更多有關香水";
$dataHeader["MoreAboutPerfumeCN"] = "更多有關香水";

$dataHeader["MoreAboutPerfumePerfumeTipsEN"] = "Perfume tips";
$dataHeader["MoreAboutPerfumePerfumeTipsZH"] = "香水貼士";
$dataHeader["MoreAboutPerfumePerfumeTipsCN"] = "香水貼士";

$dataHeader["MoreAboutPerfumeFindYourScentEN"] = "Find your scent";
$dataHeader["MoreAboutPerfumeFindYourScentZH"] = "尋找您的香氣";
$dataHeader["MoreAboutPerfumeFindYourScentCN"] = "尋找您的香氣";

$dataHeader["MoreAboutPerfumeFragrancesFamiliesEN"] = "Fragrances families";
$dataHeader["MoreAboutPerfumeFragrancesFamiliesZH"] = "我們的香水系列";
$dataHeader["MoreAboutPerfumeFragrancesFamiliesCN"] = "我們的香水系列";

$dataHeader["Personal fragrancesEN"] = "Personal fragrances";
$dataHeader["Personal fragrancesZH"] = "個人系列";
$dataHeader["Personal fragrancesCN"] = "個人系列";

$dataHeader["Personal fragrances WomenEN"] = "Women";
$dataHeader["Personal fragrances WomenZH"] = "女士";
$dataHeader["Personal fragrances WomenCN"] = "女士";

$dataHeader["Personal fragrances WomenAEN"] = "Les essentielles";
$dataHeader["Personal fragrances WomenAZH"] = "Les essentielles";
$dataHeader["Personal fragrances WomenACN"] = "Les essentielles";

$dataHeader["Personal fragrances WomenBEN"] = "Vaporisateurs de sac";
$dataHeader["Personal fragrances WomenBZH"] = "Vaporisateurs de sac";
$dataHeader["Personal fragrances WomenBCN"] = "Vaporisateurs de sac";

$dataHeader["Personal fragrances MenEN"] = "Men";
$dataHeader["Personal fragrances MenZH"] = "男士";
$dataHeader["Personal fragrances MenCN"] = "男士";

$dataHeader["Personal fragrances MenAEN"] = "Les essentielles";
$dataHeader["Personal fragrances MenAZH"] = "Les essentielles";
$dataHeader["Personal fragrances MenACN"] = "Les essentielles";

$dataHeader["Personal fragrances MenBEN"] = "Vaporisateurs de sac";
$dataHeader["Personal fragrances MenBZH"] = "Vaporisateurs de sac";
$dataHeader["Personal fragrances MenBCN"] = "Vaporisateurs de sac";

$dataHeader["Home diffusersEN"] = "Home diffusers";
$dataHeader["Home diffusersZH"] = "家用香芬機";
$dataHeader["Home diffusersCN"] = "家用香芬機";

$dataHeader["Home fragrancesEN"] = "Home fragrances";
$dataHeader["Home fragrancesZH"] = "家用香芬";
$dataHeader["Home fragrancesCN"] = "家用香芬";

$dataHeader["Home fragrances FavoritesEN"] = "Favorites";
$dataHeader["Home fragrances FavoritesZH"] = "依照喜好";
$dataHeader["Home fragrances FavoritesCN"] = "依照喜好";

$dataHeader["Home fragrances SeasonsEN"] = "By seasons";
$dataHeader["Home fragrances SeasonsZH"] = "依照四季";
$dataHeader["Home fragrances SeasonsCN"] = "依照四季";

$dataHeader["Home fragrances By seasons WinterEN"] = "Winter";
$dataHeader["Home fragrances By seasons WinterZH"] = "冬季";
$dataHeader["Home fragrances By seasons WinterCN"] = "冬季";

$dataHeader["Home fragrances By seasons SpringEN"] = "Spring";
$dataHeader["Home fragrances By seasons SpringZH"] = "春季";
$dataHeader["Home fragrances By seasons SpringCN"] = "春季";

$dataHeader["Home fragrances By seasons SummerEN"] = "Summer";
$dataHeader["Home fragrances By seasons SummerZH"] = "夏季";
$dataHeader["Home fragrances By seasons SummerCN"] = "夏季";

$dataHeader["Home fragrances By seasons AutumnEN"] = "Autumn";
$dataHeader["Home fragrances By seasons AutumnZH"] = "秋季";
$dataHeader["Home fragrances By seasons AutumnCN"] = "秋季";

$dataHeader["Home fragrances By collectionsEN"] = "By collections";
$dataHeader["Home fragrances By collectionsZH"] = "依照系列";
$dataHeader["Home fragrances By collectionsCN"] = "依照系列";

$dataHeader["GiftsEN"] = "Gifts";
$dataHeader["GiftsZH"] = "送禮";
$dataHeader["GiftsCN"] = "送禮";

$dataHeader["Gifts CelebrationsEN"] = "Celebrations";
$dataHeader["Gifts CelebrationsZH"] = "慶祝";
$dataHeader["Gifts CelebrationsCN"] = "慶祝";

$dataHeader["Gifts For HerEN"] = "For Her";
$dataHeader["Gifts For HerZH"] = "給\"她\"";
$dataHeader["Gifts For HerCN"] = "給\"她\"";

$dataHeader["Gifts For himEN"] = "For him";
$dataHeader["Gifts For himZH"] = "給\"他\"";
$dataHeader["Gifts For himCN"] = "給\"他\"";

$dataHeader["About usEN"] = "About us";
$dataHeader["About usZH"] = "關於我們";
$dataHeader["About usCN"] = "關於我們";

$dataHeader["About us Visit usEN"] = "Visit us";
$dataHeader["About us Visit usZH"] = "親臨店鋪";
$dataHeader["About us Visit usCN"] = "親臨店鋪";
//End of "Data of HeaderNav"

//Start of "Data of Footer"
$dataFooter["InformationEN"] = "INFORMATION";
$dataFooter["InformationZH"] = "我們的資訊";
$dataFooter["InformationCN"] = "我們的資訊";

$dataFooter["InformationABOUT USEN"] = "ABOUT US";
$dataFooter["InformationABOUT USZH"] = "我們的資訊";
$dataFooter["InformationABOUT USCN"] = "我們的資訊";

$dataFooter["InformationFIND A PARISINE STORESEN"] = "FIND A PARISINE STORES";
$dataFooter["InformationFIND A PARISINE STORESZH"] = "尋找我們的店鋪";
$dataFooter["InformationFIND A PARISINE STORESCN"] = "尋找我們的店鋪";

$dataFooter["InformationCONTACT USEN"] = "CONTACT US";
$dataFooter["InformationCONTACT USZH"] = "聯絡我們";
$dataFooter["InformationCONTACT USCN"] = "聯絡我們";

$dataFooter["InformationSITE MAPEN"] = "SITE MAP";
$dataFooter["InformationSITE MAPZH"] = "網站地圖";
$dataFooter["InformationSITE MAPCN"] = "網站地圖";

$dataFooter["InformationFAQSEN"] = "FAQ'S";
$dataFooter["InformationFAQSZH"] = "FAQ'S";
$dataFooter["InformationFAQSCN"] = "FAQ'S";

$dataFooter["InformationHELPSEN"] = "HELPS";
$dataFooter["InformationHELPSZH"] = "幫助";
$dataFooter["InformationHELPSCN"] = "幫助";

$dataFooter["SocialEN"] = "SOCIAL";
$dataFooter["SocialZH"] = "社交";
$dataFooter["SocialCN"] = "社交";

$dataFooter["SocialNEWSLETTEREN"] = "NEWSLETTER";
$dataFooter["SocialNEWSLETTERZH"] = "訂閱電郵";
$dataFooter["SocialNEWSLETTERCN"] = "訂閱電郵";

$dataFooter["SocialPRESS ACCESSEN"] = "PRESS ACCESS";
$dataFooter["SocialPRESS ACCESSZH"] = "點擊前往";
$dataFooter["SocialPRESS ACCESSCN"] = "點擊前往";

$dataFooter["SocialCUSTOMERS SERVICEEN"] = "CUSTOMERS SERVICE";
$dataFooter["SocialCUSTOMERS SERVICEZH"] = "客戶服務";
$dataFooter["SocialCUSTOMERS SERVICECN"] = "客戶服務";

$dataFooter["SocialPRIVACY POLICYEN"] = "PRIVACY POLICY";
$dataFooter["SocialPRIVACY POLICYZH"] = "個人私隱條款";
$dataFooter["SocialPRIVACY POLICYCN"] = "個人私隱條款";

$dataFooter["SocialTERMS AND CONDITIONSEN"] = "TERMS AND CONDITIONS";
$dataFooter["SocialTERMS AND CONDITIONSZH"] = "條款和條件";
$dataFooter["SocialTERMS AND CONDITIONSCN"] = "條款和條件";

$dataFooter["SocialGIFT CARDEN"] = "GIFT CARD";
$dataFooter["SocialGIFT CARDZH"] = "禮卡";
$dataFooter["SocialGIFT CARDCN"] = "禮卡";

$dataFooter["MyAccountEN"] = "MY ACCOUNT";
$dataFooter["MyAccountZH"] = "我的帳戶";
$dataFooter["MyAccountCN"] = "我的帳戶";

$dataFooter["MyAccountSIGN INEN"] = "SIGN IN";
$dataFooter["MyAccountSIGN INZH"] = "登入";
$dataFooter["MyAccountSIGN INCN"] = "登入";

$dataFooter["MyAccountMY WISH LISTEN"] = "MY WISH LIST";
$dataFooter["MyAccountMY WISH LISTZH"] = "我的希望清單";
$dataFooter["MyAccountMY WISH LISTCN"] = "我的希望清單";

$dataFooter["NewsLetterEN"] = "NEWSLETTER";
$dataFooter["NewsLetterZH"] = "訂閱電郵";
$dataFooter["NewsLetterCN"] = "訂閱電郵";

$dataFooter["EnterEmailEN"] = "ENTER YOUR EMAIL..";
$dataFooter["EnterEmailZH"] = "輸入您的電郵地址";
$dataFooter["EnterEmailCN"] = "輸入您的電郵地址";

$dataFooter["footerCopyRightEN"] = " © 2016 PARISINE SHOP. ALL RIGHTS RESERVED..";
$dataFooter["footerCopyRightZH"] = " © 2016 PARISINE SHOP 保留所有權利。";
$dataFooter["footerCopyRightCN"] = " © 2016 PARISINE SHOP 保留所有权利。";








//End of "Data of Footer"