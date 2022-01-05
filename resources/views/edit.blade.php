<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Edit Data</h1>
        <form role="form" action="/data/{{$postdata->id}}" method="post" enctype="multipart/from-data">
          @csrf
          @method('PUT')
          <label for="name">Nama:</label><br>
          <input type="text" id="name" name="name" value="{{$postdata->name}}"><br>
          <label for="almt">Alamat:</label><br>
          <input type="text" id="almt" name="almt" value="{{$postdata->alamat}}">
        <br>
        <br>
          <input type="submit" value="Update" >
        </form>
        <br><br>
        <a href="/"><input type="submit" value="Kembali"></a>
</body>
</html>