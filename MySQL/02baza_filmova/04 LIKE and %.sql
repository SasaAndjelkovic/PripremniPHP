SELECT
	baza_filmova.actor.forename,
    baza_filmova.actor.surname
FROM 
	baza_filmova.actor
WHERE 
	(baza_filmova.actor.forename LIKE '%te%' OR baza_filmova.actor.surname LIKE '%n')
    AND baza_filmova.actor.surname LIKE '%t'
;