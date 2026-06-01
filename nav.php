<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light py-2 py-lg-0">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <a class="navbar-brand font-weight-semibold" href="<?= isset($base_path) ? $base_path : './'?>index">
            <img class="img-fluid" src="<?= isset($base_path) ? $base_path : './'?>images/logos/cange_logo.png"
                alt="Cange">
        </a>
        <a href="https://app.cange.me/onboarding" class="btn btn-standard btn-sm d-lg-none border-0 waves-effect" data-i18n="cta.test_now">Teste agora</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="p-3 border-bottom sticky-top bg-white d-block d-lg-none">
                <h5 class="font-weight-semibold mb-0">Menu</h5>
                <button class="navbar-toggler navbar-closer d-lg-none" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <i class="icon-x"></i>
                </button>
            </div>

            <ul class="navbar-nav mx-auto">

                <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="<?= isset($base_path) ? $base_path : './'?>index">
                        <span data-i18n="nav.home">Inicial</span>
                    </a>
                </li>

                <!-- Soluções 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSolucoes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span data-i18n="nav.solutions">Soluções</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownSolucoes">
                        <a class="dropdown-item" href="<?= isset($base_path) ? $base_path : './'?>solucoes/rh">RH</a>
                        <a class="dropdown-item" href="#">Contas a pagar</a>
                    </div>
                </li>
                -->


                <!-- Novidades -->

                <li class="nav-item ">
                    <a class="nav-link" href="https://www.cange.com.br/content">
                        <span data-i18n="nav.help_manuals">Manuais</span>
                    </a>

                </li>

                <li class="nav-item ">
                    <a class="nav-link " href="<?= isset($base_path) ? $base_path : './'?>precos">
                        <span data-i18n="nav.pricing">Preços</span>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link " href="<?= isset($base_path) ? $base_path : './'?>parceiros">
                        <span data-i18n="nav.partners">Partners</span>
                    </a>
                </li>

                <!-- Docs -->
                <li class="nav-item ">
                    <a class="nav-link " href="<?= isset($base_path) ? $base_path : './'?>contato">
                        <span data-i18n="nav.contact">Contato</span>
                    </a>
                </li>

                <!-- CTAs mobile -->
                <li class="nav-item d-lg-none mt-3 px-3 pb-2">
                    <div class="d-flex flex-column gap-2">
                        <a href="https://app.cange.me/" class="btn btn-white btn-sm border waves-effect mb-2" data-i18n="nav.enter">Entrar</a>
                        <a href="https://app.cange.me/onboarding" class="btn btn-standard btn-sm border-0 waves-effect mb-2" data-i18n="cta.test_now">Teste agora</a>
                        <a href="https://wa.me/555121600946" class="btn btn-outline-primary btn-sm waves-effect"><img src="<?= isset($base_path) ? $base_path : './'?>images/icons/whatsapp-icon.png" alt="WhatsApp" style="width: 18px; height: 18px; margin-right: 6px;"><span data-i18n="cta.schedule_demo">Agendar demo</span></a>
                    </div>
                </li>
            </ul>

            <!-- Language Selector -->
            <div class="dropdown d-inline-block mr-2">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="languageDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-globe"></i> <span id="current-lang-label-basic">PT</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                    <a class="dropdown-item" href="#" onclick="i18n.setLanguage('pt-BR'); return false;"
                        data-i18n="lang.portuguese">Português</a>
                    <a class="dropdown-item" href="#" onclick="i18n.setLanguage('en'); return false;"
                        data-i18n="lang.english">English</a>
                    <a class="dropdown-item" href="#" onclick="i18n.setLanguage('es'); return false;"
                        data-i18n="lang.spanish">Español</a>
                    <a class="dropdown-item" href="#" onclick="i18n.setLanguage('de'); return false;"
                        data-i18n="lang.german">Deutsch</a>
                    <a class="dropdown-item" href="#" onclick="i18n.setLanguage('it'); return false;"
                        data-i18n="lang.italian">Italiano</a>
                </div>
            </div>

            <a id="print-one" href="https://app.cange.me/"
                class="btn btn-white btn-sm d-none d-lg-block border hover-lift mx-2 waves-effect"
                data-i18n="nav.enter">Entrar</a>
            <a href="https://app.cange.me/onboarding"
                class="btn btn-standard btn-sm d-none d-lg-block border-0 hover-lift mx-2 waves-effect"
                data-i18n="cta.test_now">Teste agora</a>
        </div>
    </div>
</nav>

<!-- Black November Cange 25% OFF 
            <section class="py-6">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="https://app.cange.me/onboarding/black-november-25-off-br" >
                                <img src="./images/marketing/CANGE_11ADS Nov-BannerAcimaHero.png" alt="Black November Cange 25% OFF" style="border-radius: 10px; width: 90%; height: auto;" />
                            </a>
                        </div>
                    </div>
                </div>
            </section>
             End Black November Cange 25% OFF -->