$(function(){
  //chargement de la page, on regarde quelle est la langue du browser
  var initlang="fr";
  if (window.navigator.userLanguage || window.navigator.language || navigator.language ){
    initlang = window.navigator.userLanguage || window.navigator.language || navigator.language ;
    console.log('Detection 1:'+initlang);
  }else {
    if (navigator && navigator.userAgent && (androidLang = navigator.userAgent.match(/android.*\W(\w\w)-(\w\w)\W/i))) {
        initlang = androidLang[1];
        console.log('Detection 2:'+initlang);
    } else {
        // works for iOS and Android 4.x
        if( userLang = navigator.userLanguage || navigator.language){
          initlang =userLang;
          console.log('Detection 3:'+initlang);
        }else{
          initlang = 'fr';
        }
    }
  }
  //our les cas en-US par exemple
  if(initlang.indexOf("-") != 1){
    initlang = initlang.split("-")[0]
  }

  initlang = initlang.toLowerCase();

  //cas où l'on a une langue non connu, on va mettre l'Anglais
  if(initlang !== 'fr' && initlang !== 'en' && initlang !== 'de'){
    initlang='en';
  }

  $('.en').css("display", "block");
  if (initlang == "fr"){
    $(".fr").css("display", "block");
    $(".en").css("display", "none");
  }
  else{
      $(".fr").css("display", "none");
      $(".en").css("display", "block");
  }

  $('.lang').each(function(index, element){
    console.log(initlang);
    $(this).text(arrLang[initlang][$(this).attr('key')]);
  });
});
