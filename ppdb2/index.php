<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendafataran</title>
    <link rel="stylesheet" href="../tailwind.css">
</head>
<body class="bg-green-600">

<div class="items-center justify-center flex">
    <div class="max-w-md w-full h-screen flex items-center justify-center">
            <section>
                <div class="bg-white shadow-xl p-10">
                    <form action="">
                        <div>
                            <h3   h3 class="">Data Dari Calon Peserta</h3>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td>
                                        <input class="border border-blue-500" type="text" name="Name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>:</td>
                                    <td>
                                        <input class="border border-blue-500" type="text" name="tmpt_lahir">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>
                                        <input class="border border-blue-500" type="date" name="tgl_lahir">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <input class="rounded-full bg-white border border-blue-500 focus:bg-red-500" type="checkbox" name="jk" value="Laki-laki">&nbsp;Laki-laki
                                        &nbsp;&nbsp;
                                        <input class="rounded-full bg-white border border-blue-500 focus:bg-red-500" type="checkbox" name="jk" value="perempuan">&nbsp;Perempuan
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td>
                                    <td>:</td>
                                    <td>
                                        <select class="border border-blue-500">
                                            <option value="">--Pilih--</option>
                                            <option value="rpl">Rekayasa Perangkat Lunak</option>
                                            <option value="tbsm">Teknik Bisnis Sepeda Motor</option>
                                            <option value="tkro">Teknik Kendaraan Ringan Otomotif</option>
                                            <option value="ap">Administrasi Perkantoran</option>
                                        </select>  
                                    </td>  
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td>
                                        <select class="border border-blue-500">
                                            <option value="">--Pilih--</option>
                                            <option value="islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                        </select>  
                                    </td>  
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>
                                        <textarea class="border border-blue-500 px-3 py-1" name="alamat"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="">
                                        <button class="bg-blue-500 rounded-full text-white px-14 py-1 text-sm hover:bg-blue-900" type="submit" name="daftar">Daftar</button>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </section>
    </div>
</div>
    

</body>
</html>