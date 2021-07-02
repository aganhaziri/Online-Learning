function validate(){
    var name = document.getElementById("name").value;
    var subject = document.getElementById("subject").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    
    error_message.style.padding = "10px";
    
    var text;
    if(name.length < 5){
      text = "Ju lutem shkruani një emër valid!";
      error_message.innerHTML = text;
      return false;
    }
    if(subject.length < 10){
      text = "Ju lutem shkruani një subjekt valid!";
      error_message.innerHTML = text;
      return false;
    }
    if(isNaN(phone) || phone.length != 10){
      text = "Ju lutem shkruani një numër telefoni valid!";
      error_message.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "Ju lutem shkruani një email valid!";
      error_message.innerHTML = text;
      return false;
    }
    if(message.length <= 10){
      text = "Ju lutem shkruani një mesazh me të paktën 140 karaktere!";
      error_message.innerHTML = text;
      return false;
    }
    alert("Mesazhi juaj është pranuar, ju do të kontaktoheni së shpejti!");
    return true;
  }