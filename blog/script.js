function clear_inputs(){
    inputs=document.getElementsByClassName('inputs')
    for(input of inputs){
    	input.value=' ' ///this emptys the inputs
    }
    alert("text cleared");
  }


function validateForm(e) {
    var x = document.forms["blogform"]["title"].value;
    var y = document.forms["blogform"]["textspace"].value;
   
    if (x == "") {
      document.getElementById("title").style.border =  "2px solid red";
      
 
      alert("Title is required.");
     
      return false;
    }
    if (y == "") {
        document.getElementById("textspace").style.border =  "2px solid red";
        alert("Text is requried");
       
        return false;
        
      }
      e.preventDefault();
  }
  