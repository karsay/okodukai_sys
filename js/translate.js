const translate = document.getElementsByClassName('translate');
const translateLang = "en";
const glot = new Glottologist();
//Google翻訳を使って変換
function setTranslation(lang, element) {
  glot.t(element.textContent, lang).then( result => {
    element.textContent = result;
  })
}

for(let i = 0;i < translate.length; i++) {
  transElement = translate[i];
  setTranslation(translateLang, transElement);
}