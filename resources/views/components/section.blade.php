@props(['title'])
<section class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    {{ $title }}
                </h2>
            </div>
        </header>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center text-gray-900">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>