<x-master-layout title="Employees">
    @section('content')
        <div class="bg-gray-50 max-w-full items-center shadow-lg overflow-hidden sm:rounded-lg">
            <div class="flex justify-between gap-x-20 px-4 py-5 border-b border-gray-200 sm:px-6">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Employees Information</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">All data employees</p>
                </div>
                <div>
                    <a href="{{ route('employee.create') }}"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">
                        Create
                        New
                        Employee</a>
                </div>
            </div>
            @forelse ($employees as $employee)
                <div
                    class="py-8 px-8 mx-2 max-w-full bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 my-2">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                {{ $employee->name }}
                            </p>
                            <p class="text-slate-500 font-medium">
                                {{ $employee->address }}
                            </p>
                        </div>
                        <form onsubmit="return confirm('Are You sure ?');"
                            action="{{ route('employee.update', $employee->id) }}" method="POST">
                            <a href="{{ route('employee.edit', $employee->id) }}"
                                class="px-4 py-2 text-sm text-sky-600 font-semibold rounded-xl border border-sky-200 hover:text-white hover:bg-sky-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-sky-600 focus:ring-offset-2">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-4 py-2 text-sm text-pink-600 font-semibold rounded-xl border border-pink-200 hover:text-white hover:bg-pink-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-pink-600 focus:ring-offset-2">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="text-center items-center px-4 py-8">
                    <p class="text-slate-500 font-medium">
                        - Data empty -
                    </p>
                </div>
            @endforelse
        </div>
    @endsection
</x-master-layout>
