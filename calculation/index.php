<?php
include 'calculator.php'
?>

<html>

<head>
    <title>Calculator Electricity Bill</title>
    <head>
    <body>
        <h2> Calculate House Electricity Bill</h2>
        <div style="margin-bottom: 50px;">
            <table border="1">
            <tr>
                <th>Block Tariff (per month)</th>
                <th>Unit</th>
                <th>Rate</th>
            </tr>
            <tr>
                <td>For the first 200 kWh</td>
                <td>1 - 200 kWh</td>
                <td>0.218</td>
            </tr>
        
            <tr>
                <td>For the next 100 kWh (201 - 300 kWh)</td>
                <td>201 - 300 kWh</td>
                <td>0.334</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (301 - 600 kWh)</td>
                <td>301 - 600 kWh</td>
                <td>0.516</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (601 - 900 kWh)</td>
                <td>601 - 900 kWh</td>
                <td>0.546</td>
            </tr>
            <tr>
                <td>For consumption above 900 kWh</td>
                <td>901 kWh onwards</td>
                <td>0.571</td>
            </tr>
            <tr>
                <td colspan="3">The minimum monthly charge is RM300</td>
            </tr>
            </table>
        </div>
        <form method="POST">
            Enter your first 200 kWh (1 - 200 kWh) per month:
            <input type="text" name="n/a" value="n/a">

        </form>
        <form method="POST">
            Enter next  100 kWh (201 - 300 kWh) per month:
            <input type="text" name="n/a" value="n/a">

        </form>
        <form method="POST">
            Enter next 300 kWh (301 - 600 kWh) per month:
            <input type="text" name="n/a" value="n/a">

        </form>
        <form method="POST">
            Enter next 300 kWh (601 - 900 kWh) per month:
            <input type="text" name="n/a" value="n/a">

        </form>
        <form method="POST">
            Enter next kWh (901 kWH onwards) per month:
            <input type="text" name="n/a" value="n/a">

            <input type="submit" name="calculate" value="Calculate Bill">

            <input type="submit" name="reset" value="Reset">

        </form>

    </body>
</html>