<!DOCTYPE html>
<html lang="id">

<head>
    <title>Linktreeindonesia | Linktree</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800;900&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">

    <style>
        body {
            background-color: #134094;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        .kotak {
            background-image: url('bg-card-linktree.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 28px;
            height: 90vh;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.35);
        }

        .card-scroll {
            scrollbar-width: thin;
            scrollbar-color: rgba(31, 0, 104, 0.25) transparent;
        }

        .card-scroll::-webkit-scrollbar {
            width: 4px;
        }

        .card-scroll::-webkit-scrollbar-thumb {
            background: rgba(31, 0, 104, 0.25);
            border-radius: 99px;
        }

        .avatar {
            width: 76px;
            height: 76px;
            background: #22c55e;
            box-shadow: 0 6px 24px rgba(34, 197, 94, 0.45);
            animation: pop 0.5s cubic-bezier(.36, .07, .19, .97);
        }

        .profile-name {
            font-family: 'Nunito', sans-serif;
            font-size: 1.15rem;
        }

        .badge-icon {
            width: 18px;
            height: 18px;
            background: #f59e0b;
            font-size: 0.6rem;
        }

        .profile-bio {
            font-size: 0.78rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .social-icons a {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.05rem;
            transition: color 0.2s, transform 0.2s;
        }

        .social-icons a:hover {
            color: #fff;
            transform: translateY(-2px);
        }

        .section-label {
            font-family: 'Nunito', sans-serif;
            font-size: 0.8rem;
            letter-spacing: 0.06em;
        }

        .link-item {
            border-radius: 14px;
            transition: transform 0.18s, box-shadow 0.18s;
            animation: slideUp 0.35s ease both;
        }

        .link-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
        }

        .link-item:active {
            transform: scale(0.98);
        }

        .link-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            font-size: 1.1rem;
        }

        /* Warna kustom untuk icon */
        .ic-green {
            background: #166534;
            color: #fff;
        }

        .ic-blue {
            background: #1d4ed8;
            color: #fff;
        }

        .ic-gray {
            background: #f1f5f9;
            color: #475569;
        }

        .ic-amber {
            background: #fef3c7;
            color: #d97706;
        }

        .ic-purple {
            background: #ede9fe;
            color: #7c3aed;
        }

        .ic-rose {
            background: #ffe4e6;
            color: #e11d48;
        }

        .ic-teal {
            background: #ccfbf1;
            color: #0f766e;
        }

        .link-text {
            font-size: 0.88rem;
            font-weight: 500;
        }

        .link-more {
            color: #94a3b8;
            font-size: 1rem;
        }

        .qr-thumb {
            width: 40px;
            height: 40px;
            background: #f8fafc;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3px;
        }

        .qr-thumb span {
            background: #1e293b;
            border-radius: 2px;
        }

        .bottom-bar {
            background: rgba(255, 255, 255, 0.04);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .join-btn {
            border-radius: 999px;
            font-family: 'Nunito', sans-serif;
            font-size: 0.88rem;
            transition: background 0.2s, transform 0.15s;
        }

        .join-btn:hover {
            background: #f1f5f9;
            transform: scale(1.02);
        }

        .footer-links {
            font-size: 0.65rem;
            color: rgba(255, 255, 255, 0.5);
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.55);
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: #fff;
            text-decoration: none;
        }

        /* Animasi */
        @keyframes pop {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="vh-100 d-flex justify-content-center align-items-center">
    <div class="kotak d-flex flex-column m-3">

        <div class="card-scroll flex-grow-1 overflow-auto px-3 pb-4">

            <!--Profil dan Identitas-->
            <div class="text-center mt-4 mb-4">
                <div class="avatar mx-auto mb-2 d-flex align-items-center justify-content-center text-dark h2 m-0">✳
                </div>
                <div class="profile-name font-weight-bold text-white d-flex align-items-center justify-content-center">
                    LINKTREE
                    <span
                        class="badge-icon rounded-circle d-flex align-items-center justify-content-center text-white ml-2">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <div class="profile-bio mt-1">Bagikan semua tentang dirimu!</div>
                <div class="social-icons d-flex justify-content-center mt-3">
                    <a href="#" class="mx-2"><i class="fab fa-threads"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" class="mx-2"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

            <a href="#" class="link-item bg-white d-flex align-items-center p-2 mb-2 text-dark text-decoration-none">
                <div class="link-icon ic-green d-flex align-items-center justify-content-center flex-shrink-0"><i
                        class="fas fa-asterisk"></i></div>
                <span class="link-text flex-grow-1 px-3">Buat Linktree-mu di sini</span>
                <span class="link-more pr-2"><i class="fas fa-ellipsis-vertical"></i></span>
            </a>

            <a href="#" class="link-item bg-white d-flex align-items-center p-2 mb-2 text-dark text-decoration-none">
                <div class="link-icon ic-blue d-flex align-items-center justify-content-center flex-shrink-0"><i
                        class="fas fa-mobile-screen"></i></div>
                <span class="link-text flex-grow-1 px-3">Download Mobile App Linktree</span>
                <span class="link-more pr-2"><i class="fas fa-ellipsis-vertical"></i></span>
            </a>

            <a href="#" class="link-item bg-white d-flex align-items-center p-2 mb-2 text-dark text-decoration-none">
                <div class="link-icon ic-gray d-flex align-items-center justify-content-center flex-shrink-0"><i
                        class="far fa-circle-question"></i></div>
                <span class="link-text flex-grow-1 px-3">Pusat Bantuan Linktree</span>
                <span class="link-more pr-2"><i class="fas fa-ellipsis-vertical"></i></span>
            </a>

            <div class="section-label text-white text-center text-uppercase font-weight-bold my-3">✦ Fitur Terbaru! ✦
            </div>

            <a href="#" class="link-item bg-white d-flex align-items-center p-2 mb-2 text-dark text-decoration-none">
                <div class="link-icon ic-amber d-flex align-items-center justify-content-center flex-shrink-0"><i
                        class="fas fa-earth-americas"></i></div>
                <span class="link-text flex-grow-1 px-3">Kunjungi Linktree Marketplace</span>
                <span class="link-more pr-2"><i class="fas fa-ellipsis-vertical"></i></span>
            </a>

            <a href="#" class="link-item bg-white d-flex align-items-center p-2 mb-2 text-dark text-decoration-none">
                <div class="qr-thumb p-1 flex-shrink-0">
                    <span></span><span></span><span></span><span></span>
                </div>
                <span class="link-text flex-grow-1 px-3">Gratis buat dan pakai QR Code</span>
                <span class="link-more pr-2"><i class="fas fa-ellipsis-vertical"></i></span>
            </a>

            <a href="#" class="link-item bg-white d-flex align-items-center p-2 mb-2 text-dark text-decoration-none">
                <div class="link-icon ic-purple d-flex align-items-center justify-content-center flex-shrink-0"><i
                        class="far fa-square-caret-down"></i></div>
                <span class="link-text flex-grow-1 px-3">Formulir untuk terima pesan</span>
                <span class="link-more pr-2"><i class="fas fa-ellipsis-vertical"></i></span>
            </a>

            <a href="#" class="link-item bg-white d-flex align-items-center p-2 mb-2 text-dark text-decoration-none">
                <div class="link-icon ic-teal d-flex align-items-center justify-content-center flex-shrink-0"><i
                        class="fas fa-chart-line"></i></div>
                <span class="link-text flex-grow-1 px-3">Pantau performa secara real-time</span>
                <span class="link-more pr-2"><i class="fas fa-ellipsis-vertical"></i></span>
            </a>

            <a href="#" class="link-item bg-white d-flex align-items-center p-2 mb-2 text-dark text-decoration-none">
                <div class="link-icon ic-rose d-flex align-items-center justify-content-center flex-shrink-0"><i
                        class="fas fa-palette"></i></div>
                <span class="link-text flex-grow-1 px-3">Kustomisasi tampilan profil-mu</span>
                <span class="link-more pr-2"><i class="fas fa-ellipsis-vertical"></i></span>
            </a>

            <a href="#" class="link-item bg-white d-flex align-items-center p-2 mb-2 text-dark text-decoration-none">
                <div class="link-icon ic-blue d-flex align-items-center justify-content-center flex-shrink-0"><i
                        class="fas fa-link"></i></div>
                <span class="link-text flex-grow-1 px-3">Tambahkan link tanpa batas</span>
                <span class="link-more pr-2"><i class="fas fa-ellipsis-vertical"></i></span>
            </a>

        </div>

        <div class="bottom-bar px-3 py-3 d-flex flex-column align-items-center text-center">
            <button class="join-btn btn bg-white text-dark font-weight-bold w-100 py-2 border-0 mb-2"
                style="max-width: 280px;">Join linktreeindonesia on Linktree</button>
        </div>

    </div>

</body>

</html>
