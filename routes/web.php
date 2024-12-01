<?php
<<<<<<< HEAD
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Controllers\UserController;


$app->redirect('/', '/products');
$app->get('/products', [ProductController::class, 'index']); 
$app->get('/products/create', [ProductController::class, 'create']); 
$app->post('/products/store', [ProductController::class, 'store']); 
$app->get('/products/edit/{id}', [ProductController::class, 'edit']); 
$app->put('/products/update/{id}', [ProductController::class, 'update']); 
$app->delete('/products/delete/{id}', [ProductController::class, 'delete']); 
$app->get('/products/show/{id}', [ProductController::class, 'show']); 
$app->get('/products/search', [ProductController::class, 'search']); 
$app->get('/products/filter', [ProductController::class, 'filter']);

$app->get('/categories', [CategoryController::class, 'index']);  // Afișează lista de categorii
$app->get('/categories/create', [CategoryController::class, 'create']);  // Afișează formularul de creare categorie
$app->post('/categories/store', [CategoryController::class, 'store']);  // Salvează o categorie nouă
$app->get('/categories/edit/{id}', [CategoryController::class, 'edit']);  // Afișează formularul de editare pentru o categorie
$app->put('/categories/update/{id}', [CategoryController::class, 'update']);  // Actualizează o categorie existentă
$app->delete('/categories/delete/{id}', [CategoryController::class, 'delete']);  // Șterge o categorie
$app->get('/categories/show/{id}', [CategoryController::class, 'show']);  // Afișează detaliile unei categorii

$app->get('/login', [UserController::class, 'login']);
$app->get('/register', [UserController::class, 'register']);
$app->post('/authenticate', [UserController::class, 'authenticate']);
$app->get('/profile', [UserController::class, 'profile']);
$app->get('/logout', [UserController::class, 'logout']);
$app->post('/store', [UserController::class, 'store']);
$app->get('/editPassword', [UserController::class, 'editPassword']);
$app->post('/updatePassword', [UserController::class, 'updatePassword']);
=======
use App\Controllers\UserController;
use App\Controllers\ProductController;
use App\Controllers\OrderController;
use App\Controllers\ReviewController;
use App\Controllers\OrderItemController;

// Rute pentru utilizatori
$app->get('/users/{id}', [UserController::class, 'getUserProfile']);  // Vizualizare profil utilizator
$app->post('/users/register', [UserController::class, 'registerUser']);  // Înregistrare utilizator
$app->post('/users/login', [UserController::class, 'loginUser']);  // Autentificare utilizator
$app->post('/users/logout', [UserController::class, 'logoutUser']);  // Deconectare utilizator
$app->put('/users/{id}/profile', [UserController::class, 'updateUserProfile']);  // Actualizare profil utilizator

// Rute pentru produse
$app->get('/products/{id}', [ProductController::class, 'getProductDetails']);  // Detalii produs
$app->get('/products/search', [ProductController::class, 'searchProducts']);  // Căutare produse
$app->get('/categories/{category_id}/products', [ProductController::class, 'getCategoryProducts']);  // Produse dintr-o categorie
$app->post('/cart', [ProductController::class, 'addToCart']);  // Adăugare în coș
$app->delete('/cart', [ProductController::class, 'removeFromCart']);  // Eliminare din coș

// Rute pentru comenzi
$app->post('/orders', [OrderController::class, 'placeOrder']);  // Plasează o comandă
$app->get('/orders', [OrderController::class, 'getAllOrders']);  // Obține toate comenzile

// Rute pentru recenzii
$app->post('/reviews', [ReviewController::class, 'addProductReview']);  // Adăugare recenzie produs
$app->get('/reviews/{product_id}', [ReviewController::class, 'getProductReviews']);  // Vizualizare recenzii produs
$app->put('/reviews/{review_id}', [ReviewController::class, 'updateProductReview']);  // Actualizare recenzie produs
$app->delete('/reviews/{review_id}', [ReviewController::class, 'deleteProductReview']);  // Ștergere recenzie produs
$app->post('/reviews/rate', [ReviewController::class, 'rateProduct']);  // Evaluare produs


// Rute pentru articolele din comandă
$app->get('/orders/{order_id}/items', [OrderItemController::class, 'getOrderItems']);  // Obține articolele dintr-o comandă
$app->post('/orders/{order_id}/items', [OrderItemController::class, 'addOrderItem']);  // Adăugare articol în comandă
$app->put('/order-items/{id}', [OrderItemController::class, 'updateOrderItem']);  // Actualizare articol în comandă
$app->delete('/order-items/{id}', [OrderItemController::class, 'deleteOrderItem']);  // Ștergere articol din comandă

>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7
