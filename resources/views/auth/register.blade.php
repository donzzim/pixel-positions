<x-layout>
    <x-page-heading>
        Register
    </x-page-heading>

    <x-forms.form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        <x-forms.input label="Your Name" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />

        <x-form.divider />

        <x-form.input label="Employer Name" name="employer" />
        <x-form.input label="Employer logo" name="logo" type="file" />

        <x-form.button>
            Create Account
        </x-form.button>
</x-layout>
