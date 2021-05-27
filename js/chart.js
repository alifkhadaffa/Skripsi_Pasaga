var ctx = document.getElementById('chartArea').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['L.Futsal', 'L.Basket', 'L.Voli', 'L.Tennis', 'L.Wall Climbing'],
        datasets: [{
            label: 'Jumlah Peminjam',
            data: [12, 10, 8, 10, 5],
            backgroundColor: [
                '#BFB133' , '#BFB133' , '#BFB133' , '#BFB133' , '#BFB133'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        title: {
            display: true,
            text: 'Statistik Jumlah Pemesan Fasilitas Pasaga per Bulan'
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});