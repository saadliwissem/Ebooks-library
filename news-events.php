<?php
    include_once "header.php";
?>
<!-- Start: Page Banner -->
<section class="page-banner news-listing-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Liste des nouvelles</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">accueil</a></li>
                        <li>nouvelles</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="main-news-list">
                        <div class="container">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                                <div class="filter-box">
                                    <h3>Retrouvez les événements de la bibliothèque &amp; Des classes</h3>
                                    <form action="http://libraria.demo.presstigers.com/news-events-detail.html" method="get">
                                        <div class="col-md-10">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="keywords">recherche par mots-clés</label>
                                                        <input class="form-control" placeholder="recherche par mots-clés" id="keywords" name="keywords" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-3">
                                                    <div class="form-group">
                                                        <select name="category" id="category" class="form-control">
                                                            <option>toutes catégories</option>
                                                            <option>catégorie 01</option>
                                                            <option>catégorie 02</option>
                                                            <option>catégorie 03</option>
                                                            <option>catégorie 04</option>
                                                            <option>catégorie 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-3">
                                                    <div class="form-group">
                                                        <select name="locations" id="locations" class="form-control">
                                                            <option>Tous les emplacements</option>
                                                            <option>emplacement 01</option>
                                                            <option>emplacement 02</option>
                                                            <option>emplacement 03</option>
                                                            <option>emplacement 04</option>
                                                            <option>emplacement 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select name="startdate" id="startdate" class="form-control">
                                                                    <option>Date de début</option>
                                                                    <option>Date de début 01</option>
                                                                    <option>Date de début 02</option>
                                                                    <option>Date de début 03</option>
                                                                    <option>Date de début 04</option>
                                                                    <option>Date de début 05</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select name="enddate" id="enddate" class="form-control">
                                                                    <option>End Date</option>
                                                                    <option>End Date 01</option>
                                                                    <option>End Date 02</option>
                                                                    <option>End Date 03</option>
                                                                    <option>End Date 04</option>
                                                                    <option>End Date 05</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="col-md-4 col-sm-3">
                                                    <div class="form-group">
                                                        <select name="agegroup" id="agegroup" class="form-control">
                                                            <option>Tranche d'âge</option>
                                                            <option>Tranche d'âge 01</option>
                                                            <option>Tranche d'âge 02</option>
                                                            <option>Tranche d'âge 03</option>
                                                            <option>Tranche d'âge 04</option>
                                                            <option>Tranche d'âge 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-3">
                                                    <div class="form-group">
                                                        <select name="language" id="language" class="form-control">
                                                            <option>Language</option>
                                                            <option>Language 01</option>
                                                            <option>Language 02</option>
                                                            <option>Language 03</option>
                                                            <option>Language 04</option>
                                                            <option>Language 05</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control btn-clearform" type="submit" value="Forme claire">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="submit" value="Rechercher un événement">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="clear"></div>
                            </section>
                            <!-- End: Search Section -->
                            <div class="row">
                                <div class="col-md-9 col-md-push-3 news-events-list-view">
                                    <div class="news-list-box">
                                        <div class="single-news-list">
                                            <div class="social-content">
                                                <div class="social-share">
                                                    <ul>
                                                        <li><a href="#."><i class="fa fa-comment"></i> 37</a></li>
                                                        <li><a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a></li>
                                                        <li><a href="#."><i class="fa fa-eye"></i> 180</a></li>
                                                    </ul>
                                                </div>
                                                <div class="social-media">
                                                    <ul>
                                                        <li><a href="#." target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-rss"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figure>
                                                <a href="news-events-detail.html"><img src="images/news-event/news-listing-01.jpg" alt="News &amp; Event"></a>
                                            </figure>
                                            <div class="content-block">
                                                <div class="member-info">
                                                    <div class="content_meta_category">
                                                        <span class="arrow-right"></span>
                                                        <a href="#." rel="category tag"> ÉVÉNEMENT</a>
                                                    </div>
                                                    <ul class="news-event-info">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-calendar"></i>
                                                                July 25, 2016
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-clock-o"></i>
                                                                10:15 AM - 10:15 PM 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-map-marker"></i>
                                                                New York, USA
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h3><a href="news-events-detail.html">It uses a dictionary of over 200 Latin</a></h3>
                                                    <p>Morbi in erat laoreet, eleifend mi sit amet, eleifend mauris. Duis magna turpis, semper ac ligula id, elementum hendrerit augue. Aliquam euismod sem ut justo ultrices, in eleifend sapien hendrerit. Vestibulum sollicitudin dapibus aliquet. Suspendisse a commodo ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque bibendum est turpis, at tristique velit. Quisque bibendum est turpis, at tristique velit.</p>
                                                    <a class="btn btn-primary" href="news-events-detail.html">lire la suite</a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="news-list-box">
                                        <div class="single-news-list">
                                            <div class="social-content">
                                                <div class="social-share">
                                                    <ul>
                                                        <li><a href="#."><i class="fa fa-comment"></i> 37</a></li>
                                                        <li><a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a></li>
                                                        <li><a href="#."><i class="fa fa-eye"></i> 180</a></li>
                                                    </ul>
                                                </div>
                                                <div class="social-media">
                                                    <ul>
                                                        <li><a href="#." target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-rss"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figure>
                                                <a href="news-events-detail.html"><img src="images/news-event/news-listing-02.jpg" alt="News &amp; Event"></a>
                                            </figure>
                                            <div class="content-block">
                                                <div class="member-info">
                                                    <div class="content_meta_category">
                                                        <span class="arrow-right"></span>
                                                        <a href="#." rel="category tag">ÉVÉNEMENT</a>
                                                    </div>
                                                    <ul class="news-event-info">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-calendar"></i>
                                                                July 25, 2016
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-clock-o"></i>
                                                                10:15 AM - 10:15 PM 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-map-marker"></i>
                                                                New York, USA
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h3><a href="news-events-detail.html">It uses a dictionary of over 200 Latin</a></h3>
                                                    <p>Morbi in erat laoreet, eleifend mi sit amet, eleifend mauris. Duis magna turpis, semper ac ligula id, elementum hendrerit augue. Aliquam euismod sem ut justo ultrices, in eleifend sapien hendrerit. Vestibulum sollicitudin dapibus aliquet. Suspendisse a commodo ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque bibendum est turpis, at tristique velit. Quisque bibendum est turpis, at tristique velit.</p>
                                                    <a class="btn btn-primary" href="news-events-detail.html">lire la suite</a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="news-list-box">
                                        <div class="single-news-list">
                                            <div class="social-content">
                                                <div class="social-share">
                                                    <ul>
                                                        <li><a href="#."><i class="fa fa-comment"></i> 37</a></li>
                                                        <li><a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a></li>
                                                        <li><a href="#."><i class="fa fa-eye"></i> 180</a></li>
                                                    </ul>
                                                </div>
                                                <div class="social-media">
                                                    <ul>
                                                        <li><a href="#." target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-rss"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figure>
                                                <a href="news-events-detail.html"><img src="images/news-event/news-listing-03.jpg" alt="News &amp; Event"></a>
                                            </figure>
                                            <div class="content-block">
                                                <div class="member-info">
                                                    <div class="content_meta_category">
                                                        <span class="arrow-right"></span>
                                                        <a href="#." rel="category tag">ÉVÉNEMENT</a>
                                                    </div>
                                                    <ul class="news-event-info">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-calendar"></i>
                                                                July 25, 2016
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-clock-o"></i>
                                                                10:15 AM - 10:15 PM 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-map-marker"></i>
                                                                New York, USA
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h3><a href="news-events-detail.html">It uses a dictionary of over 200 Latin</a></h3>
                                                    <p>Morbi in erat laoreet, eleifend mi sit amet, eleifend mauris. Duis magna turpis, semper ac ligula id, elementum hendrerit augue. Aliquam euismod sem ut justo ultrices, in eleifend sapien hendrerit. Vestibulum sollicitudin dapibus aliquet. Suspendisse a commodo ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque bibendum est turpis, at tristique velit. Quisque bibendum est turpis, at tristique velit.</p>
                                                    <a class="btn btn-primary" href="news-events-detail.html">lire la suite </a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="news-list-box">
                                        <div class="single-news-list">
                                            <div class="social-content">
                                                <div class="social-share">
                                                    <ul>
                                                        <li><a href="#."><i class="fa fa-comment"></i> 37</a></li>
                                                        <li><a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a></li>
                                                        <li><a href="#."><i class="fa fa-eye"></i> 180</a></li>
                                                    </ul>
                                                </div>
                                                <div class="social-media">
                                                    <ul>
                                                        <li><a href="#." target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-rss"></i></a></li>
                                                        <li><a href="#." target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figure>
                                                <a href="news-events-detail.html"><img src="images/news-event/news-listing-04.jpg" alt="News &amp; Event"></a>
                                            </figure>
                                            <div class="content-block">
                                                <div class="member-info">
                                                    <div class="content_meta_category">
                                                        <span class="arrow-right"></span>
                                                        <a href="#." rel="category tag">ÉVÉNEMENT</a>
                                                    </div>
                                                    <ul class="news-event-info">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-calendar"></i>
                                                                July 25, 2016
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-clock-o"></i>
                                                                10:15 AM - 10:15 PM 
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-map-marker"></i>
                                                                New York, USA
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <h3><a href="news-events-detail.html">It uses a dictionary of over 200 Latin</a></h3>
                                                    <p>Morbi in erat laoreet, eleifend mi sit amet, eleifend mauris. Duis magna turpis, semper ac ligula id, elementum hendrerit augue. Aliquam euismod sem ut justo ultrices, in eleifend sapien hendrerit. Vestibulum sollicitudin dapibus aliquet. Suspendisse a commodo ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque bibendum est turpis, at tristique velit. Quisque bibendum est turpis, at tristique velit.</p>
                                                    <a class="btn btn-primary" href="news-events-detail.html">lire la suite</a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
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
                                    <aside id="secondary" class="sidebar widget-area">
                                        <div class="widget widget_search">
                                            <h4 class="widget-title" data-control>Rechercher des nouvelles</h4>
                                            <form method="get" action="#." class="form-horizontal search-form">
                                                <input class="form-control" id="inputEmail" placeholder="Search Here" value="" name="s" type="text">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                        <div class="widget widget_related_search">
                                            <h4 class="widget-title" data-control>recherches associées</h4>
                                            <div class="widget_categories">
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
                                        <div class="widget widget_recent_entries">
                                            <h4 class="widget-title" data-control>Recent News</h4>
                                            <ul>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-04.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">It uses a dictionary</a>
                                                    <span><i class="fa fa-calendar"></i> &nbsp; July 25, 2016</span>
                                                    <span><i class="fa fa-clock-o"></i> &nbsp; 10:15 AM - 10:15 PM</span>
                                                    <span><i class="fa fa-map-marker"></i> &nbsp; New York, USA</span>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-05.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">It uses a dictionary</a>
                                                    <span><i class="fa fa-calendar"></i> &nbsp; July 25, 2016</span>
                                                    <span><i class="fa fa-clock-o"></i> &nbsp; 10:15 AM - 10:15 PM</span>
                                                    <span><i class="fa fa-map-marker"></i> &nbsp; New York, USA</span>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="images/order-item-06.jpg" alt="product" />
                                                    </figure>
                                                    <a href="#">It uses a dictionary</a>
                                                    <span><i class="fa fa-calendar"></i> &nbsp; July 25, 2016</span>
                                                    <span><i class="fa fa-clock-o"></i> &nbsp; 10:15 AM - 10:15 PM</span>
                                                    <span><i class="fa fa-map-marker"></i> &nbsp; New York, USA</span>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="widget widget_archives">
                                            <h4 class="widget-title" data-control>News Archives</h4>
                                            <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                                <div class="form-group">
                                                    <select name="month" id="month" class="form-control">
                                                        <option>Sélectionnez un mois</option>
                                                        <option>mois 01</option>
                                                        <option>mois 02</option>
                                                        <option>mois 03</option>
                                                        <option>mois 04</option>
                                                        <option>mois 05</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="widget widget_tag_cloud">
                                            <h4 class="widget-title" data-control>Mots clés</h4>
                                            <ul>
                                                <li><a href="#">Fashion</a></li>
                                                <li><a href="#">Life Style</a></li>
                                                <li><a href="#">Beauty</a></li>
                                                <li><a href="#">Music</a></li>
                                                <li><a href="#">Health</a></li>
                                                <li><a href="#">Travel</a></li>
                                                <li><a href="#">Library</a></li>
                                            </ul>
                                        </div>
                                        <div class="widget twitter-widget">
                                            <h3 class="footer-widget-title">Tweets récents</h3>
                                            <span class="underline left"></span>
                                            <div id="twitter-feed-sidebar">
                                                <ul>
                                                    <li>
                                                        <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                                    </li>
                                                    <li>
                                                        <p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->
<?php
    include_once "footer.php";
?>
