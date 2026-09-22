<?php

function getPortfolioData(): array
{
    return [
        'name' => 'Igfirlii Nuur Aziiza',
        'role' => 'Junior Python Developer',
        'cv_link' => 'static/CV_Igfirlii_Nuur_Aziiza.pdf',
        'photo_url' => 'static/pixel-art.jpg', // INI SUDAH DIPERBAIKI
        'about' => 'Information Technology professional with a strong background in Python programming, Artificial Intelligence (AI), and Machine Learning. '
                 . 'Experienced in core AI pillars including Rule-based Expert Systems, Neural Networks, and Deep Learning, with hands-on expertise gained through the MSIB program at PT. Artifisial Intelegensia Indonesia and practical deployment at PT. Kutai Timber Indonesia. '
                 . 'Committed to building innovative, efficient AI and software solutions while fostering strong cross-cultural communication and team collaboration.',
        'skills' => [
            'AI & Computer Vision' => [
                ['name' => 'OpenCV', 'details' => 'Versi: 4.x. Penggunaan: Image Processing, Color Extraction (HSV, CIELab, RGB) untuk deteksi warna.'],
                ['name' => 'YOLO', 'details' => 'Versi: YOLOv8. Penggunaan: Object Detection & Tracking untuk sistem pemantauan area.'],
                ['name' => 'Scikit-Learn (KNN)', 'details' => 'Penggunaan: Implementasi Weighted KNN (WKNN) Classifier untuk sistem klasifikasi.'],
                ['name' => 'NumPy / Pandas', 'details' => 'Penggunaan: Manipulasi data dan operasi komputasi matriks/array berkinerja tinggi.']
            ],
            'Cloud & Tools' => [
                ['name' => 'AWS (EC2 / Boto3)', 'details' => 'Penggunaan: Deployment model dan manajemen layanan cloud menggunakan Python Boto3.'],
                ['name' => 'Git/GitHub', 'details' => 'Penggunaan: Version control, manajemen repositori kode, dan kolaborasi tim.'],
                ['name' => 'VS Code', 'details' => 'Penggunaan: Integrated Development Environment (IDE) utama dengan ekstensi Python.'],
                ['name' => 'Postman', 'details' => 'Penggunaan: Pengujian (Testing) dan dokumentasi endpoint REST API.']
            ],
            'Backend & Database' => [
                ['name' => 'Python (Flask & FastAPI)', 'details' => 'Penggunaan: Membangun backend, microservices, dan sistem real-time dashboard.'],
                ['name' => 'PostgreSQL', 'details' => 'Penggunaan: Relational database management system untuk menyimpan data sistem.'],
                ['name' => 'SQLAlchemy', 'details' => 'Penggunaan: Object Relational Mapper (ORM) untuk interaksi database yang efisien.'],
                ['name' => 'REST API', 'details' => 'Penggunaan: Desain arsitektur komunikasi data antara frontend dan backend (JSON).']
            ],
        ],
        'projects' => [
            [
                'title' => 'Sistem Penilaian Kelayakan Udang Vaname AI',
                'tech' => 'Python, Flask, OpenCV, KNN, PostgreSQL',
                'desc' => 'Sistem berbasis website untuk mendeteksi blackspot dan'
                    . ' kualitas warna udang secara instan menggunakan teknologi'
                    . ' Computer Vision.',
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
                    [
                        'step' => '01',
                        'label' => 'INPUT STREAM (RTSP)',
                        'sub' => 'Kamera mengirim stream video'
                    ],
                    [
                        'step' => '02',
                        'label' => 'YOLOv8 TRACKING',
                        'sub' => 'Deteksi tracking_id dalam poligon'
                    ],
                    [
                        'step' => '03',
                        'label' => 'MYSQL LOGGING',
                        'sub' => 'Pencatatan kejadian & zona'
                    ]
                ],
                'decision' => [
                    'label' => 'FLASK REAL-TIME DASHBOARD',
                    'formula' => 'Render Video Anotasi + Tabel Event'
                ],
                'branches' => [
                    [
                        'cond' => 'STATUS KARYAWAN',
                        'type' => 'yes',
                        'result' => 'MASUK / TERCATAT'
                    ],
                    [
                        'cond' => 'KONDISI ZONA',
                        'type' => 'no',
                        'result' => 'AMAN / KOSONG'
                    ]
                ]
            ],
            [
                'title' => 'NutriSense',
                'tech' => 'Python, FastAPI, SQLAlchemy, Jinja2, PostgreSQL, NLP',
                'desc' => 'Sistem berbasis website untuk mendeteksi kandungan gizi'
                    . ' dari makanan, manajemen resep, dan kalkulator kebutuhan kalori harian (TDEE).'
                    . ' Studi kasus Artificial Intelligence Center Indonesia.',
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
                'desc' => 'Sistem otomasi untuk pengelolaan konfigurasi firewall'
                    . ' Fortigate studi kasus PT. Kutai Timber Indonesia.',
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
