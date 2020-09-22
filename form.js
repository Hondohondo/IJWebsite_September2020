


// var nameValue = document.getElementById("name").value;
//
//
// document.getElementById("nameprint").innerHTML = nameValue;


function myFunction() {

  var nameValue = document.getElementById("name").value;
  var nameAddress = document.getElementById("address").value;
  var nameCity = document.getElementById("city").value;
  var nameState = document.getElementById("state").value;
  var nameZip = document.getElementById("zip").value;
  var nameNumber = document.getElementById("number").value;

  document.getElementById("demo").innerHTML = nameValue;
  document.getElementById("popaddress").innerHTML = nameAddress;
  document.getElementById("popcity").innerHTML = nameCity;
  document.getElementById("popstate").innerHTML = nameState;
  document.getElementById("popzip").innerHTML = nameZip;
  document.getElementById("popphone").innerHTML = nameNumber;
  // document.getElementById("nameprint").innerHTML = nameValue;

  // document.getElementById("popup").style.display = "block";


  var ele = document.getElementsByName('amount');

  for(i = 0; i < ele.length; i++) {
      if(ele[i].checked)
      document.getElementById("popamount").innerHTML
              = "Amount: "+ele[i].value;
  }

  document.getElementById("printnow").style.display = "block";
  document.getElementById("times").style.display = "block";

}

// function displayRadioValue() {
//          var ele = document.getElementsByName('gender');
//
//          for(i = 0; i < ele.length; i++) {
//              if(ele[i].checked)
//              document.getElementById("result").innerHTML
//                      = "Gender: "+ele[i].value;
//          }
//      }

function printFunction() {
  document.getElementById("printnow").style.display = "none";
  document.getElementById("times").style.display = "none";
  // document.getElementById("popup").style.display = "none";
    window.print();

    // document.getElementById("printnow").style.display = "none";
    // document.getElementById("printnow").style.display = "none";
    // document.getElementById("times").style.display = "none";
}
