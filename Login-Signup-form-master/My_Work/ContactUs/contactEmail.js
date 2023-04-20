function sendMail() {
  // alert("hi")
  var params = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    message: document.getElementById("message").value,
  };
  
  const serviceID = "service_3nvh0mc";
  const templateID = "template_kexnwfq";
  
  emailjs.send(serviceID, templateID, params)
  .then(res=>{
        // alert("hi")
          document.getElementById("name").value = "";
          document.getElementById("email").value = "";
          document.getElementById("message").value = "";
          console.log(res);
          alert("Your message sent successfully!!")
  
      })
      .catch(err=>console.log(err));
  
  }
  