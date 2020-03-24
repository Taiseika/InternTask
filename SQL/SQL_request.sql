	/*INSERT INTO workes VALUES(1, 'Ivan', 'Ivanov', 25);*/
	/*INSERT INTO workes (id, NAME, age) VALUES(2, 'Dima',25);*/
/*	SELECT NAME, SecondName FROM workes WHERE age <30 OR age > 40;*/
/*	SELECT NAME, SecondName FROM workes WHERE age BETWEEN 18 AND 40;*/
 /* SELECT NAME FROM workes WHERE NAME LIKE '%a'; */
/* SELECT * FROM workes WHERE id  not IN(1,3,4); */
/* UPDATE workes  SET SecondName='Dmitrov' WHERE NAME='Dima' AND age=35;*/
/* DELETE FROM workes WHERE id=4;*/
/* SELECT * FROM workes ORDER BY age desc; */
/* SELECT * FROM workes LIMIT 2; */


/*  ДЗ  */
/*  SELECT MAX(salary) AS выаыва FROM workes WHERE salary NOT IN( select MAX(salary) FROM workes); */
/* Select * FROM workes WHERE borndata BETWEEN '1970-10-01' AND '1990-12-31';	 */
/* SELECT NAME,marks FROM marks where marks > (SELECT AVG(marks) FROM marks) ; */

/* SELECT min(salary) FROM workes GROUP BY age HAVING MIN(salary) > 8workes000; */

/* SELECT SecondName from workes WHERE id_depart =(SELECT id FROM depart WHERE departmen='бухгалтера'); */

/* SELECT departmen FROM depart WHERE id=(SELECT id_depart FROM workes WHERE NAME='Petro' AND SecondName='Petrovna'); */

/* SELECT departmen FROM depart D INNER JOIN workes P ON D.id=P.id_depart WHERE NAME='Ivan' AND SecondName='Ivanov'; */

/* SELECT name,SecondName FROM workes W inner JOIN depart D ON W.id_depart=D.id WHERE departmen='програмисты'; */

/* SELECT name,SecondName FROM workes WHERE id_depart IN(SELECT id FROM depart WHERE id_comp=(SELECT id FROM company WHERE comp_name='Моя компания')); */

/* SELECT name,SecondName FROM workes W INNER JOIN depart D ON W.id_depart=D.id 
												 INNER JOIN company C ON D.id_comp=C.id  WHERE comp_name='Моя компания';  */

SELECT comp_name FROM company WHERE id IN(SELECT id_comp FROM depart WHERE id=(SELECT id_depart FROM workes WHERE secondName='Ferovna'));


SELECT comp_name FROM company C INNER JOIN depart D ON C.id /* 2 */ = D.id_comp 
										  INNER JOIN workes W ON D.id  = W.id_depart WHERE secondName='Petrov';  