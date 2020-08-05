<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Advertisements</title>
    <style type="text/css">
        .body {
            background-color: #296d98;
            justify-content: center;
            display: flex;
            padding-top: 50px;
        }

        .container {
            background-color: #a3a3a3;
            border: 3px solid #0121fe;
            border-radius: 12px;
            height: auto;
            width: 100ex;
            line-height: 40px;
            text-align: center;
            padding-bottom: 15px;
        }

        .button {
            background-color: #0080ff;
            border: none;
            color: #ffffff;
            border-radius: 5px;
            display: inline-flex;
            font-size: 16px;
            padding: 10px 20px;
            transition-duration: 0.4s;
            margin-left: 3%;
        }

        .button:hover {
            color: #0080ff;
            background-color: #ffffff;
        }

        .title {
            color: #000000;
            font-size: 30px;
            width: 70%;
            text-decoration: underline;
        }

        table {
            display: inline-table;
            width: 70%;
            border: solid 2px black;
            border-radius: 10px;
            background-color: #ffffff;
        }

        th:first-child {
            border-top-left-radius: 10px;
        }

        th:last-child {
            border-top-right-radius: 10px;
        }

        tr:nth-child(even) {
            background-color: #eee;
        }

        thead {
            background-color: #79bcff;
        }

        tr td {
            font-weight: bolder;
        }

        .headerContainer {
            display: inline-flex;
            align-items: center;
            width: 100%;
        }
    </style>
</head>

<body class="body">
    <div class="container">
        <div class="headerContainer">
            <button class="button" onclick="document.location='./'">Home</button>
            <h2 class="title">Advertisements</h2>
        </div>
        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Advertisement</th>";
            echo "<th>User Name</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } else {
            echo "<p><em>No advertisments were found.</em></p>";
        }
        ?>
    </div>
</body>

</html>