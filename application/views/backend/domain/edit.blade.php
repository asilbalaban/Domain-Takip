@include('backend/_blocks/header')

    <div id="wrapper">

        @include('backend/_blocks/topMenu')
        @include('backend/_blocks/sideMenu')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Domain Düzenle</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-info" href="{{base_url('admin/domain')}}">Domainleri Listele</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form action="{{base_url('admin/domain/'.$domain->id)}}" method="post">

                                <div class="form-group">
                                    <label>Kullanıcı Adı</label>
                                    <input value="{{$domain->domain}}" name="domain" class="form-control" placeholder="Alan Adı"  type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Bitiş Tarihi</label>
                                    <input value="{{$domain->endDate}}" name="endDate" class="form-control" placeholder="Bitiş Tarihi"  type="date">
                                </div>
                                <div class="form-group">
                                    <label>Servis Sağlayıcı Adı</label>
                                    <input value="{{$domain->serviceProvider}}" name="serviceProvider" class="form-control" placeholder="Servis Sağlayıcı"  type="text">
                                </div>
                                <div class="form-group">
                                    <label>Not</label>
                                    <textarea name="note" class="form-control" placeholder="Not">{{$domain->note}}</textarea>
                                </div>

                                <input type="submit" class="btn btn-info pull-right" value="Kaydet">
                            </form>

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

@include('backend/_blocks/footer')