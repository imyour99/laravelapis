@php
    $collaboration_id = $_GET['collaboration_id'];
@endphp


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // setup
    const data = {
        labels: [
                @php
                    foreach ($interventions_success as $inter_success)
                    {
                    @endphp
                        '<?php echo $inter_success->month_name;?>',
                    @php
                    }
                @endphp


        ],

        datasets: [{
            label: 'INTERVENTIONS REUSSITES',
            data: [
                    @php
                        foreach ($interventions_success as $inter_success)
                        {
                        @endphp
                            '<?php echo $inter_success->count;?>',
                        @php
                        }
                    @endphp
            ],
            backgroundColor: ['rgba(39,194,145,1)'],
            borderColor: ['rgba(75, 192, 192, 1)'],

            borderWidth: 1,
            borderSkipped :false
        },
        {
            label: 'INTERVENTIONS NON REUSSITES',
            data: [
                    @php
                        foreach ($interventions_ko as $inter_ko)
                        {
                        @endphp
                            '<?php echo "-";echo $inter_ko->count;?>',
                        @php
                        }
                    @endphp
            ],
            backgroundColor: ['rgba(247, 97, 125, 1)' ],
            borderColor: ['rgba(255, 26, 104, 1)' ],
            borderWidth: 1,
            borderSkipped :false
        }]
    };

    // config
    const config = {
      type: 'bar',
      data,
      options: {

        scales: {
          x: {
            stacked:true,
            position: 'bottom'
          },
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('nombre-agence_{{ $collaboration_id }}'),
      config
    );
</script>
