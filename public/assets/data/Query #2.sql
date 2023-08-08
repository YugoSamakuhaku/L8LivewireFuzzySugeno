SET sql_mode = 'TRADITIONAL';
SELECT MONTH(purchases.date_purchase) AS MONTH, YEAR(purchases.date_purchase) AS YEAR,
detail_purchases.id_inggridient, detail_purchases.qty
FROM
purchases
JOIN detail_purchases ON purchases.id_purchase=detail_purchases.id_purchase
GROUP BY
 detail_purchases.id_inggridient, MONTH(purchases.date_purchase), YEAR(purchases.date_purchase)