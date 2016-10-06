SELECT title, summary
FROM db_gmofoken.film
WHERE summary LIKE '%Vincent%'
ORDER BY id_film ASC;