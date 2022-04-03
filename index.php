<style>
    table {
        border-collapse: collapse;
        font-family: 'Microsoft JhengHei';
        text-align: center;
    }

    td {
        border: 1px solid slategray;
        width: 30px;
        height: 30px;
    }
</style>
<table>
    <?php
    for ($i = 0; $i <= 9; $i++) {
        // 9列
        echo "<tr>";
        for ($j = 0; $j <= 9; $j++) {
            if ($i == 0 && $j == 0) {
                // 最左上角
                echo "<td style='background-color:slategray; color:white'></td>";
            } else if ($i == 0) {
                // 第一列
                echo "<td style='background-color:slategray; color:white'>$j</td>";
            } else if ($j == 0) {
                // 第一欄
                echo "<td style='background-color:slategray; color:white'>$i</td>";
            } else {
                // 以上三種情形外的其它情形
                echo "<td>" . $i * $j . "</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>