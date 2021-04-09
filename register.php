<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div">
        <form  method="get">
            <label for="login">Username</label>
            <input type="text" id="fname" name="fname" ><br><br>
            <label for="password" >Password</label>
            <input  id="lname" type="password" name="lname"><br><br>
            <button onclick="myFunction()">login</button>
            <a href="https://instagram.com/" id="a"></a>

          </form>
          

          
    </div>
    <h1 id="demo"></h1>
    <script> 
      function myFunction(){
var x = document.getElementById('fname').value
var b = document.getElementById('lname').value
var form = document.querySelector('form')

document.getElementById("demo").innerHTML = x;



if (x == "akylbek" , b == "12345"){
    form.setAttribute("action", "https://instagram.com/")

}else{
    alert("permission denied")
}

}
    </script>
</body>
</html> -->


<!DOCTYPE html>
<html>
    <head>
        <tittle></tittle>
    </head>
    <style>body {
    min-height:100%;
    background-color: #263238;
}

.text-center{
  text-align: center;
}

.space-bot{
  margin-bottom: 35px;
}

.space-top{
  margin-top: 35px;
}

/* Title */

h1 {
    color: white;
    font-family: 'Roboto';
    text-transform: uppercase;
    font-weight: 900;
    font-size: 25px;
    text-align: center;
}

/* Sign Up */

.container {
    max-width: 400px;
    max-height: 100px;
    margin-top: 10px;
}

.alert-danger{
	text-align: center;
}

.signup-screen {
	  padding: 20px;
    padding-bottom: 40px;
    border-radius: 5px;
    background-color: #2c3940;
    box-shadow: 0 1px 6px rgba(0,0,0,.3);
    color: white;
}

.btn{
  border-radius: 2px;
}

.cancel{
  background-color: #df405a;
}

.done{
  background-color: #5CAB7D;
}

.done:hover{
  background-color: #6dc793;
}

.done:focus{
  background-color: #6dc793;
}

.cancel:hover{
  background-color: #f0435f;
}

.cancel:focus{
  background-color: #f0435f;
}

.input-group {
    width:100%;
}

.input-group .ng-invalid {
    border: 2px solid #e74c3c;
    border-radius: 3px;
}

/* Error Box */

.alert{
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 2px;
  border-color: #e85a71;
  background-color:  #e85a71;
  color: white;
  
}

.help-block {
    font-size: 12px;
    color: white
}</style>
<body ng-controller="RegisterCtrl" ng-app="myApp">
 <div class="container">
   <div id="signup">
      <div class="signup-screen">
         <div class="space-bot text-center">
            <h1>Sign up</h1>
           <div class="divider"></div>
         </div>
           <form class="form-register" method="post" name="register" novalidate>
	            <div class="input-field col s6">
              <input id="first-name" type="text" class="validate" required>
              <label for="first-name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last-name" type="text" class="validate" required>
              <label for="last-name">Last Name</label>
             </div>
             <div class="input-field col s6">
              <input id="email" type="email" name="email" ng-model="email" class="validate" required>
              <label for="email">Email</label>
             </div>
             <p class="alert alert-danger" ng-show="form-register.email.$error.email">Your email is invalid.</p>
             <div class="input-field col s6">
               <input id="password" type="password" name="password" ng-model="password" ng-minlength='6' class="validate" required>
               <label for="password">Password</label>
              </div>
              <p class="alert alert-danger" ng-show="form-register.password.$error.minlength || form.password.$invalid">Your password must be at least 6 characters.</p>
              <div class="space-top text-center">
               <button ng-disabled="form-register.$invalid" class="waves-effect waves-light btn done">
               <i class="material-icons left">done</i> Done
               </button>
               <button type="button" class="waves-effect waves-light btn cancel">
               <i class="material-icons left">clear</i>Cancel
               </button>
              </div>
             </form>
           </div>
        </div>
    </div>
    <script>
    var myApp = angular.module("myApp", []);
myApp.controller("RegisterCtrl", function ($scope) {

});
    </script>
</body>
</html>
