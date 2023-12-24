function validateForm() {
    var x = document.forms["FrmReg"]["name"].value;
    if (x == "")
     {
          alert("Name must be filled out");
          return false;
    }

    var Y = document.forms["FrmReg"]["email"].value;
    if (Y == "")
     {
          alert("EMail must be filled out");
          return false;
    }

    var Z = document.forms["FrmReg"]["pass"].value;
    if (Z == "")
     {
          alert("Password must be filled out");
          return false;
    }

    var A = document.forms["FrmReg"]["re_pass"].value;
    if (A == "")
     {
          alert("Retype Password must be filled out");
          return false;
    }
  }