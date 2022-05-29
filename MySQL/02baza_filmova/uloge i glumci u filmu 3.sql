SELECT 
	film_actor.role,
    actor.forename,
    actor.surname
FROM 
	baza_filmova.film_actor,
    actor
WHERE 
	film_actor.film_id = 3
    AND actor.actor_id = film_actor.actor_id
    