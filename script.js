function displayDate() {
    document.getElementById("demo").innerHTML = Date();
  }
  
  
  function bigImg(x) {
    x.style.height = "450px";
    x.style.width = "450px";
  }
  
  function normalImg(x) {
    x.style.height = "250px";
    x.style.width = "250px";
  }
  var counter = 5; 
  function countDown(){       
      if(counter>=0){
          document.getElementById("timer").innerHTML = counter;
      }
      else{ 
          download(); 
          return; 
        }
      counter -= 1; 
      var counter2 = setTimeout("countDown()",1000); 
      return; 
    } 
     
  function download(){ 
      document.getElementById("link").innerHTML = "<a href="contact.html"></a>";
  } 

  