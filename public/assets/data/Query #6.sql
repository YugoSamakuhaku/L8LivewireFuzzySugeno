-- ALTER TABLE inggridient_history AUTO_INCREMENT = 1
SET sql_mode = 'TRADITIONAL';

SELECT inggridient_history.date, master_inggridients.id_inggridient, master_inggridients.name_inggridient, master_inggridients.unit_inggridient, SUM(inggridient_history.stock), SUM(inggridient_history.purchase), SUM(inggridient_history.stock_in), SUM(inggridient_history.stock_out), SUM(inggridient_history.last_stock)
FROM inggridient_history
JOIN master_inggridients ON inggridient_history.id_inggridient=master_inggridients.id_inggridient
GROUP BY master_inggridients.id_inggridient