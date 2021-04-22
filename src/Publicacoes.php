<?php

class Publicacoes
{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirAppsPopulares(): array
    {
        $result = $this->mysql->query('SELECT id, imagem, titulo, data_pub, descricao, id_tipo FROM publicacoes WHERE id_tipo = 1');
        $appsPopulares = $result->fetch_all(MYSQLI_ASSOC);
        return $appsPopulares;
    }

    public function exibirJogosPopulares()
    {
        $result = $this->mysql->query('SELECT id, imagem, titulo, data_pub, descricao, id_tipo FROM publicacoes WHERE id_tipo = 2');
        $jogosPopulares = $result->fetch_all(MYSQLI_ASSOC);

        return $jogosPopulares;
    }

    public function exibirDestaques()
    {
        $result = $this->mysql->query('SELECT id, imagem, titulo, data_pub, descricao, id_tipo FROM publicacoes WHERE id_tipo = 3');
        $destaques = $result->fetch_all(MYSQLI_ASSOC);

        return $destaques;
    }

    public function exibirLancamentos()
    {
        $result = $this->mysql->query('SELECT id, imagem, titulo, data_pub, descricao, id_tipo FROM publicacoes WHERE id_tipo = 4');
        $lancamentos = $result->fetch_all(MYSQLI_ASSOC);

        return $lancamentos;
    }

    public function exibirDestaquePrincipal()
    {
        $destaquePrincipal = [
            'titulo' => 'Fortnite'
        ];
        return $destaquePrincipal;
    }

    public function exibirDestaquesSecundarios()
    {
        $destaquesSecundarios =
            [
                [
                    'titulo' => 'PUBG'
                ],
                [
                    'titulo' => 'Slack'
                ],
                [
                    'titulo' => 'Whatsapp'
                ],
                [
                    'titulo' => 'CS: GO'
                ],
            ];

        return $destaquesSecundarios;
    }

    public function exibirCategorias()
    {
        $categorias = [
            [
                'titulo' => 'Aplicativos Populares',
                'icon' => 'fab fa-buromobelexperte',
                'redirect' => '#populares'
            ],
            [
                'titulo' => 'Jogos Populares',
                'icon' => 'fas fa-list-ol',
                'redirect' => '#jogos-populares'
            ],
            [
                'titulo' => 'Em Destaque',
                'icon' => 'far fa-star',
                'redirect' => '#destaques'
            ],
            [
                'titulo' => 'Lançamentos',
                'icon' => 'far fa-bell',
                'redirect' => '#lancamentos'
            ],
        ];
        return $categorias;
    }

    public function findById(string $id): array
    {
        $sql = "SELECT id, imagem, titulo, data_pub, descricao FROM publicacoes WHERE id = ?";
        $stmt = $this->mysql->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $publicacao = $stmt->get_result()->fetch_assoc();
        return $publicacao;
    }

    public function formattedDate($date)
    {
        if (is_null($date) || $date === '' || !$date) {
            return 'Não definida';
        } else {
            $newDate = date_create($date);
            $fmtDate = date_format($newDate, 'd/m/Y');
            return $fmtDate;
        }
    }
}
