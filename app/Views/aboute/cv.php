<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>CV</title>
</head>

<body>
    <div class="container-fluid p-1 bg-success">
        <div class="row d-flex justifay-content-center">
            <div class="col-lg-12 col-xs-8">
                <div class="text-center">
                    <img src="/assets/img/Nindi.jpeg" class="rounded-circle" alt="..." width="15%">
                    <h1 class="pt-2 "><?= $data['nama'] ?></h1>
                    <p>HI, saya adalah mahasiswi di program studi Manajemen Informatika,
                    jurusan Ekonomi dan Bisnis, Politeknik Negeri Lampung</p>
                </div>
            </div>
        </div>
    </div><div class="container">
        <div class="row">
            <div class="col-5">
                <h1>Riwayat Pendidikan</h1>
                <table class="table table-hover mx-auto ">
                    <tr>
                        <td>SDN 1 Pardawaras</td>
                        
                    </tr>
                    <br>
                    <tr>
                        <td>SMPN 1 Semaka</td>
                      
                    </tr>
                    <tr>
                        <td>SMAN 1 Kotaagung</td>
                    </tr>
                    <tr>
                        <td>POLITEKNIK NEGERI LAMPUNG</td>
                    </tr>
                </table>
            </div>
            <div class="col-3"></div>
            <div class="col-4">
                <h1>Detail Informasi</h1>
                <table class="table table-striped table-hover mx-auto">
                	 <tr>
                        <td>Tanggal Lahir</td>
                        <td> : </td>
                        <td><?= $data['tanggal_lahir'] ?></td>
                    </tr>
                     <tr>
                        <td>Tempat Lahir</td>
                        <td> : </td>
                        <td><?= $data['tempat_lahir'] ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td> : </td>
                        <td><?= $data['alamat'] ?></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Nohp</td>
                        <td> : </td>
                        <td><?= $data['nohp'] ?></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td> : </td>
                        <td><?= $data['email'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
        
                </table>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid p-1 bg-success">
        <div class="row justifay-content-center">
            <div class="col-lg-12 col-xs-8">
                <div class="text-center">
                    <h6 class="fontitalic"> By Nindi Aprinda A</h6>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>