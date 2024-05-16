<?php
$title = 'Dashboard';
ob_start();
?>

<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias consequuntur
    illo exercitationem placeat rerum deleniti, aliquam eveniet, ratione doloribus repellendus fugiat quam suscipit
    nostrum? Pariatur enim est voluptatem rerum necessitatibus maiores hic maxime quisquam at nisi, debitis, eligendi
    provident eaque sed natus officia illum quaerat nemo nulla laboriosam dolore ut? Cupiditate quos, corrupti rerum
    facilis aut, doloribus atque soluta dolore laboriosam molestiae eaque numquam tenetur! Quam delectus fugit, nihil
    nobis numquam corporis rem! Dicta ut, deserunt maxime corporis, quos pariatur nostrum deleniti quae qui recusandae
    ad, incidunt excepturi quidem eos doloremque? Nemo ducimus voluptatem ab aut labore nulla architecto? Velit.</p>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layouts/authenticated.php';
?>