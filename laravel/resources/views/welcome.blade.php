<x-guest-layout>
{{--    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">--}}
        <div class="w-full max-w-md bg-white rounded-lg overflow-hidden p-6 text-center">
            <div class="mb-6">
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ __('Choose Language / Odaberi jezik') }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 111.414 1.414l-4 4a1 1 01-1.414 0l-4-4a1 1 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('lang', ['locale' => 'en'])">
                            {{ __('English') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('lang', ['locale' => 'sr'])">
                            {{ __('Srpski') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="text-center mt-14 mb-14">
                <div class="text-gray-700 text-6xl font-bold">
                    {{ __('messages.welcome') }}
                </div>
            </div>

            <div class="py-2 flex items-center justify-center space-x-4">
                <x-secondary-button>
                    <a href="{{ route('login') }}" class="text-grey">{{ __('messages.login') }}</a>
                </x-secondary-button>
                <x-primary-button>
                    <a href="{{ route('register') }}" class="text-white">{{ __('messages.register') }}</a>
                </x-primary-button>
            </div>
        </div>
{{--    </div>--}}
</x-guest-layout>
