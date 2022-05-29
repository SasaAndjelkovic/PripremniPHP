SELECT 
	*
FROM 
	domace_zivotinje.zivotinja
WHERE
	vrsta = 'Canis lupus familiaris'
	AND pol = 'muski'
ORDER BY
	starost DESC
LIMIT
	0, 1