<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Input Data</h1>
        <form role="form" action="/" method="post" enctype="multipart/from-data">
        @csrf
        @method('POST')
          <label for="name">Nama:</label><br>
          <input type="text" id="name" name="name"><br>
          <label for="almt">Alamat:</label><br>
          <input type="text" id="almt" name="almt">
        <br>
        <br>
          <input type="submit" value="Submit">
          <br>
          <br>
        </form>
        <a href="/"><input type="submit" value="Kembali"></a>
</body>
</html>