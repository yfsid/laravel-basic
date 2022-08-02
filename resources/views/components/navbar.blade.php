<div class="flex items-center">
    <div class="flex-shrink-0">
        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
    </div>
    <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            @foreach ($navigations as $nav => $url)
                <a href="{{ route($url) }}"
                    class="{{ request()->is($url) ? 'bg-slate-900 text-white ' : '' }}text-gray-300 hover:bg-slate-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ $nav }}</a>
            @endforeach
        </div>
    </div>
</div>
