var result = document.getElementById('js-result');
var btDelete = document.getElementById('js-Delete');

setCookie('name', 'nghia');
result.innerHTML = getCookie('name');

// Event click on button Delete to delete a Cookie
btDelete.onclick = function() {
  removeCookie('name');
  result.innerHTML = getCookie('name');
};

/**
* Function initialize a cookie for a time
* @param string name to set name for Cookie.
* @param string value to set value for Cookie.
* @return void.
*/

function setCookie(name, value)
{
  var now = new Date();
  now.setHours(now.getHours() + 2);//The expiration time is 2h
  document.cookie = name + '=' + value + ';expires=' + now.toUTCString();
}

/**
* Function to get a cookie with input name
* @param string name to find name of Cookie
* @return string
*/

function getCookie(name) {
  var listCookie = document.cookie.split(';');

  for (var i = 0; i < listCookie.length; i++) {
    var thisCookie = listCookie[i].split('=');
    if (thisCookie[0] === name) {
      return thisCookie[1];
    }
  }
  return 'Đã xóa thành công';
}

/**
* Function to remove a cookie
* @param string name Cookie need to delete
* @return none
*/

function removeCookie(name) {
  var now = new Date();
  now.setFullYear(now.getFullYear() - 2);
  document.cookie = name + '=' + ';expires=' + now.toUTCString();
}