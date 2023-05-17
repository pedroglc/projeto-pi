<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/splash.css">
        <link rel="shortcut icon" href="imgs/dashboard.ico" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
        <title>Dashboard | Painel</title>
    </head>
<body>
    <!-- Splash Screen -->
    <!-- <div class="wrapper-splash"><div class="follow-the-leader"><div></div><div></div><div></div><div></div></div></div> -->
    <header data-js-header>
        <div>
            <img src="imgs/e-ciclo-vetor.svg" alt="Logo">
        </div>
        <div class="menu-options-links">
            <i class="fa-brands fa-github"><a href="#">GitHub</a></i>
        </div>
    </header>
    <nav>
        <section class="box-user">
            <!-- <img src="imgs/e-ciclo-vetor.svg" class="img-user" alt="Imagem de usuário"> -->
            <h3>Samuel R Souza</h3>
            <h5>Administrador</h5>
        </section>
        <section class="box-itens-nav">
            <ul>
                <li data-js-tabMenu-item><i class="fa-solid fa-house"></i>Resumo</li>
                <li data-js-tabMenu-item><i class="fa-solid fa-calendar-days"></i>Agenda</li>
                <li data-js-tabMenu-item><i class="fa-solid fa-user"></i>Usuários</li>
                <li data-js-tabMenu-item><i class="fa-solid fa-building-flag"></i>Empresas</li>
                <li data-js-tabMenu-item><i class="fa-solid fa-recycle"></i>Coletores</li>
                <li data-js-tabMenu-item><i class="fa-solid fa-gear"></i>Configurações</li>
            </ul>
        </section>
    </nav>
    <main data-js-main>
        <section class="main-section ativo" data-js-tabMenu-content>
            <article class="article-titles">
                <h1>Resumo</h1>
                <input type="text" class="txt-pesquisa" placeholder="Pesquise em Resumo">
            </article>
        </section>
        <section class="main-section" data-js-tabMenu-content>
            <article class="article-titles">
                <h1>Agenda</h1>
                <input type="text" class="txt-pesquisa" placeholder="Pesquise em Agenda">
            </article>
            <article class="box-btns-crud">
                <button class="crud-btn-criar" data-js-btnTabFormsTables>Criar Novo</button>
            </article>
            <form method="#" action="" class="box-form-crud" data-js-frmTabFormsTables>
                <h1>Cadastrar Agendamentos</h1>
                <input type="number" placeholder="Coletor" class="txtIdColetorAgendamento">
                <input type="number" placeholder="Empresa" class="txtIdEmpresaAgendamento">
                <input type="number" placeholder="Cliente" class="txtIdUsuarioAgendamento">
                <input type="date" placeholder="Data da coleta" class="txtDataColetaAgendamento">
                <input type="date" placeholder="Data da entrega" class="txtDataEntregaAgendamento">
                <button class="btnLimparCadastro">Limpar</button>
                <input type="submit" value="Cadastrar" class="btnSubmitCadastrar">
            </form>
            <section class="box-table" data-js-tableTabFormsTables>
                <div class="row-header-table">
                    <div class="col-header-table">Ações</div>
                    <div class="col-header-table">#</div>
                    <div class="col-header-table">Empresa coletora</div>
                    <div class="col-header-table">Empresa recicladora</div>
                    <div class="col-header-table">Cliente</div>
                    <div class="col-header-table">Data da coleta</div>
                    <div class="col-header-table">Data da entrega</div>
                </div>
                <div class="row-table">
                    <div class="col-table actions">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <i class="fa-solid fa-trash"></i>
                    </div>
                    <div class="col-table">23</div>
                    <div class="col-table">Empresa A</div>
                    <div class="col-table">Empresa B</div>
                    <div class="col-table">Samuel R Souza</div>
                    <div class="col-table">28/06/2019</div>
                    <div class="col-table">30/06/2019</div>
                </div>
            </section>
        </section>
        <section class="main-section" data-js-tabMenu-content>
            <article class="article-titles">
                <h1>Usuários</h1>
                <input type="text" class="txt-pesquisa" placeholder="Pesquise em Usuários">
            </article>
            <article class="box-btns-crud">
                <button class="crud-btn-criar" data-js-btnTabFormsTables>Criar Novo</button>
            </article>
            <form method="POST" action="inserir_dados.php" class="box-form-crud" data-js-frmTabFormsTables>
                <h1>Cadastrar Usuários</h1>
                <input type="text" placeholder="Nome" class="txtNomeUsuario"name="nome">
                <input type="text" placeholder="Sobrenome" class="txtSobreNomeUsuario"name="sobrenome">
                <input type="text" placeholder="CPF" class="txtCpfUsuario"name="cpf">
                <input type="text" placeholder="E-Mail" class="txtEmailUsuario"name="email">
                <input type="text" placeholder="Rua" class="txtRuaUsuario"name="rua">
                <input type="number" placeholder="Nº"name="numero">
                <input type="text" placeholder="Bairro" class="txtBairroUsuario"name="bairro">
                <input type="number" placeholder="CEP" class="txtCepUsuario"name="cep">
                <input type="text" placeholder="Cidade" class="txtCidadeUsuario"name="cidade">
                <input type="number" placeholder="telefone" class="txtCidadeUsuario"name="telefone">
                <select type="text" placeholder="UF" class="txtUfUsuario"name="uf">
                    <option value="sp">SP</option>
                    <option value="mg">MG</option>
                    <option value="pr">PR</option>
                    <option value="rj">RJ</option>
                    <option value="sc">SC</option>
                </select>
                <button class="btnLimparCadastro">Limpar</button>
                <a href="">
                    <input type="submit" value="CadastrarUsuario" class="btnSubmitCadastrar" name="CadastrarUsuario">
                </a>
                <?php
                require_once('01-conexao.php'); 
                require_once('dados_consumidor.php');
                    if(isset($_POST['CadastrarUsuario'])){                        
                        inserir_dadosUsuario();
                    }
                ?>
            </form>
            <section class="box-table" data-js-tableTabFormsTables>
                <div class="row-header-table">
                    <div class="col-header-table">Ações</div>
                    <div class="col-header-table">Id</div>
                    <div class="col-header-table">Nome</div>
                    <div class="col-header-table">Sobrenome</div>
                    <div class="col-header-table">CPF</div>
                    <div class="col-header-table">E-Mail</div>
                    <div class="col-header-table">Telefone</div>
                    <div class="col-header-table">Rua</div>
                    <div class="col-header-table">Nº</div>
                    <div class="col-header-table">Bairro</div>
                    <div class="col-header-table">CEP</div>
                    <div class="col-header-table">Cidade</div>
                    <div class="col-header-table">UF</div>
                </div>
                <?php 
                    listar_consumidor();
                    if (isset($registrosC) && !empty($registrosC)) {
                    foreach ($registrosC as $registro) : ?>
                <div class="row-table">
                    <div class="col-table actions">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <a href="index%2302.php?excluirConsumidor=<?php $registro['idConsumidor'] ?>">
                            <i class="fa-solid fa-trash"name="excluirConsumidor"></i> 
                        </a>
                    </div>
                    <div class="col-table"><?php echo $registro['idConsumidor'] ?></div>
                    <div class="col-table"><?php echo $registro['nomeConsumidor'] ?></div>
                    <div class="col-table"><?php echo $registro['sobrenome'] ?></div>
                    <div class="col-table"><?php echo $registro['cpf'] ?></div>
                    <div class="col-table"><?php echo $registro['email'] ?></div>
                    <div class="col-table"><?php echo $registro['telefone'] ?></div>
                    <div class="col-table"><?php echo $registro['rua'] ?></div>
                    <div class="col-table"><?php echo $registro['numero'] ?></div>
                    <div class="col-table"><?php echo $registro['bairro'] ?></div>
                    <div class="col-table"><?php echo $registro['cep'] ?></div>
                    <div class="col-table"><?php echo $registro['cidade'] ?></div>
                    <div class="col-table"><?php echo $registro['uf'] ?></div>
                </div>
                <?php endforeach ;
                        }
                    ?>  
            </section>
        </section>
        <section class="main-section" data-js-tabMenu-content>
            <article class="article-titles">
                <h1>Empresas</h1>
                <input type="text" class="txt-pesquisa" placeholder="Pesquise em Empresas">
            </article>
            <article class="box-btns-crud">
                <button class="crud-btn-criar" data-js-btnTabFormsTables>Criar Novo</button>
            </article>
            <form method="post" action="" class="box-form-crud" data-js-frmTabFormsTables>
                <h1>Cadastrar Empresas</h1>
                <input type="text" placeholder="Nome" class="txtNomeEmpresa" name="nome">
                <input type="number" placeholder="CNPJ" class="txtCnpjEmpresa"name="cnpj">
                <input type="text" placeholder="E-Mail" class="txtEmailEmpresa"name="email">
                <input type="text" placeholder="Rua" class="txtRuaUsuario"name="rua">
                <input type="number" placeholder="Nº"name="numero">
                <input type="text" placeholder="Bairro" class="txtBairroUsuario"name="bairro">
                <input type="number" placeholder="CEP" class="txtCepUsuario"name="cep">
                <input type="text" placeholder="Cidade" class="txtCidadeUsuario"name="cidade">
                <input type="number" placeholder="telefone" class="txtCidadeUsuario"name="telefone">               
                <select type="text" placeholder="UF" class="txtUfUsuario"name="uf">
                    <option value="sp">SP</option>
                    <option value="mg">MG</option>
                    <option value="pr">PR</option>
                    <option value="rj">RJ</option>
                    <option value="sc">SC</option>
                </select>
                <button class="btnLimparCadastro">Limpar</button>
                <a href=""name="CadastrarEmpresa">
                <input type="submit" value="Cadastrar" class="btnSubmitCadastrar"name="CadastrarEmpresa">
                </a>
                <?php
                require_once('dados_empresas.php');
                    if(isset($_POST['CadastrarEmpresa'])){                        
                        inserir_Empresa();
                    }
                ?>
            </form>
            <form action="POST">
            <section class="box-table" data-js-tableTabFormsTables>
                <div class="row-header-table">
                    <div class="col-header-table"><th>Ações</th></div>
                    <div class="col-header-table">id</div>
                    <div class="col-header-table">Nome</div>
                    <div class="col-header-table">cnpj</div>
                    <div class="col-header-table">E-Mail</div>
                    <div class="col-header-table">telefone</div>
                    <div class="col-header-table">Rua</div>
                    <div class="col-header-table">Nº</div>
                    <div class="col-header-table">Bairro</div>
                    <div class="col-header-table">CEP</div>
                    <div class="col-header-table">Cidade</div>
                    <div class="col-header-table">UF</div>
                </div>
                <?php 
                    listar_empresas();
                    if (isset($registrosE) && !empty($registrosE)) {
                    foreach ($registrosE as $registro) : ?>               
                <div class="row-table"> 
                    <div class="col-table actions">                
                    <i class="fa-solid fa-pen-to-square"></i>
                        <a href="index%2302.php?excluirEmpresa=<?= $registro['idEmpresa'] ?>">
                            <i class="fa-solid fa-trash"name="excluirEmpresa"></i> 
                        </a>                                               
                    </div>
                    <div class="col-table"><?php echo $registro['idEmpresa'] ?></div>
                    <div class="col-table"><?php echo $registro['nomeEmpresa'] ?></div>
                    <div class="col-table"><?php echo $registro['cnpj'] ?></div>
                    <div class="col-table"><?php echo $registro['email'] ?></div>
                    <div class="col-table"><?php echo $registro['telefone'] ?></div>
                    <div class="col-table"><?php echo $registro['rua'] ?></div>
                    <div class="col-table"><?php echo $registro['numero'] ?></div>
                    <div class="col-table"><?php echo $registro['bairro'] ?></div>
                    <div class="col-table"><?php echo $registro['cep'] ?></div>
                    <div class="col-table"><?php echo $registro['cidade'] ?></div>
                    <div class="col-table"><?php echo $registro['UF'] ?></div>               
                </div> 
                    <?php endforeach ;
                        }
                    ?>               
            </section>           
            </form>
        </section>
        <section class="main-section" data-js-tabMenu-content>
            <article class="article-titles">
                <h1>Coletores</h1>
                <input type="text" class="txt-pesquisa" placeholder="Pesquise em Coletores">
            </article>
            <article class="box-btns-crud">
                <button class="crud-btn-criar" data-js-btnTabFormsTables>Criar Novo</button>
            </article>
            <form method="post" action="" class="box-form-crud" data-js-frmTabFormsTables>
                <h1>Cadastrar Coletores</h1>
                <input type="text" placeholder="Nome" class="txtNomeUsuario"name="nome">
                <input type="text" placeholder="Sobrenome" class="txtSobreNomeUsuario"name="sobrenome">
                <input type="number" placeholder="CPF" class="txtCpfUsuario"name="cpf">
                <input type="text" placeholder="E-Mail" class="txtEmailUsuario"name="email">
                <input type="text" placeholder="Rua" class="txtRuaUsuario"name="rua">
                <input type="number" placeholder="Nº"name="numero">
                <input type="text" placeholder="Bairro" class="txtBairroUsuario"name="bairro">
                <input type="number" placeholder="CEP" class="txtCepUsuario"name="cep">
                <input type="text" placeholder="Cidade" class="txtCidadeUsuario"name="cidade">
                <input type="number" placeholder="telefone" class="txtCidadeUsuario"name="telefone">
                <select type="text" placeholder="UF" class="txtUfUsuario"name="uf">
                    <option value="sp">SP</option>
                    <option value="mg">MG</option>
                    <option value="pr">PR</option>
                    <option value="rj">RJ</option>
                    <option value="sc">SC</option>
                </select>
                <button class="btnLimparCadastro">Limpar</button>
                <input type="submit" value="Cadastrar" class="btnSubmitCadastrar"name="CadastrarColetor">
            </form>
            <?php
                require_once('dados_coletores.php');
                    if(isset($_POST['CadastrarColetor'])){                        
                        inserir_coletor();
                    }
                ?>
            <section class="box-table" data-js-tableTabFormsTables>
                <div class="row-header-table">
                    <div class="col-header-table">Ações</div>
                    <div class="col-header-table">iD</div>
                    <div class="col-header-table">Nome</div>
                    <div class="col-header-table">Sobrenome</div>
                    <div class="col-header-table">CPF</div>
                    <div class="col-header-table">E-Mail</div>
                    <div class="col-header-table">Telefone</div>
                    <div class="col-header-table">Rua</div>
                    <div class="col-header-table">Nº</div>
                    <div class="col-header-table">Bairro</div>
                    <div class="col-header-table">CEP</div>
                    <div class="col-header-table">Cidade</div>
                    <div class="col-header-table">UF</div>
                </div>
                <?php 
                    listar_coletor();
                    if (isset($registros) && !empty($registros)) {
                    foreach ($registros as $registro) : ?>
                <div class="row-table">
                    <div class="col-table actions">
                    <i class="fa-solid fa-pen-to-square"></i>
                        <a href="index%2302.php?excluirEmpresa=<?= $registro['idColetor'] ?>">
                            <i class="fa-solid fa-trash"name="excluirEmpresa"></i> 
                        </a> 
                    </div>
                    <div class="col-table"><?php echo $registro['idColetor'] ?></div>
                    <div class="col-table"><?php echo $registro['nomeColetor'] ?></div>
                    <div class="col-table"><?php echo $registro['sobrenome'] ?></div>
                    <div class="col-table"><?php echo $registro['cpf'] ?></div>
                    <div class="col-table"><?php echo $registro['email'] ?></div>
                    <div class="col-table"><?php echo $registro['telefone'] ?></div>
                    <div class="col-table"><?php echo $registro['rua'] ?></div>
                    <div class="col-table"><?php echo $registro['numero'] ?></div>
                    <div class="col-table"><?php echo $registro['bairro'] ?></div>
                    <div class="col-table"><?php echo $registro['cep'] ?></div>
                    <div class="col-table"><?php echo $registro['cidade'] ?></div>
                    <div class="col-table"><?php echo $registro['uf'] ?></div>
                </div>
                <?php endforeach ;
                        }
                    ?> 
            </section>
        </section>
        <section class="main-section" data-js-tabMenu-content>
            <article class="article-titles">
                <h1>Configurações</h1>
                <input type="text" class="txt-pesquisa" placeholder="Pesquise em Configurações">
            </article>
        </section>
        <div class="subirGrid-icon" data-js-subirGrid-icon>
            <i class="fa-solid fa-chevron-up"></i>
        </div>
    </main>
    <aside>
        <h1>Acesso</h1>
        <article class="article-infos">
            <div class="box-infos">
                <div class="infos-local">
                    <p>Samuel Ribeiro de Souza</p>
                    <p>rssamuel17@gmail.com</p>
                    <p>Administrador</p>
                </div>
            </div>
        </article>
        <h1>Informações</h1>
        <article class="article-infos">
            <div class="box-infos">
                <div class="infos-local">
                    <p>16:24</p>
                    <p>Registro, SP - BR</p>
                    <p>29° C</p>
                </div>
            </div>
        </article>
    </aside>
    <footer>Todos os direitos reservados</footer>
<script src="https://kit.fontawesome.com/33170ddcd4.js" crossorigin="anonymous"></script>
<script type="module" src="js/script.js"></script>
</body>
</html>
