@unless($debtorsMaster->count()>0)
    <h4>Sin Informacion</h4>

@else
    <p> SHOWING  RECORDS FROM {{ $debtorsMaster->firstItem() }} TO {{ $debtorsMaster->lastItem() }} OF A TOTAL {{ $debtorsMaster->total() }} RECORDS </p>

    <table class="table">
        <thead>
            <tr>
                <th class="text-uppercase" scope="col">DEBTOR NO</th>
                <th class="text-uppercase" scope="col">NAME</th>
                <th class="text-uppercase" scope="col">Address 1</th>
                <th class="text-uppercase" scope="col">Address 2</th>
                <th class="text-uppercase" scope="col">Address 3</th>
                <th class="text-uppercase" scope="col">Address 4</th>
                <th class="text-uppercase" scope="col">Address 5</th>
                <th class="text-uppercase" scope="col">Address 6</th>
                <th class="text-uppercase" scope="col">Taxref</th>
                <th class="text-uppercase" scope="col">Salesmancode</th>
                <th class="text-uppercase" scope="col">ACCTION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($debtorsMaster as $debtorMaster)
            <tr>
                <th class="text-uppercase" >{{ $debtorMaster->debtorno }}</th>
                <td class="text-uppercase" > {{ $debtorMaster->name }} </td>
                <td class="text-uppercase" > {{ $debtorMaster->address1 }} </td>
                <td class="text-uppercase" > {{ $debtorMaster->address2 }} </td>
                <td class="text-uppercase" > {{ $debtorMaster->address3 }} </td>
                <td class="text-uppercase" > {{ $debtorMaster->address4 }} </td>
                <td class="text-uppercase" > {{ $debtorMaster->address5 }} </td>
                <td class="text-uppercase" > {{ $debtorMaster->address6 }} </td>
                <td class="text-uppercase" > {{ $debtorMaster->taxref }} </td>
                <td class="text-uppercase" > {{ $debtorMaster->salesmancode }} </td>
                <td>
                    <button type="button" class="btn btn-outline-warning" >
                        <i class="fas fa-edit fa-lg"></i>
                    </button>
                    <button type="button" class="btn btn-outline-danger" onclick="delete_row('@php echo base64_encode($debtorMaster->debtorno) @endphp');">
                        <i class="fas fa-eraser fa-lg"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $debtorsMaster->links() }}

@endunless