const express=require('express')
const app=express()
var nodemailer = require('nodemailer');
var bodyParser = require('body-parser');
var cors = require('cors');
app.use(bodyParser.json())
// var getDetails=require('../../dataTransfer')

app.use(cors({
  origin:"*",
  methods:["POST"]
}))
app.post("/mail", async (req, res, next) => {
    console.log(req.body)
    let {email,subject, message} = req.body;
    var transporter = nodemailer.createTransport({
      host: "smtp.gmail.com",
      service: 'gmail',
      port: 587,
      secure: false,
      requireTLS: true,
      auth: {
        user: 'vedantkhamar975@gmail.com',
        pass: 'zekbvnbbxenwboyo'
      }
    });

    var mail = {
      from: "vedantkhamar975@gmail.com", // sender address
      to: req.body.email.toString(), // list of receivers (THIS COULD BE A DIFFERENT ADDRESS or ADDRESSES SEPARATED BY COMMAS)
      subject: "Your Favourite Movies is now on Screen", // Subject line
      html:`<h1>Hello ${req.body.email.toString()}</h1><br>
      <h2>Your Favourite Movies <b style="color:red">${req.body.name.toString()}</b> is now available</h2><br>
      <h2><a href="http://localhost/Sem6_project/Login-Signup-form-master/My_Work/index.php">Click To Check</a></h2>`
    };
  
    // send mail with defined transport object
    transporter.sendMail(mail, function (err, info) {
      if(err) {
        res.json({success: false, error: err});
      }
      else {
        res.json({success: true, message: "Message sent"});
      }
    });
})
app.listen(3000,()=>{
    console.log("sever is running")
})