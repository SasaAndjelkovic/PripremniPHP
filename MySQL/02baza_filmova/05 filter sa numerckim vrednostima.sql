SELECT
	baza_filmova.film.title,
    baza_filmova.film.`description`
    -- description i year su rezervisane reci
FROM
	baza_filmova.film
WHERE
-- baza_filmova.film.year >= 2001 AND baza_filmova.film.year <= 2005
baza_filmova.film.year BETWEEN 2001 AND 2005
    ;