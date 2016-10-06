SELECT title AS Title, summary AS Summary, prod_year
FROM db_gmofoken.film
INNER JOIN genre
ON genre.id_genre = film.id_genre
WHERE name = "erotic"
ORDER BY prod_year DESC;