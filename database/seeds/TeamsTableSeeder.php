<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            ['name' => 'Rússia', 'short_name' => 'RUS', 'img_name' => 'russia', 'group' => 'A' ], // //1
            ['name' => 'Arábia Saudita', 'short_name' => 'ARA', 'img_name' => 'arabia_saudita','group' => 'A'], // //2
            ['name' => 'Egito', 'short_name' => 'EGI', 'img_name' => 'egito','group' => 'A'], // //3
            ['name' => 'Uruguai', 'short_name' => 'URU', 'img_name' => 'uruguai','group' => 'A'], // //4
            
            ['name' => 'Portugal', 'short_name' => 'POR', 'img_name' => 'portugal','group' => 'B'], // //5
            ['name' => 'Espanha', 'short_name' => 'ESP', 'img_name' => 'espanha','group' => 'B'], // //6
            ['name' => 'Marrocos', 'short_name' => 'MAR', 'img_name' => 'marrocos','group' => 'B'], // //7
            ['name' => 'Irã', 'short_name' => 'IRA', 'img_name' => 'ira','group' => 'B'], // //8
            
            ['name' => 'França', 'short_name' => 'FRA', 'img_name' => 'franca','group' => 'C'], // //9
            ['name' => 'Austrália', 'short_name' => 'AUS', 'img_name' => 'australia','group' => 'C'], // //10
            ['name' => 'Peru', 'short_name' => 'PER', 'img_name' => 'peru','group' => 'C'], // //11
            ['name' => 'Dinamarca', 'short_name' => 'DIN', 'img_name' => 'dinamarca','group' => 'C'], // //12
            
            ['name' => 'Argentina', 'short_name' => 'ARG', 'img_name' => 'argentina','group' => 'D'], //13
            ['name' => 'Islândia', 'short_name' => 'ISL', 'img_name' => 'islandia','group' => 'D'], //14
            ['name' => 'Croácia', 'short_name' => 'CRO', 'img_name' => 'croacia','group' => 'D'], //15
            ['name' => 'Nigéria', 'short_name' => 'NIG', 'img_name' => 'nigeria','group' => 'D'], //16

            ['name' => 'Brasil', 'short_name' => 'BRA', 'img_name' => 'brasil','group' => 'E'], //17
            ['name' => 'Suiça', 'short_name' => 'SUI', 'img_name' => 'suica','group' => 'E'], //18
            ['name' => 'Costa Rica', 'short_name' => 'COS', 'img_name' => 'costa_rica','group' => 'E'], //19
            ['name' => 'Sérvia', 'short_name' => 'SER', 'img_name' => 'servia','group' => 'E'], //20

            ['name' => 'Alemanha', 'short_name' => 'ALE', 'img_name' => 'alemanha','group' => 'F'], //21
            ['name' => 'México', 'short_name' => 'MEX', 'img_name' => 'mexico','group' => 'F'], //22
            ['name' => 'Suécia', 'short_name' => 'SUE', 'img_name' => 'suecia','group' => 'F'], //23
            ['name' => 'Coréia do Sul', 'short_name' => 'COR', 'img_name' => 'coreia_do_sul','group' => 'F'], //24

            ['name' => 'Bélgica', 'short_name' => 'BEL', 'img_name' => 'belgica','group' => 'G'], //25
            ['name' => 'Panamá', 'short_name' => 'PAN', 'img_name' => 'panama','group' => 'G'], //26
            ['name' => 'Tunísia', 'short_name' => 'TUN', 'img_name' => 'tunisia','group' => 'G'], //27
            ['name' => 'Inglaterra', 'short_name' => 'ING', 'img_name' => 'inglaterra','group' => 'G'], //28

            ['name' => 'Polônia', 'short_name' => 'POL', 'img_name' => 'polonia','group' => 'H'], //29
            ['name' => 'Senegal', 'short_name' => 'SEN', 'img_name' => 'senegal','group' => 'H'], //30
            ['name' => 'Colômbia', 'short_name' => 'COL', 'img_name' => 'colombia','group' => 'H'], //31
            ['name' => 'Japão', 'short_name' => 'JAP', 'img_name' => 'japao','group' => 'H'] //32
        ];
        DB::table('teams')->insert($teams);
 
        $players = [
            //russia
            ['name' => 'Igor Akinfeev', 'team_id' => '1', 'position' => 'Goleiro'], //
            ['name' => 'Igor Vladimir Gabulov', 'team_id' => '1', 'position' => 'Goleiro'], //
            ['name' => 'Vladimir Granat', 'team_id' => '1', 'position' => 'Goleiro'], //
            ['name' => 'Ilya Kutepov', 'team_id' => '1', 'position' => 'Defesa'], //
            ['name' => 'Sergey Ignashevich', 'team_id' => '1', 'position' => 'Defesa'], //
            ['name' => 'Andrey Semenov', 'team_id' => '1', 'position' => 'Defesa'], //
            ['name' => 'Igor Smolnikov', 'team_id' => '1', 'position' => 'Defesa'], //
            ['name' => 'Mário Fernandes ', 'team_id' => '1', 'position' => 'Defesa'], //
            ['name' => 'Fedor Kudriashov', 'team_id' => '1', 'position' => 'Defesa'], //
            ['name' => 'Iury Gazinsky', 'team_id' => '1', 'position' => 'Meio-Campo'], //
            ['name' => 'Aleksandr Golovin ', 'team_id' => '1', 'position' => 'Meio-Campo'],
            ['name' => 'Alan Dzagoev', 'team_id' => '1', 'position' => 'Meio-Campo'],
            ['name' => 'Aleksandr Erokhin', 'team_id' => '1', 'position' => 'Meio-Campo'],
            ['name' => 'Yury Zhirkov', 'team_id' => '1', 'position' => 'Meio-Campo'],
            ['name' => 'Daler Kuziaev', 'team_id' => '1', 'position' => 'Meio-Campo'],
            ['name' => 'Roman Zobnin', 'team_id' => '1', 'position' => 'Meio-Campo'],
            ['name' => 'Alexander Samedov', 'team_id' => '1', 'position' => 'Meio-Campo'],
            ['name' => 'Denis Cheryshev', 'team_id' => '1', 'position' => 'Meio-Campo'],
            ['name' => 'Dzyuba', 'team_id' => '1', 'position' => 'Atacante'],
            ['name' => 'Miranchuk', 'team_id' => '1', 'position' => 'Atacante'],
            ['name' => 'Smolov', 'team_id' => '1', 'position' => 'Atacante'],
            ['name' => 'Chalov', 'team_id' => '1', 'position' => 'Atacante'],
    
            //arabia saudita
            ['name' => 'Mohammed Al-Owais', 'team_id' => '2', 'position' => 'Goleiro'],
            ['name' => 'Yasser Al-Musailem', 'team_id' => '2', 'position' => 'Goleiro'],
            ['name' => 'Abdullah Al-Muaiouf', 'team_id' => '2', 'position' => 'Goleiro'],
            ['name' => 'Mansour Al-Harbi', 'team_id' => '2', 'position' => 'Defesa'],
            ['name' => 'Osama Hawsawi', 'team_id' => '2', 'position' => 'Defesa'],
            ['name' => 'Motaz Hawsawi', 'team_id' => '2', 'position' => 'Defesa'],
            ['name' => 'li Al-Bulayhi', 'team_id' => '2', 'position' => 'Defesa'],
            ['name' => 'Yasir Al-Shahrani ', 'team_id' => '2', 'position' => 'Defesa'],
            ['name' => 'Mohammed Al-Burayk', 'team_id' => '2', 'position' => 'Defesa'],
            ['name' => 'Omar Othman', 'team_id' => '2', 'position' => 'Defesa'],
            ['name' => 'Abdullah Al-Khaibari', 'team_id' => '2', 'position' => 'Meio-Campo'],
            ['name' => 'Hussain Al-Moqahwi', 'team_id' => '2', 'position' => 'Meio-Campo'],
            ['name' => 'Abdullah Otayf', 'team_id' => '2', 'position' => 'Meio-Campo'],
            ['name' => 'Salman Al-Faraj', 'team_id' => '2', 'position' => 'Meio-Campo'],
            ['name' => 'Mohamed Kanno', 'team_id' => '2', 'position' => 'Meio-Campo'],
            ['name' => 'Hatan Bahbir', 'team_id' => '2', 'position' => 'Meio-Campo'],
            ['name' => 'Salem Al-Dawsari ', 'team_id' => '2', 'position' => 'Meio-Campo'],
            ['name' => 'Yahya Al-Shehri', 'team_id' => '2', 'position' => 'Meio-Campo'],
            ['name' => 'Fahad Al-Muwallad', 'team_id' => '2', 'position' => 'Ataque'],
            ['name' => 'Mohammad Al-Sahlawi', 'team_id' => '2', 'position' => 'Ataque'],
            ['name' => 'Muhannad Assiri', 'team_id' => '2', 'position' => 'Ataque'],
            ['name' => 'Abdulmalek Al-Khaibri', 'team_id' => '2', 'position' => 'Ataque'],

            //egito
            ['name' => 'Essam El-Hadary', 'team_id' => '3', 'position' => 'Goleiro'],
            ['name' => 'Mohamed El-Shennawy', 'team_id' => '3', 'position' => 'Goleiro'],
            ['name' => 'Sherif Ekramy', 'team_id' => '3', 'position' => 'Goleiro'],
            ['name' => 'Ahmed Fathi', 'team_id' => '3', 'position' => 'Defesa'],
            ['name' => 'Samir Saad', 'team_id' => '3', 'position' => 'Defesa'],
            ['name' => 'Ayman Ashraf', 'team_id' => '3', 'position' => 'Defesa'],
            ['name' => 'Ahmed Elmohamady', 'team_id' => '3', 'position' => 'Defesa'],
            ['name' => 'Omar Gaber', 'team_id' => '3', 'position' => 'Defesa'],
            ['name' => 'Mohamed Abdel-Shafy', 'team_id' => '3', 'position' => 'Defesa'],
            ['name' => 'Ahmed Hegazy', 'team_id' => '3', 'position' => 'Defesa'],
            ['name' => 'Ali Gabr', 'team_id' => '3', 'position' => 'Defesa'],
            ['name' => 'Mahmoud Hamdy', 'team_id' => '3', 'position' => 'Defesa'],
            ['name' => 'Shikabala', 'team_id' => '3', 'position' => 'Meio-Campo'],
            ['name' => 'Abdallah Said', 'team_id' => '3', 'position' => 'Meio-Campo'],
            ['name' => 'Mohamed Elneny', 'team_id' => '3', 'position' => 'Meio-Campo'],
            ['name' => 'Tarek Hamed', 'team_id' => '3', 'position' => 'Meio-Campo'],
            ['name' => 'Mahmoud Kahraba', 'team_id' => '3', 'position' => 'Meio-Campo'],
            ['name' => 'Mahmoud Trezeguet', 'team_id' => '3', 'position' => 'Meio-Campo'],
            ['name' => 'Ramadan Sobhy', 'team_id' => '3', 'position' => 'Meio-Campo'],
            ['name' => 'Sam Morsy', 'team_id' => '3', 'position' => 'Meio-Campo'],
            ['name' => 'Amr Warda', 'team_id' => '3', 'position' => 'Meio-Campo'],
            ['name' => 'Marwan Mohsen', 'team_id' => '3', 'position' => 'Ataque'],
            ['name' => 'Mohamed Salah', 'team_id' => '3', 'position' => 'Ataque'],

            //uruguai
            ['name' => 'Fernando Muslera', 'team_id' => '4', 'position' => 'Goleiro'],
            ['name' => 'Martín Campaña ', 'team_id' => '4', 'position' => 'Goleiro'],
            ['name' => 'Martin Silva', 'team_id' => '4', 'position' => 'Goleiro'],
            ['name' => 'José Maria Giménez', 'team_id' => '4', 'position' => 'Defesa'],
            ['name' => 'Diego Godín ', 'team_id' => '4', 'position' => 'Defesa'],
            ['name' => 'Guillermo Varela', 'team_id' => '4', 'position' => 'Defesa'],
            ['name' => 'Gastón Silva', 'team_id' => '4', 'position' => 'Defesa'],
            ['name' => 'Maxi Pereira', 'team_id' => '4', 'position' => 'Defesa'],
            ['name' => 'Sebastián Coates', 'team_id' => '4', 'position' => 'Defesa'],
            ['name' => 'Martín Cáceres', 'team_id' => '4', 'position' => 'Defesa'],
            ['name' => 'Carlos Sánchez', 'team_id' => '4', 'position' => 'Meio-Campo'],
            ['name' => 'Rodrigo Bentancur', 'team_id' => '4', 'position' => 'Meio-Campo'],
            ['name' => 'Cristian Rodríguez', 'team_id' => '4', 'position' => 'Meio-Campo'],
            ['name' => 'Nahitan Nández', 'team_id' => '4', 'position' => 'Meio-Campo'],
            ['name' => 'Lucas Torreira', 'team_id' => '4', 'position' => 'Meio-Campo'],
            ['name' => 'Matías Vecino', 'team_id' => '4', 'position' => 'Meio-Campo'],
            ['name' => 'Diego Laxalt', 'team_id' => '4', 'position' => 'Meio-Campo'],    
            ['name' => 'Luis Suárez', 'team_id' => '4', 'position' => 'Ataque'],
            ['name' => 'De Arrascaeta', 'team_id' => '4', 'position' => 'Ataque'],
            ['name' => 'Cristhian Stuani', 'team_id' => '4', 'position' => 'Ataque'],
            ['name' => 'Maximiliano Gómez', 'team_id' => '4', 'position' => 'Ataque'],
            ['name' => 'Urreta', 'team_id' => '4', 'position' => 'Ataque'],
            ['name' => 'Edinson Cavani', 'team_id' => '4', 'position' => 'Ataque'],
            
            //portugal
            ['name' => 'Rui Patrício', 'team_id' => '5', 'position' => 'Goleiro'],
            ['name' => 'Anthony Lopes', 'team_id' => '5', 'position' => 'Goleiro'],
            ['name' => 'Beto', 'team_id' => '5', 'position' => 'Goleiro'],
            ['name' => 'Bruno Alves', 'team_id' => '5', 'position' => 'Defesa'],
            ['name' => 'Pepe', 'team_id' => '5', 'position' => 'Defesa'],
            ['name' => 'Raphael Guerreiro', 'team_id' => '5', 'position' => 'Defesa'],
            ['name' => 'José Fonte', 'team_id' => '5', 'position' => 'Defesa'],
            ['name' => 'Rúben Dias', 'team_id' => '5', 'position' => 'Defesa'],
            ['name' => 'Ricardo Pereira', 'team_id' => '5', 'position' => 'Defesa'],
            ['name' => 'Mário Rui', 'team_id' => '5', 'position' => 'Defesa'],
            ['name' => 'Cédric Soares', 'team_id' => '5', 'position' => 'Defesa'],
            ['name' => 'Manuel Fernandes', 'team_id' => '5', 'position' => 'Meio-Campo'],
            ['name' => 'João Moutinho', 'team_id' => '5', 'position' => 'Meio-Campo'],
            ['name' => 'João Mário', 'team_id' => '5', 'position' => 'Meio-Campo'],
            ['name' => 'Bernardo Silva', 'team_id' => '5', 'position' => 'Meio-Campo'],
            ['name' => 'William Carvalho', 'team_id' => '5', 'position' => 'Meio-Campo'],
            ['name' => 'Bruno Fernandes', 'team_id' => '5', 'position' => 'Meio-Campo'],
            ['name' => 'Adrien Silva', 'team_id' => '5', 'position' => 'Meio-Campo'],            
            ['name' => 'Cristiano Ronaldo', 'team_id' => '5', 'position' => 'Ataque'],
            ['name' => 'André Silva', 'team_id' => '5', 'position' => 'Ataque'],
            ['name' => 'Gonçalo Guedes', 'team_id' => '5', 'position' => 'Ataque'],
            ['name' => 'Gelson Martins', 'team_id' => '5', 'position' => 'Ataque'],
            ['name' => 'Ricardo Quaresma', 'team_id' => '5', 'position' => 'Ataque'],

            //espanha
            ['name' => 'David De Gea', 'team_id' => '6', 'position' => 'Goleiro'],
            ['name' => 'Arrizabalaga Kepa', 'team_id' => '6', 'position' => 'Goleiro'],
            ['name' => 'Pepe Reina', 'team_id' => '6', 'position' => 'Goleiro'],
            ['name' => 'Dani Carvajal', 'team_id' => '6', 'position' => 'Defesa'],
            ['name' => 'Gerard Piqué ', 'team_id' => '6', 'position' => 'Defesa'],
            ['name' => 'Nacho', 'team_id' => '6', 'position' => 'Defesa'],
            ['name' => 'Alvaro Odriozola', 'team_id' => '6', 'position' => 'Defesa'],
            ['name' => 'Cesar Azpilicueta', 'team_id' => '6', 'position' => 'Defesa'],
            ['name' => 'Sergio Ramos', 'team_id' => '6', 'position' => 'Defesa'],
            ['name' => 'Nacho Monreal', 'team_id' => '6', 'position' => 'Defesa'],
            ['name' => 'Jordi Alba', 'team_id' => '6', 'position' => 'Defesa'],
            ['name' => 'Sergio Busquets', 'team_id' => '6', 'position' => 'Meio-Campo'],
            ['name' => 'Andrés Iniesta', 'team_id' => '6', 'position' => 'Meio-Campo'],
            ['name' => 'Saúl', 'team_id' => '6', 'position' => 'Meio-Campo'],
            ['name' => 'Koke', 'team_id' => '6', 'position' => 'Meio-Campo'],
            ['name' => 'Thiago Alcântara', 'team_id' => '6', 'position' => 'Meio-Campo'],
            ['name' => 'Marco Asensio', 'team_id' => '6', 'position' => 'Meio-Campo'],
            ['name' => 'Lucas Vázquez', 'team_id' => '6', 'position' => 'Meio-Campo'],
            ['name' => 'Isco', 'team_id' => '6', 'position' => 'Meio-Campo'],
            ['name' => 'Rodrigo Moreno', 'team_id' => '6', 'position' => 'Ataque'],
            ['name' => 'Iago Aspas', 'team_id' => '6', 'position' => 'Ataque'],
            ['name' => 'Diego Costa', 'team_id' => '6', 'position' => 'Ataque'],
            ['name' => 'David Silva', 'team_id' => '6', 'position' => 'Ataque'],


            //marrocos
            ['name' => 'Yassine Bounou', 'team_id' => '7', 'position' => 'Goleiro'],
            ['name' => 'Monir El Kajoui', 'team_id' => '7', 'position' => 'Goleiro'],
            ['name' => 'Ahmed Tagnaouti', 'team_id' => '7', 'position' => 'Goleiro'],
            ['name' => 'Achraf Hakimi', 'team_id' => '7', 'position' => 'Defesa'],
            ['name' => 'Hamza Mendyl', 'team_id' => '7', 'position' => 'Defesa'],
            ['name' => 'Manuel da Costa', 'team_id' => '7', 'position' => 'Defesa'],
            ['name' => 'Mehdi Benatia', 'team_id' => '7', 'position' => 'Defesa'],
            ['name' => 'Romain Saiss', 'team_id' => '7', 'position' => 'Defesa'],
            ['name' => 'Nabil Dirar', 'team_id' => '7', 'position' => 'Defesa'],
            ['name' => 'Hakim Ziyach', 'team_id' => '7', 'position' => 'Meio-Campo'],
            ['name' => 'Karim El Ahmadi', 'team_id' => '7', 'position' => 'Meio-Campo'],
            ['name' => 'Younes Belhanda', 'team_id' => '7', 'position' => 'Meio-Campo'],
            ['name' => 'Fayçal Fajr', 'team_id' => '7', 'position' => 'Meio-Campo'],
            ['name' => 'Mbark Boussoufa', 'team_id' => '7', 'position' => 'Meio-Campo'],
            ['name' => 'Youssef Ait-Bennasser', 'team_id' => '7', 'position' => 'Meio-Campo'],
            ['name' => 'Noureddine Amrabat', 'team_id' => '7', 'position' => 'Meio-Campo'],
            ['name' => 'Amine Harit', 'team_id' => '7', 'position' => 'Meio-Campo'],
            ['name' => 'Sofyan Amrabat', 'team_id' => '7', 'position' => 'Meio-Campo'],
            ['name' => 'Medhi Carcela', 'team_id' => '7', 'position' => 'Meio-Campo'],
            ['name' => 'Ayoub El Kaabi', 'team_id' => '7', 'position' => 'Ataque'],
            ['name' => 'Khalid Boutaib', 'team_id' => '7', 'position' => 'Ataque'],
            ['name' => 'Youssef En Nesyri', 'team_id' => '7', 'position' => 'Ataque'],
            ['name' => 'Aziz Bouhaddouz', 'team_id' => '7', 'position' => 'Ataque'],

            //irã
            ['name' => 'Ali Beiranvand', 'team_id' => '8', 'position' => 'Goleiro'],
            ['name' => 'Rashid Mazaheri', 'team_id' => '8', 'position' => 'Goleiro'],
            ['name' => 'Amir Abedzadeh', 'team_id' => '8', 'position' => 'Goleiro'],
            ['name' => 'Ehsan Haj Safi', 'team_id' => '8', 'position' => 'Defesa'],
            ['name' => 'Roozbeh Cheshmi', 'team_id' => '8', 'position' => 'Defesa'],
            ['name' => 'Milad Mohammadi', 'team_id' => '8', 'position' => 'Defesa'],
            ['name' => 'Morteza Pouraliganji', 'team_id' => '8', 'position' => 'Defesa'],
            ['name' => 'Mohammad Reza Khanzadeh', 'team_id' => '8', 'position' => 'Defesa'],
            ['name' => 'Pejman Montazeri', 'team_id' => '8', 'position' => 'Defesa'],
            ['name' => 'Majid Hosseini', 'team_id' => '8', 'position' => 'Defesa'],
            ['name' => 'Ramin Rezaeian', 'team_id' => '8', 'position' => 'Defesa'],

            ['name' => 'Mehdi Torabi', 'team_id' => '8', 'position' => 'Meio-Campo'],
            ['name' => 'Masoud Shojaei', 'team_id' => '8', 'position' => 'Meio-Campo'],
            ['name' => 'Omid Ebrahimi', 'team_id' => '8', 'position' => 'Meio-Campo'],
            ['name' => 'Vahid Amiri', 'team_id' => '8', 'position' => 'Meio-Campo'],

            ['name' => 'Karim Ansarifard', 'team_id' => '8', 'position' => 'Ataque'],
            ['name' => 'Saman Ghoddos', 'team_id' => '8', 'position' => 'Ataque'],
            ['name' => 'Reza Ghoochannejhad', 'team_id' => '8', 'position' => 'Ataque'],
            ['name' => 'Mehdi Taremi', 'team_id' => '8', 'position' => 'Ataque'],
            ['name' => 'Alireza Jahanbakhsh', 'team_id' => '8', 'position' => 'Ataque'],
            ['name' => 'Sardar Azmoun', 'team_id' => '8', 'position' => 'Ataque'],
            ['name' => 'Ashkan Dejagah', 'team_id' => '8', 'position' => 'Ataque'],

            //frança
            ['name' => 'Hugo Lloris', 'team_id' => '9', 'position' => 'Goleiro'],
            ['name' => 'Steve Mandanda', 'team_id' => '9', 'position' => 'Goleiro'],
            ['name' => 'Alphonse Aréola', 'team_id' => '9', 'position' => 'Goleiro'],
            ['name' => 'Benjamin Mendy', 'team_id' => '9', 'position' => 'Defesa'],
            ['name' => 'Presnel Kimpembe', 'team_id' => '9', 'position' => 'Defesa'],
            ['name' => 'Raphäel Varane', 'team_id' => '9', 'position' => 'Defesa'],
            ['name' => 'Samuel Umtiti', 'team_id' => '9', 'position' => 'Defesa'],
            ['name' => 'Adil Rami', 'team_id' => '9', 'position' => 'Defesa'],
            ['name' => 'Djibril Sidibé', 'team_id' => '9', 'position' => 'Defesa'],
            ['name' => 'Lucas Hernández', 'team_id' => '9', 'position' => 'Defesa'],

            ['name' => 'Paul Pogba', 'team_id' => '9', 'position' => 'Meio-Campo'],
            ['name' => 'Corentin Tolisso', 'team_id' => '9', 'position' => 'Meio-Campo'],
            ['name' => 'NGolo Kanté', 'team_id' => '9', 'position' => 'Meio-Campo'],
            ['name' => 'Blaise Matuidi', 'team_id' => '9', 'position' => 'Meio-Campo'],
            ['name' => 'Steven NZonzi', 'team_id' => '9', 'position' => 'Meio-Campo'],
          
            ['name' => 'Antoine Griezmann', 'team_id' => '9', 'position' => 'Ataque'],
            ['name' => 'Thomas Lemar', 'team_id' => '9', 'position' => 'Ataque'],
            ['name' => 'Olivier Giroud', 'team_id' => '9', 'position' => 'Ataque'],
            ['name' => 'Kylian Mbappé', 'team_id' => '9', 'position' => 'Ataque'],
            ['name' => 'Moussa Dembélé', 'team_id' => '9', 'position' => 'Ataque'],
            ['name' => 'Nabil Fekir', 'team_id' => '9', 'position' => 'Ataque'],
            ['name' => 'Florian Thauvin', 'team_id' => '9', 'position' => 'Ataque'],

            //australia
            ['name' => 'Mathew Ryan', 'team_id' => '10', 'position' => 'Goleiro'],
            ['name' => 'Brad Jones', 'team_id' => '10', 'position' => 'Goleiro'],
            ['name' => 'Danny Vukovic', 'team_id' => '10', 'position' => 'Goleiro'],
            ['name' => 'Milos Degenek', 'team_id' => '10', 'position' => 'Defesa'],
            ['name' => 'James Meredith', 'team_id' => '10', 'position' => 'Defesa'],
            ['name' => 'Mark Milligan', 'team_id' => '10', 'position' => 'Defesa'],
            ['name' => 'Matthew Jurman', 'team_id' => '10', 'position' => 'Defesa'],
            ['name' => 'Aziz Behich', 'team_id' => '10', 'position' => 'Defesa'],
            ['name' => 'Josh Risdon', 'team_id' => '10', 'position' => 'Defesa'],
            ['name' => 'Trent Sainsbury', 'team_id' => '10', 'position' => 'Defesa'],

            ['name' => 'Massimo Luongo', 'team_id' => '10', 'position' => 'Meio-Campo'],
            ['name' => 'Aaron Mooy', 'team_id' => '10', 'position' => 'Meio-Campo'],
            ['name' => 'Mile Jedinak', 'team_id' => '10', 'position' => 'Meio-Campo'],
            ['name' => 'Jackson Irvine', 'team_id' => '10', 'position' => 'Meio-Campo'],
            ['name' => 'Tom Rogic', 'team_id' => '10', 'position' => 'Meio-Campo'],

            ['name' => 'Tim Cahill', 'team_id' => '10', 'position' => 'Ataque'],
            ['name' => 'Mathew Leckie', 'team_id' => '10', 'position' => 'Ataque'],
            ['name' => 'Tomi Juric', 'team_id' => '10', 'position' => 'Ataque'],
            ['name' => 'Robbie Kruse', 'team_id' => '10', 'position' => 'Ataque'],
            ['name' => 'Andrew Nabbout', 'team_id' => '10', 'position' => 'Ataque'],
            ['name' => 'Jamie Maclaren', 'team_id' => '10', 'position' => 'Ataque'],
            ['name' => 'Daniel Arzani', 'team_id' => '10', 'position' => 'Ataque'],
            ['name' => 'Dimi Petratos', 'team_id' => '10', 'position' => 'Ataque'],

            //peru
            ['name' => 'Pedro Gallese', 'team_id' => '11', 'position' => 'Goleiro'],
            ['name' => 'Carlos Cáceda', 'team_id' => '11', 'position' => 'Goleiro'],
            ['name' => 'José Carvallo', 'team_id' => '11', 'position' => 'Goleiro'],
            ['name' => 'Alberto Rodríguez', 'team_id' => '11', 'position' => 'Defesa'],
            ['name' => 'Aldo Corzo', 'team_id' => '11', 'position' => 'Defesa'],
            ['name' => 'Anderson Santamaría', 'team_id' => '11', 'position' => 'Defesa'],
            ['name' => 'Miguel Araujo', 'team_id' => '11', 'position' => 'Defesa'],
            ['name' => 'Miguel Trauco', 'team_id' => '11', 'position' => 'Defesa'],
            ['name' => 'Christian Ramos', 'team_id' => '11', 'position' => 'Defesa'],
            ['name' => 'Luis Advíncula', 'team_id' => '11', 'position' => 'Defesa'],
            ['name' => 'Nilson Loyola', 'team_id' => '11', 'position' => 'Defesa'],
           
            ['name' => 'Paolo Hurtado', 'team_id' => '11', 'position' => 'Meio-Campo'],
            ['name' => 'Christian Cueva', 'team_id' => '11', 'position' => 'Meio-Campo'],
            ['name' => 'Renato Tapia', 'team_id' => '11', 'position' => 'Meio-Campo'],
            ['name' => 'Andy Polo', 'team_id' => '11', 'position' => 'Meio-Campo'],
            ['name' => 'Wilder Cartagena', 'team_id' => '11', 'position' => 'Meio-Campo'],
            ['name' => 'Yoshimar Yotún', 'team_id' => '11', 'position' => 'Meio-Campo'],
            ['name' => 'Pedro Aquino', 'team_id' => '11', 'position' => 'Meio-Campo'],
            
            ['name' => 'Paolo Guerrero', 'team_id' => '11', 'position' => 'Ataque'],
            ['name' => 'Jefferson Farfán', 'team_id' => '11', 'position' => 'Ataque'],
            ['name' => 'Raul Ruidíaz', 'team_id' => '11', 'position' => 'Ataque'],
            ['name' => 'André Carrillo', 'team_id' => '11', 'position' => 'Ataque'],
            ['name' => 'Edison Flores', 'team_id' => '11', 'position' => 'Ataque'],


            //dinamarca
            ['name' => 'Kasper Schmeichel', 'team_id' => '12', 'position' => 'Goleiro'],
            ['name' => 'Jonas Lössl', 'team_id' => '12', 'position' => 'Goleiro'],
            ['name' => 'Frederik Ronnow', 'team_id' => '12', 'position' => 'Goleiro'],
            ['name' => ' Jannik Vestergaard', 'team_id' => '12', 'position' => 'Defesa'],
            ['name' => 'Simon Kjaer', 'team_id' => '12', 'position' => 'Defesa'],
            ['name' => 'Jonas Knudsen', 'team_id' => '12', 'position' => 'Defesa'],
            ['name' => 'Andreas Christensen', 'team_id' => '12', 'position' => 'Defesa'],
            ['name' => 'Mathias Jorgensen', 'team_id' => '12', 'position' => 'Defesa'],
            ['name' => 'Henrik Dalsgaard', 'team_id' => '12', 'position' => 'Defesa'],
            ['name' => 'Jens Stryger Larsen', 'team_id' => '12', 'position' => 'Defesa'],

            ['name' => 'Michael Krohn-Dehli', 'team_id' => '12', 'position' => 'Meio-Campo'],
            ['name' => 'William Kvist', 'team_id' => '12', 'position' => 'Meio-Campo'],
            ['name' => 'Thomas Delaney', 'team_id' => '12', 'position' => 'Meio-Campo'],
            ['name' => 'Christian Eriksen', 'team_id' => '12', 'position' => 'Meio-Campo'],
            ['name' => 'Lukas Lerager', 'team_id' => '12', 'position' => 'Meio-Campo'],
            ['name' => 'Lasse Schöne', 'team_id' => '12', 'position' => 'Meio-Campo'],

            ['name' => 'Nicolai Jorgensen', 'team_id' => '12', 'position' => 'Ataque'],
            ['name' => 'Martin Braithwaite', 'team_id' => '12', 'position' => 'Ataque'],
            ['name' => 'Kasper Dolberg', 'team_id' => '12', 'position' => 'Ataque'],
            ['name' => 'Viktor Fischer', 'team_id' => '12', 'position' => 'Ataque'],
            ['name' => 'Yussuf Yurary Poulsen', 'team_id' => '12', 'position' => 'Ataque'],
            ['name' => 'Andreas Cornelius', 'team_id' => '12', 'position' => 'Ataque'],

        ];
        DB::table('players')->insert($players);
       
        $results = [
            ['name' => 'A jogar'],
            ['name' => 'Vitória Casa'],
            ['name' => 'Vitória Fora'],
            ['name' => 'Empate'],
            ['name' => 'Vitória Casa Penalties'],
            ['name' => 'Vitória Fora Penalties'],

        ];
        DB::table('results')->insert($results);


        $rodadas = [
            ['name' => 'Fase de Grupos - Rodada 1'],
            ['name' => 'Fase de Grupos - Rodada 2'],
            ['name' => 'Fase de Grupos - Rodada 3'],
            ['name' => 'Oitavas de Final'],
            ['name' => 'Quartas de Final'],
            ['name' => 'Semifinal'],
            ['name' => 'Disputa 3º Lugar'],
            ['name' => 'Final'],
        ];
        DB::table('rodadas')->insert($rodadas);


       
       
    }
}
