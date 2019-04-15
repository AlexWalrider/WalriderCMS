function bodyLoad() {
      var box = document.getElementById('mainText');
      box.focus();
      countLength()
    }
    function countLength() {
      var box = document.getElementById('mainText');
      var divCount = document.getElementById('count');
      divCount.innerHTML = "Количество символов: " + box.value.length + "/25000&nbsp;&nbsp;&nbsp;";
    }
    function toggleDiv(eID) {
      var elem = document.getElementById(eID);
      var vis = elem.style;
      // if the style.display value is blank we try to figure it out here
      if (vis.display == '' && elem.offsetWidth != undefined && elem.offsetHeight != undefined)
        vis.display = (elem.offsetWidth != 0 && elem.offsetHeight != 0) ? 'block' : 'none';
      vis.display = (vis.display == '' || vis.display == 'block') ? 'none' : 'block';

    }

function toggleLayer(whichLayer, checkwhat) {
      if (document.getElementById) {
        var style2 = document.getElementById(whichLayer).style;
        if (document.getElementById(checkwhat).checked) {
          style2.display = "";
        } else {
          style2.display = "none";
        }
      }
    }

    function createKey(boxname) {
      var password = "";
      for (var i = 1; i <= 5; i++) {
        password += String.fromCharCode(97 + Math.round(Math.random() * 25));
      }
      var pwbox = document.getElementById(boxname);
      pwbox.value = password;
    }