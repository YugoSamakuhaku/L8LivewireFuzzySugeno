SET sql_mode = 'TRADITIONAL';
SELECT MONTH(request_sales.date_sale) AS MONTH, YEAR(request_sales.date_sale) AS YEAR,
product_inggridients.id_product , product_inggridients.id_inggridient, product_inggridients.usage_amount, SUM(detail_request_sales.qty) * product_inggridients.usage_amount AS total_usage_amount
FROM
 request_sales
JOIN detail_request_sales ON request_sales.id_sale=detail_request_sales.id_sale
JOIN product_inggridients ON product_inggridients.id_product=detail_request_sales.id_product
WHERE MONTH(request_sales.date_sale) = '7' AND YEAR(request_sales.date_sale) = '2021'
GROUP BY product_inggridients.id_product, product_inggridients.id_inggridient, MONTH(request_sales.date_sale), YEAR(request_sales.date_sale)