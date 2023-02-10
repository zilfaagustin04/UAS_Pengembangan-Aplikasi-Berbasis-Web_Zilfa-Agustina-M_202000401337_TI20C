<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <x-button target="_blank" href="https://github.com/zilfaagustin04/UAS_Pengembangan-Aplikasi-Berbasis-Web_Zilfa-Agustina-M_202000401337_TI20C" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("You're logged in!")  }}
    </div>

    <section class="bg-gray-200 py-20">
        <div class="container mx-auto">
          <div class=" mx-auto p-6 bg-white rounded-lg shadow-lg">
            <img src="profile.jpg" class="w-36 h-36 rounded-full mb-5" alt="Profile Picture">
            <h2 class="text-xl font-bold mb-5">Zilfa Agustina Munawar</h2>
            <p class="text-gray-700 mb-3">Web Developer</p>
            <div class="flex flex-row mb-5">
              <a href="#" class="px-3 py-2 rounded-full bg-gray-300 text-gray-700 mr-3">Instagram</a>
              <a href="#" class="px-3 py-2 rounded-full bg-gray-300 text-gray-700 mr-3">GitHub</a>
              <a href="#" class="px-3 py-2 rounded-full bg-gray-300 text-gray-700">Facebook</a>
            </div>
            <p class="text-gray-700">Kuliah di Universitas Nusa Putra dengan jurusan Teknik Informatika</p>
          </div>
        </div>
      </section>
</x-app-layout>
