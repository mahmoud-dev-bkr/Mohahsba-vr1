@foreach($childs as $parent)
    <tr>
        @php
            $total_from = 0;
            $amont_froms = DB::table('ccount_estrictions')->where('from_to', 1)->where('account_id', $parent->id)->sum('ammount_from');
            $amont_to = DB::table('ccount_estrictions')->where('from_to', 0)->where('account_id', $parent->id)->sum('ammount_to');
            $move     = $amont_froms - $amont_to;
        @endphp

        <td>{{ $parent->name }}</td>
        <td>
            @if ($amont_froms == 0)
                -
            @else
                {{ $amont_froms }}
            @endif

        </td>
        <td>
            @if ($amont_to == 0)
                -
            @else
                {{ $amont_to }}
            @endif
        </td>
        <td>
            @if ($move < 0)
                {{ $move * -1 }}
            @elseif ($move == 0)
                -
            @else
                {{  $move }}
            @endif

        </td>


        @if(count($parent->children) > 0)
            @include('Reports.Report1_Tec.sub_account_list', [
                'childs' => $parent->children
            ])
        @endif

    </tr>
@endforeach
