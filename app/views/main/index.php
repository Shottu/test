<table class="table">
<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Имя</th>
  <th scope="col">Фамилия</th>
  <th scope="col">Возраст</th>
  <th scope="col">Детальная информация</th>
</tr>
</thead>
<tbody>
<?php foreach ($user as $res) :?>
  <tr>
    <th scope='row'><?=$res['id']?></th>
    <td><?=$res['first_name']?></td>
    <td><?=$res['last_name']?></td>
    <td><?=$res['age']?></td>
    <td>
      <a href='/show/<?=$res['id']?>'>Подробнее
    </td>
    </tr>
<?php endforeach?>
<tr>
</tbody>
</table>