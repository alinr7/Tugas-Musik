<!DOCTYPE html>
<html>
<head>
    <style>
        div.gallery {
          margin: 5px 20px;
          border: 1px solid #ccc;
          float: left;
          width: 180px;
          margin-top:14vh;
        }
        
        div.gallery:hover {
          border: 1px solid #777;
        }
        
        div.gallery img {
          width: 100%;
          height: auto;
        }
        
        div.desc {
          padding: 15px;
          text-align: center;
        }

        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        nav {
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
        nav ul li a:hover {
            color: #262626;
        }
        body{
    background: -webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a18cd1));
    background: -webkit-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
    background: -moz-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
    background: -o-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
    background: linear-gradient(to top, #fbc2eb 0%, #a18cd1 100%);
    
}
.button2 {
  background-color: #4CAF50; /* Hijau */
  border: none;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 50px;
  margin: 1px 2px;
  cursor: pointer;
  border-radius: 50%;
}
a{
    text-decoration: none;
    color: black;
}

button[type="submit"]{
  border: none;
  
}

.button1{
    float: right;
    margin-top: 35em;
    margin-right: 6vh;
}
        </style>
        </head>
        <body>

          <nav>
            <div class="brand">
                <h2>Listen</h2>
            </div>
            <ul>
                <li><a href="/home">Music</a></li>
                <li><form method="POST" action="{{ route('logout') }}">
                  @csrf
                      <button type="submit" onclick > <a style="color:#262626; font-size: 17px;">Logout</a>  </button>               
                </li>
            </ul>
            </nav>
            <section class="sec1">

        @foreach ($musik as $item)
        <div class="gallery">
            <a href="detail/{{$item->id}}">
            <img src="{{asset('storage/'.$item->image)}}">
          </a>
          <div class="desc"><span>{{$item->nama_musisi}}</span><br> {{$item->judul_musik}}</div>
        </div>
         @endforeach
</section>
@if(auth()->user()->category=='admin')
<div class="button1">
<button class="button2"><a href="/add">+</a></button></div>
@endif
</html>

