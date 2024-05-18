<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table id="produk-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Nama Anime</th>
                <th>Tipe Figure</th>
                <th>Harga Produk</th>
                <th>Deskripsi</th>
                <th>Dimasukkan</th>
                <th>Diupdate</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data akan dimuat di sini menggunakan JavaScript -->
        </tbody>
    </table>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('https://anishop.ahmaaad.web.id/api/produks/xml')
                .then(response => response.text())
                .then(data => {
                    let parser = new DOMParser();
                    let xmlDoc = parser.parseFromString(data, "application/xml");
                    let produks = xmlDoc.getElementsByTagName('produk');
                    let tableBody = document.querySelector('#produk-table tbody');

                    for (let produk of produks) {
                        let row = document.createElement('tr');

                        let id = produk.getElementsByTagName('id')[0].textContent;
                        let nama = produk.getElementsByTagName('nama')[0].textContent;
                        let anime = produk.getElementsByTagName('anime')[0].textContent;
                        let tipe = produk.getElementsByTagName('tipe')[0].textContent;
                        let harga = produk.getElementsByTagName('harga')[0].textContent;
                        let deskripsi = produk.getElementsByTagName('deskripsi')[0].textContent;
                        let created_at = produk.getElementsByTagName('created_at')[0].textContent;
                        let updated_at = produk.getElementsByTagName('updated_at')[0].textContent;

                        row.innerHTML = `
                            <td>${id}</td>
                            <td>${nama}</td>
                            <td>${anime}</td>
                            <td>${tipe}</td>
                            <td>${harga}</td>
                            <td>${deskripsi}</td>
                            <td>${created_at}</td>
                            <td>${updated_at}</td>
                        `;

                        tableBody.appendChild(row);
                    }
                })
                .catch(error => console.error('Error fetching the XML data:', error));
        });
    </script>
</body>
</html>
