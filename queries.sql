/*Buscar o mostrar dependiendo de una condicion*/
SELECT column FROM mytable WHERE column = 'abc' /*Case sensitive, busqueda exacta de string*/

SELECT column FROM mytable WHERE column LIKE '%ABC%'/*Case insensitive,busqueda sin importar si la string esta en mayuscula o minuscula, %ABC si termina con ABC, ABC% si empieza por abc */

/*Editar una columna*/
UPDATE mytable SET column = value, othercolumn = value WHERE id = 1

/*Tip: Write the constrain first and test in a SELECT query to make sure you are updating the right rows, and only then write the column / value pairs to update*/

/*Eliminar una columna*/
DELETE FROM mytable WHERE condition