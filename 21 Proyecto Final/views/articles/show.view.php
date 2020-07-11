<!-- invocando al header usando la constante VIEWS_PATH-->
<?php include VIEWS_PATH . 'head.view.php'; ?>
<!-- incluyendo el header,menu -->
<?php include VIEWS_PATH . 'header.view.php'; ?>


<div class="l-main ed-container">
    <div class="ed-item">
        <h1>Polo Escuela Digital Desde Cero</h1>
        <div class="ed-container product__page">
            <div class="ed-item tablet-50"><img src="<?= PUBLIC_PATH ?>img/ed1.jpg" class="product__page__img"/></div>
            <div class="ed-item tablet-50 product__page__description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas feugiat dolor. Quisque eget eros quis neque egestas ultricies. Aliquam porttitor metus ut egestas consequat. Nullam vel dui in justo scelerisque egestas. Cras non facilisis justo. Nunc in faucibus risus. Pellentesque felis diam, condimentum vitae mattis ut, sollicitudin a libero. Pellentesque malesuada pharetra justo, nec fringilla tortor adipiscing at. Maecenas accumsan, enim id mattis blandit, urna enim bibendum est, at volutpat massa neque vitae libero. Phasellus cursus leo hendrerit neque consequat gravida.
                <div class="ed-container product__page__data">
                    <div class="ed-item main-center">
                        <h3 class="product__page__size">Talla: L</h3>
                    </div>
                    <div class="ed-item main-center">
                        <h3 class="product__page__color">Color: negro</h3>
                    </div>
                    <div class="ed-item main-center"><a href="#" class="boton icon-cart espacio product__page__buy">Comprar</a></div>
                    <div class="ed-item main-center product__page__share">
                        <!--Created by Álvaro on 11/3/2016.
                        -->
                        <div class="sociales"><a href="http://facebook.com" class="icon-facebook"></a><a href="http://twitter.com" class="icon-twitter"></a><a href="http://instagram.com" class="icon-instagram"></a><a href="http://pinterest.com" class="icon-pinterest"></a></div>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Importando el footer-->
<?php include VIEWS_PATH . 'footer.view.php'; ?>
