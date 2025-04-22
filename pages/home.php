<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

        <?php

        require_once 'app/config/db.php';

        $stmt = $pdo->query('SELECT id, name, image, rating, price_min, price_max, sale_price, price FROM products');
        $default_image = 'https://png.pngtree.com/background/20230429/original/pngtree-rose-3d-flowers-rendering-generative-ai-art-picture-image_2499533.jpg';
        while ($product = $stmt->fetch()) {
        ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <?php
                    if ($product['sale_price'] > 0) {
                        echo '<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>';
                    }
                    ?>

                    <img class="card-img-top" src="<?= $product['image'] ?? $default_image; ?>" alt="..." />

                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?= $product['name']; ?></h5>
                            <?php
                            if ($product['rating'] > 0) {
                            ?>
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <?php
                                    for ($i = 0; $i < $product['rating']; ++$i) {
                                        echo '<div class="bi-star-fill"></div>';
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>

                            <?php

                            if ($product['price_min'] && $product['price_max']) {
                                echo '$' . $product['price_min'] . ' - $' . $product['price_max'];
                                // printf('$%s - $%s', $product['price_min'], $product['price_max']);
                            } elseif ($product['sale_price']) {
                                // echo '<span class="text-muted text-decoration-line-through">$20.00</span>$18.00';
                                printf('<span class="text-muted text-decoration-line-through">$%s</span>$%s', $product['price'], $product['sale_price']);
                            } else {
                                echo '$' . $product['price'];
                            }
                            ?>

                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>