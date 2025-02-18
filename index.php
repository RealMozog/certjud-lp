<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/favicon.png">
    <title>CertJud - Compra de créditos judiciais</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <link rel="stylesheet" href="styles.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P8G4SNS');</script>
    <!-- End Google Tag Manager -->
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">Você está utilizando um navegador <strong>desatualizado</strong>. Por favor, <a href="https://browsehappy.com/?locale=pt-br">atualize seu navegador</a> para melhorar sua experiência.</p>
    <![endif]-->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8G4SNS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <div id="app">

      <?php 
        $param = $_GET['sent'];
        if ($param === 'partner') { 
      ?>
      <div class="server-msg">
        <p>Informações enviadas com sucesso! Em breve nossa equipe entrará em contato.</p>
      </div>
      <?php 
        } else if ($param === 'client') { 
      ?>
      <div class="server-msg">
        <p>Informações enviadas com sucesso! Nossa equipe comercial entrará em contato pra te ajudar a realizar essa venda! Os próximos passos são a avaliação do seu crédito judicial e posterior apresentação de proposta.</p>
      </div>
      <?php 
        } 
      ?>

      <nav id="navbar" class="navbar" role="navigation" aria-label="main navigation">
        <div class="container">
          <div class="navbar-brand">
            <a class="navbar-item" href="#home">
              <img src="img/logo-certjud-br.svg" width="216">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
          </div>

          <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
            </div>

            <div class="navbar-end navbar-container">
              <a class="navbar-item" href="#parceiro">
                Seja um Advogado Parceiro
              </a>
              
              <a class="navbar-item" href="#creditos">
                Créditos Judiciais
              </a>

              <a class="navbar-item" href="#quem">
                Quem Somos
              </a>

              <a class="navbar-item" href="#blog">
                Notícias
              </a>

              <a class="navbar-item" href="#contato">
                Fale Conosco
              </a>
            </div>
          </div>
        </div>
      </nav>
    
      <section id="home" class="hero is-fullheight purple-bg">
        <div class="hero-head">
        </div>

        <div class="hero-body">
          <div class="container">
            <h1 class="hero-title">
            Quero vender meu <br> processo
            </h1>

            <p style="color: white">Você ganhou o processo e <br> ainda não recebeu, solicite agora <br> a sua proposta de antecipação</p>

            <button class="button is-orange is-rounded is-uppercase is-size-18" @click="toggleModal()">Não quero esperar</button>
          </div>
        </div>

        <div class="hero-banner"></div>
      </section>

      <section id="parceiro" class="hero is-fullheight">
        <div class="hero-body" style="padding-bottom: 12px">
          <div class="container">
            <div class="left-container">
              <h1 class="title">Advogado, antecipe seus honorários!</h1>
              <p>Para que esperar? Antecipamos seus honorários de maneira rápida e sem burocracia. </p>
              <div class="form-container">
                <h2 class="title">Quero um contato da área comercial</h2>
                <form id="advForm" action="https://certjud.com.br/?sent=partner" method="POST">
                  <input class="input" type="text" name="nome" placeholder="Nome completo" required>
                  <input class="input" type="email" name="mail" placeholder="E-mail" required>
                  <input class="input phone_with_ddd" type="tel" name="tel" placeholder="Telefone com DDD" required>
                  <input class="input" type="text" name="cidade" placeholder="Cidade" required>
                  <input class="input" type="number" name="oab" placeholder="Número OAB (obrigatório)" required>
                  <select class="input" name="tipoprocesso" required>
                    <option value="" disabled selected>Tipo do processo</option>
                    <option>Precatório Federal</option>
                    <option>Processo contra Bancos e/ou Instituições Financeiras</option>
                    <option>Processo contra prestadoras de serviços de energia, gás, água e telefonia</option>
                    <option>Processo trabalhista</option>
                    <option>Processo contra empresas de grande porte</option>
                  </select>
   
                  <button type="submit" name="envia-adv" class="button is-orange is-rounded is-uppercase is-size-18">
                    Quero mais informações
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="vantagens" class="hero is-fullheight">
        <div class="hero-body">
          <div class="container fat">
            <h1 class="title">Vantagens na venda de<br>um crédito judicial</h1>

            <p class="text-center">Vender seu crédito judicial é uma boa opção para lidar com a longa espera da justiça 
              e garantir o dinheiro de forma antecipada.</p>

            <div class="columns">

              <div class="column margin-top">
                <div class="icon-block-container">
                  <div class="icon">
                    <img src="img/icons/grana.png" alt="uma pilha de dinheiro">
                  </div>
                  <h3>Dinheiro imediato</h3>
                  <p>Receba o dinheiro em poucos dias, sem ter que esperar.</p>
                </div>
              </div>

              <div class="column">
                <div class="icon-block-container">
                  <div class="icon">
                    <img src="img/icons/cadeado.png" alt="um cadeado">
                  </div>
                  <h3>Segurança</h3>
                  <p>Processo transparente, respeitando honorários advocatícios.</p>
                </div>
              </div>

              <div class="column">
                <div class="icon-block-container">
                  <div class="icon">
                    <img src="img/icons/cronometro.png" alt="um cronômetro">
                  </div>
                  <h3>Rapidez</h3>
                  <p>Não espere o tempo da justiça.</p>
                </div>
              </div>

              <div class="column">
                <div class="icon-block-container">
                  <div class="icon">
                    <img src="img/icons/alvo.png" alt="uma seta no alvo">
                  </div>
                  <h3>Realize</h3>
                  <p>Tenha dinheiro para investir, sanar dívidas ou realizar sonhos.</p>
                </div>
              </div>

              <div class="column">
                <div class="icon-block-container">
                  <div class="icon">
                    <img src="img/icons/escudo.png" alt="um escudo indicando tudo ok">
                  </div>
                  <h3>Risco zero</h3>
                  <p>Operação normatizada pela Constituição Federal.</p>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </section>

      <section id="creditos" class="hero is-fullheight light-purple-bg">
        <div class="hero-body">
          <div class="container fat">
            <h1 class="title">Compramos seu crédito judicial<br>de forma rápida e segura</h1>

            <p class="text-center">Entenda as etapas gerais do processo de venda do crédito judicial:</p>

            <div class="columns margin-top">

              <div class="column">
                <div class="art-block-container">
                  <div class="icon">
                    <img src="img/icons/documentos.png" alt="documentos">
                  </div>
                  <h3>1</h3>
                  <p>Envio da documentação completa do processo</p>
                </div>
              </div>

              <div class="column">
                <div class="art-block-container">
                  <div class="icon">
                    <img src="img/icons/analise.png" alt="lupa analisando documento">
                  </div>
                  <h3>2</h3>
                  <p>Análise e aprovação em até 48 horas</p>
                </div>
              </div>

              <div class="column">
                <div class="art-block-container">
                  <div class="icon">
                    <img src="img/icons/compra.png" alt="assinando documento">
                  </div>
                  <h3>3</h3>
                  <p>Formalização da proposta de compra</p>
                </div>
              </div>

              <div class="column">
                <div class="art-block-container">
                  <div class="icon">
                    <img src="img/icons/pagamento.png" alt="recebendo pagamento em dinheiro">
                  </div>
                  <h3>4</h3>
                  <p>Pagamento em até 24 horas após a formalização do contrato</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section id="quem" class="hero is-fullheight">
        <div class="hero-body">
          <div class="container fat">
            <h1 class="title">Quem somos</h1>

            <p class="text-center">A CertJud é uma empresa especializada em cessão de créditos judiciais. Esses créditos são aqueles decorrentes de uma decisão judicial para a qual não cabe mais recurso, ou seja, o crédito judicial é um direito líquido e certo, contudo, devido à morosidade da justiça, sua transformação em dinheiro pode levar muito tempo.</p>

            <p class="text-center">Confira abaixo os créditos judiciais que compramos:</p>

            <div class="columns margin-top">

              <div class="column">
                <div class="icons-block-container">
                  <div class="icon">
                    <svg xmlns="https://www.w3.org/2000/svg" width="61.53" height="58.793" viewBox="0 0 61.53 58.793">
                      <g id="brazil" transform="translate(0 -0.5)">
                        <path id="Caminho_202" data-name="Caminho 202" d="M25.214,42.439l1.121.036a.065.065,0,0,1,.059.044l.487,1.46A.909.909,0,0,0,28.6,43.4l-.487-1.46a1.889,1.889,0,0,0-1.725-1.286c-1.106-.036-1.174,0-1.183-.095l-.686-7a1.877,1.877,0,0,0-1.975-1.7,1.192,1.192,0,0,1-.315-.02c-.008-.019-.845-2.769-.851-2.789a1.883,1.883,0,0,0-1.215-1.241c-4.8-1.572-3.779-1.136-5.5-2.189h0a.065.065,0,0,1-.031-.059l.043-.732a1.882,1.882,0,0,0-2.641-1.831c-2.305,1.02-3.3,1.478-3.574,1.573-1.553-.1-1.59-.065-1.593-.161l-.009-.261a1.882,1.882,0,0,0-2.524-1.7.066.066,0,0,1-.071-.018L1.834,19.683a.064.064,0,0,1-.013-.065l.9-2.531a.067.067,0,0,1,.049-.042l3.541-.7a1.872,1.872,0,0,0,1.51-1.657c.647-6.386.7-4.617-.038-7.966-.023-.111-.015-.068,2.434-.44a.066.066,0,0,1,.059.022l1.437,1.651a1.889,1.889,0,0,0,2.344.4l1.952-1.1a1.888,1.888,0,0,0,.865-2.222l-.6-1.846c-.038-.111.007-.077,4.789-.874.085-.015-.015-.22,1.411,4.059a1.874,1.874,0,0,0,2.215,1.237l2.547-.6a1.911,1.911,0,0,0,1.439-1.558c.044-.071-.071-.068,2.774.713a1.888,1.888,0,0,0,2.029-.721l.691-.967a.064.064,0,0,1,.114.015c1.59,4.159,1.534,4.37,2.358,4.783L39.3,10.611a.909.909,0,1,0,.813-1.625L37.455,7.659c-.167-.3-.594-1.507-1.473-3.806a1.883,1.883,0,0,0-3.289-.422L32,4.4a.066.066,0,0,1-.07.025l-2.7-.742a1.882,1.882,0,0,0-2.344,1.446c0,.044-.017.113-.063.123-2.665.623-2.593.645-2.624.553L22.861,1.788a1.873,1.873,0,0,0-2.1-1.261l-4.738.79a1.882,1.882,0,0,0-1.48,2.439l.6,1.846c.027.083.059.027-1.982,1.178a.065.065,0,0,1-.081-.014L11.649,5.114a1.872,1.872,0,0,0-1.7-.624l-2.38.362A1.882,1.882,0,0,0,6.012,7.116l.513,2.335c-.015.284-.143,1.457-.508,5.058-.008.075.186.011-3.593.753a1.892,1.892,0,0,0-1.41,1.214l-.9,2.531a1.883,1.883,0,0,0,.362,1.879L2.9,23.639a1.873,1.873,0,0,0,2.054.522.064.064,0,0,1,.087.059l.009.261a1.874,1.874,0,0,0,1.759,1.813c2.5.161,1.3.436,5.959-1.626a.064.064,0,0,1,.091.063,2.263,2.263,0,0,0,.857,2.45v0c1.943,1.186.759.687,5.883,2.364a.065.065,0,0,1,.042.043l.84,2.762c.314,1.03,1.115,1.334,2.165,1.334.092,0,.022-.375.751,7.057a1.887,1.887,0,0,0,1.812,1.7Zm0,0" transform="translate(0 0)" fill="#78809C"></path>
                        <path id="Caminho_203" data-name="Caminho 203" d="M229.386,221.338c-2.684,2.5-2.8,2.5-2.955,3.211-1.144,5.207-1.516,6.963-1.624,7.348-.027.039-4.327,6.238-4.375,6.242-6.658.513-6.387.385-6.985.911-3.171,2.765-3.319,2.745-3.449,3.6-.3,2-.439,3.025-.514,3.305l-5.514,5.588a.065.065,0,0,1-.092,0l-3.906-3.843c-.092-.09-.2.06,3.975-3.185a1.885,1.885,0,0,0,.639-2.052l-.357-1.314a.909.909,0,1,0-1.754.476c.011.041.364,1.344.377,1.384a.065.065,0,0,1-.022.071l-3.97,3.088a1.883,1.883,0,0,0-.165,2.827l3.906,3.843a1.885,1.885,0,0,0,2.66-.019l5.513-5.586c.7-.71.495-1.428,1.019-4.312.22-.246,1.125-1,2.842-2.5.413-.076,2.062-.174,5.934-.472a1.873,1.873,0,0,0,1.4-.8l4.33-6.219c.27-.35.186-.176,1.9-7.991.186-.216.962-.913,2.419-2.272a.909.909,0,0,0-1.239-1.329Zm0,0" transform="translate(-174.325 -194.084)" fill="#78809C"></path>
                        <path id="Caminho_204" data-name="Caminho 204" d="M369.823,92.016a1.883,1.883,0,0,0-1.869-1.66h-1.339c-.4-.267-1.816-1.52-5.214-4.411-.737-.627-1-.461-5.976-.221-.26-.1-1.185-.6-3.181-1.625a.909.909,0,0,0-.83,1.616c3.525,1.812,3.454,1.855,4.1,1.823,3.008-.146,4.286-.24,4.715-.207,5.415,4.607,5.479,4.842,6.3,4.842,1.437,0,1.478-.037,1.49.057.006.048.457,3.737.422,3.771L366.4,98.017a.909.909,0,0,0,.638,1.554c.491,0,.477-.1,2.678-2.279a1.893,1.893,0,0,0,.559-1.338c0-.155.026.109-.454-3.939Zm0,0" transform="translate(-308.748 -73.463)" fill="#78809C"></path>
                        <g id="money" transform="translate(26.02 12.49)">
                          <g id="Grupo_33" data-name="Grupo 33" transform="translate(12.373 13.444)">
                            <g id="Grupo_32" data-name="Grupo 32">
                              <path id="Caminho_205" data-name="Caminho 205" d="M301.686,259.177a.794.794,0,1,1,.907-.785.412.412,0,0,0,.825,0,1.641,1.641,0,0,0-1.32-1.564v-.215a.412.412,0,0,0-.825,0v.215a1.641,1.641,0,0,0-1.32,1.564,1.677,1.677,0,0,0,1.732,1.61.794.794,0,1,1-.907.785.412.412,0,0,0-.825,0,1.641,1.641,0,0,0,1.32,1.564v.178a.412.412,0,0,0,.825,0v-.178a1.641,1.641,0,0,0,1.32-1.564A1.677,1.677,0,0,0,301.686,259.177Z" transform="translate(-299.954 -256.201)" fill="#78809C"></path>
                            </g>
                          </g>
                          <g id="Grupo_35" data-name="Grupo 35" transform="translate(15.836 11.983)">
                            <g id="Grupo_34" data-name="Grupo 34">
                              <path id="Caminho_206" data-name="Caminho 206" d="M386.711,222.768a5.375,5.375,0,0,0-2.2-1.943.412.412,0,1,0-.357.743,4.541,4.541,0,0,1,2.045,6.22.412.412,0,1,0,.728.387,5.368,5.368,0,0,0-.221-5.408Z" transform="translate(-383.924 -220.785)" fill="#78809C"></path>
                            </g>
                          </g>
                          <g id="Grupo_37" data-name="Grupo 37" transform="translate(14.313 11.497)">
                            <g id="Grupo_36" data-name="Grupo 36">
                              <path id="Caminho_207" data-name="Caminho 207" d="M347.44,209h-.028a.412.412,0,0,0,0,.825h.026a.412.412,0,0,0,0-.825Z" transform="translate(-347 -209.001)" fill="#78809C"></path>
                            </g>
                          </g>
                          <g id="Grupo_39" data-name="Grupo 39" transform="translate(8.745 14.125)">
                            <g id="Grupo_38" data-name="Grupo 38">
                              <path id="Caminho_208" data-name="Caminho 208" d="M215.4,279.537a4.541,4.541,0,0,1-2.045-6.22.412.412,0,1,0-.728-.387,5.365,5.365,0,0,0,2.416,7.351.412.412,0,1,0,.357-.744Z" transform="translate(-212.002 -272.711)" fill="#78809C"></path>
                            </g>
                          </g>
                          <g id="Grupo_41" data-name="Grupo 41" transform="translate(13.05 21.397)">
                            <g id="Grupo_40" data-name="Grupo 40">
                              <path id="Caminho_209" data-name="Caminho 209" d="M316.816,449h-.024a.412.412,0,1,0,0,.825h.028a.412.412,0,1,0,0-.825Z" transform="translate(-316.378 -448.999)" fill="#78809C"></path>
                            </g>
                          </g>
                          <g id="Grupo_43" data-name="Grupo 43" transform="translate(0 3)">
                            <g id="Grupo_42" data-name="Grupo 42">
                              <path id="Caminho_210" data-name="Caminho 210" d="M15.98,10.1a1.893,1.893,0,0,0-.183-.337h1.074a1.9,1.9,0,0,0,0-3.795h-3.3A1.9,1.9,0,0,0,12,3H1.9a1.9,1.9,0,1,0,0,3.795H5.2a1.892,1.892,0,0,0,0,2.145H4.125a1.9,1.9,0,0,0-1.179,3.382,1.894,1.894,0,0,0,0,2.97,1.894,1.894,0,0,0,0,2.97,1.9,1.9,0,0,0,1.179,3.382H8.986A7.011,7.011,0,1,0,15.98,10.1Zm.891-3.307a1.072,1.072,0,0,1,0,2.145H6.765a1.072,1.072,0,0,1,0-2.145ZM1.9,5.97a1.072,1.072,0,1,1,0-2.145H12A1.072,1.072,0,1,1,12,5.97ZM4.125,9.765H14.231a1.072,1.072,0,0,1,.468.108c-.2-.016-.392-.025-.592-.025A6.99,6.99,0,0,0,9.145,11.91H4.125a1.072,1.072,0,0,1,0-2.145Zm0,2.97H8.44a6.992,6.992,0,0,0-1.06,2.145H4.125a1.072,1.072,0,0,1,0-2.145Zm0,2.97H7.19a7.018,7.018,0,0,0-.025,2.145H4.125a1.072,1.072,0,1,1,0-2.145Zm0,5.115a1.072,1.072,0,1,1,0-2.145H7.333a6.985,6.985,0,0,0,.99,2.145Zm9.982,2.227a6.187,6.187,0,1,1,6.187-6.187A6.194,6.194,0,0,1,14.107,23.047Z" transform="translate(0 -3)" fill="#78809C"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <h3>Precatórios Federais</h3>
                </div>
              </div>

              <div class="column">
                <div class="icons-block-container">
                  <div class="icon">
                    <svg xmlns="https://www.w3.org/2000/svg" width="67" height="60" viewBox="0 0 67 60">
                      <g id="Icon" transform="translate(-926 -1304)">
                        <path id="suitcase" d="M54.754,8.645H42.266V4.8a4.809,4.809,0,0,0-4.8-4.8H20.173a4.809,4.809,0,0,0-4.8,4.8V8.645H2.882A2.882,2.882,0,0,0,0,11.527V32.91a2.894,2.894,0,0,0,1.921,2.712V48.991A2.882,2.882,0,0,0,4.8,51.872h48.03a2.882,2.882,0,0,0,2.882-2.882V35.623a2.9,2.9,0,0,0,1.921-2.713V11.527a2.882,2.882,0,0,0-2.882-2.882ZM17.291,4.8a2.882,2.882,0,0,1,2.882-2.882H37.463A2.882,2.882,0,0,1,40.345,4.8V8.645H38.424V4.8a.961.961,0,0,0-.961-.961H20.173a.961.961,0,0,0-.961.961V8.645H17.291ZM36.5,8.645H21.133V5.764H36.5ZM53.794,48.991a.961.961,0,0,1-.961.961H4.8a.961.961,0,0,1-.961-.961V35.952l21.133,2.915v2.439a2.882,2.882,0,0,0,2.882,2.882h1.921a2.882,2.882,0,0,0,2.882-2.882V38.867l21.133-2.915ZM30.739,41.306a.961.961,0,0,1-.961.961H27.857a.961.961,0,0,1-.961-.961V35.542a.961.961,0,0,1,.961-.961h1.921a.961.961,0,0,1,.961.961Zm24.976-8.4a.961.961,0,0,1-.826.952l-.266.037L32.66,36.927V35.542a2.882,2.882,0,0,0-2.882-2.882H27.857a2.882,2.882,0,0,0-2.882,2.882v1.385L2.748,33.862a.961.961,0,0,1-.827-.952V11.527a.961.961,0,0,1,.961-.961H54.754a.961.961,0,0,1,.961.961Zm0,0" transform="translate(935.364 1312.128)" fill="#78809C"></path>
                        <g id="Elipse_30" data-name="Elipse 30" transform="translate(926 1304)" fill="none" stroke="#78809C" stroke-width="1">
                          <circle cx="7.5" cy="7.5" r="7.5" stroke="none"></circle>
                          <circle cx="7.5" cy="7.5" r="7" fill="none"></circle>
                        </g>
                        <text id="_" data-name="$" transform="translate(930.5 1315)" fill="#78809C" font-size="10" font-family="AirbnbCerealApp-Bold, Airbnb Cereal App" font-weight="700"><tspan x="0" y="0">$</tspan></text>
                      </g>
                    </svg>
                  </div>
                  <h3>Créditos Trabalhistas</h3>
                </div>
              </div>

              <div class="column">
                <div class="icons-block-container">
                  <div class="icon">
                    <svg xmlns="https://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" preserveAspectRatio="none">
                      <g id="bank" transform="translate(0)">
                        <path id="Caminho_211" data-name="Caminho 211" d="M202,54h2V53h2v1h2V52.949a3.48,3.48,0,0,0,1.337-6.415A3.47,3.47,0,0,0,208,41.351V40h-2v1h-2V40h-2v1h-2v2h1v8h-1v2h2Zm1-11h3.5a1.5,1.5,0,0,1,0,3H203Zm4.5,8H203V48h4.5a1.5,1.5,0,0,1,0,3Zm0,0" transform="translate(-175 -35)" fill="#78809C"></path>
                        <path id="Caminho_212" data-name="Caminho 212" d="M59,15H57V12a1,1,0,0,0-1-1H52.857C51.986,7.607,46.7,4.846,38.586,3.634a11.96,11.96,0,0,0-17.172,0C13.3,4.846,8.014,7.607,7.143,11H4a1,1,0,0,0-1,1v3H1a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H3v3a1,1,0,0,0,1,1H5V46H4a1,1,0,0,0-1,1v3H1a1,1,0,0,0-1,1v8a1,1,0,0,0,1,1H59a1,1,0,0,0,1-1V51a1,1,0,0,0-1-1H57V47a1,1,0,0,0-1-1H55V25h1a1,1,0,0,0,1-1V21h2a1,1,0,0,0,1-1V16A1,1,0,0,0,59,15Zm-4,0H41.6a11.864,11.864,0,0,0,.344-2H55Zm-4.278-4H41.949a11.885,11.885,0,0,0-1.59-5.028C46.252,7.14,49.766,9.162,50.722,11ZM30,2A10,10,0,1,1,20,12,10,10,0,0,1,30,2ZM47,21v3a1,1,0,0,0,1,1h1V46H48a1,1,0,0,0-1,1v3H45V47a1,1,0,0,0-1-1H43V25h1a1,1,0,0,0,1-1V21ZM42,54H18V52H42ZM13,50V47a1,1,0,0,0-1-1H11V25h1a1,1,0,0,0,1-1V21h2v3a1,1,0,0,0,1,1h1V46H16a1,1,0,0,0-1,1v3Zm9.089-29q.438.386.911.727V23H17V21ZM43,48v2H37V48Zm-4-2V25h2V46ZM36,25h1V46H36a1,1,0,0,0-1,1v3H25V47a1,1,0,0,0-1-1H23V25h1a1,1,0,0,0,1-1V22.9a11.862,11.862,0,0,0,10,0V24A1,1,0,0,0,36,25ZM21,25V46H19V25ZM17,48h6v2H17ZM43,23H37V21.727q.474-.342.911-.727H43ZM19.641,5.972A11.886,11.886,0,0,0,18.051,11H9.278c.956-1.838,4.47-3.86,10.363-5.028ZM5,13H18.051a11.914,11.914,0,0,0,.344,2H5ZM2,17h17.1a12.009,12.009,0,0,0,1.168,2H2Zm9,4v2H5V21ZM7,25H9V46H7ZM5,48h6v2H5Zm6,7v3H2V52H16v2H12A1,1,0,0,0,11,55Zm36,3H13V56H47Zm11,0H49V55a1,1,0,0,0-1-1H44V52H58Zm-9-8V48h6v2Zm4-4H51V25h2Zm2-23H49V21h6Zm3-4H39.727A11.982,11.982,0,0,0,40.9,17H58Zm0,0" transform="translate(0 0)" fill="#78809C"></path>
                      </g>
                    </svg>
                  </div>
                  <h3>Créditos contra Instituição Financeira</h3>
                </div>
              </div>

              <div class="column">
                <div class="icons-block-container">
                  <div class="icon">
                    <svg xmlns="https://www.w3.org/2000/svg" width="48.363" height="57.697" viewBox="0 0 48.363 57.697" preserveAspectRatio="none">
                      <g id="tower" transform="translate(-41.413)">
                        <g id="Grupo_44" data-name="Grupo 44" transform="translate(41.413)">
                          <path id="Caminho_213" data-name="Caminho 213" d="M89.162,18.7,73.441,14.209V6.36h9.974V8.167H81.929a.846.846,0,0,0-.847.847v3.5a.846.846,0,0,0,.847.847H86.6a.846.846,0,0,0,.847-.847v-3.5a.846.846,0,0,0-.847-.847H85.109V6.36h3.821a.847.847,0,0,0,.233-1.66L72.847.038h0l-.017,0-.02,0L72.752.015l-.04-.006L72.671,0l-.056,0H58.575l-.058,0-.039,0-.042.006-.054.013-.021,0-.018.005h0L42.027,4.7a.847.847,0,0,0,.233,1.66H46.08V8.167H44.593a.846.846,0,0,0-.847.847v3.5a.846.846,0,0,0,.847.847H49.26a.846.846,0,0,0,.847-.847v-3.5a.846.846,0,0,0-.847-.847H47.773V6.36h9.975v7.849L42.027,18.7a.847.847,0,0,0,.233,1.66H46.08v1.807H44.593a.846.846,0,0,0-.847.847v3.5a.846.846,0,0,0,.847.847H49.26a.846.846,0,0,0,.847-.847v-3.5a.846.846,0,0,0-.847-.847H47.773V20.361h9.975V28.73L54.285,40.847h0l-.007.024h0l0,.006v0L50.954,52.5H49.259a.846.846,0,0,0-.847.847V56h-1.73a.847.847,0,0,0,0,1.693H84.505a.847.847,0,1,0,0-1.693h-1.73V53.35a.846.846,0,0,0-.847-.847h-1.7l-3.32-11.621v-.005L76.9,40.85v0L73.441,28.73V20.361h9.974v1.807H81.929a.846.846,0,0,0-.847.847v3.5a.846.846,0,0,0,.847.847H86.6a.846.846,0,0,0,.847-.847v-3.5a.846.846,0,0,0-.847-.847H85.109V20.361h3.821a.846.846,0,0,0,.232-1.66ZM85.749,9.86v1.807H82.775V9.86ZM73.441,1.969l9.444,2.7H73.441ZM48.413,9.86v1.807H45.439V9.86Zm0,14v1.807H45.439V23.861ZM59.44,1.693H71.748V4.667H59.44ZM71.748,6.36v6.906L61.389,6.36H71.748ZM59.44,7.1,69.8,14H59.44Zm0,8.6H71.748v2.974H59.44ZM57.779,40.253l7.815-5.471,7.815,5.471Zm14.73,1.693L65.594,45.4l-6.915-3.458ZM61.279,29.695h8.63l-4.315,3.02Zm10.469-9.334v6.906L61.39,20.361ZM59.44,21.1,69.8,28H59.44ZM48.3,4.667l9.444-2.7v2.7Zm0,14,9.444-2.7v2.7H48.3ZM59.081,30.223l5.037,3.526-7.555,5.288ZM55.627,42.312,63.7,46.349,52.936,51.732ZM79.595,54.2h1.488V56H50.106V54.2h9.481a.847.847,0,1,0,0-1.693H55.179L65.594,47.3,76.009,52.5H63.361a.847.847,0,1,0,0,1.693H79.595Zm-1.342-2.465L67.487,46.349l8.074-4.037Zm-3.627-12.7L67.07,33.749l5.037-3.526ZM73.441,18.668v-2.7l9.444,2.7Zm12.308,5.193v1.807H82.775V23.861Z" transform="translate(-41.413)" fill="#78809C"></path>
                        </g>
                      </g>
                    </svg>
                  </div>
                  <h3>Créditos contra Distribuidora de Energia, Gás e Água</h3>
                </div>
              </div>

              <div class="column">
                <div class="icons-block-container">
                  <div class="icon">
                    <svg xmlns="https://www.w3.org/2000/svg" width="59.821" height="59.821" viewBox="0 0 59.821 59.821" preserveAspectRatio="none">
                      <g id="brokerage" transform="translate(0)">
                        <path id="Caminho_214" data-name="Caminho 214" d="M25.086,12.543A12.543,12.543,0,1,0,12.543,25.086,12.558,12.558,0,0,0,25.086,12.543Zm-23.156,0A10.613,10.613,0,1,1,12.543,23.156,10.626,10.626,0,0,1,1.93,12.543Zm0,0" fill="#78809C"></path>
                        <path id="Caminho_215" data-name="Caminho 215" d="M82.895,58.895a.967.967,0,0,1,.965.965h1.93a2.891,2.891,0,0,0-1.93-2.717V56H81.93v1.142a2.887,2.887,0,0,0,.965,5.611.965.965,0,1,1-.965.965H80a2.891,2.891,0,0,0,1.93,2.717v1.142h1.93V66.436a2.887,2.887,0,0,0-.965-5.611.965.965,0,1,1,0-1.93Zm0,0" transform="translate(-70.351 -49.246)" fill="#78809C"></path>
                        <path id="Caminho_216" data-name="Caminho 216" d="M65.207,33.93a6.762,6.762,0,0,1,6.754,6.754,6.685,6.685,0,0,1-1.423,4.136L72.061,46a8.6,8.6,0,0,0,1.829-5.32A8.694,8.694,0,0,0,65.207,32a8.6,8.6,0,0,0-5.32,1.829l1.184,1.524a6.685,6.685,0,0,1,4.136-1.423Zm0,0" transform="translate(-52.664 -28.141)" fill="#78809C"></path>
                        <path id="Caminho_217" data-name="Caminho 217" d="M46,72.061,44.82,70.538a6.685,6.685,0,0,1-4.136,1.423,6.762,6.762,0,0,1-6.754-6.754,6.685,6.685,0,0,1,1.423-4.136l-1.524-1.184A8.6,8.6,0,0,0,32,65.207a8.694,8.694,0,0,0,8.684,8.684A8.6,8.6,0,0,0,46,72.061Zm0,0" transform="translate(-28.14 -52.664)" fill="#78809C"></path>
                        <path id="Caminho_218" data-name="Caminho 218" d="M166.594,17.367h-1.93V9.649h-1.93V5.789H157.91V0h-1.93V5.789h-4.824V9.649h-1.93v7.719H147.3V30.875h-1.93V25.086h-1.93V21.227h-2.895V16.4h-1.93v4.824h-2.895v3.859h-1.93v5.789H129.93V57.891H128v1.93h40.524v-1.93h-1.93ZM153.086,7.719H160.8v1.93h-7.719Zm-1.93,3.859h11.578v5.789H160.8V13.508h-1.93v3.859h-3.859V13.508h-1.93v3.859h-1.93ZM164.664,19.3V57.891H161.77V48.243h-9.648v9.649h-2.895V19.3ZM159.84,57.891h-5.789V50.172h5.789ZM137.649,23.156h3.859v1.93h-3.859Zm-1.93,3.859h7.719v3.859h-2.895v-1.93h-1.93v1.93h-2.895ZM131.859,32.8H147.3V57.891h-1.93V34.735h-1.93V57.891h-2.895V34.735h-1.93V57.891h-2.895V34.735h-1.93V57.891h-1.93Zm0,0" transform="translate(-112.562)" fill="#78809C"></path>
                        <path id="Caminho_219" data-name="Caminho 219" d="M320,176h1.93v1.93H320Zm0,0" transform="translate(-281.406 -154.773)" fill="#78809C"></path>
                        <path id="Caminho_220" data-name="Caminho 220" d="M360,176h1.93v1.93H360Zm0,0" transform="translate(-316.582 -154.773)" fill="#78809C"></path>
                        <path id="Caminho_221" data-name="Caminho 221" d="M400,176h1.93v1.93H400Zm0,0" transform="translate(-351.757 -154.773)" fill="#78809C"></path>
                        <path id="Caminho_222" data-name="Caminho 222" d="M320,224h1.93v1.93H320Zm0,0" transform="translate(-281.406 -196.984)" fill="#78809C"></path>
                        <path id="Caminho_223" data-name="Caminho 223" d="M360,224h1.93v1.93H360Zm0,0" transform="translate(-316.582 -196.984)" fill="#78809C"></path>
                        <path id="Caminho_224" data-name="Caminho 224" d="M400,224h1.93v1.93H400Zm0,0" transform="translate(-351.757 -196.984)" fill="#78809C"></path>
                        <path id="Caminho_225" data-name="Caminho 225" d="M320,272h1.93v1.93H320Zm0,0" transform="translate(-281.406 -239.195)" fill="#78809C"></path>
                        <path id="Caminho_226" data-name="Caminho 226" d="M360,272h1.93v1.93H360Zm0,0" transform="translate(-316.582 -239.195)" fill="#78809C"></path>
                        <path id="Caminho_227" data-name="Caminho 227" d="M400,272h1.93v1.93H400Zm0,0" transform="translate(-351.757 -239.195)" fill="#78809C"></path>
                        <path id="Caminho_228" data-name="Caminho 228" d="M320,320h1.93v1.93H320Zm0,0" transform="translate(-281.406 -281.406)" fill="#78809C"></path>
                        <path id="Caminho_229" data-name="Caminho 229" d="M360,320h1.93v1.93H360Zm0,0" transform="translate(-316.582 -281.406)" fill="#78809C"></path>
                        <path id="Caminho_230" data-name="Caminho 230" d="M400,320h1.93v1.93H400Zm0,0" transform="translate(-351.757 -281.406)" fill="#78809C"></path>
                        <path id="Caminho_231" data-name="Caminho 231" d="M320,368h1.93v1.93H320Zm0,0" transform="translate(-281.406 -323.617)" fill="#78809C"></path>
                        <path id="Caminho_232" data-name="Caminho 232" d="M360,368h1.93v1.93H360Zm0,0" transform="translate(-316.582 -323.617)" fill="#78809C"></path>
                        <path id="Caminho_233" data-name="Caminho 233" d="M400,368h1.93v1.93H400Zm0,0" transform="translate(-351.757 -323.617)" fill="#78809C"></path>
                        <path id="Caminho_234" data-name="Caminho 234" d="M0,240H1.93v1.93H0Zm0,0" transform="translate(0 -211.054)" fill="#78809C"></path>
                        <path id="Caminho_235" data-name="Caminho 235" d="M0,272H1.93v11.578H0Zm0,0" transform="translate(0 -239.195)" fill="#78809C"></path>
                        <path id="Caminho_236" data-name="Caminho 236" d="M48,296h1.93v1.93H48Zm0,0" transform="translate(-42.211 -260.301)" fill="#78809C"></path>
                        <path id="Caminho_237" data-name="Caminho 237" d="M48,328h1.93v11.578H48Zm0,0" transform="translate(-42.211 -288.441)" fill="#78809C"></path>
                        <path id="Caminho_238" data-name="Caminho 238" d="M96,240h1.93v1.93H96Zm0,0" transform="translate(-84.422 -211.054)" fill="#78809C"></path>
                        <path id="Caminho_239" data-name="Caminho 239" d="M96,272h1.93v11.578H96Zm0,0" transform="translate(-84.422 -239.195)" fill="#78809C"></path>
                        <path id="Caminho_240" data-name="Caminho 240" d="M480,480h1.93v1.93H480Zm0,0" transform="translate(-422.109 -422.109)" fill="#78809C"></path>
                        <path id="Caminho_241" data-name="Caminho 241" d="M96,480h1.93v1.93H96Zm0,0" transform="translate(-84.422 -422.109)" fill="#78809C"></path>
                      </g>
                    </svg>
                  </div>
                  <h3>Créditos contra Empresas de grande porte em geral</h3>
                </div>
              </div>

            </div>

            <!--
            <div class="testimonials-container">
              <div class="testimonials-slide">

                <div class="testimonial" v-for="(testemunho, index) in testimonials" :key="index">
                  <div class="columns">
                    <div class="column is-one-fifth">
                      <img class="testimonial-img" :src="'img/' + testemunho.foto" :alt="testemunho.nome">
                    </div>
                    <div class="column">
                      <div class="testimonial-name">{{ testemunho.nome }}</div>
                      <div class="testimonial-profession">{{ testemunho.profissao }}</div>
                      <div class="testimonial-text">
                        {{ testemunho.texto }}
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            -->

          </div>
        </div>
      </section>

      <section id="blog" class="hero">
        <div class="hero-body">
          <div class="container fat">
            <h1 class="title">Blog CertJud</h1>

            <div class="post-blocks-container">
              <div class="is-loading" v-if="isLoading"></div>
              <div class="columns margin-top">

                <div class="column" v-for="(post, index) in posts" :key="index">
                  <div class="post-blocks">
                    <div class="post-block-img">
                      <img :src="post._embedded['wp:featuredmedia']['0'].source_url">
                    </div>
                    <h3>
                      <a :href="post.link" target="_blank">
                        {{ post.title.rendered }}
                      </a>
                    </h3>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contato" class="is-fullheight">
        <div class="contact-container">

            <div class="cta-container">
              <div class="container">

                <div class="columns">

                  <div class="column">
                    <h1 class="title">Você não precisa esperar</h1>
                  </div>
                  <div class="column is-two-fifths text-right">
                    <button class="button is-orange is-rounded is-uppercase is-size-18" @click="toggleModal()">Não quero esperar</button>
                  </div>
                </div>
                
              </div>
            </div>

            <div class="contacts">
              <div class="container">

                <p>Dúvidas? Nosso time de especialistas está preparado para mais orientações sobre o processo de negociação e pagamento.</p>
                
                <p>Oferecemos sempre a melhor proposta pelo seu crédito judicial.</p>

                <div class="contact-icons-container">
                  <div class="columns">
                    <div class="column">
                      <div class="contact-icon">
                        <img src="img/icons/email.png">
                      </div>
                      <h3><em>E-mail</em></h3>
                      <p>Envie suas dúvidas</p>
                      <p><strong>comercial@certjud.com.br</strong></p>
                    </div>

                    <div class="column">
                      <div class="contact-icon">
                        <img src="img/icons/telefone.png">
                      </div>
                      <h3><em>Telefone</em></h3>
                      <p>Entre em contato</p>
                      <p><strong>(71) 3052 3460</strong></p>
                    </div>

                    <div class="column">
                      <div class="contact-icon">
                        <img src="img/icons/chat.png">
                      </div>
                      <h3><em>Chat</em></h3>
                      <p>Receba auxílio imediato</p>
                      <a @click="toggleChat"><strong>Iniciar conversa</strong></a>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>

          
        </div>
      </section>

      <footer class="footer">
        <div class="container">

          <div class="columns">
            <div class="column footer-logo">
              <img src="img/logo-certjud-br.svg" alt="Certjud">

              <div class="social">
                <a href="https://www.facebook.com/CertJud-110583463985789" target="_blank">
                  <img src="img/icons/icon-facebook.svg" alt="facebook">
                </a>
                <a href="https://www.instagram.com/cert.jud" target="_blank">
                  <img src="img/icons/icon-instagram.svg" alt="instagram">
                </a>
                <a href="http://linkedin.com/in/certjud-compra-de-cr%C3%A9ditos-judiciais-3258a41a9" target="_blank">
                  <img src="img/icons/icon-linkedin.svg" alt="linkedin">
                </a>
              </div>
            </div>

            <div class="column">
              <ul class="text-center">
                <li>
                  <a href="#creditos">Créditos Judiciais</a>
                </li>
                <li>
                  <a href="#creditos">Como funciona</a>
                </li>
                <li>
                  <a href="#parceiro">Seja um advogado parceiro</a>
                </li>
                <li>
                  <a href="#blog">Notícias</a>
                </li>
                <li>
                  <a href="#contato">Fale Conosco</a>
                </li>
              </ul>
            </div>

            <div class="column">
              <address class="address">
                Av. Estados Unidos, 04<br>
                Edf. Visconde de Cayru<br>
                Sala 304 - Comércio<br>
                Salvador/BA<br>
                CEP 40.010-020
              </address>
              <address class="address">
                Av. Prefeito Osmar Cunha, 183<br>
                Edf. Ceisa Center<br>
                Sala 183, Bloco B - Centro<br>
                Florianópolis/SC<br>
                CEP: 88015-100<br>
                Tel: (48) 3084-0407 | 99134-2526
              </address>
            </div>
          </div>

          <p class="copy">© 2020 CertJud. Todos os Direitos Reservados</p>
        </div>
      </footer>

      <!-- HIDDEN MODAL -->
      <div id="modal" class="modal" :class="{ 'show' : modalIsOpen }">
        
        <div class="modal-background"></div>

        <div class="modal-content">
          <div class="cta-form">
            <div class="hero-body">
              <div class="container">

                <div class="columns">

                  <div class="column is-three-fifths">
                    <h1 class="title">Quero vender meu <br>processo</h1>

                    <p>Após recebermos suas informações,  entraremos em contato em até 24h para sabermos mais informações do seu processo.</p>
                  </div>

                  <div class="column">
                    <div class="form">
                      <form class="form" action="https://certjud.com.br/?sent=client" method="POST">
                        <input class="input" type="text" name="nome" placeholder="Nome completo" required>
                        <input class="input" type="email" name="mail" placeholder="E-mail" required>
                        <input class="input phone_with_ddd" type="tel" name="fone" placeholder="Telefone com DDD" required>
                        <select class="input" name="tipoprocesso" required>
                          <option value="" disabled selected>Tipo do processo</option>
                          <option>Precatório Federal</option>
                          <option>Processo contra Bancos e/ou Instituições Financeiras</option>
                          <option>Processo contra prestadoras de serviços de energia, gás, água e telefonia</option>
                          <option>Processo trabalhista</option>
                          <option>Processo contra empresas de grande porte</option>
                        </select>
                        <button type="submit" class="button is-orange is-rounded is-uppercase is-size-18" name="envia">Nós ligamos pra você</button>
                      </form>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
        <button class="modal-close is-large" aria-label="close" @click="toggleModal()"></button>
      </div>
    
      <div class="chat-window" :class="{ 'minimized' : chatMinimized }">
        <div class="chat-header">
          Chat Certjud
          <a @click="toggleChat()">
            <i class="fas fa-minus"></i>
          </a>
        </div>
        <div class="chat-body">
          <iframe src="https://links.collect.chat/5cf91e517e286248f65871b6" width="100%" height="400" frameborder="0"></iframe>
        </div>
      </div>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="scripts/main.js"></script>
    <script>
      /** Hide Navbar on Scroll **/
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        var element = document.getElementById("navbar");
        if (prevScrollpos > currentScrollPos) {
          element.style.top = "0";
          element.style.backgroundColor = "rgba(0, 0, 0, .8)";
        } else if(prevScrollpos < currentScrollPos) {
          element.style.top = "-100px";
          element.style.backgroundColor = "rgba(0, 0, 0, 0)";
        }
        prevScrollpos = currentScrollPos;
        if(currentScrollPos == 0) {
          element.style.backgroundColor = "rgba(0, 0, 0, 0)";
        }
      }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/jquery.mask.min.js"></script>
    <script>
      /** Smooth Scroll **/
      $(document).ready( function() {
        $("a").on( 'click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function() {
              window.location.hash = hash;
            });
          }
        });

        $(".navbar-burger").click(function() {
          // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
          $(".navbar-burger").toggleClass("is-active");
          $(".navbar-menu").toggleClass("is-active");
        });
        $('.phone_with_ddd').mask('(00) 00000-0000');
      });
    </script>
    <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/77daf5f5-c38a-4a9d-a4b0-7c5810a0cdd2-loader.js" ></script>
  </body>
</html>