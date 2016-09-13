$(function(){
//action de l'utilisateur pour changer de langue
  $('.translate').click(function(){
    var lang = $(this).attr('id');

    $('.lang').each(function(index, element){
      $(this).text(arrLang[lang][$(this).attr('key')]);
    });
  });
});
