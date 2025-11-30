<x-main>
    <h1 class="text-3xl text-primary text-center font-bold py-16 capitalize">{{ __('Our Team') }}</h1>
    
    <div class="max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-4 gap-12 pb-16 px-4 xl:px-0">
        <div>
            <img 
                src="{{ asset('/img/team/dentist1.jpg') }}" 
                class=""
                alt="{{ __('Dr. Violet Wagner') }}"
            >
            <p class="text-2xl text-primary font-bold mt-4">{{ __('Dr. Violet Wagner') }}</p>
            <p class="text-lg text-gray-800 font-bold">{{ __('Dentist') }}</p>
            <p class="text-lg mt-4">{{ __('Expert in restorative dentistry with over 10 years of experience. Dr. Wagner is passionate about helping patients achieve healthy, beautiful smiles.') }}</p>
        </div>
        <div>
            <img 
                src="{{ asset('/img/team/dentist2.jpg') }}" 
                class=""
                alt="{{ __('Dr. Amanda Peterson') }}"
            >
            <p class="text-2xl text-primary font-bold mt-4">{{ __('Dr. Amanda Peterson') }}</p>
            <p class="text-lg text-gray-800 font-bold">{{ __('Dentist') }}</p>
            <p class="text-lg mt-4">{{ __('Specializes in pediatric dentistry and creating a fun, safe environment for kids. Dr. Peterson ensures every child leaves with a smile.') }}</p>
        </div>
        <div>
            <img 
                src="{{ asset('/img/team/nurse1.jpg') }}" 
                class=""
                alt="{{ __('Ellie Mueller') }}"
            >
            <p class="text-2xl text-primary font-bold mt-4">{{ __('Ellie Mueller') }}</p>
            <p class="text-lg text-gray-800 font-bold">{{ __('Nurse') }}</p>
            <p class="text-lg mt-4">{{ __('Dedicated to patient comfort and assisting in complex procedures. Ellie ensures that every patient feels relaxed and well-cared for.') }}</p>
        </div>
        <div>
            <img 
                src="{{ asset('/img/team/nurse2.jpg') }}" 
                class=""
                alt="{{ __('Rosie Wilson') }}"
            >
            <p class="text-2xl text-primary font-bold mt-4">{{ __('Rosie Wilson') }}</p>
            <p class="text-lg text-gray-800 font-bold">{{ __('Nurse') }}</p>
            <p class="text-lg mt-4">{{ __('Ensures a sterile and welcoming environment for all our patients. Rosie is known for her gentle approach and attention to detail.') }}</p>
        </div>
    </div>
</x-main>