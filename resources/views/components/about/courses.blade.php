<ol class="relative border-s border-secondary-200 dark:border-secondary-700">
    @foreach ($courses as $course )
    <li class="mb-10 ms-4">
        <div
            class="absolute -start-1.5 mt-1.5 h-3 w-3 rounded-full border border-white bg-secondary-200 dark:border-secondary-900 dark:bg-secondary-700">
        </div>
        <h3 class="text-lg font-semibold text-secondary-900 dark:text-white">
            {{$course->institution}}
        </h3>
        <p class="mb-1 text-base font-normal text-secondary-500 dark:text-secondary-400">
            {{$course->name}}
        </p>
        <time class="mb-1 text-sm font-normal leading-none text-secondary-400 dark:text-secondary-500">
            {{ \Carbon\Carbon::parse($course->start_date)->format('F. Y') }} -
            {{ \Carbon\Carbon::parse($course->end_date)->format('F, Y') }}
        </time>
    </li>
    @endforeach
</ol>
