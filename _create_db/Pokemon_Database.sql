-- create the tables
CREATE TABLE Types (
  typeID       INT(16)       NOT NULL   AUTO_INCREMENT,
  typeName     VARCHAR(20)   NOT NULL,
  PRIMARY KEY (typeName)
);

CREATE TABLE Pokedex (
  id         INT(200)       NOT NULL   AUTO_INCREMENT,
  P_Name     VARCHAR(20)    NOT NULL,
  Form       INT(3)         NULL,
  typeName   VARCHAR(20)    NOT NULL,
  type2      VARCHAR(20)    NULL,
  stat_total INT(700)       NOT NULL,
  HP         INT(700)       NOT NULL,
  Attack     INT(700)       NOT NULL,
  Defense    INT(700)       NOT NULL,
  Sp_Attack  INT(700)       NOT NULL,
  Sp_Defense INT(700)       NOT NULL,
  Speed      INT(700)       NOT NULL,
  Generation INT(10)        NOT NULL,
  PRIMARY KEY (entryNumber)
);

-- insert data into the database
INSERT INTO categories VALUES
(1, 'Grass'),
(2, 'Water'),
(3, 'Fire'),
(4, 'Poison'),
(5, 'Normal'),
(6, 'Flying'),
(7, 'Bug'),
(8, 'Rock'),
(9, 'Ground'),
(10, 'Fighting'),
(11, 'Psychic'),
(12, 'Ghost'),
(13, 'Electric'),
(14, 'Ice'),
(15, 'Dragon');

