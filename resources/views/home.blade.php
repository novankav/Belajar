<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello World!</h1>
	<br><br>
	<a href="data/create"><input type="submit" value="Buat Data"></a>


	<h1>Halaman Output Novanka</h1>
    <h1>Halaman Output SAYA</h1>
<<<<<<< HEAD
    <h1>Halaman Output SAYA Novanka </h1>
=======
    <h1>Halaman Output SAYA YUSUF WIJAYA</h1>
>>>>>>> 563c20d27c31dfc7eaad682b98f0127c21edf123

	<table border="1">
		@forelse($postdata as $key => $post)
  <tr>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>{{$post->name}}</td>
    <td>{{$post->alamat}}</td>
    <td>
    	<a href="data/{{$post->id}}"><input type="submit" value="Show"></a>
    	<a href="data/{{$post->id}}/edit"><input type="submit" value="Edit"></a>
    	<form action="data/{{$post->id}}" method="post">
    	@csrf
    	@method('DELETE')
    	<input type="submit" value="Delete">
    	</form>

    </td>
  </tr>
  @empty
  <tr><td colspan="9", align="center" >Tidak Ada Data</td></tr>
  @endforelse
</table>
</body>
</html>
