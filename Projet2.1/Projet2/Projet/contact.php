<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" Content="fr">
        <title>Projet - Coding Pool 3</title>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="script.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Enriqueta|Lobster" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <div class="modal-alert hidden">
            <div class="overlay"></div>
            <div class="modal-content">   
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias vel itaque facere vitae? Consequatur assumenda provident optio soluta beatae suscipit dolorem porro id accusamus. Quidem vitae commodi omnis magni in!</p>
                <button class="confirm-contact">J'accepte</button>
            </div>
        </div>
       
        <header>
            <div class="row center-xs top-xs around-xs">
               <div class="dashed-border header"></div>
                <div class="col-xs-2">
                    <div class="logo">Coding Pool 3</div>
                </div>
                <div class="col-xs-offset-8 col-xs-2">
                    <div class="search">Recherche</div>
                </div>
            </div>
        </header>


        <main>
            <div class="content">
                <section class="row top-xs" id="content">
                    <div class="col-xs-9">
                        <div class="mainContent">
                           <div class="labelTitle">
                               <div class="dashed-border label"></div>
                               <h1>Nous contacter : </h1>
                           </div>
                            <fieldset>
                                <form action="#">
                                    <legend>
                                        <div class="field-form"><label for="name">Nom : </label><input type="text" id="name"></div>
                                        <div class="field-form"><label for="email">E-mail :</label><input type="email" id="email"></div>
                                        <div class="field-form"><label for="">Message : </label><textarea name="message" id="message" cols="30" rows="10"></textarea></div>
                                        <div class="field-options">
                                            <button class="send-btn-form">Envoyer</button>
                                        </div>
                                    </legend>
                                </form>
                            </fieldset>
                        </div>
                    </div>


                    <div class="col-xs-3">
                        <aside>
                            <div id="containerTitleAside">
                                <div class="dashed-border aside"></div>
                                <div class="titleAside">
                                    <h1>Articles populaires</h1>
                                </div>
                            </div>
                            <div class="row" id="articleAside">
                                <div class="col-xs-12">
                                    <div class="imgArticleAside"></div>
                                    <div class="contentAside"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, laudantium in repudiandae error aspernatur quos rem incidunt obcaecati eos minima. Dolore necessitatibus doloremque error, harum voluptas vel labore minima quia.</p></div>
                                </div>
                            </div>  
                            <div class="row" id="articleAside">
                                <div class="col-xs-12">
                                    <div class="imgArticleAside"></div>
                                    <div class="contentAside"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, laudantium in repudiandae error aspernatur quos rem incidunt obcaecati eos minima. Dolore necessitatibus doloremque error, harum voluptas vel labore minima quia.</p></div>
                                </div>
                            </div>  
                            <div class="categories">  
                                <div id="containerTitleAside">
                                    <div class="dashed-border aside"></div>
                                    <div class="titleAside">
                                        <h1 id="categories">Catégories</h1>
                                    </div>
                                </div>
                                <div class="listCategories">
                                    <ul>
                                        <li>Lorem <i>(12)</i></li>
                                        <li>Ipsum <i>(4)</i></li>
                                        <li>Hello <i>(8)</i></li>
                                        <li>World <i>(4)</i></li>
                                    </ul>
                                </div> 
                            </div>

                        </aside>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <section id="items" class="row center-xs">
                <div class="dashed-border footer"></div>
                <div class="col-xs-4">
                    1
                </div>
                <div class="col-xs-4">
                    2
                </div>
                <div class="col-xs-4">
                    3
                </div>
            </section>
            <section id="copyrights" class="row center-xs">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </section>
        </footer>
    </body>
</html>