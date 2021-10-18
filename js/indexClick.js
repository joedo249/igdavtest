window.onload = function() {
    if (!("hasRunBefore" in sessionStorage)) {
      document.getElementById("first").click();
      sessionStorage.setItem("hasRunBefore", true);
    }
  }