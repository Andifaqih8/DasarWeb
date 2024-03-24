<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <h2> Multidimensional Array </h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        $movie = array(
            array("Avengers: Infinity War", 2018, 8.7),
            array("The Avengers", 2012, 8.1),
            array("Guardians of the Galaxy", 2014, 8.1),
            array("Iron Man", 2008, 7.9)
        );
        echo "<tr>";
        echo "<td>" . $movie[0][0] . "</td>"; //mengakses judul elemen pertama
        echo "<td>" . $movie[0][1] . "</td>"; //mengakses tahun elemen pertama
        echo "<td>" . $movie[0][2] . "</td>"; //mengakses rating elemen pertama
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[1][0] . "</td>"; //mengakses judul elemen kedua
        echo "<td>" . $movie[1][1] . "</td>"; //mengakses tahun elemen kedua
        echo "<td>" . $movie[1][2] . "</td>"; //mengakses rating elemen kedua
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[2][0] . "</td>"; //mengakses judul elemen ketiga
        echo "<td>" . $movie[2][1] . "</td>"; //mengakses tahun elemen ketiga
        echo "<td>" . $movie[2][2] . "</td>"; //mengakses rating elemen ketiga
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . $movie[3][0] . "</td>"; //mengakses judul elemen keempat
        echo "<td>" . $movie[3][1] . "</td>"; //mengakses tahun elemen keempat
        echo "<td>" . $movie[3][2] . "</td>"; //mengakses rating elemen keempat
        echo "</tr>";
        ?>
    </table>
</body>

</html>