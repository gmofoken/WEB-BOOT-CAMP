SELECT UCASE(db_gmofoken.user_card.last_name) AS NAME, db_gmofoken.user_card.first_name, db_gmofoken.subscription.price
FROM db_gmofoken.subscription, db_gmofoken.user_card
WHERE price > 42
ORDER BY subscription.name ASC, user_card.first_name ASC;
