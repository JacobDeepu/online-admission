<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-8 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                <div class="flex items-center rounded-lg bg-white p-4 shadow-xl sm:rounded-lg">
                    <div class="mr-4 rounded-full bg-orange-100 p-3 text-orange-500">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600">
                            Total Applications
                        </p>
                        <p class="text-lg font-semibold text-gray-700" id="total">
                        </p>
                    </div>
                </div>
                <div class="flex items-center rounded-lg bg-white p-4 shadow-xl sm:rounded-lg">
                    <div class="mr-4 rounded-full bg-teal-100 p-3 text-teal-500">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="18" y1="8" x2="23" y2="13"></line>
                            <line x1="23" y1="8" x2="18" y2="13"></line>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600">
                            Payment Pending
                        </p>
                        <p class="text-lg font-semibold text-gray-700" id="pending">
                        </p>
                    </div>
                </div>
                <div class="flex items-center rounded-lg bg-white p-4 shadow-xl sm:rounded-lg">
                    <div class="mr-4 rounded-full bg-green-100 p-3 text-green-500">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600">
                            Payment Confirmed
                        </p>
                        <p class="text-lg font-semibold text-gray-700" id="paid">
                        </p>
                    </div>
                </div>
                <div class="flex items-center rounded-lg bg-white p-4 shadow-xl sm:rounded-lg">
                    <div class="mr-4 rounded-full bg-blue-100 p-3 text-blue-500">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600">
                            Today's Applications
                        </p>
                        <p class="text-lg font-semibold text-gray-700" id="today">

                        </p>
                    </div>
                </div>
            </div>
            <div class="grid gap-6 overflow-hidden sm:grid-cols-3">
                <div class="bg-white p-6 shadow-xl sm:rounded-lg">
                    <h2 class="font-semibold text-gray-800">
                        Today's Applications
                    </h2>
                    <canvas class="mt-4" id="daily-chart"></canvas>
                    <div class="flex justify-center space-x-3 text-sm text-gray-600">
                        <div class="flex items-center">
                            <span class="mr-1 inline-block h-3 w-3 rounded-full bg-indigo-400"></span>
                            <span>Successful</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-1 inline-block h-3 w-3 rounded-full bg-red-400"></span>
                            <span>Failed</span>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 shadow-xl sm:col-span-2 sm:rounded-lg">
                    <h2 class="font-semibold text-gray-800">
                        Current Month's Applications
                    </h2>
                    <canvas class="mt-4" id="monthly-chart"></canvas>
                    <div class="flex justify-center space-x-3 text-sm text-gray-600">
                        <div class="flex items-center">
                            <span class="mr-1 inline-block h-3 w-3 rounded-full bg-emerald-700"></span>
                            <span>Applications</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        getDashboardData('{!! url('/') !!}');
    });

    function getDashboardData(baseUrl) {
        fetch(baseUrl + "/registrations/data/")
            .then((response) => response.json())
            .then((data) => {
                updateDashboard(data.registrations);
                createMonthlyChart(data.registrations);
                createDailyChart(data.registrations);
            })
            .catch((error) => {
                console.error("Error fetching data:", error);
            });
    }

    function updateDashboard(data) {
        document.getElementById("total").innerText = data.total;
        document.getElementById("pending").innerText = data.pending;
        document.getElementById("paid").innerText = data.paid;
        document.getElementById("today").innerText = data.countToday;
    }

    function createMonthlyChart(data) {
        const monthlyChartConfig = {
            type: "line",
            data: {
                labels: data.dates,
                datasets: [{
                    label: "Applications",
                    data: data.counts,
                    borderColor: "#34d399",
                    backgroundColor: "#047857",
                    fill: false,
                    tension: 0.4,
                }, ],
            },
            options: {
                responsive: true,
                legend: {
                    display: false,
                },
                tooltips: {
                    mode: "index",
                    intersect: false,
                },
                hover: {
                    mode: "nearest",
                    intersect: true,
                },
                scales: {
                    x: {
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: "Date",
                        },
                    },
                    y: {
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: "Applications",
                        },
                    },
                },
            },
        };
        const monthlyChartCtx = document
            .getElementById("monthly-chart")
            .getContext("2d");
        new Chart(monthlyChartCtx, monthlyChartConfig);
    }

    function createDailyChart(data) {
        const dailyChartConfig = {
            type: "doughnut",
            data: {
                datasets: [{
                    data: [data.paidToday, data.pendingToday],
                    backgroundColor: ["#818cf8", "#f87171"],
                    label: "Applications",
                }, ],
                labels: ["Successful", "Failed"],
            },
            options: {
                responsive: true,
                cutoutPercentage: 80,
                legend: {
                    display: false,
                },
            },
        };
        const dailyChartCtx = document
            .getElementById("daily-chart")
            .getContext("2d");
        new Chart(dailyChartCtx, dailyChartConfig);
    }
</script>
