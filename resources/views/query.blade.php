<?php
    $table = $_POST['table'];
    $column = $_POST['column'];
    $amount = $_POST['amount'];
    $preset = $_POST['preset'];

    $query = "INSERT INTO `$table` (`$column`) VALUES";

    for ($x = 1; $x <= $amount; $x++) {
        $tabel = DB::table('presets')->where('preset', '=', $preset)->orderBy(DB::raw('RAND()'))->take(1)->get();
        $result = $tabel[0]->value;
        $query .= " ('$result'),";
    }

    $query = rtrim($query, ",");
    $query .= ";";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Database generator</title>

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: Arial;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Database generator</div>
                <p><?php echo $query ?></p>
            </div>
        </div>
    </body>
</html>
