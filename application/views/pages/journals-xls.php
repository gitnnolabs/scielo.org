<?php
$now = gmdate("D-d-M-Y-H:i:s");
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=journals-{$now}.xls");
?>

<table border="1">
    <tr>
        <th><?= lang('journals') ?></th>
        <th>scielo_url</th>
        <th><?= strtolower(lang('publisher')) ?></th>
    </tr>
    <?php foreach ($journals as $journal) : ?>
        <tr>
            <?= $journal->title ?>
        </tr>
        <tr>
            <?= $journal->scielo_url ?>
        </tr>
        <tr>
            <?= $journal->publisher_name ?>
        </tr>
    <?php endforeach; ?>
</table>
