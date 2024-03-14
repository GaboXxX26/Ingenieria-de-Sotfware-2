<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <nav class="navbar">

        <!-- Barra de búsqueda mejorada -->
        <div>
            <form action="#" method="get" class="search-form">
                <input type="text" name="q" placeholder="Buscar..." style="width: 300px;">
                <button type="submit">Buscar</button>
            </form>
        </div>

        <div>
            <a href="index.php">
                <h2><i class="fas fa-sign-out-alt"></i> </h2>
            </a>
            <!-- Aquí puedes agregar el contenido del carrito de compras -->
        </div>
    </nav>
    
<div class="container">
        <h1 class="animate__animated animate__backInLeft">Bienvenido a nuestra librería</h1>
        <?php
        // Ejemplo de datos de libros
        $books = [
            [
                'title' => 'Cien años de soledad',
                'author' => 'Gabriel García Márquez',
                'description' => 'La obra maestra del realismo mágico.',
                'image' => 'book1.jpg',
                'price' => 20,
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'Una distopía clásica que aún resuena en la actualidad.',
                'image' => 'book2.jpg',
                'price' => 18,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
            [
                'title' => 'El principito',
                'author' => 'Antoine de Saint-Exupéry',
                'description' => 'Un cuento filosófico sobre la amistad y la humanidad.',
                'image' => 'book3.jpg',
                'price' => 15,
            ],
        ];

        // Verificar si se ha iniciado sesión para el carrito
        session_start();
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = []; // Inicializar el carrito
        }

        // Manejar la adición de libros al carrito
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
            $book_index = $_POST['book_index'];
            $quantity = $_POST['quantity'];

            for ($i = 0; $i < $quantity; $i++) {
                array_push($_SESSION['cart'], $books[$book_index]);
            }
        }


        // Manejar la eliminación de libros del carrito
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_from_cart'])) {
            $book_index = $_POST['book_index'];
            unset($_SESSION['cart'][$book_index]);
        }

        // Mostrar cada libro en la lista
        foreach ($books as $index => $book) {
            echo "<div class='book'>";
            echo "<h2>{$book['title']}</h2>";
            echo "<p><strong>Autor:</strong> {$book['author']}</p>";
            echo "<p>{$book['description']}</p>";
            echo "<p><strong>Precio:</strong> \${$book['price']}</p>";
            echo "<form method='post'>";
            echo "<input type='hidden' name='book_index' value='$index'>";
            echo "<label for='quantity'>Cantidad:</label>";
            echo "<input type='number' id='quantity' name='quantity' value='1' min='1'>";
            echo "<button type='submit' name='add_to_cart'>Agregar al carrito</button>";
            echo "</form>";
            echo "</div>";
        }

        ?>
</div>

    <div class="cart-container">
        <h2><i class="fas fa-shopping-cart"></i> Carrito de compras</h2>
        <?php
        // Mostrar los libros en el carrito
        if (!empty($_SESSION['cart'])) {
            $total_price = 0;
            foreach ($_SESSION['cart'] as $index => $book) {
                echo "<div class='book'>";
                echo "<h3>{$book['title']}</h3>";
                echo "<p><strong>Autor:</strong> {$book['author']}</p>";
                echo "<p>{$book['description']}</p>";
                echo "<p><strong>Precio:</strong> \${$book['price']}</p>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='book_index' value='$index'>";
                echo "<button type='submit' name='remove_from_cart' class='remove-button'><i class='fas fa-trash'></i> Eliminar</button>";
                echo "</form>";
                echo "</div>";
                $total_price += $book['price'];
            }
            echo "<div class='cart-total'>";
            echo "<p><strong>Total:</strong> \$$total_price</p>";
            // Botón para hacer la compra
            echo "<div class='cart-total'>";
            echo "<form method='post' action='compra.php'>";
            echo "<button type='submit' name='make_purchase'><i class='fas fa-credit-card'></i> Hacer compra</button>";
            echo "</form>";
            echo"</div>";
        } else {
            echo "<p>No hay libros en el carrito</p>";
        }
        ?>
    </div>
    
</body>
</html>