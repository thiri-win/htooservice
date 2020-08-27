<a href="/dashboard" class="flex items-center text-white py-2 pl-6 nav-item {{ active_nav('dashboard.index') }}">
    <i class="fas fa-tachometer-alt mr-3"></i>
    Dashboard
</a>
<a href="{{ route('employers.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item {{ active_nav('employers.index')}}">
    <i class="fas fa-users mr-3"></i>
    ဝန်ထမ်းများ
</a>
<a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item ">
    <i class="fas fa-table mr-3"></i>
    Incomes
</a>
<a href="{{ route('invoices.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item {{ active_nav('invoices.index') }}">
    <i class="fas fa-piggy-bank mr-3"></i>
    Invoices
</a>
<a href="{{ route('expenses.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item {{ active_nav('expenses.index') }}">
    <i class="fas fa-hand-holding-usd mr-3"></i>
    ကုန်ကျစရိတ်များ
</a>
<a href="{{ route('stocks.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item {{ active_nav('stocks.index') }}">
    <i class="fas fa-store-alt mr-3"></i>
    ပစ္စည်းအဝယ်စာရင်း
</a>
<a href="{{ route('sales.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item {{ active_nav('sales.index') }}">
    <i class="fas fa-coins mr-3"></i>
    ပစ္စည်းအရောင်းစာရင်း
</a>

<span class="uppercase flex items-center text-gray-400 opacity-75 pt-4 pl-6 nav-item">
    Settings
</span>

<a href="{{ route('experiences.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item {{ active_nav('experiences.index') }}">
    <i class="fas fa-cogs mr-3"></i>
    Experiences Level
</a>
<a href="{{ route('positions.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item {{ active_nav('positions.index') }}">
    <i class="fas fa-cogs mr-3"></i>
    Positions Level
</a>
<a href="{{ route('expense-categories.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item {{ active_nav('categories.index') }}">
    <i class="fas fa-cogs mr-3"></i>
    ကုန်ကျစရိတ်အမျိုးအစား
</a>
<a href="{{ route('stock-categories.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-6 nav-item {{ active_nav('stock-categories.index') }}">
    <i class="fas fa-cogs mr-3"></i>
    ကုန်ပစ္စည်းအမျိုးအစား
</a>
