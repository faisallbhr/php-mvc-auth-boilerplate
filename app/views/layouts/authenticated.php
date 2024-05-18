<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? "$title - Boilerplate" : 'Boilerplate' ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="flex h-dvh overflow-hidden">
        <?php include_once __DIR__ . '/../components/sidebar.php' ?>
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <?php include_once __DIR__ . '/../components/header.php' ?>
            <main class="p-4">
                <?php \core\Flasher::flash() ?>
                <?= $content ?>
            </main>
        </div>
    </div>


    <script src="/js/script.js"></script>

</body>

</html>