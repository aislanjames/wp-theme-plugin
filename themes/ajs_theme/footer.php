<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AJS_Theme
 */

?>

<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Localização</h4>
                <p class="lead mb-0">
                    Petrópolis / RJ
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Na Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/aislan-james"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/aislanjames"><i class="fab fa-fw fa-github"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Dedicatória</h4>
                <p class="lead mb-0">
                    Ao meu amor quando possível,
                    <br>aos meus sobrinhos quando me esforço
                    <br>e aos meus pais sempre!
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; Aislan James 2024</small></div>
</div>
<!-- Portfolio Modals-->
<?php
$modals = ['cabin', 'cake', 'circus_tent', 'controller', 'locked_safe', 'submarine'];
foreach ($modals as $modal) {
    get_template_part('template-parts/modals/' . $modal);
}
?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        -->
</body>

</html>