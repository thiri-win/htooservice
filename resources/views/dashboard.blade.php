@extends('master')

@section('content')
    <div class="kt-container  kt-container--fluid
      kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--tab">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon kt-hidden">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="kt-portlet__head-title">
                                Bar Chart
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="kt_morris_3" style="height:500px;"></div>
                    </div>
                </div>
                <!--end::Portlet-->

                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon kt-hidden">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="kt-portlet__head-title">
                                Pie Chart 1
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div id="kt_flotcharts" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var barData=[
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 },
            { y: '2013', a: 100, b: 90 },
            { y: '2014', a: 75,  b: 65 },
            { y: '2015', a: 50,  b: 40 },
            { y: '2016', a: 75,  b: 65 },
            { y: '2017', a: 50,  b: 40 }
        ];
        new Morris.Bar({
            element: 'kt_morris_3',
            data: barData,
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B'],
            barColors: ['aqua', 'blue']
        });

        $test = <?php echo $categories ?>;
        var dataSet=[];
        $test.forEach(category => {
            dataSet.push({
                label: category['title'],
                data: category['total'],
            })
        });
        $.plot('#kt_flotcharts', dataSet, {
            series: {
                pie: {
                    show: true
                }
            }
        });

    </script>

@endpush
