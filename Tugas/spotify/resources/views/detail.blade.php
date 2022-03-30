<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background: -webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a18cd1));
    background: -webkit-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
    background: -moz-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
    background: -o-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
    background: linear-gradient(to top, #fbc2eb 0%, #a18cd1 100%);
    
}
.form{
    margin-top: 50px;
    margin-left: 400px;
    margin-right: 450px;
    padding: 10px;
    background: linear-gradient(156deg, rgba(159,165,213,1) 0%, rgba(232,245,200,1) 100%);
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border-radius: 10px;
}
h1{
    text-align: center;
    color: black;
}
table{
    padding:5px;
}
td{
    padding:10px;
    color: black;
}
a{
    text-decoration: none;
    color: whitesmoke;
}
button{
    border: none;
    padding: 7px 10px;
    background-color: red;
    border-radius: 20px;
    color: whitesmoke;
    padding: 13px 20px;
    margin-top: 7px;
    
}
button[type='submit']:hover{
    background-color: whitesmoke;
    color: black;
}
.button:hover{
    background-color: whitesmoke;
}
a:hover{
    color: black;
}
button[type='submit']{
    background-color:blue;
}

input[type="text"]{
    border: none;
    padding: 10px;
    padding-right: 30px;
    border-radius: 10px;
    border: 2px solid #6A5ACD;
}
textarea{
    border: none;
    padding: 10px;
    padding-right: 30px;
    border-radius: 10px;
    border: 2px solid #6A5ACD;
}
select{
    border: none;
    padding: 5px;
    border-radius: 10px;
    border: 2px solid #6A5ACD;
}
.button{
    margin-left: 10px;
}
a{
    text-decoration: none;
    color: #fff;
}
button{
        border: none;
        background-color: rgb(255, 0, 0);
        color: whitesmoke;
        padding: 10px 20px;
        border-radius: 20px;
        margin-left: 9px;
    }
    </style>
</head>  
<body>
    <div class="button1">
        @if(auth()->user()->category=='admin')
        <button style="background: yellow;"><a style="color: black" href="../edit/{{$musik->id}}">Edit</a></button>
        <form action='{{url("musik", $musik->id)}}' method="post">
            @csrf
            @method("delete")
        <button>Hapus</button></form>
        @endif
        <button style="background: rgb(194, 194, 194);"><a href="/home">Back</a></button>
    </div>
    <div class="form">
    <h1>Musik</h1><table align="center">
            <tr>
                <td align="center"><img src="{{asset('storage/'.$musik->image)}}" alt="" width="50%" height="auto"></td>
            </tr>
            <tr>
                <td align="center"><audio controls><source src="{{asset('storage/'.$musik->musik)}}" type="audio/mpeg"></audio></td>
            </tr>
            <tr>
                <td align="center"><textarea name="" id="" cols="30" rows="10" readonly>{{$musik->lirik_musik}}</textarea></td>
            </tr>
        </table>
    </form>
    </div>
</body>

