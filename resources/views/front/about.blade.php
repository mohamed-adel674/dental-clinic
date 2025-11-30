<x-main>
    <h1 class="text-3xl text-primary text-center font-bold py-16 capitalize">{{ __('About Us') }}</h1>
    <div class="max-w-7xl mx-auto px-4 xl:px-0 pb-16 space-y-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <img 
                src="{{ asset('/img/about/about1.jpg') }}" 
                alt="About"
            >
            <div class="space-y-4 text-lg">
                <p>{{ __('At our Dental Clinic in Cairo, we believe that a healthy smile is the foundation of a happy life. Established with a vision to provide world-class dental care, we combine state-of-the-art technology with a compassionate approach. Our team is dedicated to making every visit comfortable and stress-free.') }}</p>
                <p>{{ __('We offer a comprehensive range of services, from preventive care and routine check-ups to advanced cosmetic and restorative procedures. Our goal is to help you achieve optimal oral health and the smile you have always desired. We are committed to continuous learning and staying updated with the latest advancements in dentistry.') }}</p>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="space-y-4 text-lg">
                <p>{{ __('We understand that visiting the dentist can be anxious for some. That is why we have designed our clinic to be a relaxing haven. From our welcoming reception to our modern treatment rooms, every detail is curated for your comfort. We take the time to listen to your concerns and tailor treatment plans to your individual needs.') }}</p>
                <p>{{ __('Your safety is our top priority. We strictly adhere to the highest standards of sterilization and infection control. When you choose us, you are choosing a partner in your dental health journey. We look forward to welcoming you to our dental family.') }}</p>
            </div>
            <img 
            src="{{ asset('/img/about/about2.jpg') }}" 
            alt="About"
        >
        </div>
    </div>

    <div class="bg-primary py-16 flex flex-col items-center justify-center space-y-4">
        <h2 class="text-xl md:text-2xl font-bold text-gray-100">{{ __('Contact us for more informations, or') }}</h2>
        <a 
            href="#"
            class="border-2 border-gray-100 px-4 py-2 text-gray-100 hover:text-primary hover:bg-gray-100 rounded font-bold uppercase text-sm"
            title="{{ __('Book an Appointment') }}"
        >
            {{ __('Book an Appointment') }}
        </a>
    </div>
</x-main>