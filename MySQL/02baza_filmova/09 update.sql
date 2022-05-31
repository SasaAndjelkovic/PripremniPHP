SELECT * FROM baza_filmova.actor;

UPDATE baza_filmova.actor
SET forename = 'NEPOZNATO'
-- WHERE actor_id = 32;
WHERE surname LIKE '%y%'