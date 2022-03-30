<!DOCTYPE html>
<html>
<head>
<style>

body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        nav{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 70px;
            background: rgba(102, 101, 101, 0.6);
            padding: 0 100px;
            box-sizing: border-box;
        }
        nav .brand{
            float: left;
            height: 100%;
        }
        nav .brand{
            margin: 0;
            padding: 0;
            color: #fff;
        }
        nav ul{
            float: right;
            display: flex;
            margin: 0;
            padding: 0;
        }
        nav ul li{
            list-style: none;
        }
        nav ul li a{
            position: relative;
            display: block;
            height: 70px;
            line-height: 70px;
            padding: 0 20px;
            box-sizing: border-box;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            transition: .5s;
        }
        nav ul li a:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            transform-origin: right;
            z-index: -1;
            transform: scaleX(0);
            transition: transform .5s;
        }
        nav ul li a:hover:before{
            transform-origin: left;
            transform: scaleX(1);
        }
        nav ul li a:hover{
            color: #262626;
        }

.head{
    margin-bottom: 250px;
    display: block;
}

.image{
    margin-top: -270px;
}

.container{
  margin-left:100px;
}

.box{
    margin-right: 100px;
}

button{
    border: none;
    padding: 12px 20px;
    background-color: red;
    border-radius: 20px;
    color: whitesmoke;
    padding: 13px 20px;
}

button[type='submit']:hover{
    background-color: white;
    color: black; 
}

.login:hover{
    background-color: white;
    color: black; 
}

.sec1{
  background: url(https://w0.peakpx.com/wallpaper/36/285/HD-wallpaper-colorful-headphone-in-black-background-music.jpg);
  width: 100%;
  height: 100vh;
  display: inline-block;
  background-size: cover;
}

a{
  text-decoration: none;
  color: black;
  text-transform: uppercase;
}

</style>
</head>
<body>

  <nav>
    <div class="brand">
        <h2>Listen</h2>
    </div>
    <ul>
        <li><a href="/dash">Home</a></li>
        <li><a href="/home">Music</a></li>
    </ul>
    </nav>
    <section class="sec1">


<div class="container" >
<div class="head"></div>
<h1 style="font-size: 60px; ; color: rgb(255, 255, 255);" ">Listen Music <br> Enjoy </h1>
<h3 style="font-size: 20px; color:rgb(219, 212, 212);">Chill and Relax</h3>
<div class="get-button"></div>
<div class="button">
<button type="submit" class="login" style="background-color: orange"><a href="/login">Login</a></button>
<button type="submit"><a href="/register">register</a></button></div>
</div></div>
</section>
</body>
</html>


