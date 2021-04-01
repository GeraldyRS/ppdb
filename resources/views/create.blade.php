<!DOCTYPE html>
<html>
    <head>
    	<title>create</title>
    </head>
    <body>
    	<form action="/create" method="post">
    		{{ csrf_field()}}
    	<label>NIS</label>
    	<input type="text" name="nis"><br>
    	<label>Nama siswa</label>
    	<input type="text" name="nama">	<br>
    	<label>Jenis kelamin</label>
    	<select name="jk">
    		<option value="Laki-laki">Laki-laki</option>
    		<option value="Perempuan">Perempuan</option>
    	</select><br>
    	<label>Tempat lahir</label>
    	<input type="text" name="tempat_lahir"><br>
    	<label>Tanggal lahir</label>
    	<input type="text" name="tgl_lahir"><br>
    	<label>Alamat</label>
    	<input type="text" name="alamat"><br>
    	<label>Asal sekolah</label>
    	<input type="text" name="asal"><br>
    	<label>Kelas</label>
    	<select name="kelas">
    		<option value="X">X</option>
    		<option value="XI">XI</option>
    		<option value="XII">XII</option>
    	</select><br>
    	<label>Jurusan</label>
    	<input type="text" name="jurusan"> <br>
    	<button type="submit">Submit</button>
    	</form>
    </body>
</html>
