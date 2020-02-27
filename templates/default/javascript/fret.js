function fretHide(_containerId) {
  var obj = document.getElementById(_containerId);
  obj.style.display = "none";
}

function fretShow(_containerId) {
  var obj = document.getElementById(_containerId);
  obj.style.display = "";
}

function fretShowHide(_containerId) {
  var obj = document.getElementById(_containerId);
  if (obj.style.display == "none") {
    fretShow(_containerId);
  } else {
    fretHide(_containerId);
  }
}
