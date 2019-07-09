<table class="table">
<thead>
<tr>
  <th scope="col">ID</th>
      <th scope="col">Имя</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Возраст</th>
      <th scope="col">Пол</th>
      <th scope="col">Город</th>
      <th scope="col">Email</th>
      <th scope="col">Телефон</th>
</tr>
</thead>
<tbody>
<?php foreach ($user as $res) :?>
  <tr>
    <th scope='row'><?=$res['id']?></th>
      <td><?=$res['first_name']?></td>
      <td><?=$res['last_name']?></td>
      <td><?=$res['age']?></td>
      <td><?=$res['sex']?></td>
      <td><?=$res['city']?></td>
      <td><?=$res['email']?></td>
      <td><?=$res['phone']?></td>
    </td>
    </tr>
<?php endforeach?>
<tr>
</tbody>
</table>