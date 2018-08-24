function setCookie(cname, cvalue) {
  window.localStorage.setItem(cname, cvalue);
}

function getCookie(cname) {
  return(window.localStorage.getItem(cname));

}

function checkCookie(cname) {
  var cookie = window.localStorage.getItem(cname);
  if (cookie != "" && cookie != null) {

    return true;

  } else {

    return false;

  }
}
