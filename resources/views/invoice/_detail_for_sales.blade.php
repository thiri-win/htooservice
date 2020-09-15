<td class="w-2/6">
    <select name="stock_category_id[]"
        class="w-full py-1">
        <option value="">-- Choose --</option>
        @foreach ($stock_categories as $category)            
            <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </select>
</td>

<td class="w-1/6">
    <input 
        class="w-full"
        type="text" 
        name="quantity[]"
        value="1">
</td>

<td class="w-1/6">
    <input 
        class="w-full"
        type="text" 
        name="unit_price[]">
</td>

<td class="w-1/6">
    <input 
        class="w-full"
        type="text" 
        name="total[]">
</td>

<td class="w-1/6">
    <button  type="button" class="new" name="add_stock" id="add_stock">Add Stock</button>
</td>