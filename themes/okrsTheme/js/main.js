jQuery(document).ready(function(){

  //per far apparire il logo dopo uno scroll maggiore di 30px;
  jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 30) {
            jQuery(".logoPic").show();
        }
  });
  //per far apparire il menu al click sull'hamburger
  jQuery('.wrapHamburger i').click(function(){
    //alert("ciao");
    jQuery('.wrapMenuResponsive').slideToggle();
  });
});
