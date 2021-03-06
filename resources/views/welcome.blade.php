@extends('tema::layouts.master')
@section('headcontent')
<div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
      <li class="breadcrumb-item active"><a href="#">Beranda</a></li>
    </ol>
  </nav>
  <h4 class="mg-b-0 tx-spacing--1">Selamat Datang Eko Wiyatnanto</h4>
</div>
<!-- <div class="d-none d-md-block">
  <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="save" class="wd-10 mg-r-5"></i> Save</button>
  <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="share-2" class="wd-10 mg-r-5"></i> Share</button>
  <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="plus" class="wd-10 mg-r-5"></i> Add New Ticket</button>
</div> -->
@endsection
@section('content')
<div class="row row-xs">
  <div class="col-lg-8 col-xl-9">
    <div class="card">
      <div class="card-header bd-b-0 pd-t-20 pd-lg-t-25 pd-l-20 pd-lg-l-25 d-flex flex-column flex-sm-row align-items-sm-start justify-content-sm-between">
        <div>
          <h6 class="mg-b-5">Website Audience Metrics</h6>
          <p class="tx-12 tx-color-03 mg-b-0">Audience to which the users belonged while on the current date range.</p>
        </div>
        <div class="btn-group mg-t-20 mg-sm-t-0">
          <button class="btn btn-xs btn-white btn-uppercase">Day</button>
          <button class="btn btn-xs btn-white btn-uppercase">Week</button>
          <button class="btn btn-xs btn-white btn-uppercase active">Month</button>
        </div><!-- btn-group -->
      </div><!-- card-header -->
      <div class="card-body pd-lg-25">
        <div class="row align-items-sm-end">
          <div class="col-lg-7 col-xl-8">
            <div class="chart-six"><canvas id="chartBar1"></canvas></div>
          </div>
          <div class="col-lg-5 col-xl-4 mg-t-30 mg-lg-t-0">
            <div class="row">
              <div class="col-sm-6 col-lg-12">
                <div class="d-flex align-items-center justify-content-between mg-b-5">
                  <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">New Users</h6>
                  <span class="tx-10 tx-color-04">65% goal reached</span>
                </div>
                <div class="d-flex align-items-end justify-content-between mg-b-5">
                  <h5 class="tx-normal tx-rubik lh-2 mg-b-0">13,596</h5>
                  <h6 class="tx-normal tx-rubik tx-color-03 lh-2 mg-b-0">20,000</h6>
                </div>
                <div class="progress ht-4 mg-b-0 op-5">
                  <div class="progress-bar bg-teal wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-12 mg-t-30 mg-sm-t-0 mg-lg-t-30">
                <div class="d-flex align-items-center justify-content-between mg-b-5">
                  <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Page Views</h6>
                  <span class="tx-10 tx-color-04">45% goal reached</span>
                </div>
                <div class="d-flex justify-content-between mg-b-5">
                  <h5 class="tx-normal tx-rubik mg-b-0">83,123</h5>
                  <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>250,000</small></h5>
                </div>
                <div class="progress ht-4 mg-b-0 op-5">
                  <div class="progress-bar bg-orange wd-45p" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-12 mg-t-30">
                <div class="d-flex align-items-center justify-content-between mg-b-5">
                  <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Page Sessions</h6>
                  <span class="tx-10 tx-color-04">20% goal reached</span>
                </div>
                <div class="d-flex justify-content-between mg-b-5">
                  <h5 class="tx-normal tx-rubik mg-b-0">16,869</h5>
                  <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>85,000</small></h5>
                </div>
                <div class="progress ht-4 mg-b-0 op-5">
                  <div class="progress-bar bg-pink wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-12 mg-t-30">
                <div class="d-flex align-items-center justify-content-between mg-b-5">
                  <h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Bounce Rate</h6>
                  <span class="tx-10 tx-color-04">85% goal reached</span>
                </div>
                <div class="d-flex justify-content-between mg-b-5">
                  <h5 class="tx-normal tx-rubik mg-b-0">28.50%</h5>
                  <h5 class="tx-normal tx-rubik tx-color-03 mg-b-0"><small>30.50%</small></h5>
                </div>
                <div class="progress ht-4 mg-b-0 op-5">
                  <div class="progress-bar bg-primary wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div><!-- row -->

          </div>
        </div>
      </div><!-- card-body -->
    </div><!-- card -->
  </div>
  <div class="col-md-6 col-lg-4 col-xl-3 mg-t-10 mg-lg-t-0">
    <div class="card">
      <div class="card-header">
        <h6 class="mg-b-0">Sessions By Channel</h6>
      </div><!-- card-header -->
      <div class="card-body pd-lg-25">
        <div class="chart-seven"><canvas id="chartDonut"></canvas></div>
      </div><!-- card-body -->
      <div class="card-footer pd-20">
        <div class="row">
          <div class="col-6">
            <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 tx-nowrap mg-b-5">Organic Search</p>
            <div class="d-flex align-items-center">
              <div class="wd-10 ht-10 rounded-circle bg-pink mg-r-5"></div>
              <h5 class="tx-normal tx-rubik mg-b-0">1,320 <small class="tx-color-04">25%</small></h5>
            </div>
          </div><!-- col -->
          <div class="col-6">
            <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Email</p>
            <div class="d-flex align-items-center">
              <div class="wd-10 ht-10 rounded-circle bg-primary mg-r-5"></div>
              <h5 class="tx-normal tx-rubik mg-b-0">987 <small class="tx-color-04">20%</small></h5>
            </div>
          </div><!-- col -->
          <div class="col-6 mg-t-20">
            <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Referrral</p>
            <div class="d-flex align-items-center">
              <div class="wd-10 ht-10 rounded-circle bg-teal mg-r-5"></div>
              <h5 class="tx-normal tx-rubik mg-b-0">2,010 <small class="tx-color-04">30%</small></h5>
            </div>
          </div><!-- col -->
          <div class="col-6 mg-t-20">
            <p class="tx-10 tx-uppercase tx-medium tx-color-03 tx-spacing-1 mg-b-5">Social Media</p>
            <div class="d-flex align-items-center">
              <div class="wd-10 ht-10 rounded-circle bg-orange mg-r-5"></div>
              <h5 class="tx-normal tx-rubik mg-b-0">1,054 <small class="tx-color-04">25%</small></h5>
            </div>
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- card-footer -->
    </div><!-- card -->
  </div>
</div>
@endsection
