<?php
$dados =
  [
    'nome' => [
      'null',
      'Gustavo',
      'Felipe',
      'Attekita',
      'Lucas',
      'Filipe',
      'Matheus',
      'Daniel',
      'Rafaella',
      'Nelio',
      'Andre',
      'Lico',
      'Bruno',
      'Joao',
      'Diego',
    ],
    'sobrenome' => [
      'null',
      'Guanabara',
      'Correia Ribeiro',
      'Dev',
      'Montano',
      'Deschamps',
      'Battisti',
      'Reis',
      'Ballerini',
      'Alves',
      'Baltieri',
      'o Renegado',
      'Bezerra da Silva',
      'Pedro da Silva Coutinho',
      'Schell Fernandes',
    ],
    'email' => [
      'null',
      'gafanhotos@gmail.com',
      'felipe@gmail.com',
      'Attekita@hotmail.com.br',
      'LucasMontano@yahoo.com',
      'Deschamps@outlook.com',
      'Battisti@yahoo.com',
      'DanielHe4art@hotmail.com.br',
      'RafaBallerini@outlook.com',
      'Nelio@hotmail.com.br',
      'balta@yahoo.com',
      'vivolixopano@yahoo.com',
      'bruno.silva2503@hotmail.com',
      'joaopedro.silvadan@gmail.com',
      'rocket@hotmail.com',

    ],
    'senha' => [
      'null',
      '<a href="https://www.cursoemvideo.com/curso/curso-de-php-moderno-modulo-01/">CursoEmV1deo</a>',
      '<a href="https://www.linkedin.com/in/felipe-ribeiro-2003aswd/"> UmFuturoDesenvolvedor</a>',
      '<a href="https://www.instagram.com/attekitadev/"> AttekitaDev</a>',
      '<a href="https://www.youtube.com/watch?v=LB76xqh_4eI">LucasMontano</a>',
      '<a href="https://github.com/filipedeschamps">FilipeD3schamps</a>',
      '<a href="https://www.udemy.com/user/matheus-battisti/">B4ttisti</a>',
      '<a href="https://www.twitch.tv/danielhe4rt?lang=pt-br">He4rt</a>',
      '<a href="https://beacons.ai/rafaballerini">Baller1ni</a>',
      '<a href="https://www.udemy.com/user/nelio-alves/">NelioAlves293</a>',
      '<a href="https://balta.io/">Balta.io</a>',
      'baragandan',
      'OOLHAAAA UUU DEEEEDOOO',
      "Somebody once told me the world is gonna roll me<br>
        I ain't the sharpest tool in the shed<br>
        She was looking kind of dumb with her finger and her thumb<br>
        In the shape of an \"L\" on her forehead<br>
        Well the years start coming and they don't stop coming<br>
        Fed to the rules and I hit the ground running<br>
        Didn't make sense not to live for fun<br>
        Your brain gets smart but your head gets dumb<br>
        So much to do, so much to see<br>
        So what's wrong with taking the back streets?<br>
        You'll never know if you don't go<br>
        You'll never shine if you don't glow<br>
        Hey now, you're an all-star, get your game on, go play<br>
        Hey now, you're a rock star, get the show on, get paid<br>
        And all that glitters is gold<br>
        Only shooting stars break the mold<br>
        It's a cool place and they say it gets colder<br>
        You're bundled up now, wait 'til you get older<br>
        But the meteor men beg to differ<br>
        Judging by the hole in the satellite picture<br>
        The ice we skate is getting pretty thin<br>
        The water's getting warm so you might as well swim<br>
        My world's on fire, how about yours?<br>
        That's the way I like it and I'll never get bored<br>
        Hey now, you're an all-star, get your game on, go play<br>
        Hey now, you're a rock star, get the show on, get paid<br>
        All that glitters is gold<br>
        Only shooting stars break the mold<br>
        Hey now, you're an all-star, get your game on, go play<br>
        Hey now, you're a rock star, get the show, on get paid<br>
        And all that glitters is gold<br>
        Only shooting stars<br>
        Somebody once asked could I spare some change for gas?<br>
        I need to get myself away from this place<br>
        I said, \"Yup\" what a concept<br>
        I could use a little fuel myself<br>
        And we could all use a little change<br>
        Well, the years start coming and they don't stop coming<br>
        Fed to the rules and I hit the ground running<br>
        Didn't make sense not to live for fun<br>
        Your brain gets smart but your head gets dumb<br>
        So much to do, so much to see<br>
        So what's wrong with taking the back streets?<br>
        You'll never know if you don't go (go!)<br>
        You'll never shine if you don't glow<br>
        Hey now, you're an all-star, get your game on, go play<br>
        Hey now, you're a rock star, get the show on, get paid<br>
        And all that glitters is gold<br>
        Only shooting stars break the mold<br>
        And all that glitters is gold<br>
        Only shooting stars break the mold",
        'Rocketseat',
    ],
    'id' => [
      '0',
      '1',
      '2',
      '3',
      '4',
      '5',
      '6',
      '7',
      '8',
      '9',
      '10',
      '11',
      '12',
      '13',
      '14'
    ]
  ];
$key_name = array_search($_POST['query'], $dados['nome']);
$key_email = array_search($_POST['query'], $dados['email']);
$key_id = array_search($_POST['query'], $dados['id']);