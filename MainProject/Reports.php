<html>
    <head>
        <link rel="stylesheet" href="CSS/Reports.css">
    </head>
    <body>
        <div class="content">
            <div class="sidebox">
                <h1>REPORTS</h1>
                <div class="form">
                <br><br>
                <form action="http://localhost/MainProject/PHP/reports.php" target="_parent" method="get">
                    <p>TYPE</p>
                    <select name="report">
                        <option value="esi">ESI Report</option>
                        <option value="welfare">Welfare Funds</option>
                        <option value="minwages">Minimum Wages</option>
                    </select>
                    <p>SORT</p>
                    <select name="type">
                        <option value="District">District Wise</option>
                        <option value="Center">Center Wise</option>
                    </select>
                    <br>
                    <input type="submit" value="SUBMIT">
                    <input type="reset" value="CLEAR">
                </form>
                </div>
            </div>
        </div>
    </body>
</html>