<ul>
    <?php foreach ($products as $product):
        extract($product); ?>
        <li><a href=""><?= $productName ?></a></li>
    <?php endforeach; ?>
</ul>
