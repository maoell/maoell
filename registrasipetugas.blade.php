<!DOCTYPE HTML>
<html>
    <head>
        <title>Daftarpetugas</title>
        <link rel="stylesheet" href="maul/css/bootstrap.min.css">
    </head>
    <style>
{
    margin: 0;
    padding: 0;
    outline: 0;
  }
  .body{
    height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-image: url("img/maul.jpg");
  }
  
  .daftar{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
  
    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
  }
  .daftar h1{
    text-align: center;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid#29d4ff;
    font-style:oblique
  }
  .daftar label{
    text-align: left;
    color: #90caf9;
  }
  .daftar form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #29d4ff;
    color: #fff;
    font-size: 20px;
  }
  .daftar form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#29d4ff;
    font-size: 18px;
    color: #fafafa;
  }

}


    </style>
    <body>
        <div class="daftar">
          <h1>daftar</h1>

            <form method="POST" action="registrasipetugas"> 
                @method("POST")
                @csrf
                <input name="tujuan" type="hidden" value="Daftar" >
                <div class="Daftar">
               

                <label>Id Petugas</label>
                <br>
                <input name="id_petugas" type="text" required >
                <br>
                <label>Nama</label>
                <br>
                <input name="nama_petugas" type="text" required >
                <br>
                <label>Username</label>
                <br>
                <input name="username" type="text" required >
                <br>
                <label>No Telp</label>
                <br>
                <input name="telp" type="text" required >
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password" required >
                <br>
                <label>level</label>
                <br>
                <input name="level" type="text" required >
                <br>

                <button type="submit">Daftar</button>
                          