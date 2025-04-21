<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #ffffff;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            color: #00d4ff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: rgba(0, 0, 0, 0.3);
            color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        thead {
            background-color: rgba(0, 212, 255, 0.3);
        }

        tbody tr {
            transition: background 0.3s ease;
        }

        tbody tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        th {
            font-weight: bold;
        }

        td {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            tr {
                margin-bottom: 15px;
                border-bottom: 2px solid rgba(255, 255, 255, 0.1);
            }

            th {
                background-color: transparent;
                text-align: left;
                font-size: 1.1em;
                padding-top: 0;
            }

            td {
                text-align: right;
                position: relative;
                padding-left: 50%;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
                color: #00d4ff;
            }
        }
    </style>
</head>
<body>


    <div class="container">
        <h1>Daftar Buku</h1>



        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul buku</th>
                    <th>Nama Penulis</th>
                    <th>Tahun terbit</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->Judulbuku }}</td>
                        <td>{{ $book->Namapenulis }}</td>
                        <td>{{ $book->Tahunterbit }}</td>
                        <td>{{ $book->Genrebuku }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
