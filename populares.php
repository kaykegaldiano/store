<?php

include_once 'src/Publicacoes.php';
$publicacoes = new Publicacoes($mysql);
$appsPopulares = $publicacoes->exibirAppsPopulares();
$jogosPopulares = $publicacoes->exibirJogosPopulares();
$destaques = $publicacoes->exibirDestaques();
$lancamentos = $publicacoes->exibirLancamentos();
?>

<section class="populares" id="populares">
    <div class="populares__itens">
        <div class="populares__info">
            <div class="populares__cabecalho">
                <h4 class="populares__titulo">
                    <i class="populares__icone fab fa-buromobelexperte"></i>
                    Aplicativos populares
                </h4>
                <button class="populares__botao">
                    <i class="fas fa-th"></i>
                    Visualizar todos
                </button>
            </div>
        </div>
        <div class="populares__conteudo">
            <?php foreach ($appsPopulares as $popular) : ?>
                <div class="populares__card">
                    <a href="publicacoes.php?id=<?= $popular['id'] ?>">
                        <img class="populares__card___imagem" src="<?= $popular['imagem'] ?>" />
                    </a>
                    <div class="populares__card___corpo">
                        <div class="populares__card___cabecalho">
                            <a href="publicacoes.php?id=<?= $popular['id'] ?>">
                                <h5 class="populares__card___titulo"><?= $popular['titulo'] ?></h5>
                            </a>
                            <time class="populares__card___data" datetime=<?= $popular['data_pub'] ?>><?php $date = date_create($popular['data_pub']);
                                                                                                        echo date_format($date, 'd/m/Y'); ?></time>
                        </div>
                        <div class="populares__card___descricao">
                            <?= $popular['descricao'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="populares__itens" id="jogos-populares">
        <div class="populares__info">
            <div class="populares__cabecalho">
                <h4 class="populares__titulo">
                    <i class="populares__icone fas fa-list-ol"></i>
                    Jogos populares
                </h4>
                <button class="populares__botao">
                    <i class="fas fa-th"></i>
                    Visualizar todos
                </button>
            </div>
        </div>
        <div class="populares__conteudo">
            <?php foreach ($jogosPopulares as $populares) : ?>
                <div class="populares__card">
                    <a href="publicacoes.php?id=<?= $populares['id'] ?>">
                        <img class="populares__card___imagem" src=<?= $populares['imagem'] ?> />
                    </a>
                    <div class="populares__card___corpo">
                        <div class="populares__card___cabecalho">
                            <a href="publicacoes.php?id=<?= $populares['id'] ?>">
                                <h5 class="populares__card___titulo"><?= $populares['titulo'] ?></h5>
                            </a>
                            <time class="populares__card___data" datetime=<?= $populares['data_pub'] ?>><?php $date = date_create($populares['data_pub']);
                                                                                                        echo date_format($date, 'd/m/Y'); ?></time>
                        </div>
                        <div class="populares__card___descricao">
                            <?= $populares['descricao'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="populares__itens" id="destaques">
        <div class="populares__info">
            <div class="populares__cabecalho">
                <h4 class="populares__titulo">
                    <i class="populares__icone far fa-star"></i>
                    Em Destaque
                </h4>
                <button class="populares__botao">
                    <i class="fas fa-th"></i>
                    Visualizar todos
                </button>
            </div>
        </div>
        <div class="populares__conteudo">
            <?php foreach ($destaques as $destaque) : ?>
                <div class="populares__card">
                    <a href="publicacoes.php?id=<?= $destaque['id'] ?>">
                        <img class="populares__card___imagem" src=<?= $destaque['imagem'] ?> />
                    </a>
                    <div class="populares__card___corpo">
                        <div class="populares__card___cabecalho">
                            <a href="publicacoes.php?id=<?= $destaque['id'] ?>">
                                <h5 class="populares__card___titulo"><?= $destaque['titulo'] ?></h5>
                            </a>
                            <time class="populares__card___data" datetime=<?= $destaque['data_pub'] ?>><?php $date = date_create($destaque['data_pub']);
                                                                                                        echo date_format($date, 'd/m/Y'); ?></time>
                        </div>
                        <div class="populares__card___descricao">
                            <?= $destaque['descricao'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="populares__itens" id="lancamentos">
        <div class="populares__info">
            <div class="populares__cabecalho">
                <h4 class="populares__titulo">
                    <i class="populares__icone far fa-bell"></i>
                    Lançamentos
                </h4>
                <button class="populares__botao">
                    <i class="fas fa-th"></i>
                    Visualizar todos
                </button>
            </div>
        </div>
        <div class="populares__conteudo">
            <?php foreach ($lancamentos as $lancamento) : ?>
                <div class="populares__card">
                    <a href="publicacoes.php?id=<?= $lancamento['id'] ?>">
                        <img class="populares__card___imagem" src=<?= $lancamento['imagem'] ?> />
                    </a>
                    <div class="populares__card___corpo">
                        <div class="populares__card___cabecalho">
                            <a href="publicacoes.php?id=<?= $lancamento['id'] ?>">
                                <h5 class="populares__card___titulo"><?= $lancamento['titulo'] ?></h5>
                            </a>
                            <time class="populares__card___data" datetime=<?= $lancamento['data_pub'] ?>>
                                <?= $formattedDate = $publicacoes->formattedDate($lancamento['data_pub']) ?>
                            </time>
                        </div>
                        <div class="populares__card___descricao">
                            <?= $lancamento['descricao'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>