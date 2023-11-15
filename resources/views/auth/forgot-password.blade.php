<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. 문제없습니다. 이메일 주소만 알려주시면 새로운 주소를 선택하실 수 있는 비밀번호 재설정 링크를 이메일로 보내드리겠습니다.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('이메일')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
