<?php
function getPortfolioData(): array
{
    return [
        'name' => 'Igfirlii Nuur Aziiza',
        'role' => 'Junior Python & Cloud Developer',
        'cv_link' => 'static/CV_Igfirlii_Nuur_Aziiza.pdf',
        'photo_url' => 'static/pixel-art.jpg', 
        'cat_gif' => 'static/thedailysnark-cat-8915.gif',
        'about' => 'Information Technology professional with a strong background in Python programming, Artificial Intelligence (AI), Machine Learning, and Cloud Computing. '
                 . 'Experienced in core AI pillars including Rule-based Expert Systems, Neural Networks, and Deep Learning, alongside cloud infrastructure management following graduation from the AWS re/Start Batch 15 program. '
                 . 'Committed to building innovative, scalable cloud and AI software solutions while fostering strong cross-cultural communication and team collaboration.',
        // --- DATA SERTIFIKAT ---
        'certificates' => [
            [
                'title' => 'Learn the basic of SQL with Google Big query ',
                'issuer' => 'Digica Academy',
                'date' => '2026',
                'image' => 'static/basic_SQL.png', 
                'credential_url' => '#' 
            ],
            [
                'title' => 'AWS re/Start Graduate Certificate',
                'issuer' => 'Amazon Web Services (AWS)',
                'date' => '2026',
                'image' => 'static/aws-restart-cert.png', 
                'credential_url' => '#' 
            ],
            [
                'title' => 'Magang Wajib',
                'issuer' => 'PT. Kutai Timber Indonesia',
                'date' => '2025',
                'image' => 'static/KTI1.jpg', 
                'credential_url' => '#'
            ],
            [
                'title' => 'Magang Dan Studi Independen Bersertifikat (MSIB)',
                'issuer' => 'PT. Artifisal Intelegensia Indonesia',
                'date' => '2024',
                'image' => 'static/msib.jpg', 
                'credential_url' => '#'
            ],
        ],
        'skills' => [
            'AWS & Cloud Computing' => [
                ['name' => 'AWS re/Start Graduate', 'details' => 'Lulusan program pelatihan intensif AWS Cloud Computing (Batch 15, Agustus - Oktober 2026).'],
                ['name' => 'Amazon EC2', 'details' => 'Konfigurasi instance server Linux/Windows, Security Groups, Key Pairs, dan manajemen web server.'],
                ['name' => 'Amazon S3', 'details' => 'Manajemen bucket, pengelolaan objek, static website hosting, dan kebijakan keamanan akses (Bucket Policy).'],
                ['name' => 'Amazon VPC', 'details' => 'Perancangan arsitektur jaringan terisolasi: Public/Private Subnet, Internet Gateway, dan Route Tables.'],
                ['name' => 'AWS IAM', 'details' => 'Manajemen hak akses aman menggunakan User, Role, Policy, dan prinsip Least Privilege.'],
                ['name' => 'Amazon RDS & DynamoDB', 'details' => 'Pengelolaan basis data relasional (RDS) dan basis data NoSQL berkinerja tinggi (DynamoDB).'],
                ['name' => 'AWS CloudFormation', 'details' => 'Implementasi Infrastructure as Code (IaC) menggunakan template otomatisasi.'],
                ['name' => 'AWS CLI & Systems Manager', 'details' => 'Otomasi dan manajemen operasional layanan cloud secara terpusat via command-line.'],
                ['name' => 'Amazon SNS & EFS', 'details' => 'Pengaturan layanan notifikasi berbasis event dan penyimpanan file sistem terdistribusi (EFS).']
            ],
            'AI & Computer Vision' => [
                ['name' => 'OpenCV', 'details' => 'Versi: 4.x. Penggunaan: Image Processing, Color Extraction (HSV, CIELab, RGB) untuk deteksi warna.'],
                ['name' => 'YOLO', 'details' => 'Versi: YOLOv8. Penggunaan: Object Detection & Tracking untuk sistem pemantauan area.'],
                ['name' => 'Scikit-Learn (KNN)', 'details' => 'Penggunaan: Implementasi Weighted KNN (WKNN) Classifier untuk sistem klasifikasi.'],
                ['name' => 'NumPy / Pandas', 'details' => 'Penggunaan: Manipulasi data dan operasi komputasi matriks/array berkinerja tinggi.']
            ],
            'Backend & Database' => [
                ['name' => 'Python (Flask & FastAPI)', 'details' => 'Penggunaan: Membangun backend, microservices, dan sistem real-time dashboard.'],
                ['name' => 'PostgreSQL & MySQL', 'details' => 'Penggunaan: Relational database management system untuk menyimpan data sistem.'],
                ['name' => 'SQLAlchemy', 'details' => 'Penggunaan: Object Relational Mapper (ORM) untuk interaksi database yang efisien.'],
                ['name' => 'REST API & Git', 'details' => 'Desain komunikasi data JSON, version control, dan kolaborasi manajemen kode repo.']
            ],
        ],
        'projects' => [
            [
                'title' => 'AWS Cloud Architecture & Infrastructure Lab',
                'tech' => 'AWS EC2, S3, VPC, IAM, RDS, CloudFormation',
                'desc' => 'Implementasi arsitektur cloud aman dan skalabel sebagai bagian dari program pelatihan intensif AWS re/Start Batch 15.',
                'pipeline' => [
                    ['step' => '01', 'label' => 'VPC Design', 'sub' => 'Public & Private Subnets'],
                    ['step' => '02', 'label' => 'IAM Security', 'sub' => 'Role & Least Privilege'],
                    ['step' => '03', 'label' => 'EC2 & S3 Deployment', 'sub' => 'Compute & Storage setup'],
                    ['step' => '04', 'label' => 'RDS Database', 'sub' => 'Managed relational database'],
                    ['step' => '05', 'label' => 'CloudFormation IaC', 'sub' => 'Automated stack deployment'],
                ],
                'decision' => [
                    'label' => 'AWS Well-Architected Framework',
                    'formula' => 'Security, Reliability, Performance, Cost',
                ],
                'branches' => [
                    ['cond' => 'High Availability', 'result' => 'Multi-AZ Deployed', 'type' => 'yes'],
                    ['cond' => 'Cost Optimization', 'result' => 'Right-Sizing Applied', 'type' => 'no'],
                ],
            ],
            [
                'title' => 'Sistem Penilaian Kelayakan Udang Vaname AI',
                'tech' => 'Python, Flask, OpenCV, KNN, PostgreSQL',
                'desc' => 'Sistem berbasis website untuk mendeteksi blackspot dan kualitas warna udang secara instan menggunakan teknologi Computer Vision.',
                'url' => 'https://igfirli-deteksi-udang-yolo.hf.space',
                'github' => null,
                'pipeline' => [
                    ['step' => '01', 'label' => 'Input Gambar Udang', 'sub' => 'upload via web'],
                    ['step' => '02', 'label' => 'Resize 640x640', 'sub' => 'preprocessing'],
                    ['step' => '03', 'label' => 'YOLO Detection', 'sub' => 'deteksi + remove background'],
                    ['step' => '04', 'label' => 'OpenCV Color Extraction', 'sub' => 'HSV, CIELab, RGB'],
                    ['step' => '05', 'label' => 'SNI Scoring', 'sub' => 'skor standar SNI'],
                ],
                'decision' => [
                    'label' => 'WKNN Classifier',
                    'formula' => 'd(xi,xj)=sqrt(sum(w(xik-xjk)^2))',
                ],
                'branches' => [
                    ['cond' => 'Grade >= 7', 'result' => 'Lolos', 'type' => 'yes'],
                    ['cond' => 'Grade < 7', 'result' => 'Reject', 'type' => 'no'],
                ],
            ],
            [
                'title' => 'PEOPLE DETECTION MONITORING',
                'tech' => 'PYTHON, MACHINE VISION, YOLOv8, MYSQL, FLASK',
                'desc' => 'Sistem pemantauan keamanan karyawan untuk area zona khusus di PT. Kutai Timber Indonesia dengan pencatatan dan dashboard real-time.',
                'url' => 'https://igfirli06.github.io/people-detection-demo/',
                'github' => 'https://github.com/igfirli06/people-detection-demo',
                'pipeline' => [
                    ['step' => '01', 'label' => 'INPUT STREAM (RTSP)', 'sub' => 'Kamera mengirim stream video'],
                    ['step' => '02', 'label' => 'YOLOv8 TRACKING', 'sub' => 'Deteksi tracking_id dalam poligon'],
                    ['step' => '03', 'label' => 'MYSQL LOGGING', 'sub' => 'Pencatatan kejadian & zona']
                ],
                'decision' => [
                    'label' => 'FLASK REAL-TIME DASHBOARD',
                    'formula' => 'Render Video Anotasi + Tabel Event'
                ],
                'branches' => [
                    ['cond' => 'STATUS KARYAWAN', 'type' => 'yes', 'result' => 'MASUK / TERCATAT'],
                    ['cond' => 'KONDISI ZONA', 'type' => 'no', 'result' => 'AMAN / KOSONG']
                ]
            ],
            [
                'title' => 'NutriSense',
                'tech' => 'Python, FastAPI, SQLAlchemy, Jinja2, PostgreSQL, NLP',
                'desc' => 'Sistem berbasis website untuk mendeteksi kandungan gizi dari makanan, manajemen resep, dan kalkulator kebutuhan kalori harian (TDEE). Studi kasus Artificial Intelligence Center Indonesia.',
                'url' => 'https://igfirli-nutrisense.hf.space',
                'github' => null,
                'pipeline' => [
                    ['step' => '01', 'label' => 'Input Parameter', 'sub' => 'Form TDEE atau pencarian bahan'],
                    ['step' => '02', 'label' => 'FastAPI Processing', 'sub' => 'Routing & Query Database (SQLAlchemy)'],
                    ['step' => '03', 'label' => 'Kalkulasi Nutrisi', 'sub' => 'Menghitung BMR/TDEE & total gizi resep'],
                    ['step' => '04', 'label' => 'Server-Side Rendering', 'sub' => 'Jinja2 merender antarmuka dinamis ke user'],
                ],
                'decision' => [
                    'label' => 'Kalkulator Harris-Benedict (TDEE)',
                    'formula' => 'BMR × Faktor Aktivitas',
                ],
                'branches' => [
                    ['cond' => 'Gender Pria', 'result' => 'Hitung BMR Pria', 'type' => 'yes'],
                    ['cond' => 'Gender Wanita', 'result' => 'Hitung BMR Wanita', 'type' => 'no'],
                ],
            ],
            [
                'title' => 'Fortigate-Automation',
                'tech' => 'Python, Flask, REST API, PyParsing',
                'desc' => 'Sistem otomasi untuk pengelolaan konfigurasi firewall Fortigate studi kasus PT. Kutai Timber Indonesia.',
                'url' => 'https://igfirli06.github.io/people-detection-demo/',
                'github' => 'https://github.com/igfirli06/people-detection-demo',
                'pipeline' => [
                    ['step' => '01', 'label' => 'Input Log Line', 'sub' => 'Menerima baris log Fortigate'],
                    ['step' => '02', 'label' => 'Grammar Matching', 'sub' => 'Evaluasi prioritas & key-value'],
                    ['step' => '03', 'label' => 'Tokenization', 'sub' => 'Memecah string log (PyParsing)'],
                    ['step' => '04', 'label' => 'Dictionary Mapping', 'sub' => 'Menyusun log menjadi struktur JSON/Dict'],
                ],
                'decision' => [
                    'label' => 'Parsing Validation (Try-Except)',
                    'formula' => 'Match(logLine) == True',
                ],
                'branches' => [
                    ['cond' => 'Format Log Valid', 'result' => 'Return Dictionary Data', 'type' => 'yes'],
                    ['cond' => 'Format Log Invalid', 'result' => 'Return Error Line', 'type' => 'no'],
                ],
            ],
        ],
    ];
}

