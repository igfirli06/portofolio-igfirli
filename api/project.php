<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/data.php';

$projectId = $_GET['id'] ?? '';
$data = getPortfolioData();

$selectedProject = null;
foreach ($data['projects'] as $p) {
    if ($p['id'] === $projectId) {
        $selectedProject = $p;
        break;
    }
}

if (!$selectedProject) {
    header("Location: /");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($selectedProject['title']); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8 max-w-3xl mx-auto bg-amber-50">
    <a href="/" class="text-sm font-bold border-2 border-black p-2 bg-white inline-block mb-6">← Kembali</a>
    <div class="border-4 border-black p-6 bg-white shadow-[6px_6px_0px_#000]">
        <h1 class="text-3xl font-black mb-4"><?= htmlspecialchars($selectedProject['title']); ?></h1>
        <p class="mb-4"><?= htmlspecialchars($selectedProject['desc']); ?></p>
        <p class="font-bold">Tech: <?= htmlspecialchars($selectedProject['tech']); ?></p>
    </div>
</body>
</html>
