var translate = document.getElementsByClassName('translate');
var translateLang = "en";
const glot = new Glottologist();

//Google翻訳を使って変換
function setTranslation(lang, element) {
  glot.t(element.textContent, lang).then( result => {
    element.textContent = result;
  })
}

// for(let i = 0;i < translate.length; i++) {
//   transElement = translate[i];
//   setTranslation(translateLang, transElement);
// }

/*Dropdown Menu*/

$('.dropdown').click(function () {
  $(this).attr('tabindex', 1).focus();
  $(this).toggleClass('active');
  $(this).find('.dropdown-menu').slideToggle(300);
});
$('.dropdown').focusout(function () {
  $(this).removeClass('active');
  $(this).find('.dropdown-menu').slideUp(300);
});
$('.dropdown .dropdown-menu li').click(function () {
  $(this).parents('.dropdown').find('span').text($(this).text());
  $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));

  translateLang = $(this).parents('.dropdown').find('input').attr('value');
  for(let i = 0;i < translate.length; i++) {
    transElement = translate[i];
    setTranslation(translateLang, transElement);
  }

});
/*End Dropdown Menu*/
