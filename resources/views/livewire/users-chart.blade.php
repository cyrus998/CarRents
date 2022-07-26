<script src="https://cdn.tailwindcss.com"></script>
@if(Auth::user()->role=="1")

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users Analytics (Users Per Month)') }}
        </h2>
    </x-slot>
   
    <div class="linechartcontainer p-5">
 
        <div id="google-line-chart" style="width: 900px; height: 550px"></div>
 
    </div>
 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
 
        function drawChart() {
 
        var data = google.visualization.arrayToDataTable([
            ['Month Name', 'Registered Users Count'],
 
                @php
                foreach($lineChart as $d) {
                    echo "['".$d->month_name."', ".$d->count."],";
                }
                @endphp
        ]);
 
        var options = {
          title: 'Registered Users Per Month',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
 
          var chart = new google.visualization.LineChart(document.getElementById('google-line-chart'));
 
          chart.draw(data, options);
        }
    </script>

</x-app-layout>

<style>
.linechartcontainer {
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  align-items: center;
  text-align: center;
}
</style>


@endif

@if(Auth::user()->role=="0")
<div class="flex mt-5 w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex items-center justify-center w-12 bg-blue-500">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
            </svg>
        </div>
        
        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-blue-500 dark:text-blue-400">Restricted Access</span>
                <p class="text-sm text-gray-600 dark:text-gray-200">This account does not have administrative rights!</p>
            </div>
        </div>
    </div>
@endif