    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="https://bootswatch.com/3/paper/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        
        <script src="{{url('/js/repeater.js')}}"></script>
        <style>
            .font-color-white{
                color:white;
            }
        </style>

        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <br>
            <a class="btn btn-primary" href="{{ url('/resep_list/'.$id_kategori) }}">Kembali</a>
            <br>
            <br>
            <br>
            <br>
            <form action="{{ url('/resep/tambah') }}" method="post">
                @csrf
                <input type="hidden" name="id_kategori" value="{{ $id_kategori }}">
                <div class="row">
                    <div class="col-sm-12 ">
                        <!-- Repeater Html Start -->
                        <div id="repeater">
                            <!-- Repeater Heading -->
                            <div class="item-content">
                                <div class="form-group">
                                    <h3 for="inputEmail" class="col-lg-2 control-label">Nama Resep</h3>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="nama_resep">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="repeater-heading">
                                <a class="btn btn-success float-right repeater-add-btn font-color-white">
                                    Tambah Bahan
                                </a>
                            </div>
    
                            <div class="items" data-group="bahan_bahan">
                                <!-- Repeater Content -->
                                <div class="item-content">
                                    <div class="form-group">
                                        <h3 for="inputBahan" class="col-lg-2 control-label">Bahan</h3>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="inputBahan"  data-name="name">
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeater Remove Btn -->
                                <div class="pull-right repeater-remove-btn">
                                    <a class="btn btn-danger remove-btn">
                                        Remove
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="pull-right ">
                            <button type="submit" class="btn btn-primary">
                               Submit
                            </button>
                        </div>
                        <!-- Repeater End -->
                    </div>
                </div>

            </form>
           
        </div>

    </body>
        <script>
            $(function(){

        $("#repeater").createRepeater();

        });
        </script>

    </html>






    