<?php
  include 'navbar.php';
  ?></header>
<main>
  <style>
  body{
    background-image: url(https://i.pinimg.com/originals/6d/45/ac/6d45ac7acfaa5dc784d19dbd9c81b807.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    width: 100%;
    background-size: cover;
    background-position: cover;

  
  }
  ul{
    float:left;
    list-style-type: none;
    margin-top: 25px;
  }
  ul li{
    display:inline-block;
  }
  ul li a{
    text-decoration: none;
    color: #fff;
    padding:5px 20px;
    border:1px solid transparent;
    transition: 0.6s ease;
  }
  ul li a:hover{
    background-color:#fff;
    color:#000;
  }
  .main{
    max-width:1200px;
    margin:auto;  
  }
  ul li.active a{
    background-color: #fff;
    color:#000;
  }
.title{
    position: absolute;
    top:25%;
    left:50%;
    transform:translate(-50%,-50%);
  }
  .title h1{
    color:#fff;
    font-size:70px;
  }

.button{
  position:absolute;
  top:30%;
  left:48%;
  transform:translate(-50%,-50%); 
}
.btn{
  
  padding:10px 10px;
  color:black;
  text-decoration: none;
}

</style>
<div class="button">
  <a href="#" class= "btn"> WELCOME TO SPARKS BANK !!</a>
  <a href="#" class= "btn"> SAFE AND SECURE</a>

</div>
   </main>
  </body>
</html>