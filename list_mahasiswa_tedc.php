<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2 class="mb-4">Daftar Mahasiswa</h2>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Koneksi ke database
            $mysqli = new mysqli("localhost", "root", "", "list_mahasiswa_tedc");

            if ($mysqli->connect_error) {
                die("Koneksi gagal: " . $mysqli->connect_error);
            }

            // Query untuk mengambil data mahasiswa beserta program studi
            $query = "SELECT s.nim, s.nama, sp.name AS program_studi 
                      FROM students s 
                      LEFT JOIN study_programs sp ON s.study_program_id = sp.id";

            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['nim']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['program_studi']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>Tidak ada data</td></tr>";
            }

            $mysqli->close();
            ?>
        </tbody>
    </table>

    <h2 class="mt-5 mb-4">Daftar Program Studi</h2>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Koneksi ke database
            $mysqli = new mysqli("localhost", "root", "", "uas");

            if ($mysqli->connect_error) {
                die("Koneksi gagal: " . $mysqli->connect_error);
            }

            // Query untuk mengambil data program studi
            $query = "SELECT id, name FROM study_programs";

            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3' class='text-center'>Tidak ada data</td></tr>";
            }

            $mysqli->close();
            ?>
        </tbody>
    </table>
</body>
</html>