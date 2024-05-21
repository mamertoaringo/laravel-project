<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-[#1ABC9C] py-2 text-white font-bold tracking-wider border border-[#1ABC9C] hover:bg-transparent transition duration-300']) }}>
    {{ $slot }}
</button>
