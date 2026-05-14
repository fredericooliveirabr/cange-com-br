<!DOCTYPE html>
<html lang="pt-br">

<?php
include "head.php";
?>

<body>
    <div class="main-content">
        <?php
include "nav.php";
?>

        <!-- Main content -->
        <main>
            <section class="py-6">
                <div class="container">
                    <div class="row justify-content-center text-center" data-aos="fade-up">
                        <div class="col-12">
                            <h1 class="font-weight-bold" data-i18n="pricing.title">Precificação simples<br> transparente
                                e acessível.</h1>
                        </div>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="50">
                        <div class="col-12">
                            <div class="w-lg-75 mt-sm-4 mx-auto">
                                <div class="row row-cols-md-3 justify-content-center text-center row-cols-sm-2">
                                    <div class="col-lg">
                                        <div class="media align-items-center p-sm-2">
                                            <div
                                                class="iconbox icon-md rounded-circle iconbox-soft-primary mr-2 mr-sm-3 d-none d-sm-flex">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0)">
                                                        <path
                                                            d="M20.479 3.53168C15.9276 -1.09979 8.30457 -1.25219 3.52622 3.52625C-1.16998 8.2224 -1.17841 15.7633 3.52092 20.4683C8.0723 25.0998 15.6954 25.2521 20.4737 20.4737C25.1699 15.7776 25.1783 8.23669 20.479 3.53168V3.53168ZM12 1.40852C14.6676 1.40852 17.1077 2.40027 18.9719 4.03389L16.2078 6.79798H5.90752C4.74466 6.79798 3.7986 7.74405 3.7986 8.9069V15.0931C3.7986 16.222 4.6903 17.1465 5.80638 17.1994L4.03386 18.9719C2.40024 17.1077 1.40848 14.6676 1.40848 12C1.40848 6.15982 6.15979 1.40852 12 1.40852V1.40852ZM18.0924 8.20393C18.48 8.20393 18.7954 8.51928 18.7954 8.9069V9.79734H15.1968L16.7902 8.20393H18.0924ZM5.90752 15.796C5.5199 15.796 5.20454 15.4807 5.20454 15.0931V11.2033H11.8025L10.2091 12.7967H7.50093C7.1127 12.7967 6.79795 13.1114 6.79795 13.4997C6.79795 13.8879 7.1127 14.2026 7.50093 14.2026H8.80316L7.20975 15.796H5.90752ZM5.20454 9.79734V8.9069C5.20454 8.51928 5.5199 8.20393 5.90752 8.20393H14.8019L13.2085 9.79734H5.20454ZM13.7908 11.2033H18.7954V15.0931C18.7954 15.4807 18.48 15.796 18.0924 15.796H9.19805C11.8981 13.0959 6.67929 18.3148 13.7908 11.2033ZM12 22.5915C9.33231 22.5915 6.8922 21.5997 5.028 19.9661L7.7921 17.202H18.0924C19.2553 17.202 20.2013 16.2559 20.2013 15.0931V8.9069C20.2013 7.77798 19.3096 6.85352 18.1935 6.80056L19.9661 5.02804C21.5997 6.89228 22.5914 9.33234 22.5914 12C22.5914 17.8401 17.8401 22.5915 12 22.5915Z"
                                                            fill="currentColor" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>

                                            <div class="media-body text-muted" data-i18n="pricing.try_no_card">
                                                Teste sem cartão de crédito
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="media align-items-center p-sm-2">
                                            <div
                                                class="iconbox icon-md rounded-circle iconbox-soft-success mr-2 mr-sm-3 d-none d-sm-flex">
                                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clipTwo)">
                                                        <path
                                                            d="M20.5 2H19.5C19.224 2 19 2.22402 19 2.50002C19 2.77602 19.224 2.99998 19.5 2.99998H20.5C21.879 2.99998 23 4.121 23 5.49997V20.5C23 21.879 21.879 23 20.5 23H3.50002C2.121 23 1.00003 21.8789 1.00003 20.5V5.49997C0.999984 4.121 2.121 2.99998 3.50002 2.99998H4.5C4.776 2.99998 5.00002 2.77597 5.00002 2.49997C5.00002 2.22397 4.776 2 4.5 2H3.50002C1.56998 2 0 3.56998 0 5.49997V20.5C0 22.43 1.56998 24 3.50002 24H20.5C22.43 24 24 22.43 24 20.5V5.49997C24 3.56998 22.43 2 20.5 2Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M15.5001 2H8.50002C8.22402 2 8 2.22402 8 2.50002C8 2.77602 8.22402 2.99998 8.50002 2.99998H15.5C15.776 2.99998 16 2.77597 16 2.49997C16 2.22397 15.7761 2 15.5001 2Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M23.5 7H0.500016C0.224016 7 0 7.22402 0 7.50002C0 7.77602 0.224016 8.00003 0.500016 8.00003H23.5C23.776 8.00003 24 7.77602 24 7.50002C24 7.22402 23.776 7 23.5 7Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M6.50002 0C6.22402 0 6 0.224016 6 0.500016V4.5C6 4.776 6.22402 5.00002 6.50002 5.00002C6.77602 5.00002 7.00003 4.776 7.00003 4.5V0.500016C6.99998 0.224016 6.77602 0 6.50002 0Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M17.5 0C17.224 0 17 0.224016 17 0.500016V4.5C17 4.776 17.224 5.00002 17.5 5.00002C17.776 5.00002 18 4.776 18 4.5V0.500016C18 0.224016 17.776 0 17.5 0Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M7.75304 20.853C9.9583 20.853 11.5355 19.6401 11.5307 17.9622C11.5355 16.7397 10.7589 15.8672 9.3159 15.685V15.6083C10.4137 15.4118 11.1712 14.6351 11.1664 13.5325C11.1712 11.984 9.81448 10.7664 7.78181 10.7664C5.76831 10.7664 4.2534 11.9457 4.22463 13.6428H6.21416C6.23813 12.8949 6.92367 12.4107 7.77222 12.4107C8.61117 12.4107 9.17207 12.9189 9.16728 13.6572C9.17207 14.429 8.51529 14.9515 7.57087 14.9515H6.65521V16.476H7.57087C8.68308 16.476 9.37822 17.0322 9.37342 17.8232C9.37822 18.6046 8.70705 19.1415 7.75783 19.1415C6.84217 19.1415 6.15663 18.6621 6.11827 17.943H4.02808C4.06163 19.6593 5.59573 20.853 7.75304 20.853Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16.0625 20.9345C18.5314 20.9345 20.0224 19.0552 20.0272 15.8193C20.032 12.6073 18.5218 10.7664 16.0625 10.7664C13.5984 10.7664 12.1026 12.6025 12.0978 15.8193C12.0882 19.0456 13.5888 20.9297 16.0625 20.9345ZM16.0625 19.2134C14.9359 19.2134 14.2072 18.082 14.212 15.8193C14.2168 13.59 14.9407 12.4682 16.0625 12.4682C17.1795 12.4682 17.9082 13.59 17.9082 15.8193C17.913 18.082 17.1843 19.2134 16.0625 19.2134Z"
                                                            fill="currentColor" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clipTwo">
                                                            <rect width="48" height="48" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>

                                            <div class="media-body text-muted" data-i18n="pricing.seven_days_free">
                                                7 dias totalmente grátis
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="media align-items-center p-sm-2">
                                            <div
                                                class="iconbox icon-md rounded-circle iconbox-soft-danger mr-2 mr-sm-3 d-none d-sm-flex">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.49994 18.9999H2.75006C1.23303 18.9999 0 17.767 0 16.25V4.74988C0 3.23285 1.23303 2 2.75006 2H17.25C18.767 2 20.0001 3.23285 20.0001 4.74988V8.75C20.0001 9.164 19.6641 9.5 19.2501 9.5C18.8361 9.5 18.5001 9.16492 18.5001 8.75V4.74988C18.5001 4.06085 17.939 3.5 17.25 3.5H2.75006C2.06104 3.5 1.5 4.06085 1.5 4.74988V16.25C1.5 16.939 2.06104 17.4999 2.75006 17.4999H8.49994C8.91394 17.4999 9.24994 17.8359 9.24994 18.2499C9.24994 18.6639 8.91394 18.9999 8.49994 18.9999V18.9999Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M19.2501 7.5H0.75C0.335999 7.5 0 7.164 0 6.75C0 6.336 0.335999 6 0.75 6H19.2501C19.6641 6 20.0001 6.336 20.0001 6.75C20.0001 7.164 19.6641 7.5 19.2501 7.5Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M4.75 5.49994C4.336 5.49994 4 5.16394 4 4.74994V0.75C4 0.335999 4.336 0 4.75 0C5.164 0 5.5 0.335999 5.5 0.75V4.74994C5.5 5.16394 5.164 5.49994 4.75 5.49994Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15.25 5.49994C14.836 5.49994 14.5 5.16394 14.5 4.74994V0.75C14.5 0.335999 14.836 0 15.25 0C15.664 0 16 0.335999 16 0.75V4.74994C16 5.16394 15.664 5.49994 15.25 5.49994Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M17.4999 23.9999C13.916 23.9999 11 21.084 11 17.4999C11 13.916 13.916 11 17.4999 11C21.084 11 23.9999 13.916 23.9999 17.4999C23.9999 21.084 21.084 23.9999 17.4999 23.9999V23.9999ZM17.4999 12.5C14.7429 12.5 12.5 14.7429 12.5 17.4999C12.5 20.2569 14.7429 22.4999 17.4999 22.4999C20.2569 22.4999 22.4999 20.2569 22.4999 17.4999C22.4999 14.7429 20.2569 12.5 17.4999 12.5V12.5Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M19.4439 20.1939C19.252 20.1939 19.06 20.1208 18.914 19.974L15.025 16.085C14.7319 15.7919 14.7319 15.3169 15.025 15.0239C15.318 14.731 15.793 14.731 16.086 15.0239L19.9749 18.9129C20.2679 19.2059 20.2679 19.681 19.9749 19.974C19.8279 20.1208 19.6369 20.1939 19.4439 20.1939V20.1939Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15.5561 20.1939C15.364 20.1939 15.1719 20.1208 15.026 19.974C14.733 19.681 14.733 19.2059 15.026 18.9129L18.915 15.0239C19.2079 14.731 19.6829 14.731 19.9761 15.0239C20.269 15.3169 20.269 15.7919 19.9761 16.085L16.0869 19.974C15.939 20.1208 15.748 20.1939 15.5561 20.1939V20.1939Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>

                                            <div class="media-body text-muted" data-i18n="pricing.cancel_anytime">
                                                Cancele a qualquer momento
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Plans -->
            <section class="pb-6">
                <div class="container">
                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 mb-5 justify-content-center">
                        <div class="col mb-4 mb-xl-0" data-aos="fade-up" data-aos-delay="50">
                            <div
                                class="card card-accent-top accent-warning shadow-smooth-1 border border-hover-warning hover-scale h-100">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h2 class="font-weight-bold my-5" data-i18n="pricing.plus">Plus</h2>
                                        <h3 class="h1 font-weight-bold"><span
                                                data-i18n="pricing.plus_price">R$45</span><span class="font-size-lg"
                                                data-i18n="pricing.per_month">/mês</span></h3>
                                        <p data-i18n="pricing.plus_annual">R$29,99/mês no anual</p>
                                        <p data-i18n="pricing.per_user">Valor por usuário</p>

                                        <button class="btn btn-primary waves-effect my-5"
                                            onclick="window.location.href='https://app.cange.me/onboarding/newsite-button-header?&src=null-null-null-null-null'"
                                            data-i18n="pricing.start_now">Comece agora</button>

                                    </div>


                                </div>

                                <div class="card-body border-top">
                                    <ul class="list-unstyled">
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.plus_users">Mínimo 4 usuários</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.plus_flows">15 fluxos</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.plus_registers">10 cadastros</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.plus_connections">10 conexões</p>
                                                <small data-i18n="pricing.connect_flow_register">Contecte fluxo com
                                                    cadastro</small>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.plus_storage">30GB de armazenamento</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.unlimited_cards">Cartões ilimitados</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.three_workspaces">3 workspaces</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.flow_dashboards">Dashboards nos fluxos</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.step_conditionals">Condicionais de etapa</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.smart_forms">Formulários inteligentes</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.autocomplete">Auto completar</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.custom_views">Visualizações customizáveis</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4 mb-xl-0" data-aos="fade-up" data-aos-delay="100">
                            <div
                                class="card card-accent-top accent-danger shadow-smooth-1 border border-hover-danger hover-scale h-100">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h2 class="font-weight-bold my-5" data-i18n="pricing.professional">Professional
                                        </h2>
                                        <h3 class="h1 font-weight-bold"><span
                                                data-i18n="pricing.professional_price">R$75</span><span
                                                class="font-size-lg" data-i18n="pricing.per_month">/mês</span></h3>
                                        <p data-i18n="pricing.professional_annual">R$49,99/mês no anual</p>
                                        <p data-i18n="pricing.per_user">Valor por usuário</p>
                                        <button class="btn btn-primary waves-effect my-5"
                                            onclick="window.location.href='https://app.cange.me/onboarding/newsite-button-header?&src=null-null-null-null-null'"
                                            data-i18n="pricing.start_now">Começar agora</button>
                                    </div>

                                </div>

                                <div class="card-body border-top">
                                    <ul class="list-unstyled">
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.all_plus_features">Todos os
                                                    recursos do Plus</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.unlimited_flows">Fluxos
                                                    ilimitados</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.unlimited_registers">Cadastros
                                                    ilimitados</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.unlimited_connections">Conexões
                                                    ilimitadas</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.professional_storage">100GB de
                                                    armazenamento</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.unlimited_workspaces">Workspaces
                                                    ilimitados</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.automations">Automações</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.time_tracking">Time
                                                    Tracking</p>
                                                <small data-i18n="pricing.time_tracking_desc">Apontamento de
                                                    horas</small>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.insights_panel">Painel de
                                                    Insights</p>
                                                <small data-i18n="pricing.productivity_analysis">Análise de
                                                    produtividade</small>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.native_integrations">
                                                    Integrações nativas</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.open_apis">APIs
                                                    abertas</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col mb-4 mb-xl-0" data-aos="fade-up" data-aos-delay="150">
                            <div
                                class="card card-accent-top accent-primary shadow-smooth-1 border border-hover-primary hover-scale h-100">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h2 class="font-weight-bold my-5" data-i18n="pricing.enterprise">Enterprise</h2>
                                        <h3 class="h1 font-weight-bold" data-i18n="pricing.custom">Custom</h3>
                                        <p data-i18n="pricing.enterprise_users">Mínimo 10 usuários</p>
                                        <p data-i18n="pricing.per_user">Valor por usuário</p>
                                        <button class="btn btn-white waves-effect my-5"
                                            onclick="window.location.href='https://wa.me/551151948185'"
                                            data-i18n="pricing.contact_sales">Fale com
                                            vendas</button>

                                    </div>
                                </div>

                                <div class="card-body border-top">
                                    <ul class="list-unstyled">
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.all_professional_features">Todos os
                                                    recursos do Professional</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.custom_storage">
                                                    Armazenamento personalizado</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.corporate_support">Suporte
                                                    corporativo</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.brand_customization">
                                                    Personalização da marca</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.cange_ai">Cange AI</p>
                                                <small data-i18n="pricing.ai_assistant">Assistente de Inteligência
                                                    Artificial</small>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.public_portal">Portal
                                                    público</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-xl-center mb-3 mb-lg-4">
                                            <svg class="text-success mr-3" enable-background="new 0 0 24 24" height="24"
                                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentColor"
                                                        d="m9.707 19.121c-.187.188-.442.293-.707.293s-.52-.105-.707-.293l-5.646-5.647c-.586-.586-.586-1.536 0-2.121l.707-.707c.586-.586 1.535-.586 2.121 0l3.525 3.525 9.525-9.525c.586-.586 1.536-.586 2.121 0l.707.707c.586.586.586 1.536 0 2.121z" />
                                                </g>
                                            </svg>
                                            <div class="content">
                                                <p class="font-size-sm line-height-1 font-weight-medium mb-0"
                                                    data-i18n="pricing.enterprise_api">API
                                                    Enterprise</p>
                                            </div>
                                        </li>
                                    </ul>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center text-center text-gray-500" data-aos="fade-up">
                        <div class="col-12 text-size-small">
                            <p data-i18n="pricing.tax_disclaimer">Preço final em BRL, com impostos já inclusos.</p>
                            <!--<img class="img-fluid" src="./images/media/payment-accepted.jpg" alt="">-->
                        </div>
                    </div>
                </div>
            </section>


            <!-- Plan Comparision -->
            <div class="py-6">
                <div class="container">
                    <div class="table-responsive-lg" data-aos="fade-up">
                        <table class="table table-lg table-hover table-borderless bg-white">
                            <thead class="border-bottom">
                                <tr class="text-center">
                                    <th scope="col" class="text-left">
                                        <div class="mb-5">
                                            <div class="h4 font-weight-bold" data-i18n="pricing.choose_plan">Escolha seu
                                                plano</div>
                                            <p class="font-weight-normal text-muted font-size-sm d-lg-none"
                                                data-i18n="pricing.scroll_for_plans">Role para
                                                ver os planos --></p>
                                        </div>
                                    </th>
                                    <th scope="col" class="text-center text-nowrap">
                                        <div class="h4 font-weight-bold mb-0" data-i18n="pricing.plus">Plus</div>
                                        <p class="font-weight-normal text-muted"><span
                                                data-i18n="pricing.plus_price">R$45</span><span
                                                data-i18n="pricing.per_month">/mês</span><br><span
                                                data-i18n="pricing.plus_annual">R$ 29,99/mês no anual</span></p>
                                        <a href="https://app.cange.me/onboarding/newsite-button-header?&src=null-null-null-null-null"
                                            class="btn btn-white btn-sm waves-effect mt-3" role="button"
                                            data-i18n="pricing.start">Começar</a>
                                    </th>
                                    <th scope="col" class="text-center text-nowrap">
                                        <div class="h4 font-weight-bold mb-0" data-i18n="pricing.professional">
                                            Professional</div>
                                        <p class="font-weight-normal text-muted"><span
                                                data-i18n="pricing.professional_price">R$75</span><span
                                                data-i18n="pricing.per_month">/mês</span><br><span
                                                data-i18n="pricing.professional_annual">$49,99/mês no anual</span></p>
                                        <a href="https://app.cange.me/onboarding/newsite-button-header?&src=null-null-null-null-null"
                                            class="btn btn-primary btn-sm waves-effect mt-3" role="button"
                                            data-i18n="pricing.start">Começar</a>
                                    </th>
                                    <th scope="col" class="text-center text-nowrap">
                                        <div class="h4 font-weight-bold mb-0" data-i18n="pricing.enterprise">Enterprise
                                        </div>
                                        <p class="font-weight-normal text-muted"><span
                                                data-i18n="pricing.custom">Custom</span><br><span
                                                data-i18n="pricing.enterprise_users">Mínimo 10 users</span></p>
                                        <a href="https://wa.me/551151948185"
                                            class="btn btn-white btn-sm waves-effect mt-3" role="button"
                                            data-i18n="pricing.talk_to_sales">Falar com
                                            vendas</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom bg-light">
                                    <th scope="row" class="h6 py-3 font-weight-semibold text-nowrap border-0 mb-0"
                                        data-i18n="pricing.essentials">
                                        Essenciais</th>

                                    <td class="py-3 border-0"></td>
                                    <td class="py-3 border-0"></td>
                                    <td class="py-3 border-0"></td>
                                </tr>
                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.process_flow">Fluxo de processos ou projetos</span></th>

                                    <td class="text-center">15</td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.registers">Cadastros</span></th>

                                    <td class="text-center">10</td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.cards">Cartões</span>
                                        <span class="badge badge-light border rounded-circle hw-18"
                                            data-toggle="popover" role="button" data-trigger="hover"
                                            data-placement="top" data-i18n="[data-content]pricing.max_monthly_volume"
                                            data-content="Volume máxinmo mensal">?</span>
                                    </th>

                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.dashboards">Painéis (Dashboards)</span>
                                        <span class="badge badge-light border rounded-circle hw-18"
                                            data-toggle="popover" role="button" data-trigger="hover"
                                            data-placement="top" data-i18n="[data-content]pricing.dashboards_per_flow"
                                            data-content="Quantidade de painéis por fluxo">?</span>
                                    </th>

                                    <td class="text-center">1</td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>



                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.workspaces">Workspaces</span></th>

                                    <td class="text-center">3</td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.records_per_register">Registros por cadastro</span></th>

                                    <td class="text-center">3.000</td>
                                    <td class="text-center">20.000</td>
                                    <td class="text-center">100.000</td>
                                </tr>


                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.connections_between">Conexões entre fluxos e/ou
                                            cadastros</span></th>

                                    <td class="text-center" data-i18n="pricing.ten_connections">10 conexões</td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.file_storage">Armazenamento de arquivos</span></th>

                                    <td class="text-center">30 GB</td>
                                    <td class="text-center">100 GB</td>
                                    <td class="text-center" data-i18n="pricing.custom">Personalizado</td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.custom_views">Visualizações customizáveis</span></th>

                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.public_pages">Páginas públicas</span></th>

                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr class="border-top border-bottom bg-light">
                                    <th scope="row" class="h6 py-3 font-weight-semibold border-0 mb-0"
                                        data-i18n="pricing.automations_integrations">Automações e
                                        Integrações</th>

                                    <td class="py-3 border-0"></td>
                                    <td class="py-3 border-0"></td>
                                    <td class="py-3 border-0"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.conditionals">Condicionais de etapa ou formulários</span>
                                        <span class="badge badge-light border rounded-circle hw-18"
                                            data-toggle="popover" role="button" data-trigger="hover"
                                            data-placement="top" data-i18n="[data-content]pricing.possible_rules"
                                            data-content="Volume de regras possíveis">?</span>
                                    </th>

                                    <td class="text-center"><span data-i18n="pricing.up_to_50">Até 50 regras</span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.autocomplete_fields">Autocompletar campos</span>
                                        <span class="badge badge-light border rounded-circle hw-18"
                                            data-toggle="popover" role="button" data-trigger="hover"
                                            data-placement="top" data-i18n="[data-content]pricing.possible_rules"
                                            data-content="Volume de regras possíveis">?</span>
                                    </th>

                                    <td class="text-center"><span data-i18n="pricing.up_to_50">Até 50 regras</span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.custom_fields">Campos customizáveis</span></th>

                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.automation_executions">Execuções de automação</span></th>

                                    <td class="text-center" data-i18n="pricing.up_to_300">Até 300</td>
                                    <td class="text-center" data-i18n="pricing.up_to_5000">Até 5.000</td>
                                    <td class="text-center"><span data-i18n="pricing.custom">Personalizado</span></td>
                                </tr>

                                <!--
                                <tr>
                                    <th class="font-weight-normal" scope="row">Execuções de integrações nativas</th>
                                    <td class="text-center">-</td>
                                    <td class="text-center">Até 300</td>
                                    <td class="text-center">Até 5.000</td>
                                    <td class="text-center">Personalizado</span></td>
                                </tr>
