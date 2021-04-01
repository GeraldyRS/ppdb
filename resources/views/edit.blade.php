<!DOCTYPE html>
<html>
    <head>
    	<title>edit</title>
    </head>
    <body>
    	<form action="/edit" method="post">
    		{{ csrf_field()}}
        <input type="hidden" name="id" value="{{$data->id}}">
    	<label>NIS</label>
    	<input type="text" name="nis" value="{{$data->nis}}"><br>
    	<label>Nama siswa</label>
    	<input type="text" name="nama" value="{{$data->nama}}">	<br>
    	<label>Jenis kelamin</label>
    	<select name="jk">
    		<option value="Laki-laki" @if($data->jk == 'Laki-laki') selected @endif >Laki-laki</option>
    		<option value="Perempuan" @if($data->jk == 'Perempuan') selected @endif >Perempuan</option>
    	</select><br>
    	<label>Tempat lahir</label>
    	<input type="text" name="tempat_lahir" value="{{$data->tempat_lahir}}"><br>
    	<label>Tanggal lahir</label>
    	<input type="text" name="tgl_lahir" value="{{$data->tgl_lahir}}"><br>
    	<label>Alamat</label>
    	<input type="text" name="alamat" value="{{$data->alamat}}"><br>
    	<label>Asal sekolah</label>
    	<input type="text" name="asal" value="{{$data->asal}}"><br>
    	<label>Kelas</label>
    	<select name="kelas">
    		<option value="X" @if($data->kelas == 'X') selected @endif >X</option>
    		<option value="XI" @if($data->kelas == 'XI') selected @endif >XI</option>
    		<option value="XII" @if($data->kelas == 'XII') selected @endif >XII</option>
    	</select><br>
    	<label>Jurusan</label>
    	<input type="text" name="jurusan" value="{{$data->jurusan}}"> <br>
    	<button type="submit">Submit</button>
    	</form>
    </body>
</html>
