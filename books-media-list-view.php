<?php
    include_once "header.php";
?>
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2> livres & médias</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">accueil</a></li>
                        <li>livres & Médias</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Book & Media Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-media-list">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                    <div class="container">
                                        <div class="filter-box">
                                            <h3>Que recherchez-vous à la bibliothéque?</h3>
                                            <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="keywords">recherche avec mots clé </label>
                                                        <input class="form-control" placeholder="rechercher avec mot clé " id="keywords" name="keywords" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="catalog" id="catalog" class="form-control">
                                                            <option>chercher dans le catalogue</option>
                                                            <option> catalogue 01</option>
                                                            <option> catalogue 02</option>
                                                            <option> catalogue 03</option>
                                                            <option> catalogue 04</option>
                                                            <option> catalogue 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="category" id="category" class="form-control">
                                                            <option>tout les categories</option>
                                                            <option>categorie 01</option>
                                                            <option>categorie 02</option>
                                                            <option>categorie 03</option>
                                                            <option>categorie 04</option>
                                                            <option>categorie 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="submit" value="rechercher">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                                <!-- End: Search Section -->
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-md-push-3">
                                    <div class="filter-options margin-list">
                                        <div class="row">                                            
                                            <div class="col-md-4 col-sm-4">
                                                <select name="orderby">
                                                    <option selected="selected">Tri par défaut</option>
                                                    <option>Trier par popularité</option>
                                                    <option>Trier par note</option>
                                                    <option>Trier par nouveautés</option>
                                                    <option>Trier par prix</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div class="filter-result">Affichage des articles 1 à 9 sur 19 au total</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="books-list">
                                        <article> 
                                            <div class="single-book-box">                                                
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon yellow-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-01.jpg" /></a>                                                                 </div>
                                                <div class="post-detail">
                                                    <div class="books-social-sharing">
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title">
                                                                    <a href="books-media-detail-v1.html">The Great Gatsby</a>
                                                                </h3>
                                                                <ul>
                                                                    <li><strong>auteur:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                    <li><strong>Local Availability:</strong> 0 (of 1)</li>
                                                                    <li>
                                                                        <div class="rating">
                                                                            <strong>Rating: </strong>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>                                                                
                                                            </div>
                                                        </div>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">lire la suite</a>
                                                    </footer>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </article>
                                        <article> 
                                            <div class="single-book-box">
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon light-green-icon"></div>
                                                    <a href="flip-master/try flip.html"><img alt="Book" src="images/books-media/list-view/book-media-02.jpg" /></a>                                                    
                                                </div>
                                                <div class="post-detail">
                                                    <div class="books-social-sharing">
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                                <ul>
                                                                    <li><strong>auteur:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                    <li><strong>Local Availability:</strong> 0 (of 1)</li>
                                                                    <li>
                                                                        <div class="rating">
                                                                            <strong>Rating: </strong>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>                                                                
                                                            </div>
                                                        </div>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">lire la suite</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article>
                                        <article> 
                                            <div class="single-book-box">
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon blue-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-03.jpg" /></a>
                                                </div>
                                                <div class="post-detail">
                                                    <div class="books-social-sharing">
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                                <ul>
                                                                    <li><strong>auteur:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                    <li><strong>Local Availability:</strong> 0 (of 1)</li>
                                                                    <li>
                                                                        <div class="rating">
                                                                            <strong>Rating: </strong>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>                                                                
                                                            </div>
                                                        </div>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">lire la suite</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article>
                                        <article> 
                                            <div class="single-book-box">
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon red-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-04.jpg" /></a>                                             
                                                </div>
                                                <div class="post-detail">
                                                    <div class="books-social-sharing">
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                                <ul>
                                                                    <li><strong>auteur:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                    <li><strong>Local Availability:</strong> 0 (of 1)</li>
                                                                    <li>
                                                                        <div class="rating">
                                                                            <strong>Rating: </strong>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>                                                                
                                                            </div>
                                                        </div>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">lire la suite</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article>
                                        <article> 
                                            <div class="single-book-box">
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon red-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-05.jpg" /></a>                                                 
                                                </div>
                                                <div class="post-detail">
                                                    <div class="books-social-sharing">
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                                <ul>
                                                                    <li><strong>auteur:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                    <li><strong>Local Availability:</strong> 0 (of 1)</li>
                                                                    <li>
                                                                        <div class="rating">
                                                                            <strong>Rating: </strong>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>                                                                
                                                            </div>
                                                        </div>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">lire la suite</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article>
                                        <article> 
                                            <div class="single-book-box">
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon green-icon"></div>
                                                    <a href="books-media-detail-v1.html"><img alt="Book" src="images/books-media/list-view/book-media-06.jpg" /></a>
                                                </div>
                                                <div class="post-detail">
                                                    <div class="books-social-sharing">
                                                        <ul>
                                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="optional-links">
                                                        <ul>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Mail"><i class="fa fa-envelope"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Search">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                    <i class="fa fa-print"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title"><a href="books-media-detail-v1.html">The Great Gatsby</a></h3>
                                                                <ul>
                                                                    <li><strong>auteur:</strong> F. Scott Fitzgerald</li>
                                                                    <li><strong>ISBN:</strong> 9781581573268</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <ul>
                                                                    <li><strong>Edition:</strong> First editio</li>
                                                                    <li><strong>Local Availability:</strong> 0 (of 1)</li>
                                                                    <li>
                                                                        <div class="rating">
                                                                            <strong>Rating: </strong>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                            <span>☆</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>                                         
                                                            </div>
                                                        </div>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="books-media-detail-v1.html">lire la suite</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <nav class="navigation pagination text-center">
                                        <h2 class="screen-reader-text">Navigation dans les articles</h2>
                                        <div class="nav-links">
                                            <a class="prev page-numbers" href="#."><i class="fa fa-long-arrow-left"></i> Précédent</a>
                                            <a class="page-numbers" href="#.">1</a>
                                            <span class="page-numbers current">2</span>
                                            <a class="page-numbers" href="#.">3</a>
                                            <a class="page-numbers" href="#.">4</a>
                                            <a class="next page-numbers" href="#.">Prochain <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-md-3 col-md-pull-9">
                                    <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                        <div class="widget widget_related_search open" data-accordion>
                                            <h4 class="widget-title" data-control>recherches associées</h4>
                                            <div data-content>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Sujet</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Auteurs</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>des Series</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>autres recherches</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li><a href="#">Love stories <span>(18)</span></a></li>
                                                            <li><a href="#">Texas <span>(04)</span></a></li>
                                                            <li><a href="#">Rich people <span>(03)</span></a></li>
                                                            <li><a href="#">Humorous stories <span>(02)</span></a></li>
                                                            <li><a href="#">Widows <span>(02)</span></a></li>
                                                            <li><a href="#">Women <span>(11)</span></a></li>
                                                            <li><a href="#">Babysitters <span>(25)</span></a></li>
                                                            <li><a href="#">Law firms <span>(09)</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget widget_narrow_search" data-accordion>
                                            <h4 class="widget-title" data-control> Affinez votre recherche</h4>
                                            <div data-content>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Type de materiel</h5>
                                                    <div class="widget_material" data-content>
                                                        <form action="#">
                                                            <label><input type="checkbox" name="material" value="books"> livres</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked> Ressources électroniques</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> e-livress</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Enregistrement sonore</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Gros caractères</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Livres électroniques audio</label>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Date de publication </h5>
                                                    <div class="widget widget_material" data-content>
                                                        <form action="#">
                                                            <label><input type="checkbox" name="material" value="books"> livres</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked>Ressources électroniques</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> e-livres</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Enregistrement sonore</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Gros caractères</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Livres électroniques audio</label>
                                                        </form>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Popularité </h5>
                                                    <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                            <label><input type="checkbox" name="material" value="books"> livres</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked>Ressources électroniques</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> e-livres</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Enregistrement sonore</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Gros caractères</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Livres électroniques audio</label>
                                                        </form>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Language </h5>
                                                    <div class="widget widget_material" data-content>
                                                    <form action="#">
                                                            <label><input type="checkbox" name="material" value="books"> livres</label>
                                                            <label><input type="checkbox" name="material" value="electronic" checked>Ressources électroniques</label>
                                                            <label><input type="checkbox" name="material" value="ebooks"> e-livres</label>
                                                            <label><input type="checkbox" name="material" value="soundrecording" checked> Enregistrement sonore</label>
                                                            <label><input type="checkbox" name="material" value="largeprint"> Gros caractères</label>
                                                            <label><input type="checkbox" name="material" value="audioebooks" checked> Livres électroniques audio</label>
                                                        </form>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget widget_recent_releases">
                                            <h4 class="widget-title">Nouvelles versions</h4>
                                            <ul>
                                                <li><a href="#">livres</a></li>
                                                <li><a href="#">e-livres</a></li>
                                                <li><a href="#">DVDS</a></li>
                                                <li><a href="#">Magazines</a></li>
                                                <li><a href="#">Audio</a></li>
                                                <li><a href="#">eAudio</a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget widget_recent_entries">
                                            <h4 class="widget-title">Articles en commande</h4>
                                            <ul>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-01.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>Auteur:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-02.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The missing peace</a>
                                                    <span class="price"><strong>auteur:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-03.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">The Sonic Boom</a>
                                                    <span class="price"><strong>auteur:</strong> F. Scott Fitzgerald</span>
                                                    <span><strong>ISBN:</strong> 978158157</span>
                                                    <div class="rating">
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                        <span>☆</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>  
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Books & Media Section -->
<?php
    include_once "footer.php";
?>
