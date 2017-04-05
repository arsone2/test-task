SELECT q.storage_id, q.category_id, q.quantity
FROM
(SELECT storage_id, category_id, quantity 
FROM incoming
ORDER BY `time` 
DESC LIMIT 4) AS q
ORDER BY q.storage_id, q.category_id