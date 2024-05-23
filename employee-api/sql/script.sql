SELECT users.*, departments.name AS department_name
FROM users
JOIN departments ON users.department_id = departments.id;

select * from users where name like '%fe%';

DELIMITER //
CREATE PROCEDURE GetUsersByDepartment(IN dept_id INT)
BEGIN
SELECT users.*, departments.name AS department_name
FROM users
         JOIN departments ON users.department_id = departments.id
WHERE departments.id = dept_id;
END //
DELIMITER ;

CALL GetUsersByDepartment(1);

DELIMITER //
CREATE PROCEDURE UpdateDepartmentName(IN dept_id INT, IN new_name VARCHAR(255))
BEGIN
UPDATE departments
SET name = new_name
WHERE id = dept_id;
END //
DELIMITER ;

select * from users where name = 'IT';