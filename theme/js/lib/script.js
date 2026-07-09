var arCuMessages = ["Hallo, kami siap membantu anda", "Anda butuh bantuan?"];
var arCuLoop = false;
var arCuCloseLastMessage = false;
var arCuPromptClosed = false;
var _arCuTimeOut = null;
var arCuDelayFirst = 100;
var arCuTypingTime = 100;
var arCuMessageTime = 4000;
var arCuClosedCookie = 0;
var arcItems = [];
window.addEventListener('load', function() {
  arCuClosedCookie = arCuGetCookie('arcu-closed');
  jQuery('#arcontactus').on('arcontactus.init', function() {
    if (arCuClosedCookie) {
      return false;
    }
    arCuShowMessages();
  });
  jQuery('#arcontactus').on('arcontactus.openMenu', function() {
    clearTimeout(_arCuTimeOut);
    arCuPromptClosed = true;
    jQuery('#contact').contactUs('hidePrompt');
    arCuCreateCookie('arcu-closed', 1, 30);
  });
  jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {
    clearTimeout(_arCuTimeOut);
    arCuPromptClosed = true;
    arCuCreateCookie('arcu-closed', 1, 30);
  });
  var arcItem = {};
  arcItem.id = 'msg-item-1';
  arcItem.class = 'msg-item-facebook-messenger';
  arcItem.title = 'Sheila Sukmasari D';
  arcItem.icon = '<img class="img-circle"  src="https://afcstoreindo.com/assets/images/admin/sheila.png">';
  arcItem.href = 'https://api.whatsapp.com/send/?phone=628111797970&text=Halo, AFC makanan bernutrisi tinggi / superfood berfungsi untuk terapi stem cell sehingga bisa membantu kesembuhan semua penyakit fungsional degeneratif organ : diabetes, tumor, benjolan, hipertensi, jantung, stroke, ginjal, alergi, insomnia, maag, kanker, kolesterol, sendi, jerawat, kulit, liver, kista, miom, usus, virus dll.  Ada yang bisa kami bantu bapak / ibu untuk penanganan sakit apa ? Saya dapat info dari website&type=phone_number&app_absent=0';
  arcItem.color = '#008749';
  arcItems.push(arcItem);
  var arcItem = {};
  arcItem.id = 'msg-item-1';
  arcItem.class = 'msg-item-facebook-messenger';
  arcItem.title = 'Mira Wicitra';
  arcItem.icon = '<img class="img-circle"  src="https://afcstoreindo.com/assets/images/admin/wira.png">';
  arcItem.href = 'https://api.whatsapp.com/send/?phone=6282125838168&text=Halo, AFC makanan bernutrisi tinggi / superfood berfungsi untuk terapi stem cell sehingga bisa membantu kesembuhan semua penyakit fungsional degeneratif organ : diabetes, tumor, benjolan, hipertensi, jantung, stroke, ginjal, alergi, insomnia, maag, kanker, kolesterol, sendi, jerawat, kulit, liver, kista, miom, usus, virus dll.  Ada yang bisa kami bantu bapak / ibu untuk penanganan sakit apa ? Saya dapat info dari website&type=phone_number&app_absent=0';
  arcItem.color = '#008749';
  arcItems.push(arcItem);
  var arcItem = {};
  arcItem.id = 'msg-item-1';
  arcItem.class = 'msg-item-facebook-messenger';
  arcItem.title = 'Asvita';
  arcItem.icon = '<img class="img-circle"  src="https://afcstoreindo.com/assets/images/admin/asvita.png">';
  arcItem.href = 'https://api.whatsapp.com/send/?phone=6287868885898&text=Halo, AFC makanan bernutrisi tinggi / superfood berfungsi untuk terapi stem cell sehingga bisa membantu kesembuhan semua penyakit fungsional degeneratif organ : diabetes, tumor, benjolan, hipertensi, jantung, stroke, ginjal, alergi, insomnia, maag, kanker, kolesterol, sendi, jerawat, kulit, liver, kista, miom, usus, virus dll.  Ada yang bisa kami bantu bapak / ibu untuk penanganan sakit apa ? Saya dapat info dari website&type=phone_number&app_absent=0';
  arcItem.color = '#008749';
  arcItems.push(arcItem);
  var arcItem = {};
  arcItem.id = 'msg-item-1';
  arcItem.class = 'msg-item-facebook-messenger';
  arcItem.title = 'Agustinus Bagyo S';
  arcItem.icon = '<img class="img-circle"  src="https://afcstoreindo.com/assets/images/admin/bagyo.png">';
  arcItem.href = 'https://api.whatsapp.com/send/?phone=6282112670988&text=Halo, AFC makanan bernutrisi tinggi / superfood berfungsi untuk terapi stem cell sehingga bisa membantu kesembuhan semua penyakit fungsional degeneratif organ : diabetes, tumor, benjolan, hipertensi, jantung, stroke, ginjal, alergi, insomnia, maag, kanker, kolesterol, sendi, jerawat, kulit, liver, kista, miom, usus, virus dll.  Ada yang bisa kami bantu bapak / ibu untuk penanganan sakit apa ? Saya dapat info dari website&type=phone_number&app_absent=0';
  arcItem.color = '#008749';
  arcItems.push(arcItem);
  
  
  jQuery('#arcontactus').contactUs({
    items: arcItems
  });
});