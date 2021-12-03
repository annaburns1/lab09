function validIn() {
  var username = document.getElementById("userEmail").value;
  var pass = document.getElementById('userPass').value;
  var gran = document.getElementById('numGran').value;
  var hon = document.getElementById('numHon').value;
  var gold = document.getElementById('numGold').value;
  var retVal = false;

  if (username.length == 0 || pass.length == 0) {
    alert("Please enter a username and password!");
  }
  else if (gran < 0 || hon < 0 || gold < 0 || gran == "" || hon == "" || gold == "") {
    alert("Please enter a number greater than or equal to zero for your purchases.");
  }
  else if (document.getElementById('free').checked || document.getElementById('three').checked || document.getElementById('fifty').checked ) {
    retVal = true;
  }
  else {
    alert("Select shipping method");
  }

  //console.log(ship);
  return retVal;

}

function validCheck() {
  if(validIn()) {
    document.getElementById("buy").type = "submit";
  }
}

function resetPage() {
  document.getElementById("userEmail").value = '';
  document.getElementById("userPass").value = '';
  document.getElementById("numGran").value = '';
  document.getElementById("numHon").value = '';
  document.getElementById("numGold").value = '';
  document.querySelector('input[type=radio][name=ship]:checked').checked = false;
}
