<table class="w-full" id="dynamic_detail">
    <thead>
        <tr>
            <td>Description</td>
            <td>Quantity</td>
            <td>Unit Price</td>
            <td>Total</td>
            <td></td>
        </tr>
    </thead>

    <tbody>
        <tr id="row1">
            @include('invoice._detail_for_services')
        </tr>
        <tr id="row2">
            @include('invoice._detail_for_sales')
        </tr>
    </tbody>
</table>
