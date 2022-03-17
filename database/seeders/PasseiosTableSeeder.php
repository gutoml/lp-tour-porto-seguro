<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasseiosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('passeios')->delete();
        
        \DB::table('passeios')->insert(array (
            0 => 
            array (
                'id' => 9,
                'local' => 'TRANCOSO',
                'subtitle' => 'Visite um dos lugares preferidos entre os famosos e conheça as praias locais maravilhosas',
                'price' => 50,
                'desconto' => 0,
                'content' => 'Trancoso é um distrito de Porto Seguro, que fica localizado no litoral sul do município. Esse local fica a cerca de 80 quilômetros do município. A rota do passeio se inicia pela BR 367, e em seguida entra na BA 01. A população local é de cerca 17 mil habitantes, e se destaca bastante por conta das praias maravilhosas, que são muito bonitas e as mais procuradas pelos famosos. Também se destaca pelo centro histórico do Quadrado, que é bastante famoso também.

A fama desse lugar se deu por volta dos anos 80, quando alguns hips visitaram o local, pois eles acreditavam que lá havia uma linha de energia positiva chamada Paralelo 17, que passa no meio do Quadrado, então eles acreditavam que lá era um bom local para se viver.

Em seguida, Helba Ramalho foi morar em Trancoso e se tornou madrinha desse lugar incrível. Helba popularizou o local no meio artístico fazendo show.

Essa é a nossa check list do passeio:

- Conhecer o Quadrado;
- Média de 04 (quatro) horas na praia de Trancoso. Nessa praia tem uma barraca de apoio com toda a estrutura (duchas, cadeiras, mesas, guarda-sol).

O horário de saída é às 08:30h (Horário de Salvador), com chegada prevista para às 17:00h (horário de Salvador). O horário de chegada pode se estender um pouco dependendo do trânsito.',
                'created_at' => '2022-02-22 20:29:33',
                'updated_at' => '2022-03-03 17:50:42',
            ),
            1 => 
            array (
                'id' => 10,
                'local' => 'CARAÍVA',
                'subtitle' => 'Mergulhe na energia da vila mais antiga do Brasil',
                'price' => 50,
                'desconto' => 0,
            'content' => 'Caraíva é uma península (não é uma ilha), que se encontra no litoral sul de Porto Seguro. A rota até o local inicia com saída de Porto Seguro pela BR 367, adentrando em seguida na BA 01. Após chegar em Trancoso, há um trecho de cerca de 30 quilômetros de estrada de chão. Todo o esforço valerá a pena pois é um lugar muito bonito.

Segundo estudos, Caraíva é a vila mais antiga do Brasil. Sua popularidade se deu pela ocupação dos hips na década de 80. Por ser um lugar bem rústico, a energia elétrica só foi instalada a 10 anos atrás. Não é possível a circulação de automóveis por conta das ruas serem completamente de areia, trafegando apenas carroças e pessoas. No local há um rio que divide a vila da estrada, ou seja, a travessia é feita de canoa pois não é possível a entrada de automóveis.

A noite em Caraíva é marcada por um forrózinho bem aconchegante, além das demais festas para todos os gostos. Caraíva é cercada pelo rio e mar, você pode aproveitar qualquer um dos dois. A vila é um lugar perfeito para você fotografar e registrar esses momentos únicos em sua vida.

Além de pousadas, há também restaurantes com o melhor da culinária local!

Esse é o nosso check list do passeio

- 04 (quatro) horas nas praias
- 40 (quarenta) minutos a 01 (uma) hora na vila

O horário de saída é às 08:00h (horário de Salvador), e chegada prevista para às 17:30h (horário de Salvador). O horário de chegada pode se estender um pouco dependendo do trânsito.',
                'created_at' => '2022-02-22 22:45:39',
                'updated_at' => '2022-03-03 17:50:21',
            ),
            2 => 
            array (
                'id' => 11,
                'local' => 'PRAIA DO ESPELHO',
                'subtitle' => 'Conheça uma das praias mais lindas do Brasil',
                'price' => 50,
                'desconto' => 0,
                'content' => 'A Praia do Espelho é considerada umas das praias mais bonitas do Brasil! 

A rota para o passeio inicia com saída de Porto Seguro pela BR 367, em seguida ingressando na BA 01. Ao chegarem em Trancoso, há um trecho de cerca de 17 quilômetros pela estrada de chão após uma rotatória. Todo esse trajeto vale o esforço pela beleza surreal da praia, onde você visitará as falésias (em algumas você consegue subir e ter uma vista incrível da praia), as piscinas naturais e os famosos coqueiros deitados. 

Essa é uma praia muito procurada pelos famosos por ser um lugar além de esplêndido, deserto. Então você obtém privacidade para curtir o passeio.

O passeio dura cerca de 04 (quatro horas) na praia, com saída às 08:00h (horário de Salvador), e chegada prevista para às 17:00h (horário de Salvador). O horário de chegada pode se estender um pouco dependendo do trânsito.',
                'created_at' => '2022-03-03 14:29:54',
                'updated_at' => '2022-03-03 17:51:41',
            ),
            3 => 
            array (
                'id' => 12,
                'local' => 'ARRAIAL DAJUDA',
                'subtitle' => 'Rua do Mucugê, a rua mais charmosa do Brasil',
                'price' => 50,
                'desconto' => 0,
                'content' => 'Arraial D’ajuda é um distrito de Porto Seguro, que se encontra no litoral sul. Diferente de Trancoso, Caraíva e Praia do Espelho, o destino é o mais próximo do município. O percurso inicia com saída de Porto Seguro, atravessando um rio com a balsa, e depois de 20 minutinhos você já estará no centro histórico de Arraial D’ajuda!

Após você conhecer toda a história do local, você visitará as praias belíssimas de Arraial. Lá você conhecerá as falésias. Com a maré baixa você consegue ver as pedras que formam piscinas naturais. A culinária do local é bem marcante!

São inúmeras as opções noturnas. Você pode visitar a rua do Mucugê, que é conhecida como a rua mais charmosa do Brasil, onde tem bares, culinárias de outros países como a Itália e México. Lá você também encontra desde música ao vivo, a baladas como o Morocha Club que você pode aproveitar como quiser.

Há também um passeio noturno chamado “By Night”, que você pode conhecer Arraial D’ajuda a noite.

O horário de saída é às 08:00h (horário de Salvador), e chegada prevista para às 17:30h (horário de Salvador). O horário de chegada pode se estender um pouco dependendo do trânsito.',
                'created_at' => '2022-03-03 15:20:42',
                'updated_at' => '2022-03-03 17:52:05',
            ),
            4 => 
            array (
                'id' => 13,
                'local' => 'COROA VERMELHA',
                'subtitle' => 'Conheça o lugar onde foi realizado a primeira missa no Brasil',
                'price' => 50,
                'desconto' => 0,
                'content' => 'Coroa vermelha é situada no litoral norte, e é um distrito do município de  Santa Cruz Cabrália. Esse lugar é conhecido pelas aldeias indígenas, pois lá você pode conhecer mais sobre a cultura e também as histórias narradas pelos próprios membros das tribos residentes no local. Em Coroa Vermelha também há o monumento da cruz onde foi realizado a primeira missa no Brasil.

Quando a maré está baixa, as praias formam bancos de areia no meio do mar onde você pode chegar até lá andando. Também ficam visíveis os recifes de corais, e as praias ficam bem próximas do monumento histórico da primeira missa.

Além de tudo isso ainda há um shopping indígena com produtos totalmente artesanais. Há bastante coisa para conhecer em Coroa Vermelha!

A saída para o passeio é às 08:00h (horário de Salvador), e chegada prevista para às 17:00h (horário de Salvador). O horário de chegada pode se estender um pouco dependendo do trânsito.',
                'created_at' => '2022-03-03 17:50:07',
                'updated_at' => '2022-03-03 17:50:32',
            ),
        ));
        
        
    }
}