$data = getPortfolioData();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - <?= htmlspecialchars($data['name']) ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            width: 100%;
            font-family: sans-serif;
            background-color: #2c525f;
            color: #fff;
        }

        /* Mengatur agar setiap section pas satu layar penuh tanpa overflow aneh */
        section {
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            overflow-y: auto;
        }

        /* Hero Section Styling */
        .hero-section {
            background-color: #2c525f;
        }

        .badge {
            background-color: #e09f3e;
            color: #000;
            padding: 0.4rem 1rem;
            font-weight: bold;
            font-size: clamp(0.7rem, 1.2vw, 1rem);
            margin-bottom: 1rem;
            border: 2px solid #000;
            box-shadow: 3px 3px 0px #000;
        }

        .hero-title-box {
            background-color: #58181f;
            border: 3px solid #000;
            box-shadow: 5px 5px 0px #000;
            padding: 1.5rem 3rem;
            text-align: center;
            max-width: 90%;
        }

        /* Menggunakan clamp agar ukuran font responsif dan pas di layar */
        .hero-title {
            font-size: clamp(1.8rem, 4.5vw, 4rem);
            font-weight: 900;
            color: #fcf6bd;
            line-height: 1.1;
            text-transform: uppercase;
        }

        .hero-subtitle-box {
            background-color: #fff;
            color: #000;
            border: 3px solid #000;
            box-shadow: 4px 4px 0px #000;
            padding: 0.6rem 1.5rem;
            margin-top: 1.5rem;
            font-weight: bold;
            font-size: clamp(0.8rem, 1.5vw, 1.2vw);
        }
    </style>
</head>
<body>

    <section class="hero-section">
        <div class="badge">AVAILABLE FOR HIRE // 2026</div>
        
        <div class="hero-title-box">
            <h1 class="hero-title"><?= htmlspecialchars($data['name']) ?></h1>
        </div>

        <div class="hero-subtitle-box">
            [ <?= htmlspecialchars($data['role']) ?> ]
        </div>
    </section>

</body>
</html>
