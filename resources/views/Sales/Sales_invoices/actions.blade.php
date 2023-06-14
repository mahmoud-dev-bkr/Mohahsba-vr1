@switch($type)
    @case('action')
        <div>
            <ul>
            <li><i class="fa-solid fa-eye"></i></li>
            <a href="{{ route('sales_invoices.update', $PurchaseInvoices->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
            @if ($PurchaseInvoices->residual > 0)

                <a href="{{ route('sales_invoices.payment', $PurchaseInvoices->id) }}"><li><i class="fa fa-credit-card"></i></li></a>
            @endif

            <form action="{{ route('sales_invoices.destroy', $PurchaseInvoices->id) }}" method="post">
                @csrf
                <button class="action-icon delete btn  btn-sm text-white" type="submit">
                    <li><i class="fa-solid fa-trash"></i></li></button>
            </form>
        </ul>
        </div>
    @break

    @default

@endswitch
