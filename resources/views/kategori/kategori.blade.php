@extends('index')
@section('content')
<br>
<div class="container-fluid">

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Tambah Kategori
      </button>
<br>
<br>
<div class="card-deck">
@foreach ($kategori as $item) 
<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
<div class="card-header"><a class="text-white" style="text-decoration:none" href="{{url('/resep_list/'.$item->id_kategori)}}"><h5 class="card-title">{{$item->nama_kategori}}</h5></a></div>
    <div class="card-body">
    <a class=" btn btn-danger" href="{{ url('/kategori/delete/'.$item->id_kategori) }}">Hapus</a>
      <button onclick="set_data(this)" type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal" class="edit_button" data-url="{{url('')}}" data-id="{{$item->id_kategori}}" data-name="{{$item->nama_kategori}}">
        Edit
      </button>
    </div>
</div>
    @endforeach
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('kategori/tambah') }}" method="post">
          @csrf
            <div class="modal-body">
              <div class="form-group">
                <label for="kategori">Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori" id="kategori" >
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post" id="form_edit_kategori">
            @csrf
            <div class="modal-body">
              <div class="form-group">
              <label for="kategori">Nama Kategori</label>
              <input type="text" class="form-control" id="edit_nama_kategori" name="nama_kategori" value="">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
          </form>
      </div>
    </div>
  </div>
    
  <script>
    function set_data(e){
        var id = $(e).data('id');
        var name = $(e).data('name');
        var url = $(e).data('url');

        url = url+'/kategori/update/'+id;
        // console.log(url);
        $('#form_edit_kategori').attr('action', url);
        $('#edit_nama_kategori').val(name);
    }
  </script>
  <script>
    $( document ).ready(function() {
  
     });
  </script>
@endsection
