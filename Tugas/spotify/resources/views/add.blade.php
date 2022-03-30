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
    margin-top: 100px;
    margin-left: 400px;
    margin-right: 450px;
    padding: 20px;
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
    </style>
</head>  
<body>
    <div class="form">
    <h1>Data Musik</h1><table align="center">
    <form action="{{ url("musik")}}" method="post" enctype="multipart/form-data">
        @csrf
            <tr>
                <td>Nama Musisi  :</td>
                <td><input type="text" name="nama_musisi" placeholder="Masukkan Nama Musisi" ></td>
            </tr>
            <tr>
                <td>Judul Lagu :</td>
                <td><input type="text" name="judul_musik" placeholder="Masukkan Judul Lagu" ></td>
            </tr>
            <tr>
                <td>Link Musik :</td>
                <td> <input type="file" name="musik" ></td>
            </tr>
            <tr>
                <td>Lirik Musik : </td>
                <td> <textarea name="lirik_musik" id="" cols="20" rows="2"></textarea></td>
            </tr>
            <tr>
                <td>Image : </td>
                <td> <input type="file" name="image" ></td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
                <td><button><a href="/home">Back</a></button></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>