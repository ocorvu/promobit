```sql
SELECT COUNT(`products`.`id`) 
	FROM `tags` 
	INNER JOIN `product_tag` on `tags`.`id` = `product_tag`.`tag_id` 
	INNER JOIN `products` on `products`.`id` = `product_tag`.`product_id` 
	WHERE `tags`.`id` = 2;
```
