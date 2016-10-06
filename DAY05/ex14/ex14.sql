SELECT floor_number AS 'floor', sum(nb_seats) AS 'seats'
FROM db_gmofoken.cinema
GROUP BY floor_number
ORDER BY nb_seats DESC;