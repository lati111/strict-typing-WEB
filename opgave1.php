<?php 
declare(strict_types = 1);

function createTable(array $records = []): string
{
    $table = '<table>';
    if ($records !== []) {
        foreach ($records as $record) {
            $table .= createRow($record);
        }
    }
    $table .= "</table>";
    return $table;
}


function createRow(array $record): string
{
    $tr = '<tr>';
    foreach ($record as $data) {
        $tr .= createCell($data);
    }
    $tr .= "</tr>";
    return $tr;
}


function createCell(string $data): string
{
    return "<td>$data</td>";
}


echo createTable([['Pietje', 'Puk'], ['Jan', 'Klaassen']]);
