<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/avisos.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/sidebar.js" defer></script>
    <link rel="shortcut icon" type="image/png" href="css/img/logo.png"/>
    <title> Avisos - Domos </title>
</head>

<body>
  <!-- Container -->
  <div class="grid-container">
    <!--Cabeçalho de pesquisa e filtros-->  
    <header class="header d-flex align-items-center justify-content-between m-3">
        <div class="menu-icon" onclick="openSidebar()">
          <span class=""><i class="fa-solid fa-bars color-subtitulo"></i></span>
        </div>
        <div class="d-flex w-50 ">
          <button class="btn"><i class="fa-solid fa-magnifying-glass search-btn"></i></button>
          <input type="text" class="search ps-2 m-2 w-100" placeholder="Pesquisar...">
        </div>
        
        <div class="justify-content-around w-75 btns-geral" id="btns_geral">
          <button class="btn btn-critico w-25 m-2 rounded-5 fs-5 color-fff" type="button">Crítico</button>
          <button class="btn btn-urgente w-25 m-2 rounded-5 fs-5 color-fff" type="button">Urgente</button>
          <button class="btn btn-importante w-25 m-2 rounded-5 fs-5 color-fff" type="button">Importante</button>
          <button class="btn filter-btn" type="button"><i class="fa-solid fa-filter filter-btn"></i></button>
        </div>

        <div class=""> 
          <select name="" id="" class="select-customiza">
            <option selected class="">Filtros</option>
            <option value="critico" id="btn_critico" class="importancia-critico">Crítico</option>
            <option value="urgente" id="btn_urgente" class="importancia-urgente">Urgente</option>
            <option value="importante" id="btn_importante" class="importancia-importante">Importante</option>
          </select>
        </div>

    </header>
    
    <!-- Navegação em abas pela barra lateral (sidebar) -->
      <aside id="sidebar" class="sidebar gradient-custom">
        <div class="sidebar-title d-flex p-3 flex-column align-items-end">
          <span class="pt-3 px-3" onclick="closeSidebar()">
            <i class="fa-solid fa-xmark fs-1"></i>
          </span>

          <div class="sidebar-brand">
            <img src="css/img/logo_branca_icon.png" class="img-fluid" style="height: 14rem; width: 14rem;">
          </div>
          
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="avisos.php">
                <div><i class="fa-solid fa-bell col-2"></i> Avisos </div>
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="anuncios.php">
                <div><i class="fa-solid fa-cart-shopping col-2"></i> Anúncios </div>
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="reservas.php">
              <div><i class="fa-solid fa-calendar-days col-2"></i> Reservas </div>
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="regimento.php">
                <div><i class="fa-solid fa-note-sticky col-2"></i> Regimento </div>
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="informacoes.php">
                <div><i class="fa-solid fa-gear col-2"></i></i>Configurações </div>
            </a>
          </li>
        </ul>
      </aside>

    <!-- Main principal (container)--> 
    <main class="main-container m-2">

      <!-- Div contendo os cards -->  
      <div class="row justify-content-between">

        <!-- Cards --> 
        <div class="card m-2 p-0" style="max-width: 20rem;">
          <div class="card-header bg-transparent">
            <div class="fs-5 color-titulo d-flex">
              <div class="flex-grow-1"> <p class="color-titulo"> Pia quebrada </p> </div>
              <!--Menu dropdown com funcionalidades que serão adicionadas posteriormente-->
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Excluir</a></li>
                </ul>
              </div>
            </div> 
            <div>
              <h5 class="card-subtitle fs-6 color-subtitulo">18/06/2023 - 14:31</h5>
            </div>
          </div>

          <div class="card-body text-success pt-2">
            <p class="card-text fs-9 text-justify color-descricao">Aviso importante aos moradores do condomínio: Informamos que a pia da área comum encontra-se quebrada. 
              Pedimos a todos que evitem utilizar o local temporariamente até que a manutenção seja concluída. 
              Contamos com a compreensão e colaboração de todos para a resolução rápida desse inconveniente. Obrigado.</p>
          </div>
          <div class="card-footer importancia-critico"></div>
        </div> 
      
        <div class="card m-2 p-0" style="max-width: 20rem;">
          <div class="card-header bg-transparent">
            <div class="fs-5 color-titulo d-flex">
              <div class="flex-grow-1"> <p class="color-titulo"> Inauguração do Espaço Kids </p> </div>
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Excluir</a></li>
                </ul>
              </div>
            </div> 
            <div>
              <h5 class="card-subtitle fs-6 color-subtitulo">18/06/2023 - 14:31</h5>
            </div>
          </div>

          <div class="card-body text-success pt-2">
            <p class="card-text fs-9 text-justify color-descricao">Inauguração do Espaço Kids do condomínio! É com grande alegria que informamos que o Espaço Kids será 
              inaugurado no dia 17 de junho de 2023. O espaço contará com diversas brincadeiras e atividades para as crianças se divertirem. 
              Contamos com a presença de todos para celebrar essa conquista!</p> 
          </div>
          <div class="card-footer importancia-urgente"></div>
        </div>

        <div class="card m-2 p-0" style="max-width: 20rem;">
          <div class="card-header bg-transparent">
            <div class="fs-5 color-titulo d-flex">
              <div class="flex-grow-1"> <p class="color-titulo"> Reforma quadra </p> </div>
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Excluir</a></li>
                </ul>
              </div>
            </div> 
            <div>
              <h5 class="card-subtitle fs-6 color-subtitulo">18/06/2023 - 14:31</h5>
            </div>
          </div>

          <div class="card-body text-success pt-2">
            <p class="card-text fs-9 text-justify color-descricao">Reforma da quadra do condomínio! A partir de hoje, a quadra estará interditada devido à obra que durará cerca de 60 dias. 
              Pedimos que respeitem as sinalizações de segurança e mantenham as crianças afastadas do local. 
              Agradecemos a compreensão e colaboração de todos nesse momento importante para o condomínio.</p>
          </div>
          <div class="card-footer importancia-importante"></div>
        </div>

        <div class="card m-2 p-0" style="max-width: 20rem;">
          <div class="card-header bg-transparent">
            <div class="fs-5 color-titulo d-flex">
              <div class="flex-grow-1"> <p class="color-titulo"> Excesso de água </p> </div>
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Excluir</a></li>
                </ul>
              </div>
            </div> 
            <div>
              <h5 class="card-subtitle fs-6 color-subtitulo">18/06/2023 - 14:31</h5>
            </div>
          </div>

          <div class="card-body text-success pt-2">
            <p class="card-text fs-9 text-justify color-descricao">O consumo excessivo de água no condomínio está levando à escassez desse recurso finito. Pedimos a colaboração 
              de todos para evitar o desperdício, com medidas simples como fechar a torneira enquanto escova os dentes ou reduzir o tempo no banho. 
              Juntos, podemos preservar o meio ambiente.</p>
          </div>
          <div class="card-footer importancia-urgente"></div>
        </div>

        <div class="card m-2 p-0" style="max-width: 20rem;">
          <div class="card-header bg-transparent">
            <div class="fs-5 color-titulo d-flex">
              <div class="flex-grow-1"> <p class="color-titulo"> Horário do salão de festa </p> </div>
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Excluir</a></li>
                </ul>
              </div>
            </div> 
            <div>
              <h5 class="card-subtitle fs-6 color-subtitulo">18/06/2023 - 14:31</h5>
            </div>
          </div>

          <div class="card-body text-success pt-2">
            <p class="card-text fs-9 text-justify color-descricao">Por favor, respeite o horário do salão de festa para evitar atrasos e inconvenientes para outros eventos. 
              O horário de encerramento é rigoroso e multas podem ser aplicadas por violação.</p>
          </div>
          <div class="card-footer importancia-critico"></div>
        </div>

        <div class="card m-2 p-0" style="max-width: 20rem;">
          <div class="card-header bg-transparent">
            <div class="fs-5 color-titulo d-flex">
              <div class="flex-grow-1"> <p class="color-titulo"> Feira cultural </p> </div>
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-ellipsis-vertical text-dark"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Editar</a></li>
                  <li><a class="dropdown-item" href="#">Excluir</a></li>
                </ul>
              </div>
            </div> 
            <div>
              <h5 class="card-subtitle fs-6 color-subtitulo">18/06/2023 - 14:31</h5>
            </div>
          </div>

          <div class="card-body text-success pt-2">
            <p class="card-text fs-9 text-justify color-descricao"> Moradores, estaremos promovendo uma feira de festa junina nos dias 12 e 13/06,
              cada moraodr poderá participar com suas artes ou comidas. Faça sua inscrição na portaria. Contamos com a ajuda e colaboração de todos!
            </p>
          </div>
          <div class="card-footer importancia-importante"></div>
        </div>

      </div>
        
      <!-- Modal (pop up)-->
      <div class="d-flex justify-content-end m-5">
        <div class="absolute" style="overflow-y: auto;">
          <button type="button" class="btn btn-criar rounded-circle justify-content-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-plus icons-white"></i></button>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              
              <!-- Header do modal-->
              <div class="modal-header">
                <h5 class="modal-title titulo color-0491a3" id="staticBackdropLabel">Criar aviso</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <!-- Body do modal-->
              <div class="modal-body">
                <!-- Formulário de criar aviso-->
                <form>
                  <div class="mb-3">
                    <input type="text" class="form-control" id="titulo_aviso" placeholder="Título">
                  </div>

                  <div class="mb-3">
                      <textarea class="form-control form-customiza" id="descricao_aviso" placeholder="Descrição" rows="10"></textarea>
                  </div>

                  <select class="form-select select-modal mb-3">
                      <option selected class="">Escolha a importância do aviso</option>
                      <option value="critico" id="btn_critico" class="importancia-critico">Crítico</option>
                      <option value="urgente" id="btn_urgente" class="importancia-urgente">Urgente</option>
                      <option value="importante" id="btn_importante" class="importancia-importante">Importante</option>
                  </select>
                  <input type="file" class="btn col-5"> 
              </form>

              <!-- Footer do modal-->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-exit" data-bs-dismiss="modal">Voltar</button>
                <a href="avisos.php"><button type="button" class="btn btn-publicar">Publicar</button></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>
</html>