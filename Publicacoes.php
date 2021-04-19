<?php

class Publicacoes
{
    public function exibirAppsPopulares(): array
    {
        $appsPopulares = [
            [
                'imagem' => './assets/img/slack.png',
                'titulo' => 'Slack',
                'data' => '2013-08-01',
                'descricao' => 'Traduzido do inglês-O Slack é um conjunto baseado em nuvem de
                ferramentas e serviços proprietários de colaboração em equipe,
                fundado por Stewart Butterfield. O Slack começou como uma
                ferramenta interna usada por sua empresa, Tiny Speck, no
                desenvolvimento do Glitch, um jogo online agora extinto.',
            ],
            [
                'imagem' => './assets/img/whatsapp.png',
                'titulo' => 'Whatsapp',
                'data' => '2009',
                'descricao' => 'WhatsApp é um aplicativo multiplataforma de mensagens
                instantâneas e chamadas de voz para smartphones. Além de
                mensagens de texto, os usuários podem enviar imagens, vídeos e
                documentos em PDF, além de fazer ligações grátis por meio de
                uma conexão com a internet.',
            ],
            [
                'imagem' => './assets/img/telegram.jpeg',
                'titulo' => 'Telegram',
                'data' => '2013-08-14',
                'descricao' => 'O Telegram é um serviço de mensagens instantâneas baseado na
                nuvem. O Telegram está disponível para smartphones ou tablets,
                computadores e também como Aplicação web. Os usuários podem
                enviar mensagens e trocar fotos, vídeos, stickers e arquivos
                de qualquer tipo.',
            ],
            [
                'imagem' => './assets/img/trello.jpg',
                'titulo' => 'Trello',
                'data' => '2011-01-01',
                'descricao' => 'Trello é um aplicativo de gerenciamento de projeto baseado na
                web originalmente feito por Fog Creek Software em 2011. Em
                2014 tornou-se uma empresa. Ele opera um modelo de negócio
                Freemium, no qual é disponibilizado a versão gratuita ou paga
                para o usuário.',
            ],
            [
                'imagem' => './assets/img/skype.png',
                'titulo' => 'Skype',
                'data' => '2003-08-01',
                'descricao' => 'Skype é um software que permite comunicação pela Internet
                através de conexões de voz e vídeo, criado por Janus Friis e
                Niklas Zennstrom. O Skype foi lançado no ano de 2003. Em 2005
                foi vendido para a empresa eBay e pertence, desde maio de
                2011, à Microsoft.',
            ],
        ];

        return $appsPopulares;
    }

    public function exibirJogosPopulares()
    {
        $jogosPopulares = [
            [
                'imagem' => './assets/img/fortnite.jpg',
                'titulo' => 'Fortnite',
                'data' => '2017-07-25',
                'descricao' => 'Fortnite é um jogo eletrônico online criado em 2017,
                desenvolvido pela Epic Games, e lançado como diferentes
                pacotes de software com diferentes modos de jogo que
                compartilham a mesma jogabilidade e motor gráfico de jogo.',
            ],
            [
                'imagem' => './assets/img/pubg.jpg',
                'titulo' => 'PUBG',
                'data' => '2017-03-23',
                'descricao' => "PlayerUnknown's Battlegrounds, ou somente Battlegrounds, é um
                jogo eletrônico multiplayer desenvolvido pela PUBG Corp.,
                subsidiária da produtora coreana Bluehole, utilizando o motor
                de jogo Unreal Engine 4",
            ],
            [
                'imagem' => './assets/img/cs-go.jpg',
                'titulo' => 'CS: GO',
                'data' => '2012-08-21',
                'descricao' => 'Counter-Strike: Global Offensive é um jogo online desenvolvido
                pela Valve Corporation e pela Hidden Path Entertainment, sendo
                uma sequência de Counter-Strike: Source. É o quarto título
                principal da franquia.',
            ],
            [
                'imagem' => './assets/img/lol.jpg',
                'titulo' => 'League of Legends',
                'data' => '2009-10-27',
                'descricao' => 'League of Legends é um jogo eletrônico do gênero multiplayer
                online battle arena, desenvolvido e publicado pela Riot Games
                para Microsoft Windows e Mac OS X. É um jogo gratuito para
                jogar e inspirado no modo Defense of the Ancients de Warcraft
                III: The Frozen Throne.',
            ],
            [
                'imagem' => './assets/img/gta-v.jpg',
                'titulo' => 'Grand Theft Auto V',
                'data' => '2013-09-17',
                'descricao' => 'Grand Theft Auto V é um jogo eletrônico de ação-aventura
                desenvolvido pela Rockstar North e publicado pela Rockstar
                Games.',
            ],
        ];
        return $jogosPopulares;
    }

