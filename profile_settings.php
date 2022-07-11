<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >                    
    <!-- <divnk href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/divbs/socket.io/3.0.3/socket.io.js"></script> -->
    <!-- <divnk href="https://cdn.jsdedivvr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJdivm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <divnk rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/divbs/font-awesome/6.1.1/css/all.min.css" >     -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">  

        </head>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  
  </script>  
  <body>
   <!-- <img src="https://wallpaperaccess.com/full/731608.jpg" width="400"> -->
   <div class="main-back">
   <div class="prof-container">
      <div class="img-border" style="border: 5px solid rgb(255 255 255);border-radius: 60px;">
   <img src="test.jpg" width="100" height="100" style="border-radius: 60px;">
</div>
<h4 class="name">john Doe</h4>
   </div>
   </div>
<div class="tile-items">
<div class="tiles"><i class="fa fa-user"></i><input tyoe="text" id="name" placeholder="Name" name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" ></div>
<div class="tiles"><i class="fa fa-envelope"></i><input tyoe="email" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"></div>
<div class="tiles"><i class="fa fa-phone"></i><input tyoe="tel" id="phone" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"></div>
<div class="tiles"><i class='far fa-address-card'></i><textarea id="address" class="address" row='10' placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'"></textarea></div>
</div>
<div class="button-submit"><button type="button" style="background-color: rgb(4 34 49);" class="btn btn-primary">Primary</button></div>
<style>


.button-submit{
   width: 100%;    
    align-items: center;
    display: block;
    text-align: center;
    padding-top: 50px;
}

   .tile-name{      
    padding-top: 30px;
      width:50%; 
   }
      
      .tiles{      
         display: flex;    
    justify-content: space-evenly;
    font-size: 20px;
    font-weight: 600;
    align-items: flex-end;   
    padding-top: 20px;
   }
   .tiles .address{
      border: none;    
      font-size: 15px;
    width: 75%;
    background-color: rgb(4 34 48 / 9%);
   }
   .tiles .address:focus-visible{
      outline: none;        
    width: 75%;
    font-size: 15px;
   }
   
.tiles input{
   border: none;
   font-size: 15px;
    padding-top: 20px;
    border-bottom: 2px solid rgb(160 184 193);
    width: 75%;
}
input:focus-visible{
   font-size: 15px;
   outline: none;
    padding-top: 20px;
    border-bottom: 2px solid rgb(160 184 193);
    width: 75%;
}
.tiles i {
    font-size: 27px;
    color: rgb(4 34 49);
}

   .main-back{
      background: url('https://wallpaperaccess.com/full/731608.jpg');
      height: 270px;
   }
   
   .name{
      color: rgb(255 255 255);
   }
   
   .prof-container{width: 100%;height: 100%;display: inline-grid;padding: 50px;align-items: center;justify-content: center;};
   

   </style>
  </body>