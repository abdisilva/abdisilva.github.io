<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
<title>Unsubscribe me</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" />
<script src="https://unpkg.com/libphonenumber-js/bundle/libphonenumber-js.min.js"></script>
<style>
      :root {
        font-size: 22px;
      }
      body{
        /*background-color: rgb(42,167,210);
        */font-family: Arial, Helvetica, sans-serif;
        font-size: calc(12px + 0.35vw);
        line-height: calc(12px + 1.05vw);
      }
      .container {
        width: 100%;
        max-width: 1140px;
        margin: auto;
      }
      h1 {
        font-size: 1.912em;
        line-height: calc(18px + 1.8vw);
      }
      h2 {
        font-size: 1.616em;
        line-height: calc(18px + 1vw);
      }
      h3 {
        font-size: 1.471em;
        line-height: calc(18px + 0.7vw);
      }
      h4 {
        font-size: 1.3em;
      }
      h5 {
        font-size: 1.243em;
      }
      h6 {
        font-size: 1.132em;
      }
      h4, h5, h6 {
        line-height: calc(18px + 0.2vw);
      }
      h1, h2, h3, h4, h5, h6 {
        margin: calc(12px + 1.05vw) 0;
      }
      .d-flex.masthead {
/*        background-color: rgb(42,167,210);
*/      }
    </style>
</head>
<body id="page-top">
<header class="d-flex masthead pt-0 pb-0">
<div class="container my-auto text-center">
<h2 class="mb-3"><br/><u>We Take Spam Seriously</u></h2>
<h6 class="mb-5">
<small>
In the context of electronic messaging, spam refers to unsolicited, bulk, or indiscriminate messages typically sent for a commercial
purpose. </br></br> We provide a facility that enables users to send email messages / private messages to others. Users must not use this facility to send unsolicited, bulk, or
indiscriminate messages, whether or not for commercial purposes. </br> </br> Receipt of unwanted messages from our company: In the unlikely event that you receive any
message from us or sent using our systems that may be considered to be spam, please contact us by using the details below and the matter will be investigated.</br>
</small>
</h6>
<h6 class="mb-5">
<small>
If you got an unsolicited marketing email or text<br/>enter your
email address or phone number below and click <br/>"Remove Me" to be
added to our "DO NOT CONTACT" file.
</small>
</h6>
<form action method="post" name="form" id="form">
<div>
<label class="l-email mr-2">e-mail</label>
<input id="email" name="email" type="email" class="input-email" placeholder="me@email.com" />
<h5 class="mt-0 mb-2">or/and</h5>
<label class="l-phone mr-2">phone</label>
<input id="phone" name="phone" type="number" class="input-phone" placeholder="555 555 5555" />
</div>
<br/>
<a class="btn btn-warning btn-l js-scroll-trigger mt-1" role="button" type="submit" onclick="submit();">
Remove Me
</a>
</form>
<div class="overlay"></div>
</div>
</header>
<script>
      function isValidNumber(number) {
					try {
						var isValid = new libphonenumber.parsePhoneNumber(number).isValid();
					} catch (error) {
						console.error(error);
            return false;
					}
        return isValid;
      }
      function isValidEmail(email) {
          const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(String(email).toLowerCase());
      }           
      function submit() {
        var phone = document.getElementById('phone').value;
        var email = document.getElementById('email').value;
        var submit = true;
        var message = 'Warning!';
        if(email != ''){
          if(isValidEmail(email)){
          } else {
            message = message + '\n- Invalid e-mail address';
            submit = false;
          }
        }
        // if(phone != ''){
        //   if(isValidNumber(phone)){
        //   } else {
        //     message = message + '\n- Invalid phone number';
        //     submit = false;
        //   }
        // }
        if(submit){
          // Submit form  
          document.getElementById('form').submit();
        } else {
          alert(message);
        }
      }    
    </script>
</body>
</html>
