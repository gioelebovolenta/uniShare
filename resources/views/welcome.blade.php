<x-layout>
    <div class="w-screen flex justify-between items-center pt-20 px-12">
        <div class="w-1/5">
            <img src="{{ Vite::asset('resources/images/guys_studying.png')}}" alt="guys_studying" class="w-full h-auto">
        </div>
            
        <div>
            <h1 class="font-bold text-6xl">Che cosa studi oggi?</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Cerca materiale" class="rounded-xl px-5 py-4 border hover:border-gray-400 transition-colors duration-300 w-full max-w-2xl">
            </form>
        </div>
            
        <div class="w-1/5">
            <img src="{{ Vite::asset('resources/images/books.png')}}" alt="Book" class="w-full h-auto">
        </div>
        
{{--     <section class="mt-10">
        <div>
            <x-supplies />
        </div>
    </section> --}}
    </div>
</x-layout>