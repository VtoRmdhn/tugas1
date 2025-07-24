<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Website Saya</title>
    <style>
        /* Reset */
        * {
            box-sizing: border-box;
        }

        /* Body */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #5a6edc;
            color: #333;
            display: flex;
            justify-content: center;
            padding: 20px;
            min-height: 100vh;
        }

        /* Container */
        .container {
            background-color: white;
            max-width: 9000px;
            width: 100%;
            border-radius: 20px;
            padding: 15px 25px 25px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            box-shadow:
                0 0 15px rgba(0, 0, 0, 0.2),
                inset 0 0 15px rgba(255, 255, 255, 0.4);
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1.5px solid #aaa;
            padding-bottom: 8px;
            font-size: 14px;
        }

        .brand {
            font-weight: bold;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            gap: 16px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #4a57d9;
        }

        /* Main Header */
        .main-header {
            display: flex;
            gap: 15px;
            border-bottom: 1.5px solid #aaa;
            padding-bottom: 20px;
        }

        .main-header-left {
            flex: 1;
        }

        .main-header-left h1 {
            margin: 0 0 8px 0;
            font-size: 1.9rem;
            font-weight: 700;
        }

        .main-header-left p {
            margin: 0 0 12px 0;
            font-size: 1rem;
            color: #666;
        }

        .btn-learn {
            display: inline-block;
            padding: 7px 14px;
            font-size: 0.85rem;
            border: 1.8px solid #666;
            border-radius: 5px;
            background-color: transparent;
            color: #444;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            user-select: none;
        }

        .btn-learn:hover {
            background-color: #4a57d9;
            color: white;
            border-color: #4a57d9;
        }

        .main-header-right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-header-right img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.12);
        }

        /* About Me */
        .about-me {
            background-color: #f4f5f8;
            padding: 20px 25px;
            border-radius: 12px;
            text-align: center;
        }

        .about-me h2 {
            margin: 0 0 6px 0;
            font-weight: 700;
        }

        .about-me p {
            margin: 0 0 40px 0;
            font-size: 0.95rem;
            color: #666;
            font-style: italic;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 50px 10px;
            max-width: 2660px;
            margin: 0 auto;
        }

        .about-grid button {
            padding: 10px 0;
            border: none;
            background-color: #ddd;
            border-radius: 7px;
            font-weight: 500;
            cursor: default;
            user-select: none;
            box-shadow: inset 0 2px 5px rgba(255, 255, 255, 0.9),
                0 1px 3px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        /* Portfolio Table */
        .portfolio {
            text-align: center;
            font-weight: 700;
            font-size: 1.3rem;
            padding-bottom: 10px;
            border-bottom: 1.5px solid #aaa;
        }

        .portfolio-table {
            width: 100%;
            border-spacing: 20px 15px;
            text-align: center;
        }

        .portfolio-box {
            background-color: #f4f5f8;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.07);
        }

        .portfolio-box img {
            width: 100%;
            max-width: 350px;
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.06);
        }

        .portfolio-box h3 {
            margin: 5px 0;
            font-size: 1rem;
        }

        .portfolio-box p {
            font-size: 0.85rem;
            color: #555;
        }

        /* Responsive */
        @media (max-width: 760px) {
            .main-header {
                flex-direction: column;
            }

            .about-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .portfolio-table {
                display: block;
            }

            .portfolio-table tr,
            .portfolio-table td {
                display: block;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="brand">Brand</div>
            <nav>
                <ul>
                    <li><a href="#">Header</a></li>
                    <li><a href="#">Biodata</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </nav>
        </header>

        <section class="main-header">
            <div class="main-header-left">
                <h1>Selamat Datang di Website Saya</h1>
                <p>Ini adalah contoh header dengan dua kolom. Kolom kiri berisi teks seperti ini.</p>
                <button class="btn-learn" aria-label="Pelajari Lebih Lanjut">Pelajari Lebih Lanjut</button>
            </div>
            <div class="main-header-right">
                <img src="https://cdn.stockinvest.us/blog-stockinvest/2024/07/0x0-1c200c.webp" alt="Ilustrasi 600 x 400" />
            </div>
        </section>

        <section class="about-me">
            <h2>About Me</h2>
            <p>A brief introduction about myself!</p>
            <div class="about-grid">
                <button type="button">Full Name</button>
                <button type="button">Education</button>
                <button type="button">Pekerjaan</button>
                <button type="button">Contact</button>
                <button type="button">Hobi</button>
                <button type="button">Alamat</button>
            </div>
        </section>

        <section>
            <h2 class="portfolio">Portofolio</h2>
            <table class="portfolio-table">
                <tr>
                    <td>
                        <div class="portfolio-box">
                            <img src="https://cdn.stockinvest.us/blog-stockinvest/2024/07/0x0-1c200c.webp" alt="Proyek 1">
                            <h3>Proyek 1</h3>
                            <p>Deskripsi proyek 1.</p>
                        </div>
                    </td>
                    <td>
                        <div class="portfolio-box">
                            <img src="https://cdn.stockinvest.us/blog-stockinvest/2024/07/0x0-1c200c.webp" alt="Proyek 2">
                            <h3>Proyek 2</h3>
                            <p>Deskripsi proyek 2.</p>
                        </div>
                    </td>
                    <td>
                        <div class="portfolio-box">
                            <img src="https://cdn.stockinvest.us/blog-stockinvest/2024/07/0x0-1c200c.webp" alt="Proyek 3">
                            <h3>Proyek 3</h3>
                            <p>Deskripsi proyek 3.</p>
                        </div>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>

</html>