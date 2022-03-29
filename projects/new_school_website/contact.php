
<style>
   .code-red{
     background-color: red;
     color: #fff;
     padding: 6px 20px;
     text-align: center;
   }

   a{
     text-decoration: none;
     color: white;
     background-color: #00f;
     padding: 6px 20px;
     border-radius:10px;
   }

   .code-green{
     background-color: green;
     color: #fff;
      padding: 6px 20px;
      text-align: center;
         border-radius:10px;
   }

</style>


<?php
$to = "snm.tmg7@gmail.com";
$name = $_POST["name"];
$subject = $_POST["subject"];
$email=$_POST["email"];
$msg=$_POST["msg"];
$sendMessage = "$name sent message to Mahendra School, the message is: $msg";
$headers = "From:" . $email;
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

 function domain_exists($email, $record = 'MX'){
            list($user, $domain) = explode('@', $email);
            return checkdnsrr($domain, $record);
        }

        
 if(domain_exists($email)) {

            if (empty($name) || $name==' ') {
              echo " <div> <a href='index.html'>Go back</a>  <h1 class='code-red'>Name can not be empty</h1>  </div>";
                      return;
            } 
            else if(empty($msg) || empty($subject) ||  $subject==' ' || $msg==' '){
              echo " <div> <a href='index.html'>Go back</a>  <h1 class='code-red'>Message or Subject is empty</h1>  </div>";
                      return;
            }
          else if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            echo " <div> <a href='index.html'>Go back</a>  <h1 class='code-red'>Name should be Only letters and white space</h1>  </div>";
            return;
            }

            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              echo " <div> <a href='index.html'>Go back</a>  <h1 class='code-red'>Invalid Email format </h1>  </div>";
              return;
            }

            else if($to==$email){
              echo " <div> <a href='index.html'>Go back</a>  <h1 class='code-red'>Invalid email sender and receiver address is same</h1>  </div>";
              return;
            }

            else if(mail($to,$subject,$sendMessage,$headers)){
                echo " <div> <a href='index.html'>Go back</a>  <h1 class='code-green'>E-mail sent successfully </h1>  </div>";
                return;
            }else{
              echo " <div> <a href='index.html'>Go back</a>  <h1 class='code-red'>Failed to send E-mail</h1>  </div>";
              return;
            }
    }


else {
      echo " <div> <a href='index.html'>Go back</a>  <h1 class='code-red'>Invalid email address<h1>  </div>";
   return;
  }


?>

