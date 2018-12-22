@extends('layouts.app')
@section('title','Halaman pengguna');
@section('content')
<form action="{{url('auth/report')}}" method="post" enctype="multipart/form-data">
        <center>
            <div class="form">
                <h2>FORM PENGADUAN</h2>
                <table>

                    <tr class="baris1">
                        <th>Nama lengkap</th>
                        <td>
                            <input type="text" name="nama" autocomplete="off" class="inputreport">
                        </td>
                    </tr>

                    <tr class="baris2">
                        <th>Nomor KTP</th>
                        <td><input type="text" name="ktp" autocomplete="off" class="inputreport"></td>
                    </tr>

                    <tr class="baris3">
                        <th>Nama produk</th>
                        <td>
                            <input type="text" name="nampro" autocomplete="off" class="inputreport">
                        </td>
                    </tr>

                    <tr class="baris4">
                        <th>Foto produk</th>
                        <td>
                            <?php echo "<input type='file' name='userfile' size='20' />"; ?>
                        </td>
                    </tr>

                    <tr class="baris5">
                        <th>Alamat kejadian</th>
                        <td>
                            <textarea name="alamat" autocomplete="off" class="inputreport"></textarea>
                        </td>
                    </tr>
                    
                    <tr class="baris6">
                        <th>Tanggal kejadian</th>
                        <td><input type="date" name="tgl" class="inputreport" min="2018-01-01"></td>
                    </tr>
                    
                    <tr class="baris7">
                        <th>Harga</th>
                        <td>
                            <input type="text" name="harga" class="inputreport" autocomplete="off" min="0" max="1000000000" placeholder="Rp.">
                        </td>
                    </tr>

                    <tr class="baris8">
                        <th>Keterangan</th>
                        <td>
                            <textarea name="ket" class="inputreport"></textarea>
                        </td>
                    </tr>
                </table>
                <div>
                    <center>
                        <input type="submit" name="submit" value="Upload" class="submit">
                    </center>
                </div>
            </div>
        </center>
    </form>
@endsection
