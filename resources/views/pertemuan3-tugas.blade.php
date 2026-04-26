<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Open Sans', sans-serif;
            padding-bottom: 100px;
        }

        h2.judul-utama {
            font-weight: 300;
            color: #2c3e50;
        }

        .box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            height: 100%;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h2 class="judul-utama">myITS Academic Dashboard</h2>
            <p class="text-muted">Manajemen perkuliahan Sistem Informasi ITS</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <h6>Profil</h6>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Akun
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Biodata</a>
                            <a class="dropdown-item" href="#">Prestasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <h6>Keamanan</h6>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Opsi Akun
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Ganti Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <h6>FTEIC</h6>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Departemen
                        </button>
                        <div class="dropdown-menu">
                            <h5 class="dropdown-header">Departemen</h5>
                            <a class="dropdown-item" href="#">Sistem Informasi</a>
                            <a class="dropdown-item" href="#">Teknik Informatika</a>
                            <a class="dropdown-item" href="#">Teknik Elektro</a>
                            <a class="dropdown-item" href="#">Teknik Biomedik</a>
                            <a class="dropdown-item" href="#">Teknik Komputer</a>
                            <a class="dropdown-item" href="#">Teknologi Informasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <h6>Status Semester</h6>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Pilih Periode
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Gasal 2025/2026</a>
                            <a class="dropdown-item active" href="#">Genap 2025/2026</a>
                            <a class="dropdown-item disabled" href="#">Semester Antara</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <h6>Help Desk</h6>
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                            Bantuan
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Tiket Helpdesk</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <h6>Cetak</h6>
                    <div class="btn-group dropright">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                            Cetak Dokumen
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">KRSM</a>
                            <a class="dropdown-item" href="#">Surat Mahasiswa</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box text-right">
                    <h6 class="text-left">Filter</h6>
                    <div class="btn-group dropleft">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                            Filter Tahun
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">2024</a>
                            <a class="dropdown-item" href="#">2025</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box text-right">
                    <h6 class="text-left">Pesan</h6>
                    <div class="dropdown">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                            Notifikasi
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Minggu Terakhir FRS!!</a>
                            <a class="dropdown-item" href="#">Tagihan UKT Tersedia!!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <h6>Server</h6>
                    <div class="dropdown">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                            Info Sistem
                        </button>
                        <div class="dropdown-menu p-3 text-muted" style="max-width: 200px;">
                            <p class="small mb-0">Sistem akan offline pada jam 23:00 untuk sinkronisasi data dan akan hidup kembali pada jam 7.00</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box">
                    <h6>Transkip Nilai</h6>
                    <div class="btn-group">
                        <button type="button" class="btn btn-success">Download Transkrip</button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">File PDF</a>
                            <a class="dropdown-item" href="#">File Excel</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box">
                    <h6>Others</h6>
                    <div class="btn-group-vertical">
                        <button type="button" class="btn btn-dark">Home</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                                Layanan Lain
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Peminjaman Ruang</a>
                                <a class="dropdown-item" href="#">Laporan Kehilangan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
