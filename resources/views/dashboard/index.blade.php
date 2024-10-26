@extends('auth.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            {{-- <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>1</h3>

                            <p>CEBO</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>2<sup style="font-size: 20px"></sup></h3>

                            <p>HOD</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>3</h3>

                            <p>TL</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>5</h3>

                            <p>KAM</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ session()->get('total_target') ? session()->get('total_target') . 'mn' : '0mn' }}</h3>

                            <p>Total Target</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-podium"></i>
                        </div>
                        {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
                    </div>
                </div>
                @if (session()->get('user_type') != 'kam')
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h3>{{ session()->get('total_target') ? session()->get('total_target') * 4 . 'mn' : '0mn' }}
                                </h3>

                                <p>Actual Target</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-podium"></i>
                            </div>
                            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
                        </div>
                    </div>
                @endif
                @if (session()->get('user_type') == 'hod' || session()->get('user_type') == 'team_lead')
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>{{ session()->get('remaining_target') ? session()->get('remaining_target') . 'mn' : '0mn' }}
                                </h3>

                                <p>Remaining Assigned Target</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-compose"></i>
                            </div>
                            {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
                        </div>
                    </div>
                @endif
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ session()->get('created_deal_size') ? session()->get('created_deal_size') . 'mn' : '0mn' }}
                            </h3>

                            <p>Deal Created</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-plus"></i>
                        </div>
                        {{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>{{ session()->get('achieved_target') ? session()->get('achieved_target') . 'mn' : '0mn' }}
                            </h3>

                            <p>Achieved Deal</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>
                @php
                    if (session()->get('total_target') > 0) {
                        $percen = (session()->get('achieved_target') * 100) / (session()->get('total_target') * 4);
                        if (session()->get('user_type') == 'kam') {
                            $percen = (session()->get('achieved_target') * 100) / session()->get('total_target');
                        }
                    } else {
                        $percen = 0;
                    }
                @endphp
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>{{ session()->get('achieved_target') ? number_format((float) $percen, 2, '.', '') . '%' : '0%' }}
                            </h3>

                            <p>Achieved Deal (percentage)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>
                @php
                    $nt_achv = session()->get('total_target') * 4 - session()->get('achieved_target');
                    if (session()->get('user_type') == 'kam') {
                        $nt_achv = session()->get('total_target') - session()->get('achieved_target');
                    }
                @endphp
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ $nt_achv < 0 ? '0' : $nt_achv }}mn
                            </h3>

                            <p>Not Achieved </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- Main content -->

        <!-- /.content -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
