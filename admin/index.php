<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend</title>
</head>

<body>
    ADMIN DASH

    <form action="save.php" method="POST">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required maxlength="100"><br>

        <label for="price_min">Prix Minimum:</label>
        <input type="text" id="price_min" name="price_min"><br>

        <label for="price_max">Prix Maximum:</label>
        <input type="text" id="price_max" name="price_max"><br>

        <label for="price">Prix:</label>
        <input type="text" id="price" name="price"><br>

        <label for="sale_price">Prix en Solde:</label>
        <input type="text" id="sale_price" name="sale_price"><br>

        <label for="image">Image (URL):</label>
        <input type="text" id="image" name="image" required maxlength="255"><br>

        <label for="is_sale">En Solde? (0 pour non, 1 pour oui):</label>
        <input type="checkbox" id="is_sale" name="is_sale" value="1"><br>

        <label for="rating">Évaluation:</label>
        <input type="number" id="rating" name="rating" min="0" max="5"><br>

        <label for="product_type">Type de Produit:</label>
        <select id="product_type" name="product_type" required>
            <option value="standard">Standard</option>
            <option value="fancy">Sophistiqué</option>
            <option value="popular">Populaire</option>
            <option value="special">Spécial</option>
            <option value="sale">En Solde</option>
        </select><br>

        <input type="submit" value="Ajouter le produit">
    </form>
</body>

</html>