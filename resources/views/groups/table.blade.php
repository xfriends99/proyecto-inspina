<table class="table table-hover dataTables">
    <thead>
    <tr>
        <th></th>
        <th>Nombre</th>
        <th>Propietario</th>
        <th>Miembros</th>
        <th>Creado el</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td class=""><input type="checkbox" class="i-checks"></td>
            <td class=""><p><a href="">{{$item->name}}</a></p></td>
            <td class=""><p><a href="">Nombre Apellido</a></p></td>
            <td class=""><p>10</p></td>
            <td class=""><date>18/03/2018 10:00am</date></td>
        </tr>
    @endforeach
    </tbody>
</table>