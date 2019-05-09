<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    @foreach($posts as $p)
  <form action="/update" method="post">
    {{ csrf_field() }}
    <span>Judul Buku</span><br><br>
    <input type="text" name="judul" required="required" value="{{ $p ->judul }}"> <br/>
    <br>
    <span>Penerbit</span><br><br>
    <input type="text" name="penerbit" required="required" value="{{ $p ->penerbit }}"> <br/>
    <br>
    <span>Tahun Terbit</span><br><br>
    <input type="text" name="tahun_terbit" required="required" value="{{ $p ->tahun_terbit }}"> <br/>
    <br>
    <span>Pengarang</span> <br><br>
    <input type="text" name="pengarang" required="required" value="{{ $p ->pengarang }}"> <br/>
    <input type="submit" value="Simpan Data" style="margin-top: 30px;width:280px;">
  </form>
  @endforeach
  
    </body>
</html>
