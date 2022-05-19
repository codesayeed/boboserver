@extends('user.layouts.app')

@section('content')
    <div class="row pt-4">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>2</h3>

                    <p>Service(s)</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53</h3>

                    <p>Ticket(s)</p>
                </div>
                <div class="icon">
                    <i class="ion ion-chatbubbles"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>0</h3>

                    <p>Outstanding Invoice(s)</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>2</h3>

                    <p>New(s)</p>
                </div>
                <div class="icon">
                    <i class="ion ion-flash"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>
@endsection
