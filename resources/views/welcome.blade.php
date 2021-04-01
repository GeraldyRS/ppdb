<!DOCTYPE html>
<html>
    <head>
        <title>Data Siswa</title>
    </head>
    <body>
        <a href="/formcreate"><button>Create Data</button></a>
        <table border="1">
        <tr>
            <td>NIS</td>
            <td>Nama Siswa</td>
            <td>Jenis kelamin</td>
            <td>Tempat lahir</td>
            <td>Tanggal lahir</td>
            <td>Alamat</td>
            <td>Asal sekolah</td>
            <td>Kelas</td>
            <td>Jurusan</td>
            <td>opsi</td>
        </tr>
            @foreach($data as $datas)
        <tr>
            <td>{{$datas->nis}}</td>
            <td>{{$datas->nama}}</td>
            <td>{{$datas->jk}}</td>
            <td>{{$datas->tempat_lahir}}</td>
            <td>{{$datas->tgl_lahir}}</td>
            <td>{{$datas->alamat}}</td>
            <td>{{$datas->asal}}</td>
            <td>{{$datas->kelas}}</td>
            <td>{{$datas->jurusan}}</td>
            <td>
                <a href="/formedit/{{$datas->id}}"><button>Edit</button></a>
                <a href="/delete/{{$datas->id}}"><button>Hapus</button></a>
            </td>
        </tr>
            @endforeach
    </table>

    </body>
</html>
