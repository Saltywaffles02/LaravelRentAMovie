<form class="w-full min-w-[200px]">
    @csrf
    <div class="flex items-center">
        <input
            class="w-full bgprim fontmain border-0 rounded-md "
            placeholder="Title or genre"
        />

        <button
            class="rounded-md bg-green-700 py-2 px-4 border border-transparent text-center fontmain transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
            type="submit"
        >
            Search
        </button>
    </div>
</form>
