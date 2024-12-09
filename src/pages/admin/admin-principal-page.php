<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="../../styles/admin/admin-principal-page.css" />
    <title>Principal</title>
    <link rel="icon" href="assets/logo1.webp" />
    <script src="../../scripts/admin/admin-principal-page.js" defer></script>
</head>

<body>
    <aside class="aside-nav-section">
        <div class="library-title">
            <img src="../../assets/logo1.webp" alt="" id="imgL" />
            <h1>Librería</h1>
        </div>
        <nav class="nav-section">
            <ul class="nav-options-list">
                <li class="nav-element">
                    <a href="../../pages/admin/admin-principal-page.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-home">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                        <h4>Home</h4>
                    </a>
                </li>
                <li class="nav-element">
                    <a href="../admin/admin-prestamos-page.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-books">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                            <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                            <path d="M5 8h4" />
                            <path d="M9 16h4" />
                            <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z" />
                            <path d="M14 9l4 -1" />
                            <path d="M16 16l3.923 -.98" />
                        </svg>
                        <h4>Prestamos</h4>
                    </a>
                </li>
                <li class="nav-element">
                    <a href="../admin/admin-multas-page.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-report-money">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                            <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                            <path d="M12 17v1m0 -8v1" />
                        </svg>
                        <h4>Multas</h4>
                    </a>
                </li>
            </ul>
            <hr />
            <ul class="user-menu">
                <li class="nav-element">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>
                        <h4>Configuración</h4>
                    </a>
                </li>
                <li class="nav-element">
                    <a href="../login.php  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                            <path d="M15 12h-12l3 -3" />
                            <path d="M6 15l-3 -3" />
                        </svg>
                        <h4>Cerrar Sesión</h4>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    <main>
        <div class="navegar">
            <div class="search-container">
                <input
                    type="text"
                    placeholder="Buscar libros"
                    id="input-search-books" />
            </div>
            <div class="login-section">
                <button class="login-btn" id="login-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                    <h3 class="login-link">Administrador</h3>
                </button>
            </div>
        </div>
        <div class="agregar-libros main-section-card">
            <div class="header-agregar-libros header-main-section-card">
                <h2>Agregar Libro</h2>
                <button id="agregar" class="header-btn-main-section-card">
                    <h3>Agregar</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                </button>
            </div>
            <p>Añade libros al catalogo</p>
        </div>
        <div class="eliminar-libros main-section-card">
            <div class="header-eliminar-libros header-main-section-card">
                <h2>Eliminar Libro</h2>
                <button id="eliminar" class="header-btn-main-section-card">
                    <h3>Eliminar</h3>
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                </button>
            </div>
            <p>
                Elimina libros del catalogo
            </p>
        </div>
        <div class="registrar-usuarios main-section-card">
            <div class="header-registrar-usuarios header-main-section-card">
                <h2>Registrar Usuario</h2>
                <button id="registrar" class="header-btn-main-section-card">
                    <h3>Registrar</h3>
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M16 19h6" /><path d="M19 16v6" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4" /></svg>                </button>
            </div>
            <p>
                Registra a usuarios (alumnos , profesores) en el sistema
            </p>
        </div>
        <?php

        $dsn = "pgsql:host=ep-quiet-frost-a5om3mkk.us-east-2.aws.neon.tech;port=5432;dbname=neondb;sslmode=require";
        $user = "neondb_owner";
        $password = "eHsJkUPn41Wm";



        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $tituloLibro = htmlspecialchars($_POST['titulo-libro']);
                $autorLibro = htmlspecialchars($_POST['autor-libro']);
                $isbnLibro = htmlspecialchars($_POST['isbn-libro']);
                $imagenLibro = htmlspecialchars($_POST['url-cover-libro']);
                $editorialLibro = htmlspecialchars($_POST['editorial-libro']);
                $anioPublicacionLibro = htmlspecialchars($_POST['anio-publicacion-libro']);
                $cantidadLibro = htmlspecialchars($_POST['cantidad-disponibles-libro']);
                $categoriaLibro = htmlspecialchars($_POST['categoria-libro']);
                $paginasLibro = htmlspecialchars($_POST['numero-paginas-libro']);
                $sinopsisLibro = htmlspecialchars($_POST['sinopsis-libro']);

                $sql = "INSERT INTO libros (isbn,titulo,autor,editorial,cantidad,categoria,imagen,sinopsis,num_pag,anio_pub) VALUES (:isbn,:titulo,:autor,:editorial,:cantidad,:categoria,:imagen,:sinopsis,:num_pag,:anio_pub)";
                $stmt = $pdo->prepare($sql);

                $stmt->bindParam(':isbn', $isbnLibro);
                $stmt->bindParam(':titulo', $tituloLibro);
                $stmt->bindParam(':autor', $autorLibro);
                $stmt->bindParam(':editorial', $editorialLibro);
                $stmt->bindParam(':cantidad', $cantidadLibro);
                $stmt->bindParam(':categoria', $categoriaLibro);
                $stmt->bindParam(':imagen', $imagenLibro);
                $stmt->bindParam(':sinopsis', $sinopsisLibro);
                $stmt->bindParam(':num_pag', $paginasLibro);
                $stmt->bindParam(':anio_pub', $anioPublicacionLibro);

                $stmt->execute();
            };
        } catch (PDOException $e) {
            echo "ERROR : " . $e->getMessage();
        }


        ?>


    </main>


    <dialog class="modal" id="modal-add-book">
        <div class="modal-content-add-book" id="modal-content-add-book">
            <form action="" class="form-add-book" method="post">
                <div class="container-input">
                    <label for="titulo-libro">Titulo del Libro</label>
                    <input type="text"
                        id="titulo-libro"
                        name="titulo-libro" />
                </div>

                <div class="container-input">
                    <label for=" autor-libro">Autor del Libro</label>
                    <input type="text"
                        id="autor-libro"
                        name="autor-libro" />
                </div>
                <div class="container-input">
                    <label for=" isbn-libro">ISBN</label>
                    <input type="text"
                        name="isbn-libro"
                        id="isbn-libro" />
                </div>
                <div class="container-input">
                    <label for=" url-cover-libro">URL Portada</label>
                    <input
                        type="url"
                        name="url-cover-libro"
                        id="url-cover-libro" />
                </div>
                <div class="container-input">
                    <label for=" editorial-libro">Editorial</label>
                    <input
                        type="text"
                        name="editorial-libro"
                        id="editorial-libro" />
                </div>
                <div class="container-input">
                    <label for="">Año de Publicacion</label>
                    <input
                        type=" number"
                        name="anio-publicacion-libro"
                        id="anio-publicacion-libro" />
                </div>
                <div class="container-input">
                    <label for=" cantidad-disponibles-libro">Cantidad disponible</label>
                    <input
                        type="number"
                        name="cantidad-disponibles-libro"
                        id="cantidad-disponibles-libro" />
                </div>
                <div class="container-input">
                    <label for=" categoria-libro">Categoria</label>
                    <input
                        type="text"
                        name="categoria-libro"
                        id="categoria-libro" />
                </div>
                <div class="container-input">
                    <label for=" numero-paginas-libro">Numero de paginas</label>
                    <input type="text" name="numero-paginas-libro" id="numero-paginas-libro">
                </div>
                <div class="container-input">
                    <label for=" sinopsis-libro">Sinopsis</label>
                    <textarea
                        name="sinopsis-libro"
                        id="sinopsis-libro"></textarea>
                </div >
                 <button id="send-btn" value="form1">Enviar 
                 <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-send-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z" /><path d="M6.5 12h14.5" /></svg>
                 </button>
            </form>
        </div>
    </dialog>
    <dialog class="modal" id="modal-delete-book">
        <div class="modal-content-delete-book">
                <div class="search-book-delete">
                    <label for="">Buscar libro a eliminar(ISBN)</label>
                    <input type="text" id="search-book-delete" name="search-book-delete-isbn">
                </div>
                <button id="buscar-libro-delete-btn" value="form2">Buscar</button>
        </div>
    </dialog>
    <dialog class="modal" id="modal-show-info-delete-book">
        <div class="modal-content-show-info-delete-book">
            <section class="image-modal-book-container">
                <img
                    src="../../assets/jardinmariposas.jpg"
                    class="modal-img-book"
                    alt=""
                    id="modal-img"
                />
                <div class="modal-btns-interactive">
                    <button class="btns-modal" id="add-favorites-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-heart" > <path stroke="none" d="M0 0h24v24H0z" fill="none" /> <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /> </svg>
                        <span>Agregar a Favoritos</span>
                    </button>
                </div>
            </section>
            <section class="book-info-container">
                <div class="title-modal-container">
                    <h2>Titulo</h2>
                    <h3 id="book-title">El Jardin De Las Mariposas</h3>
                </div>
                <div>
                    <h2>Autor</h2>
                    <h3 class="book-info-h3" id="book-author">Dot Hutchison</h3>
                </div>
                <div class="editorial-modal-container">
                    <h2>Editorial</h2>
                    <h3 class="book-info-h3" id="book-editorial">Planeta</h3>
                </div>

                <div class="categories-modal-container">
                    <h2>Categoria</h2>
                    <h3 id="book-category">Novela</h3>
                </div>
                <div class="synopsis-modal-container">
                    <h2>Sinopsis</h2>
                    <p id="book-synopsis">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Cras sollicitudin eget dui vel mattis. Mauris
                        dictum urna nulla, in semper quam lobortis quis.
                        Nunc vitae est pulvinar, aliquet magna et, commodo
                        odio. Nam volutpat nec dui at posuere. Quisque
                        pretium turpis sit amet ipsum lobortis, nec congue
                        arcu pulvinar. Suspendisse orci nisi, rhoncus
                        venenatis ultricies sit amet, maximus lobortis
                        velit. Ut quis accumsan felis, quis tincidunt dui.
                        Integer ullamcorper ex commodo risus auctor feugiat.
                        Pellentesque sollicitudin metus vel justo tristique
                        commodo. Morbi lacus neque, rutrum ut ligula eu,
                        ultrices faucibus quam. Sed mollis rhoncus laoreet.
                        Nunc a lectus a ipsum fermentum congue. Nulla vel
                        mollis lorem, id laoreet mauris. Orci varius natoque
                        penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Fusce commodo rutrum tortor sed
                        dignissim.
                    </p>
                </div>
            </section>
        </div>
    </dialog>
    <dialog class="modal" id="modal-opciones-registrar-usuario">
        <div class="modal-content-opciones-registrar-usuario">
            <h2>¿Que clase de Usuario desea registrar?</h2>
            <div id="container-btns-opciones-registrar">
                <button id="estudiante">Estudiante</button> 
                <button id="profesor">Profesor</button>
            </div>
        </div>
    </dialog>
    <dialog class="modal" id="modal-registrar-usuario-estudiante">
        <div class="modal-content-registrar-usuario-estudiante">
            <h2>Registrar estudiante</h2>
            <form action="">
                <label for="">Nombre</label>
                <input type="text" name="nombre-estudiante" id="nombre-estudiante">
                <label for="">Apellidos</label>
                <input type="text" name="apellidos-estudiante" id="apellidos-estudiante">
                <label for="">Correo</label>
                <input type="email" name="correo-estudiante" id="correo-estudiante">
                <label for="">Telefono</label>
                <input type="tel" name="telefono-estudiante" id="telefono-estudiante">
                <label for="">Direccion</label>
                <input type="text" name="direccion-estudiante" id="direccion-estudiante">
                <label for="">Carrera</label>
                <input type="text" name="carrera-estudiante" id="carrera-estudiante">
                <label for="">Semestre</label>
                <input type="number" name="semestre-estudiante" id="semestre-estudiante">
                <label for="">Contraseña</label>
                <input type="password" name="contraseña-estudiante" id="contraseña-estudiante">
            </form>
            <button id="registrar-estudiante-btn">Registrar</button>
        </div>
    </dialog>
    <dialog class="modal" id="modal-registrar-usuario-profesor">
    <div class="modal-content-registrar-usuario-profesor">
            <h2>Registrar profesor</h2>
            <form action="">
                <label for="">Nombre</label>
                <input type="text" name="nombre-profesor" id="nombre-profesor">
                <label for="">Apellidos</label>
                <input type="text" name="apellidos-profesor" id="apellidos-profesor">
                <label for="">Correo</label>
                <input type="email" name="correo-profesor" id="correo-profesor">
                <label for="">Telefono</label>
                <input type="tel" name="telefono-profesor" id="telefono-profesor">
                <label for="">Direccion</label>
                <input type="text" name="direccion-profesor" id="direccion-profesor">
                <label for="">Rol</label>
                <input type="text" name="rol-profesor" id="rol-profesor">
                <label for="">Departamento</label>
                <input type="number" name="departamento-profesor" id="departamento-profesor">
                <label for="">Contraseña</label>
                <input type="password" name="contraseña-profesor" id="contraseña-profesor">
            </form>
            <button id="registrar-profesor-btn">Registrar</button>
        </div>
    </dialog>
</body>
</html>