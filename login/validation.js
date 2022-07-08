function validate(){
    let x = document.forms["form"]["uname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
}

function refresh(e) {
  event.preventDefault();
  console.log("Not Refreshed");
}
