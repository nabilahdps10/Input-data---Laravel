<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form  action="/home/create" method="post">
      {{ csrf_field() }}
        <span>Judul Buku</span><br><br>
        <input type="text" name="judul" required="required"> <br/>
        <br>
        <span>Penerbit</span><br><br>
        <input type="text" name="penerbit" required="required"> <br/>
        <br>
        <span>Tahun Penerbit</span><br><br>
        <input type="text" name="tahun_terbit" required="required"> <br/>
        <br>
        <span>Pengarang</span><br><br>
        <input type="text" name="pengarang" required="required"> <br/>
        <input type="submit" value="simpan data" style="margin-top: 30px;width: 10%;">
    </form>
</body>
</html>
