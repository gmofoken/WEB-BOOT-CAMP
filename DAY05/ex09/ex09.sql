SELECT COUNT(duration) AS 'nb_short-films'
FROM db_gmofoken.film
WHERE duration <= 42;