<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="ContactUs.css">
</head>
<body>
    <div class="container">
    <div class="Heading">
    <h1> CONTACT US</h1>
    <p> Feel Free To Contact Us</p>
    </div>
    <div class="ContactBox">
    <div class="MessageBox">
        <h3>Send your request</h3>
        <form action="processForm.php" method="post">
            <div class="UserInput">
            <div class="InputFeild">
               <label>Name</label>
               <input type="text"   name="name"  placeholder="Richard Kondowe"> 
            </div>
           <div class="InputFeild">
               <label>Email</label>
               <input type="email" name="email" placeholder="youremail@gmail.com"> 
            </div>
            </div>
            <div class="UserInput">
            <div class="InputFeild">
               <label>Phone Number</label>
               <input type="text"  name="phone"   placeholder="0994552352"> 
            </div>
            <div class="InputFeild">
               <label>Subject</label>
               <input type="text"   name="subject"  placeholder="Subject of the message"> 
            </div>
            </div>
            <label>Message</label>
            <textarea rows="10"  name="message" placeholder="Write your Message"></textarea>
            <button type="submit">SEND</button>
        </form>
    </div>
        <div class="ContactUs">
        <h3>Reach Us</h3>
        <table>
        <tr>
                <td>Email:</td>
                <td>richardkondowe8@gmail.com</td> 
            </tr>  
            <tr>
                <td>Phone Number:</td>
                <td>+265 984 486 922</td>

            </tr>
             
            <tr>
                <td>WhatsApp:</td>
                <td> +265 888 465 211</a></td> 
            </tr>  

        </table>
        </div>

    </div>
</div>
</body>
</html>    