<?php

namespace App;

class Csv
{
  private $csv = [];
  private $rates = 0;
  private $taxes = 0;
  private $total = 0;

  private $rates_col = 3;
  private $taxes_col = 4;

  public function printTable(): void
  {
    include('../app/views/table.php');
  }

  public function setFile(array $file): void
  {
    $this->csv = array_map('str_getcsv', file($file['tmp_name']));
  }

  public function computeTotals(): void
  {
    foreach ($this->csv as $row) {
      $this->taxes += (int) $row[$this->taxes_col];
      $this->rates += (int) $row[$this->rates_col];
      $this->total += (int) $row[$this->taxes_col] + (int) $row[$this->rates_col];
    }

    array_push($this->csv, ['', '', 'Subtotal', $this->rates, '']);
    array_push($this->csv, ['', '', 'Total', $this->total, '']);
  }
}