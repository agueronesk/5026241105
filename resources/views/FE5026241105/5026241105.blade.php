<!DOCTYPE html>
<html lang="id">

<head>
    <title>Pilih Paket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet" />
    <style>
        body {
            background-color: #e8e8e8;
            font-family: 'Lato', sans-serif;
        }

        .header-utama {
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }

        .header-utama h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.4rem;
            font-weight: 400;
            color: #444;
            letter-spacing: 0.5px;
        }

        .header-utama p {
            font-size: 0.92rem;
            color: #aaa;
            line-height: 1.7;
        }

        .kotak-paket {
            background: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.07);
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .kotak-paket:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.13);
        }

        .kotak-paket.rekomendasi {
            margin-top: -18px;
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.13);
        }

        .popular-tag {
            background: #8ecfc0;
            color: #fff;
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-align: center;
            padding: 7px 0;
        }

        .paket-header {
            background: #f0c040;
            color: #fff;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            text-align: center;
            padding: 14px 0;
        }

        .kotak-harga {
            text-align: center;
            padding: 36px 20px 28px;
        }

        .kotak-harga .matauang {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            color: #bbb;
            vertical-align: super;
            line-height: 1;
        }

        .kotak-harga .harga {
            font-family: 'Playfair Display', serif;
            font-size: 4.2rem;
            font-weight: 400;
            color: #ccc;
            line-height: 1;
        }

        .kotak-harga .bulan {
            font-size: 0.75rem;
            color: #ccc;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .list-fitur {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-fitur li {
            text-align: center;
            font-size: 0.82rem;
            color: #888;
            padding: 13px 24px;
            border-bottom: 1px solid #f0f0f0;
        }

        .list-fitur li:last-child {
            border-bottom: none;
        }

        .list-fitur li strong {
            color: #555;
        }

        .tombol-paket-saat-ini {
            background: transparent;
            border: 1.5px solid #ddd;
            color: #aaa;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            width: 100%;
            padding: 13px 0;
            border-radius: 2px;
            transition: opacity 0.2s;
        }

        .tombol-paket-saat-ini:hover {
            opacity: 0.75;
        }

        .tombol-upgrade {
            background: #f0c040;
            color: #fff;
            border: none;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            width: 100%;
            padding: 13px 0;
            border-radius: 2px;
            transition: opacity 0.2s;
        }

        .tombol-upgrade:hover {
            opacity: 0.88;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <div class="row justify-content-center mb-5">
            <div class="col-12 col-lg-10">
                <div class="header-utama text-center px-5 py-5">
                    <h1 class="mb-3">Pilih Paket Anda.</h1>
                    <p class="mb-0 mx-auto" style="max-width:420px;">
                        Temukan paket layanan Google Workspace yang paling sesuai dengan kebutuhan bisnis Anda.
                        Semua paket sudah termasuk dukungan pelanggan 24/7.
                    </p>
                </div>
            </div>
        </div>

        <!-- cards pilihan paket -->
        <div class="row justify-content-center align-items-start">

            <!-- paket pemula bisnis -->
            <div class="col-12 col-md-4">
                <div class="kotak-paket">
                    <div class="paket-header">Pemula Bisnis</div>
                    <div class="kotak-harga">
                        <span class="matauang">$</span><span class="harga">4.20</span><span class="bulan">/bulan</span>
                    </div>
                    <ul class="list-fitur mb-4">
                        <li><strong>30 GB</strong> penyimpanan gabungan per pengguna</li>
                        <li><strong>Asisten Gemini AI</strong> di Gmail dan di aplikasi Gemini</li>
                        <li><strong>100 peserta</strong> rapat video</li>
                        <li><strong>AI Google Vids</strong> untuk pembuat dan editor video</li>
                        <li><strong>Keamanan dan privasi</strong> tingkat perusahaan</li>
                    </ul>
                    <div class="px-4 pb-4">
                        <button class="tombol-paket-saat-ini">Paket Anda</button>
                    </div>
                </div>
            </div>

            <!-- paket standar bisnis -->
            <div class="col-12 col-md-4">
                <div class="kotak-paket rekomendasi">
                    <div class="popular-tag">Populer</div>
                    <div class="paket-header">Standar Bisnis</div>
                    <div class="kotak-harga">
                        <span class="matauang">$</span><span class="harga">9.80</span><span class="bulan">/bulan</span>
                    </div>
                    <ul class="list-fitur mb-4">
                        <li><strong>2 TB</strong> penyimpanan gabungan per pengguna</li>
                        <li><strong>Asisten Gemini AI</strong> di Gmail, Dokumen, Meet, dan di aplikasi Gemini</li>
                        <li><strong>150 peserta</strong> rapat video termasuk perekaman dan peredam bising</li>
                        <li><strong>AI Google Vids</strong> untuk pembuat dan editor video</li>
                        <li><strong>Keamanan dan privasi</strong> tingkat perusahaan</li>
                    </ul>
                    <div class="px-4 pb-4">
                        <button class="tombol-upgrade">Upgrade</button>
                    </div>
                </div>
            </div>

            <!-- paket bisnis plus -->
            <div class="col-12 col-md-4">
                <div class="kotak-paket">
                    <div class="paket-header">Bisnis Plus</div>
                    <div class="kotak-harga">
                        <span class="matauang">$</span><span class="harga">22</span><span class="bulan">/bulan</span>
                    </div>
                    <ul class="list-fitur mb-4">
                        <li><strong>5 TB</strong> penyimpanan gabungan per pengguna</li>
                        <li><strong>Asisten Gemini AI</strong> di Gmail, Dokumen, Meet, dan di aplikasi Gemini</li>
                        <li><strong>500 peserta</strong> rapat video termasuk perekaman, pelacakan kehadiran, dan
                            peredam bising</li>
                        <li><strong>AI Google Vids</strong> untuk pembuat dan editor video</li>
                        <li><strong>Keamanan dan privasi</strong> yang ditingkatkan</li>
                    </ul>
                    <div class="px-4 pb-4">
                        <button class="tombol-upgrade">Upgrade</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
