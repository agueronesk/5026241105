<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIMBOISKER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #cce8f4 0%, #a8d8ea 50%, #b8e4f0 100%);
            font-family: 'Nunito', sans-serif;
        }

        .header {
            text-align: center;
            padding: 200px 20px 5px;
        }

        .header-teks {
            font-size: 6rem;
            font-weight: 800;
            letter-spacing: 2px;
            color: #3874a5;
            text-shadow:
                3px 3px 0 #ffffff,
                6px 6px 0 rgb(33, 78, 129);
            line-height: 1;
            margin-bottom: 5px;
        }

        .subtitle {
            display: inline-block;
            background: #1a4a7a;
            color: #fff;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 10px 28px;
            border-radius: 30px;
            letter-spacing: 0.3px;
        }

        .cards-section {
            padding: 10px 100px 60px;
        }

        .card-col {
            padding: 10px;
        }

        .kerjasama-card {
            background: #fff;
            border-radius: 1px;
            box-shadow: 0 4px 18px rgba(200, 160, 210, 0.15);
            padding: 32px 20px 24px;
            text-align: center;
            height: 100%;
            transition: transform 0.2s, box-shadow 0.2s;
            cursor: default;
        }

        .kerjasama-card:hover {
            box-shadow: 0 10px 28px rgba(100, 160, 210, 0.28);
        }

        .card-icon {
            width: 44px;
            height: 44px;
            margin: 0 auto 18px;
            color: #5ba3d0;
        }

        .card-title-link {
            display: inline-block;
            color: #2a6496;
            font-weight: 700;
            font-size: 0.97rem;
            text-decoration: none;
            line-height: 1.4;
            cursor: pointer;
            transition: color 0.2s;
            border-bottom: 2px solid transparent;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="header-teks">SIMBOISKER</div>
        <div class="subtitle">
            Sistem Informasi Malang Bersinergi Optimalkan Inovasi dan Strategi Kerja Sama
        </div>
    </div>

    <div class="container-fluid cards-section">
        <div class="row justify-content-center">

            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-lg card-col">
                <div class="kerjasama-card">
                    <div class="card-icon">
                        <!-- icon clipboard tanpa file gambar -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <a href="#" class="card-title-link" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="merupakan upaya yang dilakukan oleh dua atau lebih daerah untuk mencapai tujuan bersama sesuai dengan kebutuhan bersama">
                        Kerjasama<br>Antar Daerah
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-lg card-col">
                <div class="kerjasama-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <a href="#" class="card-title-link" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="usaha bersama antara daerah dengan pihak ketiga, yang terdiri dari perseorangan, badan usaha, dan organisasi kemasyarakatan">
                        Kerjasama<br>Antar Daerah
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-lg card-col">
                <div class="kerjasama-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <a href="#" class="card-title-link" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="kerjasama yang dilakukan oleh dua atau lebih negara merdeka, berdaulat untuk mencapai tujuan tertentu">
                        Kerjasama<br>Luar Negeri
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-lg card-col">
                <div class="kerjasama-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <a href="#" class="card-title-link" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content=" usaha bersama antara pemerintah daerah dengan lembaga di luar negeri, dalam pemerintahan yang menjadi kewenangan daerah">
                        Kerjasama Luar<br>Negeri Antar Daerah
                    </a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-12 col-sm-6 col-lg card-col">
                <div class="kerjasama-card">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <a href="#" class="card-title-link" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="koordinasi dan kolaborasi antara pemerintah daerah dan pemerintah pusat untuk memastikan setiap kebijakan">
                        Kerjasama Sinergi<br>dengan Pemerintah Pusat
                    </a>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('[data-toggle="popover"]').popover();
        });
    </script>

</body>

</html>
