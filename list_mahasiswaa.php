<?php
$multidimensi = [
    [ 
        "No" => 1,
        "Nim" => "D212111015",
        "Nama" => "Rudi Loilatu",
    ],
    [
        "No" => 2,
        "Nim" => "D212111020",
        "Nama" => "sophia nurhasfsoh qoesnady",
    ],
    [
        "No" => 3,
        "Nim" => "D212111013",
        "Nama" => "Renaldi Irawan",
    ],
    [
        "No" => 4,
        "Nim" => "D212111035",
        "Nama" => "Zaltinnnn",
    ],
    [
        "No" => 5,
        "Nim" => "D212111028",
        "Nama" => "M Reza ",
    ],
    [
        "No" => 6,
        "Nim" => "D212111033",
        "Nama" => "Novita Qadariah",
    ],
    [
        "No" => 7,
        "Nim" => "D212111001",
        "Nama" => "Aliftia",
    ],
    [
        "No" => 8,
        "Nim" => "D212111034",
        "Nama" => "Rahmatia",
    ],
    [
        "No" => 9,
        "Nim" => "D212111011",
        "Nama" => "Raz",
    ],
    [
        "No" => 10,
        "Nim" => "D212111012",
        "Nama" => "Puspa Dewi Kusumawati",
    ],
];

echo "<table border='1' cellspacing= '0'>";
echo "<tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
     </tr>";

foreach ($multidimensi as $value) {
    echo "<tr>
            <td>{$value['No']}</td>
            <td>{$value['Nim']}</td>
            <td>{$value['Nama']}</td>
          </tr>";
}
echo "</table>";
?>