INSERT INTO products VALUES
(1,"Bulbasaur"," ","Grass","Poison",318,45,49,49,65,65,45,1),
(2,"Ivysaur"," ","Grass","Poison",405,60,62,63,80,80,60,1),
(3,"Venusaur"," ","Grass","Poison",525,80,82,83,100,100,80,1),
(4,"Charmander"," ","Fire"," ",309,39,52,43,60,50,65,1),
(5,"Charmeleon"," ","Fire"," ",405,58,64,58,80,65,80,1),
(6,"Charizard"," ","Fire","Flying",534,78,84,78,109,85,100,1),
(7,"Squirtle"," ","Water"," ",314,44,48,65,50,64,43,1),
(8,"Wartortle"," ","Water"," ",405,59,63,80,65,80,58,1),
(9,"Blastoise"," ","Water"," ",530,79,83,100,85,105,78,1),
(10,"Caterpie"," ","Bug"," ",195,45,30,35,20,20,45,1),
(11,"Metapod"," ","Bug"," ",205,50,20,55,25,25,30,1),
(12,"Butterfree"," ","Bug","Flying",395,60,45,50,90,80,70,1),
(13,"Weedle"," ","Bug","Poison",195,40,35,30,20,20,50,1),
(14,"Kakuna"," ","Bug","Poison",205,45,25,50,25,25,35,1),
(15,"Beedrill"," ","Bug","Poison",395,65,90,40,45,80,75,1),
(16,"Pidgey"," ","Normal","Flying",251,40,45,40,35,35,56,1),
(17,"Pidgeotto"," ","Normal","Flying",349,63,60,55,50,50,71,1),
(18,"Pidgeot"," ","Normal","Flying",479,83,80,75,70,70,101,1),
(19,"Rattata"," ","Normal"," ",253,30,56,35,25,35,72,1),
(20,"Raticate"," ","Normal"," ",413,55,81,60,50,70,97,1),
(21,"Spearow"," ","Normal","Flying",262,40,60,30,31,31,70,1),
(22,"Fearow"," ","Normal","Flying",442,65,90,65,61,61,100,1),
(23,"Ekans"," ","Poison"," ",288,35,60,44,40,54,55,1),
(24,"Arbok"," ","Poison"," ",448,60,95,69,65,79,80,1),
(25,"Pikachu"," ","Electric"," ",320,35,55,40,50,50,90,1),
(26,"Raichu"," ","Electric"," ",485,60,90,55,90,80,110,1),
(27,"Sandshrew"," ","Ground"," ",300,50,75,85,20,30,40,1),
(28,"Sandslash"," ","Ground"," ",450,75,100,110,45,55,65,1),
(29,"Nidoran","Female","Poison"," ",275,55,47,52,40,40,41,1),
(30,"Nidorina"," ","Poison"," ",365,70,62,67,55,55,56,1),
(31,"Nidoqueen"," ","Poison","Ground",505,90,92,87,75,85,76,1),
(32,"Nidoran","Male","Poison"," ",273,46,57,40,40,40,50,1),
(33,"Nidorino"," ","Poison"," ",365,61,72,57,55,55,65,1),
(34,"Nidoking"," ","Poison","Ground",505,81,102,77,85,75,85,1),
(35,"Clefairy"," ","Fairy"," ",323,70,45,48,60,65,35,1),
(36,"Clefable"," ","Fairy"," ",483,95,70,73,95,90,60,1),
(37,"Vulpix"," ","Fire"," ",299,38,41,40,50,65,65,1),
(38,"Ninetales"," ","Fire"," ",505,73,76,75,81,100,100,1),
(39,"Jigglypuff"," ","Normal","Fairy",270,115,45,20,45,25,20,1),
(40,"Wigglytuff"," ","Normal","Fairy",435,140,70,45,85,50,45,1),
(41,"Zubat"," ","Poison","Flying",245,40,45,35,30,40,55,1),
(42,"Golbat"," ","Poison","Flying",455,75,80,70,65,75,90,1),
(43,"Oddish"," ","Grass","Poison",320,45,50,55,75,65,30,1),
(44,"Gloom"," ","Grass","Poison",395,60,65,70,85,75,40,1),
(45,"Vileplume"," ","Grass","Poison",490,75,80,85,110,90,50,1),
(46,"Paras"," ","Bug","Grass",285,35,70,55,45,55,25,1),
(47,"Parasect"," ","Bug","Grass",405,60,95,80,60,80,30,1),
(48,"Venonat"," ","Bug","Poison",305,60,55,50,40,55,45,1),
(49,"Venomoth"," ","Bug","Poison",450,70,65,60,90,75,90,1),
(50,"Diglett"," ","Ground"," ",265,10,55,25,35,45,95,1),
(51,"Dugtrio"," ","Ground"," ",425,35,100,50,50,70,120,1),
(52,"Meowth"," ","Normal"," ",290,40,45,35,40,40,90,1),
(53,"Persian"," ","Normal"," ",440,65,70,60,65,65,115,1),
(54,"Psyduck"," ","Water"," ",320,50,52,48,65,50,55,1),
(55,"Golduck"," ","Water"," ",500,80,82,78,95,80,85,1),
(56,"Mankey"," ","Fighting"," ",305,40,80,35,35,45,70,1),
(57,"Primeape"," ","Fighting"," ",455,65,105,60,60,70,95,1),
(58,"Growlithe"," ","Fire"," ",350,55,70,45,70,50,60,1),
(59,"Arcanine"," ","Fire"," ",555,90,110,80,100,80,95,1),
(60,"Poliwag"," ","Water"," ",300,40,50,40,40,40,90,1),
(61,"Poliwhirl"," ","Water"," ",385,65,65,65,50,50,90,1),
(62,"Poliwrath"," ","Water","Fighting",510,90,95,95,70,90,70,1),
(63,"Abra"," ","Psychic"," ",310,25,20,15,105,55,90,1),
(64,"Kadabra"," ","Psychic"," ",400,40,35,30,120,70,105,1),
(65,"Alakazam"," ","Psychic"," ",500,55,50,45,135,95,120,1),
(66,"Machop"," ","Fighting"," ",305,70,80,50,35,35,35,1),
(67,"Machoke"," ","Fighting"," ",405,80,100,70,50,60,45,1),
(68,"Machamp"," ","Fighting"," ",505,90,130,80,65,85,55,1),
(69,"Bellsprout"," ","Grass","Poison",300,50,75,35,70,30,40,1),
(70,"Weepinbell"," ","Grass","Poison",390,65,90,50,85,45,55,1),
(71,"Victreebel"," ","Grass","Poison",490,80,105,65,100,70,70,1),
(72,"Tentacool"," ","Water","Poison",335,40,40,35,50,100,70,1),
(73,"Tentacruel"," ","Water","Poison",515,80,70,65,80,120,100,1),
(74,"Geodude"," ","Rock","Ground",300,40,80,100,30,30,20,1),
(75,"Graveler"," ","Rock","Ground",390,55,95,115,45,45,35,1),
(76,"Golem"," ","Rock","Ground",495,80,120,130,55,65,45,1),
(77,"Ponyta"," ","Fire"," ",410,50,85,55,65,65,90,1),
(78,"Rapidash"," ","Fire"," ",500,65,100,70,80,80,105,1),
(79,"Slowpoke"," ","Water","Psychic",315,90,65,65,40,40,15,1),
(80,"Slowbro"," ","Water","Psychic",490,95,75,110,100,80,30,1),
(81,"Magnemite"," ","Electric","Steel",325,25,35,70,95,55,45,1),
(82,"Magneton"," ","Electric","Steel",465,50,60,95,120,70,70,1),
(83,"Farfetch'd"," ","Normal","Flying",377,52,90,55,58,62,60,1),
(84,"Doduo"," ","Normal","Flying",310,35,85,45,35,35,75,1),
(85,"Dodrio"," ","Normal","Flying",470,60,110,70,60,60,110,1),
(86,"Seel"," ","Water"," ",325,65,45,55,45,70,45,1),
(87,"Dewgong"," ","Water","Ice",475,90,70,80,70,95,70,1),
(88,"Grimer"," ","Poison"," ",325,80,80,50,40,50,25,1),
(89,"Muk"," ","Poison"," ",500,105,105,75,65,100,50,1),
(90,"Shellder"," ","Water"," ",305,30,65,100,45,25,40,1),
(91,"Cloyster"," ","Water","Ice",525,50,95,180,85,45,70,1),
(92,"Gastly"," ","Ghost","Poison",310,30,35,30,100,35,80,1),
(93,"Haunter"," ","Ghost","Poison",405,45,50,45,115,55,95,1),
(94,"Gengar"," ","Ghost","Poison",500,60,65,60,130,75,110,1),
(95,"Onix"," ","Rock","Ground",385,35,45,160,30,45,70,1),
(96,"Drowzee"," ","Psychic"," ",328,60,48,45,43,90,42,1),
(97,"Hypno"," ","Psychic"," ",483,85,73,70,73,115,67,1),
(98,"Krabby"," ","Water"," ",325,30,105,90,25,25,50,1),
(99,"Kingler"," ","Water"," ",475,55,130,115,50,50,75,1),
(100,"Voltorb"," ","Electric"," ",330,40,30,50,55,55,100,1),
(101,"Electrode"," ","Electric"," ",490,60,50,70,80,80,150,1),
(102,"Exeggcute"," ","Grass","Psychic",325,60,40,80,60,45,40,1),
(103,"Exeggutor"," ","Grass","Psychic",530,95,95,85,125,75,55,1),
(104,"Cubone"," ","Ground"," ",320,50,50,95,40,50,35,1),
(105,"Marowak"," ","Ground"," ",425,60,80,110,50,80,45,1),
(106,"Hitmonlee"," ","Fighting"," ",455,50,120,53,35,110,87,1),
(107,"Hitmonchan"," ","Fighting"," ",455,50,105,79,35,110,76,1),
(108,"Lickitung"," ","Normal"," ",385,90,55,75,60,75,30,1),
(109,"Koffing"," ","Poison"," ",340,40,65,95,60,45,35,1),
(110,"Weezing"," ","Poison"," ",490,65,90,120,85,70,60,1),
(111,"Rhyhorn"," ","Ground","Rock",345,80,85,95,30,30,25,1),
(112,"Rhydon"," ","Ground","Rock",485,105,130,120,45,45,40,1),
(113,"Chansey"," ","Normal"," ",450,250,5,5,35,105,50,1),
(114,"Tangela"," ","Grass"," ",435,65,55,115,100,40,60,1),
(115,"Kangaskhan"," ","Normal"," ",490,105,95,80,40,80,90,1),
(116,"Horsea"," ","Water"," ",295,30,40,70,70,25,60,1),
(117,"Seadra"," ","Water"," ",440,55,65,95,95,45,85,1),
(118,"Goldeen"," ","Water"," ",320,45,67,60,35,50,63,1),
(119,"Seaking"," ","Water"," ",450,80,92,65,65,80,68,1),
(120,"Staryu"," ","Water"," ",340,30,45,55,70,55,85,1),
(121,"Starmie"," ","Water","Psychic",520,60,75,85,100,85,115,1),
(122,"Mr. Mime"," ","Psychic","Fairy",460,40,45,65,100,120,90,1),
(123,"Scyther"," ","Bug","Flying",500,70,110,80,55,80,105,1),
(124,"Jynx"," ","Ice","Psychic",455,65,50,35,115,95,95,1),
(125,"Electabuzz"," ","Electric"," ",490,65,83,57,95,85,105,1),
(126,"Magmar"," ","Fire"," ",495,65,95,57,100,85,93,1),
(127,"Pinsir"," ","Bug"," ",500,65,125,100,55,70,85,1),
(128,"Tauros"," ","Normal"," ",490,75,100,95,40,70,110,1),
(129,"Magikarp"," ","Water"," ",200,20,10,55,15,20,80,1),
(130,"Gyarados"," ","Water","Flying",540,95,125,79,60,100,81,1),
(131,"Lapras"," ","Water","Ice",535,130,85,80,85,95,60,1),
(132,"Ditto"," ","Normal"," ",288,48,48,48,48,48,48,1),
(133,"Eevee"," ","Normal"," ",325,55,55,50,45,65,55,1),
(134,"Vaporeon"," ","Water"," ",525,130,65,60,110,95,65,1),
(135,"Jolteon"," ","Electric"," ",525,65,65,60,110,95,130,1),
(136,"Flareon"," ","Fire"," ",525,65,130,60,95,110,65,1),
(137,"Porygon"," ","Normal"," ",395,65,60,70,85,75,40,1),
(138,"Omanyte"," ","Rock","Water",355,35,40,100,90,55,35,1),
(139,"Omastar"," ","Rock","Water",495,70,60,125,115,70,55,1),
(140,"Kabuto"," ","Rock","Water",355,30,80,90,55,45,55,1),
(141,"Kabutops"," ","Rock","Water",495,60,115,105,65,70,80,1),
(142,"Aerodactyl"," ","Rock","Flying",515,80,105,65,60,75,130,1),
(143,"Snorlax"," ","Normal"," ",540,160,110,65,65,110,30,1),
(144,"Articuno"," ","Ice","Flying",580,90,85,100,95,125,85,1),
(145,"Zapdos"," ","Electric","Flying",580,90,90,85,125,90,100,1),
(146,"Moltres"," ","Fire","Flying",580,90,100,90,125,85,90,1),
(147,"Dratini"," ","Dragon"," ",300,41,64,45,50,50,50,1),
(148,"Dragonair"," ","Dragon"," ",420,61,84,65,70,70,70,1),
(149,"Dragonite"," ","Dragon","Flying",600,91,134,95,100,100,80,1),
(150,"Mewtwo"," ","Psychic"," ",680,106,110,90,154,90,130,1),
(151,"Mew"," ","Psychic"," ",600,100,100,100,100,100,100,1);