<<<<<<< HEAD
# magazin_online_test
=======
# Magazin-Online
Specificații pentru Proiectul Magazinului Online - Echipamente Sportive

/app
    /Controllers
        CategoryController.php        # Gestionarea categoriilor (CRUD pentru categorii)
        ProductController.php         # Gestionarea produselor (CRUD, căutare, filtrare)
        OrderController.php           # Gestionarea comenzilor (vizualizare, actualizare stare)
        ReviewController.php          # Gestionarea recenziilor (CRUD pentru recenzii)
        UserController.php            # Autentificare, înregistrare, profil utilizator, resetare parolă
    /Models
        Category.php                  # Modelul pentru tabelul `categories`
        Product.php                   # Modelul pentru tabelul `products`
        Order.php                     # Modelul pentru tabelul `orders`
        OrderItem.php                 # Modelul pentru tabelul `order_items`
        Review.php                    # Modelul pentru tabelul `reviews`
        User.php                      # Modelul pentru tabelul `users`
        PasswordReset.php             # Modelul pentru gestionarea cererilor de resetare a parolei
    /config
        database.php                  # Configurarea conexiunii la baza de date
    /routes
        web.php                       # Rutele aplicației (definirea URL-urilor pentru controlere)
    /views
        /categories
            index.php                 # Afișarea categoriilor
            create.php                # Formular pentru creare categorie
            edit.php                  # Formular pentru editare categorie
        /products
            index.php                 # Afișarea produselor
            create.php                # Formular pentru creare produs
            edit.php                  # Formular pentru editare produs
        /orders
            index.php                 # Afișarea comenzilor
            details.php               # Detalii comandă
        /reviews
            index.php                 # Afișarea recenziilor
            create.php                # Formular pentru recenzie nouă
        /users
            login.php                 # Pagina de autentificare
            register.php              # Pagina de înregistrare
            profile.php               # Profil utilizator
            password_reset.php        # Formular pentru resetarea parolei
            password_reset_link.php   # Formular pentru trimiterea linkului de resetare
            change_password.php       # Formular pentru schimbarea parolei
/public
    index.php                       # Punctul de intrare în aplicație
/vendor/                            # Dependențe gestionate cu Composer
/composer.json                      # Fișier Composer pentru pachete și autoload
/composer.lock                      # Versiuni blocate ale pachetelor Composer
/onlinemagazin.sql                  # Scriptul bazei de date


![image](https://github.com/user-attachments/assets/c5e354bc-459f-4d3e-8229-df0e0752a92d)


>>>>>>> 237ee90fe8901cd981aeff80b2bd082edbe79ee7
