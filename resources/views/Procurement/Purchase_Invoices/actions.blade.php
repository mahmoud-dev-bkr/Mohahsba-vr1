@switch($type)
    @case('action')
        <div>
            <ul>
            <li><i class="fa-solid fa-eye"></i></li>
            <a href="{{ route('Purchase_Invoices.update', $PurchaseInvoices->id) }}"><li><i class="fa-solid fa-pen-to-square"></i></li></a>
            <a href="{{ route('Purchase_Invoices.payment', $PurchaseInvoices->id) }}"><li><i class="fa fa-credit-card"></i></li></a>

            <form action="{{ route('Purchase_Invoices.destroy', $PurchaseInvoices->id) }}" method="post">
                @csrf

                <button class="action-icon delete btn  btn-sm text-white" type="submit">
                    <li><i class="fa-solid fa-trash"></i></li></button>
            </form>
        </ul>
        </div>
    @break

    @default

@endswitch
