@section('head')
    <link href="{{base_url('public/assets/sbadmin/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
@endsection
@include('backend/_blocks/header')


    <div id="wrapper">

        @include('backend/_blocks/topMenu')
        @include('backend/_blocks/sideMenu')


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Domainler</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-info" href="{{base_url('admin/domain/create')}}">Yeni Domain Oluştur</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Alan Adı</th>
                                            <th>Bitiş Tarihi</th>
                                            <th>Servis Sağlayıcı</th>
                                            <th>Not</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($domains as $domain)
                                        <tr class="odd gradeX">
                                            <td>{{$domain->id}}</td>
                                            <td>{{$domain->domain}}</td>
                                            <td>{{ date('d m Y', strtotime($domain->endDate)) }}</td>
                                            <td>{{$domain->serviceProvider}}</td>
                                            <td>{{$domain->note}}</td>
                                            <td class="center">
                                                <a class="btn btn-default btn-xs" href="{{base_url("admin/domain/$domain->id/edit")}}">Düzenle</a>
                                                <a class="btn btn-danger btn-xs" href="{{base_url("admin/domain/$domain->id/delete")}}">Sil</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


@section('scripts')

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="{{base_url('public/assets/sbadmin/js/plugins/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{base_url('public/assets/sbadmin/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {

        $('#dataTables-example').dataTable( {
            "oLanguage": {
                "sUrl": "{{base_url('public/assets/sbadmin/js/plugins/dataTables/turkish.txt')}}"
            }
        });

    });
    </script>


@endsection

@include('backend/_blocks/footer')