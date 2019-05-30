function validateForm() {
    var x = document.forms["ian"]["name"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }