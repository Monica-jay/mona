function validateForm() {
  var sn = document.forms["myForm"]["seller_name"].value;
   var ad = document.forms["myForm"]["address"].value;

  var ct = document.forms["myForm"]["city"].value;
  var pn = document.forms["myForm"]["mobile"].value;
  var em = document.forms["myForm"]["email"].value;
  var vl = document.forms["myForm"]["vehicle_make"].value;
  var md = document.forms["myForm"]["model"].value;
  var yr = document.forms["myForm"]["year"].value;
  var km = document.forms["myForm"]["kilometer_driven"].value;
  //var link = "https://www.jdpower.com/cars/"+vl+"/"+md+"/"+yr;
 var phoneno = /^\(?([0-9]{3})\)?[-]?([0-9]{3})[-]?([0-9]{4})$/;
 var yearformat = /^[1-9]{1}[0-9]{3}$/;
 var emailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

 
 
  if (sn == "") {
    alert("Seller Name must be filled out");
    return false;
  }
  else if (ad == "") {
alert("Address must be filled out");
    return false;
  } else if (ct == "") {
alert("City must be filled out");
    return false;
  }

  else if ( pn == "" ) {
alert("Phone must be filled out");
    return false;
  }
   else if ( pn.length != 10 ) 
  {
alert("Phone number must be 10 numeric");
    return false; 
  } 
  else if (!(pn.match(phoneno)))
  {
	  alert ("phone number format not match ")
	  return false;
  }
 
 else if (em == "") {
alert("Email must be filled out");
    return false;
  }
   else if (!(em.match(emailformat)))
	{
   alert("You have entered an invalid email address!")
    return false;
	}
  
   else if (vl == "")
	   {
alert("Vehicle Make must be filled out");
    return false;
  }
   else if (md == "") {
alert("Model must be filled out");
    return false;
  }
   else if (yr == "") {
alert("Year must be filled out");
    return false;
   }
  
  else if (!(yr.match(yearformat)))
  {
	  alert("Year format is not matched");
		return false;
  }
  else if (km == "") {
alert("Kilometer Driven must be filled out");
    return false;
  }
 
}

