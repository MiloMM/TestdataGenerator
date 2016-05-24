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
                <div class="title">Database generator</div><Br>
                <form action="query" method="post">
                    <label>Kolom:</label>
                    <input type="text" name="kolom"><br>
                    <label>Amount:</label>
                    <input type="number" name="amount" min="1" value="1"><br>
                    <label>Preset:</label>
                    <input type="text" name="preset" disabled value="-"><br>
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </body>
</html>
