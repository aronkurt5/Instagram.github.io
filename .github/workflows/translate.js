function translatePage() {
  var newLang = document.getElementById("language-select").value;
  var oldLang = document.documentElement.lang;
  if(newLang != oldLang) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if(xhr.readyState == XMLHttpRequest.DONE) {
        if(xhr.status == 200) {
          document.documentElement.innerHTML = xhr.responseText;
          document.documentElement.lang = newLang;
        }
        else {
          alert('Error: ' + xhr.statusText);
        }
      }
    };
    xhr.open('GET', window.location.href + '?translate=' + newLang, true);
    xhr.send(null);
  }
}
