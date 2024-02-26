<?php
// Exemple de données du panier (à remplacer par la récupération des données depuis votre application)
$cartItems = array(
    array('id' => 1, 'name' => 'Red Rope', 'price' => 19.99, 'quantity' => 1, 'image' => '/images/rope/red-rope-1.png'),
    // Ajoutez d'autres éléments du panier ici
);
?>

<div class="site-blocks-table">
    <table class="table">
        <thead>
            <tr>
                <th class="product-thumbnail">Image</th>
                <th class="product-name">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-total">Total</th>
                <th class="product-remove">Remove</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartItems as $item) : ?>
                <tr>
                    <td class="product-thumbnail">
                        <img src="<?php echo $item['image']; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                        <h2 class="h5 text-black"><?php echo $item['name']; ?></h2>
                    </td>
                    <td>$<?php echo $item['price']; ?></td>
                    <td>
                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                            <!-- Utilisez les valeurs de $item['quantity'] dans le champ d'entrée -->
                            <input type="text" class="form-control text-center quantity-amount" value="<?php echo $item['quantity']; ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                    </td>
                    <td>$<?php echo $item['price'] * $item['quantity']; ?></td>
                    <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
