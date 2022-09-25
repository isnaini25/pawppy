<?php

namespace App\Controllers\Admin;

use \koolreport\widgets\koolphp\Table;
?>
<html>

<head>
    <title>Laporan Diagnosis</title>
    </title>
</head>

<body>
    <h1>Laporan Diagnosis</h1>
    <h3></h3>
    <?php
    Table::create(array(
        'dataStore' => $this->dataStore('diagnosis'),
        "class" => array(
            "table" => "table table-hover"
        )
    ));
    ?>


</body>

</html>

<script>
window.print();
</script>