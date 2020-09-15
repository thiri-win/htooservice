@extends('master')

@section('content')
    <div class="flex flex-wrap mt-6">
        <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-plus mr-3"></i> Monthly Reports for Expenses and Incomes
            </p>
            <div class="p-6 bg-white">
                <canvas id="lineChart" width="400" height="200"></canvas>
            </div>
        </div>
        <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-plus mr-3"></i> Expenses Per Year
            </p>
            <div class="p-6 bg-white">
                <canvas id="pieChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    
    <script>
        var lineChart = document.getElementById('lineChart');
        var expenses = <?php echo $expenses ?>;
        var incomes = <?php echo $incomes ?>;
        var data_expenses = Object.values(expenses);
        var data_incomes = Object.values(incomes);

        var myChart = new Chart(lineChart, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Nov', 'Dec'],
                datasets: [
                    {
                        label: 'Expenses',
                        data: data_expenses,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderWidth: 1
                    }, {
                        label: 'Incomes',
                        data: data_incomes,
                        backgroundColor: 'rgba(67, 119, 251, 0.5)',
                        borderWidth: 1
                    },
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var pieChart = document.getElementById('pieChart');
        var data_label = <?php echo $expense_categories ?>;
        var data_amount = <?php echo $expense_amount_per_category ?>;
        var pieChart = new Chart(pieChart, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: data_amount,
                    backgroundColor: ['red', 'yellow', 'blue', 'green', 'purple'],
                }],
                labels: data_label,
            },
            options: {
                legend: {
                    position: 'right',
                }
            }
        });

    </script>

@endpush
