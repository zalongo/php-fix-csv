<!DOCTYPE htm>
<htm lang="en">
  <header>
    <style>
      body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 12px;
      }
      table {
        width: 100%;
        border: 1px solid black;
      }
      tr {
        border: 1px solid black;
      }
    </style>
  </header>
  <body>
    <table>
      <thead>
        <tr>
        <? foreach ($this->csv[0] as $header): ?>
          <th><?= $header ?></th>
        <? endforeach ?>
        </th>
      </thead>
      <tbody>
        <? for ($x = 1; $x <= count($this->csv) -1; $x++): ?>
        <tr>
          <? foreach ($this->csv[$x] as $column): ?>
          <td><?= $column ?></td>
          <? endforeach ?>
        </tr>
        <? endfor ?>
      </tbody>
    </table>
  </body>
</htm>