@include('backend/_blocks/header')

    <div id="wrapper">

        @include('backend/_blocks/topMenu')
        @include('backend/_blocks/sideMenu')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Yeni Domain Oluştur</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="btn btn-info" href="{{base_url('admin/user')}}">Domainleri Listele</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form action="{{base_url('admin/domain')}}" method="post">
                                <div class="form-group">
                                    <label>Kullanıcı Adı</label>
                                    <input name="domain" class="form-control" placeholder="Alan Adı"  type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Servis Sağlayıcı Adı</label>
                                    <input name="endDate" class="form-control" placeholder="Bitiş Tarihi"  type="date">
                                </div>
                                <div class="form-group">
                                    <label>Servis Sağlayıcı Adı</label>
                                    <input name="serviceProvider" class="form-control" placeholder="Servis Sağlayıcı"  type="text">
                                </div>
                                <div class="form-group">
                                    <label>Servis Sağlayıcı Adı</label>
                                    <textarea name="note" class="form-control" placeholder="Not"></textarea>
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