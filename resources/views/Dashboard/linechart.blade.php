<div class="row mt-4">
        <div class="col-12">
            <h4 class="text-center"><strong style="color:#1c9168;">Sales and Revenue Overview</strong></h4>
            <div class="chart-container" style="position: relative; height: 400px; max-width: 100%;">
                <canvas id="salesRevenueChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // Data for the chart
    const salesRevenueData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [
            {
                label: 'Sales (₱)',
                data: [10000, 12000, 15000, 20000, 25000, 30000, 35000, 30000, 28000, 32000, 40000, 45000],
                borderColor: '#1c9168',
                backgroundColor: 'rgba(28, 145, 104, 0.2)',
                fill: true,
                tension: 0.4,
            },
            {
                label: 'Revenue (₱)',
                data: [8000, 10000, 13000, 18000, 22000, 27000, 33000, 28000, 26000, 30000, 38000, 42000],
                borderColor: '#3498db',
                backgroundColor: 'rgba(52, 152, 219, 0.2)',
                fill: true,
                tension: 0.4,
            }
        ]
    };

    // Configuration options
    const options = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { position: 'top' },
            title: {
                display: true,
                text: 'Monthly Sales and Revenue (₱)',
                font: { size: 18 }
            }
        },
        scales: {
            x: { title: { display: true, text: 'Months', font: { size: 14 } } },
            y: { 
                title: { display: true, text: 'Amount (₱)', font: { size: 14 } },
                ticks: { beginAtZero: true }
            }
        }
    };

    // Create the chart
    const ctx = document.getElementById('salesRevenueChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: salesRevenueData,
        options: options
    });
</script>