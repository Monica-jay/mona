function ValidateEmail() 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(myForm.email.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}