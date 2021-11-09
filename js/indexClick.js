/* simulate click on first link to activate index.php on website opening
https://stackoverflow.com/questions/31867229/how-can-i-execute-a-javascript-function-on-the-first-page-load
using the window.session Storage stores the value only for that session.
Problem: works with Firefox but doesn't work on mobile devices (Android) and Chrome
https://stackoverflow.com/questions/40614726/simulate-click-event-on-mobile-device
*/

window.onload = function () {
  if (!("hasRunCodeBefore" in sessionStorage)) {
    document.getElementById("first").click();
    console.log("first:", first);
    sessionStorage.setItem("hasRunCodeBefore", true);
  }
};