-->

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.api_integrations">Integrações via API</span></th>

                                    <td class="text-center">-</td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.email_send_receive">Envio e recebimento de e-mails</span>
                                    </th>

                                    <td class="text-center" data-i18n="pricing.up_to_200">Até 200</td>
                                    <td class="text-center" data-i18n="pricing.up_to_500">Até 500</td>
                                    <td class="text-center"><span data-i18n="pricing.custom">Personalizado</span></td>
                                </tr>

                                <tr class="border-top border-bottom bg-light">
                                    <th scope="row" class="h6 py-3 font-weight-semibold border-0 mb-0"
                                        data-i18n="pricing.collaboration">Colaboração</th>

                                    <td class="py-3 border-0"></td>
                                    <td class="py-3 border-0"></td>
                                    <td class="py-3 border-0"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.comments">Comentários</span></th>

                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.notifications">Notificações</span></th>

                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.deadline_control">Controle de prazo</span></th>

                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.flow_card_email">Caixa de e-mail do fluxo e
                                            cartões</span></th>

                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.worked_hours">Horas trabalhadas</span></th>

                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                    <td class="text-center"><span class="say-yes"></span></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.insights_panel">Painel de Insights</span>
                                        <span class="badge badge-light border rounded-circle hw-18"
                                            data-toggle="popover" role="button" data-trigger="hover"
                                            data-placement="top" data-i18n="[data-content]pricing.productivity_view"
                                            data-content="Visão de produtividade, custo e receita gerada">?</span>
                                    </th>

                                    <td class="text-center">-</td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>


                                <tr class="border-top border-bottom bg-light">
                                    <th scope="row" class="h6 py-3 font-weight-semibold border-0 mb-0"
                                        data-i18n="pricing.views_reports">Visualizações e
                                        Relatórios</th>

                                    <td class="py-3 border-0"></td>
                                    <td class="py-3 border-0"></td>
                                    <td class="py-3 border-0"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.list_view">Visualização em Lista</span></th>

                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.kanban_view">Visualização em Kanban</span></th>

                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.calendar_view">Visualização em Calendário</span></th>

                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.dashboards">Painel (Dashboards)</span></th>

                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>

                                <tr>
                                    <th class="font-weight-normal" scope="row"><span
                                            class="d-block text-dark font-weight-bold"
                                            data-i18n="pricing.export_csv_excel">Exportação para CSV e Excel</span></th>

                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                    <td class="text-center"><span class="say-yes"></td>
                                </tr>



                                <tr class="text-center bg-white">
                                    <th scope="col"></th>

                                    <th scope="col" class="text-center text-nowrap">
                                        <a href="https://app.cange.me/onboarding/newsite-button-header?&src=null-null-null-null-null"
                                            class="btn btn-white btn-sm waves-effect mt-3" role="button"
                                            data-i18n="pricing.seven_days_free_short">7 dias
                                            grátis</a>
                                    </th>
                                    <th scope="col" class="text-center text-nowrap">
                                        <a href="https://app.cange.me/onboarding/newsite-button-header?&src=null-null-null-null-null"
                                            class="btn btn-primary btn-sm waves-effect mt-3" role="button"
                                            data-i18n="pricing.seven_days_free_short">7 dias
                                            grátis</a>
                                    </th>
                                    <th scope="col" class="text-center text-nowrap">
                                        <a href="https://wa.me/551151948185"
                                            class="btn btn-white btn-sm waves-effect mt-3" role="button"
                                            data-i18n="pricing.talk_to_sales">Falar com
                                            vendas</a>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Shape -->
            <div class="text-purple">
                <svg preserveAspectRatio="none" viewBox="0 0 2000 150" xmlns="http://www.w3.org/2000/svg">
                    <polygon fill="currentColor" points="2000 0 2000 150 0 150"></polygon>
                </svg>
            </div>
        </main>

        <!-- Footer -->

        <?php
include "footer.php";
?>

        <!-- /Footer -->

        <?php
include "scripts.php";
?>

    </div>

</html>