<!DOCTYPE html>
<html lang="pt-br">

<?php
include "head.php";
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.js"></script>


<body>
    <div class="main-content">
        <?php
include "nav.php";
?>

        <!-- Main content -->
        <main>
            <!-- Intro -->
            <section class="bg-cover-1 py-6 py-lg-8">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9">
                            <h1 class="font-weight-bold mb-4" data-aos="fade-up" data-aos-delay="50"><span
                                    class="text-primary" data-i18n="contact.title">Contato</span></h1>
                            <p class="lead text-muted" data-aos="fade-up" data-aos-delay="100"
                                data-i18n="contact.subtitle">Você está um passo mais perto de trazer mais <br />
                                produtividade para sua empresa</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact us -->
            <section class="py-6">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 order-2 order-lg-1 pt-6">
                            <h2 class="font-weight-bold mb-5" data-i18n="contact.next_steps">Próximos passos</h2>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center mb-3" data-aos="fade-up">
                                    <div class="badge badge-primary rounded-circle p-2 mr-3">1</div>
                                    <div>
                                        <span class="d-block font-weight-bold"
                                            data-i18n="contact.presentation_meeting">Reunião de apresentação</span>
                                        <small class="text-muted"
                                            data-i18n="contact.presentation_meeting_desc">Encontraremos o melhor momento
                                            para te conhecer melhor e te mostrar como podemos te ajudar</small>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="50">
                                    <div class="badge badge-primary rounded-circle p-2 mr-3">2</div>
                                    <div>
                                        <span class="d-block font-weight-bold"
                                            data-i18n="contact.value_proposal">Proposta de valor</span>
                                        <small class="text-muted" data-i18n="contact.value_proposal_desc">Depois de
                                            conhecer melhor você, iremos refinar a proposta e te mostrar como podemos te
                                            ajudar</small>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="100">
                                    <div class="badge badge-primary rounded-circle p-2 mr-3">3</div>
                                    <div>
                                        <span class="d-block font-weight-bold" data-i18n="contact.project_start">Início
                                            do projeto</span>
                                        <small class="text-muted" data-i18n="contact.project_start_desc">A plataforma
                                            será liberada com as funcionalidades acordadas</small>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center mb-3" data-aos="fade-up" data-aos-delay="150">
                                    <div class="badge badge-primary rounded-circle p-2 mr-3">4</div>
                                    <div>
                                        <span class="d-block font-weight-bold" data-i18n="contact.new_moment">Novo
                                            momento</span>
                                        <small class="text-muted" data-i18n="contact.new_moment_desc">Ainda no primeiro
                                            dia você já vai ver os resultados</small>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-6 order-1 order-lg-2 mt-lg-4 mt-lg-n11">
                            <div class="card shadow-sm">
                                <div class="card-header bg-white">
                                    <div class="media flex-column flex-sm-row py-2">
                                        <div
                                            class="iconbox icon-lg rounded-circle iconbox-soft-primary mb-3 mb-sm-0 mr-2 mr-sm-3">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4"
                                                    d="M21.9999 15.9402C21.9999 18.7302 19.7599 20.9902 16.9699 21.0002H16.9599H7.04989C4.26989 21.0002 1.99989 18.7502 1.99989 15.9602V15.9502C1.99989 15.9502 2.00589 11.5242 2.01389 9.2982C2.01489 8.8802 2.49489 8.6462 2.82189 8.9062C5.19789 10.7912 9.44689 14.2282 9.49989 14.2732C10.2099 14.8422 11.1099 15.1632 12.0299 15.1632C12.9499 15.1632 13.8499 14.8422 14.5599 14.2622C14.6129 14.2272 18.7669 10.8932 21.1789 8.9772C21.5069 8.7162 21.9889 8.9502 21.9899 9.3672C21.9999 11.5762 21.9999 15.9402 21.9999 15.9402Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M21.476 5.6736C20.61 4.0416 18.906 2.9996 17.03 2.9996H7.05001C5.17401 2.9996 3.47001 4.0416 2.60401 5.6736C2.41001 6.0386 2.50201 6.4936 2.82501 6.7516L10.25 12.6906C10.77 13.1106 11.4 13.3196 12.03 13.3196C12.034 13.3196 12.037 13.3196 12.04 13.3196C12.043 13.3196 12.047 13.3196 12.05 13.3196C12.68 13.3196 13.31 13.1106 13.83 12.6906L21.255 6.7516C21.578 6.4936 21.67 6.0386 21.476 5.6736Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>

                                        <div class="media-body">
                                            <h4 class="font-weight-bold" data-i18n="contact.lets_talk">Vamos conversar?
                                            </h4>
                                            <p class="text-muted font-size-sm mb-0" data-i18n="contact.fill_form">
                                                Complete o formulário abaixo</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form id="form-contato">
                                        <!-- Honeypot -->
                                        <input type="text" name="telefone" style="display:none !important" tabindex="-1"
                                            autocomplete="off">


                                        <div class="form-row">
                                            <div class="col-md px-2">
                                                <div class="form-group mb-4">
                                                    <label for="fullName" data-i18n="contact.form_name">Qual seu
                                                        nome?</label>
                                                    <input class="form-control" type="text" name="fullName"
                                                        id="fullName" placeholder="Luca Oliveira"
                                                        aria-describedby="fullName" required
                                                        data-i18n="[placeholder]contact.form_name_placeholder">
                                                </div>
                                            </div>
                                            <div class="col-md px-2">
                                                <div class="form-group">
                                                    <label for="phoneNumber" data-i18n="contact.form_whatsapp">Qual seu
                                                        Whatsapp?</label>
                                                    <input class="form-control" type="tel" name="phoneNumber"
                                                        id="phoneNumber" placeholder="(11) 98888-7777"
                                                        aria-describedby="phoneNumber" required
                                                        data-i18n="[placeholder]contact.form_whatsapp_placeholder">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md px-2">
                                                <div class="form-group mb-4">
                                                    <label for="email" data-i18n="contact.form_email">Seu
                                                        e-mail?</label>
                                                    <input class="form-control" type="email" name="email" id="email"
                                                        placeholder="luca@cange.me" aria-describedby="email" required
                                                        data-i18n="[placeholder]contact.form_email_placeholder">
                                                </div>
                                            </div>
                                            <div class="col-md px-2">
                                                <div class="form-group mb-4">
                                                    <label for="companyName" data-i18n="contact.form_company">Nome da
                                                        sua empresa?</label>
                                                    <input class="form-control" type="text" name="companyName"
                                                        id="companyName" placeholder="Cange.me"
                                                        aria-describedby="companyName" required
                                                        data-i18n="[placeholder]contact.form_company_placeholder">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md px-2">
                                                <div class="form-group mb-4">
                                                    <label for="segment" data-i18n="contact.form_segment">Segmento da
                                                        sua empresa</label>
                                                    <select class="custom-select" id="segment" name="segment" required>
                                                        <option selected disabled value=""
                                                            data-i18n="contact.form_select">Selecione</option>
                                                        <option value="Varejo" data-i18n="contact.segment_retail">Varejo
                                                        </option>
                                                        <option value="Agência de Marketing"
                                                            data-i18n="contact.segment_marketing">Agência de Marketing
                                                        </option>
                                                        <option value="Consultoria"
                                                            data-i18n="contact.segment_consulting">Consultoria</option>
                                                        <option value="Software house"
                                                            data-i18n="contact.segment_software">Software house</option>
                                                        <option value="Seguradora"
                                                            data-i18n="contact.segment_insurance">Seguradora</option>
                                                        <option value="Construção"
                                                            data-i18n="contact.segment_construction">Construção</option>
                                                        <option value="Indústria" data-i18n="contact.segment_industry">
                                                            Indústria</option>
                                                        <option value="Saúde" data-i18n="contact.segment_health">Saúde
                                                        </option>
                                                        <option value="Outros" data-i18n="contact.segment_other">Outros
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" name="origin" value="1">
                                            <div class="col-md px-2">
                                                <div class="form-group mb-4">
                                                    <label for="employees" data-i18n="contact.form_employees">Quantos
                                                        funcionários você tem?</label>
                                                    <select class="custom-select" id="employees" name="employees"
                                                        required>
                                                        <option selected disabled value=""
                                                            data-i18n="contact.form_select">Selecione</option>
                                                        <option value="Somente eu"
                                                            data-i18n="contact.employees_only_me">Somente eu</option>
                                                        <option value="2 - 5">2 - 5</option>
                                                        <option value="6 - 10">6 - 10</option>
                                                        <option value="11 - 30">11 - 30</option>
                                                        <option value="31 - 60">31 - 60</option>
                                                        <option value="60 - 200">60 - 200</option>
                                                        <option value="200 - 1000">200 - 1000</option>
                                                        <option value="Acima de 1000"
                                                            data-i18n="contact.employees_above_1000">Acima de 1000
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md px-2">
                                                <div class="form-group mb-4">
                                                    <label for="details" data-i18n="contact.form_details">O que você
                                                        está procurando?</label>
                                                    <textarea class="form-control" name="details" id="details" cols="30"
                                                        rows="4" placeholder="Descreva um pouco da sua necessidade..."
                                                        required
                                                        data-i18n="[placeholder]contact.form_details_placeholder"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row mt-5">
                                            <div class="col-md px-2">
                                                <button class="btn btn-primary btn-block mb-3" type="submit"
                                                    id="btnEnviar">
                                                    <span id="btnText" data-i18n="contact.form_submit">Enviar!</span>
                                                    <span id="spinner" class="spinner-border spinner-border-sm ml-2"
                                                        role="status" aria-hidden="true" style="display: none;"></span>
                                                </button>
                                                <p id="mensagem-retorno" style="margin-top: 10px; text-align:center;">
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact info -->
            <section class="py-6 bg-light-primary">
                <div class="container">
                    <div class="row justify-content-center row-cols-sm-2 row-cols-lg-3">
                        <div class="col-lg mb-5 mb-lg-0 text-center" data-aos="fade-up">
                            <div class="iconbox icon-lg rounded-circle iconbox-soft-primary mb-5">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M21.9999 15.9402C21.9999 18.7302 19.7599 20.9902 16.9699 21.0002H16.9599H7.04989C4.26989 21.0002 1.99989 18.7502 1.99989 15.9602V15.9502C1.99989 15.9502 2.00589 11.5242 2.01389 9.2982C2.01489 8.8802 2.49489 8.6462 2.82189 8.9062C5.19789 10.7912 9.44689 14.2282 9.49989 14.2732C10.2099 14.8422 11.1099 15.1632 12.0299 15.1632C12.9499 15.1632 13.8499 14.8422 14.5599 14.2622C14.6129 14.2272 18.7669 10.8932 21.1789 8.9772C21.5069 8.7162 21.9889 8.9502 21.9899 9.3672C21.9999 11.5762 21.9999 15.9402 21.9999 15.9402Z"
                                        fill="currentColor" />
                                    <path
                                        d="M21.476 5.6736C20.61 4.0416 18.906 2.9996 17.03 2.9996H7.05001C5.17401 2.9996 3.47001 4.0416 2.60401 5.6736C2.41001 6.0386 2.50201 6.4936 2.82501 6.7516L10.25 12.6906C10.77 13.1106 11.4 13.3196 12.03 13.3196C12.034 13.3196 12.037 13.3196 12.04 13.3196C12.043 13.3196 12.047 13.3196 12.05 13.3196C12.68 13.3196 13.31 13.1106 13.83 12.6906L21.255 6.7516C21.578 6.4936 21.67 6.0386 21.476 5.6736Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                            <h5 class="font-weight-semibold" data-i18n="contact.email_title">E-mail</h5>
                            <p class="text-muted mb-4" data-i18n="contact.email_desc">Para dúvidas gerais, incluindo
                                oportunidades de marketing e parcerias.</p>
                            <a class="font-weight-semibold btn btn-white light-shadow"
                                href="mailto:oi@cange.com.br">oi@cange.com.br</a>
                        </div>

                        <div class="col-lg mb-5 mb-lg-0 text-center" data-aos="fade-up" data-aos-delay="50">
                            <div class="iconbox icon-lg rounded-circle iconbox-soft-primary mb-5">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M14.4183 5.48994C13.9423 5.402 13.5051 5.70579 13.4145 6.17048C13.3238 6.63516 13.6286 7.08884 14.0917 7.17978C15.4859 7.4516 16.5625 8.53085 16.8354 9.92989V9.93089C16.9131 10.3336 17.2676 10.6264 17.6759 10.6264C17.7307 10.6264 17.7855 10.6214 17.8412 10.6114C18.3043 10.5185 18.6091 10.0658 18.5185 9.60012C18.1111 7.51055 16.5027 5.89666 14.4183 5.48994Z"
                                        fill="currentColor" />
                                    <path opacity="0.4"
                                        d="M14.3561 2.00793C14.133 1.97595 13.9089 2.04191 13.7307 2.18381C13.5474 2.32771 13.4329 2.53557 13.408 2.76841C13.3552 3.23908 13.6948 3.66479 14.1649 3.71776C17.4065 4.07951 19.9262 6.60477 20.2907 9.85654C20.3395 10.2922 20.705 10.621 21.1412 10.621C21.174 10.621 21.2059 10.619 21.2388 10.615C21.4668 10.59 21.67 10.4771 21.8134 10.2972C21.9558 10.1174 22.0206 9.89351 21.9947 9.66467C21.5405 5.60746 18.4005 2.45862 14.3561 2.00793Z"
                                        fill="currentColor" />
                                    <path
                                        d="M17.6049 14.673C16.9566 14.5351 16.4437 14.8349 15.9896 15.0967C15.5245 15.3665 14.6391 16.0811 14.1332 15.8972C11.5379 14.8339 9.09693 12.5705 8.04028 9.97625C7.85405 9.45961 8.56811 8.57321 8.83601 8.10554C9.09793 7.65185 9.39272 7.1352 9.25827 6.48565C9.13677 5.90105 7.56524 3.90942 7.00952 3.36479C6.64204 3.00504 6.26758 2.80717 5.88216 2.7742C4.43313 2.71324 2.81479 4.63892 2.53095 5.0996C1.81888 6.08193 1.82386 7.38903 2.5429 8.97394C4.27577 13.231 10.8298 19.6556 15.1201 21.4464C15.9109 21.8151 16.6359 22 17.2862 22C17.9226 22 18.4893 21.8231 18.9763 21.4724C19.3428 21.2615 21.3565 19.5697 21.3027 18.0877C21.2718 17.7099 21.0736 17.3322 20.7171 16.9665C20.1734 16.4078 18.1875 14.7959 17.6049 14.673Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                            <h5 class="font-weight-semibold" data-i18n="contact.whatsapp_title">WhatsApp Comercial</h5>
                            <p class="text-muted mb-4" data-i18n="contact.whatsapp_desc">Vamos acelerar os primeiros
                                passos e
                                começar a trabalhar juntos?</p>
                            <a class="font-weight-semibold btn btn-white light-shadow"
                                href="https://wa.me/551151948185">+55
                                (11) 5194-8185</a>
                        </div>

                        <div class="col-lg text-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="iconbox icon-lg rounded-circle iconbox-soft-primary mb-5">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M11.9912 18.6215L5.49945 21.8641C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7088C4 14.4284 4.40573 14.8726 5.47299 15.3701L11.9912 18.6215Z"
                                        fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                            <h5 class="font-weight-semibold" data-i18n="contact.support_title">Precisa de suporte?</h5>
                            <p class="text-muted mb-4" data-i18n="contact.support_desc">Confira nossos recursos, FAQs e
                                ferramentas de desenvolvedores.</p>
                            <a class="font-weight-semibold btn btn-white light-shadow" href=""
                                data-i18n="contact.support_center">Centro de Suporte</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Map 
            <div class="py-6">
                <div class="container">
                    <div class="row">
                        <div class="col" data-aos="fade-up">
                            <h2 class="font-weight-bold mb-5">Find our Location on Map</h2>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48330.16270232542!2d-74.29798877778106!3d40.79203413860629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3ab00d85ee855%3A0x93a15ba40269dd0!2sWest%20Orange%2C%20NJ%2007052%2C%20USA!5e0!3m2!1sen!2sin!4v1603779385718!5m2!1sen!2sin" height="450" style="width: 100%; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
                            -->


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



    </div>

    <!-- Script para enviar o formulário -->
    <script>
        document.getElementById('form-contato').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const mensagemRetorno = document.getElementById('mensagem-retorno');
            const btnEnviar = document.getElementById('btnEnviar');
            const spinner = document.getElementById('spinner');
            const btnText = document.getElementById('btnText');

            // Proteção antispam simples (honeypot preenchido)
            if (formData.get('telefone')) {
                mensagemRetorno.innerText = "Erro: Solicitação inválida.";
                return;
            }

            // Desativa botão e mostra spinner
            btnEnviar.disabled = true;
            spinner.style.display = 'inline-block';

            try {
                const response = await fetch('/scripts/enviar.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    mensagemRetorno.style.color = 'green';
                    mensagemRetorno.innerText = "Obrigado pela mensagem! Em breve faremos contato.";
                    form.reset();
                } else {
                    mensagemRetorno.style.color = 'red';
                    mensagemRetorno.innerText = result.message || "Ocorreu um erro ao enviar. Tente novamente.";
                }
            } catch (error) {
                console.error("Erro no envio:", error);
                mensagemRetorno.style.color = 'red';
                mensagemRetorno.innerText = "Erro de conexão. Tente novamente.";
            } finally {
                // Reativa botão e esconde spinner
                btnEnviar.disabled = false;
                spinner.style.display = 'none';
            }
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Inputmask({ "mask": "(99) 99999-9999" }).mask(document.getElementById("phoneNumber"));
        });
    </script>

    <?php
include "scripts.php";
?>
</body>

</html>