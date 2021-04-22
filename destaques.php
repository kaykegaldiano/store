<?php
require_once 'src/Publicacoes.php';
$publicacoesDestaques = new Publicacoes($mysql);
$destaquePrincipal = $publicacoesDestaques->exibirDestaquePrincipal();
$destaquesSecundarios = $publicacoesDestaques->exibirDestaquesSecundarios();
$categorias = $publicacoesDestaques->exibirCategorias();
?>

<section class="destaques">
    <div href="publicacoes.php" class="destaques__principal caixa">
        <h3 class="destaques__titulo"><?= $destaquePrincipal['titulo'] ?></h3>
    </div>
    <?php foreach ($destaquesSecundarios as $secundarios) : ?>
        <div href="publicacoes.php" class="destaques__secundario caixa">
            <h3 class="destaques__titulo"><?= $secundarios['titulo'] ?></h3>
        </div>
    <?php endforeach ?>
    <div class="destaques__categorias">
        <ul class="destaques__categorias___lista">
            <?php foreach ($categorias as $categoria) : ?>
                <li class="destaques__categorias___item">
                    <a href="<?= $categoria['redirect'] ?>" class="destaques__categorias___link"><i class="destaques__categorias___icone <?= $categoria['icon'] ?>"></i>
                        <?= $categoria['titulo'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</section>