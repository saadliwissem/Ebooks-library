<?php
    include_once "header.php";
?>
<!-- Start: Page Banner -->
<section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>s'inscrie</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">accueil</a></li>
                        <li>s'inscrie</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="signin-main">
                        <div class="container">
                            <div class="woocommerce">
                                <div class="woocommerce-login">
                                    <div class="company-info signin-register">
                                        <div class="col-md-5 col-md-offset-1 border-dark-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="company-detail bg-dark margin-left">
                                                        <div class="signin-head">
                                                            <h2>connection</h2>
                                                            <span class="underline left"></span>
                                                        </div>
                                                        <form class="login" method="post">
                                                            <p class="form-row form-row-first input-required">
                                                                <label>
                                                                    <span class="first-letter">Code-barres ou nom d'utilisateur</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="text"  id="username" name="username" class="input-text">
                                                             </p>
                                                            <p class="form-row form-row-last input-required">
                                                                <label>
                                                                    <span class="first-letter">mot de passe</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="password" id="password" name="password" class="input-text">
                                                            </p>
                                                            <div class="clear"></div>
                                                            <div class="password-form-row">
                                                                <p class="form-row input-checkbox">
                                                                    <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                                                                    <label class="inline" for="rememberme"> me remémorer</label>
                                                                </p>
                                                                <p class="lost_password">
                                                                    <a href="#">mot de passe oublier?</a>
                                                                </p>
                                                            </div>
                                                            <input type="submit" value="Login" name="login" class="button btn btn-default">
                                                            <div class="clear"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 border-dark new-user">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="company-detail new-account bg-light margin-right">
                                                        <div class="new-user-head">
                                                            <h2>créer un nouveau compte</h2>
                                                            <span class="underline left"></span>
                                                            <p>Si aucun code-barres n'a été attribué à votre compte, veuillez contacter la bibliothèque.</p>
                                                        </div>
                                                        <form class="login" method="post">
                                                            <p class="form-row form-row-first input-required">
                                                                <label>
                                                                    <span class="first-letter">code à barre</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="text" id="username1" name="username" class="input-text">
                                                            </p>
                                                            <p class="form-row input-required">
                                                                <label>
                                                                    <span class="first-letter">mot de passe</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="password" id="password1" name="password" class="input-text">
                                                            </p>                                                                                
                                                            <div class="clear"></div>
                                                            <input type="submit" value="s'inscrie" name="signup" class="button btn btn-default">
                                                            <div class="clear"></div>
                                                        </form> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Cart Section -->
<?php
    include_once "footer.php";
?>