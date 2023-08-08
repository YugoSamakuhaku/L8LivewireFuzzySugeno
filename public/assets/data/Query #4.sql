SET sql_mode = 'TRADITIONAL';
SELECT MONTH(request_sales.date_sale) AS MONTH, YEAR(request_sales.date_sale) AS YEAR,
detail_request_sales.id_product, SUM(detail_request_sales.qty) AS total_qty_sale_product
FROM
 request_sales
JOIN detail_request_sales ON request_sales.id_sale=detail_request_sales.id_sale
GROUP BY detail_request_sales.id_product, MONTH(request_sales.date_sale), YEAR(request_sales.date_sale)