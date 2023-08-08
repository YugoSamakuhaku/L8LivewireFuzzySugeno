SET sql_mode = 'TRADITIONAL';
SELECT MONTH(request_sales.date_sale) AS MONTH, YEAR(request_sales.date_sale) AS YEAR, SUM(request_sales.qty_sale) AS total_qty_sale
FROM
 request_sales
GROUP BY MONTH(request_sales.date_sale), YEAR(request_sales.date_sale)