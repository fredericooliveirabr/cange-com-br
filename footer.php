<!-- Footer 
        <footer class="footer-purple backgroud-purple"> -->
<footer class="bg-purple">

    <!--
            Newsletter
            <div class="container text-center mb-6">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card border-0 py-5 px-3 bg-primary shadow-lg">
                            <h2 class="font-weight-bold text-white">Get Top Insights and News<br>from our Experts</h2>
                            <p class="font-weight-semibold mb-4 text-light">Delivered straight to your inbox weekly</p>
                            <form>
                                <div class="form-row justify-content-center">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input class="form-control" type="email" id="email" placeholder="Your email address" aria-describedby="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="#" class="btn btn-danger btn-block">Subscribe</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            -->

    <div class="container">
        <div class="row justify-content-lg-between pb-5">
            <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
                <a href="<?= isset($base_path) ? $base_path : './' ?>index" class="d-block pb-6">
                    <img class="img-fluid" src="<?= isset($base_path) ? $base_path : './' ?>images/logos/cange_logo_black.png" alt="logo">
                </a>
            </div>

            <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                <h5 data-i18n="footer.company">Empresa</h5>
                <ul class="nav-footer nav nav-x-0 flex-column">
                    <li><a href="<?= isset($base_path) ? $base_path : './' ?>sobre-nos" data-i18n="footer.about_us">Sobre nós</a></li>
                    <li><a href="<?= isset($base_path) ? $base_path : './' ?>termo-de-uso" data-i18n="footer.terms_of_use">Termo de uso</a></li>
                    <li><a href="<?= isset($base_path) ? $base_path : './' ?>politica-de-privacidade" data-i18n="footer.privacy_policy">Política de
                            privacidade</a></li>
                    <li><a href="<?= isset($base_path) ? $base_path : './' ?>parceiros" data-i18n="footer.partners">Cange Partners</a></li>
                    <li>
                        <a href="#"><span data-i18n="footer.careers">Vagas</span> <span class="badge badge-danger ml-1"
                                data-i18n="footer.hiring">Estamos contratando</span></a>
                    </li>
                </ul>
            </div>

            <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                <h5 data-i18n="footer.product">Produto</h5>

                <ul class="nav-footer nav nav-x-0 flex-column">
                    <li><a href="<?= isset($base_path) ? $base_path : './' ?>precos" data-i18n="footer.pricing">Preços</a></li>
                    <li><a href="<?= isset($base_path) ? $base_path : './' ?>integracoes" data-i18n="footer.integrations">Integrações</a></li>
                    <li><a href="#"><span data-i18n="footer.automations">Automações</span> <span
                                class="badge badge-primary ml-1" data-i18n="footer.coming_soon">Em breve</span></a></li>
                    <li><a href="#"><span data-i18n="footer.solutions">Soluções</span> <span
                                class="badge badge-primary ml-1" data-i18n="footer.coming_soon">Em breve</span></a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3 col-lg">
                <h5 data-i18n="footer.help">Ajuda</h5>

                <ul class="nav-footer nav nav-x-0 flex-column">
                    <li><a href="<?= isset($base_path) ? $base_path : './' ?>contato" data-i18n="footer.support">Suporte</a></li>
                    <li><a href="https://www.cange.com.br/content" data-i18n="footer.manuals">Manuais</a></li>
                    <li><a href="https://docs.cange.me" data-i18n="footer.api">API</a></li>
                </ul>
            </div>
        </div>


        <!--<div class="col-6 col-md-3 col-lg">
                        <h5>Help</h5>

                        <ul class="nav nav-x-0 flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Getting started</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Feedback</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Referral program</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
                        </ul>
                    </div>
                    -->
    </div>

    <hr class="m-0">

    <div class="pt-5">
        <div class="row justify-content-lg-center text-lg-center">
            <div class="col-xl-8 col-lg-9">
                <p class="small" data-i18n="footer.copyright">© CANGE. All rights reserved.</p>
                <img src="<?= isset($base_path) ? $base_path : './' ?>images/ui/brazil-flag.jpg" style="width: 5%;">
            </div>
        </div>
    </div>
    </div>
</footer>