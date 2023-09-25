<form method="get" action="#">
    <label class="hidden" for="search"></label>
    <x-form.input class="w-40 md:w-auto" name="search" placeholder="Search . . ." value="{{ request('search') }}"></x-form.input>
    <button class="bg-orange-600 text-white px-3 py-2 rounded" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>