    public function exibirDestaques()
    {
        $destaques = [
            [
                'imagem' => './assets/img/fortnite.jpg',
                'titulo' => 'Fortnite',
                'data' => '2017-07-25',
                'descricao' => "Fortnite é um jogo eletrônico online criado em 2017,
                desenvolvido pela Epic Games, e lançado como diferentes
                pacotes de software com diferentes modos de jogo que
                compartilham a mesma jogabilidade e motor gráfico de jogo.",
            ],
            [
                'imagem' => './assets/img/pubg.jpg',
                'titulo' => 'PUBG',
                'data' => '2017-03-23',
                'descricao' => "PlayerUnknown's Battlegrounds, ou somente Battlegrounds, é um
                jogo eletrônico multiplayer desenvolvido pela PUBG Corp.,
                subsidiária da produtora coreana Bluehole, utilizando o motor
                de jogo Unreal Engine 4",
            ],
            [
                'imagem' => './assets/img/slack.png',
                'titulo' => 'Slack',
                'data' => '2013-08-01',
                'descricao' => 'Traduzido do inglês-O Slack é um conjunto baseado em nuvem de
                ferramentas e serviços proprietários de colaboração em equipe,
                fundado por Stewart Butterfield. O Slack começou como uma
                ferramenta interna usada por sua empresa, Tiny Speck, no
                desenvolvimento do Glitch, um jogo online agora extinto.',
            ],
            [
                'imagem' => './assets/img/whatsapp.png',
                'titulo' => 'Whatsapp',
                'data' => '2009',
                'descricao' => 'WhatsApp é um aplicativo multiplataforma de mensagens
                instantâneas e chamadas de voz para smartphones. Além de
                mensagens de texto, os usuários podem enviar imagens, vídeos e
                documentos em PDF, além de fazer ligações grátis por meio de
                uma conexão com a internet.',
            ],
            [
                'imagem' => './assets/img/cs-go.jpg',
                'titulo' => 'CS: GO',
                'data' => '2012-08-21',
                'descricao' => 'Counter-Strike: Global Offensive é um jogo online desenvolvido
                pela Valve Corporation e pela Hidden Path Entertainment, sendo
                uma sequência de Counter-Strike: Source. É o quarto título
                principal da franquia.',
            ],
        ];

        return $destaques;
    }

    public function exibirLancamentos()
    {
        $lancamentos = [
            [
                'imagem' => './assets/img/brawl-stars.jpg',
                'titulo' => 'Brawl Stars',
                'data' => '2017-06-15',
                'descricao' => "Traduzido do inglês-Brawl Stars é um jogo multiplayer de arena
                e jogos de luta livre, desenvolvido e publicado pela
                Supercell. Em 14 de junho de 2017, a Supercell anunciou o jogo
                por meio de um vídeo de transmissão ao vivo no YouTube.",
            ],
            [
                'imagem' => './assets/img/organizze.jpeg',
                'titulo' => 'Organizze',
                'data' => 'Não definida',
                'descricao' => "Usado por mais de 1 milhão de pessoas, o Organizze é uma
                ferramenta online que vai facilitar sua vida financeira.",
            ],
            [
                'imagem' => './assets/img/onefotball.jpeg',
                'titulo' => 'Onefootball',
                'data' => '2008-01-01',
                'descricao' => 'Onefootball é a melhor plataforma para os fãs de futebol de
                todo o mundo. Das notícias às pontuações e estatísticas -
                Contamos as histórias de futebol do mundo, trazidas a você por
                mais de 150 entusiastas do coração de Berlim!',
            ],
            [
                'imagem' => './assets/img/free-fire.jpg',
                'titulo' => 'Free Fire',
                'data' => '2017-11-01',
                'descricao' => "Garena Free Fire é um jogo eletrônico mobile de ação-aventura
                do gênero battle royale, desenvolvido pela 111dots Studio e
                publicado pela Garena. O jogo obteve um beta aberto em
                novembro de 2017 e foi lançado oficialmente para Android e iOS
                em 4 de dezembro de 2017.",
            ],
            [
                'imagem' => './assets/img/mario-kart.jpg',
                'titulo' => 'Super Mario Racing',
                'data' => 'Não definida',
                'descricao' => "Jogo Super Mario Racing. Escolha seu personagem preferido do
                Universo do Super Mario e depois é só acelerar!",
            ],
        ];

        return $lancamentos;
    }
}
