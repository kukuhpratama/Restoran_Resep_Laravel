  @extends('index')
  @section('content')
  <br>

  <div class="container-fluid">
      
  <a type="button" class="btn btn-primary float-right" href="{{url('/resep/create/'.$kategori->id_kategori)}}" >
          Tambah Resep
      </a>
      <h5>{{$kategori->nama_kategori}}</h5>
      <br>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Nama Resep</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($resep as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->nama_resep }}</td>
                    <td>
                        <button class="btn btn-success" data-toggle="modal" data-target="#detailModal" data-url="{{ url('') }}" data-resep="{{ $item->id_resep }}" id="detail_btn" onclick="setBahan(this)" >Detail</button>
                        <a class="btn btn-danger" href="{{url('resep/delete/'.$item->id_resep)}}">Hapus</a>
                        <a type="button" class="btn btn-warning" href="{{ url('/resep/edit/'.$item->id_resep) }}">
                            Edit
                        </a>
                    </td>
                </tr>
              @endforeach
      </table>
  </div>

  <div class="modal fade" id="detailModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bahan-Bahan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="detail_bahan">
            {{-- <input type="text"  value=""> --}}
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
    
  @endsection

  @section('custom-script')
  <script>
      function setBahan(e){
        var url = $(e).data('url');
        var id_resep = $(e).data('resep');
        console.log(id_resep)
        $.ajax({
            'type'       : 'GET',
            'contentType': 'application/json',
            'dataType'   : 'json',
            'url'        : url + '/resep/detail/' + id_resep
        }).done(function(data){
            console.log(data);
            $("#detail_bahan").html('')
            $.each(data['bahan_bahan'], function(i,val){
                $("#detail_bahan").append('<li>'+val['bahan']+'</li>')
            });
            

        }).fail(function(data){
            console.log('failed to retrieve bahan-bahan resep');
        });
      }

  </script>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection