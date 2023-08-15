<div>
    @php
    $period = \Carbon\CarbonPeriod::create($this->date_start, '1 month' , $this->date_end);
    @endphp
    @foreach ($period as $date)
    @foreach($this->stock_report as $key => $value)
    <tr>
        <td>{{ $date->format("F Y") }}</td>
        <td>{{ 'B-' . '' . str_pad('' . $this->stock_report[$key][$date->format("Y")][$date->format("n")]['id_inggridient'], 5, '0', STR_PAD_LEFT) }} </td>
        <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['name_inggridient'] }} ({{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['unit_inggridient'] }})</td>
        <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['begin_stock'] }}</td>
        <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['purchase'] }}</td>
        <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['stock_in'] }}</td>
        <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['stock_out'] }}</td>
        <td>{{ $this->stock_report[$key][$date->format("Y")][$date->format("n")]['last_stock'] }}</td>
    </tr>
    @endforeach
    @endforeach
</div>
