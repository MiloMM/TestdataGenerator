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
                    <label>Table:</label>
                    <input type="text" name="table" required><br>
                    <label>Column:</label>
                    <input type="text" name="column" required><br>
                    <label>Amount:</label>
                    <input type="number" name="amount" min="1" value="10" required><br>
                    <label>Preset:</label>
                    <select name="preset">
                        <!--<option value="none">No preset</option>-->
                        <option value="FirstName">First name</option>
                        <option value="LastName">Last name</option>
                        <option value="EMail">E-mail</option>
                    </select><br>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </body>
</html>
