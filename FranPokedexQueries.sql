-- Typings Table --
SELECT * FROM TYPINGS

-- Pokemon Table --
SELECT * FROM POKEMON

-- Trainers Table --
SELECT * FROM TRAINER

-- Pokemon Team Table --
SELECT * FROM POKEMON_TEAM

-- Base Stats Table --
SELECT * FROM BASE_STATS

-- Moves Table --
SELECT * FROM MOVES

-- Natures Table --
SELECT * FROM NATURES

-- Abilities Table --
SELECT * FROM ABILITIES

-- Received Abillities Table --
SELECT * FROM RECEIVED_ABL

-- Region Table --
SELECT * FROM REGION

-- Cities/Towns Table --
SELECT * FROM CITIES_TOWNS

-- Routes Table --
SELECT * FROM ROUTES

-- Query #1: Find all ‘Fire’ type Pokémon. --
SELECT * FROM POKEMON WHERE Pokemon_Typing1 = 10 OR Pokemon_Typing2 = 10;

-- Query #2: Find all Pokémon with the ‘Sturdy’ Ability. --
SELECT POKEMON.Pokemon_Name, RECEIVED_ABL.Abil_1, RECEIVED_ABL.Abil_2, RECEIVED_ABL.Hidden_Abil
FROM POKEMON, RECEIVED_ABL
WHERE POKEMON.Pokemon_Number = RECEIVED_ABL.Num_Poke
AND RECEIVED_ABL.Abil_1 = 250
OR RECEIVED_ABL.Abil_2 = 250
OR RECEIVED_ABL.Hidden_Abil = 250;

-- Query #3: Find the total base stats for all Pokémon (In descending order). --
SELECT POKEMON.Pokemon_Name, BASE_STATS.Base_HP + BASE_STATS.Base_Atk + BASE_STATS.Base_Def + BASE_STATS.Base_Sp_Atk + BASE_STATS.Base_Sp_Def + BASE_STATS.Base_Speed AS TotalStats
FROM POKEMON, BASE_STATS
WHERE POKEMON.Pokemon_Number = BASE_STATS.Base_Poke
ORDER BY TotalStats DESC;

-- Query #4: Find the total number of moves, categorized by typing. --
SELECT TYPINGS.Typing_Name, COUNT(*)
FROM MOVES, TYPINGS
WHERE MOVES.Move_Typing = TYPINGS.Typing_ID
GROUP BY Move_Typing;

-- Query #5: Who is the trainer with the most amount of money? --
SELECT MAX(Amt_Money)
FROM TRAINER;

-- Query #6: Find all the Routes that are in a ‘Land’ environment.  --
SELECT *
FROM ROUTES
WHERE Route_Environment = 'Land';