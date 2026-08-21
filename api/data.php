<?php

function getPortfolioData() {
    return [
        'name' => 'Igfirlii Nuur Aziiza',
        'role' => 'Software Engineer & AI Enthusiast',
        'about' => 'Mahasiswa Teknik Informatika yang berdedikasi tinggi dengan minat mendalam di bidang Software Engineering, Kecerdasan Buatan (AI), dan Computer Vision. Berpengalaman dalam membangun aplikasi berbasis web tangguh serta mengintegrasikannya dengan model machine learning untuk memecahkan permasalahan nyata di industri.',
        'cv_link' => '/static/CV_Igfirlii_Nuur_Aziiza.pdf',
        'skills' => [
            'Web Development' => [
                'Python Flask', 
                'Laravel 12', 
                'Bootstrap', 
                'PostgreSQL'
            ],
            'AI & Vision' => [
                'Python', 
                'OpenCV', 
                'YOLO Object Detection', 
                'K-Nearest Neighbors (KNN)'
            ],
            'Cloud & Tools' => [
                'AWS (EC2 & AMI)', 
                'Python GIS', 
                'VS Code', 
                'Git'
            ]
        ],
        'projects' => [
            [
                'id' => 'udang-vaname-ai',
                'title' => 'Sistem Penilaian Udang Vaname AI',
                'desc' => 'Sistem evaluasi kelayakan udang vaname berbasis AI. Memantau blackspot, kualitas warna, dan kebersihan udang secara instan menggunakan teknologi Computer Vision. Mengandalkan PostgreSQL untuk menyimpan data biner citra digital.',
                'tech' => 'Python, OpenCV, KNN, PostgreSQL',
                'url' => '',
                'github' => 'https://github.com/igfirli06',
                'pipeline' => [
                    ['step' => '01', 'label' => 'Input Citra', 'sub' => 'Kamera Digital'],
                    ['step' => '02', 'label' => 'Pre-process', 'sub' => 'OpenCV Filter'],
                    ['step' => '03', 'label' => 'Ekstraksi', 'sub' => 'Fitur Warna'],
                    ['step' => '04', 'label' => 'Klasifikasi', 'sub' => 'KNN Model'],
                    ['step' => '05', 'label' => 'Storage', 'sub' => 'PostgreSQL']
                ]
            ],
            [
                'id' => 'people-detection',
                'title' => 'People Detection System',
                'desc' => 'Sistem pemantauan cerdas yang dikembangkan untuk PT. Kutai Timber Indonesia. Mampu mendeteksi keberadaan karyawan di area zona tertentu. Dilengkapi timer validasi: jika karyawan berada di zona kurang dari waktu yang ditentukan, data diabaikan.',
                'tech' => 'Python, YOLO, Computer Vision',
                'url' => '',
                'github' => '',
                'pipeline' => [
                    ['step' => '01', 'label' => 'Video Feed', 'sub' => 'CCTV Stream'],
                    ['step' => '02', 'label' => 'Deteksi', 'sub' => 'YOLO Weights'],
                    ['step' => '03', 'label' => 'Tracking', 'sub' => 'Bounding Box'],
                    ['step' => '04', 'label' => 'Validasi', 'sub' => 'Time Logic'],
                    ['step' => '05', 'label' => 'Log Data', 'sub' => 'Dashboard']
                ]
            ],
            [
                'id' => 'kms-diskominfo',
                'title' => 'Knowledge Management System',
                'desc' => 'Sistem manajemen pengetahuan berbasis web yang dikembangkan saat Praktek Kerja Nyata (PKN) di Dinas Komunikasi Informatika dan Statistik (Diskominfo) Kabupaten Lombok Barat. Dirancang user-friendly untuk mendukung efisiensi pengelolaan informasi instansi.',
                'tech' => 'Web Framework, Database',
                'url' => '',
                'github' => '',
                'pipeline' => [
                    ['step' => '01', 'label' => 'Analisis', 'sub' => 'Kebutuhan Sistem'],
                    ['step' => '02', 'label' => 'Desain', 'sub' => 'Skema Database'],
                    ['step' => '03', 'label' => 'Backend', 'sub' => 'Logic & API'],
                    ['step' => '04', 'label' => 'Frontend', 'sub' => 'UI/UX Integrasi'],
                    ['step' => '05', 'label' => 'Deploy', 'sub' => 'Server Instansi']
                ]
            ]
        ]
    ];
}
