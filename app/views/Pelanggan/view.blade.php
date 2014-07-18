@extends('layout.bootstrapadmin.index')

@section('content')
@if (Session::has('message'))
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif
<div class="panel panel-info">
    <!-- Default panel contents -->
    <div class="panel-heading"><i class="glyphicon glyphicon-list-alt"></i> Tabel Pelanggan</div>

    <!-- Table -->
    <div class="table-bordered">
        <table class="table">
            <tr class="panel-default">
                <th>Id Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>No. Hp</th>
                <th>Golongan</th>
                <th>Action</th>
                
            </tr>
            <?php $i = 1;
            foreach ($isi_pelanggan as $value) {
                ?>
                <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['nama']; ?></td>
                    <td><?php echo $value['alamat']; ?></td>
                    <td><?php echo $value['no_hp']; ?></td>
                    <td><?php echo $value['golongan_id'] ?></td>
                   
                    <td
                    
                        <div class="btn btn-group">
                            <a class="btn btn-small btn-danger" title="Delete" href="{{ URL::to('/pelanggan/delete/' . $value->id) }}"><span class="glyphicon glyphicon-trash"></span> </a>
                            <a class="btn btn-small btn-primary" title="Update" href="{{ URL::to('/pelanggan/edit/' . $value->id) }}"><span class=" glyphicon glyphicon-edit"></span> </a>
                        </div>

                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
    </div>
</div>
@stop