<?php
$title = 'Dashboard';
ob_start();
?>

<section class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">
    <div class="bg-white rounded p-4 shadow-lg flex justify-between items-end">
        <div>
            <h1 class="font-bold text-xl">Products</h1>
            <span>Total: <?php echo $products; ?></span>
        </div>
        <button class="text-sm underline underline-offset-2 hover:text-cyan-700">
            <a href="/products">More details</a>
        </button>
    </div>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/authenticated.php';
?>