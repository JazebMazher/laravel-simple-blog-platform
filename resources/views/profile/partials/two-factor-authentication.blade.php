<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Two Factor Authentication') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Add additional security to your account using two factor authentication.") }}
        </p>
    </header>

    <form method="post"
          action="{{ auth()->user()->two_factor_secret ? route('two-factor.disable') : route('two-factor.enable') }}"
          class="mt-6 space-y-6">
        @csrf

        <div class="gap-4">
            @if (auth()->user()->two_factor_secret)
                @method('delete')
                <x-danger-button>{{ __('Disable') }}</x-danger-button>
            @else
                <x-primary-button>{{ __('Enable') }}</x-primary-button>
            @endif
        </div>
    </form>

    <div class="gap-4">
        @if(auth()->user()->two_factor_secret)
        <div>
            <div class="inline-flex mt-4 mb-4 p-1 bg-white">
                {{-- QR Code --}}
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
            </div>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Recovery Codes:
            </p>
            @foreach((array)auth()->user()->recoveryCodes() as $recoveryCode)
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ $recoveryCode }}
                </p>
            @endforeach
        </div>

        <form method="POST" action="{{ route('two-factor.recovery-codes') }}" class="mt-4">
            @csrf
            <x-primary-button>{{ __('Regenerate Recovery Codes') }}</x-primary-button>
        </form>
        @endif

        @php
            $sessionStatus = session('status') === 'two-factor-authentication-enabled' ?
            'Two factor authentication is enabled'
             : (session('status') === 'two-factor-authentication-disabled' ?
              'Two factor authentication is disabled' : '')
        @endphp

        @if ($sessionStatus)
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ __($sessionStatus) }}</p>
        @endif
    </div>
</section>
