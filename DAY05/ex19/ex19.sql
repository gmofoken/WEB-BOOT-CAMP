SELECT ABS(DATEDIFF(MAX(DATE(release_date)), MIN(DATE(last_projection)))) AS 'uptime'
FROM db_gmofoken.film
GROUP BY id_film;